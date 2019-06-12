<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class IndexController extends Controller
{
    public function __construct(){
        $configuration = DB::table('configuration')->where('id', 1)->first();
        $parnter = DB::table('image_partner')->get();
        view()->share('configuration',$configuration);
        view()->share('parnter',$parnter);
    }

    public function getIndex() {
    	$project = DB::table('project')->limit(8)->orderBy('id', 'desc')->get();
    	$news = DB::table('news')->where('status', 0)->limit(7)->orderBy('id', 'desc')->get();
    	$job = DB::table('job')->limit(6)->orderBy('id', 'desc')->get();
    	return view('home', compact('configuration', 'project', 'news', 'job'));
    }

    public function getAbout() {
    	return view('about', compact('configuration'));
    }

    public function getContact() {
    	return view('contact', compact('configuration'));
    }

    public function getListNews() {
        $news = DB::table('news')->where('status', 0)->orderBy('id', 'desc')->paginate(6);
        $project = DB::table('project')->orderBy('id', 'desc')->limit(3)->get();
    	return view('list_news', compact('configuration', 'news', 'project'));
    }

    public function getNewsPost($slug) {
        $news = DB::table('news')->where('slug', $slug)->first();
        $project = DB::table('project')->orderBy('id', 'desc')->limit(3)->get();
        return view('news', compact('configuration', 'news', 'project'));
    }

    public function getListProject() {
        $project = DB::table('project')->orderBy('id', 'desc')->paginate(6);
        return view('list_project', compact('configuration', 'project'));
    }

    public function getProject($slug) {
        $project = DB::table('project')->where('slug', $slug)->first();
        $project_lq = DB::table('project')->where('slug','!=', $slug)->orderBy('id', 'desc')->limit(3)->get();
        return view('project', compact('configuration', 'project', 'project_lq'));
    }

    public function getListJob() {
        $job = DB::table('job')->orderBy('id', 'desc')->paginate(6);
        $project = DB::table('project')->orderBy('id', 'desc')->limit(3)->get(); 
        return view('list_job', compact('configuration', 'job', 'project'));
    }

    public function getJob($slug) {
        $job = DB::table('job')->where('slug', $slug)->first();
        $job_lq = DB::table('job')->where('slug', '!=', $slug)->orderBy('id','desc')->limit(4)->get();
        $career = DB::table('career')->get();
        return view('job', compact('configuration', 'job', 'career', 'job_lq'));
    }

    public function getSearch_project($slug) {
        $project = DB::table('project')->where('status', $slug)->paginate(6);
        return view('list_project', compact('configuration', 'project'));
    }

    public function search_project(Request $request) {
        $this->validate($request,
            [
                'name' => 'required',
            ],
            [
                'name.required' => 'Tìm dự án không được để trống.',
            ]);
        $search = $request->name;
        $project = DB::table('project')->where('name', 'LIKE', '%'.$search.'%')->paginate(6);
        return view('list_project', compact('configuration', 'project'));
    }

    public function getAbout_company() {
        $about_company = DB::table('about_company')->where('id', 1)->first();
        $project = DB::table('project')->orderBy('id', 'desc')->limit(3)->get();
        return view('about_company', compact('about_company', 'project'));
    }

    public function getAbout_organization() {
        $about_organization = DB::table('about_company')->where('id', 1)->first();
        $project = DB::table('project')->orderBy('id', 'desc')->limit(3)->get();
        return view('about_organization', compact('about_organization', 'project'));
    }

    public function getManger() {
        $manager = DB::table('manager')->orderBy('ordernum', 'asc')->get();
        $project = DB::table('project')->orderBy('id', 'desc')->limit(3)->get();
        return view('about_manager', compact('manager', 'project'));
    }

    public function getPar() {
        $par = DB::table('about_content')->where('id', 1)->first();
        $project = DB::table('project')->orderBy('id', 'desc')->limit(3)->get();
        return view('about_par', compact('project', 'par'));
    }

    public function getDevelope() {
        $develope = DB::table('about_content')->where('id', 2)->first();
        $project = DB::table('project')->orderBy('id', 'desc')->limit(3)->get();
        return view('about_develope', compact('project', 'develope'));
    }

    public function getBusiness() {
        $business = DB::table('about_content')->where('id', 3)->first();
        $project = DB::table('project')->orderBy('id', 'desc')->limit(3)->get();
        return view('about_business', compact('project', 'business'));
    }

    public function getImage_about() {
        $image = DB::table('about_image')->get();
        $project = DB::table('project')->orderBy('id', 'desc')->limit(3)->get();
        return view('about_image', compact('project', 'image'));
    }

}

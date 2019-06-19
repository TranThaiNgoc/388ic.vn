<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use Session;
use App\Http\Controllers\Common\Common;

class IndexController extends Controller
{
    public function __construct(){
        $configuration = DB::table('configuration')->where('id', 1)->first();
        $certificates = DB::table('certificate')->get();
        $parnter = DB::table('image_partner')->get();
        $company_profile = DB::table('company_profile')->get();
        view()->share('company_profile',$company_profile);
        view()->share('configuration',$configuration);
        view()->share('parnter',$parnter);
        view()->share('certificates',$certificates);
        (Session::get('locale') == '') ? Session::put('locale', 'vi') : '';
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

    public function postContact(Request $request) {
        $this->validate($request,
            [
                'name' => 'required|name|min:3|max:255',
                'email' => 'required|email',
                'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|max:11',
                'content' => 'required',
            ],
            [
                'name.required' => 'Vui lòng không để trống tên.',
                'name.name' => 'Tên không hợp lệ.',
                'name.min' => 'Tên có độ dài tối thiểu từ 3 đến 225 ký tự.',
                'name.max' => 'Tên có độ dài tối thiểu từ 3 đến 225 ký tự.',
                'email.required' => 'Email không được để trống.',
                'email.email' => 'Email không hợp lệ.',
                'phone.required' => 'Số điện thoại không được để trống.',
                'phone.regex' => 'Số điện thoại không hợp lệ.',
                'phone.min' => 'Số điện thoại có đồ dài từ 10 đến 11 số.',
                'phone.max' => 'Số điện thoại có đồ dài từ 10 đến 11 số.',
                'content.required' => 'Nội dung vui lòng không được để trống.',
            ]);
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'content' => $request->content,
            'created_at' => date('Y-m-d H:i:s'),
        ];
        DB::table('feedback')->insert($data);

        return redirect()->back()->with('thongbao', 'Phản hồi thành công.');
    }

    public function getContact() {
        $meta_title = '- Liên hệ';
    	return view('contact', compact('configuration', 'meta_title'));
    }

    public function getListNews() {
        $news = DB::table('news')->where('status', 0)->orderBy('id', 'desc')->paginate(6);
        $project = DB::table('project')->orderBy('id', 'desc')->limit(3)->get();
        $meta_title = '- Danh sách tin tức';
    	return view('list_news', compact('configuration', 'news', 'project', 'meta_title'));
    }

    public function getNewsPost($slug) {
        $news = DB::table('news')->where('slug', $slug)->first();
        $project = DB::table('project')->orderBy('id', 'desc')->limit(3)->get();
        $meta_title = '- '.$news->name;
        $meta_description = Common::_substr(strip_tags($news->content),100);
        $meta_image = $news->image;
        return view('news', compact('configuration', 'news', 'project', 'meta_title', 'meta_image', 'meta_description'));
    }

    public function getListProject() {
        $project = DB::table('project')->orderBy('id', 'desc')->paginate(6);
        $meta_title = '- Danh sách dự án';
        return view('list_project', compact('configuration', 'project', 'meta_title'));
    }

    public function getProject($slug) {
        $project = DB::table('project')->where('slug', $slug)->first();
        $project_lq = DB::table('project')->where('slug','!=', $slug)->orderBy('id', 'desc')->limit(3)->get();
        $meta_title = '- '.$project->name;
        $meta_description = Common::_substr(strip_tags($project->content),100);
        $meta_image = $project->image1;
        return view('project', compact('configuration', 'project', 'project_lq', 'meta_title', 'meta_image', 'meta_description'));
    }

    public function getListJob() {
        $job = DB::table('job')->orderBy('id', 'desc')->paginate(6);
        $project = DB::table('project')->orderBy('id', 'desc')->limit(3)->get();
        $meta_title = '- Danh sách tuyển dụng'; 
        return view('list_job', compact('configuration', 'job', 'project', 'meta_title'));
    }

    public function getJob($slug) {
        $job = DB::table('job')->where('slug', $slug)->first();
        $job_lq = DB::table('job')->where('slug', '!=', $slug)->orderBy('id','desc')->limit(4)->get();
        $career = DB::table('career')->get();
        $meta_title = '- '.$job->title;
        return view('job', compact('configuration', 'job', 'career', 'job_lq', 'meta_title'));
    }

    public function getSearch_project($slug) {
        $project = DB::table('project')->where('status', $slug)->paginate(6);
        $meta_title = '- Danh sách tìm kiếm';
        return view('list_project', compact('configuration', 'project', 'meta_title'));
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
        $meta_title = '- Danh sách tìm kiếm';
        return view('list_project', compact('configuration', 'project', 'meta_title'));
    }

    public function getAbout_company() {
        $about_company = DB::table('about_company')->where('id', 1)->first();
        $project = DB::table('project')->orderBy('id', 'desc')->limit(3)->get();
        $meta_title = '- Giới thiệu chung';
        return view('about_company', compact('about_company', 'project', 'meta_title'));
    }

    public function getAbout_organization() {
        $about_organization = DB::table('about_company')->where('id', 1)->first();
        $project = DB::table('project')->orderBy('id', 'desc')->limit(3)->get();
        $meta_title = '- Sơ đồ tổ chức';
        return view('about_organization', compact('about_organization', 'project', 'meta_title'));
    }

    public function getManger() {
        $manager = DB::table('manager')->orderBy('ordernum', 'asc')->get();
        $project = DB::table('project')->orderBy('id', 'desc')->limit(3)->get();
        $meta_title = '- Ban giám đốc';
        return view('about_manager', compact('manager', 'project', 'meta_title'));
    }

    public function getPar() {
        $par = DB::table('about_content')->where('id', 1)->first();
        $project = DB::table('project')->orderBy('id', 'desc')->limit(3)->get();
        $meta_title = '- Tầm nhìn sứ mệnh';
        return view('about_par', compact('project', 'par', 'meta_title'));
    }

    public function getDevelope() {
        $develope = DB::table('about_content')->where('id', 2)->first();
        $project = DB::table('project')->orderBy('id', 'desc')->limit(3)->get();
        $meta_title = '- Chiến lược phát triển';
        return view('about_develope', compact('project', 'develope', 'meta_title'));
    }

    public function getBusiness() {
        $business = DB::table('about_content')->where('id', 3)->first();
        $project = DB::table('project')->orderBy('id', 'desc')->limit(3)->get();
        $meta_title = '- Lĩnh vực kinh doanh';
        return view('about_business', compact('project', 'business', 'meta_title'));
    }

    public function getImage_about() {
        $image = DB::table('album')
        ->join('about_image', 'about_image.id_album', '=', 'album.id')
        ->select('album.id as album_id', 'album.name as album_name','album.name_en as album_name_en', 'about_image.*')->get();
        foreach($image as $key => $value) {
            $list_image[$value->id_album]['name'] = $value->album_name;
            $list_image[$value->id_album]['name_en'] = $value->album_name_en;
            $list_image[$value->id_album]['post'][] = $value;
        }

        $project = DB::table('project')->orderBy('id', 'desc')->limit(3)->get();
        $meta_title = '- Hình ảnh chung';
        return view('about_image', compact('project', 'image', 'meta_title', 'list_image'));
    }

    public function getCertificate($id) {
        $certificate = DB::table('certificate')->where('slug', $id)->first();
        $project = DB::table('project')->orderBy('id', 'desc')->limit(3)->get();
        $meta_title = '- Chứng chỉ';
        return view('certificate', compact('certificate', 'project', 'meta_title'));
    }
}

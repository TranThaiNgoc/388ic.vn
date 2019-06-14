<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Storage;
use App\news;
use Auth;

class NewsController extends Controller
{
    // public function __construct() {
    //     $users = DB::table('users')->get();
    //     foreach($users as $user) {
    //         $role = json_decode($user->roles);
    //     }
    //     view()->share('role', $role);
    // }

    public function getlist() {
    	$news = news::all();
    	return view('admin.news.list', compact('news', 'role'));
    }

    public function getadd() {
    	return view('admin.news.add');
    }

    public function postadd(Request $request) {
    	$this->validate($request, 
    		[
    			'name' => 'required|max:255|min:6',
    			'summary' => 'required',
    			'content' => 'required',
                'name_en' => 'required|max:255|min:6',
                'summary_en' => 'required',
                'content_en' => 'required',
    			'image' => 'image|required',
    			'status' => 'required'
    		],
    		[
    			'name.required' => 'Tên bài viết không được để trống.',
    			'name.max' => 'Tên bài viết có độ dài từ 6 đến 255 ký tự.',
    			'name.min' => 'Tên bài viết có độ dài từ 6 đến 255 ký tự.',
                'name_en.required' => 'Tên bài viết tiếng anh không được để trống.',
                'name_en.max' => 'Tên bài viết tiếng anh có độ dài từ 6 đến 255 ký tự.',
                'name_en.min' => 'Tên bài viết tiếng anh có độ dài từ 6 đến 255 ký tự.',
    			'summary.required' => 'Tóm tắt bài viết không được để trống.',
                'summary_en.required' => 'Tóm tắt bài viết tiếng anh không được để trống.',
    			'content.required' => 'Nội dung bài viết không được để trống.',
                'content_en.required' => 'Nội dung bài viết tiếng anh không được để trống.',
    			'image.image' => 'Hình bài viết không chính xác.',
    			'image.required' => 'Hình bài viết không được để trống',
    			'status.required' => 'Trạng thái bài viết không được để trống',
    		]);

    	$data = [
    		'name' => $request->name,
            'name_en' => $request->name_en,
    		'slug' =>str_slug(trim($request->name)),
    		'summary' => $request->summary,
            'summary_en' => $request->summary_en,
    		'content' => $request->content,
            'content_en' => $request->content_en,
    		'view' => 0,
    		'status' => $request->status,
    		'created_at' => date('Y-m-d H:m:s'),
    	];
    	if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $new_name_image = rand(1,999999) . '-' . $file->getClientOriginalName();
            $path = Storage::putFileAs(
                'public/uploads', $file, $new_name_image
            );
            $image = env('APP_URL').Storage::url($path);
            $data['image'] = $image;
        }
    	DB::table('news')->insert($data);

    	return redirect()->back()->with('thongbao','Thêm bài viết thành công.');
    }

    public function getedit($id) {
    	$news = news::find($id);
    	if(is_null($news)) {
    		abort('404');
    	}

    	return view('admin.news.edit', compact('news', 'role'));
    }

    public function postedit(Request $request, $id) {
    	$this->validate($request, 
            [
                'name' => 'required|max:255|min:6',
                'summary' => 'required',
                'content' => 'required',
                'name_en' => 'required|max:255|min:6',
                'summary_en' => 'required',
                'content_en' => 'required',
                'image' => 'image',
                'status' => 'required'
            ],
            [
                'name.required' => 'Tên bài viết không được để trống.',
                'name.max' => 'Tên bài viết có độ dài từ 6 đến 255 ký tự.',
                'name.min' => 'Tên bài viết có độ dài từ 6 đến 255 ký tự.',
                'name_en.required' => 'Tên bài viết tiếng anh không được để trống.',
                'name_en.max' => 'Tên bài viết tiếng anh có độ dài từ 6 đến 255 ký tự.',
                'name_en.min' => 'Tên bài viết tiếng anh có độ dài từ 6 đến 255 ký tự.',
                'summary.required' => 'Tóm tắt bài viết không được để trống.',
                'summary_en.required' => 'Tóm tắt bài viết tiếng anh không được để trống.',
                'content.required' => 'Nội dung bài viết không được để trống.',
                'content_en.required' => 'Nội dung bài viết tiếng anh không được để trống.',
                'image.image' => 'Hình bài viết không chính xác.',
                'status.required' => 'Trạng thái bài viết không được để trống',
            ]);
    	$news = DB::table('news')->where('id', $id)->select('image')->first();
    	$data = [
            'name' => $request->name,
            'name_en' => $request->name_en,
            'slug' =>str_slug(trim($request->name)),
            'summary' => $request->summary,
            'summary_en' => $request->summary_en,
            'content' => $request->content,
            'content_en' => $request->content_en,
            'view' => 0,
            'status' => $request->status,
            'created_at' => date('Y-m-d H:m:s'),
        ];
    	if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $new_name_image = rand(1,999999) . '-' . $file->getClientOriginalName();
            $path = Storage::putFileAs(
                'public/uploads', $file, $new_name_image
            );
            $image = env('APP_URL').Storage::url($path);
            $data['image'] = $image;
            if(!is_null($news)){
            	$image_delete = str_replace(env('APP_URL').'/storage', 'public', $news->image);
                Storage::delete($image_delete);
            }
        }
        DB::table('news')->where('id', $id)->update($data);

        return redirect()->back()->with('thongbao','Sửa bài viết thành công.');
    }

    public function getdelete($id) {
    	$news = news::find($id);
    	if(is_null($news)) {
    		abort('404');
    	}
        $image_delete = str_replace(env('APP_URL').'/storage', 'public', $news->image);
                Storage::delete($image_delete);
    	$news->delete();
    	return redirect()->back()->with('thongbao','Xóa bài viết thành công.');
    }
}

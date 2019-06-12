<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Storage;

class AboutController extends Controller
{
    public function getAbout_company() {
    	$about_company = DB::table('about_company')->where('id', 1)->first();
    	if(is_null($about_company)) {
    		abort('404');
    	}
    	return view('admin.about.about_company', compact('about_company'));
    }

    public function postAbout_company(Request $request) {
    	$this->validate($request,
    		[
    			'content' => 'required',
    			'image' => 'image',
    		],
    		[
    			'content.required' => 'Nội dung không được để trống.',
    			'image.image' => 'Hình ảnh không hợp lệ.',
    		]);
    	$data = [
    		'content' => $request->content,
    		'created_at' => date('Y-m-d H:i:s'),
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
    	DB::table('about_company')->where('id', 1)->update($data);

    	return redirect()->back()->with('thongbao', 'Cập nhật nội dung thành công.');
    }

    public function getAbout_organization() {
    	$about_organization = DB::table('about_company')->where('id', 1)->first();
    	return view('admin.about.about_organization', compact('about_organization'));
    }

    public function postAbout_organization(Request $request) {
    	$this->validate($request, 
    		[
    			'image_organization' => 'image',
    			'image_site_organization' => 'image',
    		],
    		[
    			'image_organization.image' => 'Hình sơ đồ tổ chức không hợp lệ.',
    			'image_site_organization.image' => 'Hình sơ đồ tổ chức trang web không hợp lệ.',
    		]);
    	if($request->hasFile('image_organization')) {
    		$file = $request->file('image_organization');
    		$new_name_image = rand(1,999999) . '-' .$file->getClientOriginalName();
    		$path = Storage::putFileAs('public/uploads', $file, $new_name_image);
    		$image = env('APP_URL').Storage::url($path);
    		$data['image_organization'] = $image;
    	}
    	if($request->hasFile('image_site_organization'))
        {
            $file = $request->file('image_site_organization');
            $new_name_image = rand(1,999999) . '-' . $file->getClientOriginalName();
            $path = Storage::putFileAs(
                'public/uploads', $file, $new_name_image
            );
            $image = env('APP_URL').Storage::url($path);
            $data['image_site_organization'] = $image;
        }
        DB::table('about_company')->where('id', 1)->update($data);

        return redirect()->back()->with('thongbao','Cập nhật thành công.');
    }

    public function postManager() {
    	$manager = DB::table('manager')->orderBy('ordernum','desc')->get();
    	return view('admin.about.manager', compact('manager'));
    }

    public function getAddManager() {
    	return view('admin.about.manager_add');
    }

    public function postAddManager(Request $request) {
    	$this->validate($request, 
    		[
    			'name' => 'required|name',
    			'image' => 'required|image',
    			'location' => 'required',
    			'ordernum' => 'required|integer',
    		],
    		[	
    			'name.required' => 'Tên thành viên không được để trống.',
    			'name.name' => 'Tên thành viên không hợp lệ.',
    			'image.required' => 'Hình ảnh không được để trống.',
    			'image.image' => 'Hình ảnh không hợp lệ',
    			'location.required' => 'Vị trí thành viên không được để trống.',
    			'ordernum.required' => 'Thứ tự thành viên không được để trống.',
    			'ordernum.integer' => 'Thứ tự thành viên không hợp lệ.',
    		]);
    	$data = [
    		'name' => $request->name,
    		'location' => $request->location,
    		'ordernum' => $request->ordernum,
    		'created_at' => date('Y-m-d H:i:s'),
    	];
    	if($request->hasFile('image')) {
    		$file = $request->file('image');
    		$new_name_image = rand(1,999999). '-' . $file->getClientOriginalName();
    		$path = Storage::putFileAs('public/uploads', $file, $new_name_image);
    		$image = env('APP_URL').Storage::url($path);
    		$data['image'] = $image;
    	}
    	DB::table('manager')->insert($data);

    	return redirect()->back()->with('thongbao', 'Thêm thành viên thành công.');
    }

    public function gettEditManager($id) {
    	$manager = DB::table('manager')->where('id', $id)->first();
    	return view('admin.about.manager_edit', compact('manager'));
    }

    public function postEditManager(Request $request, $id) {
    	$manager = DB::table('manager')->where('id', $id)->first();
    	if(is_null($manager)) {
    		abort('404');
    	}
    	$this->validate($request, 
    		[
    			'name' => 'required|name',
    			'image' => 'image',
    			'location' => 'required',
    			'ordernum' => 'required|integer',
    		],
    		[	
    			'name.required' => 'Tên thành viên không được để trống.',
    			'name.name' => 'Tên thành viên không hợp lệ.',
    			'image.image' => 'Hình ảnh không hợp lệ',
    			'location.required' => 'Vị trí thành viên không được để trống.',
    			'ordernum.required' => 'Thứ tự thành viên không được để trống.',
    			'ordernum.integer' => 'Thứ tự thành viên không hợp lệ.',
    		]);
    	$data = [
    		'name' => $request->name,
    		'location' => $request->location,
    		'ordernum' => $request->ordernum,
    		'created_at' => date('Y-m-d H:i:s'),
    	];
    	if($request->hasFile('image')) {
    		$file = $request->file('image');
    		$new_name_image = rand(1,999999). '-' . $file->getClientOriginalName();
    		$path = Storage::putFileAs('public/uploads', $file, $new_name_image);
    		$image = env('APP_URL').Storage::url($path);
    		$data['image'] = $image;
    		if(!is_null($manager)){
            	$image_delete = str_replace(env('APP_URL').'/storage', 'public', $manager->image);
                Storage::delete($image_delete);
            }
    	}
    	DB::table('manager')->where('id', $id)->update($data);

    	return redirect()->back()->with('thongbao', 'Cập nhật thành viên thành công.');
    }

    public function getDeleteManager($id) {
    	$manager = DB::table('manager')->where('id', $id);
    	if(is_null($manager->first())) {
    		abort('404');
    	}
    	$manager->delete();

    	return redirect()->back()->with('thongbao', 'Xóa thành viên thành công.');
    }

    public function getPar() {
    	$par = DB::table('about_content')->where('id', 1)->first();
    	return view('admin.about.par', compact('par'));
    }

    public function postPar(Request $request) {
    	$this->validate($request,
    		[
    			'content' => 'required'
    		],
    		[
    			'content.required' => 'Nội dung không được để trống.',
    		]);
    	$data = [
    		'name' => $request->name,
    		'slug' => str_slug(trim($request->name)),
    		'content' => $request->content,
    		'created_at' => date('Y-m-d H:i:s'),
    	];
    	DB::table('about_content')->where('id', 1)->update($data);	
    	return redirect()->back()->with('thongbao', 'Cập nhật thành công.');
    }

    public function getDevelope() {
    	$develope = DB::table('about_content')->where('id', 2)->first();
    	return view('admin.about.develope', compact('develope'));
    }

    public function postDevelope(Request $request) {
    	$this->validate($request,
    		[
    			'content' => 'required'
    		],
    		[
    			'content.required' => 'Nội dung không được để trống.',
    		]);
    	$data = [
    		'slug' => str_slug(trim($request->name)),
    		'content' => $request->content,
    		'created_at' => date('Y-m-d H:i:s'),
    	];
    	DB::table('about_content')->where('id', 2)->update($data);	
    	return redirect()->back()->with('thongbao', 'Cập nhật thành công.');
    }

    public function getBusiness() {
    	$business = DB::table('about_content')->where('id', 3)->first();
    	return view('admin.about.business', compact('business'));
    }

    public function postBusiness(Request $request) {
    	$this->validate($request,
    		[
    			'content' => 'required'
    		],
    		[
    			'content.required' => 'Nội dung không được để trống.',
    		]);
    	$data = [
    		'slug' => str_slug(trim($request->name)),
    		'content' => $request->content,
    		'created_at' => date('Y-m-d H:i:s'),
    	];
    	DB::table('about_content')->where('id', 3)->update($data);	
    	return redirect()->back()->with('thongbao', 'Cập nhật thành công.');
    }

    public function getImage_about() {
    	$image_about = DB::table('about_image')->get();
    	return view('admin.about.image_about', compact('image_about'));
    }

    public function getAdd_Image_about() {
    	return view('admin.about.add_image_about');
    }

    public function postAdd_Image_about(Request $request) {
    	$this->validate($request,
    		[
    			'image' => 'image'
    		],
    		[
    			'image.image' => 'Hình ảnh không hợp lệ.',
    		]);
    	$data = [
    		'created_at' => date('Y-m-d H:i:s')
    	];
    	if($request->hasFile('image')) {
    		$file = $request->file('image');
    		$new_name_image = rand(1,999999). '-' . $file->getClientOriginalName();
    		$path = Storage::putFileAs('public/uploads', $file, $new_name_image);
    		$image = env('APP_URL').Storage::url($path);
    		$data['image'] = $image;
    	}
    	DB::table('about_image')->insert($data);

    	return redirect()->back()->with('thongbao', 'Cập nhật hình ảnh thành công.');
    }

    public function getDelete_image_about($id) {
    	$image_about = DB::table('about_image')->where('id', $id)->first();
    	if(is_null($image_about)) {
    		abort('404');
    	}
    	$image_delete = str_replace(env('APP_URL').'/storage', 'public', $image_about->image);
        Storage::delete($image_delete);
        DB::table('about_image')->where('id', $id)->delete();
    	return redirect()->back()->with('thongbao','Xóa hình ảnh thành công.');
    }

    public function getAdd_partner() {
        return view('admin.partner.add');
    }

    public function postAdd_partner(Request $request) {
        $this->validate($request, 
            [
                'image' => 'image',
                'name' => 'required|name'
            ],
            [
                'image.image' => 'Hình ảnh không hợp lệ.',
                'name.required' => 'Tên đối tác không được để trống.',
                'name.name' => 'Tến đối tác không hợp lệ',
            ]);
        $data = [
            'name' => $request->name,
            'created_at' => date('Y-m-d H:i:s'),
        ]; 
        if($request->hasFile('image')) {
            $file = $request->file('image');
            $new_name_image = rand(1,999999). '-' . $file->getClientOriginalName();
            $path = Storage::putFileAs('public/uploads', $file, $new_name_image);
            $image = env('APP_URL').Storage::url($path);
            $data['image'] = $image;
        }
        DB::table('image_partner')->insert($data);

        return redirect()->back()->with('thongbao', 'Thêm logo thành công.');
    }

    public function getPartner() {
        $partner = DB::table('image_partner')->get();
        return view('admin.partner.list', compact('partner'));
    }

    public function getDelete_parnter($id) {
        $parnter = DB::table('image_partner')->where('id', $id);
        if(is_null($parnter->first())) {
            abort('404');
        }
        $parnter->delete();

        return redirect()->back()->with('thongbao', 'Xóa logo đối tác thành công.');
    }

    public function getFeedback() {
        $feedback = DB::table('feedback')->get();
        return view('admin.feedback.list', compact('feedback'));
    }

    public function getEdit_Feedback($id) {
        $feedback = DB::table('feedback')->where('id', $id)->first();
        if(is_null($feedback)) {
            abort('404');
        }
        return view('admin.feedback.edit', compact('feedback'));
    }

    public function postEdit_Feedback(Request $request, $id) {
        $this->validate($request,
            [
                'status' => 'required',
            ],
            [
                'status.required' => 'Trạng thái phản hồi không được để trống.',
            ]);
        $data = [
            'status' => $request->status,
            'created_at' => date('Y-m-d H:i:s'),
        ];
        DB::table('feedback')->where('id', $id)->update($data);

        return redirect()->back()->with('thongbao', 'Đã có phản hồi.');
    }

    public function postDelete_Feedback($id) {
        $feedback = DB::table('feedback')->where('id', $id);
        if(is_null($feedback)) {
            abort('404');
        }
        $feedback->delete();

        return redirect()->back()->with('thongbao', 'Xóa phản hồi thành công.');
    }

}
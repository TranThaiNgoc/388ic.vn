<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CertificateController extends Controller
{
     public function getList_certificate() {
     	$certificate = DB::table('certificate')->get();
     	return view('admin.certificate.list', compact('certificate'));
    }

    public function getAdd_certificate() {
    	return view('admin.certificate.add');
    }

    public function postAdd_certificate(Request $request) {
    	$this->validate($request,
    		[
    			'name' => 'required|min:3|max:255',
    			'content' => 'required'
    		],
    		[
    			'name.required' => 'Tên chứng chỉ không được để trống.',
    			'name.min' => 'Tên  chứng chỉ có độ dài từ 3 đến 255 ký tự.',
    			'name.max' => 'Tên  chứng chỉ có độ dài từ 3 đến 255 ký tự.',
    			'content.required' => 'Nội dung chứng chỉ không được để trống.',
    		]);
    	$data = [
    		'name' => $request->name,
    		'slug' => str_slug(trim($request->name)),
    		'content' => $request->content,
    		'created_at' => date('Y-m-d H:i:s'),
    	];
    	DB::table('certificate')->insert($data);

    	return redirect()->back()->with('thongbao', 'Thêm chứng chỉ thành công.');
    }

    public function getEdit_certificate($id) {
    	$certificate = DB::table('certificate')->where('id', $id)->first();
    	if(is_null($certificate)) {
    		abort('404');
    	}
    	return view('admin.certificate.edit', compact('certificate'));
    }

    public function postEdit_certificate(Request $request, $id) {
    	$this->validate($request,
    		[
    			'name' => 'required|min:3|max:255',
    			'content' => 'required'
    		],
    		[
    			'name.required' => 'Tên chứng chỉ không được để trống.',
    			'name.min' => 'Tên  chứng chỉ có độ dài từ 3 đến 255 ký tự.',
    			'name.max' => 'Tên  chứng chỉ có độ dài từ 3 đến 255 ký tự.',
    			'content.required' => 'Nội dung chứng chỉ không được để trống.',
    		]);
    	$data = [
    		'name' => $request->name,
    		'slug' => str_slug(trim($request->name)),
    		'content' => $request->content,
    		'created_at' => date('Y-m-d H:i:s'),
    	];
    	DB::table('certificate')->where('id', $id)->update($data);

    	return redirect()->back()->with('thongbao', 'Cập nhật chứng chỉ thành công.');
    }

    public function getDelete_certificate($id) {
    	$certificate = DB::table('certificate')->where('id', $id);
    	if(is_null($certificate->first())) {
    		abort('404');
    	}
    	$certificate->delete();

    	return redirect()->back()->with('thongbao', 'Xóa chứng chỉ thành công.');
    }
}

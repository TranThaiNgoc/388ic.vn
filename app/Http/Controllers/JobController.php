<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\job;
use Storage;
use DB;

class JobController extends Controller
{
    public function getlist() {
        $job = job::all();
    	return view('admin.job.list', compact('job'));
    }

    public function getadd() {
        $career = DB::table('career')->get();
    	return view('admin.job.add', compact('career'));
    }

    public function postadd(Request $request) {
        if(!array_key_exists($request->experience,config('master_admin.kinhnghiem'))) {
            abort('404');
        }
        if(!array_key_exists($request->degree,config('master_admin.bangcap'))) {
            abort('404');
        }
        if(!array_key_exists($request->sex,config('master_admin.gioitinh'))) {
            abort('404');
        }
        if(!array_key_exists($request->money,config('master_admin.mucluong'))) {
            abort('404');
        }
        $career_ = DB::table('career')->pluck('slug')->toArray();
        if(!in_array($request->career, $career_)) {
            abrot('404');
        }
        
        $this->validate($request, 
            [
                'title' => 'required|name|min:3|max:255',
                'title_en' => 'required|name|min:3|max:255',
                'description' => 'required',
                'description_en' => 'required',
                'right' => 'required',
                'right_en' => 'required',
                'number' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/',
                'experience' => 'required',
                'experience_en' => 'required',
                'degree' => 'required',
                'degree_en' => 'required',
                'sex' => 'required',
                'sex_en' => 'required',
                'deadline_day' => 'required',
                'contact' => 'required|name',
                'job_requirements' => 'required',
                'job_requirements_en' => 'required',
                'request_profile' => 'required',
                'request_profile_en' => 'required',
                'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:9|max:11',
                'money' => 'required',
                'career' => 'required',
                'vacancies' => 'required',
                'career_en' => 'required',
                'location_en' => 'required',
                'image' => 'required|image',
            ],
            [
                'title.required' => 'Tên chức danh không được để trống.',
                'title.name' => 'Tên chức danh không hợp lệ.',
                'title.min' => 'Tên chức danh có độ dài tối đa từ 3 đến 255 ký tự',
                'title.max' => 'Tên chức danh có độ dài tối đa từ 3 đến 255 ký tự',
                'title_en.required' => 'Tên chức danh tiếng anh không được để trống.',
                'title_en.name' => 'Tên chức danh tiếng anh không hợp lệ.',
                'title_en.min' => 'Tên chức danh tiếng anh có độ dài tối đa từ 3 đến 255 ký tự',
                'title_en.max' => 'Tên chức danh tiếng anh có độ dài tối đa từ 3 đến 255 ký tự',
                'description.required' => 'Mô tả công việc không được để trống.',
                'description_en.required' => 'Mô tả công việc tiếng anh  không được để trống.',
                'right.required' => 'Quyền lợi được hưởng không được để trống.',
                'right_en.required' => 'Quyền lợi tiếng anh được hưởng không được để trống.',
                'number.required' => 'Số lượng không được để trống.',
                'number.regex' => 'Số lượng không hợp lệ.',
                'experience.required' => 'Kinh nghiệm không được để trống.',
                'experience_en.required' => 'Kinh nghiệm tiếng anh không được để trống.',
                'degree.required' => 'bằng cấp không được để trống.',
                'degree_en.required' => 'bằng cấp tiếng anh không được để trống.',
                'sex.required' => 'Giới tính không được để trống.',
                'sex_en.required' => 'Giới tính tiếng anh không được để trống.',
                'deadline_day.required' => 'Ngày hết hạn không được để trống.',
                'contact.required' => 'Tên người liên hệ không được để trống.',
                'contact.name' => 'Tên người liên hệ không hợp lệ.',
                'job_requirements.required' => 'Yêu cầu công việc không được để trống.',
                'job_requirements_en.required' => 'Yêu cầu công việc tiếng anh không được để trống.',
                'request_profile.required' => 'Yêu cầu hồ sơ không được để trống',
                'request_profile_en.required' => 'Yêu cầu hồ sơ  tiếng anh không được để trống',
                'phone.required' => 'Số điện thoại không được để trống.',
                'phone.regex' => 'Số điện thoại không hợp lệ.',
                'phone.min' => 'Số điện thoại có độ dài tối đa từ 9 đến 11 số.',
                'phone.max' => 'Số điện thoại có độ dài tối đa từ 9 đến 11 số.',
                'money.required' => 'Mức lương không được để trống.',
                'career.required' => 'Ngành nghề không được để trống.',
                'vacancies.required' => 'Vị trí tuyển dụng không được để trống.',
                'career_en.required' => 'Ngành nghề tiếng anh không được để trống.',
                'location_en.required' => 'Vị trí tiếng anh không được để trống.',
                'image.required' => 'Hình ảnh không được để trống.',
                'immage.image' => 'Hỉnh ảnh không hợp lệ.',
            ]);

        $data = [
            'title' => $request->title,
            'title_en' => $request->title_en,
            'slug' => str_slug(trim($request->title)),
            'description' => $request->description,
            'description_en' => $request->description_en,
            'right' => $request->right,
            'right_en' => $request->right_en,
            'number' => $request->number,
            'experience' => $request->experience,
            'experience_en' => $request->experience_en,
            'degree' => $request->degree,
            'degree_en' => $request->degree_en,
            'sex' => $request->sex,
            'sex_en' => $request->sex_en,
            'deadline' => $request->deadline_day,
            'contact' => $request->contact,
            'job_requirements' => $request->job_requirements,
            'job_requirements_en' => $request->job_requirements_en,
            'request_profile' => $request->request_profile,
            'request_profile_en' => $request->request_profile_en,
            'phone' => $request->phone,
            'money' => $request->money,
            'career' => $request->career,
            'vacancies' => $request->vacancies,
            'career_en' => $request->career_en,
            'location_en' => $request->location_en,
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
        DB::table('job')->insert($data);

        return redirect()->back()->with('thongbao', 'Thêm tuyển dụng thành công.');
    }

    public function getedit($id) {
        $job = job::find($id);
        if(is_null($job)) {
            abort('404');
        }
        $career = DB::table('career')->get();
        return view('admin.job.edit', compact('job', 'career'));
    }

    public function postedit(Request $request, $id) {
        $job = DB::table('job')->where('id', $id);
        if(is_null($job->first())) {
            abort('404');
        }
        if(!array_key_exists($request->experience,config('master_admin.kinhnghiem'))) {
            abort('404');
        }
        if(!array_key_exists($request->degree,config('master_admin.bangcap'))) {
            abort('404');
        }
        if(!array_key_exists($request->sex,config('master_admin.gioitinh'))) {
            abort('404');
        }
        if(!array_key_exists($request->money,config('master_admin.mucluong'))) {
            abort('404');
        }
        $career_ = DB::table('career')->pluck('slug')->toArray();
        if(!in_array($request->career, $career_)) {
            abrot('404');
        }
        
        $this->validate($request, 
            [
                'title' => 'required|name|min:3|max:255',
                'title_en' => 'required|name|min:3|max:255',
                'description' => 'required',
                'description_en' => 'required',
                'right' => 'required',
                'right_en' => 'required',
                'number' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/',
                'experience' => 'required',
                'experience_en' => 'required',
                'degree' => 'required',
                'degree_en' => 'required',
                'sex' => 'required',
                'sex_en' => 'required',
                'deadline_day' => 'required',
                'contact' => 'required|name',
                'job_requirements' => 'required',
                'job_requirements_en' => 'required',
                'request_profile' => 'required',
                'request_profile_en' => 'required',
                'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:9|max:11',
                'money' => 'required',
                'career' => 'required',
                'vacancies' => 'required',
                'career_en' => 'required',
                'location_en' => 'required',
                'image' => 'image',
            ],
            [
                'title.required' => 'Tên chức danh không được để trống.',
                'title.name' => 'Tên chức danh không hợp lệ.',
                'title.min' => 'Tên chức danh có độ dài tối đa từ 3 đến 255 ký tự',
                'title.max' => 'Tên chức danh có độ dài tối đa từ 3 đến 255 ký tự',
                'title_en.required' => 'Tên chức danh tiếng anh không được để trống.',
                'title_en.name' => 'Tên chức danh tiếng anh không hợp lệ.',
                'title_en.min' => 'Tên chức danh tiếng anh có độ dài tối đa từ 3 đến 255 ký tự',
                'title_en.max' => 'Tên chức danh tiếng anh có độ dài tối đa từ 3 đến 255 ký tự',
                'description.required' => 'Mô tả công việc không được để trống.',
                'description_en.required' => 'Mô tả công việc tiếng anh  không được để trống.',
                'right.required' => 'Quyền lợi được hưởng không được để trống.',
                'right_en.required' => 'Quyền lợi tiếng anh được hưởng không được để trống.',
                'number.required' => 'Số lượng không được để trống.',
                'number.regex' => 'Số lượng không hợp lệ.',
                'experience.required' => 'Kinh nghiệm không được để trống.',
                'experience_en.required' => 'Kinh nghiệm tiếng anh không được để trống.',
                'degree.required' => 'bằng cấp không được để trống.',
                'degree_en.required' => 'bằng cấp tiếng anh không được để trống.',
                'sex.required' => 'Giới tính không được để trống.',
                'sex_en.required' => 'Giới tính tiếng anh không được để trống.',
                'deadline_day.required' => 'Ngày hết hạn không được để trống.',
                'contact.required' => 'Tên người liên hệ không được để trống.',
                'contact.name' => 'Tên người liên hệ không hợp lệ.',
                'job_requirements.required' => 'Yêu cầu công việc không được để trống.',
                'job_requirements_en.required' => 'Yêu cầu công việc tiếng anh không được để trống.',
                'request_profile.required' => 'Yêu cầu hồ sơ không được để trống',
                'request_profile_en.required' => 'Yêu cầu hồ sơ  tiếng anh không được để trống',
                'phone.required' => 'Số điện thoại không được để trống.',
                'phone.regex' => 'Số điện thoại không hợp lệ.',
                'phone.min' => 'Số điện thoại có độ dài tối đa từ 9 đến 11 số.',
                'phone.max' => 'Số điện thoại có độ dài tối đa từ 9 đến 11 số.',
                'money.required' => 'Mức lương không được để trống.',
                'career.required' => 'Ngành nghề không được để trống.',
                'vacancies.required' => 'Vị trí tuyển dụng không được để trống.',
                'career_en.required' => 'Ngành nghề tiếng anh không được để trống.',
                'location_en.required' => 'Vị trí tiếng anh không được để trống.',
                'image.image' => 'Hìn ảnh không hợp lệ.',
            ]);
        $jobs = DB::table('job')->where('id', $id)->select('image')->first();
        $data = [
            'title' => $request->title,
            'title_en' => $request->title_en,
            'slug' => str_slug(trim($request->title)),
            'description' => $request->description,
            'description_en' => $request->description_en,
            'right' => $request->right,
            'right_en' => $request->right_en,
            'number' => $request->number,
            'experience' => $request->experience,
            'experience_en' => $request->experience_en,
            'degree' => $request->degree,
            'degree_en' => $request->degree_en,
            'sex' => $request->sex,
            'sex_en' => $request->sex_en,
            'deadline' => $request->deadline_day,
            'contact' => $request->contact,
            'job_requirements' => $request->job_requirements,
            'job_requirements_en' => $request->job_requirements_en,
            'request_profile' => $request->request_profile,
            'request_profile_en' => $request->request_profile_en,
            'phone' => $request->phone,
            'money' => $request->money,
            'career' => $request->career,
            'vacancies' => $request->vacancies,
            'career_en ' => $request->career_en,
            'location_en ' => $request->location_en,
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
            if(!is_null($jobs)){
                $image_delete = str_replace(env('APP_URL').'/storage', 'public', $jobs->image);
                Storage::delete($image_delete);
            }
        }
        $job->update($data);

        return redirect()->back()->with('thongbao', 'Sửa tuyển dụng thành công.');
    }

    public function getdelete($id) {
        $job = job::find($id);
        if(is_null($job)) {
            abrot('404');
        }
        $job->delete();

        return redirect()->back()->with('thongbao', 'Xóa tuyển dụng thành công.');
    }
}

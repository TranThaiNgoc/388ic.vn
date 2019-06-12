<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('locale/{locale}', function($locale) {
	Session::put('locale', $locale);
	return redirect()->back();
});
Route::get('/', 'IndexController@getIndex')->name('home');
Route::get('gioi-thieu.html', 'IndexController@getAbout')->name('about');
Route::get('gioi-thieu-chung.html', 'IndexController@getAbout_company')->name('about_company');
Route::get('so-do-to-chuc.html', 'IndexController@getAbout_organization')->name('about_organization');
Route::get('ban-giam-doc.html', 'IndexController@getManger')->name('about_manager');
Route::get('tam-nhin-su-menh.html', 'IndexController@getPar')->name('about_par');
Route::get('chien-luot-phat-trien.html', 'IndexController@getDevelope')->name('about_develope');
Route::get('linh-vuc-kinh-doanh.html', 'IndexController@getBusiness')->name('about_business');
Route::get('hinh-anh-hoat-dong.html', 'IndexController@getImage_about')->name('about_image');
Route::get('lien-he.html', 'IndexController@getContact')->name('contact');
Route::post('lien-he.html', 'IndexController@postContact');
Route::get('danh-sach-bai-viet.html', 'IndexController@getListNews')->name('list_news');
Route::get('bai-viet-chi-tiet/{slug}.html', 'IndexController@getNewsPost')->name('news');
Route::get('danh-sach-du-an.html', 'IndexController@getListProject')->name('list_project');
Route::get('du-an-chi-tiet/{slug}.html', 'IndexController@getProject')->name('project');
Route::get('danh-sach-tuyen-dung.html', 'IndexController@getListJob')->name('list_job');
Route::get('tuyen-dung/{slug}.html', 'IndexController@getJob')->name('job');
Route::get('du-an/{slug}.html', 'IndexController@getSearch_project')->name('search_project');
Route::get('tim-du-an', 'IndexController@search_project')->name('search');
Route::get('chung-chi.html', 'IndexController@getList_Certificate')->name('list_certificate');
Route::get('chung-chi/{slug}.html', 'IndexController@getCertificate')->name('certificate');
Route::get('logo-doi-tac', 'IndexController@getLogo_parnter');

Auth::routes();
Route::group(['prefix' => 'admin', 'middleware' => ['auth']],function(){
	Route::get('/','HomeController@getAdmin')->name('admin');
	
	Route::group(['prefix' => 'job', 'middleware' => ['role:supperadmin,admin']],function(){
		Route::get('/', 'JobController@getlist')->name('admin.job');
		Route::get('add', 'JobController@getadd')->name('admin.job.add');
		Route::post('add', 'JobController@postadd');
		Route::get('edit/{id}', 'JobController@getedit')->name('admin.job.edit');
		Route::post('edit/{id}', 'JobController@postedit');
		Route::get('delete/{id}', 'JobController@getdelete')->name('admin.job.delete');
	});

	Route::group(['prefix' => 'project', 'middleware' => ['role:supperadmin,admin']],function(){
		Route::get('/', 'ProjectController@getlist')->name('admin.project');
		Route::get('add', 'ProjectController@getadd')->name('admin.project.add');
		Route::post('add', 'ProjectController@postadd');
		Route::get('edit/{id}', 'ProjectController@getedit')->name('admin.project.edit');
		Route::post('edit/{id}', 'ProjectController@postedit');
		Route::get('delete/{id}', 'ProjectController@getdelete')->name('admin.project.delete');
	});

	Route::group(['prefix' => 'news', 'middleware' => ['role:supperadmin,admin,user']],function(){
		Route::get('/', 'NewsController@getlist')->name('admin.news');
		Route::get('add', 'NewsController@getadd')->name('admin.news.add');
		Route::post('add', 'NewsController@postadd');
		Route::get('edit/{id}', 'NewsController@getedit')->name('admin.news.edit');
		Route::post('edit/{id}', 'NewsController@postedit');
		Route::get('delete/{id}', 'NewsController@getdelete')->name('admin.news.delete');
	});

	Route::group(['prefix' => 'career', 'middleware' => ['role:supperadmin']],function(){
		Route::get('/', 'CareerController@getlist')->name('admin.career');
		Route::get('add', 'CareerController@getadd')->name('admin.career.add');
		Route::post('add', 'CareerController@postadd');
		Route::get('edit/{id}', 'CareerController@getedit')->name('admin.career.edit');
		Route::post('edit/{id}', 'CareerController@postedit');
		Route::get('delete/{id}', 'CareerController@getdelete')->name('admin.career.delete');
	});
	Route::group(['prefix' => 'about', 'middleware' => ['role:supperadmin']],function(){
		Route::get('gioi-thieu-chung', 'AboutController@getAbout_company')->name('admin.about_company');
		Route::post('gioi-thieu-chung', 'AboutController@postAbout_company');
		Route::get('so-do-to-chuc', 'AboutController@getAbout_organization')->name('admin.about_organization');
		Route::post('so-do-to-chuc', 'AboutController@postAbout_organization');
		Route::get('ban-giam-doc', 'AboutController@postManager')->name('admin.manager');
		Route::get('them-thanh-vien', 'AboutController@getAddManager')->name('admin.manager.add');
		Route::post('them-thanh-vien', 'AboutController@postAddManager');
		Route::get('sua-thanh-vien/{id}', 'AboutController@gettEditManager')->name('admin.manager_edit');
		Route::post('sua-thanh-vien/{id}', 'AboutController@postEditManager');
		Route::get('xoa-thanh-vien/{id}', 'AboutController@getDeleteManager')->name('admin.manager_delete');
		Route::get('tam-nhin-su-menh', 'AboutController@getPar')->name('admin.par');
		Route::post('tam-nhin-su-menh', 'AboutController@postPar');
		Route::get('chien-luot-phat-trien', 'AboutController@getDevelope')->name('admin.develope');
		Route::post('chien-luot-phat-trien', 'AboutController@postDevelope');
		Route::get('linh-vuc-kinh-doanh', 'AboutController@getBusiness')->name('admin.business');
		Route::post('linh-vuc-kinh-doanh', 'AboutController@postBusiness');
		Route::get('hinh-anh-hoat-dong', 'AboutController@getImage_about')->name('admin.image_about');
		Route::get('them-hinh-anh-hoat-dong', 'AboutController@getAdd_Image_about')->name('admin.add_image_about');
		Route::post('them-hinh-anh-hoat-dong', 'AboutController@postAdd_Image_about');
		Route::get('xoa-hinh-anh-hoat-dong/{id}', 'AboutController@getDelete_image_about')->name('admin.delete_image_about');
		Route::get('them-logo-doi-tac', 'AboutController@getAdd_partner')->name('admin.add_partner');
		Route::post('them-logo-doi-tac', 'AboutController@postAdd_partner');
		Route::get('logo-doi-tac', 'AboutController@getPartner')->name('admin.partner');
		Route::get('xoa-logo-doi-tac/{id}', 'AboutController@getDelete_parnter')->name('admin.delete_parnter');
		Route::get('phan-hoi', 'AboutController@getFeedback')->name('admin.feedback');
		Route::get('sua-phan-hoi/{id}', 'AboutController@getEdit_Feedback')->name('admin.edit_feedback');
		Route::post('sua-phan-hoi/{id}', 'AboutController@postEdit_Feedback');
		Route::get('xoa-phan-hoi/{id}', 'AboutController@postDelete_Feedback')->name('admin.delete_feedback');
	});

	Route::group(['prefix' => 'certificate', 'middleware' => ['role:supperadmin']],function(){
		Route::get('danh-sach-chung-chi', 'CertificateController@getList_certificate')->name('admin.list_certificate');
		Route::get('them-chung-chi', 'CertificateController@getAdd_certificate')->name('admin.add_certificate');
		Route::post('them-chung-chi', 'CertificateController@postAdd_certificate');
		Route::get('sua-chung-chi/{id}', 'CertificateController@getEdit_certificate')->name('admin.edit_certificate');
		Route::post('sua-chung-chi/{id}', 'CertificateController@postEdit_certificate');
		Route::get('xoa-chung-chi/{id}', 'CertificateController@getDelete_certificate')->name('admin.delete_certificate');

	});

	Route::group(['prefix' => 'configuration', 'middleware' => ['role:supperadmin']],function(){
		Route::get('/', 'ConfigurationController@getadd')->name('admin.configuration.add');
		Route::post('/', 'ConfigurationController@postadd');
	});
	// Route::group(['prefix' => 'categories'],function(){
	// 	Route::get('/', 'CategoriesController@getlist')->name('admin.categories');
	// 	Route::get('add', 'CategoriesController@getadd')->name('admin.categories.add');
	// 	Route::post('add', 'CategoriesController@postadd');
	// 	Route::get('edit/{id}', 'CategoriesController@getedit')->name('admin.categories.edit');
	// 	Route::post('edit/{id}', 'CategoriesController@postedit');
	// 	Route::get('delete/{id}', 'CategoriesController@getdelete')->name('admin.categories.delete');
	// 	Route::get('Listcontact', 'CategoriesController@getcontact')->name('admin.contact');
	// 	Route::get('contactEdit/{id}', 'CategoriesController@geteditcontact')->name('admin.contact.edit');
	// 	Route::post('contactEdit/{id}', 'CategoriesController@posteditcontact');
	// 	Route::get('DeleteContact/{id}', 'CategoriesController@getdeletecontact')->name('admin.contact.delete');
	// });

	// Route::group(['prefix' => 'producttype'],function(){
	// 	Route::get('/', 'ProductTypeController@getlist')->name('admin.product_type');
	// 	Route::get('add', 'ProductTypeController@getadd')->name('admin.product_type.add');
	// 	Route::post('add', 'ProductTypeController@postadd');
	// 	Route::get('edit/{id}', 'ProductTypeController@getedit')->name('admin.product_type.edit');
	// 	Route::post('edit/{id}', 'ProductTypeController@postedit');
	// 	Route::get('delete/{id}', 'ProductTypeController@getdelete')->name('admin.product_type.delete');
	// });

	// Route::group(['prefix' => 'product'],function(){
	// 	Route::get('/', 'ProductController@getlist')->name('admin.product');
	// 	Route::get('add', 'ProductController@getadd')->name('admin.product.add');
	// 	Route::post('add', 'ProductController@postadd');
	// 	Route::get('edit/{id}', 'ProductController@getedit')->name('admin.product.edit');
	// 	Route::post('edit/{id}', 'ProductController@postedit');
	// 	Route::get('delete/{id}', 'ProductController@getdelete')->name('admin.product.delete');
	// });

	// Route::group(['prefix' => 'order'],function(){
	// 	Route::get('/', 'OrderController@getlist')->name('admin.order');
	// 	Route::get('edit/{id}', 'OrderController@getedit')->name('admin.order.edit');
	// 	Route::post('edit/{id}', 'OrderController@postedit');
	// 	Route::get('delete/{id}', 'OrderController@getdelete')->name('admin.order.delete');
	// });

	Route::group(['prefix' => 'user'],function(){
		Route::get('/', 'UserController@getlist')->name('admin.user');
		Route::get('add', 'UserController@getadd')->name('admin.user.add');
		Route::post('add', 'UserController@postadd');
		Route::get('edit/{id}', 'UserController@getedit')->name('admin.user.edit');
		Route::post('edit/{id}', 'UserController@postedit');
		Route::get('delete/{id}', 'UserController@getdelete')->name('admin.user.delete');
	});

	// Route::group(['prefix' => 'ajax'], function(){
	// 	Route::get('product_type/{id_categories}','AjaxController@getProduct_type');
	// });
});

Route::get('/home', 'HomeController@index')->name('home');

<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/',function()
{
	return View::make('main');
});

/**
 * Module Admin
 * author: Nghiem Dinh Mung
 */
Route::filter('check_admin_login',function(){
	if(!Session::has('admin_login'))
		return Redirect::to("admin/login");

});

Route::group(array('before'=>'check_admin_login'),function(){
	Route::get('admin', 'AdminController@dashboard');

		//Thêm khóa học mới
		Route::get('admin/tutorial/new', 'AdminController@gNewTutorial');

		Route::post('admin/tutorial/new', 'AdminController@pNewTutorial');

		//Liệt kê khóa học
		Route::get('admin/tutorial/list', 'AdminController@listTutorial');
        
        //Chinh sua khoa hoc
        Route::get('admin/tutorial/edit/{id}', 'AdminController@gEditTutorial');
        Route::post('admin/tutorial/edit/{id}', 'AdminController@pEditTutorial');

		//Quan ly khoa hoc
		Route::get('admin/tutorial/manage/{id}', 'AdminController@manageTutorial');

		//Thêm bài viết
		Route::get('admin/tutorial/manage/{id}/newpost', 'AdminController@gNewPost');

		Route::post('admin/tutorial/manage/{id}/newpost', 'AdminController@pNewPost');

		//Chinh sua bai viet
		Route::get('admin/tutorial/manage/post/edit/{id}', 'AdminController@gEditPost');

		Route::post('admin/tutorial/manage/post/edit/{id}', 'AdminController@pEditPost');

		//Liệt kê user
		Route::get('admin/user/list', 'AdminController@gListUser');

		//Phân quyền user
		Route::any('admin/user/phanquyen/{id}', 'AdminController@phanquyen');

		//Liet ke hoa don
		Route::get('admin/bill/new', 'AdminController@gNewBill');

		Route::get('admin/bill/list', 'AdminController@gListBill');

		//Chap nhan hoa don
		Route::get('admin/bill/accept/{id}', function($id){
			$bill = Bill::find($id);
			$bill->start = time();
			$bill->status = 1;
			$bill->admin_id = Session::get('admin_id');
			$bill->save();
			return Redirect::to("admin/bill/list");
		});

		//huy bo hoa don
		Route::get('admin/bill/accept/{id}', function($id){
			$bill = Bill::find($id);
			$bill->status = 3;
			$bill->save();
			return Redirect::to("admin/bill/list");
		});

		//Đăng thoat
		Route::get('admin/user/logout', function(){
             Session::forget('admin_login');
             return Redirect::to('admin/login');
		});

});

Route::get('admin/login', 'AdminController@gLogin');

Route::post('admin/login', 'AdminController@pLogin');



/**
 * Module User
 * author: Nghiem Dinh Mung
 */
Route::get('user/login', 'UserController@gLogin');

Route::post('user/login', 'UserController@pLogin');

Route::get('user/register', 'UserController@gRegister');

Route::post('user/register', 'UserController@pRegister');

Route::get('user/profile/{id}', 'UserController@index'); 

Route::get('user/logout', function(){
	Session::clear();
	return Redirect::to('');

});

/**
 * Module Font end
 */
Route::get('danh-sach-khoa-hoc', 'MainController@gListTutorial');

//hien thi khóa học
Route::get('khoa-hoc/{id}-{alias}', 'MainController@gViewTutorial');

//hien thi bài học
Route::get('bai-hoc/{id}-{alias}', 'MainController@gViewPost');

//hoa don dang ki khoa hoc
Route::get('hoa-don/dang-ki/{id}-{alias}', 'MainController@gDangKiKhoaHoc');

Route::post('hoa-don/dang-ki/{id}-{alias}', 'MainController@pDangKiKhoaHoc');


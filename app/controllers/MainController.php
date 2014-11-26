<?php
class MainController extends BaseController{
	public function gListTutorial(){

		return View::make('main.list_tutorial')->with('title', 'Danh sách khóa học');
	}

	//hien thi khoa hoc
	public function gViewTutorial($id, $alias){
		$tut = Tutorial::find($id);
		return View::make('main.view_tutorial')->with('title', $tut->title)->with('tut', $tut);

	}

	//hien thi bai hoc
	public function gViewPost($id, $alias){
		$post = Post::find($id);
		$post->view = $post->view + 1;
		$post->save();
		
		return View::make('main.view_post')->with('title', $post->title)->with('post', $post);

	}

    //Dang ki khoa hoc
    public function gDangKiKhoaHoc($id, $alias){
    	$tut = Tutorial::find($id);
    	return View::make('main.dang_ki_hoa_don')->with('title', 'Đăng kí hóa đơn')->with('tut', $tut)->with('result',false);
    }

    public function pDangKiKhoaHoc($id, $alias){
    	$tut = Tutorial::find($id);
    	$bill = new Bill();
    	$bill->tutorial_id = $id;
    	$bill->user_id = Session::get('user_id');
    	$bill->phone = Input::get('phone');
    	$bill->address = Input::get('address');
    	$bill->phuongthuc = Input::get('phuongthuc');
    	$bill->description = Input::get('description');
        $bill->save();
    	return View::make('main.dang_ki_hoa_don')->with('title', 'Đăng kí hóa đơn')->with('tut', $tut)->with('result',true)->with('bill', $bill);
    }
}
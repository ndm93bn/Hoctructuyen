<?php
/**
 * Class AdminController
 * Xu ly dieu khien phan admin
 * author: Nghiem Dinh Mung
 */
class AdminController extends BaseController{

    /**
     * Xu lu get Login
     */
	public function gLogin(){
		if(Session::has('admin_login'))
			return Redirect::to('admin');
		else
		return View::make('admin.login')->with('title', 'Admin Login Page');
	}

	public function pLogin(){
		$username = Input::get('username');
		$password = Input::get('password');
		if(User::check_admin_login($username, $password)){
			$admin = User::where('username', '=', $username)->first();
			Session::put('admin_login', true);
			Session::put('admin_id', $admin->id);
			Session::put('admin_level', $admin->level);
			Session::put('admin_fullname', $admin->fullname);
			return Redirect::to('admin');
		}
		else{
			return View::make('admin.login')->with('title', 'Admin Login Page again');
		}

	}

	public function dashboard(){
		return View::make('admin.dashboard')->with('title', 'Admin Login Page');
	}

	/**
	 * Xu lu them khoa hoc moi
	 */
	public function gNewTutorial(){
		return View::make('admin.new_tutorial')->with('title', 'Thêm khóa học mới');
	}

	public function pNewTutorial(){
		$tut = new Tutorial();
		$tut->title = Input::get('title', "Khóa học mới");
		$tut->description = Input::get('description');
		
		$tut->alias = Untils::convertAlias($tut->title);
		if( Input::has('tinhphi')){
			$tut->locked = true;
			$tut->length = Input::get('length', 30);
			$tut->cost = Input::get('cost',0);
		}

		$filename = Str::random(20) .'.'."png";

		$tut->avatar = $filename;

		$file = Input::file('avatar');
		$file->move('images/', $filename);
        
        $img = Image::make('images/'.$filename);

        $img->resize(128,128);

        $img->save('images/thumbs/'.$filename);

		$tut->save();
		return Redirect::to('admin/tutorial/list');
		//return Input::all();
	}

	//Chinh sua khoa hoc
	public function gEdittutorial($id){
         $tut = Tutorial::find($id);
         return View::make('admin.edit_tutorial')->with('title', 'Chỉnh sửa khóa học')->with('tut', $tut);
	}

	public function pEditTutorial($id){
		$tut = Tutorial::find($id);
		$tut->title = Input::get('title', "Khóa học mới");
		$tut->description = Input::get('description');
		
		$tut->alias = Untils::convertAlias($tut->title);

		if( Input::has('tinhphi')){
			$tut->locked = true;
			$tut->length = Input::get('length', 30);
			$tut->cost = Input::get('cost',0);
		}

        if($_FILES['avatar']['name'] != ""){
	        $filename = Str::random(20) .'.'."png";

			$tut->avatar = $filename;

			$file = Input::file('avatar');
			$file->move('images/', $filename);
	        
	        $img = Image::make('images/'.$filename);

	        $img->resize(128,128);

	        $img->save('images/thumbs/'.$filename);

        }
		

		$tut->save();

		return View::make('admin.edit_tutorial')->with('title', 'Chỉnh sửa khóa học')->with('tut', $tut);
	}

	//List tutorial
	public function listTutorial(){
		$tuts = Tutorial::all();
		return View::make('admin.list_tutorial')->with('title', 'Liệt kê khóa học')->with('tuts',$tuts);
	}

	//Quan ly khoa hoc
	public function manageTutorial($id){
		$tut = Tutorial::find($id);
		return View::make('admin.manage_tutorial')->with('title', 'Quản lý khóa học')->with('tut', $tut);
	}

	//Them bai viet moi
	public function gNewPost($id){
		$tut = Tutorial::find($id);
		return View::make('admin.new_post')->with('tut', $tut)->with('title', 'Thêm bài học mới');
	}

	public function pNewPost($id){
		$post = new Post();
		$post->title = Input::get('title', "Bài học mới");
		$post->tutorial_id = $id;
		$post->alias  = Untils::convertAlias($post->title);
		$post->content = Input::get('content', 'Nội dung bài học');
		if(Input::has('description')){
			$post->description = Input::get('description');
		}
		else{
			$post->description = Untils::catXau($post->content, 300);
		}
		$post->code = "";

		if(Input::has('free')){
			$post->locked = true;
		}
		else
	    {
	    	$post->locked = false;
	    }

		$post->parent = Input::get('parent', '0');
        $post->save();
        return Redirect::to('admin/tutorial/manage/'.$post->tutorial_id);
	}
    
    //Chinh sua bai hoc
    public function gEditPost($id){
    	$post = Post::find($id);
    	return View::make('admin.edit_post')->with('tut', Tutorial::find($post->tutorial_id))
    	->with('title', 'Chỉnh sửa bài viết - '.$post->title)->with('post', $post);
    }

    public function pEditPost($id){
    	$post = Post::find($id);
		$post->title = Input::get('title', "Bài học mới");
		$post->content = Input::get('content', 'Nội dung bài học');
		if(Input::has('description')){
			$post->description = Input::get('description');
		}
		else{
			$post->description = Untils::catXau($post->content, 300);
		}
		$post->code = "";
		$post->locked = Input::get('locked', false);
		$post->parent = Input::get('parent', '0');
        $post->save();
        return  View::make('admin.edit_post')->with('tut', Tutorial::find($post->tutorial_id))
    	->with('title', 'Chỉnh sửa bài viết - '.$post->title)->with('post', $post);

    }

	//List User
	public function gListUser(){
		$u = User::all();
		return View::make ('admin.listuser')->with('title', 'Liệt kê thành viên')->with('users', $u);

	}

	//Phân quyền
	public function phanquyen($id){
			$user = User::find($id);
		if(Session::get('admin_level') == 3){

			$user->level = Input::get('level');
			$user->save();
		}
		
		return View::make('admin.phanquyen')->with('title', 'Phân quyền thành viên')->with('user', $user);
	}

	//Liet ke hoa don moi
	public function gNewBill(){
		return View::make('admin.new_bill')->with('title', 'Danh sách hóa đơn mới');
	}

	public function gListBill(){
		return View::make('admin.list_bill')->with('title', 'Danh sách hóa đơn đã duyệt');
	}
}
?>
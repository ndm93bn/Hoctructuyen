<?php
class UserController extends BaseController{

	public function index($id){
		$user = User::find($id);
		return View::make('user.index')->with('title',$user->fullname.'- Trang thông tin cá nhân')
		->with('user', $user);
	}

	//ham xu ly get Login
	public function gLogin(){

		return View::make('user.login')->with('title','Đăng nhập');
	}

	//Ham xu ly post Login
	public function pLogin(){
		$username = Input::get('username', "");
		$password = Input::get("password", "");

		if(User::check_login($username, $password)){
			$user = User::where ('username' , '=', $username)->first();
			Session::put('user_login', true);
			Session::put('user_id', $user->id);
			Session::put('user_fullname', $user->fullname);
			Session::put('username', $user->username);
			return Redirect::to("user/profile/".$user->id);
		}
		else
			return "Dang nhap that bai";

	}

	//Ham xu ly dang ki
	public function gRegister(){

		return View::make('user.register')->with('title', 'Đăng kí');
	}

	//Ham xy ly dang ki
	public function pRegister(){
		$user = new User();
		$user->username = Input::get('username');
		$user->password = md5(sha1(Input::get('password'))) ;
		$user->fullname = Input::get('fullname');
		$user->email = Input::get('email');
		$user->year = Input::get('year', 2010);
		$user->info = Input::get('info');
		$user->gender = Input::get("gender", 1);

		$filename = Str::random(20) .'.'."png";

		$user->avatar = $filename;

		$file = Input::file('avatar');
		$file->move('images/', $filename);
        
        $img = Image::make('images/'.$filename);

        $img->resize(128,128);

        $img->save('images/thumbs/'.$filename);
        
		$user->status = 1;
		$user->save();
		return "Đăng kí thàn viên thành công";

	}
}
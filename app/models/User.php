<?php
class User extends Eloquent{

    public $table = "users";

    public static function check_login($user_input, $password){

    	$password = md5(sha1($password));

    	$array1 = array('user_input'=>$user_input);
    	$rules = array('user_input'=>'email');

    	if(Validator::make($array1, $rules)->fails())
    		$check = User::where('username','=',$user_input)->where('password','=',$password)->count();
    	else
    		$check = User::where('email','=',$user_input)->where('password','=',$password)->count();

    	if($check >0)
    		return true;
    	else
    		return false;
    }

    public static function check_username($username){
    	if(User::where('username','=',$username)->count()>0)

    	return false;
    	else
    		return true;
    }

     public static function check_email($email){
    	if(User::where('email','=',$email)->count()>0)

    	return false;
    	else
    		return true;
    }

    public static function getUserIdByEmailOrUsername($user_input){

    	$array1 = array('user_input'=>$user_input);
    	$rules = array('user_input'=>'email');

        if(Validator::make($array1, $rules)->fails())

    		$check = User::where('username','=',$user_input)->first();
    	else
    		$check = User::where('email','=',$user_input)->first();

    	return $check['id'];

    }

    public static function changePassword($old,$new,$re){
    	$check = User::where('id','=',Session::get('user_id'))->where('password','=',md5(sha1($old)))->count();
    	if($check > 0){
    		if($new == $re){
    			$check = User::find(Session::get('user_id'));
    				$check->password = md5(sha1($new));
    				$check->save();
    				return true;

    		}
    		else return false;
    	}
    	else return false;

    }

}
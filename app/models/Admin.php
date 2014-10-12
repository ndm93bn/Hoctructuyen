<?php
class Admin extends Eloquent{

    public $table = "admins";

    public static function check_admin($name,$pass){
    	$count = Admin::where('username','=',$name)->where('password','=',$pass)->count();
    	if($count > 0) return true;
    	else return false;
    }
}
<?php
class Login extends Controller
{
	public function index(){
		
		require APP . 'view/login/index.php';
		
	}
	
// 	this method checks the username and password and redirets the page
// 	on the basis of role of user
	public function checkLogin(){

	}
// 	this method loggs out a  user and redirects user to login page
	public function logout(){
		
	}
}
?>
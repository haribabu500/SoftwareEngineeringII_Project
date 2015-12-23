<?php
class Login extends Controller
{
	public function index(){
		
		require APP . 'view/login/index.php';
		
	}
	
// 	this method checks the username and password and redirets the page
// 	on the basis of role of user
	public function checkLogin(){
		$username=$_POST['username'];
		$password=$_POST['password'];
		if($username=="admin" && $password=="admin"){
			require APP . 'view/_templates/admin_header.php';
			require APP . 'view/user/adminDashboard.php';
			require APP . 'view/_templates/admin_footer.php';
		}
		if($username=="counsellor" && $password=="counsellor"){
			require APP . 'view/_templates/header.php';
			require APP . 'view/user/counsellorsDashboard.php';
			require APP . 'view/_templates/footer.php';
		}
	}
// 	this method loggs out a  user and redirects user to login page
	public function logout(){
		require APP . 'view/login/index.php';
	}
}
?>
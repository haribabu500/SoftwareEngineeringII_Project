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
		$user=$this->model->getLoggedInUser($username,$password);
// 		echo $user->role;
		if($user->role=="admin"){
			$_SESSION["user"]=$user;
			header('location: '.URL.'user/adminDashboard');
			require APP . 'view/_templates/admin_header.php';
			require APP . 'view/user/adminDashboard.php';
			require APP . 'view/_templates/admin_footer.php';
		}
		if($user->role=="counsellor"){
			$_SESSION["user"]=$user;
			header('location: '.URL.'user/counsellorsDashboard');
		}
		else{
			header('location: ' . URL . '');
		}
	}
// 	this method loggs out a  user and redirects user to login page
	public function logout(){
		session_destroy();
		require APP . 'view/login/index.php';
	}
}
?>
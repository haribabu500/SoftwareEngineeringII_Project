<?php
class User extends Controller
{
	public function index(){
		require APP . 'view/_templates/admin_header.php';
		require APP . 'view/user/index.php';
		require APP . 'view/_templates/admin_footer.php';
	}
	
	public function counsellorsDashboard(){
		require APP . 'view/_templates/header.php';
		require APP . 'view/user/counsellorsDashboard.php';
		require APP . 'view/_templates/footer.php';
	}
	
	public function adminDashboard(){
		require APP . 'view/_templates/admin_header.php';
		require APP . 'view/user/adminDashboard.php';
		require APP . 'view/_templates/admin_footer.php';
	}
	
	
}
?>
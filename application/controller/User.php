<?php
class User extends Controller
{
	public function index(){
		require APP . 'view/_templates/admin_header.php';
		require APP . 'view/user/index.php';
		require APP . 'view/_templates/admin_footer.php';
	}
	
	public function counsellorsDashboard(){
		$leads = $this->model->getUsersFollowUpsLeads($_SESSION['user']->user_id);
		$followUps_to_make=sizeOf($leads);
		$myleads=$this->model->getUsersLeads($_SESSION['user']->user_id);
		$myleads_count=sizeOf($myleads);
		$total_leads=$this->model->getAllLeads();
		$total_count=sizeOf($total_leads);
		require APP . 'view/_templates/header.php';
		require APP . 'view/user/counsellorsDashboard.php';
		require APP . 'view/_templates/footer.php';
	}
	
	public function adminDashboard(){
		require APP . 'view/_templates/admin_header.php';
		require APP . 'view/user/adminDashboard.php';
		require APP . 'view/_templates/admin_footer.php';
	}
	
	public function addCounsellor(){
		require APP . 'view/_templates/admin_header.php';
		require APP . 'view/user/addCounsellor.php';
		require APP . 'view/_templates/admin_footer.php';
	}
	
	public function addCounsellorAction(){
		if (isset($_POST["submit_addCounsellor"])) {
			$this->model->addUser($_POST["user_firstname"], $_POST["user_middlename"], $_POST["user_lastname"],$_POST["email"],$_POST["contact"],$_POST["address"],"counsellor",$_POST["username"],$_POST["password"] );
		}
		header('location: ' . URL . 'user/addCounsellor');
	}
	
	public function viewCounsellors(){
		$users = $this->model->getAllUser();
		$num_of_counsellors=$this->model->getAmountOfUsers();
		
		require APP . 'view/_templates/admin_header.php';
		require APP . 'view/user/viewCounsellor.php';
		require APP . 'view/_templates/admin_footer.php';
		
	}
	
	public function deleteCounsellor($user_id){
		if (isset($user_id)) {
			$this->model->deleteUser($user_id);
		}
		header('location: ' . URL . 'user/viewCounsellors');
	}
	
	public function editCounsellor($user_id){
		if (isset($user_id)) {
			$user = $this->model->getUser($user_id);
			require APP . 'view/_templates/admin_header.php';
			require APP . 'view/user/editCounsellor.php';
			require APP . 'view/_templates/admin_footer.php';
		} else {
			// redirect user to view counsellors page (as we don't have a user_id)
			header('location: ' . URL . 'user/viewCounsellors');
		}
	} 
	public function editCounsellorAction(){
		if (isset($_POST["submit_addCounsellor"])) {
			$this->model->updateUser($_POST["user_id"],$_POST["user_firstname"], $_POST["user_middlename"], $_POST["user_lastname"],$_POST["email"],$_POST["contact"],$_POST["address"],$_POST["role"],$_POST["username"],$_POST["password"] );
		}
		header('location: ' . URL . 'user/viewCounsellors');
	}
}
?>
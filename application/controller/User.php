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
		$feedbacks=$this->model->getFollowUp($_SESSION['user']->user_id);
		$count_feedbacks=sizeOf($feedbacks);
		require APP . 'view/_templates/header.php';
		require APP . 'view/user/counsellorsDashboard.php';
		require APP . 'view/_templates/footer.php';
	}
	
	public function adminDashboard(){
		$num_of_counsellors=$this->model->getAmountOfUsers();
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
		$added="Counsellor Added";
// 		header('location: ' . URL . 'user/addCounsellor');
		require APP . 'view/_templates/admin_header.php';
		require APP . 'view/user/addCounsellor.php';
		require APP . 'view/_templates/admin_footer.php';
	}
	
	public function viewCounsellors(){
		$users = $this->model->getAllUser();
		$num_of_counsellors=$this->model->getAmountOfUsers();
		
		require APP . 'view/_templates/admin_header.php';
		require APP . 'view/user/viewCounsellor.php';
		require APP . 'view/_templates/admin_footer.php';
		
	}
	public function counsellorWiseLead($counsellor_id){
		$counsellor=$this->model->getUser($counsellor_id);
		$leads=$this->model->getUsersLeads($counsellor_id);
// 		print_r($user);
// 		print_r($followUp);
// 		die();
		require APP . 'view/_templates/admin_header.php';
		require APP . 'view/user/counsellorWiseFollowUp.php';
		require APP . 'view/_templates/admin_footer.php';
	}
	
	public function deleteCounsellor($user_id){
		if (isset($user_id)) {
			$this->model->deleteUser($user_id);
		}
		$added="Counsellor Removed";
		$users = $this->model->getAllUser();
		$num_of_counsellors=$this->model->getAmountOfUsers();
		
		require APP . 'view/_templates/admin_header.php';
		require APP . 'view/user/viewCounsellor.php';
		require APP . 'view/_templates/admin_footer.php';
// 		header('location: ' . URL . 'user/viewCounsellors');
	}
	
	public function editCounsellor($user_id){
		if (isset($user_id)) {
			$user2 = $this->model->getUser($user_id);
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
		$added="Counsellor Updated";
// 		header('location: ' . URL . 'user/viewCounsellors');

		require APP . 'view/_templates/admin_header.php';
		require APP . 'view/user/editCounsellor.php';
		require APP . 'view/_templates/admin_footer.php';
	}
}
?>
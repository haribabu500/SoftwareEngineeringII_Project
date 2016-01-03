<?php
class FollowUp extends Controller
{
	public function index()
	{
		require APP . 'view/_templates/header.php';
		require APP . 'view/followUp/index.php';
		require APP . 'view/_templates/footer.php';
	}
	public function addFollowUp($lead_id){
		$lead=$this->model->getLead($lead_id);
		require APP . 'view/_templates/header.php';
		require APP . 'view/followUp/addFollowUp.php';
		require APP . 'view/_templates/footer.php';
	}
	
	public function addFollowUpAction(){
		$user_id=$_SESSION['user']->user_id;
		$lead_id=$_POST['lead_id'];
		$nextfollowupDate=$_POST['nextfollowupDate'];
		$status=$_POST['status'];
		$feedback=$_POST['feedback'];
		$count=$this->model->countFollowUps($lead_id);
		if($count->total>=7){
			$status="expired";
		}
		$this->model->addFolllowUp($user_id,$lead_id,$nextfollowupDate,$status,$feedback);
		
		header('location: ' . URL . 'followUp/counsellorsFollowUp');
	}
	
	public function counsellorsFollowUp(){
		$leads = $this->model->getUsersFollowUpsLeads($_SESSION['user']->user_id);
		require APP . 'view/_templates/header.php';
		require APP . 'view/followUp/counsellorsFollowUp.php';
		require APP . 'view/_templates/footer.php';
	}
	public function viewFeedbacks(){
		$user_id=$_SESSION['user']->user_id;
		$followUps=$this->model->getFollowUp($user_id);
		require APP . 'view/_templates/header.php';
		require APP . 'view/followUp/viewFeedbacks.php';
		require APP . 'view/_templates/footer.php';
	}
	
	public function editFollowUp($followUp_id){
		$followUp=$this->model->getSingleFollowUp($followUp_id);

		$lead_id=$followUp->lead_id;
		$lead=$this->model->getLead($lead_id);
		require APP . 'view/_templates/header.php';
		require APP . 'view/followUp/editFollowUp.php';
		require APP . 'view/_templates/footer.php';
	}
	
	public function editFollowUpAction(){
		$followUp_id=$_POST['followUp_id'];
		$user_id=$_SESSION['user']->user_id;
		$lead_id=$_POST['lead_id'];
		$nextfollowupDate=$_POST['nextfollowupDate'];
		$status=$_POST['status'];
		$feedback=$_POST['feedback'];
		$this->model->updateFollowUp($followUp_id,$user_id,$lead_id,$nextfollowupDate,$status,$feedback);
// 		$this->model->addFolllowUp($user_id,$lead_id,$nextfollowupDate,$status,$feedback);
		
		header('location: ' . URL . 'followUp/viewFeedbacks');
	}
}
?>
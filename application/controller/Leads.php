<?php
class Leads extends Controller
{
	public function index(){
		require APP . 'view/_templates/header.php';
		require APP . 'view/lead/index.php';
		require APP . 'view/_templates/footer.php';
	}
	public function addLead(){
		$counsellors=$this->model->getAllUser();
		require APP . 'view/_templates/header.php';
		require APP . 'view/leads/addLead.php';
		require APP . 'view/_templates/footer.php';
	}
	public function  addLeadAction(){
		if (isset($_POST["submit_addLead"])) {
			$this->model->addLead($_POST["user_id"],$_POST["lead_firstname"], $_POST["lead_middlename"], $_POST["lead_lastname"],$_POST["email"],$_POST["contact"],$_POST["address"],$_POST["qualification"],$_POST["stream"],$_POST["status"],$_POST["nextfollowupDate"],$_POST["semester"] );
		}
// 		header('location: ' . URL . 'leads/addLead');
		$added="Lead Added";
		require APP . 'view/_templates/header.php';
		require APP . 'view/leads/addLead.php';
		require APP . 'view/_templates/footer.php';
		
	}
	public function updateLead($lead_id){
		
	}
	
	public function viewAllLeads(){
		$leads = $this->model->getAllLeads();
		$num_of_leads=$this->model->getAmountOfLeads();
	
		require APP . 'view/_templates/header.php';
		require APP . 'view/leads/viewLeads.php';
		require APP . 'view/_templates/footer.php';
	}
	public function viewCounsellorsLeads(){
		$leads = $this->model->getUsersLeads($_SESSION["user"]->user_id);
		$num_of_leads=sizeof($leads);
	
		require APP . 'view/_templates/header.php';
		require APP . 'view/leads/viewLeads.php';
		require APP . 'view/_templates/footer.php';
	}
	
	public function editLead($lead_id){
		if (isset($lead_id)) {
			$lead = $this->model->getLead($lead_id);
			require APP . 'view/_templates/header.php';
			require APP . 'view/leads/editLead.php';
			require APP . 'view/_templates/footer.php';
		} else {
			// redirect user to view counsellors page (as we don't have a user_id)
			header('location: ' . URL . 'leads/viewLeads');
		}
	}
	public function editLeadAction(){
		if (isset($_POST["submit_editLead"])) {
			$this->model->updateLead($_POST["lead_id"],$_POST["user_id"],$_POST["lead_firstname"],$_POST["lead_middlename"],$_POST["lead_lastname"],$_POST["email"],$_POST["contact"],$_POST["address"],$_POST["qualification"],$_POST["stream"],$_POST["status"],$_POST["nextfollowupDate"],$_POST["semester"]);
		}
// 		header('location: ' . URL . 'leads/viewCounsellorsLeads');
		$added="Lead Updated";
		require APP . 'view/_templates/header.php';
		require APP . 'view/leads/editLead.php';
		require APP . 'view/_templates/footer.php';
	}
	public function transferLead($lead_id){
		if (isset($lead_id)) {
			$lead = $this->model->transferLead($lead_id);
			$lead=$this->model->getLead($lead_id);
			
			$leads = $this->model->getUsersLeads($_SESSION["user"]->user_id);
			$num_of_leads=sizeof($leads);
			$added=$lead->lead_firstname." ".$lead->lead_middlename." ".$lead->lead_lastname." Converted to student";
			require APP . 'view/_templates/header.php';
			require APP . 'view/leads/viewLeads.php';
			require APP . 'view/_templates/footer.php';
		} else {
			// redirect user to view counsellors page (as we don't have a user_id)
			header('location: ' . URL . 'leads/viewLeads');
		}
	}
	
}
?>
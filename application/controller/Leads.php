<?php
class Leads extends Controller
{
	public function index(){
		require APP . 'view/_templates/header.php';
		require APP . 'view/lead/index.php';
		require APP . 'view/_templates/footer.php';
	}
	public function addLead(){
		
	}
	
	public function updateLead($lead_id){
		
	}
}
?>
<?php
class FollowUp extends Controller
{
	public function index()
	{
		require APP . 'view/_templates/header.php';
		require APP . 'view/followUp/index.php';
		require APP . 'view/_templates/footer.php';
	}
	public function addFollowUp(){
		
	}
}
?>
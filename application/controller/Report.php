<?php
class Report extends Controller
{
	public function index(){
		require APP . 'view/_templates/admin_header.php';
		require APP . 'view/report/index.php';
		require APP . 'view/_templates/admin_footer.php';
	}
	
	public function generateReport($criteria){
		
	}
}
?>
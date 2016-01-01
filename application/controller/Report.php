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
	public function getDailyLead(){
		 $list=$this->model->getDailyLead($_SESSION['user']->user_id);
		 $arr=array();
		 foreach ($list as $object){
		 	$arr[$object->createdDate]=$object->leads;
		 }
		 $arr=json_encode(array_reverse($arr));
		 require APP . 'view/report/data.php';
	}
	
}
?>
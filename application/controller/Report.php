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
	
	public function getStatusWiseLeadsReport(){
		$list=$this->model->getStatusWiseLeads();
		$arr=array();
		foreach ($list as $object){
			$arr[$object->status]=$object->total;
		}
		$arr=json_encode($arr);
// 		print_r($arr);
// 		die();
		require APP . 'view/_templates/admin_header.php';
		require APP . 'view/report/statusWiseReport.php';
		require APP . 'view/_templates/admin_footer.php';
		
	}
	public function getCounsellorsFollowUp(){
		$list=$this->model->getCounsellorsFollowUp();
		$arr=array();
		foreach ($list as $object){
			$arr[$object->name]=$object->followUp;
		}
		$arr=json_encode($arr);
		// 		print_r($arr);
		// 		die();
		require APP . 'view/_templates/admin_header.php';
		require APP . 'view/report/counsellorsFollowUp.php';
		require APP . 'view/_templates/admin_footer.php';
	}
	public function getDateWiseLeadsReport(){
		require APP . 'view/_templates/admin_header.php';
		require APP . 'view/report/dateWiseLeadsReport.php';
		require APP . 'view/_templates/admin_footer.php';
	}
	public function getWeeklyReport(){
		$leads=$this->model->getWeeklyLead();
		require APP . 'view/report/weeklyReport.php';
	}
	public function getMonthlyReport(){
		$leads=$this->model->getMonthlyLead();
		require APP . 'view/report/MonthlyReport.php';
	}
	public function getSemWiseLeadsReport(){
		$list=$this->model->getSemWiseLead();
		$arr=array();
		foreach ($list as $object){
			$arr[$object->semester]=$object->leads;
		}
		$arr=json_encode($arr);
		// 		print_r($arr);
		// 		die();
		require APP . 'view/_templates/admin_header.php';
		require APP . 'view/report/semWiseLeadsReport.php';
		require APP . 'view/_templates/admin_footer.php';
		
		
	}
	public function counsellorWiseLeadsReport(){
		$users = $this->model->getAllUser();
		$num_of_counsellors=$this->model->getAmountOfUsers();
		require APP . 'view/_templates/admin_header.php';
		require APP . 'view/report/counsellorWiseLeadsReport.php';
		require APP . 'view/_templates/admin_footer.php';
	}
}
?>
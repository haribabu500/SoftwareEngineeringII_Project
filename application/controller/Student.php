<?php
class student extends Controller
{
	public function viewStudents(){
		$students = $this->model->getAllStudents();
		$num_of_students=sizeof($students);
		require APP . 'view/_templates/header.php';
		require APP . 'view/students/viewStudents.php';
		require APP . 'view/_templates/footer.php';
	}
}
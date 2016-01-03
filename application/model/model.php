<?php

class Model
{
    /**
     * @param object $db A PDO database connection
     */
    function __construct($db)
    {
        try {
            $this->db = $db;
        } catch (PDOException $e) {
            exit('Database connection could not be established.');
        }
    }

    public function getAllLeads(){
    	$sql = "SELECT * FROM lead";
    	$query = $this->db->prepare($sql);
    	$query->execute();
    	return $query->fetchAll();
    	
    }
    public function getUsersLeads($user_id){
    	$sql = "SELECT * FROM lead where user_id=:user_id";
    	$query = $this->db->prepare($sql);
    	$parameters=array('user_id'=>$user_id);
    	$query->execute($parameters);
    	return $query->fetchAll();
    }
    
    public function getUsersFollowUpsLeads($user_id){
    	$sql = "SELECT * FROM lead where user_id=:user_id and nextfollowupDate<=now() and status <> 'expired' order by nextfollowupDate";
    	$query = $this->db->prepare($sql);
    	$parameters=array('user_id'=>$user_id);
    	$query->execute($parameters);
    	return $query->fetchAll();
    }
    
    public function addLead($user_id,$lead_firstname,$lead_midddlename,$lead_lastname,$email,$contact,$address,$qualification,$stream,$status,$nextfollowupDate,$semester){
    	$sql="INSERT INTO `lead`(`user_id`, `lead_firstname`, `lead_middlename`, `lead_lastname`, `email`, `contact`, `address`, `qualification`, `stream`, `status`, `nextfollowupDate`,`semester`,`createdDate`) 
    			VALUES (:user_id,:lead_firstname,:lead_middlename,:lead_lastname,:email,:contact,:address,:qualification,:stream,:status,:nextfollowupDate,:semester,:createdDate)";
    	$query = $this->db->prepare($sql);
    	$parameters = array(':user_id'=>$user_id,
    			':lead_firstname' => $lead_firstname,
    			':lead_middlename' => $lead_midddlename,
    			':lead_lastname' => $lead_lastname,
    			':email' => $email,
    			':contact' => $contact,
    			':address' => $address,
    			':qualification' => $qualification,
    			':stream' => $stream,
    			':status' => $status,
    			':nextfollowupDate'=>$nextfollowupDate,
    			':semester'=>$semester,
    			':createdDate'=>date("Y-m-d")
    	);
//     	echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();
    	$query->execute($parameters);
    }
    
    public function deleteLead($lead_id){
    	$sql = "DELETE FROM lead WHERE lead_id = :lead_id";
    	$query = $this->db->prepare($sql);
    	$parameters = array(':lead_id' => $lead_id_id);
    	$query->execute($parameters);
    }
    
    public function getLead($lead_id){
    	$sql = "SELECT * FROM lead WHERE lead_id = :lead_id LIMIT 1";
    	$query = $this->db->prepare($sql);
    	$parameters = array(':lead_id' => $lead_id);
    	$query->execute($parameters);
    	
    	return $query->fetch();
    }
    
    public function updateLead($lead_id,$user_id,$lead_firstname,$lead_midddlename,$lead_lastname,$email,$contact,$address,$qualification,$stream,$status,$nextfollowupDate,$semester){
    	$sql = "UPDATE lead SET user_id=:user_id, 
    			lead_firstname = :lead_firstname,
    			lead_middlename = :lead_middlename,
    			lead_lastname = :lead_lastname,
    			email=:email,
    			contact=:contact,
    			address=:address,
    			qualification=:qualification,
    			stream=:stream,
    			status=:status,
    			nextfollowupDate=:nextfollowupDate,
    			semester=:semester
    			 WHERE lead_id = :lead_id";
    	$query = $this->db->prepare($sql);
    	$parameters = array(':user_id'=>$user_id,
    			':lead_firstname' => $lead_firstname,
    			':lead_middlename' => $lead_midddlename,
    			':lead_lastname' => $lead_lastname,
    			':email' => $email,
    			':contact' => $contact,
    			':address' => $address,
    			':qualification' => $qualification,
    			':stream' => $stream,
    			':status' => $status,
    			':nextfollowupDate' => $nextfollowupDate,
    			':lead_id' => $lead_id,
    			':semester'=>$semester
    	);
    	$query->execute($parameters);
    }
    
    public function getAmountOfLeads(){
    	$sql = "SELECT COUNT(lead_id) AS amount_of_leads FROM lead";
    	$query = $this->db->prepare($sql);
    	$query->execute();
    	// fetch() is the PDO method that get exactly one result
    	return $query->fetch()->amount_of_leads;
    }
//     ---------------------------------------------------------------
    public function getAllUser(){
    	$sql = "SELECT * FROM user where role='counsellor'";
    	$query = $this->db->prepare($sql);
    	$query->execute();
    		return $query->fetchAll();
    }
    
    public function addUser($user_firstname,$user_midddlename,$user_lastname,$email,$contact,$address,$role,$username,$password){
    	$sql="INSERT INTO `user`(`user_firstname`, `user_middlename`, `user_lastname`, `email`, `contact`, `address`, `role`, `username`, `password`) 
    			VALUES (:user_firstname,:user_middlename,:user_lastname,:email,:contact,:address,:role,:username,:password)";
    	$query = $this->db->prepare($sql);
    	$parameters = array(':user_firstname' => $user_firstname,
    			':user_middlename' => $user_midddlename, 
    			':user_lastname' => $user_lastname, 
    			':email' => $email,
    			':contact' => $contact,
    			':address' => $address,
    			':role' => $role,
    			':username' => $username,
    			':password' => $password);
    	$query->execute($parameters);
    	
    }
    public function deleteUser($user_id){
    	$sql = "DELETE FROM user WHERE user_id = :user_id";
    	$query = $this->db->prepare($sql);
    	$parameters = array(':user_id' => $user_id);
    	$query->execute($parameters);
    }
    public function getUser($user_id){
    	$sql = "SELECT * FROM user WHERE user_id = :user_id LIMIT 1";
    	$query = $this->db->prepare($sql);
    	$parameters = array(':user_id' => $user_id);
    	$query->execute($parameters);
    	return $query->fetch();
    }
    
    public function updateUser($user_id,$user_firstname,$user_midddlename,$user_lastname,$email,$contact,$address,$role,$username,$password){
    	$sql = "UPDATE user SET user_firstname = :user_firstname, 
    			user_middlename = :user_middlename, 
    			user_lastname = :user_lastname,
    			email=:email,
    			contact=:contact,
    			address=:address,
    			role=:role,
    			username=:username,
    			password=:password
    			 WHERE user_id = :user_id";
    	$query = $this->db->prepare($sql);
    	$parameters = array(':user_firstname' => $user_firstname,
    			 ':user_middlename' => $user_midddlename,
    			 ':user_lastname' => $user_lastname,
    			 ':email' => $email,
    			 ':contact' => $contact,
    			 ':address' => $address,
    			 ':role' => $role,
    			 ':username' => $username,
    			 ':password' => $password,
    			 ':user_id' => $user_id);
    	$query->execute($parameters);
    }
    
    public function getAmountOfUsers(){
    	$sql = "SELECT COUNT(user_id) AS amount_of_users FROM user";
    	$query = $this->db->prepare($sql);
    	$query->execute();
    	return $query->fetch()->amount_of_users;
    }
    
    public function getLoggedInUser($username,$password){
    	$sql = "SELECT * FROM user WHERE username = :username and password=:password";
    	$query = $this->db->prepare($sql);
    	$parameters = array(':username' => $username,':password'=>$password);
    	$query->execute($parameters);
    	return $query->fetch();
    }
    //     ---------------------------------------------------------------
    public function getAllFollowUps(){
    
    }
    
    public function countFollowUps($lead_id){
    	$sql="select count(lead_id) as total from followUp where lead_id=:lead_id";
    	$query=$this->db->prepare($sql);
    	$parameters=array(':lead_id'=>$lead_id);
    	$query->execute($parameters);
    	return $query->fetch();
    }
    public function addFolllowUp($user_id,$lead_id,$nextfollowupDate,$status,$feedback){
    	//updates the status of leads during follow up
    	$sql = "UPDATE lead SET 
    			status=:status,
    			nextfollowupDate=:nextfollowupDate
    			 WHERE lead_id=:lead_id";
    	$query = $this->db->prepare($sql);
    	$parameters = array(
    			':lead_id'=>$lead_id,
    			':status' => $status,
    			':nextfollowupDate' => $nextfollowupDate,
    	);
    	if($count>=7){
    		$parameters[':status']="expired";
    		echo"Enough"; exit();
    	}
    	$query->execute($parameters);
    	//---------------------------------------------------------------
    	//add feedbacks during follow up
    	$sql="INSERT INTO `followUp`(`lead_id`, `followUp_date`, `feedback`)
    			VALUES (:lead_id,now(),:feedback)";
    	$query = $this->db->prepare($sql);
    	$parameters = array(
    			':lead_id' => $lead_id,
    			':feedback' => $feedback
    	);
    	$query->execute($parameters);
    	
    }
    
    public function deleteFollowUp($followUp_id){
    
    }
    
    public function getFollowUp($user_id){
    	$sql = "SELECT f.followUp_id,l.lead_id,concat(l.lead_firstname,' ',l.lead_middlename,' ',l.lead_lastname) as  name,l.status,f.feedback FROM followUp f,lead l 
    			where l.user_id=:user_id 
    			and f.lead_id=l.lead_id
    			order by f.followUp_id DESC";
    	$query = $this->db->prepare($sql);
    	$parameter=array(
    			':user_id'=>$user_id
    	);
    	$query->execute($parameter);
    	return $query->fetchAll();
    }
    
    public function  getSingleFollowUp($followUp_id){
    	
    	$sql="SELECT * from followUp where followUp_id=:followUp_id";
    	$query=$this->db->prepare($sql);
    	$parameter=array(':followUp_id'=>$followUp_id);
    	$query->execute($parameter);
    	return $query->fetch();
    	
    }
    
    public function updateFollowUp($followUp_id,$user_id,$lead_id,$nextfollowupDate,$status,$feedback){
    	$sql = "UPDATE lead SET
    			status=:status,
    			nextfollowupDate=:nextfollowupDate
    			 WHERE lead_id=:lead_id";
    	$query = $this->db->prepare($sql);
    	$parameters = array(
    			':lead_id'=>$lead_id,
    			':status' => $status,
    			':nextfollowupDate' => $nextfollowupDate,
    	);
    	
    	$query->execute($parameters);
    	$sql="UPDATE `followUp` SET
    			feedback=:feedback
    			WHERE followUp_id=:followUp_id";
    	$query = $this->db->prepare($sql);
    	$parameters = array(
    			':feedback' => $feedback,
    			':followUp_id' => $followUp_id
    	);
    	$query->execute($parameters);
    }
    //     ---------------------------------------------------------------
    public function getAllStudentss(){
    
    }
    public function addStudent(){
    
    }
    public function deleteStudent($student_id){
    
    }
    public function getStudent($student_id){
    
    }
    public function updateStudent(){
    
    }
    public function getAmountOfStudent(){
    
    }
    
    public function getDailyLead(){
    	$user_id=$_SESSION['user']->user_id;
    	$sql="SELECT `createdDate`,count(lead_id) as leads FROM `lead` where user_id=:user_id group by createdDate order by createdDate desc  LIMIT 7 ";
    	$query = $this->db->prepare($sql);
    	$parameters = array(':user_id' => $user_id);
    	$query->execute($parameters);
    	
    	return $query->fetchAll();
    }
    
}

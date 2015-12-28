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

    /**
     * Get all songs from database
     */
    public function getAllSongs()
    {
        $sql = "SELECT id, artist, track, link FROM song";
        $query = $this->db->prepare($sql);
        $query->execute();

        // fetchAll() is the PDO method that gets all result rows, here in object-style because we defined this in
        // core/controller.php! If you prefer to get an associative array as the result, then do
        // $query->fetchAll(PDO::FETCH_ASSOC); or change core/controller.php's PDO options to
        // $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC ...
        return $query->fetchAll();
    }

    /**
     * Add a song to database
     * TODO put this explanation into readme and remove it from here
     * Please note that it's not necessary to "clean" our input in any way. With PDO all input is escaped properly
     * automatically. We also don't use strip_tags() etc. here so we keep the input 100% original (so it's possible
     * to save HTML and JS to the database, which is a valid use case). Data will only be cleaned when putting it out
     * in the views (see the views for more info).
     * @param string $artist Artist
     * @param string $track Track
     * @param string $link Link
     */
    public function addSong($artist, $track, $link)
    {
        $sql = "INSERT INTO song (artist, track, link) VALUES (:artist, :track, :link)";
        $query = $this->db->prepare($sql);
        $parameters = array(':artist' => $artist, ':track' => $track, ':link' => $link);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);
    }

    /**
     * Delete a song in the database
     * Please note: this is just an example! In a real application you would not simply let everybody
     * add/update/delete stuff!
     * @param int $song_id Id of song
     */
    public function deleteSong($song_id)
    {
        $sql = "DELETE FROM song WHERE id = :song_id";
        $query = $this->db->prepare($sql);
        $parameters = array(':song_id' => $song_id);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);
    }

    /**
     * Get a song from database
     */
    public function getSong($song_id)
    {
        $sql = "SELECT id, artist, track, link FROM song WHERE id = :song_id LIMIT 1";
        $query = $this->db->prepare($sql);
        $parameters = array(':song_id' => $song_id);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);

        // fetch() is the PDO method that get exactly one result
        return $query->fetch();
    }

    /**
     * Update a song in database
     * // TODO put this explaination into readme and remove it from here
     * Please note that it's not necessary to "clean" our input in any way. With PDO all input is escaped properly
     * automatically. We also don't use strip_tags() etc. here so we keep the input 100% original (so it's possible
     * to save HTML and JS to the database, which is a valid use case). Data will only be cleaned when putting it out
     * in the views (see the views for more info).
     * @param string $artist Artist
     * @param string $track Track
     * @param string $link Link
     * @param int $song_id Id
     */
    public function updateSong($artist, $track, $link, $song_id)
    {
        $sql = "UPDATE song SET artist = :artist, track = :track, link = :link WHERE id = :song_id";
        $query = $this->db->prepare($sql);
        $parameters = array(':artist' => $artist, ':track' => $track, ':link' => $link, ':song_id' => $song_id);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);
    }

    /**
     * Get simple "stats". This is just a simple demo to show
     * how to use more than one model in a controller (see application/controller/songs.php for more)
     */
    public function getAmountOfSongs()
    {
        $sql = "SELECT COUNT(id) AS amount_of_songs FROM song";
        $query = $this->db->prepare($sql);
        $query->execute();

        // fetch() is the PDO method that get exactly one result
        return $query->fetch()->amount_of_songs;
    }
    public function getAllLeads(){
    	$sql = "SELECT * FROM lead";
    	$query = $this->db->prepare($sql);
    	$query->execute();
    	return $query->fetchAll();
    	
    }
    public function addLead($user_id,$lead_firstname,$lead_midddlename,$lead_lastname,$email,$contact,$address,$qualification,$stream,$status,$nextfollowupDate){
    	$sql="INSERT INTO `lead`(`user_id`, `lead_firstname`, `lead_middlename`, `lead_lastname`, `email`, `contact`, `address`, `qualification`, `stream`, `status`, `nextfollowupDate`) 
    			VALUES (:user_id,:lead_firstname,:lead_middlename,:lead_lastname,:email,:contact,:address,:qualification,:stream,:status,:nextfollowupDate)";
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
    			':nextfollowupDate'=>$nextfollowupDate);
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
    public function updateLead($lead_id,$user_id,$lead_firstname,$lead_midddlename,$lead_lastname,$email,$contact,$address,$qualification,$stream,$status,$nextfollowupDate){
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
    			nextfollowupDate=:nextfollowupDate
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
    			':lead_id' => $lead_id);
    	 
    	// useful for debugging: you can see the SQL behind above construction by using:
//     	    	echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();
    	 
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
    	$sql = "SELECT * FROM user";
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
    	
    	// useful for debugging: you can see the SQL behind above construction by using:
//     	echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();
    	
    	$query->execute($parameters);
    	
    	// fetch() is the PDO method that get exactly one result
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
    	
    	// useful for debugging: you can see the SQL behind above construction by using:
//     	echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();
    	
    	$query->execute($parameters);
    }
    public function getAmountOfUsers(){
    	$sql = "SELECT COUNT(user_id) AS amount_of_users FROM user";
    	$query = $this->db->prepare($sql);
    	$query->execute();
    	
    	// fetch() is the PDO method that get exactly one result
    	return $query->fetch()->amount_of_users;
    }
    
    //     ---------------------------------------------------------------
    public function getAllFollowUps(){
    
    }
    public function addFolllowUp(){
    
    }
    public function deleteFollowUp($followUp_id){
    
    }
    public function getFollowUp($user_id){
    
    }
    public function updateFollowUp(){
    
    }
    public function getAmountOfFollowUpss(){
    
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
    
}

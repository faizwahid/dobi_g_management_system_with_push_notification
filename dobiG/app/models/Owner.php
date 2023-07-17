<?php
class Owner{
    public function __construct()
    {
        $this->db = new Database();
    }

    //Login owner
    public function login($username,$password){
        //finding the user with that username
        $this->db->query('SELECT * FROM owner WHERE username=:username and password=:password;');
        $this->db->bind(':username',$username);
        $this->db->bind(':password',$password);
        //single method will return the whole row as object
        //so you can treat $row as an object, and access the password
        
        if($this->db->single()){
            return true;
        } else {
            return false;
        }
    }

    public function deleteStaff($staffid){
        $this->db->query('delete from staff where id=:id;');
        $this->db->bind(':id',$staffid);
        
        if($this->db->execute()){
            return true;
        } else return false;

    }

    public function getOwnerInformation($username){
        $this->db->query('select * from owner where username=:username;');
        $this->db->bind(':username',$username);
        return $this->db->single();
    }

    // Find user by username
    public function findOwnerByUsername($username){
        $this->db->query('SELECT * FROM owner WHERE username = :username');
        //bind the value to the username 
        $this->db->bind(':username' , $username);

        $row = $this->db->single();

        //check row
        if($this->db->rowCount() > 0){
            return true;
        } else return false;
    }
}
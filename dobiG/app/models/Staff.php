<?php
class Staff{
    public function __construct()
    {
        $this->db = new Database();
    }

    //Login staff
    public function login($username,$password){
        //finding the user with that username
        $this->db->query('SELECT * FROM staff WHERE username=:username;');
        $this->db->bind(':username',$username);
        //single method will return the whole row as object
        //so you can treat $row as an object, and access the password
        
        $row = $this->db->single();

        $hashed_password = $row->password;
        if (password_verify($password, $hashed_password)) {
            return $row;
        } else {
            return false;
        }
    }

    // Register new staff
    public function register($data){
        $this->db->query('INSERT INTO staff (name,username,address,phone,password,created_by) 
        values (:name,:username,:address,:phone,:password,:created_by);');
        // Bind values
        $this->db->bind(':name',$data['name']);
        $this->db->bind(':username',$data['username']);
        $this->db->bind(':address',$data['address']);
        $this->db->bind(':phone',$data['phone']);
        $this->db->bind(':created_by',$data['created_by']);
        $this->db->bind(':password',$data['password']);

        if($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }

    public function updateStaffDetails($data){
        $this->db->query('update staff set username = :username, password = :password,address = :address, phone=:phone where id=:id');
        
        $this->db->bind(':username',$data['username']);
        $this->db->bind(':address',$data['address']);
        $this->db->bind(':phone',$data['phone']);
        $this->db->bind(':password',$data['password']);
        $this->db->bind(':id',$data['staffid']);

        if($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }

    public function findStaffById($staffid){
        $this->db->query('select * from staff where id=:id;');
        $this->db->bind(':id',$staffid);
        $this->db->execute();

        return $this->db->single();
    }

    public function findStaffByUsername($username){
        $this->db->query('select * from staff where username =:username;');
        $this->db->bind(':username',$username);
        $this->db->execute();

        if($this->db->rowCount() > 0){
            return true;
        } else {
            return false;
        }

    }

    public function searchStaff($query){
        $this->db->query("SELECT * FROM  staff WHERE
        (name LIKE '%".$query."%' OR username LIKE '%".$query."%' OR
         address LIKE '%".$query."%')");
        $this->db->execute();
        return $this->db->resultSet();
    }

    public function getStaffDetails($username){
        $this->db->query('select * from staff where username = :username');
        $this->db->bind(':username',$username);
        $this->db->execute();
        return $this->db->single();
    }

    public function getAllStaff(){
        $this->db->query('select * from staff');
        $this->db->execute();
        return $this->db->resultSet();
    }
  
      public function getAllFaqs(){
        $this->db->query('select * from faqs');
        $this->db->execute();
        return $this->db->resultSet();
    }

    public function searchFaqs($query){
        $this->db->query("SELECT * FROM  faqs WHERE
        (title LIKE '%".$query."%' OR description LIKE '%".$query."%')");
        $this->db->execute();
        return $this->db->resultSet();
    }
  
    public function getNoStaffs(){
        $this->db->query('select * from staff');
        $this->db->execute();
        return $this->db->rowCount();
    }
}
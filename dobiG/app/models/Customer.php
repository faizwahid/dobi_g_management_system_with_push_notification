<?php
class Customer
{
    
    public function __construct()
    {
        $this->db = new Database();
    }

    //Login Customer
    public function login($username, $password)
    {
        //finding the user with that username
        $this->db->query('SELECT * FROM customers WHERE username=:username;');
        $this->db->bind(':username', $username);
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

    // Register new Customer
    public function register($data)
    {
        $this->db->query('INSERT INTO customers (name,username,address,phone,password) 
        values (:name,:username,:address,:phone,:password);');
        // Bind values
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':username', $data['username']);
        $this->db->bind(':address', $data['address']);
        $this->db->bind(':phone', $data['phone']);
        $this->db->bind(':password', $data['password']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function updateProfile($data)
    {
        $this->db->query('update customers set name = :name, password = :password,address = :address, phone=:phone where id=:id');

        $this->db->bind(':name', $data['name']);
        $this->db->bind(':address', $data['address']);
        $this->db->bind(':phone', $data['phone']);
        $this->db->bind(':password', $data['password']);
        $this->db->bind(':id', $data['id']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function getCustomerInformation($username)
    {
        $this->db->query('select * from customers where username=:username;');
        $this->db->bind(':username', $username);
        return $this->db->single();
    }

    public function findCustomerById($Customerid)
    {
        $this->db->query('select * from customers where id=:id;');
        $this->db->bind(':id', $Customerid);
        $this->db->execute();

        return $this->db->single();
    }
    //search
    public function findCustomerByUsername($username)
    {
        $this->db->query('select * from customers where username =:username;');
        $this->db->bind(':username', $username);
        $this->db->execute();

        if ($this->db->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function searchCustomer($query)
    {
        $this->db->query("SELECT * FROM  customers WHERE
        (name LIKE '%" . $query . "%' OR username LIKE '%" . $query . "%' OR
         address LIKE '%" . $query . "%')");
        $this->db->execute();
        return $this->db->resultSet();
    }

    public function getAllCustomer()
    {
        $this->db->query('select * from customers');
        $this->db->execute();
        return $this->db->resultSet();
    }

    public function viewProfile($id)
    {
        $this->db->query('select * from customers where id=:id');
        $this->db->bind(':id', $id);
        $this->db->execute();
        return $this->db->single();
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
    public function getNoCustomers(){
        $this->db->query('select * from customers');
        $this->db->execute();
        return $this->db->rowCount();
    }
}

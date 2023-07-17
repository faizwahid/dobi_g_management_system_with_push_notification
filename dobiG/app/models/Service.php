<?php
class Service{
    public function __construct()
    {
        $this->db = new Database();
    }

    public function getPrice($serviceid){
        $this->db->query('select price from services where id=:id');
        $this->db->bind(':id',$serviceid);

        if($this->db->execute()){
            return $this->db->single();
        } else {
            return 0;
        }
    }

    public function getAllServices(){
        $this->db->query('select * from services');
        $this->db->execute();
        return $this->db->resultSet();
    }

    public function deleteService($serviceid){
        $this->db->query('delete from services where id=:id;');
        $this->db->bind(':id',$serviceid);
        
        if($this->db->execute()){
            return true;
        } else return false;
    }

    public function searchServices($query){
        $this->db->query("SELECT * FROM  services WHERE
        (name LIKE '%".$query."%' OR price LIKE '%".$query."%')");
        $this->db->execute();
        return $this->db->resultSet();
    }

    //update existing services
    public function updateServices($data){
        $this->db->query('UPDATE services SET name=:name,price=:price WHERE id=:id');
        // Bind values
        $this->db->bind(':name',$data['name']);
        $this->db->bind(':price',$data['price']);
        $this->db->bind(':id',$data['id']);

        if($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }

    // add new services
    public function addNewServices($data){
        $this->db->query('INSERT INTO services (name,price,created_by) 
        values (:name,:price,:created_by);');
        // Bind values
        $this->db->bind(':name',$data['name']);
        $this->db->bind(':price',$data['price']);
        $this->db->bind(':created_by',$data['created_by']);

        if($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }

    public function findServiceByName($name){
        $this->db->query('select * from services where name =:name;');
        $this->db->bind(':name',$name);
        $this->db->execute();

        if($this->db->rowCount() > 0){
            return true;
        } else {
            return false;
        }
    }

    public function findServiceById($serviceid){
        $this->db->query('select * from services where id=:id;');
        $this->db->bind(':id',$serviceid);
        $this->db->execute();

        return $this->db->single();
    }
  
    public function getNoServices(){
        $this->db->query('select * from services');
        $this->db->execute();
        return $this->db->rowCount();
    }
}
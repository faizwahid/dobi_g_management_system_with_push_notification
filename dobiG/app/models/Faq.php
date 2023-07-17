<?php
class Faq{
    public function __construct()
    {
        $this->db = new Database();
    }

    public function getDescription($faqid){
        $this->db->query('select description from faqs where id=:id');
        $this->db->bind(':id',$faqid);

        if($this->db->execute()){
            return $this->db->single();
        } else {
            return 0;
        }
    }

    public function getAllFaqs(){
        $this->db->query('select * from faqs');
        $this->db->execute();
        return $this->db->resultSet();
    }

    public function deleteFaqs($faqid){
        $this->db->query('delete from faqs where id=:id;');
        $this->db->bind(':id',$faqid);
        
        if($this->db->execute()){
            return true;
        } else return false;
    }

    public function searchFaqs($query){
        $this->db->query("SELECT * FROM  faqs WHERE
        (title LIKE '%".$query."%' OR description LIKE '%".$query."%')");
        $this->db->execute();
        return $this->db->resultSet();
    }

    //update existing services
    public function updateFaqs($data){
        $this->db->query('UPDATE faqs SET title=:title, description=:description WHERE id=:id');
        // Bind values
        $this->db->bind(':title',$data['title']);
        $this->db->bind(':description',$data['description']);
        $this->db->bind(':id',$data['id']);

        if($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }

    // add new services
    public function addNewFaqs($data){
        $this->db->query('INSERT INTO faqs (title,description,created_by) 
        values (:title,:description,:created_by);');
        // Bind values
        $this->db->bind(':title',$data['title']);
        $this->db->bind(':description',$data['description']);
        $this->db->bind(':created_by',$data['created_by']);

        if($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }

    public function findFaqByTitle($title){
        $this->db->query('select * from faqs where title =:title;');
        $this->db->bind(':title',$title);
        $this->db->execute();

        if($this->db->rowCount() > 0){
            return true;
        } else {
            return false;
        }
    }

    public function findFaqById($faqid){
        $this->db->query('select * from faqs where id=:id;');
        $this->db->bind(':id',$faqid);
        $this->db->execute();

        return $this->db->single();
    }
  
    public function getNoFaqs(){
        $this->db->query('select * from faqs');
        $this->db->execute();
        return $this->db->rowCount();
    }
}
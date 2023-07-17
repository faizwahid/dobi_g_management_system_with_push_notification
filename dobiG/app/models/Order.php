<?php
class Order
{
    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAllorders()
    {
        $this->db->query('select orders.id as orderID, services.id as serviceID, services.name as serviceName, 
                            customers.id as customerID, customers.username as customerName, 
                            customers.phone as customerPhone, customers.address as customerAddress, 
                            orders.weight as orderWeight, orders.remark as orderRemarks, 
                            orders.price as orderPrice, orders.status as orderStatus, 
                            orders.created_at as orderCreated,staff.id as staffID, 
                            staff.name as staffName, staff.phone as staffPhone, 
                            staff.address as staffAddress 
                            from orders left join services on services.id = orders.serviceID 
                            left join staff on staff.id = orders.staffID 
                            left join customers on customers.id = orders.custID order by orders.created_at desc');
        $this->db->execute();
        return $this->db->resultSet();
    }

    public function getOrderById($orderid){
        $this->db->query('select orders.id as orderID, services.id as serviceID, services.name as serviceName, 
                            customers.id as customerID, customers.username as customerName, 
                            customers.phone as customerPhone, customers.address as customerAddress, 
                            orders.weight as orderWeight, orders.remark as orderRemarks, 
                            orders.price as orderPrice, orders.status as orderStatus, 
                            orders.created_at as orderCreated,staff.id as staffID, 
                            staff.name as staffName, staff.phone as staffPhone
                            from orders left join services on services.id = orders.serviceID 
                            left join staff on staff.id = orders.staffID 
                            left join customers on customers.id = orders.custID
                            where orders.id = :id');

        $this->db->bind(':id',$orderid);
        $this->db->execute();
        return $this->db->single();
    }

    public function getOrderByCustomerId($custid){
        $this->db->query('select orders.id as orderID, services.id as serviceID, services.name as serviceName, 
                            customers.id as customerID, customers.username as customerName, 
                            customers.phone as customerPhone, customers.address as customerAddress, 
                            orders.weight as orderWeight, orders.remark as orderRemarks, 
                            orders.price as orderPrice, orders.status as orderStatus, 
                            orders.created_at as orderCreated,staff.id as staffID, 
                            staff.name as staffName, staff.phone as staffPhone
                            from orders left join services on services.id = orders.serviceID 
                            left join staff on staff.id = orders.staffID 
                            left join customers on customers.id = orders.custID
                            where orders.custID = :id order by orders.created_at desc');

        $this->db->bind(':id',$custid);
        $this->db->execute();
        return $this->db->resultSet();
    }

    public function deleteOrder($Orderid)
    {
        $this->db->query('delete from orders where id=:id;');
        $this->db->bind(':id', $Orderid);

        if ($this->db->execute()) {
            return true;
        } else return false;
    }

    public function searchOrders($query)
    {
        $this->db->query("SELECT orders.id as orderID, services.id as serviceID, services.name as serviceName, 
                            customers.id as customerID, customers.username as customerName, 
                            customers.phone as customerPhone, customers.address as customerAddress, 
                            orders.weight as orderWeight, orders.remark as orderRemarks, 
                            orders.price as orderPrice, orders.status as orderStatus, 
                            orders.created_at as orderCreated,staff.id as staffID, 
                            staff.name as staffName, staff.phone as staffPhone FROM orders
                            LEFT JOIN services
                            ON services.id = orders.serviceID
                            LEFT JOIN staff
                            ON staff.id = orders.staffID
                            LEFT JOIN customers
                            ON customers.id = orders.custID
                            WHERE customers.name LIKE '%" . $query . "%'
                            OR customers.username LIKE '%" . $query . "%'
                            OR customers.id LIKE '%" . $query . "%'
                            OR customers.phone LIKE '%" . $query . "%'
                            OR customers.address LIKE '%" . $query . "%'
                            OR staff.username LIKE '%" . $query . "%'
                            OR staff.id LIKE '%" . $query . "%'
                            OR staff.phone LIKE '%" . $query . "%'
                            OR staff.address LIKE '%" . $query . "%'
                            OR services.id LIKE '%" . $query . "%'
                            OR services.name LIKE '%" . $query . "%'
                            OR services.price LIKE '%" . $query . "%'
                            OR orders.id LIKE '%" . $query . "%'
                            OR orders.weight LIKE '%" . $query . "%'
                            OR orders.remark LIKE '%" . $query . "%'
                            OR orders.price LIKE '%" . $query . "%'
                            OR orders.status LIKE '%" . $query . "%' order by orders.created_at desc;");

        
        $this->db->execute();

        if(isset($_SESSION['searched_row_count'])){
            unset($_SESSION['searched_row_count']);
        }
        $_SESSION['searched_row_count'] = $this->db->rowCount();
        return $this->db->resultSet();
    }

    //update existing orders
    public function updateOrder($data,$totalPrice)
    {
        $this->db->query('update orders set serviceID=:serviceID, weight=:weight,
                            remark=:remark, price=:totalPrice, 
                            status=:status
                            where id=:orderID;');   
        // Bind values
        $this->db->bind(':serviceID', $data['service_select']);
        $this->db->bind(':weight', $data['weight']);
        $this->db->bind(':remark', $data['remarks']);
        $this->db->bind(':totalPrice', $totalPrice);
        $this->db->bind(':status','processing');
        $this->db->bind(':orderID', $data['orderid']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    //accept that order
    public function acceptOrder($orderid,$staffid){
        $this->db->query('update orders set staffID=:staffid,status=:status where id=:orderid');
        $this->db->bind(':staffid',$staffid);
        $this->db->bind(':orderid',$orderid);
        $this->db->bind(':status','pending');
        
        if($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }

    public function completeOrder($orderid){
        $this->db->query('update orders set status=:status where id=:orderid;');
        $this->db->bind(':orderid',$orderid);
        $this->db->bind(':status','completed');

        if($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }

    public function cancelOrder($orderid, $remarks){
        $this->db->query('update orders set status=:status, cancel_remarks=:remarks where id=:orderid;');
        $this->db->bind(':orderid',$orderid);
        $this->db->bind(':remarks',$remarks);
        $this->db->bind(':status','cancelled');

        if($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }

    // add new orders
    public function addOrders($data)
    {

        $this->db->query('INSERT INTO orders (serviceID,remark,status,custID) 
        values (:serviceID,:remark,:status,:custID);');
        // Bind values
        $this->db->bind(':serviceID', $data['select_service']);
        $this->db->bind(':remark', $data['remarks']);
        $this->db->bind(':custID', $data['custid']);
        $this->db->bind(':status', 'in queue');

        if ($this->db->execute()) {
            // get id of inserted
            $orderid = $this->db->lastInsertId();
            $this->db->query('INSERT INTO notifications (title, body, userid, orderid) VALUES (:title, :body, :userid, :orderid)');
            $this->db->bind(':title', "Order in queue");
            $this->db->bind(':body', "Your order has been queued. Stay tuned for updates!");
            $this->db->bind(':userid', $data['custid']);
            $this->db->bind(':orderid', $orderid);
            $this->db->execute();
            return true;
        } else {
            return false;
        }
    }

    public function findOrderByName($name)
    {
        $this->db->query('select * from orders where name =:name;');
        $this->db->bind(':name', $name);
        $this->db->execute();

        if ($this->db->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function findOrderById($Orderid)
    {
        $this->db->query('select * from orders where id=:id;');
        $this->db->bind(':id', $Orderid);
        $this->db->execute();

        return $this->db->single();
    }
 
 //    public function getNoCompleted(){
 //       $this->db->query('select * from orders where status=:status;');
 //       $this->db->bind(':status','completed');
 //       $this->db->execute();
 //       return $this->db->rowcount();
 //   }
 // 	 public function getTotalPrice(){
 //       $this->db->query('select sum(price) as total from orders where status=:status;');
 //       $this->db->bind(':status','completed');
 //      	$this->db->bind(':status','completed');
 //       $this->db->execute();
 //       return $this->db->rowcount();
 //   }
}

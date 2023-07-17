<?php
class Notification
{
    public function __construct()
    {
        $this->db = new Database();
    }

    public function notify($orderid, $action) {
        // get userid from orderid
        $this->db->query('SELECT custID FROM orders WHERE id = :orderid');
        $this->db->bind(':orderid', $orderid);
        $this->db->execute();
        $result = $this->db->single();
        $userid = $result->custID;

        // insert a notification into the database
        if ($action == 'in queue') {
            $title = 'Order in queue!';
            $body = 'Your order #'.$orderid.' has been queued. Stay tuned for updates!';
        }
        else if ($action == 'pending') {
            $title = 'Order Accepted!';
            $body = 'Your order #'.$orderid.' has been accepted, please wait while the assigned staff weights your laundry.';
        }
        else if ($action == 'processing') {
            $title = 'Order in progress!';
            $body = 'Our staff is currently washing your  #'.$orderid.' laundry. Stay tuned for updates!';
        }
        else if ($action == 'completed') {
            $title = 'Order Completed!';
            $body = 'Your order #'.$orderid.' has been completed! Please come to the counter to collect your laundry.';
        }
        else if ($action == 'cancelled') {
            // get the remarks
            $this->db->query('SELECT cancel_remarks FROM orders WHERE id = :orderid');
            $this->db->bind(':orderid', $orderid);
            $this->db->execute();
            $result = $this->db->single();
            $title = 'Order Cancelled!';
            $body = 'Your order #'.$orderid.' has been cancelled. Reason given by our staff: ' . $result->cancel_remarks;
        }

        $this->db->query('INSERT INTO notifications (title, body, userid, orderid) VALUES (:title, :body, :userid, :orderid)');
        $this->db->bind(':title', $title);
        $this->db->bind(':body', $body);
        $this->db->bind(':userid', $userid);
        $this->db->bind(':orderid', $orderid);
        $this->db->execute();
    }

    public function getNotify($userid) {
        // get one notification from the database, and set notified to 1
        $this->db->query('SELECT * FROM notifications WHERE userid = :userid AND notified = 0 LIMIT 1');
        $this->db->bind(':userid', $userid);
        $this->db->execute();
        $result = $this->db->single();
        if ($result) {
            $this->notified($result->id);
            return $result;
        }
        else {
            return null;
        }
    }

    public function notified($id) {
        $this->db->query('UPDATE notifications SET notified = 1 WHERE id = :id');
        $this->db->bind(':id', $id);
        $this->db->execute();
    }

}
?>
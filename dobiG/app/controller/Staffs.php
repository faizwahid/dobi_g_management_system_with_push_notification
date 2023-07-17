<?php
class Staffs extends Controller
{
    public function __construct()
    {
        if(isset($_SESSION['valid_actor'])){
            if($_SESSION['valid_actor']!='staff'){
                redirect('staffs/login');
            }
        }

        //unset current controller
        if (isset($_SESSION['current_controller'])) {
            unset($_SESSION['current_controller']);
        }
        $_SESSION['current_controller'] = 'Staffs';

        //unset current actor if exist
        if (isset($_SESSION['current_actor'])) {
            unset($_SESSION['current_actor']);
        }

        //set current actor to staff
        $_SESSION['current_actor'] = 'staff';

        if(isset($_SESSION['valid_actor']) && $_SESSION['valid_actor']!='staff'){
            redirect('staffs/login');
        }

        //$this->orderModel = $this->model('Order');
        $this->orderModel = $this->model('Order');
        $this->staffModel = $this->model('Staff');
        $this->serviceModel = $this->model('Service');
        $this->notificationModel = $this->model('Notification');
    }

    public function index()
    {
        if (isset($_SESSION['valid_actor'])) {
            unset($_SESSION['valid_actor']);
        }
        //init data
        $data = [
            'username' => '',
            'password' => '',

            'username_err' => '',
            'password_err' => '',
        ];

        //load view
        $this->view('staff/login', $data);
    }

    public function login()
    {
        if (isset($_SESSION['valid_actor'])) {
            unset($_SESSION['valid_actor']);
        }
        //check for POST
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //process the login form
            //sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            //init data
            $data = [
                'username' => trim($_POST['username']),
                'password' => trim($_POST['password']),

                'username_err' => '',
                'password_err' => '',
            ];

            if (empty($data['username'])) {
                $data['username_err'] = 'Please enter username';
            }

            if (empty($data['password'])) {
                $data['password_err'] = 'Please enter your password';
            }

            //check for customer username
            if ($this->staffModel->findStaffByUsername($data['username'])) {
                //user found
            } else {
                $data['username_err'] = 'No user found';
            }

            //make sure errors are empty
            if (empty($data['username_err']) && empty($data['password_err'])) {
                //validated
                //Check and set logged in user

                $loggedInUser = $this->staffModel->login($data['username'], $data['password']);
                if ($loggedInUser) {
                    $staffObj = $this->staffModel->getStaffDetails($data['username']);
                    if(isset($_SESSION['currentUser'])){
                        unset($_SESSION['currentUser']);
                    }
                    //create session
                    $_SESSION['currentUser'] = $staffObj;

                    if (isset($_SESSION['valid_actor'])) {
                        unset($_SESSION['valid_actor']);
                    }
                    $_SESSION['valid_actor'] = 'staff';

                    redirect('staffs/viewOrders');
                } else {
                    $data['password_err'] = 'Password Incorrect';
                    $this->view('staff/login', $data);
                }
            } else {
                //Load view with errors
                $this->view('staff/login', $data);
            }
        } else {
            //init data
            $data = [
                'username' => '',
                'password' => '',

                'username_err' => '',
                'password_err' => '',
            ];

            //load view
            $this->view('staff/login', $data);
        }
    }

    public function viewOrders()
    {
      	if($_SESSION['valid_actor']!='staff'){
        	redirect('staffs/login');
        }
      
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //view all orders with searched query
            $query = $_POST['query'];
            //load orders details with searched query from db
            $orders = $this->orderModel->searchOrders($query);
            flash('search_results',$_SESSION['searched_row_count'].' results found for "'.$query.'"','alert alert-info');
            $data = [
                'orders' => $orders,
                'query' => $query,
            ];
            $this->view('staff/orders/viewOrders', $data);
        } else {
            //load all order details from db
            $orders = $this->orderModel->getAllorders();
            //store all order details from db
            $data = [
                'orders' => $orders,
            ];
            $this->view('staff/orders/viewOrders', $data);
        }
    }

    public function updateOrder($orderid)
    {
      	if($_SESSION['valid_actor']!='staff'){
        	redirect('staffs/login');
        }
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //process the login form
            $action = $_POST['action'];
            if($action == 'Update'){
            //sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            //init data
            $orders = $this->orderModel->getOrderById($orderid);
            $services = $this->serviceModel->getAllServices();

            $data = [
                'service_select' => trim($_POST['service_select']),
                'remarks' => trim($_POST['remarks']),
                'weight' => trim($_POST['weight']),
                'orderid' => $orderid,
                'services' => $services,
                'orders' => $orders,

                'service_select_err' => '',
                'remarks_err' => '',
                'weight_err' => ''
            ];

            if(empty($data['remarks'])){
                $data['remarks_err'] = 'Please fill in this information';
            }

            if(empty($data['weight'])){
                $data['weight_err'] = "Please enter garment weight";
            }

            if(empty($data['remarks_err']) && empty($data['weight_err'])){
                //what will be updated in the order table
                /*
                1.serviceid (if there is any change)
                2.weight
                3.remark (if there is any change)
                4.order total price (service price * weight)
                */

                //get price of that particular service id
                $servicePrice = $this->serviceModel->getPrice($data['service_select']);
                $servicePrice = $servicePrice->price;
                //calculate total price
                $totalPrice = $servicePrice * $data['weight'];

                //update order table
                if($this->orderModel->updateOrder($data,$totalPrice)){
                    $this->notificationModel->notify($orderid, "processing");
                    flash('update_order_success','successfully update order #'.$orderid);
                    redirect('staffs/viewOrders');
                } else {
                    flash('update_order_fail','fail to update order #'.$orderid.'. Something went wrong','alert alert-danger');
                    redirect('staffs/viewOrders');
                }
                
                die('ready to update order table');
            } else {
                //load views with error
                $this->view('staff/orders/updateOrders',$data);
            }
        }else if($action == 'Cancel'){
            redirect('staffs/viewOrders');
        }
        } else {
            //load that order details
            $orders = $this->orderModel->getOrderById($orderid);
            $services = $this->serviceModel->getAllServices();

            $data = [
                'services' => $services,
                'orders' => $orders,
            ];

            $this->view('staff/orders/updateOrders', $data);
        }
    }

    public function completeOrder($orderid){
        if($this->orderModel->completeOrder($orderid)){
            $this->notificationModel->notify($orderid, "completed");
            flash('complete_order_success','successfully completed order #'.$orderid);
            redirect('staffs/viewOrders');
        } else {
            flash('complete_order_fail','fail to complete order. Something went wrong','alert alert-danger');
            redirect('staffs/viewOrders');
        }
    }

    public function acceptOrder($orderid){
        if($this->orderModel->acceptOrder($orderid,$_SESSION['currentUser']->id)){
            $this->notificationModel->notify($orderid, "pending");
            flash('accept_order_success','successfully assigned order to '.$_SESSION['currentUser']->username.'');
            redirect('staffs/viewOrders');
        } else {
            flash('accept_order_fail','fail to accept order. Something went wrong','alert alert-danger');
            redirect('staffs/viewOrders');
        }
    }

    public function cancelOrder($orderid){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $remarks = $_POST['cancelremarks'];
            if($this->orderModel->cancelOrder($orderid,$remarks)){
                // notify
                $this->notificationModel->notify($orderid, "cancelled");
                flash('cancel_order_success','order #'.$orderid.' has been cancelled','alert alert-warning');
                redirect('staffs/viewOrders');
            } else {
                flash('cancel_order_fail','fail to cancel order. Something went wrong','alert alert-danger');
                redirect('staffs/viewOrders');
            }
        }
        // if($this->orderModel->cancelOrder($orderid)){
        //     flash('cancel_order_success','order #'.$orderid.' has been cancelled','alert alert-warning');
        //     redirect('staffs/viewOrders');
        // } else {
        //     flash('cancel_order_fail','fail to cancel order. Something went wrong','alert alert-danger');
        //     redirect('staffs/viewOrders');
        // }
    }
  
      public function viewFaqs()
    {
      	if($_SESSION['valid_actor']!='staff'){
        	redirect('staffs/login');
        }
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //view all faqs with searched query
            $query = $_POST['query'];
            //load faq details with searched query from db
            $faqs = $this->staffModel->searchFaqs($query);
            $data = [
                'faqs' => $faqs,
                'query' => $query,
            ];
            $this->view('staff/faqs/viewFaqs', $data);
        } else {
            //load all faq details from db
            $faqs = $this->staffModel->getAllFaqs();
            //store all faq details from db
            $data = [
                'faqs' => $faqs,
            ];
            $this->view('staff/faqs/viewFaqs', $data);
        }
    }


    public function logout(){
        if(isset($_SESSION['valid_actor'])){
            unset($_SESSION['valid_actor']);
        }

        if(isset($_SESSION['currentUser'])){
            unset($_SESSION['currentUser']);
        }

        redirect('staffs/login');
    }
}

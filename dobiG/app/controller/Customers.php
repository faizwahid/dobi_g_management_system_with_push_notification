<?php
class Customers extends Controller
{
    public function __construct()
    {
        if (isset($_SESSION['valid_actor'])) {
            if ($_SESSION['valid_actor'] != 'customer') {
                redirect('customers/login');
            }
        }
        //unset current controller
        if (isset($_SESSION['current_controller'])) {
            unset($_SESSION['current_controller']);
        }
        $_SESSION['current_controller'] = 'Customers';

        //unset current actor if exist
        if (isset($_SESSION['current_actor'])) {
            unset($_SESSION['current_actor']);
        }

        //set current actor to customer
        $_SESSION['current_actor'] = 'customer';

        //$this->orderModel = $this->model('Order');
        $this->orderModel = $this->model('Order');
        $this->customerModel = $this->model('Customer');
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
        $this->view('customer/login', $data);
    }

    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //process the form
            $action = $_POST['action'];
            if($action == 'Submit'){
            //sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            //init data
            $data = [
                'name' => trim($_POST['name']),
                'username' => trim($_POST['username']),
                'phone' => trim($_POST['phone']),
                'address' => trim($_POST['address']),
                'password' => trim($_POST['password']),
                'confirm_password' => trim($_POST['confirm_password']),

                'name_err' => '',
                'username_err' => '',
                'phone_err' => '',
                'address_err' => '',
                'password_err' => '',
                'confirm_password_err' => ''
            ];

            //validation
            if (empty($data['username'])) {
                $data['username_err'] = 'Please enter your username';
            } else {
                if (strlen($data['username']) > 20) {
                    $data['username_err'] = 'Username should not be more than 20 characters';
                }
                //check username
                else if ($this->customerModel->findCustomerByUsername($data['username'])) {
                    $data['username_err'] = 'The username is already taken';
                }
            }
            if (empty($data['name'])) {
                $data['name_err'] = 'Please enter your name';
            }

            if (empty($data['phone'])) {
                $data['phone_err'] = 'Please enter phone number';
            } else if (strlen($data['phone']) != 10 && strlen($data['phone']) != 11) {
                $data['phone_err'] = 'Please enter a valid phone number';
            } else if (!is_numeric($data['phone'])) {
                $data['phone_err'] = 'Not a valid phone number';
            }

            if (empty($data['address'])) {
                $data['address_err'] = 'Please enter your address';
            }

            if (empty($data['password'])) {
                $data['password_err'] = 'Please enter your password';
            } else if (strlen($data['password']) < 6) {
                $data['password_err'] = 'Password must be at least 6 characters';
            }

            if (empty($data['confirm_password'])) {
                $data['confirm_password_err'] = 'Please confirm your password';
            } else {
                if ($data['password'] != $data['confirm_password']) {
                    $data['confirm_password_err'] = 'Password do not match';
                }
            }

            //make sure errors are empty
            if (
                empty($data['username_err']) && empty($data['name_err'])
                && empty($data['password_err']) && empty($data['confirm_password_err'])
                & empty($data['phone_err']) && empty($data['address_err'])
            ) {
                //validated
                $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

                // Register User
                if ($this->customerModel->register($data)) {
                    //redirect to home page
                    flash('customer_register_success', 'Please proceed to login');
                    redirect('customers/login');
                } else {
                    flash('customer_register_failed', 'failed to registers. Something went wrong', 'alert alert-danger');
                    redirect('customers/register');
                }
            } else {
                //Load view with errors
                $this->view('customer/register', $data);
            }
        }else if($action == 'Cancel'){
            redirect('customers/login');
        }              
        } else {
            //init data
            $data = [
                'name' => '',
                'username' => '',
                'phone' => '',
                'address' => '',
                'password' => '',
                'confirm_password' => '',

                'name_err' => '',
                'username_err' => '',
                'phone_err' => '',
                'address_err' => '',
                'password_err' => '',
                'confirm_password_err' => ''
            ];

            $this->view('customer/register', $data);
        }
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
            if ($this->customerModel->findCustomerByUsername($data['username'])) {
                //user found
            } else {
                $data['username_err'] = 'No user found';
            }

            //make sure errors are empty
            if (empty($data['username_err']) && empty($data['password_err'])) {
                //validated
                //Check and set logged in user

                $loggedInUser = $this->customerModel->login($data['username'], $data['password']);
                if ($loggedInUser) {
                    $customerObj = $this->customerModel->getCustomerInformation($data['username']);
                    if (isset($_SESSION['currentUser'])) {
                        unset($_SESSION['currentUser']);
                    }
                    //create session
                    $_SESSION['currentUser'] = $customerObj;

                    if (isset($_SESSION['valid_actor'])) {
                        unset($_SESSION['valid_actor']);
                    }
                    $_SESSION['valid_actor'] = 'customer';

                    redirect('customers/viewOrders');
                } else {
                    $data['password_err'] = 'Password Incorrect';
                    $this->view('customer/login', $data);
                }
            } else {
                //Load view with errors
                $this->view('customer/login', $data);
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
            $this->view('customer/login', $data);
        }
    }

    public function viewOrders()
    {
      	if($_SESSION['valid_actor']!='customer'){
        	redirect('customers/login');
        }
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //view all orders with searched query
            $query = $_POST['query'];
            //load orders details with searched query from db
            $orders = $this->orderModel->searchOrders($query);
            $data = [
                'orders' => $orders,
                'query' => $query,
            ];
            $this->view('customer/orders/viewOrders', $data);
        } else {
            //load all order details from db
            $orders = $this->orderModel->getOrderByCustomerId($_SESSION['currentUser']->id);
            //store all order details from db
            $data = [
                'orders' => $orders,
            ];
            $this->view('customer/orders/viewOrders', $data);
        }
    }

    public function addOrders()
    {
      	if($_SESSION['valid_actor']!='customer'){
        	redirect('customers/login');
        }
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $services = $this->serviceModel->getAllServices();
            //process the add order form
            $action = $_POST['action'];
            if ($action == 'Add') {
                //sanitize POST data
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
                //init data
                $data = [
                    'services' => $services,
                    'select_service' => $_POST['select_service'],
                    'remarks' => trim($_POST['remarks']),
                    'custid' => $_SESSION['currentUser']->id,

                    'select_service_err' => '',
                    'remarks_err' => '',
                ];



                if (empty($data['select_service'])) {
                    $data['select_service_err'] = 'Please select service';
                }

                if (empty($data['remarks'])) {
                    $data['remarks_err'] = 'Please fill in this details';
                }

                //make sure errors are empty
                if (empty($data['select_service_err']) && empty($data['remarks_err'])) {
                    //validated
                    //ready to add order to database

                    if ($this->orderModel->addOrders($data)) {
                        flash('order_add_success', 'successfully create new order');
                        redirect('customers/viewOrders');
                    } else {
                        flash('order_add_fail', 'fail to create new order');
                        redirect('customers/viewOrders');
                    }
                } else {
                    //Load view with errors
                    $this->view('customer/orders/addOrders', $data);
                }
            } else if ($action == 'Cancel') {
                redirect('customers/vieworders');
            }
        } else {
            //load services data from service model
            $services = $this->serviceModel->getAllServices();

            $data = [
                //init data
                'services' => $services,
                'service_select' => '',
                'remarks' => '',

                'service_select_err' => '',
                'remarks_err' => '',
            ];

            $this->view('customer/orders/addOrders', $data);
        }
    }

    public function logout()
    {
        if (isset($_SESSION['valid_actor'])) {
            unset($_SESSION['valid_actor']);
        }

        if (isset($_SESSION['currentUser'])) {
            unset($_SESSION['currentUser']);
        }

        redirect('customers/login');
    }

    public function updateProfile()
    {
      	if($_SESSION['valid_actor']!='customer'){
        	redirect('customers/login');
        }
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //process form
            $action = $_POST['action'];
            if ($action == 'Update') {
                //sanitize POST data
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                //init data
                $data = [
                    'name' => trim($_POST['name']),
                    'username' => $_SESSION['currentUser']->username,
                    'phone' => trim($_POST['phone']),
                    'address' => trim($_POST['address']),
                    'password' => trim($_POST['password']),
                    'confirm_password' => trim($_POST['confirm_password']),
                    'id' => $_SESSION['currentUser']->id,

                    'name_err' =>'',
                    'phone_err' => '',
                    'address_err' => '',
                    'password_err' => '',
                    'confirm_password_err' => ''
                ];

            
                if (empty($data['name'])) {
                    $data['name_err'] = 'Please enter your name';
                }
                if (empty($data['phone'])) {
                    $data['phone_err'] = 'Please enter phone number';
                } else if (strlen($data['phone']) != 10 && strlen($data['phone']) != 11) {
                    $data['phone_err'] = 'Please enter a valid phone number';
                } else if (!is_numeric($data['phone'])) {
                    $data['phone_err'] = 'Not a valid phone number';
                }

                if (empty($data['address'])) {
                    $data['address_err'] = 'Please enter your address';
                }

                if (empty($data['password'])) {
                    $data['password_err'] = 'Please enter your password';
                } else if (strlen($data['password']) < 6) {
                    $data['password_err'] = 'Password must be at least 6 characters';
                }

                if (empty($data['confirm_password'])) {
                    $data['confirm_password_err'] = 'Please confirm your password';
                } else {
                    if ($data['password'] != $data['confirm_password']) {
                        $data['confirm_password_err'] = 'Password do not match';
                    }
                }

                //make sure errors are empty
                if (
                    empty($data['name_err'])
                    && empty($data['password_err']) && empty($data['confirm_password_err'])
                    && empty($data['phone_err']) && empty($data['address_err'])
                ) {
                    //validated
                    //hash the password (1-way hashing algorithm)
                    $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

                    // update staff
                    if ($this->customerModel->updateProfile($data)) {
                        //redirect owners/viewStaff
                        flash('customer_update_success', 'successfully update your details');
                        redirect('customers/viewProfile');
                    } else {
                        flash('customer_update_failed', 'failed to update your details. Something went wrong', 'alert alert-danger');
                        redirect('customers/viewProfile');
                    }
                } else {
                    //Load view with errors
                    $this->view('customer/accounts/updateProfiles', $data);
                }
            } else if ($action == 'Cancel') {
                redirect('customers/viewProfile');
            }
        } else {

            $_SESSION['currentUser'] = $this->customerModel->getCustomerInformation($_SESSION['currentUser']->username);

            $data = [
                'name' => $_SESSION['currentUser']->name,
                'username' => $_SESSION['currentUser']->username,
                'phone' => $_SESSION['currentUser']->phone,
                'address' => $_SESSION['currentUser']->address,
                'password' => '',
                'confirm_password' => '',

                'name_err' =>'',
                'username_err' =>'',
                'phone_err' => '',
                'address_err' => '',
                'password_err' => '',
                'confirm_password_err' => ''
            ];

            $this->view('customer/accounts/updateProfiles', $data);
        }
    }




   public function viewProfile()
    {
      	if($_SESSION['valid_actor']!='customer'){
        	redirect('customers/login');
        }
            //load customer profile
            $customer = $this->customerModel->viewProfile($_SESSION['currentUser']->id);
            //store all faq details from db
            $data = [
                'customer' => $customer,
            ];
            $this->view('customer/accounts/viewProfiles', $data);
        
    }

    public function viewFaqs()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //view all faqs with searched query
            $query = $_POST['query'];
            //load faq details with searched query from db
            $faqs = $this->customerModel->searchFaqs($query);
            $data = [
                'faqs' => $faqs,
                'query' => $query,
            ];
            $this->view('customer/faqs/viewFaqs', $data);
        } else {
            //load all faq details from db
            $faqs = $this->customerModel->getAllFaqs();
            //store all faq details from db
            $data = [
                'faqs' => $faqs,
            ];
            $this->view('customer/faqs/viewFaqs', $data);
        }
    }
  

    public function notification() {
        $notifications = $this->notificationModel->getNotify($_SESSION['currentUser']->id);
        if ($notifications != null) {
            $notify = array();
            $notify['title'] = $notifications->title;
            $notify['body'] = $notifications->body;
            $notify['icon'] = URLROOT.'/img/g.png';
            $notify['url'] = 'https://faizwahid.store/customers/viewOrders';
            
            http_response_code(200);
            header('Content-Type: application/json');
            echo json_encode($notify);
            exit();
        }
        else {
            http_response_code(204);
        }
    }
}

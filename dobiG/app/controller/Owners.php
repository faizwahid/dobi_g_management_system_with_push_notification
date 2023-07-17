<?php
class Owners extends Controller
{
    public function __construct()
    {
        if(isset($_SESSION['valid_actor'])){
            if($_SESSION['valid_actor']!='owner'){
                redirect('owners/login');
            }
        }

        //unset current controller
        if (isset($_SESSION['current_controller'])) {
            unset($_SESSION['current_controller']);
        }
        $_SESSION['current_controller'] = 'Owners';

        //unset current actor if exist
        if (isset($_SESSION['current_actor'])) {
            unset($_SESSION['current_actor']);
        }

        //set current actor to owner
        $_SESSION['current_actor'] = 'owner';

        $this->ownerModel = $this->model('Owner');
        $this->staffModel = $this->model('Staff');
        $this->serviceModel = $this->model('Service');
        $this->faqModel = $this->model('Faq');
      	$this->customerModel = $this->model('Customer');
      	$this->orderModel = $this->model('Order');
    }

    public function deleteServices($serviceid)
    {
      	if($_SESSION['valid_actor']!='owner'){
        	redirect('owners/login');
        }
        if ($this->serviceModel->deleteService($serviceid)) {
            flash('successful_delete_service', 'successfully delete service', 'alert alert-warning');
            redirect('owners/viewServices');
        } else {
            flash('fail_delete_service', 'fail to delete service. Something went wrong', 'alert alert-danger');
            redirect('owners/viewServices');
        }
    }
    //update existing service
    public function updateServices($serviceid)
    {
      	if($_SESSION['valid_actor']!='owner'){
        	redirect('owners/login');
        }
        //this method will handle
        //1. view that particular service
        //2. update that particular service

        if (isset($_SESSION['current_viewed_service'])) {
            unset($_SESSION['current_viewed_service']);
        }
        $serviceDetails = $this->serviceModel->findServiceById($serviceid);
        $_SESSION['current_viewed_service'] = $serviceDetails;

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //process the form
            $action = $_POST['action'];
            if($action == 'Update'){
            //sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            //init data
            $data = [
                'name' => trim($_POST['name']),
                'price' => trim($_POST['price']),
                'created_by' => '',
                'id'=> $serviceDetails->id,

                'name_err' => '',
                'price_err' => '',
            ];


            //validation
            if (empty($data['name'])) {
                $data['name_err'] = 'Please enter service name';
            } else {
                if($data['name'] != $serviceDetails->name){
                    //if input data is not equal to previous name, need to check if found duplicate
                    if($this->serviceModel->findServiceByName($data['name'])){
                        $data['name_err'] = 'Service already exist';
                    }
                } 
            }

            if (empty($data['price'])) {
                $data['price_err'] = 'Please enter service price';
            } else if (!is_numeric($data['price'])) {
                $data['phone_err'] = 'Please enter a valid price';
            }

            //make sure errors are empty
            if (
                empty($data['name_err'])
                && empty($data['price_err'])
            ) {
                //validated
                $data['created_by'] = $_SESSION['currentUser']->id;

                // update existing service
                if ($this->serviceModel->updateServices($data)) {
                    //redirect to service view
                    flash('service_update_success', 'successfully update service');
                    redirect('owners/viewServices');
                } else {
                    flash('service_update_failed', 'failed to update service. Something went wrong', 'alert alert-danger');
                    redirect('owners/viewServices');
                }
            } else {
                //Load view with errors
                $this->view('owner/services/updateServices', $data);
            }
        }else if($action == 'Cancel'){
            redirect('owners/viewServices');
        }

        } else {

            //init data
            $data = [
                'id' => $serviceDetails->id,
                'name' => $serviceDetails->name,
                'price' => $serviceDetails->price,

                'name_err' => '',
                'price_err' => '',
            ];

            $this->view('owner/services/updateServices', $data);
        }
    }

    public function addServices()
    {
      	if($_SESSION['valid_actor']!='owner'){
        	redirect('owners/login');
        }
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //process the form
            $action = $_POST['action'];
            if($action == 'Add'){
            //sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            //init data
            $data = [
                'name' => trim($_POST['name']),
                'price' => trim($_POST['price']),
                'created_by' => '',

                'name_err' => '',
                'price_err' => '',
            ];

            //validation
            if (empty($data['name'])) {
                $data['name_err'] = 'Please enter service name';
            } else {
                if($this->serviceModel->findServiceByName($data['name'])){
                    $data['name_err'] = 'Service already exist';
                }
            }

            if (empty($data['price'])) {
                $data['price_err'] = 'Please enter service price';
            } else if (!is_numeric($data['price'])) {
                $data['phone_err'] = 'Please enter a valid price';
            }

            //make sure errors are empty
            if (
                empty($data['name_err'])
                && empty($data['price_err'])
            ) {
                //validated
                $data['created_by'] = $_SESSION['currentUser']->id;

                // add new service
                if ($this->serviceModel->addNewServices($data)) {
                    //redirect to service view
                    flash('service_add_success', 'new service has been added');
                    redirect('owners/viewServices');
                } else {
                    flash('service_add_failed', 'failed to add new services. Something went wrong', 'alert alert-danger');
                    redirect('owners/viewServices');
                }
            } else {
                //Load view with errors
                $this->view('owner/services/addServices', $data);
            }

            }else if($action == 'Cancel'){
                redirect('owners/viewServices');
            }

        } else {

            //init data
            $data = [
                'name' => '',
                'price' => '',

                'name_err' => '',
                'price_err' => '',
            ];

            $this->view('owner/services/addServices', $data);
        }
        
    }

    public function viewServices()
    {
      	if($_SESSION['valid_actor']!='owner'){
        	redirect('owners/login');
        }
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //view all services with searched query
            $query = $_POST['query'];
            //load staff details with searched query from db
            $services = $this->serviceModel->searchServices($query);
            $data = [
                'services' => $services,
                'query' => $query,
            ];
            $this->view('owner/services/viewServices', $data);
        } else {
            //load all staff details from db
            $services = $this->serviceModel->getAllServices();
            //store all staff details from db
            $data = [
                'services' => $services,
            ];
            $this->view('owner/services/viewServices', $data);
        }
    }

    //if owners is the first controller, 
    //by default it will redirect to login page
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
        $this->view('owner/login', $data);
    }

    public function deleteStaff($staffid)
    {
      	if($_SESSION['valid_actor']!='owner'){
        	redirect('owners/login');
        }
        if ($this->ownerModel->deleteStaff($staffid)) {
            flash('successful_delete_staff', 'successfully delete staff', 'alert alert-warning');
            redirect('owners/viewStaff');
        } else {
            flash('fail_delete_staff', 'fail to delete staff. Something went wrong', 'alert alert-danger');
            redirect('owners/viewStaff');
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

            //check for owner username
            if ($this->ownerModel->findOwnerByUsername($data['username'])) {
                //user found
            } else {
                $data['username_err'] = 'No user found';
            }

            //make sure errors are empty
            if (empty($data['username_err']) && empty($data['password_err'])) {
                //validated
                //Check and set logged in user

                $loggedInUser = $this->ownerModel->login($data['username'], $data['password']);
                if ($loggedInUser) {
                    $ownerObj = $this->ownerModel->getOwnerInformation($data['username']);
                    //create session
                    $_SESSION['currentUser'] = $ownerObj;

                    if(isset($_SESSION['valid_actor'])){
                        unset($_SESSION['valid_actor']);
                    }

                    $_SESSION['valid_actor'] = 'owner';
                    redirect('owners/viewStaff');
                } else {
                    $data['password_err'] = 'Password Incorrect';
                    $this->view('owner/login', $data);
                }
            } else {
                //Load view with errors
                $this->view('owner/login', $data);
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
            $this->view('owner/login', $data);
        }
    }

   public function addStaff()
    {
      	if($_SESSION['valid_actor']!='owner'){
        	redirect('owners/login');
        }
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //process the form
            $action = $_POST['action'];
            if($action == 'Add'){
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
                'created_by' => '',

                'name_err' => '',
                'username_err' => '',
                'phone_err' => '',
                'address_err' => '',
                'password_err' => '',
                'confirm_password_err' => ''
            ];

            //validation
            if (empty($data['username'])) {
                $data['username_err'] = 'Please enter staff username';
            } else {
                if (strlen($data['username']) > 20) {
                    $data['username_err'] = 'Staff username should not be more than 20 characters';
                }
                else if (strlen($data['username']) <= 4) {
                    $data['username_err'] = 'Staff username should  be more than 4 characters';
                }
                //check username
                else if ($this->staffModel->findStaffByUsername($data['username'])) {
                    $data['username_err'] = 'Staff username is already taken';
                }
            }
            if (empty($data['name'])) {
                $data['name_err'] = 'Please enter staff name';
            }else {
                if (strlen($data['name']) > 20) {
                    $data['name_err'] = 'Name should not be more than 20 characters';
                }
                else if (strlen($data['name']) <= 4) {
                    $data['name_err'] = 'Name should  be more than 4 characters';
                }
                //check username
                else if ($this->staffModel->findStaffByUsername($data['name'])) {
                    $data['name_err'] = 'Name is already taken';
                }
            }

            if (empty($data['phone'])) {
                $data['phone_err'] = 'Please enter phone number';
            } else if (strlen($data['phone']) != 10 && strlen($data['phone']) != 11) {
                $data['phone_err'] = 'Please enter a valid phone number';
            } else if (!is_numeric($data['phone'])) {
                $data['phone_err'] = 'Not a valid phone number';
            }

            if (empty($data['address'])) {
                $data['address_err'] = 'Please enter staff address';
            }else {
                if (strlen($data['address']) > 90) {
                    $data['address_err'] = 'Address should not be more than 90 characters';
                }
                else if (strlen($data['address']) <= 40) {
                    $data['address_err'] = 'Enter a valid address';
                }
            }

            if (empty($data['password'])) {
                $data['password_err'] = 'Please enter staff password';
            } else if (strlen($data['password']) < 6) {
                $data['password_err'] = 'Password must be at least 6 characters';
            }

            if (empty($data['confirm_password'])) {
                $data['confirm_password_err'] = 'Please confirm staff password';
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
                $data['created_by'] = $_SESSION['currentUser']->id;

                // Register User
                if ($this->staffModel->register($data)) {
                    //redirect to home page
                    flash('staff_register_success', 'new staff has been added');
                    redirect('owners/viewStaff');
                } else {
                    flash('staff_register_failed', 'failed to add new staff. Something went wrong', 'alert alert-danger');
                    redirect('owners/viewStaff');
                }
            } else {
                //Load view with errors
                $this->view('owner/staffs/registerStaff', $data);
            }
        }else if($action == 'Cancel'){
            redirect('owners/viewStaff');
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

            $this->view('owner/staffs/registerStaff', $data);
        }
    }

    public function updateStaffDetails()
    {
      	if($_SESSION['valid_actor']!='owner'){
        	redirect('owners/login');
        }
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //process form
            $action = $_POST['action'];
            if($action == 'Update'){
            //sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            //init data
            $data = [
                'name' => $_SESSION['current_viewed_staff']->name,
                'username' => trim($_POST['username']),
                'phone' => trim($_POST['phone']),
                'address' => trim($_POST['address']),
                'password' => trim($_POST['password']),
                'confirm_password' => trim($_POST['confirm_password']),
                'staffid' => $_SESSION['current_viewed_staff']->id,

                'username_err' => '',
                'phone_err' => '',
                'address_err' => '',
                'password_err' => '',
                'confirm_password_err' => ''
            ];

            //validation
            if (empty($data['username'])) {
                $data['username_err'] = 'Please enter staff username';
            } else {
                if (strlen($data['username']) > 20) {
                    $data['username_err'] = 'Staff username should not be more than 20 characters';
                }
                else if (strlen($data['username']) <= 4) {
                    $data['username_err'] = 'Staff username should  be more than 4 characters';
                }
                //check username
                else if ($data['username'] != $_SESSION['current_viewed_staff']->username) {
                    if ($this->staffModel->findStaffByUsername($data['username'])) {
                        $data['username_err'] = 'Staff username is already taken';
                    }
                }
            }

            if (empty($data['phone'])) {
                $data['phone_err'] = 'Please enter phone number';
            } else if (strlen($data['phone']) != 10 && strlen($data['phone']) != 11) {
                $data['phone_err'] = 'Please enter a valid phone number';
            } else if (!is_numeric($data['phone'])) {
                $data['phone_err'] = 'Not a valid phone number';
            }

            if (empty($data['address'])) {
                $data['address_err'] = 'Please enter staff address';
            }else {
                if (strlen($data['address']) > 90) {
                    $data['address_err'] = 'Address should not be more than 90 characters';
                }
                else if (strlen($data['address']) <= 40) {
                    $data['address_err'] = 'Enter a valid address';
                }
            }


            if (empty($data['password'])) {
                $data['password_err'] = 'Please enter staff password';
            } else if (strlen($data['password']) < 6) {
                $data['password_err'] = 'Password must be at least 6 characters';
            }

            if (empty($data['confirm_password'])) {
                $data['confirm_password_err'] = 'Please confirm staff password';
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
                //hash the password (1-way hashing algorithm)
                $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

                // update staff
                if ($this->staffModel->updateStaffDetails($data)) {
                    //redirect owners/viewStaff
                    flash('staff_update_success', 'successfully update staff details');
                    redirect('owners/viewStaff');
                } else {
                    flash('staff_update_failed', 'failed to update staff details. Something went wrong', 'alert alert-danger');
                    redirect('owners/viewStaff');
                }
            } else {
                //Load view with errors
                $this->view('owner/staffs/updateStaff', $data);
            }
        }else if($action == 'Cancel'){
            redirect('owners/viewStaff');
        }
        } else {
            $staffDetails = $this->staffModel->findStaffById($_SESSION['current_viewed_staff']->id);
            $data = [
                'name' => $staffDetails->name,
                'username' => $staffDetails->username,
                'phone' => $staffDetails->phone,
                'address' => $staffDetails->address,
                'password' => $staffDetails->password,
                'confirm_password' => '',

                'name_err' => '',
                'username_err' => '',
                'phone_err' => '',
                'address_err' => '',
                'password_err' => '',
                'confirm_password_err' => '',
            ];

            $this->view('owner/staffs/updateStaff', $data);
        }
    }

    public function viewStaffID($staffid)
    {
      	if($_SESSION['valid_actor']!='owner'){
        	redirect('owners/login');
        }
        if (isset($_SESSION['current_viewed_staff'])) {
            unset($_SESSION['current_viewed_staff']);
        }
        $staffDetails = $this->staffModel->findStaffById($staffid);
        $_SESSION['current_viewed_staff'] = $staffDetails;
        $data = [
            'name' => $staffDetails->name,
            'username' => $staffDetails->username,
            'phone' => $staffDetails->phone,
            'address' => $staffDetails->address,
            'password' => $staffDetails->password,
            'confirm_password' => '',

            'name_err' => '',
            'username_err' => '',
            'phone_err' => '',
            'address_err' => '',
            'password_err' => '',
            'confirm_password_err' => '',
        ];

        $this->view('owner/staffs/updateStaff', $data);
    }

    public function viewStaff()
    {
      	if($_SESSION['valid_actor']!='owner'){
        	redirect('owners/login');
        }
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $query = $_POST['query'];
            //load staff details with searched query from db
            $staffs = $this->staffModel->searchStaff($query);
            $data = [
                'staffs' => $staffs,
                'query' => $query,
            ];
            $this->view('owner/staffs/viewStaff', $data);
        } else if (empty($query) || $query = 'all') {
            //load all staff details from db
            $staffs = $this->staffModel->getAllStaff();
            //store all staff details from db
            $data = [
                'staffs' => $staffs,
            ];
            $this->view('owner/staffs/viewStaff', $data);
        }
    }

//FAQQQQQQQQQQQQQQQQQQQQQQQQQ
    public function addFaqs()
    {
      	if($_SESSION['valid_actor']!='owner'){
        	redirect('owners/login');
        }
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //process the form
            $action = $_POST['action'];
            if($action == 'Add'){
            //sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            //init data
            $data = [
                'title' => trim($_POST['title']),
                'description' => trim($_POST['description']),
                'created_by' => '',

                'title_err' => '',
                'description_err' => '',
            ];

            //validation
            if (empty($data['title'])) {
                $data['title_err'] = 'Please enter faq title';
            } else {
                if($this->faqModel->findFaqByTitle($data['title'])){
                    $data['title_err'] = 'Faq Title already exist';
                }
            }

            if (empty($data['description'])) {
                $data['description_err'] = 'Please enter faq description';
            } 

            //make sure errors are empty
            if (
                empty($data['title_err'])
                && empty($data['description_err'])
            ) {
                //validated
                $data['created_by'] = $_SESSION['currentUser']->id;

                // add new faq
                if ($this->faqModel->addNewFaqs($data)) {
                    //redirect to faq view
                    flash('faq_add_success', 'new faq has been added');
                    redirect('owners/viewFaqs');
                } else {
                    flash('faq_add_failed', 'failed to add new faq. Something went wrong', 'alert alert-danger');
                    redirect('owners/viewFaqs');
                }
            } else {
                //Load view with errors
                $this->view('owner/faqs/addFaqs', $data);
            }
        }else if($action == 'Cancel'){
            redirect('owners/viewFaqs');
        }
        } else {

            //init data
            $data = [
                'title' => '',
                'description' => '',

                'title_err' => '',
                'description_err' => '',
            ];

            $this->view('owner/faqs/addFaqs', $data);
        }
    }

    //Delete faq
    public function deleteFaqs($faqid)
    {
      	if($_SESSION['valid_actor']!='owner'){
        	redirect('owners/login');
        }
        if ($this->faqModel->deleteFaqs($faqid)) {
            flash('successful_delete_faq', 'successfully delete faq', 'alert alert-warning');
            redirect('owners/viewFaqs');
        } else {
            flash('fail_delete_faq', 'fail to delete faq. Something went wrong', 'alert alert-danger');
            redirect('owners/viewFaqs');
        }
    }

    //update existing faq
    public function updateFaqs($faqid)
    {
      	if($_SESSION['valid_actor']!='owner'){
        	redirect('owners/login');
        }
        //this method will handle
        //1. view that particular faq
        //2. update that particular faq

        if (isset($_SESSION['current_viewed_faq'])) {
            unset($_SESSION['current_viewed_faq']);
        }
        $faqDetails = $this->faqModel->findFaqById($faqid);
        $_SESSION['current_viewed_faq'] = $faqDetails;

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //process the form
            $action = $_POST['action'];
            if($action == 'Update'){
            //sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            //init data
            $data = [
                'title' => trim($_POST['title']),
                'description' => trim($_POST['description']),
                'created_by' => '',
                'id'=> $faqDetails->id,

                'title_err' => '',
                'description_err' => '',
            ];


            //validation
            if (empty($data['title'])) {
                $data['title_err'] = 'Please enter faq name';
            } else {
                if($data['title'] != $faqDetails->title){
                    //if input data is not equal to previous name, need to check if found duplicate
                    if($this->faqModel->findFaqByTitle($data['title'])){
                        $data['title_err'] = 'Faq title already exist';
                    }
                } 
            }

            if (empty($data['description'])) {
                $data['description_err'] = 'Please enter faq description';
            } 

            //make sure errors are empty
            if (
                empty($data['title_err'])
                && empty($data['description_err'])
            ) {
                //validated
                $data['created_by'] = $_SESSION['currentUser']->id;

                // update existing faq
                if ($this->faqModel->updateFaqs($data)) {
                    //redirect to faq view
                    flash('faq_update_success', 'successfully update faq');
                    redirect('owners/viewFaqs');
                } else {
                    flash('faq_update_failed', 'failed to update faq. Something went wrong', 'alert alert-danger');
                    redirect('owners/viewFaqs');
                }
            } else {
                //Load view with errors
                $this->view('owner/faqs/updateFaqs', $data);
            }
        }else if($action == 'Cancel'){
            redirect('owners/viewFaqs');
        }
        } else {

            //init data
            $data = [
                'id' => $faqDetails->id,
                'title' => $faqDetails->title,
                'description' => $faqDetails->description,

                'title_err' => '',
                'description_err' => '',
            ];

            $this->view('owner/faqs/updateFaqs', $data);
        }
    }

        //view
    public function viewFaqs()
    {
      	if($_SESSION['valid_actor']!='owner'){
        	redirect('owners/login');
        }
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //view all faqs with searched query
            $query = $_POST['query'];
            //load faq details with searched query from db
            $faqs = $this->faqModel->searchFaqs($query);
            $data = [
                'faqs' => $faqs,
                'query' => $query,
            ];
            $this->view('owner/faqs/viewFaqs', $data);
        } else {
            //load all faq details from db
            $faqs = $this->faqModel->getAllFaqs();
            //store all faq details from db
            $data = [
                'faqs' => $faqs,
            ];
            $this->view('owner/faqs/viewFaqs', $data);
        }
    }
    
    public function logout(){
        if(isset($_SESSION['valid_actor'])){
            unset($_SESSION['valid_actor']);
        }

        if(isset($_SESSION['currentUser'])){
            unset($_SESSION['currentUser']);
        }

        redirect('owners/login');
    }
  
  	public function dashboard()
    {
      	if($_SESSION['valid_actor']!='owner'){
        	redirect('owners/login');
        }
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            //view all faqs with searched query
           
            $staffs = $this->staffModel->getNoStaffs();
          	$faqs = $this->faqModel->getNoFaqs();
          	$services = $this->serviceModel->getNoServices();
          	$customers = $this->customerModel->getNoCustomers();

            //store all faq details from db
            $data = [
                'staffs' => $staffs,
              	'faqs' => $faqs,
              	'services' => $services,
              	'customers' => $customers,

            ];
            $this->view('owner/dashboard', $data);
        }
    }
    
}

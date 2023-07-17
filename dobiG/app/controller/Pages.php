<?php
class Pages extends Controller{
    public function __construct(){
      if(isset($_SESSION['current_actor'])){
      	unset($_SESSION['current_actor']);
      }
       $_SESSION['current_actor'] = 'customer';
    }

    public function index(){
        $data =[
            'title'=> 'Dobi G',
            'description' => 'Dobi G is the most suitable for any user because it provides many different type of service and offer the reasonable price.',
          	'open' => '8.00 am',
          	'close' => '5.00 pm'
    ];

        $this->view('pages/index',$data );
    }
    
    public function about(){
        $data =[
            'title'=> 'About Us',
            'description' =>'Dobi G has established since 2006. It started only with 2 wash machine and now it has 6 wash machine, 4 dryer and others. Before this all the management were held manually, but since 2022 it will go thru online system.'

    ];
    
        $this->view('pages/about',$data );
    }
  
      public function contact(){
        $data =[
            'title'=> 'Contact Us',
            'number' =>'011-1001 5672',
          	'email' =>'dobiG@gmail.com',
          	'location' =>'No 4. Lot 442 Kampong Berop, 35900 Tanjong Malim, Perak',
         	'topic' =>'Leave us your feedback',
    ];
          $this->view('pages/contact',$data );
    }
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->library('form_validation');
		$this->load->helper('url','form');	
		$this->load->view('inc/header');
		$this->load->model('Negotiation');
		$this->load->model('Admin');
		
	}
//-------------------------------------------------------------	
    public function home()
	{
		$data['cards'] = $this->Negotiation->getimage();
		$this->load->view('home',$data);
		$this->load->view('inc/footer');
	}
//-------------------------------------------------------------	
	public function index()
	{
		
		$this->load->helper('url');
		if (condition == TRUE) {
		   redirect('Welcome/indexpage');
		   $this->load->view('inc/footer');
		}
		//$this->load->view('index');
		//$this->load->view('inc/footer');
	}
	public function indexpage()
	{
		
	$this->load->view('index');
	$this->load->view('inc/footer');
	
	}
	
	public function signup()	
		{
			
		if($_SERVER['REQUEST_METHOD'] == 'POST')
		{
			
		$data =[
		 'name' => trim($_POST['name']), 
		 'email' => trim($_POST['email']), 
		 'phone' => trim($_POST['phone']), 
		 'location' => trim($_POST['location']), 
		 'no_of_participants' => trim($_POST['no_of_participants']), 
		 'event_datetime' => trim($_POST['event_datetime']),
		  
				  
		];

					   $insert_id = $this->Negotiation->register($data);
				
					   $this->session->set_flashdata('verticaladd', 'Vertical added Sucessfully.Create Target for the vertical');
					   redirect('Welcome/signup',$data);
		} 
		else 
			{
				$data =[
				  'name' => '',  
				  'email' => '', 
				  'phone' => '', 
				  'location' => '' 
				];
				
				$this->load->view('signup', $data);
				$this->load->view('inc/footer');
			}
			}
		//$this->load->view('signup');




   
//-----------------------------------------------------------------------		
		public function play()	{
		
	 if($_SERVER['REQUEST_METHOD'] == 'POST'){
                
        // Process form
// Sanitize POST data
$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);


// Init data
$data =[
'name' => trim($_POST['name']),
'email' => trim($_POST['email']),
'arena_code' => trim($_POST['arena_code']),
'name_err' => '',
'email_err' => '',
'arena_code_err' => '',      
];
//print_r($data);die;
// Validate Email
if(empty($data['name'])){
$data['name_err'] = 'Please enter Name';
}
if(empty($data['email'])){
$data['email_err'] = 'Please enter email';
}

// Validate Password
if(empty($data['arena_code'])){
$data['arena_code_err'] = 'Please enter Arena Code';
}


if(empty($data['name_err']) && empty($data['email_err']) && empty($data['arena_code_err'])){
//Validated
//Check and set logged in user
$name = $data['name'];
$email = $data['email'];
$arena_code = $data['arena_code'];
//print_r($arena_code);die;

if($this->Negotiation->findByArena($arena_code)){

$insert_id= $this->Negotiation->login_save($name,$email,$arena_code);
$loggedInUser = $this->Negotiation->login($arena_code);

 //print_r($loggedInUser);die;
} else {
	$this->session->set_flashdata('invalid_arena', 'Invalid Arena Code');
  redirect('Welcome/play');	
}
if(!empty($loggedInUser))
 {
	 $this->createUserSession($loggedInUser);
 }
else {
  // Arena Code not found
  $this->session->set_flashdata('arenacode_error', 'Invalid Arena Code');
  $this->load->view('play');
  $this->load->view('inc/footer');
  
  }
  
 
  }
  
	 }  
        else
        {
                $data =[    
                'name' => '',
                'email' => '',
                'arena_code' => '',
                'password_err' => '',        
                ]; 
                $this->load->view('play');
				$this->load->view('inc/footer');
        }

        }		
	
//-------------------------------------------------------------------------
 public function createUserSession($user){
			
	$_SESSION['id'] = $user->id;
	$_SESSION['email'] = $user->email;
	$_SESSION['name'] = $user->name;
	$_SESSION['arena_code'] = $user->arena_code;

			$email = $_SESSION['email'];     
			$status = 1;        
	   $count = $this->Negotiation->activeuser($email,$status);
	if($status =='1'){
		
	 $this->session->set_flashdata('arena_full', 'Maximum User Reached');  
	  redirect('Welcome/play');

	}
	else{
	   $data =[    
                'name' => '',
                'email' => '',
                'arena_code' => '',
                'password_err' => '', 
				];
				//print_r($data);die;
		$this->load->view('home');
		$this->load->view('inc/footer');

	}
	}
//-------------------------------------------------------------------------
    public function contact()
	{
		$this->load->view('contact');
		$this->load->view('inc/footer');
	}
	}

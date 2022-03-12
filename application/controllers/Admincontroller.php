<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admincontroller extends CI_Controller {

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
 public function index(){
		
		 if($_SERVER['REQUEST_METHOD'] == 'POST'){
                
        // Process form
// Sanitize POST data
$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

 //$this->load->view('inc/admin-header');
// Init data
$data =[
'email' => trim($_POST['email']),
'password' => trim($_POST['password']),
'email_err' => '',
'password_err' => '',      
];
//print_r($data);die;
// Validate Email
if(empty($data['email'])){
$data['email_err'] = 'Please enter email';
}

// Validate Password
if(empty($data['password'])){
$data['password_err'] = 'Please enter password';
}


if(empty($data['email_err']) && empty($data['password_err'])){
//Validated
//Check and set logged in user
$email = $data['email'];
$password = $data['password'];

if($this->Admin->findUserByEmail($data['email'])){
  //User found
  
$email = $data['email'];
//print_r($email);die;
$password = $data['password'];
$loggedInUser = $this->Admin->login($email, $password);
 //print_r($loggedInUser);die;
}
else {
  //User not found
  $this->session->set_flashdata('password_incorrect', 'Invalid Username/Password');
  redirect('admin');
  
  }
	 if(!empty($loggedInUser))
	 {
	  $this->createUserSession($loggedInUser);
	}
 else
        {
  $this->session->set_flashdata('password_incorrect', 'Invalid Username/Password');       
  $this->load->view('adminhome',$data); 
  $this->load->view('inc/footer');  
	 }
	 
  
	} 
          }
        else
        {
                $data =[    
                'email' => '',
                'password' => '',
                'email_err' => '',
                'password_err' => '',        
                ];
                $this->load->view('adminlogin',$data);
				$this->load->view('inc/footer');
        }
			
	} 
//-------------------------------------------------------------
   public function createUserSession($user){
			
	$_SESSION['id'] = $user->id;
	$_SESSION['email'] = $user->email;

	
			$email = $_SESSION['email'];
			$flag  = 1 ;       
			$status = $flag + 1;        
	   //$count = $this->Admin->activeuser($email,$status);
	if($status =='1'){
		
	 $this->session->set_flashdata('arena_full', 'Maximum User Reached');  
	  redirect('Admincontroller/play');

	}
	else{
		
	    $data['events'] = $this->Admin->getevents();
		$data['upcomingevents'] = $this->Admin->getupcomingevents();
		$this->load->view('adminhome',$data);

	}
	}

//-------------------------------------------------------------------------
   
//-------------------------------------------------------------------------
    public function card_master(){
		
		if($_SERVER['REQUEST_METHOD'] == 'POST'){
	
	$currentDir = getcwd();
	$uploadDirectory = "/public/cards/";
   $errors = []; // Store all foreseen and unforseen errors here

   $fileExtensions = ['doc','xlsx','pdf','png','jpeg','jpg']; // Get all the file extensions

   $fileName = $_FILES['cardupload']['name'];
   //$fileName = preg_replace('/[^A-Za-z0-9]/', "", $fileName1);
   //print_r($fileName);die;
   $fileSize = $_FILES['cardupload']['size'];
   $fileTmpName  = $_FILES['cardupload']['tmp_name'];
   $fileType = $_FILES['cardupload']['type'];
   $ext = explode(".", $_FILES['cardupload']['name']);
 $ext2 = end($ext);

$data =[
 'cardname' => trim($_POST['cardname']), 
 'cardupload'=> basename($fileName),
 'cardname_err' => '',         
 'cardupload_err' => ''
 
];
//print_r($data);die;
//print_r($data);die;

$uploadPath = $currentDir . $uploadDirectory . basename($fileName); 

        if ($fileSize > 2000000) {
          $data['cardupload_err']= "This file is more than 2MB. Sorry, it has to be less than or equal to 2MB";
        }

        if (empty($errors)) {
			
            $didUpload = move_uploaded_file($fileTmpName, $uploadPath);

           
        } else {
            foreach ($errors as $error) {
              $data['cardupload_err']= $error . "These are the errors" . "\n";
            }
        }


if(empty($data['customername'])){
 $data['cardname_err'] = 'Please Enter Card Name';
}
if(empty($data['cardupload'])){ 
 $data['cardupload_err'] = 'Please Select Card';
}
   

    if($this->Admin->Insertcard($data))
    {
   $this->session->set_flashdata('card_add', 'Card Added Successfully');  
   redirect('Admincontroller/card_master',$data);
    }
  

} else 
{
// Load view
  $data['getcards'] = $this->Admin->getallcards();
 $this->load->view('card_master',$data);
 $this->load->view('inc/footer');
}
		
		
		
		
	} 
//-------------------------------------------------------------------------
	 public function card_delete($id)
	{
		if($this->Admin->carddelete($id))
		{
			$this->session->set_flashdata('delete', 'Card Deleted Sucessfully');
			redirect('Admincontroller/card_master');
		}
	}
//-------------------------------------------------------------------------
    public function adminhome(){
		
		
		$data['events'] = $this->Admin->getevents();
		$data['upcomingevents'] = $this->Admin->getupcomingevents();
		$this->load->view('adminhome',$data);
		$this->load->view('inc/footer');
		
		
	}
}
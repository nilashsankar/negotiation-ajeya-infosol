<?php
use PHPMailer\PHPMailer\PHPMailerAutoload;
use PHPMailer\PHPMailer\Exception;
  class Admin extends CI_Model {
    
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
  
  //----------------------------------------------------------------------------------------------- 
    public function login($email, $password)
	{			
		$row = $this->db->get_where('admin',array('email'=> $email))->row();
		$hashed_password = $row->password;
		if(password_verify($password, $hashed_password))
		{
			return $row;
		}
		else
		{
			return false;
		}
    
		
	}
   //----------------------------------------------------------------------------------------------- 
   public function totalloginCount($ipaddr)
{
  $query = $this->db->query("SELECT COUNT(ipaddress) AS total from loginhistory
  where ipaddress='$ipaddr'");
}
   //----------------------------------------------------------------------------------------------- 
   public function totaltimeCount($ipaddr)
{
  $query = $this->db->query("SELECT last_login from loginhistory
where ipaddress='$ipaddr' order by last_login DESC limit 1 ");
  
   return $query->row()->last_login;
    
}
   //-----------------------------------------------------------------------------------------------
   public function findUserByEmail($email){
                $query = $this->db->query("select * from admin where
email='$email'");
            return $query->row();
      
    }   
  //-----------------------------------------------------------------------------------------------
      public function loginHistory($ipaddr,$time,$username,$trytime){      
      
          $data2 = [
                'username' => $username,
                'ipaddress' => $ipaddr,
                'last_login' => $time,
                'trytime' => $trytime,
                
                
                ];
                //print_r($data);die;
                 //$this->load->database();
                 $this->db->insert('loginhistory',$data2);
                 $insert_id = $this->db->insert_id();
                 return  $insert_id;  
          
    }
	  
  //----------------------------------------------------------------------------------------------- 
	 public function getevents()
	{
      $curdatetime = date("Y-m-d H:i:s");
      $query = $this->db->query("select * from registration where event_datetime < '$curdatetime'");
	  return $query->result();
	  
	}
  //----------------------------------------------------------------------------------------------- 
    public function getupcomingevents()
	{
	  date_default_timezone_set("Asia/Kolkata");
      $curdatetime = date("Y-m-d H:i:s");	
      $query = $this->db->query("select * from registration where event_datetime > '$curdatetime' ");
	  return $query->result();
	  
	}
  //----------------------------------------------------------------------------------------------- 
	  public function deleteloginCount($ipaddr)
	{
	  $query = $this->db->query("DELETE  from loginhistory
	where ipaddress='$ipaddr'  ");
	  
	   return true;
	}
	  //----------------------------------------------------------------------------------------------- 
	  public function activeuser($email,$status){
                
      $query = $this->db->query("UPDATE loginhistory set status = '$status'  WHERE
       email='$email'");
      return true;
	  }
	  //----------------------------------------------------------------------------------------------- 
	  public function Insertcard($data)
		{
			$data2 = [
			'card_name' => $data['cardname'],
			'file_name' => $data['cardupload']
			];
			//print_r($data2);die;
			 $this->db->insert('card_master',$data2);
			 $insert_id = $this->db->insert_id();
			 return  $insert_id;
		}
	//----------------------------------------------------------------------------------------------- 
	 public function getallcards()
	{
      $status = 'D';
      $query = $this->db->query("select * from card_master where status != '$status'");
	  return $query->result();
	  
	}
  //-----------------------------------------------------------------------------------------------
		function carddelete($id)
		{
			$id = $id;
			$status = "D";
		    $this->db->query("UPDATE card_master SET status='$status' WHERE id= '$id' ");
		 
		return true;
		}  
	  //----------------------------------------------------------------------------------------------- 
	  
	  //----------------------------------------------------------------------------------------------- 
		
	  }
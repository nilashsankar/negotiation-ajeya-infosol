<?php
use PHPMailer\PHPMailer\PHPMailerAutoload;
use PHPMailer\PHPMailer\Exception;
  class Negotiation extends CI_Model {
    
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
  
  //----------------------------------------------------------------------------------------------- 
    public function register($data)
	{
      $rand_no = rand(10000, 99999);		
       	
	   $data1 = [
	   'name' => $data['name'],
	   'email' => $data['email'],
	   'phone' => $data['phone'],
	   'location' => $data['location'], 
	   'participant_count' => $data['no_of_participants'], 
	   'event_datetime' => $data['event_datetime'],
	   'arena_code'=> $rand_no
	   ];
  $output='<p>Thanks for Registering in Negotiation Arena</p>';
  $output.='<p>Your Arena Code is &nbsp;' .$rand_no. ' </p>' ; 
  $output.='<p>Thanks & Regards,</p>';
  $output.='<p>Propelurs Team</p>';
  $body = $output; 
  //$subject = $tid."[".$data['title']."]";
     $subject ='Negotiation Arena-Code';
     $email_to = $data['email'];
  
  
          $this->load->library('phpmailer_lib');
          $mail = $this->phpmailer_lib->load();
  
       
            $mail->isSMTP();      
            $mail->Host='mail.ajeyainfosol.com';
            $mail->SMTPAuth=true; 
            $mail->Username ='support@ajeyainfosol.com';
            $mail->Password = 'Ajeya@123'; 
            // Enable this option to see deep debug info
    
            // $mail->SMTPDebug = 4; 
    
            $mail->SMTPSecure = 'tls';
    
            $mail->Port ='587';
    
            $mail->SetFrom('support@ajeyainfosol.com'); 
  
          $mail-> addAddress($email_to); 
              
  
          $mail->Subject=$subject;
          $mail->Body = $body;
          $mail->isHTML(true); 
  
  
  $mail->SMTPOptions = array(
      'ssl' => array(
          'verify_peer' => false,
          'verify_peer_name' => false,
          'allow_self_signed' => true
           )
         );
  if(!$mail->Send()){
  echo "Mailer Error: " . $mail->ErrorInfo;
  }
	   $this->db->insert('registration',$data1);
	   $insert_id = $this->db->insert_id();
	   return  $insert_id;
    }
//-----------------------------------------------------------------
   public function login_save($name,$email,$arena_code)
   {
	   $data2 = [
	   'username' => $name,
	   'email' => $email,
	   'arena_code' => $arena_code
	   ];
	   $this->load->database();
      $this->db->insert('playerlogin',$data2);
      $insert_id = $this->db->insert_id();
      return $insert_id;	  
   
   } 
   
//-----------------------------------------------------------------
    public function login($arena_code)
	{
		
		
		$this->db->select('arena_code');
		$this->db->from('registration');
		$this->db->where('arena_code',$arena_code);
		$row = $this->db->get()->row();
		if (isset($row)) {
			return $row->arena_code;
		} else {
			return false;
		}			
		
    }
	
//----------------------------------------------------------------------
    // Find user by Arena Code
    public function findByArena($arena_code){
                $query = $this->db->query("select * from registration where arena_code='$arena_code'");
            return $query->row();
      
    }
//-----------------------------------------------------------------------
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
//-------------------------------------------------------------------------------------
	public function totalloginCount($ipaddr)
	{
	  $query = $this->db->query("SELECT COUNT(ipaddress) AS total from loginhistory
	where ipaddress='$ipaddr'");
	  
	   return $query->row()->total;
	}
//-------------------------------------------------------------------------------------
    public function totaltimeCount($ipaddr)
	{
	  $query = $this->db->query("SELECT last_login from loginhistory
	where ipaddress='$ipaddr' order by last_login DESC limit 1 ");
	  
	   return $query->row()->last_login;
		
	}
//-------------------------------------------------------------------------------------
    public function activeuser($email,$status){
                
      $query = $this->db->query("UPDATE playerlogin set status = '$status'  WHERE
email='$email '");
      return true;
   }
//-------------------------------------------------------------------------------------
   public function getimage()
	{
      $query = $this->db->query("select * from card_master");
	  return $query->result();
	  
	}
//-------------------------------------------------------------------------------------
//-------------------------------------------------------------------------------------
//-------------------------------------------------------------------------------------
 }
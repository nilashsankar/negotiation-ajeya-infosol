<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
class PHPMailer_Lib
{
public function __construct(){
    log_message('Debug', 'PHPMailer class is loaded.');
}

public function load(){
    // Include PHPMailer library files
    require_once APPPATH.'models/PHPMailer/PHPMailer/Exception.php';
    require_once APPPATH.'models/PHPMailer/PHPMailer/PHPMailer.php';
    require_once APPPATH.'models/PHPMailer/PHPMailer/SMTP.php';
   

    $mail = new PHPMailer(true);
    return $mail;
}
}
<?php
/**
 * Grab email from gmail
 */
class GrabMail{
	
	public function __construct() {
		$userName;
        $password;
        $hostname;
	}
    
    #setters
    public function setUserName($userName){
        $this->userName = $userName;    
    }
    public function setPassword($password){
        $this->password = $password;
    }
    public function setHostname($hostname){
        $this->hostname = $hostname;
    }
    
    public function getMailFromGmail(){
        
        /* try to connect */
        $inbox =  imap_open($this->hostname,$this->username,$this->password) or die('Cannot connect to Gmail: ' . imap_last_error());
        $emails = imap_search($inbox);
        
        /* if emails are returned, cycle through each... 
        if($emails) {
            count
        }*/     
    }
}

$monGmail = new GrabMail();
$monGmail->setUserName('alloin.the@gmail.com');
$monGmail->setHostname('{imap.gmail.com:993/imap/ssl}INBOX');
$monGmail->setPassword('sombrekiller43');
$mesMails = $monGmail->getMailFromGmail();

var_dump($mesMails);
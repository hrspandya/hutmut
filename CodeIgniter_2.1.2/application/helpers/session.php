<?php
class session extends CI_Controller {

	public function __construct()
	{
		$this->load->database();
	}
	
	public static function isSessionActive()
	{
	
            $this->load->library('session');
            
            //MANAGE SESSION
            $session_email = $this->session->userdata('email');

            if($session_email){
                
                $sessionSql = "Select email from agent where email = ".$session_email;
                
                if($this->db->affected_rows()){
                    //DESTROY SESSION
                    $this->session->sess_destroy();

                    //SETTING NEW SESSION
                    $newdata = array(
                                //'username'  => $this->db->escape($postData['first_name'])." ".$this->db->escape($postData['last_name']),
                                'email'     => $this->db->escape($session_email),
                                'logged_in' => TRUE
                    );

                    $this->session->set_userdata($newdata);
                    
                    return true;
                    
                } else{
                    //DESTROY SESSION AND RETURN FALSE
                    $this->session->sess_destroy();
                }
            }
            
            return false;
	}
}
                
?>

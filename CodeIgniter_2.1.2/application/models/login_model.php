<?php
class login_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
	public function get_signIn($user, $password)
	{
	
            //IMPORT LIB
            $this->load->helper('security');
            $this->load->library('session');
            $this->load->library('encrypt');
            
            $postData = $this->input->post(NULL, TRUE);
            $password = $this->db->escape($postData['password']);
            $password = do_hash($password, 'md5'); // MD5 
            
            
            $sql = "Select email, password from agent where email = ".$this->db->escape($postData['email']);

            $query = $this->db->query($sql);
            
            if ($query->num_rows() <= 0){ //No user found with this email
                //Show Error, No user found
                return 0;
                
            }else if($query->num_rows() > 1){ //If more than one user found, with same email, something went really wrong here
                //Contact administrator    
                return 99;    
            }else if($query->num_rows() == 1){
            
               foreach ($query->result() as $row){
                  
                  if($password == $row->password){
                      //Same password 
                      return 1;
                  }else{
                      //Wrong Password
                      return 2;
                  }
               }

            }            
            
	}
        
}
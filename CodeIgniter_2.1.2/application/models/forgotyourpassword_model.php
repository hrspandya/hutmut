<?php
class forgotYourPassword_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
	public function get_secureResetId($user)
	{
	
            //IMPORT LIB
            $this->load->helper('security');
            $this->load->library('session');
            $this->load->library('encrypt');
            
            $postData = $this->input->post(NULL, TRUE);
            //$user = $this->db->escape($user);
            
            $sql = "Select email, password from agent where email = ".$user;

            $query = $this->db->query($sql);
            
            if ($query->num_rows() > 0)
            {
               foreach ($query->result() as $row)
               {
                   return $row->password;
               }
            } 
            
	}
        
}
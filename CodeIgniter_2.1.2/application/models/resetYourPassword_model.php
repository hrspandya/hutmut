<?php
class resetYourPassword_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
	public function updatePassword($email, $password)
	{
	
            //IMPORT LIB
            $this->load->helper('security');
            $this->load->library('session');
            
            
            //$postData = $this->input->post(NULL, TRUE);
            $password = $this->db->escape($password);
            $password = do_hash($password, 'md5'); // MD5 
            
            $password = $this->db->escape($password);
            $email = $this->db->escape($email);
            
            $sql = "UPDATE agent
                    SET password=". $password ."
                    WHERE email=". $email;
            
            $this->db->query($sql);
            $numRows = $this->db->affected_rows();
            return $numRows;
	}
        
        
        public function get_emailFromUserId($email, $resetId)
	{
	
            //IMPORT LIB
            $this->load->helper('security');
            $this->load->library('session');
            $this->load->library('encrypt');
            
            
            $sql = "Select email, password from agent WHERE email='". $email . "' AND password = '" . $resetId."'";
            
            $query = $this->db->query($sql);
            
            if ($query->num_rows() > 0)
            {
               foreach ($query->result() as $row)
               {
                   return $row->email;
               }
            } 

        }
        
        
        
        
}
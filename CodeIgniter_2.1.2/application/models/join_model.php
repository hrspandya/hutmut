<?php
class join_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
	public function get_joinUs($slug = FALSE)
	{
	
            //IMPORT LIB
            $this->load->helper('security');
            $this->load->library('session');
            
            
            $postData = $this->input->post(NULL, TRUE);
            $password = $this->db->escape($postData['password']);
            $password = do_hash($password, 'md5'); // MD5 
            
            $sql = "INSERT INTO agent (firstName, lastName, email, password)
                    VALUES (".$this->db->escape($postData['first_name']).",".$this->db->escape($postData['last_name']).", 
                        ".$this->db->escape($postData['email']).", '".$password."')";

                $this->db->query($sql);

                return $this->db->affected_rows();
	}
        
}
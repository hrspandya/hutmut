<?php
class login extends CI_Controller {

    public $isLoginSuccess = 99; //unknown issue
    public $postData = NULL;

	public function __construct()
	{
		parent::__construct();
		$this->load->model('login_model');
	}

	public function index()
	{
                //IMPORT
                $this->load->helper('url');
                $this->load->helper(array('form', 'url'));
                $this->load->library('session');
                $this->load->helper('email');
                
                //FETCH POST DATA
                $this->postData = $this->input->post(NULL, TRUE);
                
                
                //CHECKING FOR SESSION VALIDATION
//                if($this->session->userdata('email') OR $this->session->userdata('email') == FALSE){
//                   redirect('logout', 'refresh'); // 'login/index' should be automatically called
//                   return;
//                }
                
                                
                $data['title'] = 'Login Hutmut';
                
                
                //Form Validation START
                $this->load->library('form_validation');

                //SETTING FORM VALIDATION RULES
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|max_length[50]|xss_clean|callback_isLoginSucceed');
                
                
                //DEFINING MESSAGE FOR EACH VALIDATION RULE, WE SHOW BELOW MESSAGE WHEN RULES FAILED
                $this->form_validation->set_message('required', '%s is required field');
                //----
                
                //LOADING HEADER
                $this->load->view('templates/header', $data);
		
                
                //CHECK IF VALIDATION IS SUCCESS
                if ($this->form_validation->run() == FALSE)
		{
                    //IF FALSE, GO BACK SHOW ERRORS    
                    $this->load->view('login/index', $data);
		
                }else{
                    
                    //IF TRUE, GO TO LOGIN SUCCESS PAGE    
                    redirect('', 'refresh'); //this will go to the root page, home, for now

		}
                
                
                //LOADING FOOTER
		$this->load->view('templates/footer');
	}
        
        
        
        public function isLoginSucceed($str){

            //IF EVERYTHING SUCCESSFUL, SAVE DATA, CREATE SESSION
            $this->isLoginSuccess = $this->login_model->get_signIn($this->db->escape($this->postData['email']), $this->db->escape($this->postData['password']));

            if($this->isLoginSuccess == 1){ //SUCCESS

                //DESTROY PREVIOUS SESSION
                $this->session->sess_destroy();

                //SETTING NEW SESSION
                $newdata = array(
                            //'username'  => $this->db->escape($postData['first_name'])." ".$this->db->escape($postData['last_name']),
                            'email'     => $this->db->escape($this->postData['email']),
                            'logged_in' => TRUE
                );

                $this->session->set_userdata($newdata);

                return TRUE;                       

            }else if($this->isLoginSuccess == 2){ //Fail with wrong password
                
                //DESTROY PREVIOUS SESSION
                $this->session->sess_destroy();
                $this->form_validation->set_message('isLoginSucceed', 'Invalid password');
                return FALSE;
                
            }else if($this->isLoginSuccess == 0){ //Fail with wrong userName
                
                //DESTROY PREVIOUS SESSION
                $this->session->sess_destroy();
                $this->form_validation->set_message('isLoginSucceed', 'Username does not exist');
                return FALSE;
                
            }else{
                
                //DESTROY PREVIOUS SESSION
                $this->session->sess_destroy();
                $this->form_validation->set_message('isLoginSucceed', 'Something went wrong, Please try again or contact us');
                return FALSE; 
            }
        }
        
	
}
<?php
class forgotYourPassword extends CI_Controller {

    public $isLoginSuccess = 99; //unknown issue
    public $postData = NULL;

	public function __construct()
	{
		parent::__construct();
		$this->load->model('forgotyourpassword_model');
	}

	public function index()
	{
               
             //IMPORT
                $this->load->helper('url');
                $this->load->helper(array('form', 'url'));
                $this->load->library('session');
                
                                
                $data['title'] = 'Forgot Your Hutmut Password';
                
                //FETCH POST DATA
                $postData = $this->input->post(NULL, TRUE);
                
                $data['isResetEmailSent'] = false;
                $data['resetId'] = null;
                $data['userId'] = null;
                
                
                $this->load->helper('email');

                sendEmail("doNotReply_welcome@hutmut.com", "hrspandya@gmail.com", "Hutmut", "Welcome to Hutmut",$this->load->view('pages/about', $data, true));
           
                
                //Form Validation START
                $this->load->library('form_validation');

                //SETTING FORM VALIDATION RULES
                //REMEMBER is_unique checkes for unique email or gives error,  !is_unique checks if email exist in agent table
                $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|xss_clean|!is_unique[agent.email]');
		

                //DEFINING MESSAGE FOR EACH VALIDATION RULE
                $this->form_validation->set_message('required', '%s is required field');
                //----
                
                //LOADING HEADER
                $this->load->view('templates/header', $data);
		
                
                //CHECK IF VALIDATION IS SUCCESS
                if ($this->form_validation->run() == FALSE)
		{
                    //IF FALSE, GO BACK SHOW ERRORS    
                    $this->load->view('forgotYourPassword/forgotYourPassword', $data);
		
                    
                }else{
                    
                    //IF EVERYTHING SUCCESSFUL, SAVE DATA, CREATE SESSION
                    $resetId = $this->forgotyourpassword_model->get_secureResetId($this->db->escape($postData['email']));
                    
                    if($resetId != null){
                        $data['isResetEmailSent'] = true;
                        $data['resetId'] = $resetId;
                        $data['userId'] = $postData['email'];
                    }
                    
                    //SENDING EMAIL 
                    sendEmail("doNotReply_welcome@hutmut.com", "hrspandya@gmail.com", "Hutmut", "Reset Your Hutmut Password", 
                            $this->load->view('email/forgotYourPassword_email', $data, true));
                    
                    $this->load->view('forgotYourPassword/forgotYourPassword', $data);
                    
		}
                
                
                //LOADING FOOTER
		$this->load->view('templates/footer');
	}
                

        
	
}
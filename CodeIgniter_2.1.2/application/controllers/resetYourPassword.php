<?php
class resetYourPassword extends CI_Controller {

    public $isLoginSuccess = 99; //unknown issue
    public $postData = NULL;

	public function __construct()
	{
		parent::__construct();
		$this->load->model('resetYourPassword_model');
	}

	public function index()
	{
               
             //IMPORT
                $this->load->helper('url');
                $this->load->helper(array('form', 'url'));
                $this->load->library('session');
                $this->load->helper('email');                
                $this->load->library('form_validation');
                    
                $data['title'] = 'Reset Your Hutmut Password';
                $email = null;
                $data['isResetSuccessfull'] = false;                                
                $data['userExist'] = true;
                
                //FETCH POST DATA
                $postData = $this->input->post(NULL, TRUE);
                //$getData = $this->input->get(NULL, TRUE);
                
                if($postData != NULL){
                    $email = $this->resetYourPassword_model->get_emailFromUserId($postData['userId'], $postData['resetId']);
                
                    if($email != NULL){

                        
                        //SETTING FORM VALIDATION RULES
                        //REMEMBER is_unique checkes for unique email or gives error,  !is_unique checks if email exist in agent table
                        $this->form_validation->set_rules('password', 'Password', 'trim|required|matches[confirm_password]|min_length[6]|max_length[50]|xss_clean');
                        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|min_length[6]|max_length[50]|xss_clean');


                        //DEFINING MESSAGE FOR EACH VALIDATION RULE
                        $this->form_validation->set_message('required', '%s is required field');
                        //----

                        //LOADING HEADER
                        $this->load->view('templates/header', $data);


                        //CHECK IF VALIDATION IS SUCCESS
                        if ($this->form_validation->run() == FALSE)
                        {
                            //IF FALSE, GO BACK SHOW ERRORS    
                            $this->load->view('resetYourPassword/resetYourPassword', $data);


                        }else{

                            //IF EVERYTHING SUCCESSFUL, SAVE DATA, REDIRECT TO LOGIN PAGE
                            $updatePassword = $this->resetYourPassword_model->updatePassword($email, $postData['password']);

                            $data['isResetSuccessfull'] = true;


                            //SENDING EMAIL 
                            sendEmail("doNotReply_welcome@hutmut.com", "hrspandya@gmail.com", "Hutmut", "Hutmut Password reset successfull", 
                                    $this->load->view('email/resetYourPassword_email', $data, true));

                            //$this->load->view('login/index', $data);
                            redirect('login/index', 'refresh'); //this will go to the root page, home, for now

                        }  
                    }else{
                        //SHOW ERROR MESSAGE 
                        $data['userExist'] = false;
                        $this->load->view('resetYourPassword/resetYourPassword', $data);
                    }        
                    
                    
                }else{
                    //PAGE LOAD 
                    $this->load->view('resetYourPassword/resetYourPassword', $data);
                }

                //LOADING FOOTER
		$this->load->view('templates/footer');
	}
                

        
	
}
<?php

    /**
     * @access	public
     * from         email
     * to           email
     * subject      subject
     * messageView  htmlview  ex: home.php or about.php
     * @return	void
     */
    function sendEmail($from , $to, $name, $subject, $messageView){
            
            $CI =& get_instance();
            $CI->load->library('email');          
            
            $config['charset'] = 'utf-8';
            $config['wordwrap'] = TRUE;
            $config['mailtype'] = 'html';
            date_default_timezone_set('America/New_York');

            $CI->email->initialize($config);

            $CI->email->from($from, $name);
            $CI->email->to($to); 
            $CI->email->subject($subject);
            $CI->email->message($messageView);
            $CI->email->cc('hrspandya@gmail.com');
            //$CI->email->bcc('kytango@gmail.com'); 
            $CI->email->send();

	 
	//echo $CI->email->print_debugger();


    }
                
?>

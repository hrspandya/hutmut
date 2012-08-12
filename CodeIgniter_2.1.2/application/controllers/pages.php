<?php

class Pages extends CI_Controller {

	public function view($page = 'home'){

		//if ( ! file_exists($_SERVER['DOCUMENT_ROOT'].'/CodeIgniter_2.1.2/application/views/pages/'.$page.'.php')){
			// Whoops, we don't have a page for that!
		//	show_404();
		//}
		
            
                if ( ! file_exists($_SERVER['APPLICATION_ROOT'].'/views/pages/'.$page.'.php')){
			// Whoops, we don't have a page for that!
	//		show_404();
		}
                
		var_dump(($_SERVER['APPLICATION_ROOT'].'/views/pages/'.$page.'.php')); 
		
		$data['title'] = ucfirst($page); // Capitalize the first letter
		
		$this->load->view('templates/header', $data);
		$this->load->view('pages/'.$page, $data);
		$this->load->view('templates/footer', $data);

	}
}

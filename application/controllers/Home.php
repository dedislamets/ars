<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	    $this->load->model('admin');
	    $this->load->model('M_menu','',TRUE);
	    $this->lang->load('information','english');
	   
	}
	public function index()
	{		
		$data['main'] = 'home';
		$data['js'] = 'home/js';
		// $data['lang'] = 'en' ;
		// if(!empty($this->session->userdata('language')))
		// 	$data['lang'] = $this->session->userdata('language');
        // print("<pre>".print_r($data,true)."</pre>");
        // exit();
		$this->load->view('home',$data,FALSE); 			  
						
	}



	public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }

	public function languages()
	{
	   extract($_POST);
	   $this->session->set_userdata('language', $dlang);
	   $redirect_url = base_url().$current;
	   redirect($redirect_url);	
	
	}

	function switchLang() {
		$language = $this->input->post('dlang');
       $language = ($language != "") ? $language : "indonesia";
       // echo $language; exit();
       $this->session->set_userdata('site_lang', $language);
       redirect($_SERVER['HTTP_REFERER']);
   }
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class About extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model(array('Common_model'));  
		$this->load->helper(array('url','captcha'));
		$this->load->library(array('session','user_agent','email'));
	}	
			
	public function index(){
		$data['title'] = "About Us";
		$data['about'] = $this->Common_model->select('dmb_data',array('status' => 'Yes','type' => 'about'),'','','','','id','DESC');
		$page_data = $this->Common_model->select('dmb_data',array('status' => 'Yes', 'id' => '90', 'type' => 'headerbanner'),'','','','','id','DESC');
		$data['page_data'] = $page_data[0];
		$this->load->view('about-us',$data);
	}
	
}

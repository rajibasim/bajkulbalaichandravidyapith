<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class History extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model(array('Common_model'));  
		$this->load->helper(array('url','captcha'));
		$this->load->library(array('session','user_agent','email'));
	}	
			
	public function index(){
		$data['title'] = "School History";
		$data['history'] = $this->Common_model->select('dmb_data',array('status' => 'Yes','type' => 'history'),'','','','','id','DESC');
		$page_data = $this->Common_model->select('dmb_data',array('status' => 'Yes', 'id' => '91', 'type' => 'headerbanner'),'','','','','id','DESC');
		$data['page_data'] = $page_data[0];
		$this->load->view('history',$data);
	}
	
}

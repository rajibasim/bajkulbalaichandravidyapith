<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Facuilty extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model(array('Common_model'));  
		$this->load->helper(array('url','captcha'));
		$this->load->library(array('session','user_agent','email'));
	}	
			
	public function index(){
		$data['title'] = "Teachers";
		$data['facuilty'] = $this->Common_model->select('dmb_data',array('status' => 'Yes','type' => 'facuilty'),'','','','','id','DESC');
		$page_data = $this->Common_model->select('dmb_data',array('status' => 'Yes', 'id' => '93', 'type' => 'headerbanner'),'','','','','id','DESC');
		$data['page_data'] = $page_data[0];
		$this->load->view('facuilty',$data);
	}
	
}

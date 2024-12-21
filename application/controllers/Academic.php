<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Academic extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model(array('Common_model'));  
		$this->load->helper(array('url','captcha'));
		$this->load->library(array('session','user_agent','email'));
	}	
			
	public function index(){
		$data['title'] = "Academic";
		$data['rutine'] = $this->Common_model->select('dmb_data',array('status' => 'Yes','type' => 'rutine'),'','','','','id','DESC');
		$data['exam'] = $this->Common_model->select('dmb_data',array('status' => 'Yes','type' => 'exam'),'','','','','id','DESC');
		$data['result'] = $this->Common_model->select('dmb_data',array('status' => 'Yes','type' => 'result'),'','','','','id','DESC');
		$data['calender'] = $this->Common_model->select('dmb_data',array('status' => 'Yes','type' => 'calender'),'','','','','id','DESC');
		$data['notice'] = $this->Common_model->select('dmb_data',array('status' => 'Yes','type' => 'notice'),'','','','','id','DESC');
		$data['paper'] = $this->Common_model->select('dmb_data',array('status' => 'Yes','type' => 'paper'),'','','','','id','DESC');
		$this->load->view('academic',$data);
	}
	
}

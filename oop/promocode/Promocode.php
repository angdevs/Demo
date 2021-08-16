<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Promocode extends CI_Controller {

	function __construct() {
		
        parent::__construct();
		
        $this->load->helper('url');
		$this->load->library('session');
		$this->load->model('users_model');
		$this->load->model('M_promocode');
		$this->load->model('departments_model');
		$this->load->library('email');
		$this->load->model('lead_model');

    }
	
	public function index()
	{
		$userdata = $this->session->userdata('logged_in');
			
		$data['promocodeData'] = $this->M_promocode->getPromocode();
		
		$data['subview'] = 'promocode/index';
		$this->load->view('layout_main',$data);	
	}
	
	
	
		public function filterdetails()
	{
		$userdata = $this->session->userdata('logged_in');

		$isstatus = $this->input->post('Activestatus');

			
		$data['userData'] = $this->users_model->getUsersStatus($isstatus);
		
		$data['subview'] = 'users/index';
		$this->load->view('layout_main',$data);	
	}

	
	
	public function addPromocode()
	{

		// print_r($this->input->post());die; 
		
		if($this->input->post()){
				$data['offer_name'] = $this->input->post('offer_name');
				$data['descp'] = $this->input->post('descp'); 
				$data['status'] = $this->input->post('status'); 


				
				$promocode = $this->M_promocode->addPromocode($data);
				
				if($promocode){
					
					$this->session->set_userdata('success','Promo code added successfully');
					redirect(base_url('promocode'));
				}
			
		}
		
		$data['subview'] = 'promocode/add_promocode';
		$this->load->view('layout_main',$data);	
	}
	
	// public function edit_user()
	// {
	// 	$userdata = $this->session->userdata('logged_in');
		
	// 	if($this->input->post()){
			
	// 		$user_id = $this->input->post('user_id');
			
	// 		$data['user_name'] = $this->input->post('name');
	// 		$data['user_mob_no'] = $this->input->post('mob_no');
	// 		$data['user_email_id'] = $this->input->post('email_id');
			
	// 		if(!empty($this->input->post('cpassword'))){
	// 			$data['user_password'] = md5($this->input->post('cpassword'));
	// 		}
	// 		if(!empty($this->input->post('usertype'))){
	// 			$data['user_type'] = $this->input->post('usertype');
	// 		}
	// 		if(!empty($this->input->post('team_leader'))){
	// 			$data['TL_Id'] = $this->input->post('team_leader');
	// 		}
	// 		if(!empty($this->input->post('manager'))){
	// 			$data['MGR_Id'] =$this->input->post('manager');
	// 		}
	// 		if(!empty($this->input->post('agmanager'))){
	// 			$data['AGM_id'] =$this->input->post('agmanager');
	// 		}
			

 //              if(!empty($this->input->post('dgmanager'))){
	// 			$data['DGM_ID'] =$this->input->post('dgmanager');
	// 		}
	 
	// 		if ($this->input->post('usertype')==5) {
	// 			$data['TL_Id']=NULL; 
	// 			$data['MGR_Id']=NULL;
	// 			$data['AGM_id'] =$user_id;
	// 		}
	// 		//L2
	// 		if ($this->input->post('usertype')==4) {
	// 			$data['TL_Id']=NULL; 
	// 			$data['MGR_Id']=$user_id;
				 
	// 		}
	// 		//l1
	// 		if ($this->input->post('usertype')==3) {
	// 			$data['TL_Id']=$user_id; 
	// 		} 
			
	// 		if($this->users_model->updateUser($data,$user_id)){
				
	// 			$this->session->set_userdata('success','User updated successfully');
	// 			redirect(base_url('users'));
	// 		}
	// 	}
		
	// 	$user_id = $this->uri->segment(3);
		
	// 	$data['userinfo'] = $this->users_model->getUsers($user_id);
	// 	$data['teamleaders'] = $this->users_model->getTeamLeader();
	// 	$data['managers'] = $this->users_model->getManager();
 //        $data['agmanagers'] = $this->users_model->getAgManager();
 //        $data['dgmanager'] = $this->users_model->getGdManager();


		
	// 	$data['subview'] = 'users/edit_user';
	// 	$this->load->view('layout_main',$data);	
	// }
	
	 
   

}

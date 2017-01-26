<?php
defined('BASEPATH') OR exit('No direct script access allowed');
Class Customer extends CI_Controller {

	public function showCustomers(){
		$this->load->model('Customer_model');
		$data['customer']=$this->Customer_model->getCustomers();
		$data['page']='customer/showcustomers';
		$this->load->view('menu/content',$data);
	}
public function addCustomers(){
    $btn=$this->input->post('btnSave');
    if (isset($btn)){
    	$insert_data=array(
    		"fname"=>$this->input->post('fn'),
    		"lname"=>$this->input->post('ln')
    		);
    	$this->Customer_model->insertCustomer($insert_data);
    }
    
	$data['page']='customer/addcustomers';
	$this->load->view('menu/content',$data);
}
}
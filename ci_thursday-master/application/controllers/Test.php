<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {
public function sayhello()
{
	//you should not echo anything from conroller
	echo 'This is sayhello function in Test Controller';
}

public function index()
{
	//you should not echo anything from conroller
	echo 'This is index function in Test Controller';
}

public function second()
{
	$data['fname']='Jim';
	$data['lname']='Jones';
	$this->load->view('test/second',$data);
}

public function showNames(){
	$this->load->model('Test_model');
	$data['customers']=$this->Test_model->getCustomer();
	$this->load->view('test/showNames',$data);
}

}
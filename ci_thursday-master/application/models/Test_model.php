<?php
Class Test_model extends CI_model {

	public function getCustomer() {
		$names=array(
			array("fn"=>'Ann',"ln"=>'Smith'),
			array("fn"=>'John',"ln"=>'Doe'),
			array("fn"=>'Lisa',"ln"=>'Simpson')
			);
		return $names;
	}

}
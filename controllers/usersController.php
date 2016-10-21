<?php

class UsersController  extends AppController{

	public function __construct(){
	parent::__construct();
	}

	public function index(){
		$users = array (
			//"username"=> array(
				"root",
				"admin",
				"soporte",
				"tester");

		$this->set("users",$users);
	}
}
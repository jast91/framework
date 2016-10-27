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

	public function add(){
			if($_POST){
				if($this->users->save("users",$_POST)){
					$this->redirect(array("controller"=>"users"));
				}else{
					$this->redirect(array("controller"=>"users","method"=>"add"));
				}

		

				//print_r($_POST);


			}
}

public function edit($id){
	if($_GET) {
	
		$this->set("id",$id);
	}
}
}

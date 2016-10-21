<?php

abstract class AppController
{
	protected $_view;
	abstract public function index();

	public function __construct(){
		$this->_view = new View(new Request);
	}
	public function set ($one,$two=null){
		if( is_array($one)){
			if(is_array($two)){
				$data =array_combine($one, $two);
			}else{

				$data =$one;
			}

		}else{
			$data =array ($one => $two);
		}
		$this->_view->setVars($data);

	}
}


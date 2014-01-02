<?php
class StoreController extends AppController {
	
	public $layout = 'storage';
	
	public function beforeFilter(){
		$user_email = $this->Session->read("user_email");
		if(empty($user_email)){
// 			$this->view = "index";
// 			$this->viewPath = "Login";	
// 			$this->layout = false;	
			$this->redirect("/login/index");
		}
	}
	
	public function index() {
		
	}
	
	public function stock() {
	
	}
	
	public function history() {
	
	}
	
	public function calculate() {
	
	}
	
	public function help() {
	
	}
	
	public function account() {
	
	}
	
	public function sys() {
	
	}
}
<?php
class LoginController extends AppController {
	
	public $uses = array("User");
	
	public function index() {
			
	}
	
	public function login() {
	
		$email = $_POST["email"];
		$password = $_POST["password"];
		$user = $this->User->findByEmailAndPassword($email, $password);
		if(!empty($user)) {
			$this->redirect("/store/index");
		} else {
			$this->view = "index";
		}
	}
	
	public function logout() {
		$this->view="index";
	}
}
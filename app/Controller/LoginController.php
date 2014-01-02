<?php
class LoginController extends AppController {
	
	public $uses = array("User");
	
	public function index() {
			
	}
	
	public function login() {
	
		$email = $_POST["email"];
		$password = $_POST["password"];
		//$user = $this->User->findByEmailAndPassword($email, $password);
		$user = $this->User->find("first", array("conditions"=>array("email"=>$email,"password"=>$password)));
		if(!empty($user)) {
			$this->Session->write('user_email', $email);
			$this->redirect("/store/index");
		} else {
			$this->view = "index";
		}
	}
	
	public function logout() {
		$this->Session->delete('user_email');
		$this->view="index";
	}
}
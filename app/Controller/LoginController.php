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
			$this->Session->write('login.email', $email);
			$this->redirect("/store/index");
// 			$this->view = "index";
// 			$this->viewPath = "Store";
// 			$this->layout = "storage";
		} else {
			$this->view = "index";
		}
	}
	
	public function logout() {
		$this->Session->delete('login.email');
		$this->view="index";
	}
}
<?php
class LoginController extends AppController {

	public function index() {
			
	}
	
	public function login() {
	
		$email = $_POST["email"];
		$password = $_POST["password"];
		
		if($email == "chen" && $password == "yan") {
			$this->redirect("/store/index");
		} else {
			$this->view = "index";
		}
	}
	
	public function logout() {
		$this->view="index";
	}
}
<?php
class StoreController extends AppController {
	
	public $uses = array("User");
	
	public $layout = 'storage';
	
	public function beforeFilter(){
		$user_email = $this->Session->read("login.email");
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
	
	public function change_pw() {
	
		$oldpassword = @$_POST["oldpassword"];
		$password = @$_POST["password"];
		$repassword = @$_POST["repassword"];
		
		$user_email = $this->Session->read("login.email");
// 		$user = $this->User->find("first", array("conditions" => array("email" => $user_email,"password" => $oldpassword)));
// 		if(!empty($user)) {
		$user = $this->User->find("first", array("conditions" => array("email" => $user_email)));
		if($user['User']["password"]==$oldpassword) {

			$user["User"]["password"] = $password;
			$this->User->save($user);
			//$this->User->query("update users set password = '$password' where email = '$user_email'");
			$this->set('message','Congratulations!');
		} else {
			$this->set('message','password is wrong!');
		}
		
		$this->view = "account";
	}
	
	public function change_email() {
		$email = @$_POST["email"];
		$user_email = $this->Session->read("login.email");
		//$user = $this->User->find("first", array("conditions" => array("email" => $user_email)));
		$user = $this->User->findByEmail($user_email);
		$user["User"]["email"] = $email;
		$this->User->save($user);
		$this->redirect("/login/index");	
	}
}
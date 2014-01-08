<?php
class StoreController extends AppController {
	
	public $uses = array("User","Good");
	
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
		$group = array("name","code","category");
		$fields = array('code','name','category','class','location','SUM(amount) as balance','alert');
		$result = $this->Good->find("all",array("group"=>$group,"fields"=>$fields));
		//debug($result);
		
		$this->set("goods",$result);
	}
	
	public function edit($id) {
		$conditions = array();
		$conditions["id"] = $id;
		$result = $this->Good->find("first",array("conditions" => $conditions));	
		$this->set("good",$result);
		
	}
	
	
	public function history() {
		
		$result = $this->Good->find("all");
		
		$this->set("goods",$result);
	}
	
	public function history_view($name,$code,$category) {
		$this->view = "history";
		$conditions = array();
		$conditions["name"] = $name;
		$conditions["code"] = $code;
		$conditions["category"] = $category;
		$result = $this->Good->find("all", array("conditions" => $conditions));
		$this->set("goods",$result);
		
	}
	
	public function search_history() {
		
		//$this->redirect("/store/history");
		$this->view = "history";
		
		$category = $_POST["category"];
		$sdate = $_POST["sdate"];
		$edate = $_POST["edate"];
				
		$conditions = array();
		if(!empty($category)) {
			$conditions["class"] = $category;
		}
		if(!empty($sdate)) {
			$conditions["date >="] = $sdate;
		}
		if(!empty($edate)) {
			$conditions["date <="] = $edate;
		}
		$result = $this->Good->find("all", array("conditions" => $conditions));
		
//		$result = $this->Good->find("all", array("conditions" => array("class" => $category, "date" => $sdate, "date" => $edate)));	

//		$result = $this->Good->query("select * from goods Good where class = '$category' and date >= '$sdate' and date <= '$edate'");
		
		//$sql = "select * from goods Good where class = '$category' and date >= '$sdate' and date <= '$edate'";
		
// 		$sql = " select * from goods Good ";
// 		$sql = $sql + " where 1 = 1 ";
// 		if(!empty($category)) {
// 			$sql = $sql + " and class = '$category' ";
// 		}
// 		if(!empty($sdate)) {
// 			$sql = $sql + " and date >= '$sdate' ";
// 		}
// 		if(!empty($edate)) {
// 			$sql = $sql + " and date <= '$edate' ";
// 		}
// 		$result = $this->Good->query($sql);
		
		$this->set("goods",$result);
		
	}
	
	public function calculate() {
		if($this->request->is("POST")){
			$category = $_POST["category"];
			$sdate = $_POST["sdate"];
			$edate = $_POST["edate"];
			
			$conditions = array();
			if(!empty($category)) {
				$conditions["class"] = $category;
			}
			if(!empty($sdate)) {
				$conditions["date >="] = $sdate;
			}
			if(!empty($edate)) {
				$conditions["date <="] = $edate;
			}
			$result = $this->Good->find("all", array("conditions" => $conditions));
		}
		else{
			$result = $this->Good->find("all");
		}
		$this->set("goods",$result);
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
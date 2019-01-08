<<?php 
	class User{
		var $name;
		var $email;
		var $password;
		var $phone;
		var $address;
		function __construct(){

		}
		public function getName(){
			echo "Get name";
		}
		public function getEmail(){
			echo "Get email";
		}
		public function getPassword() {
			echo "Get password";
		}
		public function getPhone(){
			echo "Get Phone";
		}
		public function getAddress(){
			echo "Get Address";
		}
		private function addUser(){
			echo "Add User";
		}
		public function Edit(){
			echo "Edit";
		}
		public function Register(){
			echo "Register";
		}
		public function Login(){
			echo "Login";
		}
		public function view(){
			echo "View";
		}
		private function List(){
			echo "List";
		}
	}

		// $user = new User();
		class Customer extends User{
			function __construct(){

		}
			var $addCustomer;
			 var $idCustomer;
			function pay(){
				echo "pay";
			}
			function history(){
				echo "history";
			}

		}
		$user = new User();
	$user->View();
	$customer = new Customer();


	
 ?>
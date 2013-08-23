<?php
    class DBTalk {
    		
    	private $db;
		
		function __construct() {
			$host = '127.0.0.1';
			$user = 'root';
			$pass= 'root';
			$port= '8889';
			$dbname = 'sslDatabase';
			$this->db = new PDO("mysql:host=$host;
									port=$port;
									dbname=$dbname",
									$user, $pass);
		}
		
		public function addUser($username='', $firstname='', $lastName='', $email='',$password='', $salt ='') {
			$stmnt = $this->db->prepare("insert into users (username, firstName, lastName, email, password) values (:username, :firstName, :lastName, :email, :password)");
			$stmnt->execute(array(
					':username' => $username,
					':firstName'=> $firstname,
					':lastName' => $lastName,
					':email' => $email,
					':password' =>$password,
					'salt' => $salt));
			}
		
		public function getRandomUser() {
			$stmnt = $this->db->query("select * from users order by rand() limit 1");
			return $stmnt->fetchAll(PDO::FETCH_ASSOC);
		}
		
		public function checkName($username){
			$exist = false;
			$sql = $this->db->prepare("
				select username
				from users
				where username = :user_n
			");
			$sql->bindParam(":user_n", $username);
			$sql->execute();
			
			$result = $sql->fetchAll(PDO::FETCH_OBJ);
			
			if(count($result)>0){
				$exist = true;
			};
			
			return $exist;
		}
		
		public function logIn($user, $pass){
			$user = $_POST['variable'];
			
			checkName($user);
			
			$stmnt = $this->db->query("select ". $pass . "from users");
			return $stmnt->fetchAll(PDO::FETCH_ASSC);
		}
		
		function __destruct(){
			mysqli_close($db);
		}
    }
?>
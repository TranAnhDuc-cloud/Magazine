<?php

class UserModel extends Database{

	//Insert Into Thêm User vs Pass Vào Database
	public function newUser($fullname,$username, $password,$diachi,$email){	
		$sql = "INSERT INTO users VALUES (null,'$fullname',	'$username','$password','$diachi','$email',0)";

		//Mac dinh result = false . Ktra Neu Insert Dung thi result = true. Tra ve gia tri result bang json_encode
		$results = false;
		if(mysqli_query($this->conn,$sql)){
			$results = true;
		}
		//Ep tat ca moi thu ve json	
		return json_encode($results);
	}
	//Search Tên Đăng Nhập 
	public function login($username_input) {
		$sql = "SELECT * FROM `users` WHERE Username ='$username_input'";
		return $result = mysqli_query($this->conn,$sql);
	}
	
}

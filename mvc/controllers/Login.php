<?php

class Login extends Controller {

	public $userModel;
	public $TheLoaiModel;
    public $LoaiTinModel;
	
	public function __construct(){
		//Call UserModel
		$this->userModel = $this->model("UserModel");
		//Call Class TheLoaiModel 
        $this->TheLoaiModel = $this->model("TheLoaiModel");
        //Call Class LoaiTinModel
        $this->LoaiTinModel = $this->model("LoaiTinModel");
	}
	public function indexAction(){
		$this->view("Login",[
		]);	
	}
	public function KhachHangDangNhap(){
		$result_mess = false;
			//1. getdata
		if(isset($_POST["submit"])){

			$username_input = $_POST["username"];
			$password_input = $_POST["password"];
			if (empty($_POST["username"]) || empty($_POST["password"])) {
				$this->view("Login",[
					"result"=>$result_mess,
				]);
			}
			//2. call database
			$result = $this->userModel->login($username_input);
			
			$row = mysqli_num_rows($result);
			if($row == true){
				while ($row = mysqli_fetch_array($result)) {
					# code...
					//Lay gia tri gan vao bien
					$id = $row["idUser"];
					$username = $row["Username"];
					$password = $row["Password"];
					$level = $row["level"];
					$hoten = $row["HoTen"];
					
					// mã hóa pasword
					$password_i = md5($password_input);
					//Ma hoa pass bang hash
					// $password_i = password_hash($password_input,PASSWORD_DEFAULT);
					// password_verify($password_input,$password);
				}
				//SoSanh Pass
				if($password_i == $password && $level==0){
					//Luu Gia tri vao session
					$_SESSION["idUser"] = $id;
					$_SESSION["Username"] = $username;
					$_SESSION["Password"] = $password;
					$_SESSION["level"] = $level;
					$_SESSION["HoTen"] = $hoten;
						$this->viewuser("index",[
							"pages"=>"Home",
							"result"=>$result_mess = true,
							"TheLoai"=>$this->TheLoaiModel->TheLoai(),
							"LoaiTin"=>$this->TheLoaiModel->LoaiTin(),
							"Tin"=>$this->LoaiTinModel->TinNoiBat($sotin=1),
							"Tin1"=>$this->LoaiTinModel->TinNoiBat1($sotin=1),
							"Tin2"=>$this->LoaiTinModel->TinNoiBat2($sotin=2),
							"TinMoiNhat"=>$this->LoaiTinModel->TinMoi($sotin=1),
							"TinMoiNhat1"=>$this->LoaiTinModel->TinMoi1($sotin=4),
							"TinMoiCungLoai"=>$this->LoaiTinModel->TinMoiCungLoai($idTin=2,$sotin=4),
							"TinNoiBat"=>$this->LoaiTinModel->TinNoiBat($sotin=6),
							"TinXemNhieu"=>$this->LoaiTinModel->TinXemNhieu($sotin=4,$lang="vi"),
							"ChuyenMuc"=>$this->TheLoaiModel->ChuyenMuc($sotin=6),
							"inTL"=>$this->TheLoaiModel->LoaiTin(),
						]);
				}
				if($password_i==$password && $level==1){
					$_SESSION["idUser"] = $id;
					$_SESSION["Username"] = $username;
					$_SESSION["Password"] = $password;
					$_SESSION["level"] = $level;
					$_SESSION["HoTen"] = $hoten;
						$this->viewadmin("admin",[
							"pages"=>"Home",
							"result"=>$result_mess = true,
						]);
				}
				else{
					$this->view("Login",[
						"resule"=>$result_mess,
					]);
				}	
			}
		}
	}
	public function Logout(){
		unset($_SESSION["idUser"]);
		unset($_SESSION["Username"]);
		unset($_SESSION["Password"]);
		unset($_SESSION["level"]);
		unset($_SESSION["HoTen"]);
		session_destroy();
		$this->view("Login",[
			"pages"=>"Form_Login"
		]);
	}
	
}
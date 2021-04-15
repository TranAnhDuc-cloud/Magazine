<?php

class Register extends Controller{

    public $userModel;

    public function __construct(){
        //model
        $this->userModel = $this->model("UserModel"); 
    }
    public function indexAction(){
       //views
        $this->view("Register",[
            "pages"=>"Form_Register"
        ]);
    }
    public function KhachHangDangKy(){
        $result_mess = false;
        //1. Lay Du Lieu KH Nhap
        if(isset($_POST["register"])){
            if(empty($_POST["username"])){
                $this->view("Register",[
                    "pages"=>"Form_Register",
                    "result"=>$result_mess
                ]);
                }
                    if(empty($_POST["password"])){
                        $this->view("Register",[
                            "pages"=>"Form_Register",
                            "result"=>$result_mess
                        ]);
                        }    
                            $fullname = $_POST["fullname"];
                            $username = $_POST["username"];
                            $password = $_POST["password"];
                            // mã hóa pasword
					        $password = md5($password);
                            //Ma hoa pass bang hash
                            //$password = password_hash($password,PASSWORD_DEFAULT);
                            $diachi = $_POST["diachi"];
                            $email = $_POST["email"];
                        
                            //2. Insert Database
                            $result =$this->userModel->newUser($fullname,$username,$password,$diachi,$email);

                            //3. Show ThanhCong/ThatBai
                            $this->view("Register",[
                                "pages"=>"Form_Register",
                                "result"=>$result
                            ]);
        }
        
    }
}
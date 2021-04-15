<?php

class Admin extends Controller{

    public $TheLoaiModel;
    public $TinModel;
    public $TinAdminModel;
    
    function __construct(){
       
        //Call Class TheLoaiModel 
        $this->TheLoaiModel = $this->model("TheLoaiModel");
        $this->TinModel = $this->model("LoaiTinModel");
        $this->TinAdminModel = $this->model("LoaiTinAdmin");
        
    }
    function indexAction(){
            //Call Class View Index
                $views =$this->viewadmin("admin",[
                //Key=>Value
                "pages"=>"Home",
                "LoaiTin"=>$this->TinAdminModel->LoaiTin(),
            ]); 
    }
    function DSLoaiTin(){
        //Call Class View Index
            $views =$this->viewadmin("admin",[
            //Key=>Value
            "pages"=>"Home_admin",
            "LoaiTin"=>$this->TinAdminModel->LoaiTin(),
        ]); 
}
    function View_Add(){
        $views =$this->viewadmin("admin",[
            "pages"=>"Add_LoaiTin",
            ]); 
    }
    function Add(){
        $result_mess = false;
        if(isset($_POST["submit"])){
            if(empty($_POST["tenloaitin"])){
                $views =$this->viewadmin("admin",[
                    "pages"=>"Add_LoaiTin",
                    "result"=>$result_mess,
                ]); 
            }else{
            $ten = $_POST["tenloaitin"];
            $thutu =$_POST["thutu"];
            $anhien = $_POST["anhien"];
            $result = $this->TinAdminModel->addLoaiTin($ten,$thutu,$anhien);
            $views =$this->viewadmin("admin",[
                "pages"=>"Add_LoaiTin",
                "result"=>$result,
            ]); 
            }
        }
    }
    function View_Edit($id){
        $views =$this->viewadmin("admin",[
            "pages"=>"Edit_LoaiTin",
            "edit"=>$this->TinAdminModel->editLoaiTin($id),
        ]); 
    }
    function Update($id){
        $result_mess = false;
        if(isset($_POST["submit"])){

            if(empty($_POST["tenloaitin"])){
                $views =$this->viewadmin("admin",[
                    "pages"=>"Edit_LoaiTin",
                    "result"=>$result_mess,
                    "edit"=>$this->TinAdminModel->editLoaiTin($id),
                ]); 
            }else{
                $ten = $_POST["tenloaitin"];
                $thutu =$_POST["thutu"];
                $anhien = $_POST["anhien"];
                $result = $this->TinAdminModel->updateLoaiTin($id,$ten,$thutu,$anhien);
                $views =$this->viewadmin("admin",[
                    "pages"=>"Edit_LoaiTin",
                    "edit"=>$this->TinAdminModel->editLoaiTin($id),
                    "result"=>$result,
                ]); 
            }
        }
    }
    function Delete($id){
        $result = $this->TinAdminModel->deleteLoaiTin($id);
        $views =$this->viewadmin("admin",[
            //Key=>Value
            "pages"=>"Home_admin",
            "LoaiTin"=>$this->TinAdminModel->LoaiTin(),
            "result"=>$result,
        ]); 
    }
    

}
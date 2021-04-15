<?php

class Contact extends Controller{

    public $TheLoaiModel;
    public $LoaiTinModel;
    
    function __construct(){
       
        //Call Class TheLoaiModel 
        $this->TheLoaiModel = $this->model("TheLoaiModel");
        //Call Class LoaiTinModel
        $this->LoaiTinModel = $this->model("LoaiTinModel");
        
    }
    function indexAction(){
            //Call Class View Index
                $views =$this->viewuser("index",[
                //Key=>Value
                "pages"=>"Contact",
                "TheLoai"=>$this->TheLoaiModel->TheLoai(),
                "LoaiTin"=>$this->TheLoaiModel->LoaiTin(),
            ]);
            
    }

}
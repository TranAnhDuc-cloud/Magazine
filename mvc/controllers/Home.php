<?php

class Home extends Controller{

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
                "pages"=>"Home",
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
    function TheLoai($id){
        $views =$this->viewuser("index",[
            //Key=>Value
            "pages"=>"TheLoai",
            "TheLoai"=>$this->TheLoaiModel->TheLoai(),
            "LoaiTin"=>$this->TheLoaiModel->LoaiTin(),
            "TinXemNhieu"=>$this->LoaiTinModel->TinXemNhieu($sotin=4,$lang="vi"),  
            "inTL"=>$this->TheLoaiModel->LoaiTin(),
            ]);
    }
    function LoaiTin($id){
        $views =$this->viewuser("index",[
            //Key=>Value
            "pages"=>"LoaiTin",
            "TheLoai"=>$this->TheLoaiModel->TheLoai(),
            "LoaiTin"=>$this->TheLoaiModel->LoaiTin(),
            "TinXemNhieu"=>$this->LoaiTinModel->TinXemNhieu($sotin=4,$lang="vi"),  
            "inTL"=>$this->TheLoaiModel->LoaiTin(),
            "Content"=>$this->LoaiTinModel->ContentTin($id),
            "TinMoiCungLoai"=>$this->LoaiTinModel->TinMoiCungLoai($idTin=2,$sotin=6),
            "TinNoiBat"=>$this->LoaiTinModel->TinNoiBat($sotin=6),
            "TinMoiNhat"=>$this->LoaiTinModel->TinMoi($sotin=1),
            "TinMoiNhat1"=>$this->LoaiTinModel->TinMoi1($sotin=4),
            ]);
    }
    function TinContent($id){
        $views =$this->viewuser("index",[
            //Key=>Value
            "pages"=>"Content",
            "TheLoai"=>$this->TheLoaiModel->TheLoai(),
            "LoaiTin"=>$this->TheLoaiModel->LoaiTin(), 
            //"The_Loai"=>$this->TheLoaiModel->The_Loai($id),
            "inTL"=>$this->TheLoaiModel->LoaiTin(),
            // "Loai_Tin"=>$this->TheLoaiModel->Loai_Tin($id),
            "TinMoiCungLoai"=>$this->LoaiTinModel->TinMoiCungLoai($idTin=2,$sotin=6),
            "Content"=>$this->LoaiTinModel->ContentTin($id),
        ]);
    }
    function ChuyenMuc($id){
        $views =$this->viewuser("index",[
            //Key=>Value
            "pages"=>"Categories",
            "TheLoai"=>$this->TheLoaiModel->TheLoai(),
            "LoaiTin"=>$this->TheLoaiModel->LoaiTin(), 
            //"The_Loai"=>$this->TheLoaiModel->The_Loai($id),
            "inTL"=>$this->TheLoaiModel->LoaiTin(),
            "ChuyenMuc"=>$this->TheLoaiModel->Chuyen_Muc($id),
            "TinMoiNhat"=>$this->LoaiTinModel->TinMoi($sotin=1),
            "TinMoiNhat1"=>$this->LoaiTinModel->TinMoi1($sotin=4),
            "TinNoiBat"=>$this->LoaiTinModel->TinNoiBat($sotin=6),
            "TinMoiCungLoai"=>$this->LoaiTinModel->TinMoiCungLoai($idTin=2,$sotin=6),
        ]);
    }
    

}
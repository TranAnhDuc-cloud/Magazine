<?php 
// Class App Dùng để gọi Controllers/Home.php or News.php
class App{
    //http://fb.com/PHP-MVC/Home/action/params
    protected $controller = "Home";
    protected $action="indexAction";
    protected $params=[];
    function __construct(){
        //Array 
        $arr = $this->urlProcess();

        //Xử lí controllers
        //ktra có tồn tại file trong controllers hay khong
        if(file_exists("./mvc/controllers/".$arr[0].".php")){
            $this->controller = $arr[0];
            unset($arr[0]);
        }
        require_once "./mvc/controllers/".$this->controller.".php";

        //News = new News or Home = new Home
        $this->controller = new  $this->controller;

        //Xử lí action
        if(isset($arr[1])){
            if(method_exists($this->controller,$arr[1])){
                $this->action =$arr[1];
            }
            unset($arr[1]);
        }
        
        //Xử lí params
        $this->params = $arr?array_values($arr):[];
        call_user_func_array([$this->controller,$this->action],$this->params);
     
        // echo $this->controller."</br>";
        // echo $this->action."</br>";
        // print_r($this->params);

    }
    //Xu li Thanh url o file .htacsecs
    function urlProcess(){
        //Ktra url khách hàng nhập
        if(isset($_GET["url"])){
            $url = $_GET["url"];
            //Loại bỏ khoảng trắng và cắt /
           return explode("/",filter_var(trim($_GET["url"], "/")));
        }
       
    }
}
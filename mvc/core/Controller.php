<?php
// Class Controller dùng để gọi models vs views . 
class Controller{
    public function model($model){
        require_once "./mvc/models/".$model.".php";
        return new $model;
    }
    //Call index
    public function view($view, $data=[]){
        require_once "./mvc/views/".$view.".php";
    }
    //Call User
    public function viewuser($view, $data=[]){
        require_once "./mvc/views/user/".$view.".php";
    }
    //Call Admin
    public function viewadmin($view, $data=[]){
        require_once "./mvc/views/admin/".$view.".php";
    }
}
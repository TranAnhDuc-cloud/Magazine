<?php 
    session_start();
    require_once "./mvc/Bridge.php";
    $myApp = new App();
    //Khi new 1 Opp auto chay __contrust()
?>
<!-- Index.php -> Brigdge -> App.php(->Home.php extends Controllers) va Controllers(->Models vs Views) -->
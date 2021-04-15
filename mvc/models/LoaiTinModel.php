<?php
class LoaiTinModel extends Database{
    
    function ContentTin($id){
        $sql = "SELECT * FROM tin WHERE idTin=$id";
        $result = mysqli_query($this->conn,$sql);
        return $result;
    }
    function TinXemNhieu($sotin, $lang){
        if (is_null($sotin)) $sotin = 5;
        $sql="SELECT idTin, TieuDe, TomTat, urlHinh, Ngay, SoLanXem
        FROM tin WHERE AnHien = 1 and ( lang = '{$lang}' or '{$lang}' = '' )
        ORDER BY SoLanXem DESC
        LIMIT 0,$sotin";
        $kq = mysqli_query($this->conn,$sql) or die (mysqli_error($this->conn));
        return $kq;
    }
    function TinMoi($sotin){
        if (is_null($sotin)) $sotin = 1;
        $sql="SELECT idTin, TieuDe, TomTat, urlHinh, Ngay, SoLanXem
        FROM tin
        WHERE AnHien = 1 and  lang ='vi' 
        ORDER BY idTin DESC
        LIMIT 0,$sotin";
        $kq = mysqli_query($this->conn,$sql) or die(mysqli_error($this->conn));
        return $kq;
    }
    function TinMoi1($sotin){
        if (is_null($sotin)) $sotin = 4;
        $sql="SELECT idTin, TieuDe, TomTat, urlHinh, Ngay, SoLanXem
        FROM tin
        WHERE AnHien = 1 and  lang ='vi' 
        ORDER BY idTin DESC
        LIMIT 0,$sotin";
        $kq = mysqli_query($this->conn,$sql) or die(mysqli_error($this->conn));
        return $kq;
    }
    function TinNoiBat($sotin){
        if (is_null($sotin));
        $sql="SELECT idTin, TieuDe, TomTat, urlHinh, Ngay, SoLanXem
        FROM tin
        WHERE AnHien = 1 AND TinNoiBat=1 AND lang ='vi'
        ORDER BY idTin DESC
        LIMIT 0,$sotin";
        $kq = mysqli_query($this->conn,$sql) or die(mysqli_error($this->conn));
        return $kq;
    }
    function TinNoiBat1($sotin){
        if (is_null($sotin));
        $sql="SELECT idTin, TieuDe, TomTat, urlHinh, Ngay, SoLanXem
        FROM tin
        WHERE AnHien = 1 AND TinNoiBat=1 AND lang ='vi'
        ORDER BY idTin DESC
        LIMIT 7,$sotin";
        $kq = mysqli_query($this->conn,$sql) or die(mysqli_error($this->conn));
        return $kq;
    }
    function TinNoiBat2($sotin){
        if (is_null($sotin)) ;
        $sql="SELECT idTin, TieuDe, TomTat, urlHinh, Ngay, SoLanXem
        FROM tin
        WHERE AnHien = 1 AND TinNoiBat=1 AND lang ='vi'
        ORDER BY idTin DESC
        LIMIT 8,$sotin";
        $kq = mysqli_query($this->conn,$sql) or die(mysqli_error($this->conn));
        return $kq;
    }
    function TinTrongLoai($idLT, $pageNum=1,    $pageSize = 10 , $lang ='vi'){
        $startRow = ($pageNum-1)*$pageSize;
        $sql=" SELECT idTin, TieuDe, TomTat, urlHinh, Ngay, SoLanXem
        FROM tin
        WHERE AnHien = 1 AND idLT=$idLT AND ( lang ='{$lang}' or '{$lang}'='' )
        ORDER BY idTin DESC
        LIMIT $startRow , $pageSize";
        $kq = mysqli_query($sql,$this->conn) or die(mysqli_error($this->conn));
        return $kq;
    }
   
    function TinMoiCungLoai($idTin,$sotin){
        settype($idTin, "int");
        $sql=" SELECT idTin, TieuDe, TomTat, urlHinh, Ngay, SoLanXem
        FROM tin
        WHERE AnHien = 1 AND idTin>$idTin AND ( lang ='vi' )
        AND idLT = (SELECT idLT FROM tin WHERE idTin = $idTin)
        ORDER BY idTin DESC LIMIT 0, $sotin";
        $kq = mysqli_query($this->conn,$sql) or die(mysqli_error($this->conn));
        return $kq;
    }
   
    
    
}
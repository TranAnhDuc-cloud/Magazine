<?php
class TheLoaiModel extends Database{
    // public  function __destruct(){
    //     if (is_resource($this->conn)) mysqli_close($this->conn);
    //     echo "<hr><p>Version: {$this->version} </p>";
    //     echo "<p>Author: {$this->author} </p>";
    // }
    public function TheLoai(){
        $sql = "SELECT idTL, TenTL from theloai WHERE (lang ='vi' AND AnHien=1)
                ORDER BY ThuTu";
        $kq = mysqli_query($this->conn,$sql) ;
        return $kq;
    }
    // public function The_Loai($id){
    //     $sql = "SELECT * FROM loaitin WHERE idTL=$id lang='vi' AND AnHien=1 ";
    //     $kq = mysqli_query($this->conn,$sql) ;
    //     return $kq;
    // }
    public function LoaiTin(){
        $sql = "SELECT * from loaitin WHERE (lang ='vi' AND AnHien=1)
                ORDER BY ThuTu";
        $kq = mysqli_query($this->conn,$sql) ;
        return $kq;
    }

    // public function Loai_Tin(){
    //     $sql = "SELECT *from loaitin WHERE(lang ='vi' AND AnHien=1)
    //             ORDER BY ThuTu";
    //     $kq = mysqli_query($this->conn,$sql) ;
    //     return $kq;
    // }
    public function LT_in_TL($id){
        # code...
        settype($idTL,"int");
        $sql = "SELECT  *from loaitin where AnHien=1
                AND  idTL=$id order by ThuTu ASC";
        $kq = mysqli_query($this->conn,$sql) ;
        return $kq;
    }
    public function ChuyenMuc($sotin){
        $sql = "SELECT* from chuyenmuc WHERE (AnHien=1)
                 ORDER BY idCM DESC
        LIMIT 0,$sotin";
        $kq = mysqli_query($this->conn,$sql) ;
        return $kq;
    }
    public function Chuyen_Muc($id){
        $sql = "SELECT* from chuyenmuc WHERE (AnHien=1) AND idCM=$id
                 ORDER BY idCM DESC
        LIMIT 0,10";
        $kq = mysqli_query($this->conn,$sql) ;
        return $kq;
    }
    public function changeTitle($str){
        $str = $this->stripUnicode($str);
        $str = str_replace("?","",$str);
        $str = str_replace("&","",$str);
        $str = str_replace("'","",$str);
        $str = str_replace(" "," ",$str);
        $str = trim($str);
        $str = mb_convert_case($str , MB_CASE_TITLE , 'utf-8');
        // MB_CASE_UPPER/MB_CASE_TITLE/MB_CASE_LOWER
        $str = str_replace(" ","-",$str);
        return $str;
        }
        public function stripUnicode($str){
        if(!$str) return false;
        $unicode = array(
        'a'=>'á|à|ả|ã|ạ|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ',
        'A'=>'Á|À|Ả|Ã|Ạ|Ă|Ắ|Ằ|Ẳ|Ẵ|Ặ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
        'd'=>'đ',
        'D'=>'Đ',
        'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',
        'E'=>'É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
        'i'=>'í|ì|ỉ|ĩ|ị',
        'I'=>'Í|Ì|Ỉ|Ĩ|Ị',
        'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',
        'O'=>'Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
        'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',
        'U'=>'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
        'y'=>'ý|ỳ|ỷ|ỹ|ỵ',
        'Y'=>'Ý|Ỳ|Ỷ|Ỹ|Ỵ'
        );
        foreach($unicode as $khongdau=>$codau) {
        $arr = explode("|",$codau);
        $str = str_replace($arr,$khongdau,$str);
        }
        return $str;
    }
}
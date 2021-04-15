<?php
    class LoaiTinAdmin extends Database{

        public function LoaiTin(){
            $sql = "SELECT * from loaitin WHERE (lang ='vi' AND AnHien=1)
                    ORDER BY ThuTu";
             $kq = mysqli_query($this->conn,$sql) ;
             return $kq;
        }

       public function addLoaiTin($ten,$thutu,$anhien){
           $sql = "INSERT INTO `loaitin`(`Ten`, `ThuTu`, `AnHien`) VALUES ('$ten','$thutu',$anhien)";
           $results = false;
           if(mysqli_query($this->conn,$sql)){
               $results = true;
           }
       return json_encode($results);
       }

       public function editLoaiTin($id){
        $sql = "SELECT * FROM loaitin WHERE idLT = $id";
        $kq = mysqli_query($this->conn,$sql) ;
        return $kq;
       }

       public function updateLoaiTin($id,$ten,$thutu,$anhien){
            $sql = "UPDATE `loaitin` SET `Ten`='$ten',`ThuTu`='$thutu',`AnHien`='$anhien'
                    WHERE idLT= $id";
            $results = false;
            if(mysqli_query($this->conn,$sql)){
                $results = true;
            }
        return json_encode($results);
       }
       public function deleteLoaiTin($id){
           $sql = "DELETE FROM `loaitin` WHERE idLT  = $id";
           $results = false;
            if(mysqli_query($this->conn,$sql)){
                $results = true;
            }
        return json_encode($results);
       }
    }
?>
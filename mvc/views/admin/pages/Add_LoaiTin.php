 <!-- Begin Page Content -->
 <div class="container-fluid">
     <h1>Thêm Loại Tin</h1>
     <!-- DataTales Example -->
     <div class="card shadow mb-4">
    
         <div class="card-body">
             <div class="table-responsive">
             <a href="Magazine/Admin/DSLoaiTin" class="btn btn-warning" style="margin-bottom:20px;">Trở Về Danh Sách </a>
                 <form action="Magazine/Admin/Add" method="POST">
                     <div class="form-group">
                         <label>Tên Loại Tin</label>
                         <input type="text" name="tenloaitin" class="form-control" placeholder="...">
                     </div>
                     
                     <div class="form-group">
                         <label>Thứ Tự</label>
                         <input type="number" name="thutu" class="form-control" placeholder="...">
                     </div>
                     <div class="form-group">
                         <label>Ẩn Hiện</label>
                         <br>
                         <!-- <input type="number" name="tenloaitin" class="form-control" placeholder="1 or 0"> -->
                         <select name="anhien" id="anhien">
                             <option value="1" name="an">Hiện</option>
                             <option value="0" name="hien">Ẩn</option>
                         </select>
                     </div>
                     <div class="form-group">
                         <input type="submit" name="submit" class="form-control btn btn-primary" value="Thêm">
                     </div>
                 </form>
                    <?php
                        if(isset($data["result"])){
                            if($data["result"]== true){
                                echo "<script>alert('Thêm Loại Tin Thành Công')</script>";
                            }else{
                                echo "<script>alert('Thêm Loại Tin Thất Bại')</script>";
                            }
                        }
                    ?>
             </div>
         </div>
     </div>

 </div>
 <!-- /.container-fluid -->
 <!-- Begin Page Content -->
 <div class="container-fluid">
    <h1>Loại Tin </h1>
     <!-- DataTales Example -->
     <div class="card shadow mb-4">
         
         <div class="card-body">
             <div class="table-responsive">
                 <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                 <a href="Magazine/Admin/View_Add" class="btn btn-warning" style="margin-bottom:20px;">Thêm Loại Tin Mới </a>
                     <thead>
                         <tr>
                             <th>STT</th>
                             <th>ID Loại Tin</th>
                             <th>Tên Loại Tin</th>
                             <th>Ẩn Hiện</th>
                         </tr>
                     </thead>

                     <tbody>
                         <?php
                         $i=1;
                            while ($loaitin = mysqli_fetch_array($data["LoaiTin"])) {
                                # code...
                            
                         ?>
                         <tr>
                             <td><?php echo $i; ?></td>
                             <td><?php echo $loaitin["idLT"] ?></td>
                             <td><?php echo $loaitin["Ten"] ?></td>
                             <td><?php echo $loaitin["AnHien"] ?></td>
                             <th><a href="Magazine/Admin/View_Edit/<?php echo $loaitin["idLT"]; ?>" class="btn btn-primary">Edit</a></th>
                             <th><a href="Magazine/Admin/Delete/<?php echo $loaitin["idLT"]; ?>" class="btn btn-danger">Remove</a></th>
                             
                         </tr>

                        <?php $i++; } ?>
                        <?php
                        if(isset($data["result"])){
                            if($data["result"]== true){
                                echo "<script>alert('Xóa Loại Tin Thành Công')</script>";
                            }else{
                                echo "<script>alert('Xóa Loại Tin Thất Bại')</script>";
                            }
                        }
                        ?>
                     </tbody>
                 </table>
             </div>
         </div>
     </div>

 </div>
 <!-- /.container-fluid -->
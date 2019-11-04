<?php include_once("header.php"); ?>
<?php include_once("nav.php");?>
<?php include_once("../Model/DanhBaLichSu.php");?>
<?php
   $data = DanhBaLichSu::getList();
  // var_dump($rsFromDB);
   
    ?>
      <!-- Breadcrumbs-->
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Danh bạ: <?php include_once('listcount.php');?> số</div>
        <div class="card-body">
        <h3 > <button type="button" class="btn btn-success"><a style='color:white ' href="Create.php">Create</a></button></h3>
            <hr>
          <div class="table-responsive">
             <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <tr>
                <th>STT</th>
                <th>Tên Thuê Bao</th>
                <th>Số điện thoại</th>
                <th>Email</th>
              </tr>
              <?php $i = 1; ?>

              <?php foreach ($data as $key => $value) : ?>
                <tr>
                  <td><?php echo $i; $i++; ?></td>
                  <td><?php echo $value['tenThueBao']; ?></td>
                  <td><?php echo $value['soDT']; ?></td>
                  <td><?php echo $value['email']; ?></td>
                  <td><a href="?task=frmUpdate&soDT=<?php echo $value['soDT'];?>"><?php echo "Cập nhật" ?></a></td>
                  <td><a href="?task=delete&soDT=<?php echo $value['soDT'];?>"><?php echo "xóa" ?></a></td>
                </tr>
              <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
       <!-- <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div> -->
      <?php include_once("footer.php"); ?>

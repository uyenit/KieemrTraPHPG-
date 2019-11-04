<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title></title>
  <!-- Bootstrap core CSS-->
  <link href="template/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="template/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="template/css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Cập nhật</div>
      <div class="card-body">
        <form action="?task=updateDB" method="post">
          <div class="form-group">
            <label>Họ tên</label>
            <input class="form-control"  type="text" value="<?php echo $data['tenThueBao']; ?>" name="tenThueBao">
          </div>
          <div class="form-group">
            <label>Số điện thoại</label>
            <input class="form-control"  type="text" value="<?php echo $data['soDT']; ?>" name="soDT">
          </div>
          <div class="form-group">
            <label>Email</label>
            <input class="form-control" type="text" value="<?php echo $data['email']; ?>" name="email">
          </div>
          <input type="submit" name="btnEnter" value="Cập nhật" class="btn btn-primary btn-block">
         
          <!-- <a class="btn btn-primary btn-block" href="template/index.html">Login</a> -->
        </form>

        <div class="text-center">
          <!-- <a class="d-block small mt-3" href="template/register.html" style="display: none;">Register an Account</a> -->
          <a class="d-block small mt-3" href="?task=home">Trở về</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="template/vendor/jquery/jquery.min.js"></script>
  <script src="template/vendor/popper/popper.min.js"></script>
  <script src="template/vendor/bootstrap/js/bootstrap.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="template/vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
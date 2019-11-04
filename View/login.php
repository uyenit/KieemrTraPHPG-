<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Danh bạ điện thoại</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/New folder/boostrap/css/boostrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this vendor-->
  <link href="vendor/fontawesome-free/css/fontawesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
        <form action="?task=login" method="post">
          <div class="form-group">
            <label for="exampleInputEmail1">Username</label>
            <input class="form-control" type="text" aria-describedby="emailHelp" placeholder="Username" name="user">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input class="form-control" id="exampleInputPassword1" type="password" placeholder="Password" name="pass">
          </div>
          <div class="form-group">
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Remember Password</label>
            </div>
          </div>
          <input type="submit" name="btnEnter" value="Login" class="btn btn-primary btn-block">
          <!-- <a class="btn btn-primary btn-block" href="template/index.html">Login</a> -->
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="?task=frmDangKy">Register an Account</a>
        </div>
        <div class="text-center">
          <!-- <a class="d-block small mt-3" href="template/register.html" style="display: none;">Register an Account</a> -->
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/vendor/popper/popper.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
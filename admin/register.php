<?php require_once('../model/connect.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>MyLiShop Fashion</title>
    <link rel="icon" type="image/png" href="../images/logohong.png">
    <meta name="viewport" content = "width=device-width, initial-scale =1">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="My đẹp trai">
    <meta name="author" content="Hôih My handsome">
    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery-1.9.1.min.js"></script>
    <!-- Javascript Custom -->
    <script src="../js/mylishop.js" type="text/javascript" charset="utf-8" async defer></script>
    <!-- Bootstrap Custom CSS -->
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
        
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="./TrangChu.php">Fashion MyLiShop</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./TrangChu.php">Trang chủ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./product_add.php">Chỉnh sửa</a>
        </li>
      </ul>
    </div>
  </div>
  <div class="nav3"></div>
    
        </div>
    </ul>    
</nav>

    <div class="container">
        <div class="row">
            <div class="col-md-offset-3 col-md-6 col-sm-6 col-xs-12 c">
                <div class="panel panel-danger register">
                    <!-- panel heading -->
                    <div class="panel-heading">
                        <center><h4><strong> ĐĂNG KÝ TÀI KHOẢN </strong></h4></center>
                    </div><!-- /panel heading -->

                    <form action="register_back.php" method="POST" name="myForm" onsubmit="return validateForm();">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 separator">

                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user-circle"></i></span>
                                            <input type="text" class="form-control" name="fullname" placeholder="Nhập họ tên đầy đủ của bạn" required />
                                        </div>
                                    </div><!-- /form-group -->

                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="fa fa-user fa-lg"></span></span>
                                            <input type="text" class="form-control" name="username" placeholder="Nhập tên đăng ký của bạn" required />
                                        </div>
                                    </div><!-- /form-group -->

                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="fa fa-envelope"></span></span>
                                            <input type="email" class="form-control" name="email" placeholder="Nhập email của bạn" required />
                                        </div>
                                    </div><!-- /form-group -->

                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="fa fa-phone fa-lg"></span></span>
                                            <input type="text" onkeypress="return event.charCode >= 48 && event.charCode <= 57" minlength ="9" maxlength="11" 
                                            class="form-control" name="phone" placeholder="Nhập số điện thoại của bạn" required />
                                        </div>
                                    </div><!-- /form-group -->

                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="fa fa-address-book"></span></span>
                                            <input type="text" class="form-control" name="address" placeholder="Nhập địa chỉ của bạn" required />
                                        </div>
                                    </div><!-- /form-group -->

                                    <!-- password -->
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-lock fa-lg"></span></span>
                                                    <input type="password" class="form-control" name="password" placeholder="Nhập mật khẩu của bạn" required />
                                                </div>
                                            </div>
                                        </div><!-- /col -->
                                        <div class="col-xs-12 col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="fa fa-lock fa-lg"></span></span>
                                                    <input type="password" class="form-control" name="confirmPassword" id="password_confirmation" placeholder="Nhập lại mật khẩu của bạn" tabindex="6" required />
                                                </div><!-- /input-group -->
                                            </div><!-- /form-group -->
                                        </div><!-- /col -->
                                    </div><!-- /row -->
                                    <!-- /.password -->
                                </div><!-- /col -->
                            </div><!-- /row -->

                            <div class="row">
                                <div class="btSubmit">
                                    <div class="col-xs-12 col-md-6 col-md-offset-3">
                                        <input type="submit" class="btn btn-info btn-block btn-lg" name="submit" value="Đăng ký">
                                    </div><!-- /col -->
                                </div><!-- /btnSubmit -->
                            </div><!-- /row -->
                        </div><!-- /panel-body -->
                    </form>

                    <!-- panel-footer -->
                    
                </div><!-- /register -->
            </div><!-- /col -->
        </div><!-- /row -->
    </div><!-- /container -->
</body>
</html>

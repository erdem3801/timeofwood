<!--
=========================================================
* * Black Dashboard - v1.0.1
=========================================================

* Product Page: https://www.creative-tim.com/product/black-dashboard
* Copyright 2019 Creative Tim (https://www.creative-tim.com)


* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('admin-assets');  ?>/img/apple-icon.png">
  <link rel="icon" type="image/png" href="<?php echo base_url('admin-assets');  ?>/img/favicon.png">
  <title>
    Time Of Wood
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="<?php echo base_url('admin-assets');  ?>/css/nucleo-icons.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="<?php echo base_url('admin-assets');  ?>/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?php echo base_url('admin-assets');  ?>/demo/demo.css" rel="stylesheet" />
</head>


<body class="">

<div class="row" style="margin-top: 50px;">
<div class="col-md-4"></div>
<div class="col-md-4">
<div class="card">
  <div class="card-body">
    <form action="<?php echo base_url('login');  ?>" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label for="exampleInputEmail1">Kullanıcı Adı</label>
        <input type="text" name="user_name" class="form-control"    placeholder="Kullanıcı adı">
       
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Şifre</label>
        <input type="password" name="password" class="form-control"  placeholder="Şifre">
      </div>
      

      <button type="submit" name="submit" class="btn btn-primary">Giriş</button>
    </form>
    <?php if(isset($error)){  ?> <small id="emailHelp" class="form-text text-muted"><?php print_r($error);  ?></small>  <?php }  ?>
  </div>
</div>
</div>
<div class="col-md-4"></div>
</div>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title><?= isset($title) ? $title : 'CIShop' ?> - Codeigniter E-Commerce</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/navbar-fixed/">

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>assets/library/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/library/fontawesome/css/all.min.css">
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/app.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
      <div class="container">
        <a class="navbar-brand" href="index.html">CIShop</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle" id="dropdown-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Manage</a>
              <div class="dropdown-menu" aria-labelledby="dropdown-1">
                <a href="admin-category.html" class="dropdown-item">Kategori</a>
                <a href="admin-product.html" class="dropdown-item">Produk</a>
                <a href="admin-order.html" class="dropdown-item">Order</a>
                <a href="admin-users.html" class="dropdown-item">Pengguna</a>
              </div>
            </li>
          </ul> 
          <ul class="navbar-nav">
            <li class="nav-item">
              <a href="cart.html" class="nav-link"><i class="fas fa-shopping-cart"></i>Cart (0)</a>
            </li>
            <li class="nav-item">
              <a href="login.html" class="nav-link">Login</a>
            </li>
            <li class="nav-item">
              <a href="register.html" class="nav-link">Register</a>
            </li>
            <li class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle" id="dropdown-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Admin</a>
              <div class="dropdown-menu" aria-labelledby="dropdown-2">
                <a href="profile.html" class="dropdown-item">Profile</a>
                <a href="orders.html" class="dropdown-item">Orders</a>
                <a href="logout.html" class="dropdown-item">Logout</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Navbar -->
    <?php $this -> load -> view('layouts/_navbar'); ?>
    <!-- Endnavbar -->

    <!-- Content -->
    <?php $this -> load -> view($page); ?>
    <!-- End Content -->

    <script src="<?php echo base_url();?>assets/library/jquery/jquery-3.5.0.min.js" ></script>
    <script src="<?php echo base_url();?>assets/library/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/app.js"></script>
  </body>
</html>    
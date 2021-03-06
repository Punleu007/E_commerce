<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cambodian farmer</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('assets/css/bootstrap/bootstrap.min.css'); ?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('assets/css/shop-homepage.css'); ?>" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link href="<?php echo base_url('assets/css/about.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/mystyle.css'); ?>" rel="stylesheet">

  </head>

  <body class="bg-dark">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="<?php echo base_url(); ?>">Cambodian farmer</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item <?php if($menu=="home")echo "active"; ?>">
              <a class="nav-link" href="<?php echo base_url(); ?>">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <?php if(isset($_SESSION['userID'])){  ?>
              <li class="nav-item <?php if($menu=="post")echo "active"; ?>">
                <a class="nav-link" href="<?php echo base_url('Product/post'); ?>">Product</a>
              </li>
            <?php } ?>
            <li class="nav-item <?php if($menu=="signup")echo "active"; ?>">
              <a class="nav-link" href="<?php echo base_url('User/register'); ?>">Sign up</a>
            </li>
            <li class="nav-item <?php if($menu=="signin")echo "active"; ?>">
              <a class="nav-link" href="<?php echo base_url('User'); ?>">Sign in</a>
            </li>
            <?php if(isset($_SESSION['userID'])){  ?>
            <li class="nav-item <?php if($menu=="signout")echo "active"; ?>">
              <a class="nav-link" href="<?php echo base_url('User/logout'); ?>">Sign out</a>
            </li>
            <?php } ?>
          </ul>
        </div>
      </div>
    </nav>

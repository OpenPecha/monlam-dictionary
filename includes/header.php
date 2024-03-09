
<?php include "includes/config.php"; ?>
<?php   session_start(); ?>
<?php
if(!defined('monalmWeb')){
  //exit("This is cannot open");

  $languge = '?lang='.$_SESSION['lang'];
header('location: /monlamit/index.php'. $languge);

die();
}
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        

    <meta name="description" content="Monlam IT webset">
  
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="author" content="Lobsang Monlam">
    <meta name="generator" content="1.0.0">
    <title><?php echo $lang['title'] ?></title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/headers/">
    <link rel="icon" type="image/png" href="assets/img/favicon-dark.png" sizes="16x16">
    <!-- Custom styles for this template -->
    
    <link href="assets/vendor/fonts/monlm-fonts.min.css" rel="stylesheet">  
    <link href="assets/vendor/fonts/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">

    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">



    <link href="assets/vendor/bootstrap/css/bootstrap.css" rel="stylesheet">


    

    <!-- Template Main CSS File -->
      <link href="assets/css/style.css" rel="stylesheet">  

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js" > </script>



    

 <!-- Bootstrap core CSS -->


<style>
  .bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
  }

  @media (min-width: 768px) {
    .bd-placeholder-img-lg {
      font-size: 3.5rem;
    }
  }
  
</style>



<link href="assets/css/blog.css" rel="stylesheet">

  </head>
 
  <body>
   
  <!-- startin header navigation bar-->  
  <!-- <header id="header"  class="main-header fixed-top bg-dark text-white" >
    <div class="container">
    <nav class="main-nave navbar navbar-expand-lg navbar-dark bg-dark p-0 fixed-top" >
      <div class="container-fluid">
        
        <a href="/monlamit/?lang=<?php echo $_SESSION['lang'] ?>" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
        <img src="assets/img/touch-icon-40-lt.png" class="main-logo" width="30" height="30"><use xlink:href="#bootstrap"></use>
        </a>      
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#topNavBar" aria-controls="topNavBar" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="topNavBar">
        <ul class="navbar-nav ms-auto">
            <li>
              <a style="padding-right: 20px;padding-left: 20px;" class="nav-link" href="product.php?lang=<?php echo $_SESSION['lang'] ?>"><?php echo $lang['products'] ?></a>
            </li>
            <li>
              <a style="padding-right: 20px;padding-left: 20px;"class="nav-link" href="support.php?lang=<?php echo $_SESSION['lang'] ?>"><?php echo $lang['support'] ?></a>
            </li>
            <li>
              <a style="padding-right: 20px;padding-left: 20px;"class="nav-link" href="research.php?lang=<?php echo $_SESSION['lang'] ?>"><?php echo $lang['research'] ?></a>
            </li>
            </li>
            
            <li>
              <a style="padding-right: 20px;padding-left: 20px;"class="nav-link" href="news.php?lang=<?php echo $_SESSION['lang'] ?>"><?php echo $lang['Projects'] ?></a>
            </li>
            <li>
              <a style="padding-right: 20px;padding-left: 20px;"class="nav-link" href="services.php?lang=<?php echo $_SESSION['lang'] ?>"><?php echo $lang['Services'] ?></a>
            </li>
            
            
          </ul>
          <ul class="navbar-nav">

          </ul>
          
          <ul class=" search-box navbar-nav">
          <li class="nav-item dropdown">
              <a class="nav-link  ms-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <span class="heder-searchbar-icon"><i class="bi bi-search"></i></span>
              </a>
              <ul class="heder-searchbar dropdown-menu dropdown-menu-end">
              <form method="post" class="d-flex ms-auto my-3 my-lg-0" action="search.php">
                <div class="input-group">
                  <input  name="search" id= "s" class="form-control" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-primary" type="submit" name="submit_search">
                    <i class="bi bi-search"></i>
                  </button>
                </div>
              </form>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle ms-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-person-fill"></i>
              </a>
              <ul class="dropdown-menu dropdown-menu-end">
           
                  <?php
                    if(isset($_SESSION['username'])){
                      ?>
                      <li><a class='dropdown-item' ><span class="person-che"><i class="bi bi-person-check"></span></i><?php echo $_SESSION['username'] ?></a></li>
                      <li><a class='dropdown-item' href='admin/includes/logout.php?lang=<?php echo $_SESSION['lang'] ?>'>Log out</a></li>
                      <li><a class="dropdown-item" href="admin/user_profile.php?lang=<?php echo $_SESSION['lang'] ?>">User Profile</a></li>
                      <?php
                    }else{
                      ?>
                      <li><a class='dropdown-item' href='admin/includes/login.php?lang=<?php echo $_SESSION['lang'] ?>'>Login</a></li>
                      <li><a class="dropdown-item" href="admin/includes/register.php?lang=<?php echo $_SESSION['lang'] ?>">Register</a></li>
                      <?php
                    }
                  ?>
                
                
                
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle ms-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img style="width: 22px; height: 22px;"  src="assets/img/svg/languge.svg" alt="">
              </a>
                <?php
                  $getlinks = "";
                  $getlinks2 = "";
                
                 
                  
                  foreach ($_GET as $key => $value) {
                  switch ($key) {

                    case "product":
                      $getlinks2 = "&product=".$_GET['product'];
                      break;
                    case "news":
                      $getlinks = "&news=".$_GET['news'];
                      break;
                    default:
                   
                      
                  }
                }
                     
                    
                  $getlinks3 = $getlinks. $getlinks2;
                  //echo $getlinks3;
                ?>

              <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="?lang=tb<?php 
                echo $getlinks3;?>">བོད་ཡིག</a></li>
                <li><a class="dropdown-item" href="?lang=en<?php 
                echo $getlinks3;?>">Englis</a></li>
                
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
      
    
  
  
      </nav>
    </div>

    
  </header> -->
  
  <!-- ending header navigation bar-->
  
 

  



    
    
      


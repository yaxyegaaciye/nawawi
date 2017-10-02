<?php
include "config.php";
session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <title>search by ID</title>
     <meta charset="utf-8"> 
            <script src="jquery-3.2.1.js"></script>
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="bootstrap.min.css">
           <script src="bootstrap.min.js"> </script>
           <link rel="stylesheet" href="font.css">
           <link rel="stylesheet" href="nawawi.css">
<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
           
           <style>
                @font-face { font-family: "Glyphicons Halflings"; 
              src: url(fonts/glyphicons-halflings-regular.ttf); } 

              </style>
  </head>
  <body>

<nav class="navbar navbar-inverse navbar-static-top" style="background-color:#2e353d">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Nawaawi Secondary School</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        
        
        <?php
        if($_SESSION['type']=='Administrator'){
        ?>
       
        <?php
        }else{
        ?>
      
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"data-hover="dropdown" 
          role="button" aria-haspopup="true" 
          aria-expanded="false">Student info <span class="caret"></span></a>
          <ul class="dropdown-menu">
       <li><a href="register.php">New Student (Registration)</a></li>
            <li><a href="searchsbyid.php">Student info (By ID)</a></li>
            <li><a href="searchclass.php">Student (By Class)</a></li>
            <li><a href="modifyy.php">Student Modify</a></li>
          </ul>
        </li>
          <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" 
          aria-haspopup="true" aria-expanded="false">Teacher info <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
          <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" 
          aria-haspopup="true" aria-expanded="false"> Examination <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
          <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" 
          aria-haspopup="true" aria-expanded="false">Payment<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
        <?php
        }
        ?>
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['username'] ?></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
          <span class="glyphicon glyphicon-cog"></span>  Manage<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


  <div class="container-fluid">
  <div class="row">
  <div class="col-md-2">
 <div class="nav-side-menu" style="margin:0 0 0 -15px">
    <div class="brand">nawawi</div>
    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
        <div class="menu-list">
            <ul id="menu-content" class="menu-content collapse out">
                <li>
                  <a href="#">
                  <i class="fa fa-dashboard fa-lg"></i> Dashboard
                  </a>
                </li>
                <li>  &nbsp;&nbsp;    <i class="fa fa-gift fa-lg"> 
                 </i> <a href="modifyy.php">  Student info </a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-globe fa-lg"></i> Teacher info </a>
                </li>  
              <li>
                  <a href="#"><i class="fa fa-car fa-lg"></i> Exams  info</a>
                </li>
           <li>
                  <a href="#"><i class="fa fa-money fa-lg"></i>  Fee info</a>
                </li>
                 <li>
                  <a href="#"><i class="fa fa-money fa-lg"></i>  Class info </a>
                </li>
                 <li>
                  <a href="#"><i class="fa fa-money fa-lg"></i>  Attendance info </a>
                </li>
<br><br><br><br><br>
                 <li>
                  <a href="#">
                  <i class="fa fa-user fa-lg"></i> Profile
                  </a>
                  </li>
                 <li>
                  <a href="#">
                  <i class="fa fa-users fa-lg"></i> Users
                  </a>
                </li>
            </ul>
     </div>
      </div>
	    </div>
          <div class="col-md-0">
          </div>
        <?php include("searchbyid.php");?>
       </div>
</div>



  <script>$('ul.nav li.dropdown').hover(function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
}, function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
});</script> 
  </body>
 
</html>
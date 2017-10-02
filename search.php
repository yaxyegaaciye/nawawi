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
  <title>Dashboard</title>
     <meta charset="utf-8"> 
            <script src="jquery-3.2.1.js"></script>
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="bootstrap.min.css">
           <script src="bootstrap.min.js"> </script>
           <link rel="stylesheet" href="font.css">
<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
           
           <style>
                @font-face { font-family: "Glyphicons Halflings"; 
              src: url(fonts/glyphicons-halflings-regular.ttf); } 
              
              </style>
  </head>
  <body>

<nav class="navbar navbar-inverse navbar-static-top" style="height:60px; font-size:16px; font-family:verdana; background-color:#04071f;" >
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
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"data-hover="dropdown" role="button" aria-haspopup="true" 
          aria-expanded="false">Student info <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">New Student (Registration)</a></li>
            <li><a href="#">Student info (By ID)</a></li>
            <li><a href="#">Student (By Class)</a></li>
            <li><a href="#">Student Modify</a></li>
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



  <div class="container">
  <div class="row">
  <div class="col-md-1">
  
  
    </div>



  <div class="col-md-11"> 

  <form class="form-inline" action="register.php" method="POST">
  <div class="form-group">
    <label for="text">ID:</label>&nbsp;&nbsp;&nbsp;
    <input type="text" class="form-control" id="id" name="id"> &nbsp;&nbsp;&nbsp;
  </div> 

  
  <div class="form-group">
    <label for="text">Student name: &nbsp;&nbsp;&nbsp; </label>
    <input type="text" class="form-control" id="studentname" name="studentname" size="50px">
  </div> &nbsp;&nbsp;&nbsp;
   <div class="form-group">
    <label>Gender : </label>
  <select style="width:90px ; height:36px;" name="gender" id="gender">
  <option>Male</option>
  <option>Female</option>
</select>
  </div><br><br>
  
  <div class="form-group">
    <label for="text"> Mother name :  </label>
    <input type="text" class="form-control" id="mothername" name="mothername" size="35px">
  </div>&nbsp;&nbsp;&nbsp;
  <div class="form-group">
    <label for="text">Guardian name:  </label>
    <input type="text" class="form-control" id="guardianname" name="guardianname" size="50px">
  </div><br><br>
  <div class="form-group">
    <label for="text">Guardian Tell:  </label> &nbsp;
    <input type="text" class="form-control" id="guardiantell" name="guardiantell" size="15px">
  </div> &nbsp;
   <div class="form-group">
    <label for="text">Guardian occupation:  </label> &nbsp;
    <input type="text" class="form-control" id="occupation" name="guardianoccupation" size="15px">
  </div> &nbsp;
  
<div class="form-group">
    <label for="text">Place Of Brith:  </label> &nbsp;
    <input type="text" class="form-control" id="POB" name="pob"size="15px" >
  </div> &nbsp;
  <br><br>
  <div class="form-group">
    <label for="text">Address :  </label> &nbsp;&nbsp;
    <input type="text" class="form-control" id="Address" name="address" >
  </div> &nbsp;&nbsp;
  <div class="form-group">
    <label for="text">Date Of Brith :  </label> &nbsp;&nbsp;
    <input type="date" class="form-control" id="dob " name="dob" >
  </div> &nbsp;&nbsp;
  <div class="form-group">
    <label for="text">Phone NO:  </label> &nbsp;&nbsp;
    <input type="text" class="form-control" id="phone" name="phone" >
  </div> &nbsp;&nbsp;<br> <br>
    <div class="form-group">&nbsp;&nbsp;
    <label >Level : </label>&nbsp;&nbsp;
  <select  style="width:120px ; height:36px;" name="level" id="level">
  <option >Necessary</option>
  <option >Primary</option>
  <option>Secondary</option>
  
</select>
  </div>&nbsp;&nbsp;
   <div class="form-group">
    <label for="text">Class name : </label>&nbsp;&nbsp;
  <select style="width:120px ; height:36px;" name="classname" id="classname">
  <option >Necessary</option>
  <option >Grade One</option>
  <option >Grade Two</option>
  <option >Grade Three</option>
  <option >Grade Four</option>
  <option>Grade Five</option>
  <option >Grade Six</option>
  <option>Grade Seven</option>
  <option>Grade Eight</option>
  <option>Form One</option>
  <option>Form Two</option>
  <option>Form Three</option>
  <option>Form Four</option>
  
</select>
  </div> &nbsp;&nbsp;
    <div class="form-group">&nbsp;&nbsp;
    <label for="text">Section : </label>&nbsp;&nbsp;
  <select style="width:120px ; height:36px;" name="section" id="section">
  <option>A</option>
   <option>B</option>
    <option>C</option>
     <option>D</option>
      <option>E</option>
       <option>F</option>
        <option>G</option>
         <option>H</option>
          <option>I</option>
           <option>J</option>
            <option>K</option>
             <option>L</option>
              <option>M</option>
               <option>N</option>
                <option>O</option>
                 <option>P</option>
                  <option>Q</option>
                   <option>R</option>
                    <option>S</option>
                     <option>T</option>
                      <option>V</option>
                       <option>U</option>
                        <option>W</option>
                         <option>X</option>
                          <option>Y</option>
                           <option>Z</option>
                       
            
  
  
</select>
  </div>  &nbsp;&nbsp;
  <div class="form-group">&nbsp;&nbsp;
    <label for="text">Branch : </label>&nbsp;&nbsp;
  <select  style="width:120px ; height:36px;" name="branch" id="branch">
  <option>Nawawi</option>
  <option>Ridwaan</option>
  <option>Raxmana</option>
  
</select>
</div><br><br>
<div class="form-group">
    <label>Nationality :  </label> &nbsp;&nbsp;
    <input type="text" class="form-control" id="nationality " name="nationality">
  </div> &nbsp;&nbsp;
  <div class="form-group">
    <label for="text">Registration Date :  </label> &nbsp;&nbsp;
    <input type="date" class="form-control" id="registrationdate" name="registrationdate" >
  </div> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <label class="btn btn-success btn-file">
    Browse... <input type="file" style="display: none;" onchange="readURL(this);" name="image">
     <img id="blah" src="#" alt="your image" /></label><br><br>
     <BR>
    <br>
     <button type="submit" name="update" class=" btn-primary" >UPDATE</button>
       <button type="submit" name="search"class=" btn-danger" >SEARCH</button>

</form>
  </div>
  </div>
  </div>




<!-- script samynaysa dropdown hover -->



 <script>$('ul.nav li.dropdown').hover(function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
}, function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
});</script> 
<!-- dhamaadka script samynaysa dropdown hover -->
  </body>   
  


<script>function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result)
                    .width(100)
                    .height(100);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
    </script>

    
  
</html>
<?php
include "config.php";
session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
}
?>


<?php
$conn = new mysqli("localhost", "root", "", "simpledata");
    $sql = "SELECT * FROM registration ";
    $result =mysqli_query($conn,$sql);
if (mysqli_num_rows($result)){
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
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

    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height:550px;
      background-color:#2e353d;
      margin-top:-20px;
    }
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 105px;
      }
    }
  </style>
</head>
<body>




<nav class="navbar navbar-inverse navbar-static-top" style="background-color:#2e353d">
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
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
    </div>
</div>
</div>
 </nav>

<div class="container-fluid" >
<div class="row">
   <div class="col-md-3 sidenav"><br>
      <h4><i class="fa fa-dashboard fa-lg"></i> NAWAWI SCHOOL</h4>
      <ul class="nav nav-pills nav-stacked" >
        <li ><a href="modifyy.php"><i class="fa fa-globe fa-lg"></i> Student info</a></li>
        <li class="active"><a href="exam.php"><i class="fa fa-user-plus fa-md"></i> Examination info</a></li>
        <li><a href="#section3"><i class="fa fa-teacher fa-md"></i> Teacher info</a></li>
        <li><a href="#section3"><i class="fa fa-globe fa-lg"></i> fees  info</a></li>
      </ul><br>
      <div class="input-group">
          <input type="text" class="form-control" placeholder="Search exam..">
          <span class="input-group-btn">
          <button class="btn btn-default" type="button">
            <span class="glyphicon glyphicon-search"></span>
          </button>
          </span>
      </div>
     </div>
     <br>
     
  <form class="form-inline">
 <div class="col-md-9">
 <div class="row"> <!-- bilow rowga kowaad ee col-9 -->
 <div class="col-md-9">
 </div>
 <div class="col-md-3">
<button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModalLong">
 <i class="fa fa-plus fa-md"></i> Register individual
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLongTitle">Exam registreation by individual</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form>
      <div class="modal-body">
      <div class="form-group">
      <label for="sel1">Branch:</label>
      <select class="form-control">
        <option>Nawawi</option>
  <option>Ridwaan</option>
  <option>Raxma</option>
      </select>
      </div> &nbsp;&nbsp;
        <div class="form-group">
      <label for="sel1">Level:</label>
      <select class="form-control" id="sel1">
     <option >Kinder</option>
  <option >Primary</option>
  <option>Secondary</option>
      </select>
      </div>&nbsp;&nbsp;
        <div class="form-group">
      <label for="sel1">Class:</label>
      <select class="form-control" id="sel1">
     <option >Kinder</option>
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
      </div><br><br>
        <div class="form-group">
      <label for="sel1">Section:</label>
      <select class="form-control" id="sel1" style="width:100px">
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
      </div>&nbsp;&nbsp;
        <div class="form-group">
      <label for="sel1">Year:</label>&nbsp;&nbsp;
      <select class="form-control" id="sel1">
         <option>2000/2001</option>
        <option>2001/2002</option>
        <option>2002/2003</option>
        <option>2003/2004</option>
         <option>2004/2005</option>
        <option>2005/2006</option>
        <option>2006/2007</option>
        <option>2007/2008</option>
         <option>2008/2009</option>
        <option>2009/2010</option>
        <option>2010/2011</option>
        <option>2011/2012</option>
          <option>2012/2013</option>
        <option>2013/2014</option>
        <option>2014/2015</option>
        <option>2015/2016</option>
         <option>2016/2017</option>
        <option>2017/2018</option>
        <option>2018/2019</option>
        <option>2019/2020</option>
         <option>2020/2021</option>
        <option>2021/2022</option>
        <option>2022/2023</option>
        <option>2023/2024</option>
      </select>
      </div>&nbsp;&nbsp;
        <div class="form-group">
      <label for="sel1">Term:</label>&nbsp;&nbsp;
      <select class="form-control" id="sel1"style="width:130px">
        <option>Term one</option>
        <option>Term two</option>
      </select>
      </div><br><br>
      <label>ID :</label>&nbsp;&nbsp;
       <input type="text" class="form-control" placeholder"ID" style="width:100px" name="id">&nbsp;&nbsp;&nbsp;&nbsp;
        <label>Name :</label>&nbsp;&nbsp;
      <input type="text" class="form-control" placeholder"Student name" style="width:320px" name="studentname">&nbsp;&nbsp;&nbsp;&nbsp;<br><br>
       <label>Islamic :</label>&nbsp;&nbsp;
       <input type="text" class="form-control" placeholder"Islamic" style="width:100px" name="islamic">&nbsp;&nbsp;&nbsp;

        <label>Arabic :</label>&nbsp;&nbsp;
      <input type="text" class="form-control" placeholder"Arabic" style="width:100px" name="arabic">&nbsp;&nbsp;&nbsp;
       <label>somali :</label>&nbsp;&nbsp;
      <input type="text" class="form-control" placeholder"somali" style="width:100px" name="somali"><br><br>
       <label>English :</label>&nbsp;&nbsp;
      <input type="text" class="form-control" placeholder"English" style="width:100px" name="english">&nbsp;&nbsp;&nbsp;
       <label>Math :</label>&nbsp;&nbsp;
      <input type="text" class="form-control" placeholder"Math" style="width:100px" name="math">&nbsp;&nbsp;&nbsp;
      <label>Science :</label>&nbsp;&nbsp;
      <input type="text" class="form-control"  placeholder"Science"  style="width:100px" name="science"><br><br>
      <label>social :</label>&nbsp;&nbsp;
      <input type="text" class="form-control" placeholder"social" style="width:100px" name="social">
      <label>Geography :</label>&nbsp;&nbsp;
      <input type="text" class="form-control" placeholder"Geography"  style="width:100px" name="geography">
      <label>History :</label>&nbsp;&nbsp;
      <input type="text" class="form-control" placeholder"History" style="width:100px" name="history"><br><br>
      <label>Biology :</label>&nbsp;&nbsp;
      <input type="text" class="form-control" placeholder"Biology" style="width:150px" name="biology">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <label>Chemistry :</label>&nbsp;&nbsp;
      <input type="text" class="form-control" placeholder"Chemistry" style="width:150px" name="chemistry"><br><br>
      <label>Physics :</label>&nbsp;&nbsp;
      <input type="text" class="form-control" placeholder"Physics"  style="width:150px" name="physics">
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <label>displine :</label>&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="text"  class="form-control" style="width:150px" placeholder"displine"  name="displine">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>
 </div>
 </div> <!-- dhaamaadka rowga kowaad ee col-9 -->
 <br>

</form>



<!--QAYBTA LABAAD-->



<form action="exams.php"method="POST">
     <div class="row">
<div class="col-md-12" style="font-size:12px">
      <div class="form-group">
      <label>Branch:</label>
      <select class="form-control" name="branch">
<option >Nawawi</option>
<option>Raxma</option>
<option >Ridwaan </option>
      </select>
      </div>
        <div class="form-group">
      <label>Level:</label>
      <select class="form-control" name="level">
     <option >Kinder</option>
  <option >Primary</option>
  <option>Secondary</option>
      </select>
      </div>
        <div class="form-group">
      <label>Class:</label>
      <select class="form-control" name="classname">
     <option >Kinder</option>
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
      </div>
        <div class="form-group">
      <label>Section:</label>
      <select class="form-control" name="section">
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
      </div>
        <div class="form-group">
      <label>Year:</label>
      <select class="form-control"name="year">
         <option>2000/2001</option>
        <option>2001/2002</option>
        <option>2002/2003</option>
        <option>2003/2004</option>
         <option>2004/2005</option>
        <option>2005/2006</option>
        <option>2006/2007</option>
        <option>2007/2008</option>
         <option>2008/2009</option>
        <option>2009/2010</option>
        <option>2010/2011</option>
        <option>2011/2012</option>
          <option>2012/2013</option>
        <option>2013/2014</option>
        <option>2014/2015</option>
        <option>2015/2016</option>
         <option>2016/2017</option>
        <option>2017/2018</option>
        <option>2018/2019</option>
        <option>2019/2020</option>
         <option>2020/2021</option>
        <option>2021/2022</option>
        <option>2022/2023</option>
        <option>2023/2024</option>
      </select>
      </div>
        <div class="form-group">
      <label>term:</label>
      <select class="form-control" name="term">
        <option>Term one</option>
        <option>Term two</option>
      </select>
      </div>
    </div>
         </div>
         <div class="table-responsive" id="result">
         
      <table class="table table-sm table-hover">
      <thead>
    <tr>
      <th>ID</th>
      <th style="width:500px"> Name</th>
      <th>Islamic</th>
      <th>Arabic</th>
       <th>Somali</th>
      <th>English</th>
      <th>Math</th>
      <th>Science</th>
       <th>Social</th>
      <th>Geography</th>
      <th>History</th>
      <th>Biology</th>
       <th>Chemistry</th>
      <th>Physics</th>
      <th>Displine</th>
        </tr>
      </thead>

       <tbody>
       <?php
            while($row = mysqli_fetch_array($result)){

              ?>
                <tr>
      <td><input type="hidden"name="id"><?php echo $row['ID'];?></td>
      <td ><input type="hidden"name="name"><?php echo $row["studentname"]; ?></td> 
      <td><input type="text" class="form-control" style="width:80px" name="islamic"></td>
      <td><input type="text" class="form-control" style="width:80px" name="arabic"></td>
      <td><input type="text" class="form-control" style="width:80px" name="somali"></td>
      <td><input type="text" class="form-control" style="width:80px" name="english"></td>
      <td><input type="text" class="form-control" style="width:80px" name="math"></td>
      <td><input type="text" class="form-control" style="width:80px" name="science"></td>
      <td><input type="text" class="form-control" style="width:80px" name="social"></td>
      <td><input type="text" class="form-control" style="width:80px" name="geography"></td>
      <td><input type="text" class="form-control" style="width:80px" name="history"></td>
      <td><input type="text" class="form-control" style="width:80px" name="biology"></td>
      <td><input type="text" class="form-control" style="width:80px" name="chemistry"></td>
      <td><input type="text" class="form-control" style="width:80px" name="physics"></td>
      <td><input type="text" class="form-control" style="width:80px" name="displine"></td>
      
       </tr>
  <?php
            }
}
            ?>
  </tbody>
 
</table>

 </div>
 </div> 
        <button type="submit"name="register" class="btn btn-primary" style="margin:0 0 0 800px; width:100px">REGISTER</button>
</form>
</div>
</div>

</body>
 



 <script>$('ul.nav li.dropdown').hover(function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
}, function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
});</script>
</html>

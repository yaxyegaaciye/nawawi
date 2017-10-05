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
            <li><a href="#">user manage</a></li>
            <li><a href="#">change profile</a></li>
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
     <div class="col-md-2">
 <div class="nav-side-menu" style="margin:0 0 0 -115px">
    <div class="brand">nawawi</div>
    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
        <div class="menu-list">
            <ul id="menu-content" class="menu-content collapse out">
                <li>
                  <a href="#">
                  <i class="fa fa-dashboard fa-lg"></i> Dashboard
                  </a>
                </li>
                <li><a href="modifyy.php">   <i class="fa fa-gift fa-lg">  
                 </i> Student info </a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-globe fa-lg"></i> Teacher info </a>
                </li>  
              <li>
                  <a href="table.php"><i class="fa fa-car fa-lg"></i> Exams  info</a>
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
    <div class="col-sm-10" style="margin: 0 0 0 -40px">
        <div class="table-responsive">
            <table class="table table-striped table-condensed table-hover table-bordered">
                <tr>
                    <thead style="background-color:black;color:white; font-size:11px;">
                      <th>ID</th>
      <th style="padding-right:100px" > Name</th>
       <th>Branch</th>
      <th>Level</th>
       <th>Classname</th>
      <th>Section</th>
       <th>Term</th>
        <th>Year</th>
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
        <th>Total</th>
      <th>Average</th>
      <th>Term three</th>
      <th>Edit </th>
      <th>Delete</th> 
                         </thead> 
                </tr>
                <tbody style="font-size:11px;">
    <?php
    $conn = new mysqli("localhost", "root", "", "simpledata");
   $total ="";
  $average ="";
 $sql2="SELECT islamic,arabic,somali,english,math,science,social,geography,history,physics,biology,chemistry,displine FROM exam";
    $result=$conn->query($sql2);
    $rows= mysqli_fetch_assoc($result);
    $total = array_sum($rows);
    $average = array_sum($rows)/count($rows);
    
      ?>
     <?php
    $conn = new mysqli("localhost", "root", "", "simpledata");
    $sql="SELECT * FROM exam";
    $result=$conn->query($sql);
    $row= $result->fetch_assoc();
   while($row = mysqli_fetch_array($result)){?>
                <tr>
                     <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row["name"] ?></td>
                    <td><?php echo $row["branch"] ?></td>
	                 <td><?php echo $row['level'] ?></td>
                    <td><?php echo $row["classname"] ?></td>
                    <td><?php echo $row["section"] ?></td>
                     <td><?php echo $row['term'] ?></td>
                    <td><?php echo $row["year"] ?></td>
                    <td><?php echo $row["islamic"] ?></td>
	                 <td><?php echo $row['arabic'] ?></td>
                    <td><?php echo $row["somali"] ?></td>
                    <td><?php echo $row["english"] ?></td>
                     <td><?php echo $row["math"] ?></td>
	                 <td><?php echo $row['science'] ?></td>
                    <td><?php echo $row["social"] ?></td>
                    <td><?php echo $row["geography"] ?></td>
                     <td><?php echo $row["history"] ?></td>
                     <td><?php echo $row["physics"] ?></td>
	                 <td><?php echo $row['biology'] ?></td>
                    <td><?php echo $row["chemistry"] ?></td>
                    <td><?php echo $row["displine"] ?></td>
                     <td><?php echo ($total); ?></td>
                    <td><?php echo ($average); ?></td>
                    <td><?php echo $row["term_three"] ?></td>
                    <td>
                        <button type="submit" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#edit-<?php echo $row['id']; ?>" id=""><i class="fa fa-pencil fa-sm"></i> Edit</button>
                        <div class="modal fade" role="dialog" id="edit-<?php echo $row['id']; ?>">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                   <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLongTitle">STUDENT EXAM</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <div class="modal-body">
    <form method="POST" action="update.php" class="form-inline">
    <label> ID : &nbsp;&nbsp;</label>
    <input type="text" name="id" id="#edit-<?php echo $row['id']; ?>"style="width:130px ; height:29px; font-size:13px;font-family:verdana;" class="form-control" value="<?php echo $row['id']; ?>"> &nbsp;&nbsp;&nbsp;&nbsp;
    <label> Name: &nbsp;&nbsp;</label>
    <input style="width:330px ; height:29px; font-size:13px;font-family:verdana;"type="text" name="name" id="#edit-<?php echo $row['id']; ?>"class="form-control" value="<?php echo $row['name']; ?>"><br><br>
                                             <div class="form-group">
      <label>Branch:</label>
      <select class="form-control" name="branch"style="width:140px">
        <option>Nawawi</option>
  <option>Ridwaan</option>
  <option>Raxma</option>
      </select>
      </div> &nbsp;&nbsp;
        <div class="form-group">
      <label >Level:</label>
      <select class="form-control" name="level" style="width:135px">
     <option >Kinder</option>
  <option >Primary</option>
  <option>Secondary</option>
      </select>
      </div>&nbsp;&nbsp;
        <div class="form-group">
      <label>Class:</label>
      <select class="form-control" name="classname" style="width:140px">
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
      <label >Section:</label>
      <select class="form-control" name="section" style="width:140px">
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
      <label>Year:</label>&nbsp;&nbsp;
      <select class="form-control"name="year" style="width:135px">
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
      <label>Term:</label>&nbsp;&nbsp;
      <select class="form-control"style="width:140px" name="term">
        <option>Term one</option>
        <option>Term two</option>
      </select>
      </div><br><br>
      <label>Islamic :</label>&nbsp;&nbsp;
       <input type="text" class="form-control" id="#edit-<?php echo $row['id']; ?>" value="<?php echo $row['islamic']; ?>"  placeholder"Islamic" style="width:127px" name="islamic">&nbsp;&nbsp;&nbsp;

        <label>Arabic :</label>&nbsp;&nbsp;
      <input type="text" class="form-control" id="#edit-<?php echo $row['id']; ?>" value="<?php echo $row['arabic']; ?>" placeholder"Arabic" style="width:126px" name="arabic">&nbsp;&nbsp;&nbsp;
       <label>Somali :</label>&nbsp;&nbsp;
      <input type="text" class="form-control" id="#edit-<?php echo $row['id']; ?>" value="<?php echo $row['somali']; ?>" placeholder"somali" style="width:127px" name="somali"><br><br>
       <label>English :</label>&nbsp;&nbsp;
      <input type="text" class="form-control"id="#edit-<?php echo $row['id']; ?>" value="<?php echo $row['english']; ?>" placeholder"English" style="width:127px" name="english">&nbsp;&nbsp;&nbsp;
       <label>Math :</label>&nbsp;&nbsp;
      <input type="text" class="form-control"id="#edit-<?php echo $row['id']; ?>" value="<?php echo $row['math']; ?>" placeholder"Math" style="width:126px" name="math">&nbsp;&nbsp;&nbsp;
      <label>Science :</label>&nbsp;&nbsp;
      <input type="text" class="form-control"id="#edit-<?php echo $row['id']; ?>" value="<?php echo $row['science']; ?>"  placeholder"Science"  style="width:127px" name="science"><br><br>
      <label>Social :</label>&nbsp;&nbsp;
      <input type="text" class="form-control"id="#edit-<?php echo $row['id']; ?>" value="<?php echo $row['social']; ?>" placeholder"social" style="width:127px" name="social">
      &nbsp;&nbsp;&nbsp;&nbsp;
      <label>Geo :</label>&nbsp;&nbsp;
      <input type="text" class="form-control"id="#edit-<?php echo $row['id']; ?>" value="<?php echo $row['geography']; ?>" placeholder"Geography"  style="width:126px" name="geography">
      &nbsp;&nbsp;&nbsp;&nbsp;
      <label>History :</label>&nbsp;&nbsp;
      <input type="text" class="form-control"id="#edit-<?php echo $row['id']; ?>" value="<?php echo $row['history']; ?>" placeholder"History" style="width:127px" name="history"><br><br>
      <label>Biology :</label>&nbsp;&nbsp;
      <input type="text" class="form-control"id="#edit-<?php echo $row['id']; ?>" value="<?php echo $row['biology']; ?>" placeholder"Biology" style="width:220px" name="biology">
        <label>Chemistry :</label>&nbsp;&nbsp;
      <input type="text" class="form-control"id="#edit-<?php echo $row['id']; ?>" value="<?php echo $row['chemistry']; ?>" placeholder"Chemistry" style="width:215px" name="chemistry"><br><br>
      <label>Physics :</label>&nbsp;&nbsp;
      <input type="text" class="form-control"id="#edit-<?php echo $row['id']; ?>" value="<?php echo $row['physics']; ?>" placeholder"Physics"  style="width:220px" name="physics">
        <label>Displine :</label>&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="text"  class="form-control"id="#edit-<?php echo $row['id']; ?>" value="<?php echo $row['displine']; ?>" style="width:215px" placeholder"displine"  name="displine">
        
<br><br>
                                   
     <button type="submit" style="width:100%; height:29px;"class="btn btn-warning" name="updateexam">Update</button> 
     
     
                 </form>
                                       
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                   
                                </div> </div> </div>  </td>
                              <td>
                              <a onclick ="return confirm('are you sure to delete')" href="update.php?idd=<?php echo $row['id'] ?>"  
                        class="btn btn-danger btn-sm"><i class="fa fa-trash fa-sm"></i> Delete</a>
                </td>
                   
                </tr>
   <?php }
echo " </tbody></table></div></div></div></div>";
?>
</body></html>

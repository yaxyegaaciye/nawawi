
<?php
$host ="localhost";
$user = "root";
$pswd = "";
$db = "simpledata";
$id="";
$studentname="";
$gender="";
$mothername="";
$guardianname="";
$guardiantell="";
$guardianoccupation="";
$pob="";
$address="";
$dob="";
$phone="";
$level="";
$classname="";
$section="";
$branch="";
$nationality="";
$registrationdate="";
$image="";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
//$conn = mysqli_connect($host,$user,$pswd,$db);//(MySQLi Procedural)
$conn = new mysqli($host,$user,$pswd,$db);//(MySQLi Object-oriented)


function getData()
{


$data =array();

$data[12] =$_POST['classname'];
$data[13] =$_POST['section'];


return $data;
}

if (isset($_POST['search'])) {
    $info = getData();
    $sql = "SELECT *FROM registration ";
    $search_result =mysqli_query($conn,$sql);
if (mysqli_num_rows($search_result)){
 while ($rows=mysqli_fetch_array($search_result)) {

$id=$rows['ID'];
$id=$rows['studentname'];
$id=$rows['gender'];
$id=$rows['mothername'];
$id=$rows['guardianname'];
$id=$rows['guardiantell'];
$id=$rows['guardianoccupation'];
$id=$rows['pob'];
$id=$rows['address'];
$id=$rows['dob'];
$id=$rows['phone'];
$id=$rows['level'];
$id=$rows['classname'];
$id=$rows['section'];
$id=$rows['branch'];
$id=$rows['nationality'];
$id=$rows['registrationdate'];
$id=$rows['image'];
}
}
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <title>search by class</title>
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



<div class="col-md-10">
      <form class="navbar-form"action="searchclass.php"method="POST"> 
 
            <div class="input-group"> 
                <div class="form-group">
    <label >Class name : </label>&nbsp;&nbsp;
  <select style="width:120px ; height:36px;" name="classname" id="classname">
    <option>SELECT</option>
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
    <label>Section : </label>&nbsp;
  <select style="width:120px ; height:36px;" name="section" id="result" onchange="result">
  <option>SELECT</option>
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
&nbsp;
                <div class="input-group-btn"> 
                    <button class="btn btn-primary"type="submit" name="search">
                        <span class="glyphicon glyphicon-search"></span></button> 
                        </div> </div> </form>
  <h2>Student Searched</h2>
  <h4>this table shows the student has been searched</h4>   
  <div class="table-responsive">        
  <table class="table table-bordered table-hover table-striped"id="table">
    <thead style="background-color:black ; color:white ; font-size:12px" >
      <tr>
        <th>ID</th>
        <th>studentname</th>
        <th>gender</th>
        <th>mothername</th>
        <th>gurdianname</th>
        <th>guardiantell</th>
        <th>guardianoccupation</th>
        <th>pob</th>
        <th>address</th>
         <th>dob</th>
        <th>phone</th>
        <th>level</th>
        <th>classname</th>
        <th>section</th>
        <th>branch</th>
        <th>nationality</th>
        <th>registrationdate</th>
        <th>image</th>
      </tr>
      <tbody style=" font-family:verdana; font-size:12px">
     <?php
    // Select Command
// sql to Select a record
$conn = new mysqli ("localhost","root","","simpledata");
if (isset($_POST['search'])){
$sql = "SELECT * FROM registration WHERE classname='$info[12]'AND section='$info[13]' ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
   while ($rows=$result->fetch_assoc() ) {
       // output data of each row
  echo "<tr><td>".$rows['ID']."</td><td>".$rows['studentname']."</td><td>".$rows['gender']
."</td><td>".$rows['mothername']."</td><td>".$rows['guardianname']."</td><td>".$rows['guardiantell']."</td>
<td>".$rows['guardianoccupation']."</td><td>".$rows['pob']."</td><td>".$rows['address']."</td><td>".$rows['dob']."</td>
<td>".$rows['phone']."</td><td>".$rows['level']."</td><td>".$rows['classname']."</td><td>".$rows['section']."</td>
<td>".$rows['branch']."</td><td>".$rows['nationality']."</td><td>".$rows['registrationdate']."</td><td>".$rows['image']."</td></tr>";
}
}}
   ?>
  </table>
 </div> </div>




<!-- script samynaysa dropdown hover -->

<!--<script>

function result(){
var x=document.getElementById("result").value;
document.getElementById("table").innerHTML=""+x;

}


</script>-->


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
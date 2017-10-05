<?php
include "config.php";
session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
}
?>
 <?php
$host ="localhost";
$user = "root";
$pswd = "";
$db = "simpledata";
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
//$conn = mysqli_connect($host,$user,$pswd,$db);//(MySQLi Procedural)
$conn = new mysqli($host,$user,$pswd,$db);//(MySQLi Object-oriented)

function getData()
{


$data =array();
$data[0] =$_POST['id'];
$data[1] =$_POST['studentname'];
$data[2] =$_POST['gender'];
$data[3] =$_POST['mothername'];
$data[4] =$_POST['guardianname'];
$data[5] =$_POST['guardianrelation'];
$data[6] =$_POST['guardiantell'];
$data[7] =$_POST['guardianoccupation'];
$data[8] =$_POST['pob'];
$data[9] =$_POST['address'];
$data[10] =$_POST['dob'];
$data[11] =$_POST['phone'];
$data[12] =$_POST['level'];
$data[13] =$_POST['classname'];
$data[14] =$_POST['section'];
$data[15] =$_POST['branch'];
$data[16] =$_POST['nationality'];
$data[17] =$_POST['registrationdate'];
$data[18] =$_POST['image'];

return $data;
}
if (isset($_POST['register'])) {
    $info = getData();
    $sql = "INSERT INTO registration (ID, studentname, gender, mothername,guardianname,guardianrelation,guardiantell,
    guardianoccupation,pob,address,dob,phone,level,classname,section,branch,nationality,registrationdate,image)
    VALUES ('$info[0]', '$info[1]', '$info[2]','$info[3]','$info[4]','$info[5]','$info[6]',
    '$info[7]','$info[8]','$info[9]', '$info[10]', '$info[11]','$info[12]','$info[13]','$info[14]','$info[15]',
    '$info[16]','$info[17]','$info[18]')";

    $search_result = mysqli_query($conn,$sql);
   if ($search_result) {

     }
     

else {

}
}


?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <title>student registration</title>
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

<nav class="navbar navbar-inverse navbar-static-top"
 style="height:50px; font-size:14px; font-family:verdana; background-color:#2e353d;" >
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
    <div class="col-md-2"> 
 <div class="nav-side-menu" style="margin:-8px 0 0 -115px">
    <div class="brand"style="height:63px">nawawi</div>
    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
        <div class="menu-list">
            <ul id="menu-content" class="menu-content collapse out">
                <li>
                  <a href="#">
                  <i class="fa fa-dashboard fa-lg"></i> Dashboard
                  </a>
                </li>
                <li> &nbsp;  <i class="fa fa-gift fa-lg">    
                 </i>  <a href="modifyy.php"> &nbsp;  Student info </a>
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
      <div class="col-md-10" style=" margin:0 0 0 -15px "> 
<div class="panel panel-primary"  style=" margin:-12px 0 0 0 ">
  <div class="panel-heading">Student Registration</div>
  <div class="row" style=" margin:3px 0 0 0 ">
  <div class="col-md-4"> 
  <form  action="register.php" method="POST"  onsubmit="return validateForm()" name="myForm" >
  <div class="form-group">
    <label for="text">ID:</label>&nbsp;
    <input type="text" class="form-control" id="id" name="id"required style=" height:31px;"onkeypress="return isNumber(event)" > 
  </div> 

 <div class="form-group">
    <label for="text"> Mother name :  </label>
    <input type="text" class="form-control" id="mothername" name="mothername" style=" height:31px;" 
    required pattern="[a-zA-Z]+.*\S.*" title="allow only letters" >
  </div>
 
  <div class="form-group">
    <label>Guardian name:  </label>
    <input type="text" class="form-control" id="guardianname" name="guardianname" style=" height:31px;"
 required pattern="[a-zA-Z]+.*\S.*" title="allow only letters">
  </div>
<div class="form-group">
    <label for="text">Address :  </label> 
    <input type="text" class="form-control" id="Address" name="address"style=" height:31px;"
     pattern="[A-Za-z]" >
  </div> 

  
   <div class="form-group">
    <label for="text">Phone NO:  </label> &nbsp;
    <input type="text" class="form-control" id="phone" name="phone" required=""style=" height:31px;"onkeypress="return isNumber(event)" >
  </div>
 <div class="form-group">
    <label for="text">Section : </label>&nbsp;
  <select style="width:285px ;  height:31px;" name="section" id="section">
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
  <button type="submit" name="register" class="btn btn-primary " style="width:760px ;height:31px;"  >REGISTER</button>
</div>



    <div class="col-md-6"> 
  <div class="form-group">
    <label>Student name: </label>
    <input type="text" class="form-control" id="studentname" name="studentname"  style="height:31px;"  required pattern="[a-zA-Z]+.*\S.*" title="allow only letters">
  </div> 
  <div class="form-group">
    <label>Nationality :  </label> &nbsp;
 <select   style="width:445px ; height:31px;" name="nationality" id="nationality">
 <option >SELECT</option>
<option >Somalia</option>
 <option >Malta</option>
 <option>Yemen</option>
 <option>Yugoslavia</option>
 <option>South Africa</option>
 <option>Zambia</option>
 <option>Zimbabwe</option>
 <option>Myanmar</option>
 <option>Morocco</option>
<option>Rwanda</option>
 <option>Saudi Arabia</option>
 <option>Sudan</option>
 <option>Senegal</option>
 <option>Singapore</option>
 <option>Mexico</option>
 <option>Marshall Island</option>
 <option>Macedonia</option>
 <option>Mali</option>
 <option>Malawi</option>
 <option>Malaysia</option>
 <option>Mayotte</option>
 <option>Namibia</option>
 <option>New Caledonia</option>
 <option>Niger</option>
 <option>Norfolk Island</option>
 <option>Nigeria</option>
 <option>Nicaragua</option>
 <option>Niue</option>
 <option>Netherlands</option>
 <option>Norway</option>
 <option>Nepal</option>
 <option>Nauru</option>
 <option>New Zealand</option>
 <option>Oman</option>
 <option>Pakistan</option>
 <option>Panama</option>
 <option>Pitcairn</option>
 <option>Peru</option>
 <option>Philippines</option>
 <option>Palau</option>
 <option>Poland</option>
 <option>Puerto Rico</option>
 <option>North Korea</option>
 <option>Portugal</option>
 <option>Paraguay</option>
 <option>Palestine</option>
 <option>Qatar</option>
 <option>Romania</option>
 <option>Russian Federation</option>
 <option>Suriname</option>
 <option>Slovakin</option>
 <option>Slovenia</option>
 <option>Sweden</option>
 <option>Swaziland</option>
 <option>Syria</option>
 <option>Togo</option>
 <option>Thailand</option>
 <option>Tunisia</option>
 <option>Turkey</option>
 <option>Tanzania</option>
 <option>Uganda</option>
 <option>Ukraine</option>
 <option>Uruguay</option>
 <option>United States</option>
 <option>Uzbekistan</option>
 <option>Samoa</option>

</select>  </div>

<div class="form-group">
    <label for="text">Guardian occupation:  </label> &nbsp;
    <input type="text" class="form-control" id="occupation" name="guardianoccupation"  required pattern="[a-zA-Z]+.*\S.*" title="allow only letters" style="height:31px;">
  </div> 

  <div class="form-group">
    <label for="text">Place Of Brith:  </label> &nbsp;
    <select   style="width:445px ; height:31px;" name="pob" id="pob">
<option >SELECT</option>
 <option>Taleex</option>
 <option>Laas-caanood</option>
 <option>Sheikh</option>
 <option>Ood-weyne</option>
 <option>Buuhoodle</option>
 <option>Burco</option>
 <option>Seylac</option>
 <option>Lug-haye</option>
 <option>Baki</option>
 <option>Saylac</option>
 <option>Boorame</option>
 <option>Gebilay States</option>
 <option>Berbera</option>
 <option>Hargeysa</option>
  <option>Ceynabo</option>
 <option>Xuddun</option>
 <option>Ceerigaabo</option>
 <option>Xuddun</option>
 <option>Laas-qoray</option>
 <option>Ceel-afwen</option>
 <option>Baran</option>
 <option>Boosaaso</option>
 <option>Bandar-beyla</option>
 <option>Xaafuun</option>
 <option>Isku-shuban</option>
 <option>Qandala</option>
 <option>Caluula</option>
 <option>Baar-gaal</option>
  <option>Garowe</option>
 <option>Eyl</option>
 <option>Dan-gorayo</option>
 <option>Bur-tinle</option>
 <option>Gaal-kacyo</option>
 <option>Hobyo</option>
 <option>Xarar-dheere</option>
 <option>Jarriiban</option>
 <option>Goldogob</option>
 <option>Dhuusa-mareeb</option>
 <option>Ceel-buur</option>
 <option>Ceel-dheer</option>
 <option>Cadaado</option>
 <option>Cabuud-waaq</option>
 <option>Gal-hareeri</option>
 <option>Balan-bal</option>
 <option>Beled-weyne</option>
 <option>Buulo-burte</option>
 <option>Jalalaqsi</option>
 <option>Matabaan</option>
 <option>Maxaas</option>
 <option>Jowhar</option>
 <option>Bal-cad</option>
  <option>Cadale</option>
   <option>Aadan yabaal</option>
    <option>Mahaddaay</option>
     <option>Ruun-nirgood</option>
      <option>War-sheikh</option>
       <option>Wanle-weyn</option>
        <option>Qoryo-leey</option>
         <option>Baraawe</option>
          <option>Sablaale</option>
           <option>Kurtun-waaree</option>
            <option>Dajuuma</option>
             <option>Jilib</option>
              <option>Bu-aale</option>
               <option>Saakoow</option>
                <option>Kismaayo</option>
                 <option>Jamaame</option>
                  <option>Af-madow</option>
                   <option>Badhaadhe</option>
                    <option>Xagar</option>
                     <option>Baydhabo</option>
                      <option>Buur-hakaba</option>
                       <option>Baydhabo</option>
                        <option>Diin-soor</option>
                         <option>Qansax-dheere</option>
                          <option>Berdaale</option>
                           <option>Xuddur</option>
                          <option>Tayeegloow</option>
                           <option>Waa-jid</option>
                          <option>Ceel-berde</option>
                           <option>Yeed</option>
                          <option>Rab-dhuurre</option>
                           <option>Garba-haarreey</option>
                          <option>Luuq</option>
                           <option>Baar-dheere</option>
                          <option>Beled-xaawo</option>
                           <option>Dooloow</option>
                          <option>'Ceel-waaq</option>
                           <option>Xamar-weyne</option>
                           <option>Xamar-jajab</option>
                          <option>Boon-dheere</option>
                           <option>Waaberi</option>
                           <option>Wada-jir</option>
                          <option>Dharkeyn-leey</option>
                           <option>Hodon</option>
                           <option>Howl-wadaag</option>
                          <option>War-dhiigleey</option>
                           <option>Shibis</option>
                           <option>c/casiis</option>
                          <option>Huriwaa</option>
                           <option>Dayniile</option>
                            <option>Yaaq-shiid</option>
                             <option>Shingaani</option>
                              <option>OTHER........</option>
</select> 
  </div>

 
 <div class="form-group">
    <label>Level : </label>&nbsp;
  <select   style="width:450px ; height:31px;" name="level" id="level">
  <option >Kindergartner</option>
  <option >Primary</option>
  <option>Secondary</option>
  
</select>
  </div>
 
<div class="form-group">
    <label for="text">Branch : </label>&nbsp;
  <select  style="width:450px ; height:31px;" name="branch" id="branch">
  <option>Nawawi</option>
  <option>Ridwaan</option>
  <option>Raxmana</option>
  
</select>
</div>
  </div>
  
  
   <div class="col-md-2"> 

    <div class="form-group">
    <label for="text">Gender : </label>&nbsp;
  <select style="width:130px ; height:31px;" name="gender" id="gender">
  <option style="font-size:15px;font-family:verdana;" >Male</option>
  <option style="font-size:15px;font-family:verdana;" >Female</option>
</select>
  </div> 

   <div class="form-group">
    <label for="text">Guardian relation : </label>
  <select style="width:130px ; height:31px;" name="guardianrelation" id="guardianrelation">
  <option style="font-size:15px;font-family:verdana;" >Mother</option>
  <option style="font-size:15px;font-family:verdana;" >Father</option>
  <option style="font-size:15px;font-family:verdana;" >sister</option>
  <option style="font-size:15px;font-family:verdana;" >Aunt</option>
  <option style="font-size:15px;font-family:verdana;" >brother</option>
  <option style="font-size:15px;font-family:verdana;">grand Father</option>
  <option style="font-size:15px;font-family:verdana;" >grand Mother</option>
  <option style="font-size:15px;font-family:verdana;">Ancle</option>
  <option style="font-size:15px;font-family:verdana;">relative</option>
  
</select>

   </div>
   
   <div class="form-group">
    <label for="text">Guardian Tell:  </label> &nbsp;
    <input type="text" class="form-control" id="guardiantell"  style="width:130px ; height:31px;"
    name="guardiantell" onkeypress="return isNumber(event)" >
  </div> 

   <div class="form-group">
    <label for="text">Date Of Brith :  </label> &nbsp;
    <input type="date" class="form-control" id="dob "  style="width:130px ; height:31px;"name="dob" >
  </div> 

  <div class="form-group">
    <label for="text">Class name : </label>&nbsp;
  <select style="width:130px ; height:31px;" name="classname" id="classname">
  <option >Kindergartner</option>
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
    <label for="text">Registration Date :  </label>
    <input type="date" class="form-control" id="registrationdate" style="width:130px ; height:30px;" name="registrationdate" >
  </div>
   <label class="btn btn-success btn-file">
    Browse... <input type="file" onchange="readURL(this);" name="image" style="width:140px ; height:32px;">
     <img id="blah" src="#" alt="your image" /></label><br><br>
 
    </div> 
   </div>

</form>
  </div>
  </div>
  </div>
</div></div>



<!-- script samynaysa dropdown hover -->


<script>function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}</script>
 <script>$('ul.nav li.dropdown').hover(function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
}, function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
});</script> 
<!-- dhamaadka script samynaysa dropdown hover -->
  </body>   
  
<script>function validateForm() {
    var x = document.forms["myForm"]["studentname"].value;
    if (x == "") {
        alert("Name must be filled out");
        return false;
    }
}
</script>

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
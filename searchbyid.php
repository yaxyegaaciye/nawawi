
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
$data[0] =$_POST['id'];
$data[1] =$_POST['studentname'];
$data[2] =$_POST['gender'];
$data[3] =$_POST['mothername'];
$data[4] =$_POST['guardianname'];
$data[5] =$_POST['guardiantell'];
$data[6] =$_POST['guardianoccupation'];
$data[7] =$_POST['pob'];
$data[8] =$_POST['address'];
$data[9] =$_POST['dob'];
$data[10] =$_POST['phone'];
$data[11] =$_POST['level'];
$data[12] =$_POST['classname'];
$data[13] =$_POST['section'];
$data[14] =$_POST['branch'];
$data[15] =$_POST['nationality'];
$data[16] =$_POST['registrationdate'];
$data[17] =$_POST['image'];


return $data;
}

if (isset($_POST['searchid'])) {
    $info = getData();
    $sql = "SELECT *FROM registration WHERE ID= '$info[0]'";
    $search_result =mysqli_query($conn,$sql);
if (mysqli_num_rows($search_result)){
 while ($rows=mysqli_fetch_array($search_result)) {

$id=$rows['ID'];
$studentname=$rows['studentname'];
$gender=$rows['gender'];
$mothername=$rows['mothername'];
$guardianname=$rows['guardianname'];
$guardiantell=$rows['guardiantell'];
$guardianoccupation=$rows['guardianoccupation'];
$pob=$rows['pob'];
$address=$rows['address'];
$dob=$rows['dob'];
$phone=$rows['phone'];
$level=$rows['level'];
$classname=$rows['classname'];
$section=$rows['section'];
$branch=$rows['branch'];
$nationality=$rows['nationality'];
$registrationdate=$rows['registrationdate'];
$image=$rows['image'];
}
}
}

// Update Command
// sql to delete a record
if (isset($_POST['update'])) {
      $info = getData();
$sql = "UPDATE registration SET studentname='$info[1]',gender='$info[2]',mothername='$info[3]',guardianname='$info[4]',guardiantell='$info[5]',guardianoccupation='$info[6]',pob='$info[7]',address='$info[8]',dob='$info[9]',phone='$info[10]',level='$info[11]',classname='$info[12]'
,section='$info[13]',branch='$info[14]',nationality='$info[15]',registrationdate='$info[16]',image='$info[17]'WHERE ID='$info[0]'";
if ($conn->query($sql)===TRUE) {
   
}
else {
}
}
?>


 <?php include("falad2.php"); ?>
 <div class="col-md-10"> 
 <div class="panel panel-primary" style=" margin:-15px 0 0 0 " >
  <div class="panel-heading"><h5>Student Registration</h5></div>

  
  <div class="row" style=" margin:5px 0 0 0 ">
    
  <div class="col-md-4"> 
  <form action="searchsbyid.php" method="POST">
  <div class="form-group">
    <label for="text">ID:</label>&nbsp;&nbsp;&nbsp;
    <input type="text" 
    class="form-control" id="id" name="id" value="<?php echo($id); ?>">
  </div> 
  </div><br>
  <div class="col-md-2"> 
  <button type="submit" name="searchid" class="btn btn-success "
   style="width:100px ; height:35px;margin:5px 0 0 0;"  >Search</button>
 </div>
   <div class="col-md-4"> 
    <button type="submit" name="update" class="btn btn-success " 
   style="width:100%; height:35px ; margin:5px 0 0 0;"  >update</button>
  
   </div>
  </div>


  <div class="row" style=" margin:3px 0 0 0 ">
  <div class="col-md-4"> 

  <div class="form-group">
    <label> Mother name :  </label>
    <input type="text" class="form-control" id="mothername" style=" height:29px;"  
    name="mothername" value="<?php echo($mothername); ?>">
  </div>


  <div class="form-group">
    <label>Guardian name:  </label>
    <input type="text" class="form-control" id="guardianname"
    style=" height:29px;"   name="guardianname"value="<?php echo($guardianname); ?>" size="50px">
  </div>
   <div class="form-group">
    <label>Address :  </label>
    <input type="text" class="form-control" id="Address" 
    style=" height:29px;"  name="address"value="<?php echo($address); ?>" >
  </div>
 <div class="form-group">
    <label>Phone NO:  </label> 
    <input type="text" class="form-control" id="phone"
    style=" height:29px;"   name="phone"value="<?php echo($phone); ?>" >
  </div> 

 <div class="form-group">
    <label>Section : </label>
  <select style="width:300px ; height:28px;" name="section" id="section"value="<?php echo($section); ?>">
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
    <label>Branch : </label>
  <select  style="width:300px ; height:29px;" name="branch" id="branch"value="<?php echo($branch); ?>">
  <option>Nawawi</option>
  <option>Ridwaan</option>
  <option>Raxmana</option>
  
</select>
</div>
</div>
   <div class="col-md-6"> 
  <div class="form-group">
    <label>Student name:</label>
    <input type="text" class="form-control" id="studentname" name="studentname" style=" height:29px;"  
    value="<?php echo($studentname); ?>">
  </div>
<div class="form-group">
    <label>Nationality :  </label> 
    <input type="text" class="form-control" id="nationality "
    style=" height:29px;"   name="nationality"value="<?php echo($nationality); ?>">
  </div>

<div class="form-group">
    <label>Guardian occupation:  </label> 
    <input type="text" class="form-control" id="occupation" 
    style=" height:29px;"  name="guardianoccupation" value="<?php echo($guardianoccupation); ?>"size="15px">
  </div>
<div class="form-group">
    <label>Place Of Brith:  </label>
    <input type="text" class="form-control" id="POB"
    style=" height:29px;"   name="pob" value="<?php echo($pob); ?>" >
  </div>
 <div class="form-group">
    <label >Level : </label>
  <select  style="width:460px ; height:29px;" name="level" id="level"value="<?php echo($level); ?>">
  <option >Necessary</option>
  <option >Primary</option>
  <option>Secondary</option>
  
</select>
  </div>

<div class="form-group">
    <label>Registration Date :  </label>
    <input type="date" class="form-control"  style="height:29px; width:460px;" id="registrationdate" name="registrationdate" value="<?php echo($registrationdate); ?>">
  </div> 
  </div>

<div class="col-md-2">
<div class="form-group">
    <label>Gender : </label>
  <select style="width:130px ; height:29px;" name="gender" id="gender"value="<?php echo($gender); ?>">
  <option>Male</option>
  <option>Female</option>
</select>
  </div>

 <div class="form-group">
    <label for="text">Guardian relation : </label>
  <select style="width:130px ; height:29px;" name="guardianrelation" id="guardianrelation">
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
    <label>Guardian Tell:  </label>
    <input type="text" class="form-control" id="guardiantell"  style="width:130px ; height:29px;"
    name="guardiantell"value="<?php echo($guardiantell); ?>" size="15px">
  </div>
<div class="form-group">
    <label>Date Of Brith :  </label> 
    <input type="date" class="form-control" id="dob "
     style="width:130px ; height:29px;" name="dob" value="<?php echo($dob); ?>">
  </div>
 <div class="form-group">
    <label>Class name : </label>
  <select style="width:130px ; height:29px;"
   name="classname" id="classname"value="<?php echo($classname); ?>">
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

 <!--<div class="form-group"style=" margin:-400px 0 0 0">
    <label >image:  </label> &nbsp;
    <input type="text" class="form-control" id="image" 
    style="height:29px; width:130px;"
     name="image" value="<?php echo($image); ?>">
  </div> -->
</div>









 
 
</form>
  </div>
  </div>
  </div>







<?php
   $host ="localhost";
$user = "root";
$pswd = "";
$db = "simpledata";
$conn = new mysqli($host,$user,$pswd,$db);

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
if (isset($_POST['update'])) {
      $info = getData();
$sql = "UPDATE registration SET studentname='$info[1]',gender='$info[2]',mothername='$info[3]',guardianname='$info[4]',guardiantell='$info[5]',guardianoccupation='$info[6]',pob='$info[7]',address='$info[8]',dob='$info[9]',phone='$info[10]',level='$info[11]',classname='$info[12]'
,section='$info[13]',branch='$info[14]',nationality='$info[15]',registrationdate='$info[16]',image='$info[17]'WHERE ID='$info[0]'";
if ($conn->query($sql)===TRUE) {
    header('location:modify.php');
}

}
    if(isset($_POST["query"]))
    {
        $search = mysqli_real_escape_string($conn, $_POST["query"]);
        $query = "
        SELECT * FROM registration 
        WHERE studentname LIKE '%".$search."%'";
    }
    else
    {
        $query = "
        SELECT * FROM registration ORDER BY ID
        ";
    }
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result))
    { ?>
        <div class="table-responsive">
    <table class="table table-bordered  table-hover table-striped">
            <thead style="font-size:11px;background-color:#d19b3d; color:white;">
                <tr>
                    <th>ID</th>
                    <th>Student name</th>
                    <th>Gender</th>
                    <th>Mother name</th>
                    <th>Guardian name</th>
          <th>Gardian relation</th>
                    <th>Guardian tell</th>
                    <th>Guardian occupation</th>
                    <th>POB</th>
                    <th>Address</th>
                    <th>DOB</th>
                    <th>Phone</th>
                    <th>Level</th>
                    <th>Class name</th>
                    <th>Section</th>
                    <th>Branch</th>
                    <th>Nationality</th>
                    <th>Registration date</th>
                    <th>Image</th>
                    <th>Edit </th>
                    <th>Delete</th>
                </tr>
            </thead>
        <?php
            while($row = mysqli_fetch_array($result)){ ?>
                <tr>
                    <td><?php echo $row['ID'] ?></td>
                    <td><?php echo $row["studentname"] ?></td>
                    <td><?php echo $row["gender"] ?></td>
                    <td><?php echo $row["mothername"] ?></td>
                    <td><?php echo $row["guardianname"] ?></td>
                    <td><?php echo $row['guardianrelation'] ?></td>
                    <td><?php echo $row['guardiantell'] ?></td>
                    <td><?php echo $row['guardianoccupation'] ?></td>
                    <td><?php echo $row['pob'] ?></td>
                    <td><?php echo $row['address'] ?></td>
                    <td><?php echo $row['dob'] ?></td>
                    <td><?php echo $row['phone'] ?></td>
                    <td><?php echo $row['level'] ?></td>
                     <td><?php echo $row['classname'] ?></td>
                    <td><?php echo $row['section'] ?></td>
                    <td><?php echo $row['branch'] ?></td>
                     <td><?php echo $row['nationality'] ?></td>
                    <td><?php echo $row['registrationdate'] ?></td>
                    <td><?php echo $row['image'] ?></td>
                 
                   <td>
          <a href="#" class="btn btn-xm btn-success" data-toggle="modal" data-target="#edit-<?php echo $row['ID']; ?>">Edit</a>

<div class="modal fade" id="edit-<?php echo $row['ID']; ?>" role="dialog">
    <div class="modal-dialog modal-header-primary">
        <div class="modal-content">
            <div class="modal-header modal-header-primary">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Modify </h4>
            </div>
            <div class="modal-body">
             <form method="POST" >
  <div class="form-group">
    <label for="text">ID:</label>&nbsp;&nbsp;&nbsp;
    <input type="text" style="width:100px;"class="form-control" placeholder="StudentID" value="<?php echo $row['ID']; ?>" id="#edit-<?php echo $row['ID']; ?>" name="id"> 
  </div> 
  <div class="form-inline">
    <label>Student name: </label>
    <input type="text" class="form-control"  style="width:315px;" value="<?php echo $row['studentname']; ?>" id="#edit-<?php echo $row['ID']; ?>" placeholder="Student name" name="studentname">
  </div> 
<p>

  <div class="form-inline">
    <label for="text"> Mother name :  </label>
    <input type="text" class="form-control"  value="<?php echo $row['mothername']; ?>" id="#edit-<?php echo $row['ID']; ?>"name="mothername" placeholder="Mother name">
  </div><p>

 
  <div class="form-inline">
    <label>Guardian name:  </label>
    <input type="text" class="form-control" value="<?php echo $row['guardianname']; ?>" id="#edit-<?php echo $row['ID']; ?>"style="width:315px;"name="guardianname" placeholder="Guardian name">
  </div><p>


  
   <div class="form-inline">
    <label for="text">Guardian relation : </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <select style="width:315px ; height:33px;"name="guardianrelation"  value="<?php echo $row['guardianrelation']; ?>" id="#edit-<?php echo $row['ID']; ?>">
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

   </div><p>
   
   <div class="form-inline">
    <label for="text">Guardian Tell:  </label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" class="form-control"  value="<?php echo $row['guardiantell']; ?>" id="#edit-<?php echo $row['ID']; ?>" style="width:315px ; height:33px;"
    name="guardiantell" placeholder="Guardian phone NO:"size="15px">
  </div> <p>

<div class="form-inline">
    <label for="text">Guardian occupation:  </label> &nbsp;
    <input type="text" class="form-control" value="<?php echo $row['guardianoccupation']; ?>" id="#edit-<?php echo $row['ID']; ?>"  style="width:315px ; height:33px;"
    name="guardianoccupation" placeholder="Guardian Occupation">
  </div> <p>

  <div class="form-inline">
    <label for="text">Place Of Brith:  </label> &nbsp;
    <input type="text"style="width:338px ; height:33px;"  class="form-control"  value="<?php echo $row['pob']; ?>" id="#edit-<?php echo $row['ID']; ?>" name="pob"size="15px" placeholder="place Of Brith" >
  </div><p>
   <div class="form-inline">
    <label for="text">Date Of Brith :  </label> &nbsp;&nbsp; 
    <input type="date" class="form-control" value="<?php echo $row['ID']; ?>" id="#edit-<?php echo $row['dob']; ?>" style="width:338px ; height:33px;"  name="dob" placeholder="Date Of Birth" >
  </div> <p>

   <div class="form-inline">
    <label for="text">Gender : </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <select style="width:350px ; height:33px;" name="gender" id="gender">
  <option style="font-size:15px;font-family:verdana;" >Male</option>
  <option style="font-size:15px;font-family:verdana;" >Female</option>
</select>
  </div> <p>
 <div class="form-inline">
    <label>Nationality :  </label> &nbsp;&nbsp;&nbsp;
    <input type="text" class="form-control" style="width:350px ; height:33px;"  value="<?php echo $row['nationality']; ?>" id="#edit-<?php echo $row['ID']; ?>" name="nationality"placeholder="nationality">
  </div><p>

  <div class="form-inline">
    <label for="text">Address :  </label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" class="form-control"style="width:350px ; height:33px;"   value="<?php echo $row['address']; ?>" id="#edit-<?php echo $row['ID']; ?>" name="address" placeholder="Address" >
  </div> 
<p>
  
   <div class="form-inline">
    <label for="text">Phone NO:  </label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" class="form-control" style="width:350px ; height:33px;"  value="<?php echo $row['phone']; ?>" id="#edit-<?php echo $row['ID']; ?>"name="phone" placeholder="Student phone number">
  </div><p>

   <div class="form-group">&nbsp;&nbsp;
    <label>Level : </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <select   style="width:350px ; height:33px;" name="level"  value="<?php echo $row['level']; ?>" id="#edit-<?php echo $row['ID']; ?>">
  <option >Kindergartner</option>
  <option >Primary</option>
  <option>Secondary</option>
  
</select>
  </div>
   <div class="form-group">
    <label for="text">Class name : </label>&nbsp;&nbsp;
  <select style="width:350px ; height:33px;" name="classname"  value="<?php echo $row['classname']; ?>" id="#edit-<?php echo $row['ID']; ?>">
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


   <div class="form-group">&nbsp;&nbsp;
    <label for="text">Section : </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <select style="width:350px ; height:33px;" name="section"  value="<?php echo $row['section']; ?>" id="#edit-<?php echo $row['ID']; ?>">
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
 
<div class="form-group">&nbsp;&nbsp;
    <label for="text">Branch : </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <select  style="width:350px ; height:33px;" name="branch"  value="<?php echo $row['branch']; ?>" id="#edit-<?php echo $row['ID']; ?>">
  <option>Nawawi</option>
  <option>Ridwaan</option>
  <option>Raxmana</option>
  
</select>
</div>


<div class="form-inline">
    <label for="text">Register Date :  </label>
    <input type="date" class="form-control"  style="width:350px ; height:33px;"  value="<?php echo $row['registrationdate']; ?>" id="#edit-<?php echo $row['ID']; ?>" name="registrationdate" >
  </div>
  <label class="btn btn-success btn-file">
    Browse... <input type="file" value="<?php echo $row['image']; ?>" style="display: none;" onchange="readURL(this);" name="image" style="width:140px ; height:32px;">
     <img id="blah" src="#" alt="your image" /></label><br><br>
            </div>
            <div>
            <form action="waji.php" method="POST">
            <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success" name="update" >Update</button>
      </div>
    </form></div>
      </form>
 </div>
   </div>
  </div>
   
   </td>
          <form action="delete.php"method="POST" >
          <td><button type="submit" name="delete" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete this record?')">Delete</button></td></form>
        </tr>

                <?php 
            }
    }

?>
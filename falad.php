
<?php
    $conn = new mysqli("localhost", "root", "", "simpledata");
    include("falad2.php");
    if(isset($_POST["query"]))
    {
        $search = mysqli_real_escape_string($conn, $_POST["query"]);
        $query = "
        SELECT * FROM registration 
        WHERE studentname LIKE '%".$search."%'
        OR ID LIKE '%".$search."%'
         OR phone LIKE '%".$search."%'
        ";
    }
    else
    {
        $query = "
        SELECT * FROM registration ORDER BY ID
        ";
    }
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) > 0)
    { ?>





<div class="container">
<div class="row">
     <div class="col-sm-2">
         </div>
    <div class="col-sm-10" style="margin: 0 0 0 -40px">
        <div class="table-responsive">
            <table class="table table-striped table-condensed table-hover table-bordered">
                <tr>
                    <thead style="background-color:black;color:white; font-size:11px;">
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
                    <th>Exam</th> 
                         </thead> 
                </tr>
                <tbody style="font-size:11px;">
        <?php
            while($row = mysqli_fetch_array($result)){ ?>
                <tr>
                     <td><?php echo $row['ID'] ?></td>
                    <td><?php echo $row["studentname"] ?></td>
                    <td><?php echo $row["gender"] ?></td>
                    <td><?php echo $row['mothername'] ?></td>
					<td><?php echo $row['guardianname'] ?></td>
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
				<td> <img src="<?php echo $row['image'] ?>"height="40px"width="40px"></td>
                    <td>
                        <button type="submit" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#edit-<?php echo $row['ID']; ?>" id=""><i class="fa fa-pencil fa-sm"></i> Edit</button>
                        <div class="modal fade" role="dialog" id="edit-<?php echo $row['ID']; ?>">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                   <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLongTitle">STUDENT UPDATE</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
                                    <div class="modal-body">
                                        <form method="post">
                                        <label> ID : </label>
                                            <input type="text" name="cusId" id="#edit-<?php echo $row['ID']; ?>"style="width:430px ; height:31px; font-size:13px;font-family:verdana;" class="form-control" value="<?php echo $row['ID']; ?>"><br>
                                            <label> Student name : </label>
                                            <input style="width:430px ; height:31px; font-size:13px;font-family:verdana;"type="text" name="cusName" id="#edit-<?php echo $row['ID']; ?>" class="form-control" value="<?php echo $row['studentname']; ?>"><br>
                                            <label> Gender: </label>
                                            <input style="width:430px ; height:31px; font-size:13px;font-family:verdana;"type="text" name="cusPhone" id="#edit-<?php echo $row['ID']; ?>" class="form-control" value="<?php echo $row['gender']; ?>"><br>
                                            <label> Mother Name: </label>
                                            <input style="width:430px ; height:31px; font-size:13px;font-family:verdana;"type="text" name="mothername" id="#edit-<?php echo $row['ID']; ?>" class="form-control" value="<?php echo $row['mothername']; ?>"><br>
                                            <label> Guardian Name : </label>
                                            <input style="width:430px ; height:31px; font-size:13px;font-family:verdana;"type="text" name="guardianname" id="#edit-<?php echo $row['ID']; ?>" class="form-control" value="<?php echo $row['guardianname']; ?>"><br>
                                            <label> Guardian Relation: </label>
                                            <input style="width:430px ; height:31px; font-size:13px;font-family:verdana;"type="text" name="guardianrelation" id="#edit-<?php echo $row['ID']; ?>" class="form-control" value="<?php echo $row['guardianrelation']; ?>"><br>
                                            <label> Guardian tell: </label>
                                            <input style="width:430px ; height:31px; font-size:13px;font-family:verdana;"type="text" name="guardiantell" id="#edit-<?php echo $row['ID']; ?>" class="form-control" value="<?php echo $row['guardiantell']; ?>"><br>
                                            <label> Guardian Occupation : </label>
                                            <input style="width:430px ; height:31px; font-size:13px;font-family:verdana;"type="text" name="guardianoccupation" id="#edit-<?php echo $row['ID']; ?>" class="form-control" value="<?php echo $row['guardianoccupation']; ?>"><br>
                                            <label> POB: </label>
                                            <input style="width:430px ; height:31px; font-size:13px;font-family:verdana;"type="text" name="pob" id="#edit-<?php echo $row['ID']; ?>" class="form-control" value="<?php echo $row['pob']; ?>"><br>
                                            <label> Address: </label>
                                            <input style="width:430px ; height:31px; font-size:13px;font-family:verdana;"type="text" name="address" id="#edit-<?php echo $row['ID']; ?>" class="form-control" value="<?php echo $row['address']; ?>"><br>
                                            <label> DOB: </label>
                                            <input style="width:430px ; height:31px; font-size:13px;font-family:verdana;"type="date" name="dob" id="#edit-<?php echo $row['ID']; ?>" class="form-control" value="<?php echo $row['dob']; ?>"><br>
                                            <label> Phone: </label>
                                            <input style="width:430px ; height:31px; font-size:13px;font-family:verdana;"type="text" name="phone" id="#edit-<?php echo $row['ID']; ?>" class="form-control" value="<?php echo $row['phone']; ?>"><br>
                                            <label> Level: </label>
                                            <input style="width:430px ; height:31px; font-size:13px;font-family:verdana;"type="text" name="level" id="#edit-<?php echo $row['ID']; ?>" class="form-control" value="<?php echo $row['level']; ?>"><br>
                                            <label> Classname: </label>
                                            <input style="width:430px ; height:31px; font-size:13px;font-family:verdana;"type="text" name="classname" id="#edit-<?php echo $row['ID']; ?>" class="form-control" value="<?php echo $row['classname']; ?>"><br>
                                            <label> Section: </label>
                                            <input style="width:430px ; height:31px; font-size:13px;font-family:verdana;"type="text" name="section" id="#edit-<?php echo $row['ID']; ?>" class="form-control" value="<?php echo $row['section']; ?>"><br>
                                            <label> Branch: </label>
                                            <input style="width:430px ; height:31px; font-size:13px;font-family:verdana;"type="text" name="branch" id="#edit-<?php echo $row['ID']; ?>" class="form-control" value="<?php echo $row['branch']; ?>"><br>
                                            <label> Nationality : </label>
                                            <input style="width:430px ; height:31px; font-size:13px;font-family:verdana;"type="text" name="nationality" id="#edit-<?php echo $row['ID']; ?>" class="form-control" value="<?php echo $row['nationality']; ?>"><br>
                                            <label> Registration Date: </label>
                                            <input style="width:430px ; height:31px; font-size:13px;font-family:verdana;"type="date" name="registrationdate" id="#edit-<?php echo $row['ID']; ?>" class="form-control" value="<?php echo $row['registrationdate']; ?>"><br>
                                            
                                            <button type="submit" class="btn btn-success" name="update_customer" id="#edit-<?php echo $row['id']; ?>">Update</button>
                                        </form>
                                       
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                   
                                </div> </div> </div>  </td>
                                <td>
                        <a href="?idDelete=<?php echo $row['ID'] ?>">
                        <button name="idDelete" type="submit" class="btn btn-danger btn-sm">
                        <i class="fa fa-trash fa-sm"></i> Delete</button></a>
                    </td>
                    <td>
                    <!-- model two examination setup -->
                      <!-- model two examination setup -->
                        <!-- model two examination setup -->
                          <!-- model two examination setup -->
                            <!-- model two examination setup -->
                              <!-- model two examination setup -->
                                <!-- model two examination setup -->
                                  <!-- model two examination setup -->
                                    <!-- model two examination setup -->
   <button type="submit" class="btn btn-info btn-sm" 
   data-toggle="modal" data-target="#edit2-<?php echo $row['ID']; ?>" id="">
   <i class="fa fa-pencil fa-sm"></i> exam</button>
                        <div class="modal fade" role="dialog" id="edit2-<?php echo $row['ID']; ?>">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLongTitle">Exam registreation by individual</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
 <div class="modal-body">
<form method="POST" action="eregister.php"  class="form-inline">
<div class="form-group">
  <label> ID : </label>
   <input type="text" name="id" id="#edit2-<?php echo $row['ID']; ?>"
style="width:100px ; height:31px; font-size:13px;font-family:verdana;"class="form-control"
 value="<?php echo $row['ID']; ?>">
</div>  &nbsp;&nbsp;
<div class="form-group">
  <label> Student name : </label> &nbsp;&nbsp;
  <input style="width:320px ; height:31px; font-size:13px;font-family:verdana;"
 type="text" name="name" id="#edit-<?php echo $row['ID']; ?>" 
 class="form-control" value="<?php echo $row['studentname']; ?>"></div><br><br>

      <div class="form-group">
      <label>Branch:</label>
      <select class="form-control" name="branch">
        <option>Nawawi</option>
  <option>Ridwaan</option>
  <option>Raxma</option>
      </select>
      </div> &nbsp;&nbsp;
        <div class="form-group">
      <label >Level:</label>
      <select class="form-control" name="level" >
     <option >Kinder</option>
  <option >Primary</option>
  <option>Secondary</option>
      </select>
      </div>&nbsp;&nbsp;
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
      </div><br><br>
        <div class="form-group">
      <label >Section:</label>
      <select class="form-control" name="section" style="width:100px">
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
      </div>&nbsp;&nbsp;
        <div class="form-group">
      <label>Term:</label>&nbsp;&nbsp;
      <select class="form-control"style="width:130px" name="term">
        <option>Term one</option>
        <option>Term two</option>
      </select>
      </div><br><br>
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
      
<br><br>
                                   
     <button type="submit" class="btn btn-success" name="reg">  <span class="glyphicon glyphicon-save"></span>  Add Mark</button> 
     </form>
                                    
                                       
                                   
     <div class="modal-footer">
     <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button></div>
                                     </div> </div>
                                      </div>
                                       </div>



                     </td>
                        <!-- end model two examination setup -->
                          <!-- end model two examination setup -->
                            <!-- end model two examination setup -->
                              <!-- end model two examination setup -->
                                <!-- end model two examination setup -->
                                  <!-- end model two examination setup -->
                                    <!-- end model two examination setup -->
                                      <!-- end model two examination setup -->
                </tr>
                <?php 
            }
    }
else
{
 echo 'Data Not Found';
}
echo " </tbody></table></div></div></div></div>";
?>

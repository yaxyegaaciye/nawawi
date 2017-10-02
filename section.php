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


$data[13] =$_POST['section'];


return $data;
}

if (isset($_POST['search'])) {
    $info = getData();
    $sql = "SELECT *FROM registration WHERE ID= '$info[13]' '";
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
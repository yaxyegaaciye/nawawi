<?php
if(isset($_GET['filter'])){
$filter=trim($_GET['filter']);
if(!empty($_GET['filter'])){
    $conn=mysqli_connect('localhost','root','','simpledata');
    if($filter=='all'){
$stmnt=$conn->prepare('SELECT * FROM registration');

    }else{
        $stmnt=$conn->prepare('SELECT * FROM registration where branch=?');
        $stmnt->bind_param('s',$filter);

    };
    $stmnt->execute();
    $stmnt->store_result();
    $stmnt->bind_result($id,$studentname,$gender,$mothername,
    $grname,$grelation,$gtell,$goccupation,$pob,$address,$dob,$phone,$level,$classname,$section,$branch,$nationalaity,$regdate,$image);
    $final=array();
    while($stmnt->fetch()){
        $each=array(
'id'=>$id,
'studentname'=>$studentname,
'gender'=>$gender,
'mothername'=>$mothername,
'guardianname'=>$grname,
'guardianrelation'=>$grelation,
'guardiantell'=>$gtell,
'guardianoccupation'=>$goccupation,
'pob'=>$pob,
'address'=>$address,
'dob'=>$dob,
'phone'=>$phone,
'level'=>$level,
'classname'=>$classname,
'section'=>$section,
'branch'=>$branch,
'nationality'=>$nationalaity,
'registrationdate'=>$regdate,
'image'=>$image,
        );
        array_push($final,$each);

    };
echo json_encode($final);
$stmnt->close();
$conn->close();
};
};
?>
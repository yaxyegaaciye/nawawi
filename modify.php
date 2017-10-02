<?php
$conn = new mysqli("localhost", "root", "", "simpledata");
if(isset($_GET['idDelete'])){
        $idDelete = $_GET['idDelete'];
        $sql = "delete from registration where ID='$idDelete'";
        if($conn->query($sql)===true) {
           
        }
        else { ?>
            <script>
                alert("failed to delete");
                window.location.href='modifyy.php';
            </script>
            <?php
            echo "failed to delete";
        }
    }
    if(isset($_POST['update_customer'])) {
        $updateID = $_POST['cusId'];
        $cusName = "";
        $cusPhone = "";
        $mothername="";
        $guardianname="";
         $guardianrelation="";
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

        $cusName = $_POST['cusName'];
        $cusPhone = $_POST['cusPhone'];
         $mothername = $_POST['mothername'];
           $guardianname = $_POST['guardianname'];
             $guardianrelation = $_POST['guardianrelation'];
               $guardiantell = $_POST['guardiantell'];
                 $guardianoccupation = $_POST['guardianoccupation'];
                   $pob = $_POST['pob'];
                     $address = $_POST['address'];
                       $dob = $_POST['dob'];
                         $phone = $_POST['phone'];
                           $level = $_POST['level'];
                             $classname = $_POST['classname'];
                               $section = $_POST['section'];
                                 $branch = $_POST['branch'];
                                   $nationality = $_POST['nationality'];
                                     $registrationdate = $_POST['registrationdate'];
                                      
        $sql = "UPDATE registration SET studentname= '$cusName', gender= '$cusPhone',mothername= '$mothername',
        guardianname= '$guardianname'
        ,guardianrelation= '$guardianrelation'
        ,guardiantell= '$guardiantell'
        ,guardianoccupation= '$guardianoccupation'
        ,pob= '$pob'
        ,address= '$address'
        ,dob= '$dob'
        ,phone= '$phone'
        ,level= '$level'
        ,classname= '$classname'
        ,section= '$section'
        ,branch= '$branch'
        ,nationality= '$nationality'
        ,registrationdate= '$registrationdate'
        WHERE ID = '$updateID'";
        if($conn->query($sql)===TRUE) {?>
            <script>
            alert("sucessfull updated");
            </script><?php
           
        }
        else {?>
            <script>
            alert("Failed to update");
            </script><?php
        }
    }
?>
<html>
    <head>
        <title>Document</title>
        <?php include("falad2.php"); ?>
        </head>
        <body>
            <?php include("falad3.php"); ?>
            </body>
            </html>
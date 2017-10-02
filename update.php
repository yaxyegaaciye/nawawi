<?php
$conn = new mysqli("localhost", "root", "", "simpledata");

  if (isset($_GET['idd'])) {
    $idd = $_GET['idd'];
    $sql= "DELETE FROM exam WHERE id ='$idd'";
     if ($conn->query($sql)===TRUE) {?>
        <script>
        alert("data deleted successfuly");
        window.location.href='table.php';
        </script>
        <?php}
        else { ?>
            <script>
                alert("failed to delete");
                     </script>
            <?php
            echo "failed to delete";
        }
    }

    if(isset($_POST['updateexam'])) {
        $id = $_POST['id'];
        $name = "";
        $branch = "";
        $level="";
        $classname="";
         $section="";
$term="";
$year="";
$islamic="";
$arabic="";
$somali="";
$english="";
$math="";
$science="";
$social="";
$geography="";
$history="";
$physics="";
$biology="";
$chemistry="";
$displine="";


        $name = $_POST['name'];
        $branch = $_POST['branch'];
         $level = $_POST['level'];
           $classname = $_POST['classname'];
             $section = $_POST['section'];
               $term = $_POST['term'];
                $year = $_POST['year'];
                  $islamic = $_POST['islamic'];
                   $arabic= $_POST['arabic'];
                    $somali= $_POST['somali'];
                     $english = $_POST['english'];
                       $math = $_POST['math'];
                         $science = $_POST['science'];
                           $social = $_POST['social'];
                             $geography = $_POST['geography'];
                               $history = $_POST['history'];
                                 $physics = $_POST['physics'];
                                   $biology = $_POST['biology'];
                                     $chemistry = $_POST['chemistry'];
                                     $displine = $_POST['displine'];                       
        $sql = "UPDATE exam SET 
         name= '$name'
        ,branch= '$branch'
        ,level= '$level'
        ,classname= '$classname'
        ,section= '$section'
        ,term= '$term'
        ,year= '$year'
        ,islamic= '$islamic'
        ,arabic= '$arabic'
        ,somali= '$somali'
        ,english= '$english'
        ,math= '$math'
        ,science= '$science'
        ,social= '$social'
        ,geography= '$geography'
        ,history= '$history'
        ,physics= '$physics'
          ,biology= '$biology'
        ,chemistry= '$chemistry'
        ,displine= '$displine'
        WHERE id = '$id'";
        if($conn->query($sql)===TRUE) {
          header("location:table.php");
        }
        else {?>
            <script>
            alert("Failed to update");
            </script><?php
        }
    }
?>

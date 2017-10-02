<!DOCTYPE html>
<html lang="en">
  <head>
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
              body{
                background-image:url("bg.jpg")
              }
              </style>
  </head>
  <body>
   <p><br/><br/><br/></p>
   <div class="container">
   <div class="row">
   <div class="col-md-4"> </div>
   <div class="col-md-4">
      <div class="panel panel-default">
      <div class="panel-body">
   <?php 
     include "config.php";
     if(isset($_POST['username'])&&isset($_POST['password'])){
       $username=$_POST['username'];
       $password=md5($_POST['password']);
       $stmt=$db->prepare("SELECT*FROM login WHERE username=? AND password=?");
       $stmt->bindparam(1,$username);
       $stmt->bindparam(2, $password);
       $stmt->execute();
       $row=$stmt->fetch();
       $user= $row['username'];
       $pass= $row['password'];
       $id= $row['id'];
       $type= $row['type'];
       if($username==$user && $pass==$password){
         session_start();
         $_SESSION['username']=$user;
         $_SESSION['password']=$pass;
         $_SESSION['id']=$id;
         $_SESSION['type']=$type;
         ?>
         <script>window.location.href='index.php'</script>
         <?php
       }else{
         ?>
         <div class="alart-danger-dismissible"role="alart" >
         <button type="button"class="close"data-dismiss="alart"aria-lable="close">
         <span aria-hidden="true"&&times;></span></button>
         <strong>FAILED</strong> 
         </div>


         <?php
       }


     }
     ?>
      <form method="post">
       
        <div class="form-group">

        <label>Username</label>
        <input type="username"class="form-control"name="username" />
        </div>

        
        <div class="form-group">

        <label>Password</label>
        <input type="password"class="form-control"name="password"/>
        </div>
           <input type="submit"value="Login"class="btn btn-primary"/>
      </form>
      </div>
   </div>
   
    </div>


   <div class="col-md-4"> </div>
   </div>
   </div>


  </body>
</html>
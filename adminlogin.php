<?php
session_start();
if(!isset($_SESSION['vtype'])||$_SESSION['vtype']!='admin'){
  echo "<script>window.location='index.php?error=access restricted'</script>";
}
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
  <title>Bootstrap Case</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>

  <!--  <head>
        <meta charset="UTF-8">
        
 

         <link href="bootstrap.css" rel="stylesheet" type="text/css"/> 
        <title></title>
    </head> -->
    <body>
       
        <div class="jumbotron" style="height: 20px;text-align: center; font-size: 30px" > ADMIN LOGIN</div>
        <form action="index.php" method="post">   <input type="submit" name="btnlogout" value="LOGOUT" > </form>
        <nav class="navbar navbar-inverse  ">
             <div class="container-fluid">
                 <div class="navbar-header">
                     <a class='navbar-brand' href="#"></a>
                        </div>
                 <div>
                   <ul class="nav navbar-nav ">
                       <li class="active" style="font-size: 20px"><a href="index.php">HOME</a></li>
                       <li class="dropdown">
                          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Vender
                        <span class="caret"></span> </a>
                           <ul class="dropdown-menu">
                             <!-- <li><a href="viewemploye.php" target="login.php" > Search Vender</a></li> -->
                             <li><a href="authuser.php">Add user </a></li>
                               <li><a href="vendorupdate.php "  >Vendor  Update</a></li>
                           </ul>
                         <!--  </li>
                           <li class="dropdown">
                          <a class="dropdown-toggle" data-toggle="dropdown" href="#">STUDENT
                          <span class="caret"></span></a>
                           <ul class="dropdown-menu">
                               <li ><a href="viewstudent.php" > Search Student</a></li>z
                               <li><a href="insertphp2.php">Add Student</a></li>
                               <li><a href="StudentUpdate.php">Student Update</a></li>
                           </ul>
                           </li>
                            <li class="dropdown">
                          <a class="dropdown-toggle" data-toggle="dropdown" href="#">NOTICE
                          <span class="caret"></span></a>
                           <ul class="dropdown-menu">
                               <li ><a href="allnotice.php" > VIEW NOTICES</a></li>
                               <li><a href="addnotice.php">ADD NOTICE</a></li>
                               <li><a href="editnotice.php">EDIT NOTICE</a></li>
                           </ul>
                           </li>
                           <li><a href="newUser.php">ADD NEW USER</li>-->
                           
                   
                       <li  ><a href="registeruser.php">Registered User</a></li>
                   </ul>
                </div>
                  
             </div> 
      </nav>
         
        <?php
        // put your code here
       include 'viewvendor.php' ;
      
        ?>
        <>
    </body>
</html>

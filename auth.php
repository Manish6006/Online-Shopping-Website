<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>LOGIN PAGE</title>
        <?php
        session_start();
        ?>
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
       <?php

       if(!isset($_SESSION["vtype"]))
        {
        echo "<script>window.location.assign('index.php?error=session not set')</script>";
        }
        else{
        if($_SESSION["vtype"]=="admin"&&$_SESSION["status"]=="active")
        {
          echo "<script>window.location.assign('adminlogin.php')</script>"; 
        }
        else if($_SESSION["vtype"]=="vendor"&&$_SESSION["status"]=="active")
        {
          echo "<script>window.location.assign('vendorprofile.php')</script>"; 
        }
        else
        { 	if(isset($_SESSION["status"])&&$_SESSION["status"]=="pending")
    		echo "<script>window.location.assign('review.php')</script>";
    		else
            echo "<script>window.location.assign('index.php?error=status pending')</script>"; 
        }
     }
       ?>
    </body>
</html>

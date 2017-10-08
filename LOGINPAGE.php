<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <script src="script/jquery-hp.js" type="text/javascript"></script>
        <link href="css/animate.css" rel="stylesheet" type="text/css"/>
        <script>
            $().ready(function(){
                f1();
                $("#logo").addClass("animated");
            });
            function f1()
            {
                $("#logo").addClass("flip");
                setTimeout(function(){f2();},800);
            }
             function f2()
            {
                $("#logo").removeClass("flip");
                setTimeout(function(){f1();},800);
            }
            
        </script>
    </head>
    <body class="fadeIn animated" style="background: url('pics/small-workplace-with-apple-gadgets.jpg');background-position:top center">
        <div id='loginscreen' class="flip animated col-sm-4 col-sm-offset-4" style="opacity:0.9;box-shadow:0px 0px 10px black;border-radius:10px;background-color:#0a2948;padding:0px;margin-top:10%;">
            <h1 style="text-shadow:1px 1px black;border-top-left-radius:10px;border-top-right-radius: 10px;margin: 0px;background-color: #3b90e1;text-align: center;color:white;padding:10px 0px;box-shadow:0px 10px 10px -10px black;background-color: #9d9d9d">LOGIN</h1>
            <div style="padding: 30px">
                <form method="post" name='f1'>
                <input style="margin-bottom: 3px;" placeholder="User ID" type="text" name="vuser" class="form-control">
                
                <input style="margin-bottom: 3px;" placeholder="Password" type="password" name="vpass" class="form-control">
                
                <input type="submit" value="Sign In" name="btnlogin"class="btn btn-submit btn-block" style="background-color: #83acf6;">
            </form>
                
                 </div>
            <a href="register.php" class="btn btn-warning btn-block">New User??</a>
            <div class="clearfix"></div>  
        </div>
       <?php

if(filter_input(INPUT_POST, "btnlogout")!==null)
{
    session_start();
    session_unset();
    
}
?>
<?php
      
            
         $conn=new mysqli("localhost","root","","final");
        if($conn->connect_error){
            die("error !".$conn->connect_error);
        }
        else{
            $n11=filter_input(INPUT_POST,"vuser");
            $p11=filter_input(INPUT_POST,"vpass");
            if(filter_input(INPUT_POST,"btnlogin")!=null){           
            $sql="select * from login1 where vuser='$n11' AND vpass='$p11'";
            $result=$conn->query($sql);
            if($result->num_rows>0){
                if($row=$result->fetch_assoc()){
                    session_unset();
                    session_start();
                    $_SESSION["n11"]=$n11;
                    $_SESSION["vtype"]=$row['vtype'];
                    $_SESSION["vuser"]=$row['vuser'];
                    $_SESSION["status"]=$row['status'];
                    //echo $row['vtype'];
                    echo "<script>window.location.assign('auth.php')</script>";
                   }
            }
            else{
                echo "invalid user";
                echo "<script>window.location.assign('index.php')</script>";
            }
        }
        }
            
        /*    if(filter_input(INPUT_POST,"btnlogin")!=null){
                
           $sql="select *from login1 where uid='$n11' AND upass='$p11'";
            $result=$conn->query($sql);
            if($result->num_rows>0){
                while($row=$result->fetch_assoc()){
                    session_start();
                    $_SESSION["n11"]=$n11;
                    $_SESSION["utype"]=$row['utype'];
                     echo "<script>window.location.assign('auth.php')</script>";
                   }
            }
            else{
                echo "invalid user";
                echo "<script>window.location.assign('index.php')</script>";
            }
        }
        }*/
           
?>
         
    </body>
</html>

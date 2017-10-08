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
    </head>
    <body>
        <?php
        // put your code here<?php
$uid=filter_input(INPUT_POST,"vuser");
$upass=filter_input(INPUT_POST,"vpass");
$uname=filter_input(INPUT_POST,"vname");
$utype=filter_input(INPUT_POST,"vtype");
/*$saad=filter_input(INPUT_POST,"saad");
$contact=filter_input(INPUT_POST,"contact");
$course=filter_input(INPUT_POST,"course");*/
$conn=new mysqli("localhost","root","","final");
if($conn->connect_error){
    die("error !".$conn->connect_error);
    
}
else{
    $sql="insert into login1 values('$uid','$upass','$uname','$utype')";
    if($conn->query($sql)==TRUE){
        echo "<h1>RECORD INSERTED </h1>";
    }
    else{
        echo "<h1>RECORD NOT INSERTED </h1>";
    
   
}
 
}
?>
  </body>
</html>
        

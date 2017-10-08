 
<?php
$contact_name=filter_input(INPUT_POST,"contact_name");
$uemail=filter_input(INPUT_POST,"contact_email");
$ucontact=filter_input(INPUT_POST,"contact_no");
$msg=filter_input(INPUT_POST,"msg");

$conn=new mysqli("localhost","root","","final");
if($conn->connect_error){
    die("error !".$conn->connect_error);
    
}
else{
    $sql="insert into contact values('$contact_name','$uemail','$ucontact','$msg')";
    if($conn->query($sql)==TRUE){
        echo "<h1>MESSAGE RECORDED  </h1>";
    }
    else{
        echo "<h1>SORRY !! TRY AGAIN  </h1>";
    }
   // include 'viewemploye.php';
}
?>
  </body>
</html>
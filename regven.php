
<?php
$eid=filter_input(INPUT_POST,"vuser");
$ename=filter_input(INPUT_POST,"vpass");
$dob=filter_input(INPUT_POST,"vname");
$gender=filter_input(INPUT_POST,"contact");
$doj=filter_input(INPUT_POST,"pbrand");
$post=filter_input(INPUT_POST,"ptype");
$eadd=filter_input(INPUT_POST,"stock");
$pdetails=filter_input(INPUT_POST,"pdetail");
$price=  filter_input(INPUT_POST, "price");
//$image=filter_input(INPUT_POST,"img");
$conn=new mysqli("localhost","root","","final");

if($conn->connect_error){
    die("error !".$conn->connect_error);
    
}
else{
      $file_dir="uploaddir";
      //  $target_file=basename($_FILES["fileupload"]["name"]);
      //  $imageFileType=  pathinfo($target_file,PATHINFO_EXTENSION);
        
       foreach ($_FILES as $file_name => $file_array){
           //echo "path:".$file_array['tmp_name']."<br>\n";
           $image=$file_dir."/".$file_array['name'];
            $sql="insert into vendor values(NULL,'$eid','$ename','$dob','$gender','$doj','$post','$eadd','$pdetails','$image','$price')";
           //echo "type:".$file_array['type']."<br>\n";
           //echo "size:".$file_array['size']."<br>\n";
           
           
           if(is_uploaded_file($file_array['tmp_name'])){

               move_uploaded_file($file_array['tmp_name'],"$file_dir/$file_array[name]");
               //echo "file was moved";
              // echo"<h3>file saved to:".$file_dir."/".$file_array['name']."</h3>";
              // echo "<img src='".$file_dir."/".$file_array['name']."' height='150px' width='150px'>";
              // echo "<h1>File Extension:".pathinfo($file_array['name'],PATHINFO_EXTENSION)."</h1>";
           }    
                   
                   
       }
   // $sql="insert into vendor values('$eid','$ename','$dob','$gender','$doj','$post','$eadd','$pdetails','$image')";
    
    if($conn->query($sql)==TRUE){
        echo "<h1>RECORD INSERTED </h1>";
    }
    else{
        echo "<h1>RECORD NOT INSERTED </h1>";
    }
    include 'viewvendor.php';
}
?>
              <?php
     /*   // put your code here
        $file_dir="uploaddir";
      //  $target_file=basename($_FILES["fileupload"]["name"]);
      //  $imageFileType=  pathinfo($target_file,PATHINFO_EXTENSION);
        
       foreach ($_FILES as $file_name => $file_array){
           //echo "path:".$file_array['tmp_name']."<br>\n";
           echo "name:".$file_array['name']."<br>\n";
           //echo "type:".$file_array['type']."<br>\n";
           //echo "size:".$file_array['size']."<br>\n";
           
           
           if(is_uploaded_file($file_array['tmp_name'])){

               move_uploaded_file($file_array['tmp_name'],"$file_dir/$file_array[name]");
               //echo "file was moved";
              // echo"<h3>file saved to:".$file_dir."/".$file_array['name']."</h3>";
               echo "<img src='".$file_dir."/".$file_array['name']."' height='150px' width='150px'>";
              // echo "<h1>File Extension:".pathinfo($file_array['name'],PATHINFO_EXTENSION)."</h1>";
           }    
                   
                   
       }*/
        ?> 

  </body>
</html>
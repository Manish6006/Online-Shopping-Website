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
        // put your code here
        $file_dir="uploaddir";
      //  $target_file=basename($_FILES["fileupload"]["name"]);
      //  $imageFileType=  pathinfo($target_file,PATHINFO_EXTENSION);
        
       foreach ($_FILES as $file_name => $file_array){
           //echo "path:".$file_array['tmp_name']."<br>\n";
           //echo "name:".$file_array['name']."<br>\n";
           //echo "type:".$file_array['type']."<br>\n";
           //echo "size:".$file_array['size']."<br>\n";
           
           
           if(is_uploaded_file($file_array['tmp_name'])){

               move_uploaded_file($file_array['tmp_name'],"$file_dir/$file_array[name]");
               //echo "file was moved";
              // echo"<h3>file saved to:".$file_dir."/".$file_array['name']."</h3>";
               echo "<img src='".$file_dir."/".$file_array['name']."' height='150px' width='150px'>";
              // echo "<h1>File Extension:".pathinfo($file_array['name'],PATHINFO_EXTENSION)."</h1>";
           }    
                   
                   
       }
        ?>
    </body>
</html>

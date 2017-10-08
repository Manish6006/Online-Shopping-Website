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
           session_start();
           if(filter_input(INPUT_POST,"btnu")!=null){
             //echo "submitted";
//               echo "Submitted";
             $vuser=filter_input(INPUT_POST,"vuser");  
             $vpass=filter_input(INPUT_POST,"vpass");  
             $vname=filter_input(INPUT_POST,"vname");  
             $contact=  filter_input(INPUT_POST,"contact");
             $pbrand=filter_input(INPUT_POST,"pbrand"); 
              $ptype=filter_input(INPUT_POST,"ptype");  
             $stock=filter_input(INPUT_POST,"stock");  
             $detail=filter_input(INPUT_POST,"pdetail");  
              $img=filter_input(INPUT_POST,"img");
               $price=filter_input(INPUT_POST,"price");
             $u1=filter_input(INPUT_POST,"btnupdt");
$vid=filter_input(INPUT_POST,"vid");

$conn=new mysqli("localhost","root","","final");
if($conn->connect_error)
{
 die("Error!".$conn->connect_error);
}
else
{
	$sql="UPDATE vendor SET vname='$vname where vuser= '".$_SESSION['vuser']."'";
	
        //echo $sql;
        if($conn->query($sql)==TRUE)
	{
		echo "Record Updated";
		
	}
	else
	{
		echo "Record Updation  failed!";
	}
             
             
}


 /*            $conn=new mysqli("localhost","root","","miit");
             $sql="update student set sid='$id11',sname='$n11',dob='$d1',gender='$g11',saad='$s11',contact='$c11',course='$c21' where sid='$u1'";
             if($conn->query($sql)==TRUE){
                 echo " RECORD IS UPDATED";
           }
         else{ 
             echo "RECORD IS NOT UPDATED ";
          }
          
          }
           
   */        
           if(filter_input(INPUT_POST,"btndel")!=null){
                $vuser=filter_input(INPUT_POST,"vuser");  
           $u11=filter_input(INPUT_POST,"btndel");
           $conn=new mysqli("localhost","root","","final");
           $sql="delete from vendor where vuser= '".$_SESSION['vuser']."'";
           //if($conn->query($sql)==TRUE){
               echo "RECORD IS DELETED";
      }
    else{  
        echo "RECORD IS NOT DELETED";
    }
          }
           
       ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>MY FIRST MYSQL PAGE</title>
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="css/jquery.dataTables.css" rel="stylesheet" type="text/css"/>
        <script src="script/jquery-hp.js" type="text/javascript"></script>
        <script src="script/jquery.dataTables.min.js" type="text/javascript"></script>
        <script>
        $(document).ready(function(){
          $("#mytable").dataTable();  
        });
        </script>
    </head>
    <body class='jumbotron'>
       
        <?php
        $conn=new mysqli("localhost","root","","final");
        
            $sql="select *from vendor";
            $result=$conn->query($sql);
            //echo "<table><tr><th>S_ROLL&nbsp&nbsp</th><th>S_NAME&nbsp&nbsp&nbsp</th><th>S_BRANCH&nbsp&nbsp&nbsp</th><th>S_PHONE&nbsp&nbsp&nbsp</th><th>S_ADDRESS</th></tr>";
            if($result->num_rows>0){
                ?>
        <div class="col-sm-9">
            <table id="mytable" ><thead>
                    <tr><td>username</td><td>password</td><td>name</td><td>contact</td><td> brand</td><td>type</td><td>stock</td><td>details</td><td>image</td><td>price</td></tr>
            
            </thead>
            <tbody>
                <?php
                //echo "<br>".$result->num_rows."Record Found";
                while($row=$result->fetch_assoc()){
                    ?>
                <tr>
                    <form action="" method="post">
                        <td><input type="hidden" name="vid" value='<?php echo $row["vendorid"];?>'></input>
                            <input type="text" name="vuser" value='<?php echo $row["vuser"];?>'></input></td>
                    <td><input type="text" name="vpass" value='<?php echo $row["vpass"];?>'></input></td>
                    <td><input type="text" name="vname" value='<?php echo $row["vname"];?>'></td>
                      <td><input type="text" name="contact" value='<?php echo $row["contact"];?>'></input></td>
                    <td><input type="text" name="pbrand" value='<?php echo $row["pbrand"];?>'></input></td>
                    <td><input type="text" name="ptype" value='<?php echo $row["ptype"];?>'></td>
                   <td><input type="text" name="stock" value='<?php echo $row["stock"];?>'></td>
                    <td><input type="text" name="pdetail" value='<?php echo $row["pdetail"];?>'></input></td>
                     <td><input type="text" name="img" value='<?php echo $row["img"];?>'></input></td>
                       <td><input type="text" name="price" value='<?php echo $row["price"];?>'></input></td>
                      <td>
                          <input type ='submit' class="btn btn-block btn-primary" name ='btnu' value="update">
                            </td>
                            
                            <td>
                                <input type ='submit' class ='btn btn-danger' name="btndel" value ="DELETE">
                            </td>
                    </form>
                    </tr>
                <?php
                }
            }
            ?>
            </tbody>
            </table>
            </div>
           <?php
          /* if(filter_input(INPUT_POST,"u1")!=null){
             $b11=filter_input(INPUT_POST,"b1");  
             $n11=filter_input(INPUT_POST,"n1");  
             $p11=filter_input(INPUT_POST,"p1");  
             $conn=new mysqli("localhost","root","root","studenttable");
             $sql="update product set p_brand='$b11',p_name='$n11',p_price='$p11' where p_brand='$b11'";
             if($conn->query($sql)==TRUE){
                 echo "UPDATE RECORD";
           }
         else{ 
             echo "RECORD IS NOT UPFATE ";
          }
          
          }
           
           
           if(filter_input(INPUT_POST,"d1")!=null){
           $n11=filter_input(INPUT_POST,"d1");
           $conn=new mysqli("localhost","root","root","studenttable");
           $sql="delete from product where p_brand=$n11";
           if($conn->query($sql)==TRUE){
               echo "RECORD IS DELETED";
      }
    else{  
        echo "RECORD IS NOT DELETED";
    }
          }*/
           ?>
    </body>
</html>
           ?> 
           
    </body>
</html>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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
    <body>
        <strong>Requested vendors</strong>
        <div class="jumbotron" style="background-color: #999 ;color: #F9F9FF;text-align: center;font-size: 20px">Vendor</div>
          <?php
       $conn=new mysqli("localhost","root","","final");
       $sql="select * from order1";
       $result=$conn->query($sql);
       if($result->num_rows>0)
       {
           ?>
        
        <table id="mytable">
         <!--   <thead>
                <tr><td>user name</td><td>password</td><td>Name</td><td>contact</td><td>Product Brand</td><td>Product type</td><td>stock</td><td>product details</td><td>image</td><td>price</td></tr>
            
            </thead> -->
            <tbody>
        <?php   
           while($row=$result->fetch_assoc())
           {
           ?>
                        <tr>
                            <td><?php echo $row["vendorid"]; ?></td>
                        <td><?php echo $row["pcode"]; ?></td>
                        <td><?php echo $row["InputName"]; ?></td>
                        <td><?php echo $row["InputMail"]; ?></td>
                        <td><?php echo $row["InputMessage"]; ?></td>
                        <td><?php echo $row["mobile"]; ?></td>
                        <td><?php echo $row["land"]; ?></td>
                        <td><?php echo $row["pay"]; ?></td>
                        
                        </tr>
          <?php     
           }
       }
        ?>
            </tbody>
        </table>
        
       
    </body>
</html>


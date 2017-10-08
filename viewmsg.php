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
        <strong>CUSTOMER MESSAGES</strong>
        <div class="jumbotron" style="background-color: #999 ;color: #F9F9FF;text-align: center;font-size: 20px">Customer Messages</div>
          <?php
       $conn=new mysqli("localhost","root","","final");
       $sql="select * from contact";
       $result=$conn->query($sql);
       if($result->num_rows>0)
       {
           ?>
        
        <table id="mytable">
            <thead>
                <tr><td>Name</td><td>email</td><td>contact</td><td>Message</td></tr>
            
            </thead>
            <tbody>
        <?php   
           while($row=$result->fetch_assoc())
           {
           ?>
                        <tr>
                            <td><?php echo $row["contact_name"]; ?></td>
                        <td><?php echo $row["contact_email"]; ?></td>
                        <td><?php echo $row["contact_no"]; ?></td>
                        <td><?php echo $row["msg"]; ?></td>
                       
                        </tr>
          <?php     
           }
       }
        ?>
            </tbody>
        </table>
        
       
    </body>
</html>


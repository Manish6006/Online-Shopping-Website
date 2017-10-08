<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
session_start();
if($_SESSION["vtype"]!="admin"){
  echo "<script>window.location='index.php'</script>";
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
    <body>
        <strong>Requested vendors</strong>
        <div class="jumbotron" style="background-color: #999 ;color: #F9F9FF;text-align: center;font-size: 20px">Vendor</div>
          <?php
       $conn=new mysqli("localhost","root","","final");
       $sql="select * from login1";
       $result=$conn->query($sql);
       if($result->num_rows>0)
       {
           ?>
        
        <table id="mytable">
            <thead>
                <tr><td>user name</td><td>password</td><td>Name</td><td>type</td><td>Status</td><td>Update Status</td></tr>
            
            </thead>
            <tbody>
        <?php   
           while($row=$result->fetch_assoc())
           {
           ?>
                        <tr>
                            <td><?php echo $row["vuser"]; ?></td>
                        <td><?php echo $row["vpass"]; ?></td>
                        <td><?php echo $row["vname"]; ?></td>
                       <td><?php echo $row["vtype"]; ?></td>
                       <td><?php echo $row["status"]; ?></td>
                       <td>
                       <form action="update.php" method="post">
                       <input name="vuser" type="hidden" value="<?php echo $row['vuser']; ?>">
                       <input name="vpass" type="hidden" value="<?php echo $row['vpass']; ?>">
                       <button type="submit">Change Status</button>
                       </form>
                       </td>
                        </tr>
          <?php     
           }
       }
        ?>
            </tbody>
        </table>
        
       
    </body>
</html>


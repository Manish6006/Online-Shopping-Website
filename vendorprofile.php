<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
session_start();
if(!isset($_SESSION['vtype'])||$_SESSION['vtype']!='vendor'){
  echo "<script>window.location='index.php?error=Access restricted'</script>";
}
?>
<html>
    <head>
        <?php
        session_start();
        if(!isset($_SESSION['vuser'])){
     echo "<script>window.location.assign('index.php')</script>";
}
        ?>
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
      
       <div>
             <ul class="nav navbar-nav navbar-fixed-top navbar-inverse ">
                       <li class="active" style="font-size: 20px;color: #000"><a href="index.php">HOME</a></li>
                      
                             <li><a href="newuser.php"style="font-size: 20px;color: #000">Add product </a></li>
                            
                           </ul>
           <ul>   <form action="index.php" method="post">   <input type="submit" name="btnlogout" value="LOGOUT" > </form></ul> 
                   
                    
                  
                </div>
                  
             </div> 
      </nav>
         
        <div class="jumbotron" style="background-color: #999 ;color: #F9F9FF;font-size: 20px">Vendor</div>
          <?php
          $n11=  filter_input(INPUT_POST,"vuser");
       $conn=new mysqli("localhost","root","","final");
       $sql="select * from vendor where vuser= '".$_SESSION['vuser']."'";
       $result=$conn->query($sql);
       if($result->num_rows>0)
       {
           ?>
        
        <table id="mytable">
            <thead>
                <tr><td>user name</td><td>password</td><td>Name</td><td>contact</td><td>Product Brand</td><td>Product type</td><td>stock</td><td>product details</td><td>image</td><td>price</td></tr>
            
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
                        <td><?php echo $row["contact"]; ?></td>
                        <td><?php echo $row["pbrand"]; ?></td>
                        <td><?php echo $row["ptype"]; ?></td>
                        <td><?php echo $row["stock"]; ?></td>
                        <td><?php echo $row["pdetail"]; ?></td>
                        <td><?php echo $row["img"]; ?></td>
                          <td><?php echo $row["price"]; ?></td>
                        </tr>
          <?php     
           }
       }
        ?>
       
            </tbody>
        </table>
       </div>
        
        <div>
            <?php
           
            ?>
        </div>
       
    </body>
</html>


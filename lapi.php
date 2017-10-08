<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
          <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
        <title></title>
         <link href="css/bootstrap.min.css" rel="stylesheet">
         
 <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="styles.css">
   <script src="js/jquery.js" type="text/javascript"></script>
   <script src="script.js"></script>
   <script>
   function changeClass(element){
    $(element).toggleClass('dropdown');
    $(element).toggleClass('dropdown open');
    console.log("Class changed");
   }
   </script>
   <title>CSS MenuMaker</title>



  
    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
     <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
   
    <body style="background-image: url('pics/background.jpg');background-repeat:repeat;">
           <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
      <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">WeKART</a>
            </div>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
             
    <div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home</a></li>
        <li class="dropdown" onclick="changeClass(this);"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Electronics <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="mobi.php">Mobiles</a></li>
            <li><a href="lapi.php">Laptops</a></li>
            <li><a href="tab.php">Tabs</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
          <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> New Register</a></li>
      <li><a href="LOGINPAGE.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
      </div>
    </nav>
        
       
           <div class="container">

        <div class="row">


            
       <div class="col-lg-12">    
           
        <?php 
                   $conn=new mysqli("localhost","root","","final");
                   $sql="select * from vendor where ptype='laptop'";
                   $result=$conn->query($sql);
                   if($result->num_rows>0)
                   {
                       while($row=$result->fetch_assoc())
                       {
                           ?>
                    <div class="col-sm-4 ">
                        <div class="thumbnail">
                            <img src="<?php echo $row["img"];?>"style="height: 250px; width: 350px" alt="">
                            <div class="caption">
                                <h4 class="pull-right"><?php echo $row["price"];?></h4>
                                <p style="color: #269abc;font-size: 20px"><?php echo $row["pbrand"]; ?></p>
                                <h4><?php echo $row["pdetail"];?>
                                </h4>
                                 <h4 class="pull-right">stock:<?php echo $row["stock"];?></h4>
                               
                            </div>
                            <div class="ratings">
                              
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                                  <form method="post" action="orderdetails.php">
                                  <input type="hidden" name="vendorName" value="<?php echo $row["vname"];?>">
                                  <input type="hidden" name="type" value="Laptop">
                                  <input type="hidden" name="product" value="<?php echo $row["pbrand"].$row["pdetail"];?>">
                                  <input type="hidden" name="price" value="<?php echo $row["price"];?>">
                                  <button type="submit"class="pull-right">Order</button>
                                </form>
                            </div>
                         
                              
                           
                        </div>
                    </div>
                   <?php
                       }
                   }
                   ?>
           </div>
            </div>
               </div>
    </body>
</html>

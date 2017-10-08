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

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
     <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
   
    <body>
        <?php 
                   $conn=new mysqli("localhost","root","","final");
                   $sql="select * from vendor";
                   $result=$conn->query($sql);
                   if($result->num_rows>0)
                   {
                       while($row=$result->fetch_assoc())
                       {
                           ?>
                    <div class="col-sm-4 ">
                        <div class="thumbnail">
                            <img src="<?php echo $row["img"];?>" alt="">
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
                                  <a href="#"><input type="button" value="order" class="pull-right"></a>
                            </div>
                         
                              
                           
                        </div>
                    </div>
                   <?php
                       }
                   }
                   ?>
    </body>
</html>

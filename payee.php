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
         <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="page-header">
    <h1>Payment<small></small></h1>
</div>
<div class="container">
    <div class="row">
        <form role="form">
            <div class="col-lg-6">
                <div class="well well-sm"><strong><span class="glyphicon glyphicon-asterisk"></span>Required Field</strong></div>
                  <div class="form-group">
                    <label for="cardnumber"> Card Number</label>
                    <div class="input-group">
                        <input type="number" class="form-control" name="cardnumber" id="InputName" placeholder="16 digit number" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="name">  Name on card</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="name" id="InputName" placeholder=" Name" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
               
               
              <div class="col-lg-3"> 
              <div class="form-group">
                    <label for="cvv"> cvv</label>
                    <div class="input-group">
                        <input type="number" class="form-control" name="cvv" id="InputName" placeholder="cvv" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                  </div>
               <div>
                    <div class="col-lg-3">
            <div class="form-group">
                    <label for="date"> expiry(mm/yr)</label>
                    <div class="input-group">
                        <input type="number" class="form-control" name="mm" id="InputName" placeholder="mm" required>/<input type="number" class="form-control" name="yr" id="InputName" placeholder="yr" required>
                       
                    </div>
                </div>
                        </div>
                     <div>
                <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-info pull-right">
            </div>
               </div>>
        </form>
       
    </div>
</div>
</div>
        <?php
        // put your code here
        ?>
    </body>
</html>

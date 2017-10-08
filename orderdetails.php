<?php
 $vname = $_REQUEST['vendorName'];
 $type = $_REQUEST['type'];
 $product = $_REQUEST['product'];
 $price = $_REQUEST['price'];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Registration form Template | PrepBootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">

<div class="page-header">
    <h1>Order Details<small></small></h1>
</div>

<!-- Registration form - START -->
<div class="container">
    <div class="row">
        <form action="invoice.php" method="post">
            <div class="col-lg-6">
                <div class="well well-sm"><strong><span class="glyphicon glyphicon-asterisk"></span>Required Field</strong></div>
                  <div class="form-group">
                    <label for="pcode"> Pin code</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="pcode" id="InputName" placeholder="pin code" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputName"> Full Name</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="InputName" id="InputName" placeholder="Enter Name" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputEmail">Enter Email</label>
                    <div class="input-group">
                        <input type="email" class="form-control" id="InputEmailFirst" name="InputEmail" placeholder="Enter Email" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
               
                </div>
                <div class="form-group">
                    <label for="InputMessage">shipping address</label>
                    <div class="input-group">
                        <textarea name="InputMessage" id="InputMessage" class="form-control"  rows="5" required></textarea>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
              <div class="form-group">
                    <label for="mobile"> Mobile</label>
                    <div class="input-group">
                        <input type="number" class="form-control" name="mobile" id="InputName" placeholder="mobile" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
            <div class="form-group">
                    <label for="land"> Land Line</label>
                    <div class="input-group">
                        <input type="number" class="form-control" name="land" id="InputName" placeholder="LandLine" required>
                       
                    </div>
                </div>
            <div class="form-group">
                <label for="pay"> Mode Of Payment</lable>
                  
                        <select name="pay">
                            <option>COD</option>
                            <option>CARD PAYMENT</option>
                                
                                
                               
                        </select>
                </div>
                <input type="hidden" name="vname" value="<?php echo $vname;?>">
                <input type="hidden" name="type" value="<?php echo $type;?>">
                <input type="hidden" name="product" value="<?php echo $product;?>">
                <input type="hidden" name="price" value="<?php echo $price;?>">
                <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-info pull-right">
            </div>
        </form>
       
    </div>
<?php
 if(filter_input(INPUT_POST,"submit")!=NULL){
    $pay= filter_input(INPUT_POST, "pay");
 if($pay=="CARD PAYMENT")
 {
     echo "<script>window.location.assign('payee.php');</script>";
 }
    
 }
?>

<!-- Registration form - END -->

</div>

</body>
</html>
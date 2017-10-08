<?php
$pincode = $_REQUEST['pcode'];
$name = $_REQUEST['InputName'];
$email = $_REQUEST['InputEmail'];
$address = $_REQUEST['InputMessage'];
$mobile = $_REQUEST['mobile'];
$vname = $_REQUEST['vname'];
$type = $_REQUEST['type'];
$product = $_REQUEST['product'];
$price = $_REQUEST['price'];
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Sample Invoice</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <style>
      @import url(http://fonts.googleapis.com/css?family=Bree+Serif);
      body, h1, h2, h3, h4, h5, h6{
      font-family: 'Bree Serif', serif;
      }
    </style>
  </head>
  
  <body>
    <div class="container">
      <div class="row">
        <div class="col-xs-6">
          <h1>
            <a href="index.php">WeKart</a>
          </h1>
        </div>
        <div class="col-xs-6 text-right">
          <h1>INVOICE</h1>
          <h1><small>Invoice #<?php echo rand(1,1000);?></small></h1>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-5">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4>From: <a href="#"><?php echo $vname;?></a></h4>
            </div>
            <div class="panel-body">
              <p>
                KP-9(B), KIIT University <br>
                Patia, Bhubaneswar, Odisha<br>
                Pin - 751024
              </p>
            </div>
          </div>
        </div>
        <div class="col-xs-5 col-xs-offset-2 text-right">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4>To : <a href="#"><?php echo $name?></a></h4>
            </div>
            <div class="panel-body">
              <p>
                <?php echo $address;?><br>
                Mobile: <?php echo $mobile?><br>
                Email : <?php echo $email?><br>
                PIN - <?php echo $pincode?>
              </p>
            </div>
          </div>
        </div>
      </div>
      <!-- / end client details section -->
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>
              <h4>Type</h4>
            </th>
            <th>
              <h4>Product Name</h4>
            </th>
            <th>
              <h4>Qty</h4>
            </th>
            <th>
              <h4>Price</h4>
            </th>
            <th>
              <h4>Sub Total</h4>
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><?php echo $type;?></td>
            <td><?php echo $product;?></td>
            <td class="text-right">1</td>
            <td class="text-right">$<?php echo $price;?>.00</td>
            <td class="text-right">$<?php echo $price;?>.00</td>
          </tr>
        </tbody>
      </table>
      <div class="row text-right">
        <div class="col-xs-2 col-xs-offset-8">
          <p>
            <strong>
            Sub Total : <br>
            TAX : <br>
            Total : <br>
            </strong>
          </p>
        </div>
        <div class="col-xs-2">
          <strong>
          $<?php echo $price;?>.00 <br>
          N/A <br>
          $<?php echo $price;?>.00 <br>
          </strong>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-5">
          <div class="span7">
            <div class="panel panel-info">
              <div class="panel-heading">
                <h4>Contact Details</h4>
              </div>
              <div class="panel-body">
                <p>
                  Email : <a href="mailto:contactus@wekart.com">contactus@wekart.com</a> <br><br>
                  Mobile : +91995559945
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
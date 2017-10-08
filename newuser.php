
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <script src="script/jquery-hp.js" type="text/javascript"></script>
        <script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
<script>tinymce.init({selector:'textarea'});</script>
        <link href="css/animate.css" rel="stylesheet" type="text/css"/>
    </head>
    <body  style="background: url('pics/Mens-Fashion-Style.jpg');background-position:top center;background-repeat: no-repeat;background-size: 100%">
        <div id='loginscreen' class="flipInY animated col-sm-4 col-sm-offset-4" style="opacity:0.9;box-shadow:0px 0px 10px black;border-radius:10px;background-color:#0a2948;padding:0px;margin-top:1%;">
            <h1 style="text-shadow:1px 1px black;border-top-left-radius:10px;border-top-right-radius: 10px;margin: 0px;background-color: #3b90e1;text-align: center;color:white;padding:10px 0px;box-shadow:0px 10px 10px -10px black;">NEW PRODUCT</h1>
            <div style="padding: 30px">
                <form action="regven.php" method="post" name='f1' enctype="multipart/form-data">
                <input style="margin-bottom: 3px;" placeholder="User Name" type="text" name="vuser" class="form-control">
                <input style="margin-bottom: 3px;" placeholder="Password" type="password" name="vpass" class="form-control">
                
                <input style="margin-bottom: 3px;" placeholder="Name" type="text" name="vname" class="form-control">
                <input style="margin-bottom: 3px;" placeholder="Contact" type="text" name="contact" class="form-control">
                <input style="margin-bottom: 3px;" placeholder="Product" type="text" name="pbrand" class="form-control">
                
                <input style="margin-bottom: 3px;" placeholder="Type" type="text" name="ptype" class="form-control">
                <input style="margin-bottom: 3px;" placeholder="stock" type="text" name="stock" class="form-control">
                 <input style="margin-bottom: 3px;" placeholder="ditails" type="text" name="pdetail" class="form-control">
              <!--  <textarea style="margin-bottom: 3px;"   cols="20" rows="5" name="pdetail" class="form-control">enter details</textarea>
             <!-- <p>upload a file:<input type="file" name="fileupload"></p><br>-->
            
                 <p style="color: #F9F9FF">upload a file:<input type="file" name="img"></p><br>
         
                   <input style="margin-bottom: 3px;" placeholder="price" type="text" name="price" class="form-control">
                  
                <input type="submit" value="REGISTER" class="btn btn-submit btn-block" style="background-color: #83acf6;">
            </form>
           
             
       
        
                
                 </div>
          
          
        </div>
        
         
    </body>
</html>

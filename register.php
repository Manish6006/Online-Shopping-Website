
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
    <body  style="background: url('pics/background.jpg');background-repeat: repeat;">
        <div id='loginscreen' class="flipInY animated col-sm-4 col-sm-offset-4" style="opacity:0.9;box-shadow:0px 0px 10px black;border-radius:10px;background-color:#0a2948;padding:0px;margin-top:10%;">
            <h1 style="text-shadow:1px 1px black;border-top-left-radius:10px;border-top-right-radius: 10px;margin: 0px;background-color: #3b90e1;text-align: center;color:white;padding:10px 0px;box-shadow:0px 10px 10px -10px black;">NEW VENDOR</h1>
            <div style="padding: 30px">
                <form action="register2.php" method="post" name='f1' enctype="multipart/form-data">
                <input style="margin-bottom: 3px;" placeholder="User Name" type="text" name="vuser" class="form-control">
                <input style="margin-bottom: 3px;" placeholder="Password" type="password" name="vpass" class="form-control">
                
                <input style="margin-bottom: 3px;" placeholder="Name" type="text" name="vname" class="form-control">
                <p style="color: #F2F3FF"> USER TYPE:</p>
                  
                        <select name="vtype">
                            <option>admin</option>
                            <option>vendor</option>
                                
                                
                               
                        </select>
                    
               
         
                 
                  
                <input type="submit" value="REGISTER" class="btn btn-submit btn-block" style="background-color: #83acf6;">
            </form>
           
             
       
        
                
                 </div>
            <a href="index.php" class="btn btn-warning btn-block">Login</a>
          
        </div>
        
         
    </body>
</html>

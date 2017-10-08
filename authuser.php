<html>
    <head>
        
         <title>Bootstrap Case</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="jumbotron" style="background-color: #adadad ; text-align: center; height: 50px; color: #000;font-style: inherit;font-size: 30px" >ADD NEW USER</div>
       
        <div class="col-sm-4"></div>
       <div class="col-sm-4"> 
        <div class="panel panel-default">
         <div class="panel-body">   
             <form action="authuser2.php" method="post">
            <table>
                <tr>
                    <td>USER ID:</td>
                    <td><input type="text" placeholder="ID" name="vuser" class="form-control"></input></td>
                </tr>
                <tr>
                    <td>PASSWORD:</td>
                    <td><input type="password" placeholder="pass "name="vpass"></input></td>
                </tr>
                 <tr>
                    <td>USER NAME:</td>
                    <td><input type="text" placeholder="name" name="vname"></input></td>
                </tr>
                 <tr>
                    <td>USER TYPE:</td>
                    <td>
                        <select name="vtype">
                            <option>admin</option>
                            <option>vendor</option>
                               
                                
                               
                        </select>
                    </td>
                </tr>
                  
                <tr>
                    <td></td>
                    <td><input type="submit" name="INSERT RECORD"></input></td>
                </tr>
            </table>
            
        </form>
         </div>
       </div>     
         </div>
       
    </body>
    
</html>
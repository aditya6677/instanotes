<?php
session_start();
if(empty($_SESSION['login_user']))
{
header('Location: index.php');
}

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Instanotes</title>
      <link rel='shortcut icon' href='img/favicon.png'/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/animatecss/3.5.2/animate.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/wow.min.js"></script>
              <script>
              new WOW().init();
    </script>
    <style>
.center {
    margin: auto;
    width: 40%;
    padding: 30px;
}
</style>
</head>
<body style = "background-color:#1D1D1D">
   
   
   
   <a href="logout.php">
        <div style = "float:right; padding:10px 10px 0 0; color:#08D671; font-size:medium">
            <span>&nbspLogout</span>
        </div>
        <div style = "float:right; padding:10px 0 0 0; color:#08D671; font-size:medium">
            <span class="glyphicon glyphicon-log-out"></span>
        </div>
    </a> 
   
   <div class="container">
        <div align="center">
            <a href="http://instanotes.xyz">
                <img style="padding:150px 0 10px 0" src="img/logo.png">
            </a>
        </div>
    </div>
   
    <div class="container center wow fadeIn">
            <form role="form" action="insert.php" method="post">
              <div class="form-group">
                               <div class="form-group">
                  <label class="sr-only" for="form-last-name">Subject</label>
                  <input type="text" name="subject" placeholder="Subject..." class="form-control" required="">
                </div>
                                <div class="form-group">
                  <label class="sr-only" for="form-email">Unit</label>
                  <input type="text" name="unit" placeholder="Unit..." class="form-control" required="">
                </div>

                <label class="sr-only" for="form-first-name">Topic</label>
                  <input type="text" name="name" placeholder="Topic..." class="form-control" required="">
                </div>

                <div class="form-group">
                  <label class="sr-only" for="form-first-name">Faculty</label>
                    <input type="text" name="faculty" placeholder="Faculty Name..." class="form-control" required="">
                  </div>
                  <div class="form-group">
                    <label class="sr-only" for="form-first-name">Link</label>
                      <input type="text" name="link" placeholder="File Link..." class="form-control" required="">
                    </div>
                    <div style = "padding:0 0 0 45%">
                    <input name = "add" class="btn btn-default" type = "submit" value = "Submit" style="background-color:#08D671; color:#FFFFFF; border-style:none">
                </div>
            </form>
  	</div>
  </body>
</html>

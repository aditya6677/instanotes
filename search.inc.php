<!DOCTYPE html>
<html>
<head>
  <title>Instanotes</title>
  <link rel='shortcut icon' href='img/favicon.png'/>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/animatecss/3.5.2/animate.css">
  <link rel="stylesheet" type="text/css" href="css/mystyle.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/livejs.js"></script>
  <script src="js/typeahead.min.js"></script>
  <script src="js/analyticstracking.js"></script>
  <script>
            new WOW().init();
  </script>
</head>

<body style="background-color:#1D1D1D">
    <a href="upload.php">
        <div style = "float:right; padding:10px 10px 0 0; color:#08D671; font-size:medium">
            <span>&nbspUpload</span>
        </div>
        <div style = "float:right; padding:10px 0 0 0; color:#08D671; font-size:medium">
            <span class="glyphicon glyphicon-upload"></span>
        </div>
    </a>
    <div class="container">
        <div align="center">
            <a href="http://instanotes.xyz">
                <img style="padding:150px 0 10px 0" src="img/logo.png">
            </a>
            <form action="search.php" method="POST">
                <input type="text" name="typeahead" class="typeahead" placeholder="enter subject's or faculty's name"><br><br>
                <button style="background:#08D671; border:0px; color:#FFFFFF; font-weight:thin" type="submit" class="btn btn-default">&nbsp &nbsp Search &nbsp &nbsp</button>
            </form>
        </div>
    </div>
</body>


</html>

<?php
         if(isset($_POST['add'])) {
            $dbhost = 'localhost';
            $dbuser = 'aditya76';
            $dbpass = '';
            $conn = mysql_connect($dbhost, $dbuser, $dbpass);

            if(! $conn ) {
               die('Could not connect: ' . mysql_error());
            }

            if(! get_magic_quotes_gpc() ) {
               $name = addslashes ($_POST['name']);
               $subject = addslashes ($_POST['subject']);
               $unit = addslashes ($_POST['unit']);
               $faculty = addslashes ($_POST['faculty']);
            }else {
               $name = $_POST['name'];
               $subject = $_POST['subject'];
               $unit =$_POST['unit'];
               $faculty=$_POST['faculty'];
            }

            $link = $_POST['link'];
            mysql_select_db('a_database');

            $sql = "INSERT INTO notes ". "(name,subject,unit,faculty,link) ". "VALUES('$name','$subject','$unit','$faculty','$link')";
            $retval = mysql_query( $sql, $conn );

            if(! $retval ) {
               die('Could not enter data: ' . mysql_error());
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
    <div align="center" style="color:#FFFFFF; font-size:medium; padding-top:20px">
        Data Uploaded Successfully.
    </div>
    <a href = "upload.php">
        <div align="center" style="color:#FFFFFF; font-size:medium; padding-top:20px">
            Back to Uploading Page.
        </div>
    </a>
</body>


</html>

            <?php
            mysql_close($conn);
          }
        ?>

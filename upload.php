<?php
session_start();
if(!empty($_SESSION['login_user']))
{
header('Location: home.php');
}
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <title>Instanotes</title>
        <link rel='shortcut icon' href='img/favicon.png'/>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/style.css" />
        <script src="js/jquery.min.js"></script>
        <script src="js/jquery.ui.shake.js"></script>
        <script>
            $(document).ready(function () {

                $('#login').click(function () {
                    var username = $("#username").val();
                    var password = $("#password").val();
                    var dataString = 'username=' + username + '&password=' + password;
                    if ($.trim(username).length > 0 && $.trim(password).length > 0) {


                        $.ajax({
                            type: "POST",
                            url: "ajaxLogin.php",
                            data: dataString,
                            cache: false,
                            beforeSend: function () {
                                $("#login").val('Connecting...');
                            },
                            success: function (data) {
                                if (data) {
                                    $("body").load("home.php").hide().fadeIn(1500).delay(6000);
                                } else {
                                    $('#box').shake();
                                    $("#login").val('Login')
                                    $("#error").html("<span style='color:#cc0000'>Error:</span><span style='color:#FFFFFF'> Invalid username and password. </span>");
                                }
                            }
                        });

                    }
                    return false;
                });


            });
        </script>
    </head>

    <body style="background:#1D1D1D">
       <div class="container">
            <div align="center">
                <a href="http://instanotes.xyz">
                    <img style="padding:150px 0 20px 0" src="img/logo.png">
                </a>
            </div>
            <div id="main" align="center">
                <form action="" method="post">
                    <input type="text" name="username" class="input" autocomplete="off" id="username" placeholder = "Username"/>
                    <input type="password" name="password" class="input" autocomplete="off" id="password" placeholder = "Password"/>
                    <br/>
                    <input type="submit" class="button button-primary" value="Log In" id="login" />
                    <span class='msg'></span>
                    <div id="error">
                    </div>
                </form>
             </div>
        </div>
    </body>

    </html>
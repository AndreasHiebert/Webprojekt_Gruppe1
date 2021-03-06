<?php
/* Smarty version 3.1.29, created on 2016-06-02 11:21:04
  from "C:\xampp\htdocs\Webprojekt_Gruppe1\public_html\view\Login.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_574ffa807b2435_60916397',
  'file_dependency' => 
  array (
    '8048dc785b09527dbb23cdeac614b884c3136a61' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Webprojekt_Gruppe1\\public_html\\view\\Login.html',
      1 => 1464857396,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_574ffa807b2435_60916397 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <!-- Custom theme -->
        <link rel="stylesheet" type="text/css" href="../css/Login.css">
    </head>
    <body>
        <div id ="Headline" class="row">
            <div class="col-sm-10">
                <h1 id="GamificationPlatformName">Study Buddy</h1>
            </div>
            <div id="HSHL-Logo" class="col-sm-2">
                <img src="img/Logo.png" width="200" height="150"/>
            </div>
        </div>
        <form action="loginAction.php" method="get">
        <div id="LoginContainer" class="container">
            <div id="EMailRow" class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-1">
                    <label id="EMailTag" for="email">Email:</label>
                </div>
                <div class="col-sm-2">
                    <input type="email" name="email_txt" class="form-control" id="EMailForm" placeholder="Enter E-Mail">
                </div>
            </div>
            <div id="PwdRow" class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-1">
                    <label id="PasswordTag" for="pwd">Password:</label>
                </div>
                <div class="col-sm-2">
                    <input type="password" name="pass_txt" class="form-control" id="PasswordForm" placeholder="Enter Password">
                </div>
                <div class="col-sm-1">
                    <button type="submit" class="btn btn-default">Login</button>
                </div>
            </div>
            <div id="RegisterRow" class="row">
                <div class="col-sm-5"></div>
                <div class="col-sm-2">
                    <a href="http://www.hshl.de">Register?</a>
                </div>
            </div>
            <div id="PwdForgetRow" class="row">
                <div class="col-sm-5"></div>
                <div class="col-sm-2">
                    <a href="http://www.hshl.de">Forgot Password?</a>
                </div>
            </div>
        </div>
        </form>
    </body>
    <!-- jQuery library -->
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"><?php echo '</script'; ?>
>
    <!-- Latest compiled and minified JavaScript -->
    <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.6/js/bootstrap.min.js"><?php echo '</script'; ?>
>
</html>
<?php }
}

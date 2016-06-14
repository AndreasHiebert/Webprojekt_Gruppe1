<?php
/* Smarty version 3.1.29, created on 2016-06-14 04:31:51
  from "C:\xampp\htdocs\WebProjekt\public_html\view\Login.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_575f6c978fcf50_18865711',
  'file_dependency' => 
  array (
    '3b5b98400195cb89646bfbcf26f4a187ea117fa4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WebProjekt\\public_html\\view\\Login.html',
      1 => 1465871509,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_575f6c978fcf50_18865711 ($_smarty_tpl) {
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
                    <a href="index.php?controller=LoginController&action=loginUser" class="btn btn-primary">LoginUser</a>
                    <a href="index.php?controller=LoginController&action=loginInstructor" class="btn btn-primary">LoginInstructor</a>
                </div>
            </div>
            <div id="RegisterRow" class="row">
                <div class="col-sm-5"></div>
                <div class="col-sm-2">
                    <a href="index.php?controller=LoginController&action=getUserRegistrationForm">Register as User?</a>
                    <a href="index.php?controller=LoginController&action=getInstructorRegistrationForm">Register as Instructor?</a>
                </div>
            </div>
            <div id="PwdForgetRow" class="row">
                <div class="col-sm-5"></div>
                <div class="col-sm-2">
                  <!--  <a href="http://www.hshl.de">Forgot Password?</a> -->
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

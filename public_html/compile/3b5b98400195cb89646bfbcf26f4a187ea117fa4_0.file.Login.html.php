<?php
/* Smarty version 3.1.29, created on 2016-07-06 18:05:39
  from "C:\xampp\htdocs\WebProjekt\public_html\view\Login.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_577d2c53323324_45921734',
  'file_dependency' => 
  array (
    '3b5b98400195cb89646bfbcf26f4a187ea117fa4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WebProjekt\\public_html\\view\\Login.html',
      1 => 1467821137,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_577d2c53323324_45921734 ($_smarty_tpl) {
?>
<h1>Login</h1>

        <div id ="Headline" class="row">
          <div class="col-sm-5">

          </div>
            <div class="col-sm-4">
                <h1 id="GamificationPlatformName">Study Buddy</h1>
            </div>
            <div id="HSHL-Logo" class="col-sm-2">
                <img src="img/Logo.png" width="200" height="150"/>
            </div>
        </div>
        <form action="LoginController.php">
        <div id="LoginContainer" class="container">
            <div id="EMailRow" class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-1">
                    <label id="EMailTag" for="email">E-mail:</label>
                </div>
                <div class="col-sm-2">
                    <input type="email" name="email_txt" class="form-control" id="EMailForm" placeholder="Enter E-Mail">
                </div>
                <div>
                    <div class="col-sm-1">
                        <input type="submit" class ="button" name="Log in as User" value="UserLogin"/>
                    </div>
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
                    <input type="submit" class="button" name="Log In as Instructor" value="LoginInstructor" />
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
<?php }
}

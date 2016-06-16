<?php
/* Smarty version 3.1.29, created on 2016-06-14 04:34:12
  from "C:\xampp\htdocs\WebProjekt\public_html\view\InstructorRegistration.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_575f6d241f2184_35006062',
  'file_dependency' => 
  array (
    'e121f535f1ae90350318cea27be22628ab470b7e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WebProjekt\\public_html\\view\\InstructorRegistration.html',
      1 => 1465871646,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_575f6d241f2184_35006062 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Study Buddy - Registration</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <!-- Custom theme -->
        <link rel="stylesheet" type="text/css" href="../css/Registration.css">
    </head>
    <body>
    <center>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <header>
                        <h1>Study Buddy</h1>
                    </header>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6">
                    <div class="pull-right">
                        <h3>Username:</h3>
                    </div>
                </div>
                <div class="col-xs-6">
                    <div class="pull-left">
                        <h3>
                            <input type="text"
                                   id="username"
                                   title="Wählen Sie einen Accountnamen">
                        </h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-6">
                    <div class="pull-right">
                        <h3>E-mail:</h3>
                    </div>
                </div>
                <div class="col-xs-6">
                    <div class="pull-left">
                        <h3>
                            <input type="text"
                                   id="email"
                                   title="Geben Sie einen gültige Adresse ein">
                        </h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-6">
                    <div class="pull-right">
                        <h3>Password: </h3>
                    </div>
                </div>
                <div class="col-xs-6">
                    <div class="pull-left">
                        <h3>
                            <input type="text"
                                   id="password"
                                   title="Wählen Sie ein Passwort">
                        </h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-6">
                    <div class="pull-right">
                        <h3>Confirm: </h3>
                    </div>
                </div>
                <div class="col-xs-6">
                    <div class="pull-left">
                        <h3>
                            <input type="text"
                                   id="confirm"
                                   title="Bestätigen Sie ihr Passwort">
                        </h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12">
                    <h3>
                    <input type="submit"
                           id="registration_btn"
                           title="Bestätigen Sie die Angaben"
                           value="Registrieren">
                    </h3>
                </div>
            </div>
        </div>
    </center>
    <!-- jQuery library -->
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"><?php echo '</script'; ?>
>
    <!-- Latest compiled and minified JavaScript -->
    <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.6/js/bootstrap.min.js"><?php echo '</script'; ?>
>
</body>
</html>
<?php }
}

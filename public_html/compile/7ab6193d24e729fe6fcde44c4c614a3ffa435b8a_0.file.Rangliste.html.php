<?php
/* Smarty version 3.1.29, created on 2016-05-31 01:40:27
  from "C:\xampp\htdocs\WebProjekt\public_html\view\Rangliste.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_574ccf6bd1c349_40017783',
  'file_dependency' => 
  array (
    '7ab6193d24e729fe6fcde44c4c614a3ffa435b8a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WebProjekt\\public_html\\view\\Rangliste.html',
      1 => 1464642858,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_574ccf6bd1c349_40017783 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Study Buddy Rangliste</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <!-- Custom theme -->
        <link rel="stylesheet" type="text/css" href="../css/Rangliste.css">
    </head>
    <body>
        <div id="Headline" class="row">
            <div class="col-sm-10">
                <h1 id="PageName">Study Buddy</h1>
            </div>
            <div id="HSHL-Logo" class="col-sm-2">
            <img src="img/Logo.png" alt="Logo der HSHL" width="200" height="150">
        </div>
        </div>
        <div id="ProgressBars" class="row">
            <div id="CreditPointsBar" class="col-sm-6">
                <h3>Credit Points</h3>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="50"
                         aria-valuemin="0" aria-valuemax="100" style="width:50%">
                        50/100
                        <span class="sr-only">50% Complete</span>
                    </div>
                </div>
            </div>
            <div id="XpBar" class="col-sm-6">
                <h3>Experience</h3>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="50"
                         aria-valuemin="0" aria-valuemax="100" style="width:50%">
                        50/100
                        <span class="sr-only">50% Complete</span>
                    </div>
                </div>
            </div>
        </div>
        <div id="CompiledBody" class="row">
            <div id="NaviColoumn" class="col-sm-2">
                <ul id="NaviListe" style="list-style-type:none">
                    <li id="NaviItem">Fitnesspoints</li>
                    <li id="NaviItem">Rangliste</li>
                    <li id="NaviItem">Achievements</li>
                    <li id="NaviItem">Instruktor</li>
                    <li id="NaviItem">Logout</li>
                </ul>
            </div>
            <div id="MainBody" class="col-sm-7">
                <ul id="Rangliste" style="list-style-type: none">
                    <li>1.Platz: Maryi</li>
                    <li>2.Platz:Yujan</li>
                    <li>.</li>
                    <li>.</li>
                    <li>.</li>
                    <li>4.Platz: Musti</li>
                    <li>.</li>
                    <li>.</li>
                    <li>.</li>
                    <li>15.Platz: Ringer</li>
                    <li>16.Platz: Lissy</li>
                </ul>
            </div>
            <div id="RightBody" class="col-sm-3">
                <div id ="RecentActiveAchievements" class="row">
                    <ul style="list-style-type:none">
                        <li>
                            <img src="img/Logo.png" alt="Logo der HSHL" width="100" height="75">
                            Stay Active!
                        </li>
                        <li>
                            <img src="img/Logo.png" alt="Logo der HSHL" width="100" height="75">
                            Be Loyal! - 4/100
                        </li>
                        <li>
                            <img src="img/Logo.png" alt="Logo der HSHL" width="100" height="75">
                            Give and Take - 2/10
                        </li>
                    </ul>
                </div>
                <div id="Calendar" class="row">

                </div>
            </div>
        </div>
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

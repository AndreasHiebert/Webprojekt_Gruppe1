<?php
/* Smarty version 3.1.29, created on 2016-06-11 01:28:31
  from "C:\xampp\htdocs\WebProjekt\public_html\view\Achievements.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_575b4d1f005514_09537939',
  'file_dependency' => 
  array (
    '016e235d794d79e722f4cf41f8a3a1a5f7d89598' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WebProjekt\\public_html\\view\\Achievements.html',
      1 => 1464655174,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_575b4d1f005514_09537939 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Gamification Platform</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <!-- Custom theme -->
        <link rel="stylesheet" type="text/css" href="../css/Achievements.css">

    </head>
    <body>
        <h1>Achievements</h1>
        <div class="media">
            <div class="media-left media-middle">
                <a href="#">
                    <img class="media-object" src="img/albert-einstein.jpg" alt="Ein schlauer Mensch" width="100" height="70">
                </a>
            </div>
            <div class="media-body">
                <h4 class="media-heading">Verrückte Combo</h4>
                <p>Besuche fünf Vorlesungen eines Faches am Stück</p>
                <button>20 Punkte</button>
            </div>
        </div>
        <div class="media">
            <div class="media-left media-middle">
                <a href="#">
                    <img class="media-object" src="img/runner.jpg" alt="Ein Jogger" width="100" height="70">
                </a>
            </div>
            <div class="media-body">
                <h4 class="media-heading">Weg mit dem Speck</h4>
                <p>Nimm an der Veranstaltung "Power Fitness" teil</p>
                <button>10 Punkte</button>
            </div>
        </div>
        <div class="media">
            <div class="media-left media-middle">
                <a href="#">
                    <img class="media-object" src="img/handschuh.jpg" alt="Ein Boxhandschuh" width="100" height="70">
                </a>
            </div>
            <div class="media-body">
                <h4 class="media-heading">Hau den Lukas</h4>
                <p>Finde Etienne und boxe ihn so fest es geht</p>
                <button>220 Punkte</button>
            </div>
        </div>
        <div class="media">
            <div class="media-left media-middle">
                <a href="#">
                    <img class="media-object" src="img/touch-me.jpg" alt="Ein Informatiker" width="100" height="70">
                </a>
            </div>
            <div class="media-body">
                <h4 class="media-heading">Bitte ein Bit</h4>
                <p>Programmiere den Taschenrechner aus der Übung</p>
                <button>25 Punkte</button>
            </div>
        </div>
        <div class="media">
            <div class="media-left media-middle">
                <a href="#">
                    <img class="media-object" src="img/geometry.jpg" alt="Geometrie" width="100" height="70">
                </a>
            </div>
            <div class="media-body">
                <h4 class="media-heading">Life of Pi</h4>
                <p>Besuche das Mathematik Tutorium</p>
                <button>15 Punkte</button>
            </div>
        </div>

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

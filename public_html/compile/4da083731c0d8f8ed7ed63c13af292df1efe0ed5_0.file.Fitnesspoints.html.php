<?php
/* Smarty version 3.1.29, created on 2016-06-02 18:50:19
  from "C:\xampp\htdocs\WebProjekt\public_html\view\Fitnesspoints.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_575063cb158306_89126891',
  'file_dependency' => 
  array (
    '4da083731c0d8f8ed7ed63c13af292df1efe0ed5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WebProjekt\\public_html\\view\\Fitnesspoints.html',
      1 => 1464655173,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_575063cb158306_89126891 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Fitnesspoints</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <!-- Custom theme -->
        <link rel="stylesheet" type="text/css" href="../css/Fitnesspoints.css">
    </head>
    <body>
        <form class="form-inline text-center formpadding">
            <div class="form-group">
                <input type="text" class="form-control" size="70" placeholder="Fitness- Code eingeben">
            </div>
            <button type="submit" class="btn btn-default">Einlösen</button>
        </form>


        <div class="tabelle  text-center">
            <div class="text text-center">
                <h4>Modulplan</h4>
            </div>
            <table class="table table-striped table-hover">


                <thead>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1. Semester</td>
                        <td class="farbe-bestanden">Grundlagen der Informatik I</td>
                        <td class="farbe-bestanden">Mathematisch-technische Grundlagen I</td>
                        <td class="farbe-bestanden">Naturwissenschaftlische Grundlagen I</td>
                        <td class="farbe-bestanden">Corporate Management I</td>
                        <td class="farbe-bestanden">Steuerungskompetenzen I</td>
                    </tr>

                    <tr>
                        <td>2. Semester</td>
                        <td class="farbe-bestanden">Grundlagen der Informatik II</td>
                        <td class="farbe-bestanden">Mathematisch-technische Grundlagen II</td>
                        <td >Naturwissenschaftlische Grundlagen II</td>
                        <td>Corporate Management II</td>
                        <td class="farbe-bestanden">Steuerungskompetenzen II</td>
                    </tr>
                    <tr>
                        <td>3. Semester</td>
                        <td>Moderne Computersysteme I</td>
                        <td class="farbe-bestanden">Mathematik und System Analysis</td>
                        <td>Embedded Systems</td>
                        <td>Corporate Management III</td>
                        <td>Steuerungskompetenzen III</td>
                    </tr>
                    <tr>
                        <td>4. Semester</td>
                        <td>Moderne Computersysteme II</td>
                        <td>Studienschwerpunkt I</td>
                        <td>Corporate Management IV</td>
                        <td>Steuerungskompetenzen IV</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>5. Semester</td>
                        <td>Praxis-/Auslandssemester</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>6. Semester</td>
                        <td>Projektarbeit</td>
                        <td>Studienschwerpunkt II</td>
                        <td>Corporate Management V</td>
                        <td>Steuerungskompetenzen V</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>7. Semester</td>
                        <td>Bachelorarbeit</td>
                        <td>Studienschwerpunkt III</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>

                </tbody>
            </table>
        </div>

        <div class="buttons">
            <a href="#" class="btn btn-default btn-lg">
                <span class="glyphicon glyphicon-edit"></span> Edit</a>

            <a href="#" class="btn btn-default btn-lg">
                <span class="glyphicon glyphicon-check"></span> Bestätigen</a>
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

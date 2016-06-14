<?php
/* Smarty version 3.1.29, created on 2016-06-14 04:29:58
  from "C:\xampp\htdocs\WebProjekt\public_html\view\homepage.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_575f6c268b4c20_03619618',
  'file_dependency' => 
  array (
    '767ecda1ec5d79ef8871d860ee65dece09862a2a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WebProjekt\\public_html\\view\\homepage.html',
      1 => 1465871394,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_575f6c268b4c20_03619618 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>HomePage</title>
	<meta name="description" content="Hello World">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<!-- Custom theme -->
	<link rel="stylesheet" type="text/css" href="../css/Homepage.css">
	<link rel="stylesheet" type="text/css" href="../css/NavBar.css">
	<!-- Font -->
	<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

</head>

<body>
	<!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
		<a class="navbar-brand" href="#">
			<a class="navbar-brand" href="#">Study Buddy</a>
          <button type="button" class="navbar-toggle collapsed" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li id="home"><a href="index.php?controller=LoginController&action=loginUser">Home</a></li>
            <li class="divider-vertical"></li>
            <li><a id="modulplan" href="index.php?controller=UserController&action=showModulplan">Modulplan</a></li>
            <li class="divider-vertical"></li>
            <li><a id="achievements" href="index.php?controller=UserController&action=showAchievements">Achievements</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
              <li class="inactive"><a href="./">Profile<span class="sr-only">(current)</span></a></li>
              <li class="divider-vertical"></li>
							<li><a href="index.php?controller=UserController&action=logout">Logout</a></li>
						</ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

	<div class="container">
		<div class="row">
			<div id="maincontent" class="col-ld-6 col-md-9">
				<div class="container"><?php echo $_smarty_tpl->tpl_vars['homepage_content']->value;?>
</div>
			</div>
			<div id="statusbar" class="col-md-3 col-ld-3">
					<div class="col-xs-12">CP:
						<div><div class="progress">
				<div id="progress_cp" class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="220" style="width: 0%">
				0/220 (0%)
				</div>
				</div></div>
					</div>
					<div class="col-xs-12">Fitnesspoints:
						<div id = "user_fitnesspoints"> <!--<?php echo $_smarty_tpl->tpl_vars['fitnesspoints_content']->value;?>
 -->Over 9000 Rank #1	ISD<div>
				</div></div>
					</div>
					<div class="col-xs-12">
						<div>Achievement 1</div>
					</div>
					<div class="col-xs-12">
						<div>Achievement 2</div>
					</div>
					<div class="col-xs-12">
						<div>Achievement 3</div>
					</div>
					<div class="col-xs-12">
						<div>Achievement 4</div>
					</div>

				<div class="row">
					<div class="col-xs-3">
						<div>AV 5</div>
					</div>
					<div class="col-xs-3">
						<div>AV 6</div>
					</div>
					<div class="col-xs-3">
						<div>AV 7</div>
					</div>
					<div class="col-xs-3">
						<div>AV 8</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<footer>
		<div class="container">
			<hr>

			<p>
				<small>footer</small></p>
				<button type="button" class="btn btn-lg btn-success" id="btn1">CP+</button>
				<button type="button" class="btn btn-lg btn-primary" id="btn2">EXP+</button>
				<button type="button" class="btn btn-lg btn-warning" id="btn3">Clear</button>

		</div> <!-- end container -->
	</footer>

	<!-- jQuery library -->
	<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"><?php echo '</script'; ?>
>
	<!-- Latest compiled and minified JavaScript -->
	<?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.6/js/bootstrap.min.js"><?php echo '</script'; ?>
>
	<!-- Personal JS -->
	<?php echo '<script'; ?>
 src="../js/Homepage.js"><?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
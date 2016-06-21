<?php
/* Smarty version 3.1.29, created on 2016-06-21 07:33:24
  from "C:\xampp\htdocs\WebProjekt\public_html\view\Homepage.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5768d1a4a0e532_89576492',
  'file_dependency' => 
  array (
    'd74e6749d1e5a999b22470331cc1662543346da2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WebProjekt\\public_html\\view\\Homepage.html',
      1 => 1466487201,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5768d1a4a0e532_89576492 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>HomePage Study Buddy</title>
	<meta name="description" content="GamificationPlatform">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<!-- Custom themes -->
	<link rel="stylesheet" type="text/css" href="../css/Homepage.css">
	<link rel="stylesheet" type="text/css" href="../css/NavBar.css">
	<link rel="stylesheet" type="text/css" href="../css/Modulplan.css">
	<link rel="stylesheet" type="text/css" href="../css/Achievements.css">
	<link rel="stylesheet" type="text/css" href="../css/Instructor.css">
	<!-- Font -->
	<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

</head>

<body>
	<!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
		<a class="navbar-brand" href="#">
			<?php if (isset($_smarty_tpl->tpl_vars['currentInstructor']->value)) {?>
				<a class="navbar-brand" href="#">Study Buddy Admin</a>
			<?php }?>
			<?php if (!isset($_smarty_tpl->tpl_vars['currentInstructor']->value)) {?>
				<a class="navbar-brand" href="#">Study Buddy</a>
			<?php }?>
          <button type="button" class="navbar-toggle collapsed" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">

						<?php if (!isset($_smarty_tpl->tpl_vars['currentInstructor']->value)) {?>
						<li class="divider-vertical"></li>
            <li id="home"><a href="index.php?controller=UserController&action=showHome">Home</a></li>
            <li class="divider-vertical"></li>
						<?php }?>

						<?php if (isset($_smarty_tpl->tpl_vars['currentInstructor']->value)) {?>
						<li class="divider-vertical"></li>
            <li id="home"><a href="index.php?controller=UserController&action=showAdminTools">Tools</a></li>
            <li class="divider-vertical"></li>
						<?php }?>

						<?php if (!isset($_smarty_tpl->tpl_vars['currentUser']->value)) {?>
						<!--<li><a id="modulplan" href="index.php?controller=UserController&action=showModulplan">Modulplan</a></li>
						<li class="divider-vertical"></li>
						<li><a id="achievements" href="index.php?controller=UserController&action=showAchievements">Achievements</a></li> -->
						<?php }?>

						<?php if (isset($_smarty_tpl->tpl_vars['currentUser']->value)) {?>
						<li><a id="modulplan" href="index.php?controller=UserController&action=showModulplan">Modulplan</a></li>
            <li class="divider-vertical"></li>
            <li><a id="achievements" href="index.php?controller=UserController&action=showAchievements">Achievements</a></li>
						<?php }?>
					</ul>
          <ul class="nav navbar-nav navbar-right">

						<?php if (!isset($_smarty_tpl->tpl_vars['currentUser']->value)) {?>
							<?php if (!isset($_smarty_tpl->tpl_vars['currentInstructor']->value)) {?>
								<li class="divider-vertical"></li>
								<li><a href="index.php?controller=UserController&action=login">Login</a></li>
							<?php }?>
						<?php }?>

						<?php if (isset($_smarty_tpl->tpl_vars['currentUser']->value)) {?>
							<li class="divider-vertical"></li>
							<li><a href="index.php?controller=UserController&action=logoutUser">Logout</a></li>
						<?php }?>

						<?php if (isset($_smarty_tpl->tpl_vars['currentInstructor']->value)) {?>
							<li class="divider-vertical"></li>
							<li><a href="index.php?controller=UserController&action=logoutInstructor">Logout</a></li>
						<?php }?>


						</ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

<?php if (isset($_smarty_tpl->tpl_vars['currentInstructor']->value)) {?>
			<div class="container">
				<div class="row">
					<div id="maincontent" class="col-xs-8">
					<h1>Instructor Content</h1>
						<?php echo $_smarty_tpl->tpl_vars['homepage_content']->value;?>

					</div>
				</div>
			</div>
<?php }?>

<?php if (!isset($_smarty_tpl->tpl_vars['currentInstructor']->value)) {?>
	<?php if (!isset($_smarty_tpl->tpl_vars['currentUser']->value)) {?>
			<div class="container">
					<div class="row">
						<div id="maincontent" class="col-xs-8">
							<h1>Not Logged In Content LOGIN</h1>
							<?php echo $_smarty_tpl->tpl_vars['homepage_content']->value;?>

						</div>
					</div>
			</div>
	<?php }
}?>

<?php if (isset($_smarty_tpl->tpl_vars['currentUser']->value)) {?>
	<div class="container">
		<div class="row">
			<div id="maincontent" class="col-xs-8">
				<h1>User Content</h1>
				<?php echo $_smarty_tpl->tpl_vars['homepage_content']->value;?>

			</div>
			<div id="statusbar" class="col-xs-4">
					<div class="col-xs-12">
						<div><div class="progress">
				<div id="progress_cp" class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="220" style="width: 0%">
				CP: 0/220 (0%)
				</div>
				</div></div>
					</div>
					<div class="col-xs-12">
						<div id = "user_fitnesspoints"> <!--<?php echo $_smarty_tpl->tpl_vars['fitnesspoints_content']->value;?>
 -->Fitnesspoints: 9000 Rank: #1 Course: ISD<div>
				</div></div>

				<div class="col-xs-12">
					<form class="form-inline text-center formpadding">
			              <div class="form-group">
			                  <input id="codeinput" type="text" class="form-control" size="20" placeholder="Fitness-Code einlösen..">
			              </div>
			              <button type="submit" class="btn btn-primary">Einlösen</button>
			          </form>
				</div>

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
<?php }?>


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

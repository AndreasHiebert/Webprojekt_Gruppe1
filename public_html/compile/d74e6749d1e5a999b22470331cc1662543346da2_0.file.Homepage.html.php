<?php
/* Smarty version 3.1.29, created on 2016-07-06 18:04:25
  from "C:\xampp\htdocs\WebProjekt\public_html\view\Homepage.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_577d2c09f3e676_63673161',
  'file_dependency' => 
  array (
    'd74e6749d1e5a999b22470331cc1662543346da2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WebProjekt\\public_html\\view\\Homepage.html',
      1 => 1467821064,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_577d2c09f3e676_63673161 ($_smarty_tpl) {
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
	<link rel="stylesheet" type="text/css" href="/css/Homepage.css">
	<link rel="stylesheet" type="text/css" href="/css/NavBar.css">
	<link rel="stylesheet" type="text/css" href="/css/Modulplan.css">
	<link rel="stylesheet" type="text/css" href="/css/Achievements.css">
	<link rel="stylesheet" type="text/css" href="/css/Instructor.css">
	<link rel="stylesheet" type="text/css" href="/css/Registration.css">
	<!-- Font -->
	<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

	<!-- jQuery library -->
	<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"><?php echo '</script'; ?>
>
	<!-- Latest compiled and minified JavaScript -->
	<?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.6/js/bootstrap.min.js"><?php echo '</script'; ?>
>
	<!-- Personal JS -->
	<?php echo '<script'; ?>
 src="../js/Navbar.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="../js/Instructor.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="../js/Modulplan.js"><?php echo '</script'; ?>
>

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

						<?php if (isset($_smarty_tpl->tpl_vars['currentUser']->value)) {?>
						<li class="divider-vertical"></li>
						<li><a id="modulplan" href="index.php?controller=UserController&action=showModulplan">Modulplan</a></li>
            <li class="divider-vertical"></li>
            <li><a id="achievements" href="index.php?controller=UserController&action=showAchievements">Achievements</a></li>
						<li class="divider-vertical"></li>
						<?php }?>
					</ul>
          <ul class="nav navbar-nav navbar-right">

						<?php if (!isset($_smarty_tpl->tpl_vars['currentUser']->value)) {?>
							<?php if (!isset($_smarty_tpl->tpl_vars['currentInstructor']->value)) {?>
								<li class="divider-vertical"></li>
								<li><a href="index.php?controller=UserController&action=showLogin">Login</a></li>
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

		<?php if (!isset($_smarty_tpl->tpl_vars['currentInstructor']->value)) {?>
			<?php if (!isset($_smarty_tpl->tpl_vars['currentUser']->value)) {?>
					<div class="container">
							<div class="row">
								<div id="maincontent" class="col-xs-8">
									<?php echo $_smarty_tpl->tpl_vars['homepage_content']->value;?>

								</div>
							</div>
					</div>
			<?php }?>
		<?php }?>

		<?php if (isset($_smarty_tpl->tpl_vars['currentInstructor']->value)) {?>
					<div class="container">
						<div class="row">
							<div id="maincontent" class="col-xs-8">
								<?php echo $_smarty_tpl->tpl_vars['homepage_content']->value;?>

							</div>
						</div>
					</div>
		<?php }?>

		<?php if (isset($_smarty_tpl->tpl_vars['currentUser']->value)) {?>
			<div class="container">
				<div class="row">
					<div id="maincontent" class="col-xs-9">
						<?php echo $_smarty_tpl->tpl_vars['homepage_content']->value;?>

					</div>
					<div id="statusbar" class="col-xs-3">
							<div class="col-xs-12">
								<div><div class="progress">
						<div id="progress_cp" class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="220" style="width: <?php echo ($_smarty_tpl->tpl_vars['CPReached']->value/$_smarty_tpl->tpl_vars['CPMax']->value)*100;?>
%">
						</div>
						</div></div>
                                                            <div>
                                                                CP: <?php echo $_smarty_tpl->tpl_vars['CPReached']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['CPMax']->value;?>
(<?php echo ($_smarty_tpl->tpl_vars['CPReached']->value/$_smarty_tpl->tpl_vars['CPMax']->value)*100;?>
%)
                                                            </div>
							</div>
							<div class="col-xs-12">
								<div id = "user_fitnesspoints"> Fitnesspoints: <?php echo $_smarty_tpl->tpl_vars['FitnessPointsCurrent']->value;?>
 Rank: #<?php echo $_smarty_tpl->tpl_vars['UserPositon']->value;?>
 Course: <?php echo $_smarty_tpl->tpl_vars['currentUser']->value->getCourseAbbreviation();?>
<div>
						</div></div>
                                                            <?php if (isset($_smarty_tpl->tpl_vars['codeValid']->value)) {?>
                                                            <div class="alert alert-success">
                                                            <strong>Glückwunsch!</strong> Ihr Code wurde erfolgreich eingelöst.
                                                            </div>
                                                            <?php }?>

						<div class="col-xs-12">
							<form action="index.php?controller=UserController&action=testFitnessCode" class="form-inline text-center formpadding" method="post">
					              <div class="form-group">
                                                          <input name="code_input" id="codeinput" type="text" class="form-control" size="20" placeholder="Fitness-Code einlösen..">
					              </div>
                                                            <Button type="submit" class="btn btn-primary" >Einlösen</Button>
					          </form>
						</div>

							</div>

                                            <?php
$_from = $_smarty_tpl->tpl_vars['recentFitnesspoints']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_fitnesspoint_0_saved_item = isset($_smarty_tpl->tpl_vars['fitnesspoint']) ? $_smarty_tpl->tpl_vars['fitnesspoint'] : false;
$_smarty_tpl->tpl_vars['fitnesspoint'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['fitnesspoint']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['fitnesspoint']->value) {
$_smarty_tpl->tpl_vars['fitnesspoint']->_loop = true;
$__foreach_fitnesspoint_0_saved_local_item = $_smarty_tpl->tpl_vars['fitnesspoint'];
?>
							<div  class="panel panel-default">
                                                            <b><p><?php echo $_smarty_tpl->tpl_vars['fitnesspoint']->value->getName();?>
</p></b>
                                                            <p>Erhaltene Fitnesspoints: <?php echo $_smarty_tpl->tpl_vars['fitnesspoint']->value->getValue();?>
</p>
							</div>
                                            <?php
$_smarty_tpl->tpl_vars['fitnesspoint'] = $__foreach_fitnesspoint_0_saved_local_item;
}
if ($__foreach_fitnesspoint_0_saved_item) {
$_smarty_tpl->tpl_vars['fitnesspoint'] = $__foreach_fitnesspoint_0_saved_item;
}
?>

					</div>
				</div>
			</div>
		<?php }?>

</body>
</html>
<?php }
}

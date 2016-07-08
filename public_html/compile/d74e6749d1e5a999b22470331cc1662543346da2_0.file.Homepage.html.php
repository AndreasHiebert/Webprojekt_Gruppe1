<?php
/* Smarty version 3.1.29, created on 2016-07-08 10:39:43
  from "C:\xampp\htdocs\WebProjekt\public_html\view\Homepage.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_577f66cfb422f8_36794134',
  'file_dependency' => 
  array (
    'd74e6749d1e5a999b22470331cc1662543346da2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WebProjekt\\public_html\\view\\Homepage.html',
      1 => 1467967156,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_577f66cfb422f8_36794134 ($_smarty_tpl) {
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
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"><?php echo '</script'; ?>
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
      <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
		<!--<a class="navbar-brand" href="#">-->
			<?php if (isset($_smarty_tpl->tpl_vars['currentInstructor']->value)) {?>
				<a class="navbar-brand" href="#">Study Buddy Admin</a>
			<?php }?>
			<?php if (!isset($_smarty_tpl->tpl_vars['currentInstructor']->value)) {?>
				<a class="navbar-brand" href="#">Study Buddy</a>
			<?php }?>
               
          
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">

						<?php if (isset($_smarty_tpl->tpl_vars['currentUser']->value)) {?>
						<li class="divider-vertical"></li>
						<li><a id="modulplan" href="index.php?controller=ModuleController&action=showModulplan">Modulplan</a></li>
            <li class="divider-vertical"></li>
            <li><a id="achievements" href="index.php?controller=AchievementController&action=showAchievements">Achievements</a></li>
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
        </div>
      </div>
    </nav>
<div id = "theBigBorder">
		<?php if (!isset($_smarty_tpl->tpl_vars['currentInstructor']->value)) {?>
			<?php if (!isset($_smarty_tpl->tpl_vars['currentUser']->value)) {?>
					<div class="container">
							<div class="row">
								<div id="logincontent" class="col-xs-12">
									<?php echo $_smarty_tpl->tpl_vars['homepage_content']->value;?>

								</div>
							</div>
					</div>
			<?php }?>
		<?php }?>

		<?php if (isset($_smarty_tpl->tpl_vars['currentInstructor']->value)) {?>
					<div class="container">
						<div class="row">
							<div id="admincontent" class="col-xs-12">
								<?php echo $_smarty_tpl->tpl_vars['homepage_content']->value;?>

							</div>
						</div>
					</div>
		<?php }?>

		<?php if (isset($_smarty_tpl->tpl_vars['currentUser']->value)) {?>
			<div class="container">
				<div class="row">
					<div id="maincontent" class="col-md-9">
						<?php echo $_smarty_tpl->tpl_vars['homepage_content']->value;?>

					</div>
					<div id="statusbar" class="col-md-3">

						<h1></h1>

            <div class="panel panel-default">
                <div class="panel-body">
                    Sidebar
								</div>
                <div class="panel-footer">  
								    	<div class="panel panel-default">
                          <div class="panel-body">
														  <div>
				                          <div>
                                     Studienfortschritt:
								                      	<div class="progress">
										                        <div id="progress_cp" class="progress-bar progress-bar-success progress-bar-striped active"
										                                            	role="progressbar"
										                                            	aria-valuenow="0"
										                                             	aria-valuemin="0"
										                                            	aria-valuemax="220"
										                                             	style="width: <?php echo $_smarty_tpl->tpl_vars['currentUser']->value->getCurrentCPPercent();?>
%">
					        	                        </div>
					      	                      </div>
                                        <div>
                                            CP Aktuell: <?php echo $_smarty_tpl->tpl_vars['currentUser']->value->getCurrentCp();?>
/<?php echo $_smarty_tpl->tpl_vars['currentUser']->value->getActiveCourseMaxCp();?>
<br>
                                            CP in Prozent: <?php echo $_smarty_tpl->tpl_vars['currentUser']->value->getCurrentCPPercent();?>
%
                                        </div>
					                          </div>
						                  </div>
                              <div>
                                  <br>
								                  <div>
                                      Deine Fitnesspoints: <?php echo $_smarty_tpl->tpl_vars['currentUser']->value->getFitnesspoints($_smarty_tpl->tpl_vars['currentUser']->value);?>
<br>
                                      Durchschnitt: <?php echo $_smarty_tpl->tpl_vars['currentUser']->value->getAVGFitnesspoints();?>
<br><br>
                                      Ranking: #<?php echo $_smarty_tpl->tpl_vars['currentUser']->value->getCurrentRanking();?>
 in
                                      <?php echo $_smarty_tpl->tpl_vars['currentUser']->value->getCurrentCourseAbbreviation();?>

							                  	</div>
                              </div>
                            </div>
                        </div>
						    	<?php if (isset($_smarty_tpl->tpl_vars['codeValid']->value)) {?>
                    <div class="alert alert-success">
                        <strong>Glückwunsch!</strong> Ihr Code wurde erfolgreich eingelöst.
                    </div>
							    <?php }?>
						      <?php if (isset($_smarty_tpl->tpl_vars['codeFalse']->value)) {?>
                      <?php if ($_smarty_tpl->tpl_vars['error']->value == 1) {?>
                        <div class="alert alert-danger">
                          <strong>Achtung!</strong> Ihr Code wurde schon einmal eingelöst.
                        </div>
                       <?php }?>
                  <?php if ($_smarty_tpl->tpl_vars['error']->value == 2) {?>
                      <div class="alert alert-danger">
                           <strong>Achtung!</strong> Ihr Code ist ungültig oder abgelaufen.
                      </div>
                  <?php }?>
              <?php }?>
						  <div>
							    <form action="index.php?controller=FitnesspointController&action=testFitnessCode" class="form-inline text-center" method="post">
                      <div class="panel panel-default">
                          <div class="panel-body">
                              <div class="row form-row">
                                  <input name="code_input" id="codeinput" type="text" class="form-control" size="20" placeholder="Fitness-Code eingeben...">
                              </div>
                              <div class="panel-body">
                              		<Button id="submitbtn" type="submit" class="btn btn-default">Einlösen</Button>
                              </div>
                          </div>
                      </div>
              		  </form>
							</div>

              <div class="panel panel-default">
                  <div class="panel-body">
                      letzte Achievements:
                      <ul class="list-group">
                					<?php
$_from = $_smarty_tpl->tpl_vars['currentUser']->value->getRecentAchievements();
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_achievement_0_saved_item = isset($_smarty_tpl->tpl_vars['achievement']) ? $_smarty_tpl->tpl_vars['achievement'] : false;
$_smarty_tpl->tpl_vars['achievement'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['achievement']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['achievement']->value) {
$_smarty_tpl->tpl_vars['achievement']->_loop = true;
$__foreach_achievement_0_saved_local_item = $_smarty_tpl->tpl_vars['achievement'];
?>
                						<li class="list-group-item">
                            		<b><?php echo $_smarty_tpl->tpl_vars['achievement']->value->getName();?>
</b>
                            		<p>Fitnesspoints: <?php echo $_smarty_tpl->tpl_vars['achievement']->value->getValue();?>
</p>
                						</li>
                					<?php
$_smarty_tpl->tpl_vars['achievement'] = $__foreach_achievement_0_saved_local_item;
}
if ($__foreach_achievement_0_saved_item) {
$_smarty_tpl->tpl_vars['achievement'] = $__foreach_achievement_0_saved_item;
}
?>
                      </ul>
                  </div>
              	</div>
          	</div>
        	</div>
				</div>
			</div>
    </div>
<?php }?>
</div>
</body>
<footer>
	<div class="container">
		<div id = "footerRow" class="row">
			<div id= "footerColumn" class="col-xs-12">
				<br>
				<h2  id = "footerText">Study Buddy by Group I</h2>
			</div>
    </div>
	</div>
</footer>
</html>
<?php }
}

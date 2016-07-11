<?php
/* Smarty version 3.1.29, created on 2016-07-11 17:16:56
  from "C:\xampp\htdocs\WebProjekt\public_html\view\show_instructor.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5783b86822c157_33890643',
  'file_dependency' => 
  array (
    'b6a8e7564de1db4b1f97ae3fce9454e55b90a317' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WebProjekt\\public_html\\view\\show_instructor.html',
      1 => 1468250014,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5783b86822c157_33890643 ($_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['currentInstructor']->value)) {?>
<div class="container text-center" id="instructorContainer">



		<div id="alertBox" class="">
			<div id="alertContent">
				<p id="alertText"></p>
				<span class="glyphicon glyphicon-remove-sign" id="alertGlyph"></span><br>
			</div>
			<div class="progress">
				<div class="" id="alertProgress" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width:0%"></div>
			</div>
		</div>


		<ul class="list-group text-left" id ="tabList">

			<li class="list-group-item listItem" id="listItem0">Admins anzeigen <span class="glyphicon glyphicon-menu-down listItemGlyph" id="listItemGlyph0" style="float:right"></span></li>

			<div id="listItemArea0" class="listItemArea text-center">
			<br><br><br>

				<div class="container-fluid" id="instructorTableArea">

				<table class="table table-striped userTable" id="userTable0">
						<thead>
							<tr>
								<th>Username</th>
								<th>Email</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
							<?php
$_from = $_smarty_tpl->tpl_vars['instructors']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_instructorElem_0_saved_item = isset($_smarty_tpl->tpl_vars['instructorElem']) ? $_smarty_tpl->tpl_vars['instructorElem'] : false;
$_smarty_tpl->tpl_vars['instructorElem'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['instructorElem']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['instructorElem']->value) {
$_smarty_tpl->tpl_vars['instructorElem']->_loop = true;
$__foreach_instructorElem_0_saved_local_item = $_smarty_tpl->tpl_vars['instructorElem'];
?>
							<tr>
								<td><?php echo $_smarty_tpl->tpl_vars['instructorElem']->value->getName();?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['instructorElem']->value->getEmail();?>
</td>
								<td><?php if ($_smarty_tpl->tpl_vars['instructorElem']->value->getApproved() == 0) {?>
										Inaktiv (<a href="index.php?controller=InstructorController&action=approveInstructor&id=<?php echo $_smarty_tpl->tpl_vars['instructorElem']->value->getId();?>
&update=1">Freischalten</a>)
									<?php } else { ?>
										Freigeschaltet
									<?php }?></td>
							</tr>
							<?php
$_smarty_tpl->tpl_vars['instructorElem'] = $__foreach_instructorElem_0_saved_local_item;
}
if ($__foreach_instructorElem_0_saved_item) {
$_smarty_tpl->tpl_vars['instructorElem'] = $__foreach_instructorElem_0_saved_item;
}
?>
						</tbody>
					</table>

				</div>
			<br><br><br>
			</div>

			<li class="list-group-item listItem" id="listItem1">User anzeigen <span class="glyphicon glyphicon-menu-down listItemGlyph" id="listItemGlyph0" style="float:right"></span></li>



				<div id="listItemArea1" class="listItemArea text-center">
				<br><br><br>

				<div class="container-fluid" id="userTableArea">

					<table class="table table-striped userTable" id="userTable1">
						<thead>
							<tr>
								<th>Username</th>
								<th>Anmeldedatum</th>
								<th>Email</th>
								<th>Fitnesspoints</th>
							</tr>
						</thead>
						<tbody>
							<?php
$_from = $_smarty_tpl->tpl_vars['users']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_userElem_1_saved_item = isset($_smarty_tpl->tpl_vars['userElem']) ? $_smarty_tpl->tpl_vars['userElem'] : false;
$_smarty_tpl->tpl_vars['userElem'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['userElem']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['userElem']->value) {
$_smarty_tpl->tpl_vars['userElem']->_loop = true;
$__foreach_userElem_1_saved_local_item = $_smarty_tpl->tpl_vars['userElem'];
?>
							<tr>
								<td><?php echo $_smarty_tpl->tpl_vars['userElem']->value->getName();?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['userElem']->value->getRegDate();?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['userElem']->value->getEmail();?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['userElem']->value->getFitnesspoints($_smarty_tpl->tpl_vars['userElem']->value);?>
</td>
							</tr>
							<?php
$_smarty_tpl->tpl_vars['userElem'] = $__foreach_userElem_1_saved_local_item;
}
if ($__foreach_userElem_1_saved_item) {
$_smarty_tpl->tpl_vars['userElem'] = $__foreach_userElem_1_saved_item;
}
?>
						</tbody>
					</table>
				</div>


				<br><br><br>
				</div>


			<li class="list-group-item listItem" id="listItem2">Achievements erstellen<span class="glyphicon glyphicon-menu-down listItemGlyph" id="listItemGlyph1" style="float:right"></li>

				<div id="listItemArea2" class="listItemArea text-center">
				<br><br><br>

						<form class="form-class form-inline" width="100%" id="createAchievementForm" role="form" method="" action="javascript:createAchievement()">
								<H4> Ein Achievement erstellen:</H4>
								<input class="form-control" size="80%" placeholder="Name des Achievements" type="text" id="achievementName" maxlength="30" required></input>
								<input class="form-control" size="10%" id="achievementPoints" type="number" placeholder="0" min="0" step="01" required></input>
								<input class="form-control" size="10%" type="submit" value="Achievement erstellen"></input>
						</form>

						<br><br><br>

						<form class="form-class form-inline" method="" width="100%" action="#">
							<h4>Generierter Code:</h4>
							<input class="form-control text-center codeInput" size="33%" id="codeInput0" type="text" readonly></input>
							<input class="form-control text-center codeInput" id="codeInput1" size="33%" type="text" readonly></input>
							<input class="form-control text-center codeInput" id="codeInput2" size="33%" type="text" readonly></input>
					</form>


				<br><br><br>
				</div>


			<li class="list-group-item listItem" id="listItem3">Achievements anzeigen <span class="glyphicon glyphicon-menu-down listItemGlyph" id="listItemGlyph2" style="float:right"></li>

				<div id="listItemArea3" class="container-fluid listItemArea text-center">
					<br><br><br>

					<table class="table table-striped" id="achievementsListTable">
						<thead>
							<tr>
								<th>Name</th>
								<th>Fitnesspoints</th>
								<th>Code</th>
								<th>Ablaufdatum</th>
							</tr>
						</thead>
						<tbody>
							<?php
$_from = $_smarty_tpl->tpl_vars['achievements']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_achievement_2_saved_item = isset($_smarty_tpl->tpl_vars['achievement']) ? $_smarty_tpl->tpl_vars['achievement'] : false;
$_smarty_tpl->tpl_vars['achievement'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['achievement']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['achievement']->value) {
$_smarty_tpl->tpl_vars['achievement']->_loop = true;
$__foreach_achievement_2_saved_local_item = $_smarty_tpl->tpl_vars['achievement'];
?>
							<tr>
								<td><?php echo $_smarty_tpl->tpl_vars['achievement']->value->getName();?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['achievement']->value->getValue();?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['achievement']->value->getCode();?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['achievement']->value->getCreatedDate();?>
</td>
							</tr>
							<?php
$_smarty_tpl->tpl_vars['achievement'] = $__foreach_achievement_2_saved_local_item;
}
if ($__foreach_achievement_2_saved_item) {
$_smarty_tpl->tpl_vars['achievement'] = $__foreach_achievement_2_saved_item;
}
?>
						</tbody>
					</table>

					<br><br><br>
				</div>


		</ul>

	</div>
<?php }
}
}

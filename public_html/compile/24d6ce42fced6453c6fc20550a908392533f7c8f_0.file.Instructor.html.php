<?php
/* Smarty version 3.1.29, created on 2016-06-21 01:23:37
  from "C:\xampp\htdocs\WebProjekt\public_html\view\Instructor.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57687af9f2d0c9_51520495',
  'file_dependency' => 
  array (
    '24d6ce42fced6453c6fc20550a908392533f7c8f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WebProjekt\\public_html\\view\\Instructor.html',
      1 => 1466464976,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57687af9f2d0c9_51520495 ($_smarty_tpl) {
?>
<div class="container text-center" id="bodyContainer">



		<div id="alertBox" class="">
			<div id="alertContent">
				<p id="alertText"></p>
				<span class="glyphicon glyphicon-remove-sign" id="alertGlyph"></span><br>
			</div>
			<div class="progress">
				<div class="" id="alertProgress" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="width:0%"></div>
			</div>
		</div>

		<br><br><br><br><br><br>

		<ul class="list-group text-left">

			<li class="list-group-item listItem" id="listItem0">User bearbeiten <span class="glyphicon glyphicon-menu-down listItemGlyph" id="listItemGlyph0" style="float:right"></span></li>



				<div id="listItemArea0" class="listItemArea text-center">
				<br><br><br>

				<div class="container-fluid" id="userTableArea">

				<button class="btn btn-default userTableButton" id="userTableButton0">Administratoren <span class="glyphicon glyphicon-triangle-bottom" id="userTableGlyph0"></span></button>

					<table class="table table-striped userTable" id="userTable0">
						<thead>
							<tr>
								<th>Username</th>
								<th>Anmeldedatum</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Placeholder</td>
								<td>Irgendwann</td>
								<td>
									<span class="glyphicon glyphicon-minus userDowngrade"></span>
									<span class="glyphicon glyphicon-remove userRemove"></span>
								</td>
							</tr>
							<tr>
								<td>Placeholder</td>
								<td>Irgendwann</td>
								<td>
									<span class="glyphicon glyphicon-minus userDowngrade"></span>
									<span class="glyphicon glyphicon-remove userRemove"></span>
								</td>
							</tr>
							<tr>
								<td>Placeholder</td>
								<td>Irgendwann</td>
								<td>
									<span class="glyphicon glyphicon-minus userDowngrade"></span>
									<span class="glyphicon glyphicon-remove userRemove"></span>
								</td>
							</tr>
						</tbody>
					</table>


				<br><br><br>

				<button class="btn btn-default userTableButton" id="userTableButton1">User <span class="glyphicon glyphicon-triangle-bottom" id="userTableGlyph1"></span></button>


					<table class="table table-striped userTable" id="userTable1">
						<thead>
							<tr>
								<th>Username</th>
								<th>Anmeldedatum</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Placehoder</td>
								<td>Irgendwann</td>
								<td>
									<span class="glyphicon glyphicon-plus userUpgrade"></span>
									<span class="glyphicon glyphicon-remove userRemove"></span>
								</td>
							</tr>
							<tr>
								<td>Placehoder</td>
								<td>Irgendwann</td>
								<td>
									<span class="glyphicon glyphicon-plus userUpgrade"></span>
									<span class="glyphicon glyphicon-remove userRemove"></span>
								</td>
							</tr>
							<tr>
								<td>Placehoder</td>
								<td>Irgendwann</td>
								<td>
									<span class="glyphicon glyphicon-plus userUpgrade"></span>
									<span class="glyphicon glyphicon-remove userRemove"></span>
								</td>
							</tr>
							<tr>
								<td>Placehoder</td>
								<td>Irgendwann</td>
								<td>
									<span class="glyphicon glyphicon-plus userUpgrade"></span>
									<span class="glyphicon glyphicon-remove userRemove"></span>
								</td>
							</tr>
							<tr>
								<td>Placehoder</td>
								<td>Irgendwann</td>
								<td>
									<span class="glyphicon glyphicon-plus userUpgrade"></span>
									<span class="glyphicon glyphicon-remove userRemove"></span>
								</td>
							</tr>
							<tr>
								<td>Placehoder</td>
								<td>Irgendwann</td>
								<td>
									<span class="glyphicon glyphicon-plus userUpgrade"></span>
									<span class="glyphicon glyphicon-remove userRemove"></span>
								</td>
							</tr>
							<tr>
								<td>Placehoder</td>
								<td>Irgendwann</td>
								<td>
									<span class="glyphicon glyphicon-plus userUpgrade"></span>
									<span class="glyphicon glyphicon-remove userRemove"></span>
								</td>
							</tr>
						</tbody>
					</table>
				</div>


				<br><br><br>
				</div>


			<li class="list-group-item listItem" id="listItem1">Achievements erstellen<span class="glyphicon glyphicon-menu-down listItemGlyph" id="listItemGlyph1" style="float:right"></li>

				<div id="listItemArea1" class="listItemArea text-center">
				<br><br><br>

						<form class="form-class form-inline" width="100%" id="createAchievementForm" role="form" method="" action="javascript:createAchievement()">
								<H4> Ein Achievement erstellen:</H4>
								<input class="form-control" size="80%" placeholder="Name des Achievements" type="text" id="achievementName" maxlength="80"></input>
								<input class="form-control" size="10%" id="achievementPoints" type="number" placeholder="0" min="0" step="01"></input>
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


			<li class="list-group-item listItem" id="listItem2">Achievements bearbeiten <span class="glyphicon glyphicon-menu-down listItemGlyph" id="listItemGlyph2" style="float:right"></li>

				<div id="listItemArea2" class="container-fluid listItemArea text-center">
					<br><br><br>


					<button class="btn btn-default" id="achievementsListButton">Vorhandene Achievements <span class="glyphicon glyphicon-triangle-bottom" id="achievementsListGlyph"></span></button>

					<table class="table table-striped" id="achievementsListTable">
						<thead>
							<tr>
								<th>Achievement</th>
								<th>Punktzahl</th>
								<th>Code</th>
								<th></tr>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Placeholder</td>
								<td>100000</td>
								<td>ABCDE-FGHIJ-KLMNO</td>
								<td>
									<span class="glyphicon glyphicon-remove achievementRemove"></span>
								</td>
							</tr>
						</tbody>
					</table>


					<br><br><br>

				</div>


		</ul>

	</div>
<?php }
}

<!DOCTYPE HTML>
<html lang="de">
	<head>

		<title>StuddyBuddy | Instructor</title>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, inital-scale=1.0, user-scalable=no">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
		<!-- Latest compiled JavaScript -->
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
		<link rel="stylesheet" href="instructor.css" type="text/css">
		<script src="instructor.js"></script>

	</head>





	<header>
		Willkommen, XY!	

		<div class="dropdown dropdown-left" id="headerMenu">
			<button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
				<span class="glyphicon glyphicon-cog"></span>
			</button>
			<ul class="dropdown-menu dropdown-menu-right">
				<li><a href="#"><span class="glyphicon glyphicon-wrench"></span> Account</a></li>
				<li><a href="#"><span class="glyphicon glyphicon-off"></span> Logout</a></li>
			</ul>
		</div>

	</header>








	<div class="container text-center" id="bodyContainer">

		<br><br><br><br><br><br>

		<ul class="list-group text-left">
			
			<li class="list-group-item listItem" id="listItem0">Code generieren <span class="glyphicon glyphicon-menu-down listItemGlyph" id="listItemGlyph0" style="float:right"></span></li>
			


				<div id="listItemArea0" class="listItemArea text-center">
					<br><br><br>
					<form class="form-class form-inline" method="" action="#">
						<input class="form-control text-center codeInput" id="codeInput0" type="text" readonly></input>
						<input class="form-control text-center codeInput" id="codeInput1" type="text" readonly></input>
						<input class="form-control text-center codeInput" id="codeInput2" type="text" readonly></input>
						<br><br><br>
						<input class="form-control" id="codeGenerator" type="submit" value="Code generieren"></input>
					</form>
					<br><br><br>
				</div>


			<li class="list-group-item listItem" id="listItem1">User bearbeiten <span class="glyphicon glyphicon-menu-down listItemGlyph" id="listItemGlyph1" style="float:right"></li>

				<div id="listItemArea1" class="listItemArea text-center">
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
									<span class="glyphicon glyphicon-minus"></span>  
									<span class="glyphicon glyphicon-remove"></span>
								</td>
							</tr>
							<tr>
								<td>Placeholder</td>
								<td>Irgendwann</td>
								<td>
									<span class="glyphicon glyphicon-minus"></span>  
									<span class="glyphicon glyphicon-remove"></span>
								</td>
							</tr>
							<tr>
								<td>Placeholder</td>
								<td>Irgendwann</td>
								<td>
									<span class="glyphicon glyphicon-minus"></span>  
									<span class="glyphicon glyphicon-remove"></span>
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
									<span class="glyphicon glyphicon-plus"></span> 
									<span class="glyphicon glyphicon-remove"></span>
								</td>
							</tr>
							<tr>
								<td>Placehoder</td>
								<td>Irgendwann</td>
								<td>
									<span class="glyphicon glyphicon-plus"></span>  
									<span class="glyphicon glyphicon-remove"></span>
								</td>
							</tr>
							<tr>
								<td>Placehoder</td>
								<td>Irgendwann</td>
								<td>
									<span class="glyphicon glyphicon-plus"></span> 
									<span class="glyphicon glyphicon-remove"></span>
								</td>
							</tr>
							<tr>
								<td>Placehoder</td>
								<td>Irgendwann</td>
								<td>
									<span class="glyphicon glyphicon-plus"></span> 
									<span class="glyphicon glyphicon-remove"></span>
								</td>
							</tr>
							<tr>
								<td>Placehoder</td>
								<td>Irgendwann</td>
								<td>
									<span class="glyphicon glyphicon-plus"></span>  
									<span class="glyphicon glyphicon-remove"></span>
								</td>
							</tr>
							<tr>
								<td>Placehoder</td>
								<td>Irgendwann</td>
								<td>
									<span class="glyphicon glyphicon-plus"></span>  
									<span class="glyphicon glyphicon-remove"></span>
								</td>
							</tr>
							<tr>
								<td>Placehoder</td>
								<td>Irgendwann</td>
								<td>
									<span class="glyphicon glyphicon-plus"></span>  
									<span class="glyphicon glyphicon-remove"></span>
								</td>
							</tr>
						</tbody>
					</table>
				</div>

				<br><br><br>
				</div>


			<li class="list-group-item listItem" id="listItem2">Achievements bearbeiten <span class="glyphicon glyphicon-menu-down listItemGlyph" id="listItemGlyph2" style="float:right"></li>

				<div id="listItemArea2" class="container-fluid listItemArea text-center">
					<br><br><br>

						<form class="form-class form-inline" width="100%" role="form" method="" action="">
								<input class="form-control" size="80%" placeholder="Name des Achievements" type="text" maxlength="80"></input>
								<input class="form-control" size="10%" type="number" placeholder="0" min="0" step="01"></input>
								<input class="form-control" size="10%" type="submit" value="Achievement erstellen"></input>
						</form> 

					<br><br><br>

					<button class="btn btn-default" id="achievementsListButton">Vorhandene Achievements <span class="glyphicon glyphicon-triangle-bottom" id="achievementsListGlyph"></span></button>

					<table class="table table-striped" id="achievementsListTable">
						<thead>
							<tr>
								<th>Achievement</th>
								<th>Punktzahl</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Placeholder</td>
								<td>100000</td>
							</tr>
						</tbody>
					</table>

					
					<br><br><br>

				</div>


		</ul>

	</div>


</html>
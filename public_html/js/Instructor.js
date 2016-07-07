$(document).ready(function() {



		interval = 0;

		/* CLEAR INPUTS */

		$("html").find(".form-control[type=text], .form-control[type=number]").each(function() {
			$(this).val("");
		});



		/* ALERT BOX */

		$("#alertGlyph").click(function() {
			$("#alertBox").toggle();
			alertProgressReset();
		});




		/* USER LISTS */

		$(".userTableButton").click(function() {

			var id = $(this).attr("id");
			num = id.charAt(id.length-1);
			id = "#userTable"+num;

			$(id).toggle();

			id = "#userTableGlyph"+num;

			console.log(id);

			if( $(id).hasClass("glyphicon-triangle-bottom") ) {
				$(id).removeClass("glyphicon-triangle-bottom");
				$(id).addClass("glyphicon-triangle-top");
			} else {
				$(id).removeClass("glyphicon-triangle-top");
				$(id).addClass("glyphicon-triangle-bottom");
			}

		});

		$(".userRemove").click(function() {
			alertShow("success","Der User wurde entfernt!");
		});

		$(".userUpgrade").click(function() {
			alertShow("success","Der User wurde zum Admin ernannt!");
		});

		$(".userDowngrade").click(function() {
			alertShow("success","Dem User wurden die Administratoren-Rechte entzogen!");
		})



		/* ACHIEVEMENT LIST */

		$("#achievementsListButton").click(function() {
			if( $("#achievementsListTable").css("display") == "none" ) {
				$("#achievementsListTable").toggle();
				$("#achievementsListGlyph").removeClass("glyphicon-triangle-bottom");
				$("#achievementsListGlyph").addClass("glyphicon-triangle-top");
			} else {
				$("#achievementsListTable").toggle();
				$("#achievementsListGlyph").removeClass("glyphicon-triangle-top");
				$("#achievementsListGlyph").addClass("glyphicon-triangle-bottom");
			}
		});


		$(".achievementRemove").click(function() {
			alertShow("success","Das Achievement wurde gelöscht!");
		})


		/* LIST ELEMENTS ----------------------------------------------------------------------- */


		$(".listItem").on({

			click: function() {
				var id = $(this).attr('id');
				var num = id.charAt(id.length-1);

				if( !$(this).hasClass("active") ) {
						$(".listItem").removeClass("active");
						$(this).addClass("active");


						$(".listItemArea").slideUp();
						id = ("#listItemArea"+num);
						$(id).slideDown();

						id= ("#listItemGlyph"+num);

						$("html").find(".listItemGlyph").each(function() {
							$(this).removeClass("glyphicon-menu-up");
							$(this).addClass("glyphicon-menu-down");
						});

						$(id).removeClass("glyphicon-menu-down");
						$(id).addClass("glyphicon-menu-up");

					} else {
						$(this).removeClass("active");
						id = ("#listItemArea"+num);
						$(id).slideUp();
						id = ("#listItemGlyph"+num);
						$(id).removeClass("glyphicon-menu-up");
						$(id).addClass("glyphicon-menu-down");

					}
			}

		});



});





function createAchievement() {

	if( ($("#achievementName").val() == "") || ($("#achievementPoints").val() == "") ) {

		alertShow("danger","Name/Punkzahl müssen angegeben werden!");

	} else {


		/* GENERATE CODE & CREATE ACHIEVEMENT */

			var abc = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','0','1','2','3','4','5','6','7','8','9'];
			var code = new Array(15);
			var num, str;

			for(var i=0; i<code.length; i++) {
				num = Math.floor( Math.random() * abc.length );
				code[i] = abc[num];
			}


			var part = code.slice(0,5);
			part = part.toString().replace(/,/g, '');
			$("#codeInput0").val(part);
			part = code.slice(5,10);
			part = part.toString().replace(/,/g, '');
			$("#codeInput1").val(part);
			part= code.slice(10);
			part = part.toString().replace(/,/g, '');
			$("#codeInput2").val(part);	


		//alertShow("success","Das Achievement wurde erstellt!");
		str = code.join("");
		location.href="index.php?controller=InstructorController&action=createAchievement&code="+str+"&name="+$("#achievementName").val()+"&points="+$("#achievementPoints").val();
		}

}


function alertShow(type, text) {
	$("#alertBox").hide();
	$("#alertBox").removeClass();
	$("#alertBox").addClass("alert alert-"+type);
	$("#alertText").text(text);
	$("#alertBox").show();

	$("#alertProgress").removeClass();
	$("#alertProgress").addClass("progress-bar progress-bar-"+type);


	if (interval != 0 ) {
		alertProgressReset();
	}

		interval = setInterval(function() {
					$("#alertProgress").attr("aria-valuenow", ( parseInt( $("#alertProgress").attr("aria-valuenow") ) + 25) );
					progress = $("#alertProgress").attr("style").split(":");
					progress = progress[1].split("%");
					progress = parseInt(progress)+25;
					
					if ( parseInt($("#alertProgress").attr("aria-valuenow")) > 100) {
						alertProgressReset();
						$("#alertBox").hide();
					} else {
						$("#alertProgress").css("width", progress+"%");
					}
				}, 1000);

}	

function alertProgressReset() {
	window.clearInterval(interval);
	interval = 0;
	$("#alertProgress").attr("aria-valuenow","0");
	$("#alertProgress").attr("style","width:0%");
	$("#alertProgress").css("width","0%");
}
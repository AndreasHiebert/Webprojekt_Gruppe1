$(document).ready(function() {



		/* CLEAR INPUTS */

		$("html").find(".form-control[type=text], .form-control[type=number]").each(function() {
			$(this).val("");
		});





		/* CODE GENERATOR */

		$("#codeGenerator").click(function() {

			var abc = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','0','1','2','3','4','5','6','7','8','9'];
			var code = new Array(15);
			var num;

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

		$(".glyphicon-remove").click(function() {
			alert('Remove User from database');
		});

		$(".glyphicon-plus").click(function() {
			alert('Upgrade user');
		});

		$(".glyphicon-minus").click(function() {
			alert('Downgrade user');
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
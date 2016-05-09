// selectable elements navbar
$(".nav a").on("click", function(){
   $(".nav").find(".active").removeClass("active");
   $(this).parent().addClass("active");
});

// CP and EXP 
var CP_index = 0;
var EXP_index = 0;
 
$('#btn1').click( function(){
  CP_index = CP_index + 10; 
  $("#maincontent").load("Instructor.html");
  $('#progress_cp').html(CP_index + "/220"+ "(" + (Math.round((CP_index/2.2) * 1) / 1) + "%)");
  $('#progress_cp').css('width', CP_index/2.2 +'%').attr('aria-valuenow', CP_index);
});

$('#btn2').click( function(){
  EXP_index = EXP_index + 10;
  $('#progress_exp').html(EXP_index + "/100"+ "(" + (Math.round(EXP_index * 1) / 1) + "%)");
  $('#progress_exp').css('width', EXP_index+'%').attr('aria-valuenow', EXP_index); 
});

var count_btn3 = 0;
$('#btn3').click( function(){
  CP_index  = 0; 
  EXP_index = 0; 
  $('#progress_cp').html(CP_index + "/220"+ "(" + (Math.round((CP_index/2.2) * 1) / 1) + "%)");
  $('#progress_exp').html(EXP_index + "/100"+ "(" + (Math.round(EXP_index * 1) / 1) + "%)");
  $('#progress_cp').css('width', CP_index+'%').attr('aria-valuenow', CP_index);
  $('#progress_exp').css('width', EXP_index+'%').attr('aria-valuenow', EXP_index);
});

function load_home(){
    document.getElementById("maincontent").innerHTML='<object type="type/html" data="Rangliste.html" ></object>';
}

$('#rangliste').click(function(){
    
});
  
  
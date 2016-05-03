// selectable elements navbar
$(".nav a").on("click", function(){
   $(".nav").find(".active").removeClass("active");
   $(this).parent().addClass("active");
});

// CP and EXP 
var CP_index = 0;
var EXP_index = 0;

var btn1 = document.getElementById("btn1");
btn1.addEventListener("click", function(){
  $('.progress-bar').css('width', CP_index+'%').attr('aria-valuenow', CP_index);
});

var btn2 = document.getElementById("btn2");
btn2.addEventListener("click", function(){
	document.getElementById("btn2").innerHTML = "you did it!";
});

var count_btn3 = 0;
var btn3 = document.getElementById("btn3");
btn3.addEventListener("click", function(){
	count_btn3++;
	
	if(count_btn3 >= 2){
		window.open('https://media.giphy.com/media/UgM7H8OEmf4mQ/giphy.gif', '_content');
}});


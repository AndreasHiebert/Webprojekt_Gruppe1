$(document).ready(function(){

var highestBox = 0;
		$('.btn-group-justified .btn').each(function(){
						if($(this).height() > highestBox){
						highestBox = $(this).height();
		}
});
$('.btn-group-justified .btn').height(highestBox);

});

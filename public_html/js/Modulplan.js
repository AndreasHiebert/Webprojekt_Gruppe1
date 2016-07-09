// groupbox autosize buttons modulplan
$(document).ready(function(){

var highestBox = 0;
		$('.btn-group-justified .btn').each(function(){
						if($(this).height() > highestBox){
						highestBox = $(this).height();
		}
});
$('.btn-group-justified .btn').height(highestBox);

});

$(window).resize(function() {
  if ($(window).width() < 770) {
    $('#modulplan_row').removeClass('btn-group btn-group-justified');
    $('#modulplan_row').addClass('btn-group-vertical');
  } else {
    $('#modulplan_row').addClass('btn-group btn-group-justified');
    $('#modulplan_row').removeClass('btn-group-vertical');
  }
});

$('#gradeModal').on('show.bs.modal', function (e) {
		var name = e.relatedTarget.name;
		window.alert(name);
});

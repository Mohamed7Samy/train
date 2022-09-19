
$('.showModal').click(function() {
	
	// chang the td text in front
	$(this).parent().prev().text('Read');

	// get row id 
	var id = $(this).attr('data-id');

	var serveSide = 'function/updateMessage.php';

	// update view to 1 with ajax
	$.post(serveSide , {id} , function(data){

		console.log(data);

	})

})
$('.showModal').click(function() {
	
	// chang the td text in front
	 $(this).parent().parent().parent().parent().parent().parent().remove();

	// get row id 
	var id = $(this).attr('delete-id');

	var serveSide = 'function/userdelete.php';

	// update view to 1 with ajax
	$.get(serveSide , {id} , function(data){

		console.log(data);

	})

})
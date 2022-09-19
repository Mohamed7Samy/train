$('.search').keydown(function() {
	
	// chang the td text in front
	

	// get row id 
	var name = $(this).val();
	// console.log(name);
	var serveSide = 'fun/search.php';

	
	// update view to 1 with ajax
	$.get(serveSide , {name} , function(data){

		$(".datar-recive").html(data);

	})

})
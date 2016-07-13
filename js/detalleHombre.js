	var id;
	$(document).ready(function(){
		id=$('#idDetalle').val();

	});
	console.log(id);
	$(document).ready(function(){
	 $.get('./php/consultaHombre.php?id='+id,
	      function(data){
	        console.log(data);
	        $('#detalle').append(data);
	  });
	});
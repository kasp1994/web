

$('#ingresoUsuario').submit(function(event){
	event.preventDefault();
	$.post('crear-usuario.php', 
		$('#ingresoUsuario').serialize(),
			function(response){
				if(response.return){
					alert("Registrado exitosamente!!!");
					document.location.href='index.html';
				}else{
					alert('Error al Inscribir en el Servidor');

				}
			});

});
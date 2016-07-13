var id=1;
function retornarId(){
	return id;
}
function obtenerId(data){
	id=data;
	location="./detalle.php?id="+id;
}
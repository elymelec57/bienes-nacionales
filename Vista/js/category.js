var modal = document.getElementById("modal-category"),
btn = document.getElementById("modal-cat"),
span = document.getElementById("close-category"),
origin = window.location.origin

btn.onclick = function() {
  modal.style.display = "block";
}

span.onclick = function() {
  modal.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

$.ajax(`${origin}/categorias/get`)
.done((data) =>
{
	var data = JSON.parse(data)

  data.map(i =>
  {
  	$('#el')
  	.append(`
  		<tr>
  			<td>${i.codigo_Categoria}</td>
  			<td>${i.presupuesto_Categoria}</td>
  			<td>${i.clasificacion_Categoria}</td>
  			<td>${i.denominacion_Categoria}</td>
  			<td>
  				<button title="Editar"><i class="fa fa-pen"></i></button>
					<button onclick="destroy(${i.codigo_Categoria})" title="Borrar"><i class="fa fa-trash-alt"></i></button>
  			</td>
  		</tr>`)
  })
})
.fail((err) => console.log(err))


$('#catForm').submit(function (event)
{
  event.preventDefault();

	if(!validator('#catForm'))
	{

		$.ajax({
				type: "POST",
				url: `${origin}/categorias/store`,
				data: $('#catForm').serializeArray(),
				dataType: "json"
			})
		.done(res => {
				if (res.error == 23000)
					Swal.fire({
					  icon: 'error',
					  title: 'Error',
					  text: 'Este codigo ya esta registrado'
					})
				else
					Swal.fire({
					  position: 'top-end',
					  icon: 'success',
					  title: 'La categoría ha sido registrada',
					  showConfirmButton: false,
					  timer: 1500
					})
				setTimeout('redirect()', 1500);		
			})
		.fail(error => console.log(error))
	}
})

function destroy(id)
{
	Swal.fire({
	  title: '¿Desea eliminar la categoria?',
	  text: "¡No podrás revertir esto!",
	  icon: 'warning',
	  showCancelButton: true,
	  confirmButtonColor: '#3085d6',
	  cancelButtonColor: '#d33',
	  cancelButtonText: 'Cancelar',
	  confirmButtonText: '¡Si, eliminar!',
	})
	.then((result) => 
	{
  	if (result.isConfirmed) 
  	{
   		Swal.fire(
    	'¡Eliminado!',
    	'Se ha eliminado la categoría.',
    	'success'
  		),
  		setTimeout('redirect()', 1000);
			$.ajax({
				type: "POST",
				url: `${origin}/categorias/delete`,
				data: {id:id},
				dataType: "json"
			})
			.fail(error => console.log(error))
		}
	})	
}

function redirect()
{
	location.replace(`${origin}/categorias`)
}
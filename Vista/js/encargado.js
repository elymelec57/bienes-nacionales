var modal = document.getElementById("modal-encargado"),
btn = document.getElementById("btn-encargado"),
span = document.getElementById("close-encargado"),
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

$.ajax(`${origin}/encargados/get`)
.done((data) =>
{
	var data = JSON.parse(data)

  data.map(i =>
  {
  	if (i.cargo_Encarg !== 'administrador')
		{	
			$('#el')
	  	.append(`
	  		<tr>
	  			<td>${i.nombre_Encarg}</td>
	  			<td>${i.apellido_Encarg}</td>
	  			<td>${i.cargo_Encarg}</td>
	  			<td>${i.cedula_Encarg}</td>
	  			<td>${i.telefono_Encarg}</td>
	  			<td>
	  				<button title="Editar"><i class="fa fa-pen"></i></button>
						<button onclick="destroy(${i.cedula_Encarg})" title="Borrar"><i class="fa fa-trash-alt"></i></button>
	  			</td>
	  		</tr>`)
		}	
  })
})
.fail(() => alert('error'))

$('#encarForm').submit(function (event)
{
  event.preventDefault();

  if(!validator('#encarForm'))
	{
		$.ajax({
				type: "POST",
				url: `${origin}/encargados/store`,
				data: $('#encarForm').serializeArray(),
				dataType: "json"
			})
			.done(res => {
				if (res.error == 23000)
					Swal.fire({
					  icon: 'error',
					  title: 'Error',
					  text: 'Esta cedula ya esta registrada'
					})
				else
					Swal.fire({
					  position: 'top-end',
					  icon: 'success',
					  title: 'El usuario ha sido registrado',
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
	  title: '¿Desea eliminar el usuario?',
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
    	'Se ha eliminado el registro.',
    	'success'
  		),
  		setTimeout('redirect()', 1000);
			$.ajax({
				type: "POST",
				url: `${origin}/encargados/delete`,
				data: {id:id},
				dataType: "json"
			})
			.fail(error => console.log(error))
		}
	})	
}

function redirect()
{
	location.replace(`${origin}/encargados`)
}

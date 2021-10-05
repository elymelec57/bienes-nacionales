var codigo_Bienes = window.localStorage.getItem('codigo_Bienes'),
edit = window.localStorage.getItem('edit'),
origin = window.location.origin,
url = `${origin}/bienes/store`

if (edit == "true")
	url = `${origin}/bienes/update`


if(codigo_Bienes)
{
	$.ajax({
		type: "GET",
		url: `${origin}/bienes/find`,
		data: {
			codigo_Bienes: codigo_Bienes
		}
	})
  .done((data) =>
  {
  	var data = [JSON.parse(data)]
    data.map(i =>
    {
    	if (edit == "true")
    	{
				$("#codigo_Bienes").val(i.codigo_Bienes).prop( "disabled", true )
				$("#codhistorico_Bienes").val(i.codhistorico_Bienes) 
				$("#tipo_Bienes").val(i.tipo_Bienes) 
				$("#nombre_Bienes").val(i.nombre_Bienes) 
				$("#descripcion_Bienes").val(i.descripcion_Bienes)
				$("#fechacheq_Bienes").val(i.fechacheq_Bienes) 
				$("#conservacion_Bienes").val(i.conservacion_Bienes) 
				$("#foto_Bienes").val(i.foto_Bienes) 
				$("#codigo_Categoria").val(i.codigo_Categoria)
				$("#title_change").html("Editar bienes");
				$("#borrar-dep").hide()
    	}
    	if (edit == "false")
    	{
				$("#codigo_Bienes").val(i.codigo_Bienes).prop( "disabled", true )
				$("#codhistorico_Bienes").val(i.codhistorico_Bienes).prop( "disabled", true )
				$("#tipo_Bienes").val(i.tipo_Bienes).prop( "disabled", true ) 
				$("#nombre_Bienes").val(i.nombre_Bienes).prop( "disabled", true )
				$("#descripcion_Bienes").val(i.descripcion_Bienes).prop( "disabled", true )
				$("#fechacheq_Bienes").val(i.fechacheq_Bienes).prop( "disabled", true ) 
				$("#conservacion_Bienes").val(i.conservacion_Bienes).prop( "disabled", true ) 
				$("#foto_Bienes").val(i.foto_Bienes).prop( "disabled", true ) 
				$("#codigo_Categoria").val(i.codigo_Categoria).prop( "disabled", true )
				$("#guardar-dep").hide()
				$("#borrar-dep").hide()
				$(".custom-input-file").hide()
				$("#title_change").html("Ficha del bien nacional");
    	}
    })
  })
  .fail(() => alert('error'))
}

$("#fileForm").submit(function (event) {
  event.preventDefault();
	$("#codigo_Bienes").prop( "disabled", false)
	if(!validator('#fileForm'))
	{
		$.ajax({
			type: "POST",
			url: url,
			data: $('#fileForm').serializeArray(),
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
			{
				Swal.fire({
				  position: 'top-end',
				  icon: 'success',
				  title: 'El bien ha sido registrado',
				  showConfirmButton: false,
				  timer: 1500
				})

			}
			setTimeout('redirect()', 1500);
		})
		.fail(error => console.log(error))
	}
});

window.localStorage.removeItem('codigo_Bienes')
window.localStorage.removeItem('edit')

function redirect()
{
	location.replace(`${origin}/bienes`)
}

function editar(id)
{
	if (window.localStorage.getItem('codigo_Bienes') !== null)
		window.localStorage.removeItem('codigo_Bienes')

	window.localStorage.setItem('codigo_Bienes', id)
	window.localStorage.setItem('edit', true)
	location.replace(`${origin}/bienes/create`)
}

function destroy(id)
{
	Swal.fire({
  title: '¿Desea eliminar el bien?',
  text: "¡No podrás revertir esto!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  cancelButtonText: 'Cancelar',
  confirmButtonText: '¡Si, eliminar!',
	})
	.then((result) => {
  	if (result.isConfirmed) 
  	{
   		Swal.fire(
    	'¡Eliminado!',
    	'Se ha eliminado el registro.',
    	'success'
  		)
  		
   		$.ajax({
  			type: "POST",
  			url: `${origin}/bienes/delete`,
  			data: { id: id }
  		})
			.fail(error => console.log(error))
			setTimeout('refresh()', 1000);
  	}
	})
}

function refresh()
{
 	location.reload()
}

function load_bienes()
{
	$.ajax(`${origin}/bienes/get`)
	.done((data) =>
	{
		var data = JSON.parse(data)
	  data.map(i =>
	  {
	  	$('#el')
	  	.append(`
	  		<tr>
	  			<td>${i.codigo_Bienes}</td>
	  			<td>${i.codhistorico_Bienes}</td>
	  			<td>${i.tipo_Bienes}</td>
	  			<td>${i.nombre_Bienes}</td>
	  			<td>${i.conservacion_Bienes}</td>
	  			<td>${i.fechacheq_Bienes}</td>
	  			<td>${i.codigo_Categoria}</td>
	  			<td>
						<button onclick="consultar(${i.codigo_Bienes})" title="Consultar"><i class="fa fa-search"></i></button>
	  				<button onclick="editar(${i.codigo_Bienes})" title="Editar"><i class="fa fa-pen"></i></button>
						<button onclick="destroy(${i.codigo_Bienes})" title="Borrar"><i class="fa fa-trash-alt"></i></button>
	  			</td>
	  		</tr>`)
	  })
	})
	.fail(() => alert('error'))
}

function load_categories()
{
	$.ajax(`${origin}/categorias/get`)
	.done((data) =>
	{
		var data = JSON.parse(data)

		data.map(i =>
		{
			$('#codigo_Categoria')
			.append(`<option value="${i.codigo_Categoria}">${i.codigo_Categoria}</option>`)
		})
	})
.fail((err) => console.log(err))
}

function consultar(id)
{
	if (window.localStorage.getItem('codigo_Bienes') !== null)
		window.localStorage.removeItem('codigo_Bienes')

	window.localStorage.setItem('codigo_Bienes', id)
	window.localStorage.setItem('edit', false)
	location.replace(`${origin}/bienes/create`)
}

switch(location.pathname)
{
	case '/bienes':
		load_bienes()
	break
	case '/bienes/create':
		load_categories()
	break
}
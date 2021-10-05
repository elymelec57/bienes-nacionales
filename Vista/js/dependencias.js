var origin = window.location.origin

$.ajax(`${origin}/dependencias/get`)
.done((data) =>
{
	let codigo_Depend = 0
	var data = JSON.parse(data)
	if (data)
	  data.map(i =>
	  {
	  	if (codigo_Depend < i.codigo_Depend)
	  		codigo_Depend = i.codigo_Depend
	  })
  codigo_Depend++
	$('#codigo_Depend').val(codigo_Depend)
})
.fail(() => alert('error'))


$.ajax(`${origin}/dependencias/get`)
.done((data) =>
{
	var data = JSON.parse(data)
  data.map(i =>
  {
  	$('#el')
  	.append(`
  		<tr>
  			<td>${i.codigo_Depend}</td>
  			<td>${i.clasificacion_Depend}</td>
  			<td>${i.nombre_Depend}</td>
  			<td>${i.locacion_Depend}</td>
  			<td>${i.observacion_Depend}</td>
  			<td>${i.tomafisica_Depend}</td>
  			<td>${i.edicion_Depend}</td>
  			<td>${i.documentacion_Depend}</td>
  			<td>${i.fechacheq_Depend}</td>
  			<td>${i.cedula_Encarg}</td>
  			<td>
  				<button title="Editar"><i class="fa fa-pen"></i></button>
					<button title="Borrar"><i class="fa fa-trash-alt"></i></button>
  			</td>
  		</tr>`)
  })
})
.fail(() => alert('error'))


$("#registerdepForm").submit(function (event) {
  event.preventDefault();

	if(!validator('#registerdepForm'))
	{
		alert('Esta opción no disponible')
		// $.ajax({
		// 	type: "POST",
		// 	url: `${origin}/dependencias/store`,
		// 	data: $('#registerdepForm').serializeArray(),
		// 	dataType: "json"
		// })
		// .done(res => {
		// 	if (res.error == 23000)
		// 		Swal.fire({
		// 		  icon: 'error',
		// 		  title: 'Error',
		// 		  text: 'Esta codigo de dependencia ya esta registrado'
		// 		})
		// 	else
		// 		Swal.fire({
		// 		  position: 'top-end',
		// 		  icon: 'success',
		// 		  title: 'La dependencia ha sido registrada',
		// 		  showConfirmButton: false,
		// 		  timer: 1500
		// 		})
		// 	setTimeout('redirect()', 1500);
		// })
		// .fail(error => console.log(error))
	}
});

function redirect()
{
	location.replace(`${origin}/dependencias`)
}

function load_encargados()
{
	$.ajax(`${origin}/encargados/get`)
	.done((data) =>
	{
		var data = JSON.parse(data)
	  data.map(i =>
	  {
	  	$('#cedula_Encarg')
	  	.append(`<option>${i.cedula_Encarg}</option>`)
	  })
	})
	.fail(() => alert('error'))
}

switch(location.pathname)
{
	case '/dependencias/create':
		load_encargados()
	break
}
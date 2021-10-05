var origin = window.location.origin

$.ajax(`${origin}/bienes/incorporar/get`)
.done((data) =>
{
	let num_Movincorp = 0
	var data = JSON.parse(data)
	if (data)
	  data.map(i =>
	  {
	  	if (num_Movincorp < i.num_Movincorp)
	  		num_Movincorp = i.num_Movincorp
	  	$('#el')
	  	.append(`
	  		<tr>
	  			<td>${i.num_Movincorp}</td>
	  			<td>${i.codigo_Depend}</td>
	  			<td>${i.codigo_Bienes}</td>
	  			<td>${i.cedula_Encarg}</td>
	  			<td>${i.fecha_Incorp}</td>
	  		</tr>`)
	  })
  num_Movincorp++
	$('#num_Movincorp').val(num_Movincorp)
})
.fail(() => alert('error'))


$("#incorporarForm").submit(function (event) {
  event.preventDefault();

	if(!validator('#incorporarForm'))
	{
		$.ajax({
			type: "POST",
			url: `${origin}/bienes/incorporar`,
			data: $('#incorporarForm').serializeArray(),
			dataType: "json"
		})
		.done(res => {
			if (res.error == 23000)
				Swal.fire({
				  icon: 'error',
				  title: 'Error',
				  text: 'Este bien ya esta incorporado'
				})
			else
			{
				Swal.fire({
				  position: 'top-end',
				  icon: 'success',
				  title: 'El bien ha sido incorporado',
				  showConfirmButton: false,
				  timer: 1500
				})

			}
			setTimeout('redirect()', 1500);
		})
		.fail(error => console.log(error))
	}
});

function load_bienes()
{
	$.ajax(`${origin}/bienes/not`)
	.done((data) =>
	{
		var data = JSON.parse(data)
	  data.map(i =>
	  {
	  	$('#codigo_Bienes')
	  	.append(`<option>${i.codigo_Bienes}</option>`)
	  })
	})
	.fail(() => alert('error'))
}

function load_dependencias()
{
	$.ajax(`${origin}/dependencias/get`)
	.done((data) =>
	{
		var data = JSON.parse(data)
	  data.map(i =>
	  {
	  	$('#codigo_Depend')
	  	.append(`<option>${i.codigo_Depend}</option>`)
	  })
	})
	.fail(() => alert('error'))
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
	case '/bienes/incorporar':
		load_bienes()
		load_dependencias()
		load_encargados()
	break
}

function redirect()
{
	location.replace(`${origin}/bienes/incorporar`)
}
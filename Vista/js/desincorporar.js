var origin = window.location.origin

$.ajax(`${origin}/bienes/desincorporar/get`)
.done((data) =>
{
	let mov_Desincorp = 0
	var data = JSON.parse(data)
	if (data)
	  data.map(i =>
	  {
	  	if (mov_Desincorp < i.mov_Desincorp)
	  		mov_Desincorp = i.mov_Desincorp
	  })
  mov_Desincorp++
	$('#mov_Desincorp').val(mov_Desincorp)
})
.fail(() => alert('error'))

$("#desincorForm").submit(function (event) {
  event.preventDefault();

	if(!validator('#desincorForm'))
	{
		$.ajax({
			type: "POST",
			url: `${origin}/bienes/desincorporar`,
			data: $('#desincorForm').serializeArray(),
			dataType: "json"
		})
		.done(res => {
			Swal.fire({
			  position: 'top-end',
			  icon: 'success',
			  title: 'El bien ha sido desincorporado',
			  showConfirmButton: false,
			  timer: 1500
			})
			setTimeout('redirect()', 1500);
		})
		.fail(error => console.log(error))
	}
});

$('#codigo_Depend').on('change', () => 
{
	$('#codigo_Bienes').empty()
	load_bienes($('#codigo_Depend').val())
})

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
	  load_bienes(data[0].codigo_Depend)
	})
	.fail(() => alert('error'))
}

function load_bienes(id)
{
	$.ajax(`${origin}/bienes/incorporar/where?codigo_Depend=${id}`)
	.done((data) =>
	{
		var data = JSON.parse(data)
		if (Array.isArray(data))
		{
		  data.map(i =>
		  {
		  	$('#codigo_Bienes')
		  	.append(`<option>${i.codigo_Bienes}</option>`)
		  })
		}

		if (!Array.isArray(data) && data != false && data != null && data != undefined)
	  	$('#codigo_Bienes').append(`<option>${data.codigo_Bienes}</option>`)
	})
	.fail(() => alert('error'))
}

switch(location.pathname)
{
	case '/bienes/desincorporar':
		load_dependencias()
	break
}

function redirect()
{
	location.replace(`${origin}/bienes/desincorporar`)
}

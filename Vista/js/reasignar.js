function load_bienes()
{
	$.ajax(`${origin}/bienes/get`)
	.done((data) =>
	{
		var data = JSON.parse(data)
	  data.map(i =>
	  {
	  	$('#code-bien')
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
	  	$('#nuevadep-reasig')
	  	.append(`<option>${i.codigo_Depend}</option>`)
	  	$('#viejadep-reasig')
	  	.append(`<option>${i.codigo_Depend}</option>`)
	  })
	})
	.fail(() => alert('error'))
}

switch(location.pathname)
{
	case '/bienes/reasignaciones':
		load_bienes()
		load_dependencias()
	break
}
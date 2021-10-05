var origin = window.location.origin

$(document).ready(function () {
  $('#mostrar').click(function () {
    if ($('#mostrar').is(':checked')) {
      $('#clave_Encarg').attr('type', 'text');
    } else {
      $('#clave_Encarg').attr('type', 'password');
    }
  });
});


$("#loginForm").submit(function(event){
  event.preventDefault();

  if(!validator('#loginForm'))
  {
    $.ajax({
      type: "POST",
      url: `${origin}/login`,
      data: $('#loginForm').serializeArray()
    })
    .done(res => {
      res = JSON.parse(res)

      if (res.hasOwnProperty('error'))
        Swal.fire({
          icon: 'error',
          title: 'Oops...',
          text: 'Datos incorrectos!',
          timer: 1500
        })
      else
        Swal.fire({
          icon: 'success',
          title: 'Bienvenido',
          text: 'Inicio de sesión exitoso!',
        })
        setTimeout('redirection()', 1500);
    })
    .fail(error => console.error(error))
  }
})

function redirection(){
  location.replace(`${origin}/`)
}
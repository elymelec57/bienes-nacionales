const emailRegExp = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/
const dateRegExp = /([12]\d{3}-(0[1-9]|1[0-2])-(0[1-9]|[12]\d|3[01]))/
const passwordRegExp = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,20}$/
const numberRegExp = /^[0-9]+$/
const stringRegExp = /^[A-Za-z]+$/
const alphanumericRegExp = /^(?=.*[a-zA-Z])(?=.*[0-9])[a-zA-Z0-9]+$/

function validator(selector)
{
  let email = 0, date = 0, string = 0, number = 0, password = 0, user = 0
  $(selector).serializeArray().map((item) => 
  {
    let dataType = $(`[name=${item.name}]`).data('type')
    switch(dataType)
    {
      case 'email':
        if (!emailRegExp.test(item.value))
        {
          email++
          if($(`[name=${item.name}]`).next('span.error').length === 0)
            $(`[name=${item.name}]`).after('<span class="error">*debes ingresar un email valido</span>')
        }
        else
        {
          if (email)
            email--
          if($(`[name=${item.name}]`).next('span.error').length === 1)
            $(`[name=${item.name}]`).next('span.error').remove()

        }
      break
      case 'date':
        if (!dateRegExp.test(item.value))
        {
          date++
          if($(`[name=${item.name}]`).next('span.error').length === 0)
            $(`[name=${item.name}]`).after('<span class="error">*debes ingresar una fecha valida</span>')
        }
        else
        {
          if (date)
            date--
          if($(`[name=${item.name}]`).next('span.error').length === 1)
            $(`[name=${item.name}]`).next('span.error').remove()

        }
      break
      case 'password':
        if (!passwordRegExp.test(item.value))
        {
          password++
          if($(`[name=${item.name}]`).next('span.error').length === 0)
            $(`[name=${item.name}]`).after('<span class="error">*debes ingresar una contraseña valida</span>')
        }
        else
        {
          if (password)
            password--
          if($(`[name=${item.name}]`).next('span.error').length === 1)
            $(`[name=${item.name}]`).next('span.error').remove()

        }
      break
      case 'number':
        if (!numberRegExp.test(item.value))
        {
          number++
          if($(`[name=${item.name}]`).next('span.error').length === 0)
            $(`[name=${item.name}]`).after('<span class="error">*debes ingresar solo numeros</span>')
        }
        else
        {
          if (number)
            number--
          if($(`[name=${item.name}]`).next('span.error').length === 1)
            $(`[name=${item.name}]`).next('span.error').remove()

        }
      break
      case 'string':
        if (!stringRegExp.test(item.value))
        {
          string++
          if($(`[name=${item.name}]`).next('span.error').length === 0)
            $(`[name=${item.name}]`).after('<span class="error">*debes ingresar solo letras</span>')
        }
        else
        {
          if (string)
            string--
          if($(`[name=${item.name}]`).next('span.error').length === 1)
            $(`[name=${item.name}]`).next('span.error').remove()

        }
      break
      case 'user':
        if (!alphanumericRegExp.test(item.value))
        {
          user++
          if($(`[name=${item.name}]`).next('span.error').length === 0)
            $(`[name=${item.name}]`).after('<span class="error">*debes ingresar un usuario valido</span>')
        }
        else
        {
          if (user)
            user--
          if($(`[name=${item.name}]`).next('span.error').length === 1)
            $(`[name=${item.name}]`).next('span.error').remove()

        }
      break
    }
  })
  return user + password + string + number + email + date
}
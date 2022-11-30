submit = document.querySelector('#submit')

submit.addEventListener('click', event => {
  event.preventDefault()
  _name = document.querySelector('#name').value
  email = document.querySelector('#email').value
  pass = document.querySelector('#pass').value.toString()
  pass_confirm = document.querySelector('#pass_confirm').value.toString()

  /*if (pass === pass_confirm) {
    

  }*/
  if (pass !== pass_confirm) {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'As senhas não correspondem';
  }
  if (pass !== pass_confirm) {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'As senhas não correspondem';
  } else {
    if (pass.length < 8) {
      console.log(pass)
      document.getElementById('message').style.color = 'red';
      document.getElementById('message').innerHTML = 'Senha muito curta';
    }
    else {
      let data = {
        name: _name,
        email: email,
        password: pass,
        password_confirmation: pass_confirm
      };
      fetch("http://localhost:8000/api/users/create", {
        method: "POST",
        headers: {
          "Accept": "application/json",
          'Content-Type': 'application/json'
        },
        body: JSON.stringify(data)
      })
        .then(response => response.json())
        .then(response => console.log(JSON.stringify(response)));

      }
  }

});
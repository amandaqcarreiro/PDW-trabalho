submit = document.querySelector('#submit')

submit.addEventListener('click', event => {
  console.log('Clicked')
  email = document.querySelector('#email').value
  pass = document.querySelector('#pass').value

  /*if (pass.length < 8) {
    console.log(pass)
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'Senha muito curta';
  }*/
  let data = {
    email: email,
    password: pass
  };
  fetch("http://localhost:8000/api/users/login", {
    method: "POST",
    headers: {
      "Accept": "application/json",
      'Content-Type': 'application/json'
    },
    body: JSON.stringify(data)
  })
    .then(response => response.json())
    .then(response => console.log(JSON.stringify(response)));
    delay(1000).then(() => console.log());


});
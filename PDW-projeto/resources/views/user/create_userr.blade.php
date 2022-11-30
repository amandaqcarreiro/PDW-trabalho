<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="/assets/css/reset.css">
	<link rel="stylesheet" href="/assets/css/login.css">
	<title>Meu almoço</title>
</head>

<body>
	<main class="main-content">
	<h1 class="main-title">Meu Almoço</h1>
		<form class="form" action="{{ route('register_user')}}" method="POST">
			@csrf
			<input id='name' type="text" name="name" class="input" placeholder="Nome de usuário"></input>
			<input id='email' type="email" name="email" class="input" placeholder="Email"></input>
			<input id='pass' type="password" name="password" class="input" placeholder="Senha"></input>
			<input id='pass_confirm' type="password" name="password_confirmation" class="input" placeholder="Confirme sua senha"></input>
			<button id='submit' type="submit" href="" class="main__botao-submit">Enviar</button>
		</form>
		<span id='message'></span>
	</main>
</body>

</html>
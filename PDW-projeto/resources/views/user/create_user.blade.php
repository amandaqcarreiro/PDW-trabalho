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
		<form class="form" action="">
			<h1 class="main-title">Meu Almoço</h1>
			<input id='name' type="text" class="input" placeholder="Nome de usuário"></input>
			<input id='email' type="email" class="input" placeholder="Email"></input>
			<input id='pass' type="password" class="input" placeholder="Senha"></input>
			<input id='pass_confirm' type="password" class="input" placeholder="Confirme sua senha"></input>
			<button id='submit' type="submit" href="" class="main__botao-submit">Enviar</button>
		</form>
		<span id='message'></span>
	</main>
	<script src="/assets/js/create_user.js"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="{{ asset('assets/css/reset.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
	<title>Meu Almoço</title>
</head>

<body>
	<header class="header__balls">
		<div class="balls_container">
			<div class="balls"></div>
			<div class="balls"></div>
			<div class="balls"></div>
		</div>
	</header>
	<main class="main-content">
		<form class="form" action="">
			<h1 class="main-title">Meu Almoço</h1>
			<input type="text" class="input usuario" placeholder="Usuário ou e-mail"></input>
			<input type="password" class="input senha" placeholder="Senha"></input>
			<a href="" class="main__botao-submit">Login</a>
			<a href="create_user.html" class="main__botao-create">Criar usuário</a>
		</form>
	</main>
</body>

</html>
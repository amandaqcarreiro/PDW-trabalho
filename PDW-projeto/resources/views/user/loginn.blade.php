<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="/assets/css/reset.css">
	<link rel="stylesheet" href="/assets/css/login.css">
	<title>Meu Almoço</title>
</head>

<body>
	<main class="main-content">
	<h1 class="main-title">Meu Almoço</h1>
		<form class="form" method="POST" action="{{ route('calendar')}}">
			@csrf
			<input id='email' type="email" name="email" class="input usuario" placeholder="E-mail"></input>
			<input id='pass' type="password" name="password" class="input senha" placeholder="Senha"></input>
			<button id='submit' type="submit" class="main__botao-submit">Login</button>
		</form>
		<button class="main__botao-create" onclick="window.location='{{ route("create_user") }}'" >Criar usuário</button>
	</main>
</body>

</html>
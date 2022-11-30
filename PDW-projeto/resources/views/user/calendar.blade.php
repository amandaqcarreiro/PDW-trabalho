<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="/assets/css/reset.css">
	<link rel="stylesheet" href="/assets/css/calendar.css">
	<title>Calendário</title>
</head>

<body>
	<header>
		<div></div>
		<h1 class="header__text">Meu almoço</h1>
		<img class="header__img" src="{{ asset('assets/img/boneco.png') }}" alt="Foto de um boneco">
	</header>
	<main class="main-content">
		<div class="main__header">
			<div></div>
			<p class="day food_name">02 - 08 / 11</p>
			<img src="{{ asset('assets/img/pencil.png') }}"  alt="pencil" class="main__header-img">
		</div>
		<div class="food_element">
			<div class="food_number">02</div>
			<p class="food_name">Strogonoff de frango</p>
		</div>
		<div class="food_element">
			<div class="food_number">03</div>
			<p class="food_name">Steak au poivre</p>
		</div>
		<div class="food_element">
			<div class="food_number">04</div>
		</div>
		<div class="food_element">
			<div class="food_number">05</div>
		</div>
		<div class="food_element">
			<div class="food_number">06</div>
		</div>
	</main>
</body>

</html>
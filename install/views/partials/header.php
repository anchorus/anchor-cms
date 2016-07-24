<!doctype html>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<title>Установка Anchor CMS</title>
		<meta name="robots" content="noindex, nofollow">

		<link rel="stylesheet" href="<?php echo asset('views/assets/css/install.css'); ?>">
		<link rel="stylesheet" href="<?php echo asset('views/assets/css/chosen.css'); ?>">
	</head>
	<body>

		<nav>
			<img src="<?php echo asset('views/assets/img/logo.png'); ?>">

			<ul>
				<li class="start database metadata account complete">Язык и время</li>
				<li class="database metadata account complete">База данных</li>
				<li class="metadata account complete">Настройка сайта</li>
				<li class="account complete">Ваш профиль</li>
				<li class="complete">Всё сделано!</li>
			</ul>
		</nav>

		<script>
			(function(w, d, u) {
				var parts = "<?php echo Uri::current(); ?>".split('/'), url = parts.pop(), li = d.getElementsByClassName(url);
				if(url == 'complete') d.body.parentNode.className += 'small';
				for(var i = 0; i < li.length; i++) li[i].className += ' elapsed';
			}(window, document));
		</script>
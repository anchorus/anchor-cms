<?php $base = rtrim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'])), '/'); ?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Добро пожаловать в Anchor</title>

		<style>
			body {
				font: 100% "Helvetica Neue", "Open Sans", "DejaVu Sans", "Arial", sans-serif;
				text-align: center;
				background: #444f5f;
				color: #fff;
			}
			div {
				width: 300px;
				position: absolute;
				left: 50%;
				top: 30%;
				margin: -80px 0 0 -150px;
			}
			h1 {
				font-size: 29px;
				line-height: 35px;
				font-weight: 300;
				margin: 30px 0;
			}
			a {
				display: inline-block;
				padding: 0 22px;
				background: #2F3744;
				color: #96A4BB;
				font-size: 13px;
				line-height: 38px;
				font-weight: bold;
				text-decoration: none;
				border-radius: 5px;
			}
			@media (max-width: 300px) {
				div {
					width: 128px;
					margin-left: -64px;
				}
				h1 {
					font-size: 12px;
					line-height: 14px;
				}
				a {
					padding: 0 10px;
					font-size: 10px;
				}
			}
		</style>
	</head>
	<body>
		<div>
			<img src="<?php echo $base; ?>/anchor/views/assets/img/logo.png" alt="Anchor logo">
			<h1>Привет, Anchor!</h1>
			<a href="<?php echo $base . '/install/index.php'; ?>">Перейти к установке</a>
		</div>

		<script>
			(function(d) {
				var v = new Date().getTimezoneOffset();
				d.cookie = "anchor-install-timezone=" + v + "; path=/";
			}(document));
		</script>
	</body>
</html>
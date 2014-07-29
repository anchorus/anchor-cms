<?php echo $header; ?>

<section class="content">
	<article>
		<h1>Соединение с базой данных</h1>

		<p>Для начала нам нужна база данных. Там Anchor хранит всё своё содержимое. Если вы не знаете данные для соединения с БД, свяжитесь со своим хостинг-провайдером.</p>
	</article>

	<form method="post" action="<?php echo uri_to('database'); ?>" autocomplete="off">
		<?php echo $messages; ?>

		<fieldset>
			<p>
				<label for="host">Хост БД</label>
				<input id="host" name="host" value="<?php echo Input::previous('host', '127.0.0.1'); ?>">

				<i>Вероятно <b>localhost</b> или <b>127.0.0.1</b>.</i>
			</p>

			<p>
				<label for="port">Порт</label>
				<input id="port" name="port" value="<?php echo Input::previous('port', '3306'); ?>">

				<i>Обычно <b>3306</b>.</i>
			</p>

			<p>
				<label for="user">Пользователь БД</label>
				<input id="user" name="user" value="<?php echo Input::previous('user', 'root'); ?>">

				<i>Логин пользователя, обычно <b>root</b>.</i>
			</p>

			<p>
				<label for="pass">Пароль</label>
				<input id="pass" name="pass" value="<?php echo Input::previous('pass'); ?>">

				<i>Оставьте пустым, если пароль не задан.</i>
			</p>

			<p>
				<label for="name">Название БД</label>
				<input id="name" name="name" value="<?php echo Input::previous('name', 'anchor'); ?>">

				<i>Имя вашей базы данных.</i>
			</p>

			<p>
				<label for="prefix">Префикс</label>
				<input id="prefix" name="prefix" value="<?php echo Input::previous('prefix', 'anchor_'); ?>">

				<i>Префикс у таблиц в базе данных.</i>
			</p>

			<p>
				<label for="collation">Кодировка</label>
				<select id="collation" class="chosen-select" name="collation">
					<?php foreach($collations as $code => $collation): ?>
					<?php $selected = ($code == Input::previous('collation', 'utf8_general_ci')) ? ' selected' : ''; ?>
					<option value="<?php echo $code; ?>" <?php echo $selected; ?>>
						<?php echo $code; ?>
					</option>
					<?php endforeach; ?>
				</select>

				<i>Измените, если <b>utf8_general_ci</b> не работает.</i>
			</p>
		</fieldset>

		<section class="options">
			<a href="<?php echo uri_to('start'); ?>" class="btn quiet">&laquo; Назад</a>
			<button type="submit" class="btn">Вперед &raquo;</button>
		</section>
	</form>
</section>

<?php echo $footer; ?>
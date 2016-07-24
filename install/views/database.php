<?php echo $header; ?>

<section class="content">
	<article>
		<h1>Соединение с базой данных</h1>

		<p>Для начала нам нужна база дынных. Anchor использует её для того, чтобы хранить все данные вашего блога, поэтому, внимательно укажите настройки для соединения. Если у вас нет данных для соединения с базой, свяжитесь со своим провайдером хостинга.</p>
	</article>

	<form method="post" action="<?php echo uri_to('database'); ?>" autocomplete="off">
		<?php echo $messages; ?>

		<fieldset>
			<p>
				<label for="host">Хост БД</label>
				<input id="host" name="host" value="<?php echo Input::previous('host', '127.0.0.1'); ?>">

				<i>Чаще всего <b>localhost</b> или <b>127.0.0.1</b>.</i>
			</p>

			<p>
				<label for="port">Порт</label>
				<input id="port" name="port" value="<?php echo Input::previous('port', '3306'); ?>">

				<i>Обычно <b>3306</b>.</i>
			</p>

			<p>
				<label for="user">Логин БД</label>
				<input id="user" name="user" value="<?php echo Input::previous('user', 'root'); ?>">

				<i>Пользователь БД, обычно <b>root</b>.</i>
			</p>

			<p>
				<label for="pass">Пароль</label>
				<input id="pass" name="pass" type="password" value="<?php echo Input::previous('pass'); ?>" class="db-password-field">
				<i>Оставьте пустым, если нет пароля.</i>
			</p>

			<p>
				<label for="show-hide">Показать пароль</label>
				<input name="show-hide" type="checkbox" value="Показать пароль" class="show-hide-password">
				<i>Выберете, чтобы отобразить пароль.</i>
			</p>
			<br>

			<p>
				<label for="name">Название БД</label>
				<input id="name" name="name" value="<?php echo Input::previous('name', 'anchor'); ?>">
				<i>Название вашей базы данных.</i>
			</p>

			<p>
				<label for="prefix">Префикс таблиц</label>
				<input id="prefix" name="prefix" value="<?php echo Input::previous('prefix', 'anchor_'); ?>">

				<i>Префикс для таблиц в базе.</i>
			</p>

			<p>
				<label for="collation">Кодировка</label>
				<select id="collation" class="chosen-select" name="collation">
					<?php foreach($collations as $code => $collation): ?>
					<?php $selected = ($code == Input::previous('collation', 'utf8_unicode_ci')) ? ' selected' : ''; ?>
					<option value="<?php echo $code; ?>" <?php echo $selected; ?>>
						<?php echo $code; ?>
					</option>
					<?php endforeach; ?>
				</select>

				<i>Если <b>utf8_general_ci</b> не работает.</i>
			</p>
		</fieldset>

		<section class="options">
			<a href="<?php echo uri_to('start'); ?>" class="btn quiet">&laquo; Назад</a>
			<button type="submit" class="btn">Вперёд &raquo;</button>
		</section>
	</form>
</section>

<?php echo $footer; ?>

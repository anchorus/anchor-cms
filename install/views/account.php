<?php echo $header; ?>

<section class="content">

	<article>
		<h1>Ваш первый профиль</h1>

		<p>О, мы так мучительно близко! Всё, что нам нужно сейчас — это ваш логин и пароль, чтобы вы смогли управлять сайтом.</p>
	</article>

	<form method="post" action="<?php echo uri_to('account'); ?>" autocomplete="off">
		<?php echo $messages; ?>

		<fieldset>
			<p>
				<label for="username">Логин</label>
				<i>Используется для входа.</i>
				<input tabindex="1" id="username" name="username" value="<?php echo Input::previous('username', 'admin'); ?>">
			</p>

			<p>
				<label for="email">Email адрес</label>
				<i>Нужен, если не сможете войти.</i>

				<input tabindex="2" id="email" type="email" name="email" value="<?php echo Input::previous('email'); ?>">
			</p>

			<p>
				<label>Пароль</label>
				<i>Будьте уверены, что <a href="http://snippi.com/s/sisxgmc" target="_blank">выбрали надёжный пароль</a>.</i>
				<input tabindex="3" name="password" type="password" value="<?php echo Input::previous('password'); ?>">
			</p>
		</fieldset>

		<section class="options">
			<a href="<?php echo uri_to('metadata'); ?>" class="btn quiet">&laquo; Назад</a>
			<button type="submit" class="btn">Завершить</button>
		</section>
	</form>
</section>

<?php echo $footer; ?>
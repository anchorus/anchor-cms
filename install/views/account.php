<?php echo $header; ?>

<section class="content">

	<article>
		<h1>Ваш профиль</h1>
		<p>О, мы уже так близки к цели! Всё, что осталось — это придумать логин и пароль для управления блогом.</p>
	</article>

	<form method="post" action="<?php echo uri_to('account'); ?>" autocomplete="off">
		<?php echo $messages; ?>

		<fieldset>
			<p>
				<label for="username">Логин</label>
				<i>Будет использоваться для входа.</i>
				<input tabindex="1" id="username" name="username" value="<?php echo Input::previous('username', 'admin'); ?>">
			</p>

			<p>
				<label for="email">Email адрес</label>
				<i>Нужен, если не сможете войти.</i>

				<input tabindex="2" id="email" type="email" name="email" value="<?php echo Input::previous('email'); ?>">
			</p>

			<p>
				<label>Пароль</label>
				<i>Убедитесь, что <a href="http://bash.org/?244321" target="_blank">выбрали надёжный</a>.</i>
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
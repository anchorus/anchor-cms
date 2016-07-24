<?php echo $header; ?>

<section class="content">
	<article>
		<h1>Настройка сайта</h1>
		<p>Для того, чтобы чуть-чуть персонализировать свой новый блог на Anchor, мы рекомендуем вам указать некоторые данные о сайте. Всё это, конечно же, можно изменить в любое время позже.</p>
	</article>

	<form method="post" action="<?php echo Uri::to('metadata'); ?>" autocomplete="off">
		<?php echo $messages; ?>

		<fieldset>
			<p>
				<label for="site_name">Название</label>
				<i>Как звать ваш блог?.</i>

				<input id="site_name" name="site_name" value="<?php echo Input::previous('site_name', 'Мой первый блог'); ?>">
			</p>

			<p>
				<label for="site_description">Описание</label>
				<i>Несколько <em>бит</em> о вас или о вашем блоге.</i>

				<textarea id="site_description" name="site_description"><?php echo Input::previous('site_description',
					'Это не просто какой-то блог. Это самый настоящий блог на Anchor.'); ?></textarea>
			</p>

			<p>
				<label for="site_path">Путь к сайту</label>
				<i>Каталог с Anchor.</i>
				<input id="site_path" name="site_path" value="<?php echo Input::previous('site_path', $site_path); ?>">
			</p>

			<?php if(count($themes) > 1): ?>
			<p>
				<label for="theme">Шаблон</label>
				<i>Дизайн Anchor.</i>
				<select id="theme" name="theme">
					<?php foreach($themes as $dir => $theme): ?>
					<option value="<?php echo $dir; ?>"><?php echo $theme['name']; ?> от <?php echo $theme['author']; ?></option>
					<?php endforeach; ?>
				</select>
			</p>
			<?php else: $theme = key($themes); ?>
			<input name="theme" type="hidden" value="<?php echo $theme; ?>">
			<?php endif; ?>

			<p>
				<label for="rewrite">Понятные Urls</label>
				<i>Url переадресация</i>

			<?php if(mod_rewrite()): ?>

				<div class="more">Похоже, вы используете Apache со включённым <code>mod_rewrite</code>.<br>
				Установщик сам создаст .htaccess за вас.</div>

			<?php elseif(is_apache()): ?>

				<div class="more">Похоже, вы используете Apache, но <code>mod_rewrite</code> не включён.</div>

				<div class="more"><input id="rewrite" name="rewrite" type="checkbox" value="1">
				Всё равно создать файл .htaccess за меня.</div>

			<?php elseif(is_cgi()): ?>

				<div class="more">Похоже, вы используете <code>PHP</code> как fastcgi-процесс.<br>
				Вы можете самостоятельно настроить человекопонятные Url.</div>

			<?php endif; ?>
			</p>
		</fieldset>

		<section class="options">
			<a href="<?php echo uri_to('database'); ?>" class="btn quiet">&laquo; Назад</a>
			<button type="submit" class="btn">Вперёд &raquo;</button>
		</section>
	</form>
</section>

<?php echo $footer; ?>
<?php echo $header; ?>

<section class="content">
	<article>
		<h1>Настройки сайта</h1>

		<p>Для того, чтобы сделать ваш блог на Anchor уникальнее, рекомендуем придумать название и описание, а также выбрать шаблон оформления. Однако, все настройки можно будет изменить позже.</p>
	</article>

	<form method="post" action="<?php echo Uri::to('metadata'); ?>" autocomplete="off">
		<?php echo $messages; ?>

		<fieldset>
			<p>
				<label for="site_name">Название сайта</label>
				<i>Как звать ваш блог?.</i>

				<input id="site_name" name="site_name" value="<?php echo Input::previous('site_name', 'Мой первый блог на Anchor'); ?>">
			</p>

			<p>
				<label for="site_description">Описание сайта</label>
				<i>Немного о себе или о своём блоге.</i>

				<textarea id="site_description" name="site_description"><?php echo Input::previous('site_description',
					'Это не просто блог. Это блог на Anchor.'); ?></textarea>
			</p>

			<p>
				<label for="site_path">Патч сайта</label>
				<i>Папка с Anchor.</i>
				<input id="site_path" name="site_path" value="<?php echo Input::previous('site_path', $site_path); ?>">
			</p>

			<?php if(count($themes) > 1): ?>
			<p>
				<label for="theme">Шаблон</label>
				<i>Шаблон Anchor.</i>
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
				<label for="rewrite">Простые Url'ы</label>
				<i>Url переадресация</i>

			<?php if(mod_rewrite()): ?>

				<div class="more">Похоже, в вашем Apache включён <code>mod_rewrite</code>.<br>
				Установщик создаст htaccess для вас.</div>

			<?php elseif(is_apache()): ?>

				<div class="more">Похоже, в вашем Apache выключён <code>mod_rewrite</code>.</div>

				<div class="more"><input id="rewrite" name="rewrite" type="checkbox" value="1">
				Создать файл htaccess всё равно.</div>

			<?php elseif(is_cgi()): ?>

				<div class="more">Похоже, ваш <code>PHP</code> работает как FastCGI процесс.<br>
				Вам придётся самому делать переадресацию Url.</div>

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
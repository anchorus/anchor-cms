<?php echo $header; ?>

<section class="content small">
	<h1>Установка завершена!</h1>

	<?php if($htaccess): ?>
	<p class="code">Мы не смогли создать файл <code>htaccess</code> для вас,
	 скопируйте содержимое ниже, и создайте файл .htaccess в корневой папке с Anchor.
	<textarea id="htaccess"><?php echo $htaccess; ?></textarea></p>

	<script>document.getElementById('htaccess').select();</script>
	<?php endif; ?>

	<section class="options">
		<a href="<?php echo $admin_uri; ?>" class="button">Управление сайтом</a>
		<a href="<?php echo $site_uri; ?>" class="right">На сайт</a>
	</section>
</section>

<?php echo $footer; ?>
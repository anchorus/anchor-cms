<?php echo $header; ?>

<section class="content small">
	<h1>Установка завершена!</h1>

	<?php if($htaccess): ?>
	<p class="code">Мы не смогли создать файл <code>.htaccess</code> за вас, создайте файл .htaccess в корневом каталоге Anchor, содержащий данные ниже.
	<textarea id="htaccess"><?php echo $htaccess; ?></textarea></p>

	<script>document.getElementById('htaccess').select();</script>
	<?php endif; ?>

	<section class="options">
		<a href="<?php echo $admin_uri; ?>" class="button">Управление блогом</a>
		<a href="<?php echo $site_uri; ?>" class="right">Перейти на сайт</a>
	</section>
</section>

<?php echo $footer; ?>
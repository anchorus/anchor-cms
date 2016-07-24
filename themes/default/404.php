<?php theme_include('header'); ?>

	<section class="content wrap">
		<h1>Страница не найдена</h1>

		<p>К сожалению, страницы <code>/<?php echo htmlspecialchars(current_url()); ?></code> не существует. Лучшим решением будет вернуться <a href="<?php echo base_url(); ?>">на главную</a>, попытаться <a href="#search">поискать</a>, или пойти и тихо поплакать в уголке (хотя я не рекомендую последний вариант).</p>
	</section>

<?php theme_include('footer'); ?>

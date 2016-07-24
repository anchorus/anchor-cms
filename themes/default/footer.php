		<div class="wrap">
	            <footer id="bottom">
	                <small>&copy; <?php echo date('Y'); ?> <?php echo site_name(); ?>. Все права сохранены.</small>

	                <ul role="navigation">
	                    <li><a href="<?php echo rss_url(); ?>">RSS</a></li>
	                    <?php if(twitter_account()): ?>
	                    <li><a href="<?php echo twitter_url(); ?>">@<?php echo twitter_account(); ?></a></li>
	                    <?php endif; ?>

	                    <li><a href="<?php echo base_url('admin'); ?>" title="Управление сайтом!">Управление</a></li>

	                    <li><a href="<?php echo base_url(); ?>" title="Вернуться домой.">Главная</a></li>
	                </ul>
	            </footer>

	        </div>
        </div>
    </body>
</html>

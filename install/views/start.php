<?php echo $header; ?>

<section class="content">
	<article>
		<h1>Привет. Hello. Willkommen. Bonjour. Croeso.</h1>

		<p>Если вы ищите по-настоящему лёгкую систему для блога, то вы на верном пути. Просто заполняйте все данные по ходу установки, и совсем скоро у вас уже появится новый блог.</p>
	</article>

	<form method="post" action="<?php echo uri_to('start'); ?>" autocomplete="off">
		<?php echo $messages; ?>

		<fieldset>
			<p>
				<label for="lang">
					<strong>Язык</strong>
					<span class="info">Локализация Anchor.</span>
				</label>
				<select id="lang" class="chosen-select" name="language">
					<?php foreach($languages as $lang): ?>
					<?php $selected = in_array($lang, $prefered_languages) ? ' selected' : ''; ?>
					<option<?php echo $selected; ?>><?php echo $lang; ?></option>
					<?php endforeach; ?>
				</select>
			</p>

			<p>
				<label for="timezone">
					<strong>Время</strong>
					<span class="info">Ваш часовой пояс.</span>
				</label>
				<select id="timezone" class="chosen-select" name="timezone">
					<?php $set = false; ?>
					<?php foreach($timezones as $zone): ?>
					<?php $selected = ($set === false and $current_timezone == $zone['offset']) ? ' selected' : ''; ?>
					<option value="<?php echo $zone['timezone_id']; ?>"<?php echo $selected; ?>>
						<?php echo $zone['label']; ?>
					</option>
					<?php if($selected) $set = true; ?>
					<?php endforeach; ?>
				</select>
			</p>
		</fieldset>

		<section class="options">
			<button type="submit" class="btn">Вперёд &raquo;</button>
		</section>
	</form>
</section>

<?php echo $footer; ?>
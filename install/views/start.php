<?php echo $header; ?>

<section class="content">
	<article>
		<h1>Привет. Hello. Willkommen. Bonjour. Croeso.</h1>

		<p>Если вы ищите действительно простую и лёгкую систему для блога, вы нашли правильное место. Просто заполните информацию ниже, и у вас появится новый блог в кратчайшие сроки.</p>
	</article>

	<form method="post" action="<?php echo uri_to('start'); ?>" autocomplete="off">
		<?php echo $messages; ?>

		<fieldset>
			<p>
				<label for="lang">
					<strong>Язык</strong>
					<span class="info">Перевод Anchor.</span>
				</label>
				<select id="lang" name="language">
					<?php foreach($languages as $lang): ?>
					<?php $selected = in_array($lang, $prefered_languages) ? ' selected' : ''; ?>
					<option<?php echo $selected; ?>><?php echo $lang; ?></option>
					<?php endforeach; ?>
				</select>
			</p>

			<p>
				<label for="timezone">
					<strong>Время</strong>
					<span class="info">Ваша временная зона.</span>
				</label>
				<select id="timezone" name="timezone">
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
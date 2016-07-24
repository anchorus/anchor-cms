<?php

return array(

	'users' => 'Участники',

	'create_user' => 'Добавить пользователя',
	'add_user' => 'Добавление участника',
	'editing_user' => 'Редактирование профиля %s',
	'remembered' => 'Я вспомнил пароль',
	'forgotten_password' => 'Забыли пароль?',

	// роли
	'administrator' => 'Администратор',
	'administrator_explain' => '',

	'editor' => 'Редактор',
	'editor_explain' => '',

	'user' => 'Пользователь',
	'user_explain' => '',

	// поля формы
	'real_name' => 'Настоящее имя',
	'real_name_explain' => '',

	'bio' => 'Биография',
	'bio_explain' => '',

	'status' => 'Статус',
	'status_explain' => '',

	'role' => 'Роль пользователя',
	'role_explain' => '',

	'username' => 'Логин',
	'username_explain' => '',
	'username_missing' => 'Пожалуйста, введите логин, состоящий хотя бы из %s символов.',

	'password' => 'Пароль',
	'password_explain' => '',
	'password_too_short' => 'Пароль должен состоять хотя бы из %s символов.',

	'new_password' => 'Новый парольd',

	'email' => 'Email',
	'email_explain' => '',
	'email_missing' => 'Пожалуйста, укажите правильный E-mail адрес.',
	'email_not_found' => 'Пользователь не найден.',

	// уведомления
	'updated' => 'Профиль пользователя был обновлён.',
	'created' => 'Профиль пользователя был создан.',
	'deleted' => 'Профиль пользователя был удалён.',
	'delete_error' => 'Вы не можете удалить свой профиль.',
	'login_error' => 'Неверный логин или пароль.',
	'logout_notice' => 'Вы вышли.',
	'recovery_sent' => 'Мы отправили письмо для подтверждения нового пароля.',
	'recovery_expired' => 'Ключ восстановления пароля истёк, попробуйте заново.',
	'password_reset' => 'Ваш новый пароль был сохранён. Теперь вы можете войти!',

	// восстановление пароля по email
	'recovery_subject' => 'Восстановление пароля',
	'recovery_message' => 'Вы запросили сброс пароля.' .
		'Для того, чтобы продолжить, нажмите на ссылку ниже.' . PHP_EOL . '%s',

);
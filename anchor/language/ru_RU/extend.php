<?php

return array(

	'extend' => 'Разное',

	'fields' => 'Дополнительные поля',
	'fields_desc' => 'Дополнительные поля для записей и страниц',

	'variables' => 'Глобальные переменные',
	'variables_desc' => 'Создать дополнительные настройки для блога',

	'create_field' => 'Добавить поле',
	'editing_custom_field' => 'Изменение &ldquo;%s&rdquo;',
	'nofields_desc' => 'Дополнительных полей еще нет',

	'create_variable' => 'Добавить переменную',
	'editing_variable' => 'Изменение &ldquo;%s&rdquo;',
	'novars_desc' => 'Переменных еще нет',

	// поля в форме
	'type' => 'Тип',
	'type_explain' => 'Тип содержимого, где будет использоваться поле.',

	'field' => 'Поле',
	'field_explain' => 'HTML тип',

	'key' => 'Ключ',
	'key_explain' => 'Уникальный ключ для поля',
	'key_missing' => 'Пожалуйста, введите ключ',
	'key_exists' => 'Указанный ключ уже существует',

	'label' => 'Название',
	'label_explain' => 'Название для поля',
	'label_missing' => 'Пожалуйста, введите название',

	'attribute_type' => 'Типы',
	'attribute_type_explain' => 'Разделяйте запятыми.',

	// картинка
	'attributes_size_width' => 'Ширина',
	'attributes_size_width_explain' => 'Максимальная ширина картинки',

	'attributes_size_height' => 'Высота',
	'attributes_size_height_explain' => 'Максимальная высота картинки',

	// глобальные переменные
	'name' => 'Имя',
	'name_explain' => 'Уникальное имя',
	'name_missing' => 'Пожалуйста введите имя',
	'name_exists' => 'Указанное имя уже занято',

	'value' => 'Содержимое',
	'value_explain' => 'Содержимое переменной (до 64кб)',
	'value_code_snipet' => 'Код для вставки в шаблон:<br>
		<code>' . e('<?php echo site_meta(\'%s\'); ?>') . '</code>',

	// сообщения
	'variable_created' => 'Новая переменная была добавлена',
	'variable_updated' => 'Переменная была обновлена',
	'variable_deleted' => 'Переменная была удалена',

	'field_created' => 'Новое поле было добавлено',
	'field_updated' => 'Поле было обновлено',
	'field_deleted' => 'Поле было удалено'

);
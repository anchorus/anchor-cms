<?php

return array(
	'url' => dirname($_SERVER['SCRIPT_NAME']),
	'index' => 'index.php?route=',
	'timezone' => 'UTC',
	'key' => hash('md5', 'Anchor Installer ' . VERSION),
	'language' => 'ru_RU',
	'encoding' => 'UTF-8'
);
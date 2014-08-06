## Anchor CMS

Anchor это очень простая и легкая система для блога. [Посетить наш сайт](http://anchorcms.ru/). 

### Требования

- PHP 5.3.6+
    - curl
    - mcrypt
    - gd
    - pdo\_mysql or pdo\_sqlite
- MySQL 5.2+

Чтобы узнать версию PHP, создайте новый файл с таким PHP кодом: `<?php echo PHP_VERSION; // version.php`. Это отобразит версию PHP.

### Установка

1. Убедитесь, что сервер (хостинг) соответствует требованиям.
2. Скачайте последнюю версию Anchor [здесь](http://anchorcms.ru/download) или загрузите этот Github репозиторий.
3. Загрузите Anchor с помощью FTP/SFTP на свой сервер.
4. Убедитесь, что разрешения на каталоги `content` и `anchor/config` установлены `0777`.
5. Создайте базу данных для Anchor. Вы можете назвать ее как захотите. Для создание базы данных может потребоваться PHPMyAdmin или Sequel Pro на хостинге. Если вы не уверены, как создать базу данных, обратитесь в службу поддержки хостинга.
6. Перейдите к установщику Anchor; если вы загрузили Anchor в подпапку, необходимо открыть именно ее: `http://MYDOMAINNAME.com/anchor`
7. Следуйте инструкциям установщика
8. Для безопасности, удалите папку `install`, когда установите Anchor.

### Проблемы?

Если у вас не получается установить Anchor, зайдите на наш [форум](http://forums.anchorcms.com/) (англоязычный); у кого-нибудь может быть такая же проблема, и сообщество будет всегда радо помочь. Также, прочтите [документацию](http://anchorcms.ru/docs).

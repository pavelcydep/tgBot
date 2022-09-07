<?php
define('TELEGRAM_TOKEN', 'Здесь должен быть токен');
define('TELEGRAM_CHATID', 'мой id');
$url='https://random-word-api.herokuapp.com/all';
$urlCurl= 'https://api.telegram.org/bot' . TELEGRAM_TOKEN . '/sendMessage';
?>
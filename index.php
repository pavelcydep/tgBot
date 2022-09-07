<?php
require_once('./classes/Word.php');
require_once('./classes/BotTg.php');
require_once('./constant/constants.php');

$word=new Word();
$word->url=$url;
$botTg=new BotTg();
$botTg->url=$urlCurl;
$botTg->chatId=TELEGRAM_CHATID;
$_POST["word"]=$word->randomWord();

if ($_POST) {
$botTg->sendWord($_POST["word"]);
}
?>
<form method="post" action="">
<?echo $word->randomWord();?>
<input type="submit" value="Отправить">
</form>


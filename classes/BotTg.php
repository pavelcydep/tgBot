<?php
Class BotTg{
public $url;
public $chatId;

  public function sendWord($textMessage)
 {
     $ch = curl_init();
     curl_setopt_array(
         $ch,
         array(
             CURLOPT_URL => $this->url,
             CURLOPT_POST => TRUE,
             CURLOPT_RETURNTRANSFER => TRUE,
             CURLOPT_TIMEOUT => 10,
             CURLOPT_POSTFIELDS => array(
                 'chat_id' => $this->chatId,
                 'text' => $textMessage,
             ),
         )
     );
     $result=curl_exec($ch);
     return $result;
 }




}




?>
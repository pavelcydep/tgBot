<?php
Class Word 
{
    public $url;
    public function randomWord()
    {
        $ch = curl_init($this->url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_HEADER, false);
        $result = curl_exec($ch);
        curl_close($ch);
        $arr=json_decode($result, true);
        $rand_keys = array_rand($arr, 1);
        $word=$arr[$rand_keys];
        return $word;
    }
}
 ?>
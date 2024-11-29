<?php

////Самый простой способ парсинга полной страницы и echo для вывода:
//echo file_get_contents("https://www.chuc.ru/");

////Парсинг с помощью cURL:
//$ch = curl_init("https://www.chuc.ru/");
//
//curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
//curl_setopt($ch, CURLOPT_HEADER, false);
//
//$html = curl_exec($ch);
//curl_close($ch);
//
//echo $html;


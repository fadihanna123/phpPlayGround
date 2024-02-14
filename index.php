<?php

declare(strict_types=1);
error_reporting(-1);

$url = 'https://jsonplaceholder.typicode.com/todos/1';

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$exec = curl_exec($ch);

$decoded = json_decode($exec, true);

echo 'Title: '.$decoded['title'];

curl_close($ch);

<?php

sleep(2); // waiting for ngrok init
$content = file_get_contents('http://ngrok:4040/api/tunnels');
$data = json_decode($content, true);
$url = 'https://'.parse_url($data['tunnels'][0]['public_url'], PHP_URL_HOST);

umask(000);
file_put_contents('/opt/app/url.txt', $url); // get https domain for bot webhooks
require('/opt/app/setwebhook.php');
<?php

sleep(2); // waiting for ngrok init
$content = file_get_contents('http://ngrok:4040/api/tunnels');
$data = json_decode($content, true);
echo $data['tunnels'][0]['public_url'];

umask(000);
file_put_contents(__DIR__ . '/../app/url.txt', $data['tunnels'][1]['public_url']); // get https domain for bot webhooks

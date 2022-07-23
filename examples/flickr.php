<?php

require '../vendor/autoload.php';



$uploader = RemoteImageUploader\Factory::create('Flickr', array(
    'api_key'        => '',
    'api_secret'     => '',
    'oauth_token'        => '',
    'oauth_token_secret' => '',
));

$callbackUrl = 'http:\\127.0.0.1';

$uploader->authorize($callbackUrl);

$url = $uploader->upload('708669.jpg');
var_dump($url);

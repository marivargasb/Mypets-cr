<?php

session_start();

require_once('vendor/autoload.php');
require_once('app/FacebookAuth.php');

$facebook = new Facebook\Facebook([

   'app_id' => '155596615048901',
   'app_secret' => '2c5e7e54dbb7c45188d7fcdc39fb61da',
   'default_graph_version'=> 'v2.10',

]);

$fbauth = new FacebookAuth($facebook);

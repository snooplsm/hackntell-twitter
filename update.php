<?php

require_once('TwitterAPIExchange.php');
$settings = array(
    'oauth_access_token' => "yourown",
    'oauth_access_token_secret' => "yourown",
    'consumer_key' => "yourown",
    'consumer_secret' => "yourown"
);
$req = array_merge($_GET,$_POST);
$url = 'https://api.twitter.com/1.1/statuses/update.json';
$postfields = array("status"=>$req["status"]);
$requestMethod = 'POST';

$twitter = new TwitterAPIExchange($settings);
echo $twitter->setPostfields($postfields)
             ->buildOauth($url, $requestMethod)
             ->performRequest();
?>

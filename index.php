<?php
require_once('codebird.php');
      
// note: consumerKey, consumerSecret, accessToken, and accessTokenSecret all come from your twitter app at https://apps.twitter.com/
\Codebird\Codebird::setConsumerKey("consumerKey", "consumerSecret");
$cb = \Codebird\Codebird::getInstance();
$cb->setToken("accessToken", "accessTokenSecret");

// to send
$params = [
  'status' => 'I love London',
  'lat'    => 51.5033,
  'long'   => 0.1197
];

// call service
$reply = $cb->statuses_update($params);

// example returned
print_r($reply);

?>
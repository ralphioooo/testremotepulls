<?php 
//http://stackoverflow.com/questions/9132144/how-can-i-automatically-deploy-my-app-after-a-git-push-github-and-node-js

var_dump($_POST);
var_dump($_REQUEST);


if ( $_POST['payload'] ) {
	$payload = json_decode($_POST['Payload'], true);
}

echo 'test';
echo $payload['ref'];

//log the request 2
file_put_contents('logs/github.txt', $payload['ref'], FILE_APPEND);
file_put_contents('logs/github.txt', 'test', FILE_APPEND);

if ($payload->ref === 'refs/heads/master')
{
  // path to your site deployment script
  //exec('../build.sh');
}
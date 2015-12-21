<?php 

echo "Welcome to Redis cache ";
echo PHP_EOL;
require "predis/autoload.php";
Predis\Autoloader::register();

try {
	$redis = new Predis\Client();
	
	$redis->set('library', 'Ganesh Added In to Predis  library ');
	$response= $redis->get('library');

    var_export($response); echo PHP_EOL;

	// This connection is for a remote server
	/*
		$redis = new PredisClient(array(
		    "scheme" => "tcp",
		    "host" => "153.202.124.2",
		    "port" => 6379
		));
	*/
}
catch (Exception $e) {
	die($e->getMessage());
}
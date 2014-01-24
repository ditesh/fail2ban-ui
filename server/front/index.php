<?php

define ("BASEPATH", realpath(dirname(__FILE__)."/../"));

// Required models
require_once BASEPATH."/configuration/config.php";
require_once BASEPATH."/models/db.php";
require_once BASEPATH."/models/error.php";
require_once BASEPATH."/models/logger.php";
require_once BASEPATH."/models/session.php";
require_once BASEPATH."/vendors/adodb5/adodb.inc.php";

// Import sleepy framework
require_once $config["paths"]["sleepy-path"];

$sleepy = new Sleepy([
	"resource-path"=>$config["paths"]["resource-path"],
	"model-path"=>$config["paths"]["model-path"],
	"controller-path"=>$config["paths"]["controller-path"],
	"session"=>new Session($config["session"]),
	"logger"=>new Logger($config["logger"]),
]);

try {

	$db = new DB($config["mysql"]);

} catch (Exception $e) {

	$sleepy->container->logger->filelog("Unable to connect to database because of ".$e);
	$sleepy->container->response->serverError();

}

$sleepy->setDatabase($db);
$sleepy->dispatch();

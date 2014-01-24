<?php

define ("BASEPATH", realpath(dirname(__FILE__)."/../"));

// Required models
require_once BASEPATH."/configuration/config.php";
require_once BASEPATH."/vendors/adodb5/adodb.inc.php";
require_once BASEPATH."/models/db.php";
require_once BASEPATH."/models/error.php";
require_once BASEPATH."/models/logger.php";

try {

	$db = new DB($config["mysql"]);

} catch (Exception $e) {

	die("Unable to connect to database because of ".$e);

}

$rs = array();
$rs["ip"] = $argv[1];
$rs["service"] = $argv[2];

$id = $db->AutoInsert("banned_ips", $rs);

$data = file($argv[3]);

foreach ($data as $line) {

    $line = trim($data);
    $rs["log"] = $line;
    $rs["banned_ips_id"] = $ip;
    $db->AutoInsert("logs", $rs);

}

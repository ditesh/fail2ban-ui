<?php

$config = array(

    "paths" => [
        "resource-path" => dirname(__FILE__)."/resources.php",
        "model-path" => realpath(dirname(__FILE__)."/resources/models"),
        "controller-path" => realpath(dirname(__FILE__)."/resources/controllers"),
		"sleepy-path" => "/Users/ditesh/code/sleepy/sleepy.php"
    ],

    "logger" => [
        "level"=>"DEBUG",
        "filename" => "/tmp/bitling.error.log",
    ],

    "mysql" => array(
        "hostname" => "127.0.0.1",
        "username" => "ditesh",
        "password" => "f0ck3rs",
        "dbname" => "fail2ban",
        ),

    "alert" => array(
        "email-destinations" => array("ditesh@gathani.org"),
        "sms-destinations" => array(),
        ),

    "session" => array(
        "ttl" => 60*60*24,
        "name" => "fail2ban",
        "secure" => FALSE,
        "httponly" => FALSE,
        ),

    "filer" => array(
        "public_path" => "/Users/ditesh/code/fail2ban-ui/server/front/resources"
        )
    );

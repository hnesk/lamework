<?php
$config = require_once ('../config/config.php');
require_once ('../src/Request.php');
require_once ('../src/Response.php');
require_once ('../src/DB.php');

$db = new DB($config['db']['user'], $config['db']['password'], $config['db']['database'], $config['db']['host']);
$request = Request::createFromGlobals();



$response = new Response(' Hallo '.$request->data['a']);
$response->send();

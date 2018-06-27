<?php
session_start();

include './config.php';
include './libs/Sql.php';
include './libs/Mysql.php';
include './libs/Postgsql.php';

$mysql = new Mysql();
//$pgsql = new Postgsql();

ini_set('max_execution_time', 1800);

$result = $mysql->insert();
//$result = $mysql->selectAll();
//$result = $mysql->dropCreate();

require_once TEMPLATES.TEMPLATE;
?>
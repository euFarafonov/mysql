<?php
// PATH
define('PATH', './');
// TITLE
define('TITLE', 'MySQL - task 1');
// templates dir
define('TEMPLATES', PATH.'templates/');
// active template
define('TEMPLATE', 'index.php');

// FOR DB
define('DB', 'user14');
define('HOST', 'localhost');
define('USER', 'user14');
define('PASS', 'user14');
define('DSN_MYSQL', 'mysql:host='.HOST.';dbname='.DB);
define('DSN_PGSQL', 'pgsql:host='.HOST.';dbname='.DB);
define('TABLE', 'test');
?>
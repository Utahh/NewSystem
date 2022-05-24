<?php
defined('HOST') or define('HOST', 'localhost');
defined('USER') or define('USER', 'root');
defined('PASS') or define('PASS', '');
defined('BASE') or define('BASE', 'sistem');

    $conn = new mysqli(HOST,USER,PASS,BASE);

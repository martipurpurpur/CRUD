<?php
$dsn = "mysql:host=localhost; dbname=CRUD";
$user = 'martipurpurpur';
$pass = 'secret';
$opt = array(
    \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
);
$pdo = new \PDO($dsn, $user, $pass, $opt);



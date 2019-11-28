<?php
require_once ("pdo.php");
require_once ("controllers.php");

$routes = [
    ['/', function () use ($pdo) {
    return getAllGoods($pdo);
    }],
    ['/show', function () use ($pdo) {
    return showItem($pdo, 2);
    }],
    ['/test', function () {
        return "test";
    }]
];



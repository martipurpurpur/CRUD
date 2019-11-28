<?php
function getAllGoods($pdo)
{
    $names = $pdo->query("select name from goods");
    return $names->fetchAll(\PDO::FETCH_ASSOC);
}

function showItem($pdo, $id)
{
   $item = $pdo->query("select * from goods where id = {$id}");
   return $item->fetch(\PDO::FETCH_ASSOC);
}
function run($routes)
{
    $uri = $_SERVER['REQUEST_URI'];
    foreach ($routes as $item) {
        list($route, $handler) = $item;
        $preparedRoute = preg_quote($route, '/');
        if (preg_match("/^$preparedRoute$/i", $uri)) {
            print_r($handler());
            return;
        }
    }
}
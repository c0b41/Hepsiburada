<?php
require_once __DIR__.'/vendor/autoload.php';

$x = new c0b41\Hepsiburada\Hepsiburada(['username' => 'xxx', 'password' => 'xxx', 'merchant_id' => 'xxx']);

try{
    $x->products();
}catch (Exception $e) {
    echo $e;
}
<?php
function dd($vars) {
    echo "<pre>";
    var_dump($vars);

    // $backtrace = debug_backtrace()[0];

    // echo "<br><br><strong>Arquivo:</strong> " . $backtrace["file"] . '<br>';
    // echo '<strong>Linha:</strong> ' . $backtrace["line"] . '<br>';
    // echo '</pre>';

    die();

}

function config($key, $default = null) {
    $config = require_once __DIR__ .'/../config/config.php';
    return $config[$key] ?? $default;
}
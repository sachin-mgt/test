<?php

// scoper-autoload.php @generated by PhpScoper

$loader = require_once __DIR__.'/autoload.php';

// Exposed functions. For more information see:
// https://github.com/humbug/php-scoper/blob/master/docs/configuration.md#exposing-functions
if (!function_exists('dump_with_depth')) {
    function dump_with_depth() {
        return \RectorPrefix202304\dump_with_depth(...func_get_args());
    }
}
if (!function_exists('dn')) {
    function dn() {
        return \RectorPrefix202304\dn(...func_get_args());
    }
}
if (!function_exists('dump_node')) {
    function dump_node() {
        return \RectorPrefix202304\dump_node(...func_get_args());
    }
}
if (!function_exists('print_node')) {
    function print_node() {
        return \RectorPrefix202304\print_node(...func_get_args());
    }
}
if (!function_exists('trigger_deprecation')) {
    function trigger_deprecation() {
        return \RectorPrefix202304\trigger_deprecation(...func_get_args());
    }
}

return $loader;

<?php

function dd($var, $flag=true) {
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
    if ($flag)
        die();
}
<?php

function test(){
    throw new Exception('mon exception depuis une fonction');

}

try {
    test();
    echo "Je continue";
} catch (Exception $e) {
    die($e->getMessage());
}
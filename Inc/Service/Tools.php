<?php
namespace Inc\Service;

class Tools
{
public function debug($array)
{
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}
}
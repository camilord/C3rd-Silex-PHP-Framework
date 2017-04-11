<?php
/**
 * Created by PhpStorm.
 * User: Camilo3rd
 * Date: 7/28/2015
 * Time: 10:37 PM
 */

if ($_SERVER['REMOTE_ADDR'] == '127.0.0.1') {
    $app['debug'] = true;
} else {
    $app['debug'] = false;
}
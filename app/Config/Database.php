<?php
/**
 * Created by PhpStorm.
 * User: Camilo3rd
 * Date: 7/27/2015
 * Time: 9:11 PM
 */


$db_options = array(
    'driver'    => 'pdo_mysql',
    'host'      => 'localhost',
    'dbname'    => 'dbname',
    'user'      => 'username',
    'password'  => 'secret',
    'port'      => '3306',
    'charset'   => 'utf8',
);
if ($_SERVER['REMOTE_ADDR'] == '127.0.0.1') {
    $db_options = array(
        'driver'    => 'pdo_mysql',
        'host'      => 'localhost',
        'dbname'    => 'dbname',
        'user'      => 'username',
        'password'  => 'secret',
        'port'      => '3306',
        'charset'   => 'utf8',
    );
}

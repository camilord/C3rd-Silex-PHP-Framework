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
    'dbname'    => 'camilord_noteslocker',
    'user'      => 'camilord_nlock',
    'password'  => 'hsurxw49nr0Zda9PJmHsEnJAZ3fadMBY',
    'port'      => '3306',
    'charset'   => 'utf8',
);
if ($_SERVER['REMOTE_ADDR'] == '127.0.0.1') {
    $db_options = array(
        'driver'    => 'pdo_mysql',
        'host'      => 'localhost',
        'dbname'    => 'noteslocker',
        'user'      => 'root',
        'password'  => 'secret',
        'port'      => '3306',
        'charset'   => 'utf8',
    );
}
<?php
/**
 * Created by PhpStorm.
 * User: Camilo3rd
 * Date: 7/28/2015
 * Time: 10:02 PM
 */

$twig_options = array(
    'twig.options' => array(
        'cache' => isset($app['twig.options.cache']) ? $app['twig.options.cache'] : false,
        'strict_variables' => true,
    ),
    'twig.path' => BASE_PATH . '/app/NotesLocker/Views',
    'twig.class_path' => BASE_PATH . '/vendor/twig/lib'
);
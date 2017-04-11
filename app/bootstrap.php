<?php
/**
 * Created by PhpStorm.
 * User: Camilo3rd
 * Date: 7/27/2015
 * Time: 9:04 PM
 */


/**
 * include silex vendor components...
 */
require_once BASE_PATH.'/vendor/autoload.php';

use Silex\Provider\DoctrineServiceProvider;

$app = new Silex\Application();

/**
 * load all configs here..
 */
$configDIR  = opendir(BASE_PATH."/app/Config/");
while (false !== ($config_file = readdir($configDIR))) {
    if (substr($config_file, -4, strlen($config_file)) == '.php'
        && file_exists(BASE_PATH."/app/Config/".$config_file)) {
        require_once BASE_PATH."/app/Config/".$config_file;
    }
}

/**
 * register all SILEX service provider here...
 */
// register database doctrine
$app->register(new DoctrineServiceProvider, array(
    "db.options" => $db_options,
));
// register Swift Mailer
$app->register(new Silex\Provider\SwiftmailerServiceProvider(), array(
    'swiftmailer.use_spool' => true,
    'swiftmailer.options' => $mail_options
));
// register twig service provider
$app->register(new Silex\Provider\TwigServiceProvider(), $twig_options);
// register all core services...
$app->register(new Silex\Provider\ServiceControllerServiceProvider());
$app->register(new Silex\Provider\SessionServiceProvider());
$app->register(new Silex\Provider\ValidatorServiceProvider());
$app->register(new Silex\Provider\UrlGeneratorServiceProvider());
$app->register(new Silex\Provider\TranslationServiceProvider());

/**
 * load services
 */
require BASE_PATH . '/app/services.php';

/**
 * load routes
 */
// private controllers mount
require BASE_PATH.'/app/routes.php';

$app->run();
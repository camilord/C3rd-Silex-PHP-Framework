<?php
/**
 * Created by PhpStorm.
 * User: Camilo3rd
 * Date: 7/27/2015
 * Time: 9:36 PM
 */

namespace NotesLocker\Services;

use Doctrine\DBAL;
use Silex\ServiceProviderInterface;
use Silex\Application;

class DefaultServiceProvider implements ServiceProviderInterface {

    /**
     * @var DBAL\Connection
     */
    private $_db;

    public function register(Application $app)
    {
        $this->_db = $app['db'];
        /*$app['promptlist_answer'] = $app->share(function () use ($app) {
            return new PromptlistAnswer($app['db']);
        });*/
    }

    public function boot(Application $app)
    {

    }

} 
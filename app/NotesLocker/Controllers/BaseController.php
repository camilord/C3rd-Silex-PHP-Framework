<?php
/**
 * Created by PhpStorm.
 * User: Camilo3rd
 * Date: 7/27/2015
 * Time: 9:54 PM
 */

namespace NotesLocker\Controllers;

use Silex\Application;
use Silex\ControllerProviderInterface;
use Silex\ControllerCollection;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\DBAL;
use Silex\ServiceProviderInterface;

abstract class BaseController implements ControllerProviderInterface {

    /**
     * @var Application
     */
    protected $app;

    /**
     * @var Request
     */
    protected $_request;

    /**
     * @var DBAL\Connection
     */
    private $_db;

    /**
     * @param Application $app
     * @return mixed|ControllerCollection
     */
    function connect(Application $app) {
        $this->app = $app;
        $this->_db = $app['db'];
        $this->_request = Request::createFromGlobals();

        // creates a new controller based on the default route
        $controllers = $app['controllers_factory'];
        /* @var $controllers ControllerCollection */

        $this->setup($controllers);

        return $controllers;
    }

    /**
     * @param ControllerCollection $controllers
     * @return mixed
     */
    abstract public function setup(ControllerCollection $controllers);

    /**
     * @return DBAL\Connection
     */
    public function getDB() {
        return $this->_db;
    }

} 
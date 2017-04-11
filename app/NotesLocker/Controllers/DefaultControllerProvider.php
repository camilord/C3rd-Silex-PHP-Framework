<?php
/**
 * Created by PhpStorm.
 * User: Camilo3rd
 * Date: 7/27/2015
 * Time: 9:52 PM
 */

namespace NotesLocker\Controllers;

use Silex\Application;
use Silex\ControllerCollection;

class DefaultControllerProvider extends BaseController {

    public function setup(ControllerCollection $controllers) {
        $controller = $this;

        $controllers->get('/', function() use ($controller) {
            return $controller->testAction();
        });

        $controllers->get('/json', function() use ($controller) {
            return $controller->jsonAction();
        });

        $controllers->get('/{appKey}', function($appKey) use ($controller) {
            return $controller->indexAction($appKey);
        });
    }

    public function indexAction($appKey = null) {
        // f81d4fae-7dec-11d0-a765-00a0c91e6bf6
        var_dump($this->getDB());
        echo 'API KEY: '.$appKey;
        return true;
    }

    public function testAction() {
        $view_data = array(
            'title' => 'Test C3rd Silex PHP Framework',
            'content' => 'Hello World!'
        );
        return $this->app['twig']->render('login.html.twig', $view_data);
    }

    public function jsonAction() {
        // return the data as json format
        return $this->app->json(array(
            'result' => true,
            'message' => 'Success!',
            'data' => sha1(time())
        ), 200);
    }
} 
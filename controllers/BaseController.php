<?php

namespace app\controllers;

use app\core\view\RenderEngine;
use app\core\Application;

/**
 * Base controller is the basic controller design
 * that we have for all of our Controllers.
 * 
 */
class BaseController
{
    /**
     * This method renders a view by calling the Render Engine methods.
     * 
     * @param view is the name of the view
     * @param params is the list of parameters
     */
    public function render($view, $params = []) 
    {
        return RenderEngine::renderView($view, $params);
    }

    /**
     * In each controller, there is a base method for redirection.
     *
     * @param string $path target page
     * @param integer $code status code
     * @return void
     */
    public function redirect(string $path, int $code = 301) 
    {
        return Application::$app->response->redirect($path, $code);
    }
}

?>
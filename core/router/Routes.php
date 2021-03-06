<?php

namespace app\core\router;

use app\core\Application;
use app\controllers\HomeController;

/**
 * Routes class is the class for managing the routes of our
 * website.
 * 
 */
class Routes
{
    /**
     * This method generates the routes of our website.
     * 
     */
    public static function getRoutes()
    {
        $app = Application::get_instance();

        // Write your routes here
        $app->router->get('/', [HomeController::class, 'index'])->name("home");
        $app->router->get('/about_us', [HomeController::class, 'about'])->name("about");
    }
}

?>
<?php
/**
 * Created by PhpStorm.
 * User: Ross
 * Date: 28/04/2016
 * Time: 20:28
 */
require_once __DIR__ . '/../app/setup.php';
use Itb\MainController;
$mainController = new MainController();

$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

$app->get('/',      \Itb\Utility::controller('Itb', 'main/index'));
$app->get('/about',  \Itb\Utility::controller('Itb', 'main/about'));
$app->get('/classes', \Itb\Utility::controller('Itb', 'main/classes'));
$app->get('/trainers', \Itb\Utility::controller('Itb', 'main/trainers'));
$app->get('/login', \Itb\Utility::controller('Itb', 'main/login'));
$app->get('/contact', \Itb\Utility::controller('Itb', 'main/contact'));

$app->post('/processLoginForm', \Itb\Utility::controller('Itb', 'login/submit'));

$app->error(function (\Exception $e, $code) use ($app) {
        switch ($code) {
        case '404':
            $message = 'The requested page could not be found.';
            return \Itb\MainController::error404($app, $message);
        default:
            $message = 'We are sorry, but something went terribly wrong.'
                . '<p>' . $e->getMessage();
            return \Itb\MainController::error404($app, $message);
    }
});

// ... definitions
$app['debug'] = true;
$app->run();
<?php

/**
 * Created by PhpStorm.
 * User: Ross
 * Date: 30/04/2016
 * Time: 16:46
 */
require_once __DIR__ . '/../vendor/autoload.php';

$templatePath = __DIR__.'/../templates';

$app = new Silex\Application();

$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => $templatePath
));
use Silex\Provider;

$app->register(new Provider\HttpFragmentServiceProvider());
$app->register(new Provider\ServiceControllerServiceProvider());
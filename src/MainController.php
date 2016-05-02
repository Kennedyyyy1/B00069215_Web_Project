<?php
/**
 * Created by PhpStorm.
 * User: Ross
 * Date: 29/04/2016
 * Time: 17:08
 */

namespace Itb;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
class MainController
{

    public function indexAction(Request $request, Application $app){
        $template_name = 'index';
        return $app['twig'] -> render($template_name.'.html.twig',[]);
    }

    public function contactAction(Request $request, Application $app){
        $template_name = 'contact';
        return $app['twig']-> render($template_name.'.html.twig',[]);
    }

    public function aboutAction(Request $request, Application $app){
        $template_name = 'about';
        return $app['twig']-> render($template_name.'.html.twig',[]);
    }

    public function classesAction(Request $request, Application $app){
        $template_name = 'classes';
        return $app['twig']-> render($template_name.'.html.twig',[]);
    }

    public function trainersAction(Request $request, Application $app){
        $template_name = 'trainers';
        return $app['twig']-> render($template_name.'.html.twig',[]);
    }

    public function loginAction(Request $request, Application $app){
        $template_name = 'login';
        return $app['twig']-> render($template_name.'.html.twig',[]);
    }

    public static function error404(Application $app,$message){
        $argsArray = [
            'name' => 'Fabien',
        ];

        $template_name = '404';
        return $app['twig']-> render($template_name.'.html.twig',$argsArray);
    }

}
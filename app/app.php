<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/translator.php";

    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider(), array(
           'twig.path' => __DIR__.'/../views'
       ));
       $app->get("/", function() use ($app) {
        return $app['twig']->render('form.html.twig');
    });
    $app->get("/view_result", function() use($app) {
        $my_leetspeak = new Translator;
        $leetspeak_phrase = $my_leetspeak->translate($_GET['phrase']);
        return $app['twig']->render('result.html.twig', array('result' => $leetspeak_phrase));
    });
    return $app;

 ?>

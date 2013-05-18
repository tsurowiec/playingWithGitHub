<?php
/**
 * Created by JetBrains PhpStorm.
 * User: suro
 * Date: 5/18/13
 * Time: 10:04 PM
 * To change this template use File | Settings | File Templates.
 */

require 'vendor/autoload.php';
$app = new \Slim\Slim();

$app->get('/moo', function(){
    echo('Hello World - you are ');
});

$app->run();
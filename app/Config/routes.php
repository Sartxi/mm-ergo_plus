<?php
Router::connect('/', array('controller' => 'pages', 'action' => 'display', 'home'));
Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));
Router::connect('/about', array('controller' => 'pages', 'action' => 'about'));
Router::connect('/contact', array('controller' => 'pages', 'action' => 'contact'));
Router::connect('/safety', array('controller' => 'pages', 'action' => 'safety'));
Router::connect('/solutions', array('controller' => 'pages', 'action' => 'solutions'));

CakePlugin::routes();
require CAKE . 'Config' . DS . 'routes.php';

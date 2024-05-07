<?php

require 'Controller/PageController.php';
$fullpath = explode('/', $_SERVER['REQUEST_URI']);
$path = $fullpath[3];


$routes = new PageController( $path );


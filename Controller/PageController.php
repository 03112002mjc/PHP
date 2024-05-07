<?php

class PageController {

    function __construct( $path )
    {
        $this->path( $path );
    }

    function path ( $path )
    {
        switch ($path)
        {
            case '/': require 'Views/login.view.php'; break;
            case "home": require 'Views/home.view.php'; break;
            case 'login': require 'Views/login.view.php'; break;

            default :
                echo 'error';
        }
    }

    function errors ( $error )
    {
        switch ($error)
        {
            //case 404 : require ''
        }
    }
}


?>
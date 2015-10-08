<?php

namespace App;

use Nette;
use Nette\Application\Routers\RouteList;
use Nette\Application\Routers\Route;


class RouterFactory
{

    /**
     * @return Nette\Application\IRouter
     */
    public static function createRouter()
    {
        $router = new RouteList;

        $public = new RouteList('Public');
        $public[] = new Route('<presenter>/<action>[/<id>]', 'Homepage:default');
        $router[] = $public;

        return $router;
    }

}

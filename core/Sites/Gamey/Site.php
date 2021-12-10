<?php

namespace SGBD\Sites\Gamey;

use SGBD\BaseSite;

/**
* Cette classe gère le site d'exemple
* "The Rapture" et hérite des propriétés de
* la classe SGBD\BaseSite;
*/
class Site extends BaseSite
{
    protected $routes = [
        '/' => ['name' => 'home', 'controller' => 'HomeController', 'method' => 'show'],
        '/games/{slug}' => ['name' => 'game', 'controller' => 'GameController', 'method' => 'show']
    ];

    protected function boot(){
        // boot actions if necessary (no current route not yet defined).
    }
}

<?php


    function url($uri)
    {
        return (new \SGBD\Routes\Request())->getBase() . ltrim($uri, '/');
    }

    function game_url($game)
    {
        return url('/games/' . $game->slug);
    }

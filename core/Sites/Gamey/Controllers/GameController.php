<?php

namespace SGBD\Sites\Gamey\Controllers;

class GameController
{
    public function show($slug)
    {
        $game = \SGBD\Sites\Gamey\Models\Game::getOne(['slug' => $slug]);

        if(! $game) {
            return '404 - Game not found';
        }

        $game->published_at = new \DateTime($game->published_at);

        return \SGBD\App::getView('game', [
            'title' => 'Détails pour le jeu ' . $game->title,
            'socials' => [
                'twitter' => 'https://twitter.com',
                'facebook' => 'https://facebook.com',
                'gplus' => 'https://google.com/plus',
                'youtube' => 'https://pinterest.com',
                'pin' => 'https://instagram.com',
            ],
            'game' => $game,
        ]);
    }
}

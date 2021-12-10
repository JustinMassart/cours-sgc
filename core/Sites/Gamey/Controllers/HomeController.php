<?php

namespace SGBD\Sites\Gamey\Controllers;

class HomeController
{
    public function show()
    {
        // Controller l'affichage de la page d'accueil.
        $games = \SGBD\Sites\Gamey\Models\Game::listTopGames();

        return \SGBD\App::getView('home', [
            'title' => 'Super titre',
            'socials' => [
                'twitter' => 'https://twitter.com',
                'facebook' => 'https://facebook.com',
                'gplus' => 'https://google.com/plus',
                'youtube' => 'https://pinterest.com',
                'pin' => 'https://instagram.com',
            ],
            'games' => $games,
            'articles' => [
                [
                    'image' => 'images/v2.jpg',
                    'alt' => 'The Dark Knight rises', 
                    'title' => 'Killzone: Shadow Fall for PlayStation 4 Reviews',
                    'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipi…',
                ],
                [
                    'image' => 'images/v1.jpg',
                    'alt' => 'Spider-Man', 
                    'title' => 'Titre 2',
                    'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipi…',
                ],
                [
                    'image' => 'images/v3.jpg',
                    'alt' => 'Splinter Cell', 
                    'title' => 'Titre 3',
                    'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipi…',
                ],
            ],
        ]);
    }
}

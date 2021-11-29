<?php

    namespace SGBD\Sites\Gamey\Controllers;

    use SGBD\App;

    class HomeController
    {

        public function show()
        {
            // Controller l'affichage de la page d'accueil.

            return App::getView('home', [
                'socials' => [
                    'facebook' => 'https://www.facebook.com/',
                    'twitter' => 'https://twitter.com/',
                    'gplus' => 'https://google.com/',
                    'youtube' => 'https://www.pinterest.com/',
                    'pin' => 'https://www.instagram.com/',
                ],
                'articles' => [
                    [
                        'title' => 'Killzone: Shadow Fall for PlayStation 4 Reviews',
                        'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipi',
                        'img' => 'images/v2.jpg',
                        'alt' => 'Cover of Killzone: Shadow Fall for PlayStation 4',
                    ],
                    [
                        'title' => 'Spiderman 2 Full Version PC Game',
                        'excerpt' => 'Optio perspiciatis quis rem, repellendus repudiandae sint tenetur vel voluptatum?',
                        'img' => 'images/v1.jpg',
                        'alt' => 'Cover of Spiderman 2 Full Version',
                    ],
                    [
                        'title' => 'Sega’s: Jet Set for Andriod Play Store 4 Reviews',
                        'excerpt' => 'Architecto, blanditiis deleniti dolore eligendi, fugiat id ipsam nam odio officia officiis',
                        'img' => 'images/v3.jpg',
                        'alt' => 'Cover for Sega’s: Jet Set',
                    ],
                ],
                'topGames' => [
                    [
                        'title' => 'Action Games',
                        'excerpt' => 'Nulla elementum nunc tempus.',
                        'alt' => 'Pochette d’un jeu Action Games',
                        'img' => 'images/t1.jpg',
                        'url' => 'https://www.google.com/',
                    ],
                    [
                        'title' => 'Racing Games',
                        'excerpt' => 'Nulla elementum nunc tempus.',
                        'alt' => 'Pochette d’un jeu Raing Games',
                        'img' => 'images/t3.jpg',
                        'url' => 'https://www.google.com/',
                    ],
                    [
                        'title' => '3D Games Games',
                        'excerpt' => 'Nulla elementum nunc tempus.',
                        'alt' => 'Pochette d’un jeu 3D Games',
                        'img' => 'images/t4.jpg',
                        'url' => 'https://www.google.com/',
                    ],
                    [
                        'title' => 'Arcade Games',
                        'excerpt' => 'Nulla elementum nunc tempus.',
                        'alt' => 'Pochette d’un jeu Arcade Games',
                        'img' => 'images/t2.jpg',
                        'url' => 'https://www.google.com/',
                    ],
                    [
                        'title' => 'Flight Games',
                        'excerpt' => 'Nulla elementum nunc tempus.',
                        'alt' => 'Pochette d’un jeu Flight Games',
                        'img' => 'images/t5.jpg',
                        'url' => 'https://www.google.com/',
                    ],
                    [
                        'title' => '2D Games',
                        'excerpt' => 'Nulla elementum nunc tempus.',
                        'alt' => 'Pochette d’un jeu 2D Games',
                        'img' => 'images/t6.jpg',
                        'url' => 'https://www.google.com/',
                    ],
                ],
                'slider' => [
                    [
                        'title' => 'Halo',
                        'intro' => 'Halo is a series of military science fiction video games created by Bungie, taken over by 343 Industries and owned by Microsoft Studios. The series focuses on an interstellar war between humanity and a theocratic alliance of aliens, the Covenants.',
                        'banner' => 'banner1',
                    ],
                    [
                        'title' => 'God of war',
                        'intro' => 'God of War is a beat them all action-adventure video game series started in 2005, produced by Sony Computer Entertainment. The series was launched by David Jaffe and is inspired by Greek mythology for the first episodes, and Nordic mythology thereafter.',
                        'banner' => 'banner2',
                    ],
                    [
                        'title' => 'Battlefield 4',
                        'intro' => 'Battlefield 4 is a first-person shooter video game developed by DICE and published by Electronic Arts. Powered by the Frosbite 3 engine, the title is part of the Battlefield series.',
                        'banner' => 'banner3',
                    ],
                ],
            ]);

        }

    }
<?php

    namespace SGBD\Sites\Gamey\Models;

    class Game extends \SGBD\BaseModel
    {
        public function one($arguments): array
        {
            // $arguments = ['slug' => $slug];

            return [
                'SELECT 
                `games`.`title`,
                `games`.`description`,
                `images`.`src` AS `cover`,
                `images`.`alt` ,
                `categories`.`name` AS `category`,
                `games`.`created_at` AS `published_at`,
                `editors`.`name` AS `editor`
            FROM `games` 
            LEFT JOIN `images` ON `games`.`cover_id` = `images`.`id` 
            LEFT JOIN `category_game` ON `games`.`id` = `category_game`.`game_id`
            LEFT JOIN `categories` ON `category_game`.`category_id` = `categories`.`id`
            LEFT JOIN `editors` ON `games`.`editor_id` = `editors`.`id`
            WHERE `games`.`slug` = :slug
            LIMIT 1;',
                $arguments
            ];
        }

        public function topGames($arguments): array
        {
            return [
                'SELECT `images`.`src` AS `cover`,
                `images`.`alt`,
                `games`.`title`,
                `games`.`description`,
                `games`.`slug`
            FROM `games`
            LEFT JOIN `images` ON `games`.`cover_id` = `images`.`id`
            LEFT JOIN `game_user` ON `game_user`.`game_id` = `games`.`id`
            GROUP BY `games`.`id`
            ORDER BY AVG(`game_user`.`rate`) DESC, `games`.`created_at` DESC
            LIMIT 5',
                $arguments // les paramètres à remplacer dans la requête SQL (par exemple : :slug ou :id)
            ];
        }
    }

-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : ven. 10 déc. 2021 à 10:10
-- Version du serveur :  5.7.32
-- Version de PHP : 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `sgc_gamey`
--

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `slug`, `name`, `created_at`, `updated_at`) VALUES
(1, NULL, 'adventure', 'Adventure', '2021-10-13 15:33:28', '2021-10-13 15:33:28'),
(2, NULL, 'action', 'Action', '2021-10-13 15:33:34', '2021-10-13 15:33:34'),
(3, NULL, 'racing', 'Racing', '2021-10-13 15:33:38', '2021-10-13 15:33:38'),
(4, NULL, 'sport', 'Sport', '2021-10-13 15:33:43', '2021-10-13 15:33:43'),
(5, NULL, 'simulation', 'Simulation', '2021-10-13 15:33:49', '2021-10-13 15:33:49');

--
-- Déchargement des données de la table `category_game`
--

INSERT INTO `category_game` (`id`, `category_id`, `game_id`) VALUES
(1, 2, 1),
(2, 2, 2),
(3, 3, 3),
(4, 1, 4),
(5, 1, 5),
(6, 5, 6),
(7, 4, 7),
(8, 1, 8),
(9, 2, 9);

--
-- Déchargement des données de la table `editors`
--

INSERT INTO `editors` (`id`, `slug`, `name`, `origin`, `logo`, `created_at`, `updated_at`) VALUES
(1, 'gameloft', 'Gameloft', 'France', NULL, '2021-10-13 15:00:33', '2021-10-13 15:00:33'),
(2, 'activision', 'Activision', 'USA', NULL, '2021-10-13 15:00:53', '2021-10-13 15:00:53'),
(3, 'electronics-arts', 'Electronics Arts', 'USA', NULL, '2021-10-13 15:01:27', '2021-10-13 15:01:27'),
(4, 'sony', 'Sony', 'Japan', NULL, '2021-10-13 15:02:16', '2021-10-13 15:02:16'),
(5, 'rovio-entertainment', 'Rovio Entertainment', 'Finland', NULL, '2021-10-13 15:03:00', '2021-10-13 15:03:00'),
(6, 'capcom', 'Capcom', 'Japan', NULL, '2021-10-13 15:03:18', '2021-10-13 15:03:18');

--
-- Déchargement des données de la table `games`
--

INSERT INTO `games` (`id`, `editor_id`, `cover_id`, `slug`, `title`, `description`, `serial`, `age`, `price`, `vat`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 3, 'n-o-v-a', 'N.O.V.A', 'Kal Wardin, our hero, is a retired N.O.V.A. veteran summoned once again to don his Mobile Armored Suit in defense of the Colonial Administration forces.\r\n\r\nHelped by Yelena, his personal AI Agent, Kal must protect humanity\'s destiny by entering the battlefield against alien invaders while uncovering the mystery behind their sudden attack.\r\n\r\nA RETRO SHOOTER EXPERIENCE:\r\n- Enjoy the classic action of the renowned Gameloft FPS series.\r\n- Craft and upgrade weapons, from powerful Assault Rifles to devastating Plasma Guns.\r\n- Enjoy the original N.O.V.A. shooter experience with drastically improved performance and gameplay.\r\n\r\nDEFEAT ALIEN FORCES IN VARIOUS GAME MODES:\r\n- Story Mode: Delve into the plot and fight to uncover the truth about these alien invaders.\r\n- Shadow Events: Defeat the aliens\' Special Forces in challenging limited-time events.\r\n- Special Ops: Launch a strategic strike on unique alien formations.\r\n\r\nTEST YOUR SKILLS IN MULTIPLAYER ARENAS:\r\n- Deathmatch: Be the last one standing in a 6-player firefight.\r\n- Customize your character with a variety of Marine and alien skins.\r\n- Leaderboards and 3rd-person \"Death Cam\" replays.', 'fRtxwYCp', NULL, 0, 0.00, '2021-10-13 15:09:56', '2021-10-13 15:09:56', NULL),
(2, 2, 4, 'call-of-duty-black-ops-2', 'Call Of Duty - Black Ops II', 'Déjouant les attentes les plus folles des fans de cette licence qui défie tous les records, Call of Duty®: Black Ops II propulse les joueurs dans un avenir proche, au milieu d\'une guerre froide du XXIe siècle où la convergence de technologies et d\'armes inédites a abouti à l\'apparition d\'un nouveau type de conflits.', '7AwYLN5K', 18, 2998, 2.00, '2021-10-13 15:12:49', '2021-10-13 15:12:49', NULL),
(3, 3, 5, 'need-for-speed-world', 'Need for Speed: World', 'Need for Speed : World Online est un jeu de courses multijoueur gratuit sur PC. Il propose de revisiter des lieux de la série, comme les villes de Carbon et Most Wanted, au volant de puissants bolides personnalisables sous toutes les coutures. Il sera évidemment possible de se lancer dans des poursuites endiablées avec les forces de l\'ordre.', 'NqexfT43', 7, 2450, 80.00, '2021-10-13 15:20:46', '2021-10-13 15:20:46', NULL),
(4, 3, 6, 'star-wars-old-republic', 'Star Wars Old Republic', 'STAR WARS™: The Old Republic™ est un MMORPG gratuit qui vous place au centre de votre propre saga. Incarnez l\'un des nombreux rôles emblématiques de Star Wars dans une galaxie lointaine, très lointaine, plus de trois mille ans avant les films classiques', 'TAw566oF', 16, 1990, 6.00, '2021-10-13 15:22:34', '2021-10-13 15:22:34', NULL),
(5, 4, 2, 'god-of-war-3', 'God of War III', 'Au terme de l\'aventure précédente, nous laissions le Dieu de la guerre Kratos, sur l\'épaule de la puissante Gaïa, Titan de son état et Déesse Mère de la Terre, en pleine ascension du Mont Olympe. Dans God of War III, suite reprenant les événements exactement là où le second épisode les avait laissés, Kratos, toujours aussi empli de vengeance, verra d\'entrée de jeu sa quête entravée par moult obstacles.', '33f6pAJb', 18, 1990, 90.00, '2021-10-13 15:24:35', '2021-10-13 15:24:35', NULL),
(6, 5, 1, 'angry-birds', 'Angry Birds', 'Jouez au meilleur jeu de lancer d\'oiseaux et d\'éclatage de cochons du monde !\r\nUtilisez la fronde pour lancer des oiseaux sur les tours des cochons et les faire tomber, tout ça pour sauver les précieux œufs.', 'RJZrGEFr', 3, 578, 20.00, '2021-10-13 15:28:20', '2021-10-13 15:28:20', NULL),
(7, 3, 7, 'fifa-15', 'FIFA 15', 'FIFA 15 est un jeu de simulation footballistique introduisant la notion d\'émotions contextuelles influençant les joueurs. On y retrouve aussi les célèbres modes des épisodes précédents (Carrière, Ultimate Team, Online...) ainsi que le mode compétition.', 'X4BLpeMo', 3, 1105, 45.00, '2021-10-13 15:29:36', '2021-10-13 15:29:36', NULL),
(8, 6, 8, 'resident-evil-4', 'Resident Evil 4', 'Faisant virer la série vers le jeu d\'action, Resident Evil 4 est un survival-horror dans lequel le joueur incarne Leon S. Kennedy. Ce dernier est à la recherche d\'Ashley, la fille du président des USA, qui est détenue par des terroristes aux plans peu louables. L\'action se déroule dans un petit village espagnol reculé, alors que la population semble se comporter de façon étrange et particulièrement agressive...', 'UZwgufXj', 18, 2239, 1.00, '2021-10-13 15:30:36', '2021-10-13 15:30:36', NULL),
(9, 2, 9, 'transformers-dark-of-the-moon', 'Transformers : Dark of the moon', 'The Autobots hunt what scraps of Decepticons remain around the Earth, and make a deadly discovery that revives an ancient Decepticon menace known as Shockwave.', 'iS2Hj4Z9', 12, 3580, 62.00, '2021-10-13 15:33:02', '2021-10-13 15:33:02', NULL);

--
-- Déchargement des données de la table `game_user`
--

INSERT INTO `game_user` (`id`, `game_id`, `user_id`, `rate`, `comment`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 4, NULL, '2021-12-10 09:04:12', '2021-12-10 09:04:12'),
(2, 1, 2, 2, NULL, '2021-12-10 09:07:01', '2021-12-10 09:07:01'),
(3, 2, 1, 0, NULL, '2021-12-10 09:07:01', '2021-12-10 09:07:01'),
(4, 2, 2, 3, NULL, '2021-12-10 09:07:01', '2021-12-10 09:07:01'),
(5, 3, 1, 5, NULL, '2021-12-10 09:07:01', '2021-12-10 09:07:01'),
(6, 3, 2, 1, NULL, '2021-12-10 09:07:01', '2021-12-10 09:07:01'),
(7, 4, 1, 3, NULL, '2021-12-10 09:07:01', '2021-12-10 09:07:01'),
(8, 4, 2, 4, NULL, '2021-12-10 09:07:01', '2021-12-10 09:07:01'),
(9, 5, 1, 2, NULL, '2021-12-10 09:07:38', '2021-12-10 09:07:38'),
(10, 5, 2, 3, NULL, '2021-12-10 09:07:38', '2021-12-10 09:07:38'),
(11, 6, 1, 5, NULL, '2021-12-10 09:07:38', '2021-12-10 09:07:38'),
(12, 6, 2, 5, NULL, '2021-12-10 09:07:38', '2021-12-10 09:07:38'),
(13, 7, 1, 3, NULL, '2021-12-10 09:08:31', '2021-12-10 09:08:31'),
(14, 7, 2, 5, NULL, '2021-12-10 09:08:31', '2021-12-10 09:08:31'),
(15, 8, 1, 3, NULL, '2021-12-10 09:08:31', '2021-12-10 09:08:31'),
(16, 8, 2, 0, NULL, '2021-12-10 09:08:31', '2021-12-10 09:08:31'),
(17, 9, 1, 4, NULL, '2021-12-10 09:08:31', '2021-12-10 09:08:31'),
(18, 9, 2, 2, NULL, '2021-12-10 09:08:31', '2021-12-10 09:08:31');

--
-- Déchargement des données de la table `images`
--

INSERT INTO `images` (`id`, `game_id`, `src`, `alt`, `created_at`, `updated_at`) VALUES
(1, 6, '/cours-sgc/images/gl2.jpg', 'Couverture du jeu Angry Birds', '2021-12-03 10:01:01', '2021-12-03 10:01:01'),
(2, 5, '/cours-sgc/images/gl6.jpg', 'Couverture du jeu God of War', '2021-12-03 10:49:47', '2021-12-03 10:49:47'),
(3, 1, '/cours-sgc/images/r4.jpg', 'Couverture du jeu NOVA', '2021-12-03 11:11:05', '2021-12-03 11:11:05'),
(4, 2, '/cours-sgc/images/gl7.jpg', 'Couverture du jeu Call Of Duty', '2021-12-03 11:12:15', '2021-12-03 11:12:15'),
(5, 3, '/cours-sgc/images/t3.jpg', 'Couverture du jeu Need for Speed', '2021-12-03 11:13:02', '2021-12-03 11:13:02'),
(6, 4, '/cours-sgc/images/gl5.jpg', 'Couverture du jeu Star Wars', '2021-12-03 11:14:03', '2021-12-03 11:14:03'),
(7, 7, '/cours-sgc/images/r6.jpg', 'Couverture du jeu FIFA15', '2021-12-03 11:14:57', '2021-12-03 11:14:57'),
(8, 8, '/cours-sgc/images/r3.jpg', 'Couverture du jeu Resident Evil', '2021-12-03 11:16:14', '2021-12-03 11:16:14'),
(9, 9, '/cours-sgc/images/gl11.jpg', 'Couverture du jeu Transformers', '2021-12-03 11:17:14', '2021-12-03 11:17:14');

--
-- Déchargement des données de la table `platforms`
--

INSERT INTO `platforms` (`id`, `slug`, `name`, `brand`, `created_at`, `updated_at`) VALUES
(1, 'pc', 'PC', 'Windows', '2021-10-13 15:34:09', '2021-10-13 15:34:09'),
(2, 'xbox-360', 'XBOX 360', 'Microsoft', '2021-10-13 15:34:27', '2021-10-13 15:34:27'),
(3, 'xbox-one', 'XBOX ONE', 'Microsoft', '2021-10-13 15:34:33', '2021-10-13 15:34:33'),
(4, 'psp', 'PSP', 'Sony', '2021-10-13 15:34:41', '2021-10-13 15:34:41'),
(5, 'ps4', 'PS4', 'Sony', '2021-10-13 15:34:51', '2021-10-13 15:34:51');

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `email`, `firstname`, `lastname`, `birthday`, `addr1`, `addr2`, `postal`, `city`, `country`, `password`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'jean@test.com', 'Jean', 'Dujardin', '1968-03-16', 'Rue des Anges, 17', NULL, '4000', 'Liège', 'BE', '', '2021-10-15 09:03:43', '2021-10-15 09:03:43', NULL),
(2, 'michel@test.com', 'Michel', 'Flexbox', '1985-07-12', 'Rue des Ixellois, 24', NULL, '4000', 'Liège', 'BE', '', '2021-10-15 09:04:33', '2021-10-15 09:04:33', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

<!DOCTYPE HTML>
<html lang="en">
    <head>
        <title><?= "Gamey • Tous vos jeux en ligne"; ?></title>
        <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
        <script src="js/bootstrap.js"></script>
        <link href="css/style.css" rel='stylesheet' type='text/css' />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords"
              content="Adventure Gaming  Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function () {
                setTimeout(hideURLbar, 0);
            }, false);

            function hideURLbar() {
                window.scrollTo(0, 1);
            } </script>
        <script src="js/jquery.min.js"></script>
    </head>
    <body>
        <div class="top-banner">
            <div class="header">
                <div class="container">
                    <div class="headr-left">
                        <div class="social">
                            <?php
                                // Boucle qui affiche chaque réseau social (as $network) contenu dans le tableau $socials déclaré dans le fichier socials.php
                                foreach ($socials as $network => $url): ?>
                                    <?php if ($network !== 'gplus'): ?>
                                        <a href="<?= $url; ?>"><i class="<?= $network; ?>"></i></a>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                        </div>
                        <div class="search">
                            <form>
                                <input type="submit" value="">
                                <input type="text" value="" placeholder="Search...">
                            </form>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="headr-right">
                        <div class="details">
                            <ul>
                                <li><a href="mailto@example.com"><span class="glyphicon glyphicon-envelope"
                                                                       aria-hidden="true"></span>info(at)example.com</a>
                                </li>
                                <li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>(+1)000 123
                                                                                                         456789
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="banner-info">
                <div class="container">
                    <div class="logo">
                        <h1><a href="index.php">Adventure Gaming</a></h1>
                    </div>
                    <div class="top-menu">
                        <span class="menu"></span>
                        <ul class="nav1">
                            <li class="active"><a href="index.php">Home</a></li>
                            <li><a href="about.html">About</a></li>
                            <li><a href="reviews.html">Reviews</a></li>
                            <li><a href="typo.html">News</a></li>
                            <li><a href="gallery.html">Gallery</a></li>
                            <li><a href="contact.html">Mail</a></li>
                        </ul>
                    </div>
                    <script>
                        $("span.menu").click(function () {
                            $("ul.nav1").slideToggle(300, function () {
                                // Animation complete.
                            });
                        });
                    </script>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <script src="js/responsiveslides.min.js"></script>
        <script>
            $(function () {
                $("#slider").responsiveSlides({
                    auto: true,
                    nav: false,
                    speed: 500,
                    namespace: "callbacks",
                    pager: true,
                });
            });
        </script>
        <div class="slider">
            <div class="callbacks_container">
                <ul class="rslides" id="slider">
                    <?php
                        foreach ($slider as $game): ?>
                            <div class="slid <?= $game['banner'] ?>">
                                <div class="caption">
                                    <h3><?= $game['title'] ?></h3>
                                    <p><?= $game['intro'] ?></p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                </ul>
            </div>
        </div>
        <div class="content">
            <div class="container">
                <div class="top-games">
                    <h3>Top Games</h3>
                </div>
                <div class="top-game-grids">
                    <ul id="flexiselDemo1">
                        <?php
                            // Boucle pour afficher tous les jeux (as $games) contenus dans le tableau $topGames
                            foreach ($topGames as $game): ?>
                                <li>
                                    <article class="game-grid">
                                        <h4><?= $game['title'] ?></h4>
                                        <p><?= $game['excerpt'] ?></p>
                                        <a href="<?= $game['url'] ?>">
                                            <img src="<?= $game['img'] ?>" class="img-responsive"
                                                 alt="<?= $game['alt'] ?>" width="243" height="343" />
                                        </a>
                                    </article>
                                </li>
                            <?php endforeach; ?>
                    </ul>
                    <script type="text/javascript">
                        $(window).load(function () {
                            $("#flexiselDemo1").flexisel({
                                visibleItems: 4,
                                animationSpeed: 1000,
                                autoPlay: true,
                                autoPlaySpeed: 3000,
                                pauseOnHover: true,
                                enableResponsiveBreakpoints: true,
                                responsiveBreakpoints: {
                                    portrait: {
                                        changePoint: 480,
                                        visibleItems: 1
                                    },
                                    landscape: {
                                        changePoint: 640,
                                        visibleItems: 2
                                    },
                                    tablet: {
                                        changePoint: 768,
                                        visibleItems: 3
                                    }
                                }
                            });
                        });
                    </script>
                    <script type="text/javascript" src="js/jquery.flexisel.js"></script>
                </div>
            </div>
        </div>
        <div class="latest">
            <div class="container">
                <div class="latest-games">
                    <h3>Latest Games</h3>
                    <span></span>
                </div>
                <div class="latest-top">
                    <div class="col-md-5 trailer-text">
                        <?php
                            // Boucle qui affiche les derniers posts des jeux déclaré dans le fichier "latestGames.php"
                            foreach ($articles as $article): ?>
                                <div class="sub-trailer">
                                    <div class="col-md-4 sub-img">
                                        <img src="<?= $article['img']; ?>" alt="<?= $article['alt']; ?>" />
                                    </div>
                                    <div class="col-md-8 sub-text">
                                        <a href="#"><?= $article['title']; ?></a>
                                        <p><?= $article['excerpt']; ?></p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            <?php endforeach; ?>
                    </div>
                    <div class="col-md-7 trailer">
                        <iframe src="https://www.youtube.com/embed/V5-DyoVlNOg?list=PLiVunv1pnIs2c0ORVqY60K3n8XMO9CoGp"
                                frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="poster">
            <div class="container">
                <div class="poster-info">
                    <h3>Nunc cursus dui in metus efficitur, sit amet ullamcorper dolor viverra.</h3>
                    <p>Proin ornare metus eros, quis mattis lorem venenatis eget. Curabitur eget dui euismod,
                       varius nisl eu, pharetra lacus. Sed vehicula tempor leo. Aenean dictum suscipit magna vel
                       tempus. Aliquam nec dui dolor. Quisque scelerisque aliquet est et dignissim. Morbi magna quam,
                       molestie
                       sed fermentum et, elementum at dolor</p>
                    <a class="hvr-bounce-to-bottom" href="reviews.html">Read More</a>
                </div>
            </div>
        </div>
        <div class="x-box">
            <div class="container">
                <div class="x-box_sec">
                    <div class="col-md-7 x-box-left">
                        <h2>XBOX 360</h2>
                        <h3>Suspendisse ornare nisl et tellus convallis, non vehicula nibh convallis.</h3>
                        <p>Proin ornare metus eros, quis mattis lorem venenatis eget. Curabitur eget dui
                           euismod, varius nisl eu, pharetra lacus. Sed vehicula tempor leo. Aenean dictum suscipit
                           magna vel
                           tempus.
                           Aliquam nec dui dolor. Quisque scelerisque aliquet est et dignissim.</p>
                        <a class="hvr-bounce-to-top" href="reviews.html">Read More</a>
                    </div>
                    <div class="col-md-5 x-box-right">
                        <img src="images/xbox.jpg" class="img-responsive" alt="" />
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="container">
                <div class="footer-grids">
                    <div class="col-md-3 ftr-info">
                        <h3>About Us</h3>
                        <p>Sed faucibus mollis laoreet. Sed vehicula faucibus tristique lectus a orci molestie finibus.
                           Suspendisse pharetra, metus sed rutrum pretium.</p>
                    </div>
                    <div class="col-md-3 ftr-grid">
                        <h3>Categories</h3>
                        <ul class="ftr-list">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Racing</a></li>
                            <li><a href="#">Adventure</a></li>
                            <li><a href="#">Simulation</a></li>
                            <li><a href="#">Bike</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 ftr-grid">
                        <h3>Platform</h3>
                        <ul class="ftr-list">
                            <li><a href="#">Pc</a></li>
                            <li><a href="#">Ps4</a></li>
                            <li><a href="#">XBOX 360</a></li>
                            <li><a href="#">XBOX ONE</a></li>
                            <li><a href="#">PSP</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 ftr-grid">
                        <h3>Information</h3>
                        <ul class="ftr-list">
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Wish Lists</a></li>
                            <li><a href="#">Site Map</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="copywrite">
            <div class="container">
                <p> © 2020 Adventure Gaming. All rights reserved | Design by <a
                            href="http://w3layouts.com/">W3layouts</a></p>
            </div>
        </div>
    </body>
</html>
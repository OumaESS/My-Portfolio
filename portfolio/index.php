<?php

  include "config.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="keywords"
        content="HTML, CSS,JavaScript, portfolio , Oumaima ESSAFIR,website, a digital portfolio, a web developer portfolio, about my portfolio, best leather portfolio, format portfolio, free portfolio template, free portfolio website">
    <meta name="description" content="Portfolio on HTML, CSS and JavaScript">
    <meta name="author" content=" ">


    <title>
        <?php echo $lang['title'] ?>
    </title>
    <link href='https://fonts.googleapis.com/css?family=Raleway:300,400,600' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css'>
    <link rel='stylesheet' href='https://unpkg.com/purecss@1.0.0/build/pure-min.css'>
    <link rel='stylesheet' href='https://unpkg.com/purecss@1.0.0/build/grids-responsive-min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.2/css/font-awesome.min.css'>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="icon" href="img/logos/LOG5.png" alt="">
    <link rel="stylesheet" href="css/style.css">



</head>

<body>

    <!-- Navbar show -->

    <div class="global-nav">
        <nav class="sticky">
            <div class="row">
                <a class="brand" href="#main">OumaESS</a>
                <a class="mobile-nav-icon"><i class="fa fa-bars js--nav-icon"></i></a>
                <ul class="main-nav js--main-nav">
                    <li>
                        <a href="#about">
                            <?php echo $lang['about'] ?>
                        </a>
                    </li>
                    <li>
                        <a href="#projects">
                            <?php echo $lang['projects'] ?>
                        </a>
                    </li>
                    <li>
                        <a href="#contact">
                            <?php echo $lang['contact'] ?>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <div id="body">

        <!-- Navbar start -->

        <header id="main" class="js--main">
            <nav class="header-nav">
                <div class="row">
                    <a class="brand" href="#main">OumaESS</a>
                    <a class="mobile-nav-icon"><i class="fa fa-bars js--nav-icon"></i></a>
                    <ul class="main-nav js--main-nav">
                        <li data-aos="fade-left" data-aos-anchor="#example-anchor" data-aos-offset="500"
                            data-aos-duration="700">
                            <a href="#about">
                                <?php echo $lang['about'] ?>
                            </a>
                        </li>
                        <li data-aos="fade-left" data-aos-anchor="#example-anchor" data-aos-offset="500"
                            data-aos-duration="1000">
                            <a href="#projects">
                                <?php echo $lang['projects'] ?>
                            </a>
                        </li>
                        <li data-aos="fade-left" data-aos-anchor="#example-anchor" data-aos-offset="500"
                            data-aos-duration="1300">
                            <a href="#contact">
                                <?php echo $lang['contact'] ?>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="hero-text-box" data-aos="fade-down" data-aos-duration="2000">
                <h1>
                    <?php echo $lang['h1'] ?>
                </h1>
                <a alt="" href="img/CV/CV.pdf" download>
                    <button type="submit" class="pure-button contact-button">
                        <i class="fa fa-arrow-down" aria-hidden="true"></i>
                        <?php echo $lang['download'] ?>
                    </button>
                </a>
            </div>

        </header>

        <!-- About section -->

        <section id="about" class="js--section-about js--wp-1">
            <h2>
                <?php echo $lang['about'] ?>
            </h2>
            <div class="container">
                <ul class="timeline">
                    <li>
                        <h3>2015</h3>
                        <h4>
                            <?php echo $lang['about1'] ?>
                        </h4>
                        <p class="etudes">
                            <?php echo $lang['aboutp1'] ?>
                        </p>
                    </li>
                    <li>
                        <h3>2018</h3>
                        <h4>
                            <?php echo $lang['about2'] ?>
                        </h4>
                        <p class="etudes">
                            <?php echo $lang['aboutp2'] ?>
                        </p>
                    </li>
                    <li>
                        <h3>
                            <?php echo $lang['h3'] ?>
                        </h3>
                        <h4>
                            <?php echo $lang['about3'] ?>
                        </h4>
                        <p class="etudes">
                            <?php echo $lang['aboutp3'] ?>
                        </p>
                    </li>
                </ul>

            </div>

            <div class="container">
                <div class="myProgress">
                    <div class="myBar" style="text-align:right;height:10px;"></div>
                    <p class="HTML" style="display:inline;float:left;">HTML5</p>
                    <p class="num" style="display:inline;float:right;">0%</p>
                </div>
                <br> <br>
                <div class="myProgress">
                    <div class="myBar" style="text-align:right;height:10px;"></div>
                    <p class="HTML" style="display:inline;float:left;">CSS</p>
                    <p class="num" style="display:inline;float:right;">0%</p>
                </div>
                <br> <br>
                <div class="myProgress">
                    <div class="myBar" style="text-align:right;height:10px;"></div>
                    <p class="HTML" style="display:inline;float:left;">Bootstrap</p>
                    <p class="num" style="display:inline;float:right;">0%</p>
                </div>
                <br> <br>
                <div class="myProgress">
                    <div class="myBar" style="text-align:right;height:10px;"></div>
                    <p class="HTML" style="display:inline;float:left;"> JavaScript</p>
                    <p class="num" style="display:inline;float:right;">0%</p>
                </div>
                <br> <br>
                <div class="myProgress">
                    <div class="myBar" style="text-align:right;height:10px;"></div>
                    <p class="HTML" style="display:inline;float:left;">PHP</p>
                    <p class="num" style="display:inline;float:right;">0%</p>
                </div>
                <br> <br>
                <div class="myProgress">
                    <div class="myBar" style="text-align:right;height:10px;"></div>
                    <p class="HTML" style="display:inline;float:left;">SASS</p>
                    <p class="num" style="display:inline;float:right;">0%</p>
                </div>
                <br><br>
            </div>

        </section>

        <!-- Projects -->

        <section id="projects" class="js--wp-2">
            <h2>
                <?php echo $lang['projects'] ?>
            </h2>
            <div class="web-apps row pure-g">
                <div class="img-container pure-u-1-1 pure-u-md-1-3 pure-u-sm-1-2">
                    <img alt="" src="img/portfolio/point.png" class="project-img pure-img">
                    <h4><a href="https://github.com/OumaESS/Chaleng-point">Challenge</a></h4>
                    <p>
                        <?php echo $lang['projp1'] ?>
                    </p>
                </div>
                <div class="img-container pure-u-1-1 pure-u-md-1-3 pure-u-sm-1-2">
                    <img alt="" src="img/portfolio/todo.png" class="project-img pure-img">
                    <h4><a href="https://github.com/OumaESS/todo-list-challenge">TODO-list</a></h4>
                    <p>
                        <?php echo $lang['projp2'] ?>
                    </p>
                </div>
                <div class="img-container pure-u-1-1 pure-u-md-1-3 pure-u-sm-1-2">
                    <img alt="" src="img/portfolio/Covid.png" class="project-img pure-img">
                    <h4><a href="https://github.com/OumaESS/Corona-test">Test Covid-19</a></h4>
                    <p>
                        <?php echo $lang['projp3'] ?>
                    </p>
                </div>
                <div class="img-container pure-u-1-1 pure-u-md-1-3 pure-u-sm-1-2">
                    <img alt="" src="img/portfolio/PS.png" class="project-img pure-img">
                    <h4><a href="https://github.com/OumaESS/MaquetteN1">PS/UI/Grid</a></h4>
                    <p>
                        <?php echo $lang['projp4'] ?>
                    </p>
                </div>
                <div class="img-container pure-u-1-1 pure-u-md-1-3 pure-u-sm-1-2">
                    <img alt="" src="img/portfolio/Clock.jpg" class="project-img pure-img">
                    <h4><a href="https://github.com/OumaESS/Horloge">Montre</a></h4>
                    <p>Dans ce projet, nous allons utiliser ce que nous avons appris et le mettre en pratique dans une démo, en utilisant JavaScript et CSS pour créer une horloge analogique fonctionnelle.</p>
                </div>
                <div class="img-container pure-u-1-1 pure-u-md-1-3 pure-u-sm-1-2">
                    <img alt="" src="img/portfolio/vitr.png" class="project-img pure-img" />
                    <h4><a href="https://github.com/yahyabouhlal/Workflow">Site vitraine</a></h4>
                    <p>
                        <?php echo $lang['projp5'] ?>
                    </p>
                </div>
            </div>
        </section>

        <!-- Contact -->

        <section id="contact" class="js--wp-3">
            <h2>
                <?php echo $lang['contact'] ?>
            </h2>
            <div class="pure-g row">
                <p class="contact-subtext pure-u-1-1">
                    <?php echo $lang['contactp'] ?>
                </p>
            </div>
            <div class="pure-g row">
                <div class="pure-u-1-1 pure-u-sm-1-2">
                    <form action="contact/contact.php" class="pure-form pure-form-aligned" method="POST"
                        id="contactForm" name="sentMessage" novalidate="novalidate">
                        <fieldset>
                            <div class="pure-control-group">
                                <input name="name" id="name" type="text" placeholder="Name" required="required"
                                    data-validation-required-message="Please enter your name.">
                            </div>
                            <div class="pure-control-group">
                                <input name="email" id="email" type="email" placeholder="Email Address"
                                    required="required"
                                    data-validation-required-message="Please enter your email address.">
                            </div>
                            <div class="pure-control-group">
                                <textarea name="message" id="message" placeholder="Your Message" required="required"
                                    data-validation-required-message="Please enter a message."></textarea>
                            </div>
                            <button type="submit" class="pure-button contact-button">
                                <i class="fa fa-paper-plane" aria-hidden="true"></i>
                                <?php echo $lang['send'] ?>
                            </button>
                        </fieldset>
                    </form>
                </div>
                <div class="pure-u-1-1 pure-u-sm-1-2">
                    <div class="social-links pure-g">
                        <div class="pure-u-1-2 pure-u-sm-1-2 pure-u-md-1-4">
                            <a href="https://www.linkedin.com/in/oumaima-essafir-6a9245199/" target="_blank"><i
                                    class="fa fa-linkedin" aria-hidden="true"></i></a>
                        </div>
                        <div class="pure-u-1-2 pure-u-sm-1-2 pure-u-md-1-4">
                            <a href="https://github.com/OumaESS" target="_blank"><i class="fa fa-github"
                                    aria-hidden="true"></i></a>
                        </div>
                        <div class="pure-u-1-2 pure-u-sm-1-2 pure-u-md-1-4">
                            <a href="https://www.facebook.com/oumaima.essafir.7 target="_blank"><i class="fa fa-facebook-f"
                                    aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->

        <div class="footer">
            <div>

                <a href="index.php?lang=en"><img class="lng" alt="" src="img/en.png" width="18px" height="27px"></a>
                <a href="index.php?lang=fr"><img class="lng" alt="" src="img/fr.png" width="18px" height="27px"></a>

            </div>
        </div>
    </div>



    <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.0/jquery.waypoints.min.js'></script>
    <script src="js/index.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- Anomation -->
    <script>
    AOS.init();
    </script>

    <script>
    var exec = true;

    function move(x, y, z) {
        var elem = document.getElementsByClassName(y)[z];
        var num = document.getElementsByClassName("num")[z];
        var width = 0;
        var id = setInterval(frame, 15);

        function frame() {
            if (width >= x) {
                clearInterval(id);
            } else {
                width++;
                elem.style.width = width + '%';
                num.innerText = width + "%";

            }
        }
    }

    function animate() {
        move(85, "myBar", 0);
        move(75, "myBar", 1);
        move(40, "myBar", 2);
        move(50, "myBar", 3);
        move(30, "myBar", 4);
        move(65, "myBar", 5);

    }
    about = document.getElementById("about");
    about.addEventListener("mouseenter", animate);
    </script>


</body>

</html>
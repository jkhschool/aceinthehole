<?php define('SITE_ROOT', '/soft_launch/'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Offering running and triathlon events.">

    <title>Ace in the Hole Multisport Events</title>
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- Bootstrap -->
    <link href="css/bootstrap-theme.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap-theme.css.map" type="text/plain" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="js/bootstrap.js" type="text/javascript" rel="stylesheet">
    <link href="js/bootstrap.min.js" type="text/javascript" rel="stylesheet">
    <link href="js/npm.js" type="text/javascript" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link href="css/styles.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Days+One|Barlow+Condensed:300,400,500,600" rel="stylesheet">
    <link href="js/custom.js" rel="stylesheet" type="text/javascript">
    <link rel="icon" type="image/png" href="img/favicomatic/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="img/favicomatic/favicon-16x16.png" sizes="16x16" />

</head>

<body>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.3"></script>

    <!--HEADER SECTION-->
    <header>
        <!--NAVBAR SECTION-->
        <nav class="nav navbar navbar-expand navbar-default navbar-fixed-top" id="navmain">
            <div class="container-fluid">
                <h1>Ace in the Hole <br>Multisport Events</h1>
                <section class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </section>
                <section class="collapse navbar-collapse" id="navbar-primary-collapse">
                    <ul id="menu-main" class="nav navbar-nav">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="event/event.html.php">The Event</a></li>
                        <li><a href="registration/index.php">Registration</a></li>
                        <li><a href="contact/index.php">Contact</a></li>
                    </ul>
                </section>
            </div>
        </nav>
    </header>

    <div class="topheading">
    </div>

    <h3 class="date">June 22<small class=smalldate>nd</small> and 23<small class="smalldate">rd</small>, 2019 - Join Us!</h3>

    <section class="container intro">
        <section class="row">
            <article class="col-md-9 slideshow">
                <div class="slides one">
                    <img src="img/1.jpg" alt="Many people running">
                </div>

                <div class="slides two">
                    <img src="img/3.jpg" alt="Aerial of people swimming">
                </div>

                <div class="slides three">
                    <img src="img/7.jpg" alt="Cyclists">
                </div>

                <div class="slides four">
                    <img src="img/5.jpg" alt="Man running">
                </div>

                <script>
                    var slideIndex = 0;
                    showSlides();

                    function showSlides() {
                        var i;
                        var slides = document.getElementsByClassName("slides");
                        for (i = 0; i < slides.length; i++) {
                            slides[i].style.display = "none";
                        }

                        slideIndex++;
                        if (slideIndex > slides.length) {
                            slideIndex = 1
                        }
                        slides[slideIndex - 1].style.display = "block";
                        setTimeout(showSlides, 3000);
                    }

                </script>
            </article>
            <article class="col-md-3 testhome floathome">
                <p class="testi">"I have been doing triathlons for a long time and wanted to give back to the community. This event is the perfect way for athletes like me to give to those who are new to the sport. Thank you for this opportunity!"</p>
            </article>
        </section>
    </section>
    <section class="container">
        <section class="row">
            <article class="col-md-6 aboutus">
                <div>
                    <h2 class="homeabout">About Ace in the Hole</h2>
                    <p>Ace in the Hole Multisport Events is proud to offer running and triathlon events to athletes of all shapes and sizes, national origins, sexual orientations and cultural backgrounds. We offer Events for Every Body.</p>
                </div>
            </article>
            <article class="col-md-6 aboutus">
                <h2 class="homeabout">About the Event</h2>
                <p class="about-even"> The Annual Ace in the Hole Multisport Weekend is a legendary event in the Oregon triathlon and running community. It has become a traditional destination race for athletes from across the nation. There is something for every level of athletic ability. The weekend includes a first timer triathlon, a sprint, Olympic, and Half-Iron triathlons and 10K and Half marathon runs. Come to experience your first race or come to compete to win, but make sure you come to have fun!</p>
            </article>
        </section>
    </section>
    <section class="container">
        <section class="row">
            <article class="col col-md-6 social-media-col">
                <a class="twitter-timeline" href="https://twitter.com/pcccas222?ref_src=twsrc%5Etfw" data-tweet-limit="3">Tweets by pcccas222</a>
                <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </article>
            <article class="col col-md-6 social-media-col">
                <div class="fb-page floathome" data-href="https://www.facebook.com/cas222cascade/" data-tabs="timeline" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                    <blockquote cite="https://www.facebook.com/cas222cascade/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/cas222cascade/">CAS 222</a></blockquote>
                </div>
            </article>
        </section>
    </section>

    <footer>
        <div class="container-fluid" id="social">
            <div class="row">
                <ul class="list-inline text-center">
                    <li><a target="_blank" href="https://www.facebook.com/pg/cas222cascade/about/"><img src="img/fb-icon.png" alt="Facebook Icon"></a></li>
                    <li><a target="_blank" href="https://twitter.com/pcccas222"><img src="img/twitter-icon.png" alt="Twitter Icon"></a></li>
                </ul>
                <div class="signup">
                    <a href="../registration/registration.html.php" class="sign">Register Now!</a>
                </div>
            </div>
        </div>
        <div class="container-fluid" id="weather">
            <div class="row">
                <a class="weatherwidget-io" href="https://forecast7.com/en/45d52n122d68/portland/?unit=us" data-label_1="PORTLAND" data-label_2="WEATHER" data-font="Open Sans Condensed" data-theme="clear">PORTLAND WEATHER</a>
                <script>
                    ! function(d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (!d.getElementById(id)) {
                            js = d.createElement(s);
                            js.id = id;
                            js.src = 'https://weatherwidget.io/js/widget.min.js';
                            fjs.parentNode.insertBefore(js, fjs);
                        }
                    }(document, 'script', 'weatherwidget-io-js');

                </script>
            </div>
        </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>

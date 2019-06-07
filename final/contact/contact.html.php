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
    <link href="../css/bootstrap-theme.css" rel="stylesheet" type="text/css">
    <link href="../css/bootstrap-theme.css.map" type="text/plain" rel="stylesheet">
    <link href="../css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="../js/bootstrap.js" type="text/javascript" rel="stylesheet">
    <link href="../js/bootstrap.min.js" type="text/javascript" rel="stylesheet">
    <link href="../js/npm.js" type="text/javascript" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link href="../css/styles.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Days+One|Barlow+Condensed:300,400,500,600" rel="stylesheet">
    <link href="../js/custom.js" rel="stylesheet" type="text/javascript">
    <link rel="icon" type="image/png" href="../img/favicomatic/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="../img/favicomatic/favicon-16x16.png" sizes="16x16" />

</head>

<body>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.3"></script>

<?php include '../includes/header.inc.html.php'; ?>
    <div class="topheading">
        <h2 class="head intro">Contact Us</h2>
    </div>
<section class="container" id="event-photos">
    <section class="row">
        <article class="col-md-8">
            <img src="../img/8.jpg" alt="Crowd of people running" class="img-responsive">
        </article>
        <article class="col-md-4 testcon">
            <p class="testi">"I never thought I would be able to participate in an event like this because every one I saw online looked like it was for people who had been doing this for a long time. Ace in the Hole Multisport Events created an environment where I felt like I could participate...and enjoy myself at the same time!"
            </p>
        </article>
    </section>
</section>
<div class="parentform">
<section class="container contactformat formstyles">
    <h2 class="rform">Contact Us!</h2>
        <section class="row">
            <article class="col-xs-12">
                <form role="form" method=post action=" " id="contactForm">
                    <div class="row">
                        <div class="form-group col-xs-6">
                            <label for="name" class="labelheading">Your Name: </label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Bob Smith" data-error="Please enter your name." required>
                        </div>
                        <div class="form-group col-xs-6">
                            <label for="email" class="labelheading">Your Email: </label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="example@domain.com" data-error="Please enter your email." required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-3">
                            <label for="status" class="labelheading eventshead">Inquiring as a/an:</label>
                        </div>
                        <div class="col-xs-9">
                            <select class="form-control" id="status" name="status" required>
                                <option selected>Choose...</option>
                                <option value="volunteer">Volunteer</option>
                                <option value="athlete">Athlete</option>
                                <option value="interested party">Interested Party</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-12">
                            <label for="comment" class="labelheading">Your message: </label>
                            <textarea name="comment" id="message" class="form-control" rows="4" placeholder="Please enter a message here..." data-error="Please enter a message." required></textarea>
                        </div>
                        <div class="col text-center">
                            <button type="submit" value="submit" id="form-submit" class="btn btn-success btn-lg contactbtn">Send</button>
                        </div>
                    </div>
                </form>
            </article>
        </section>
    </section>
</div>
<?php include '../includes/footer.inc.html.php'; ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>

</html>

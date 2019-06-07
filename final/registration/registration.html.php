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
        <h2 class="head intro">Register for an event</h2>
    </div>
    <section class="container">
        <section class="row">
            <section class="col-md-12">
                <img src="../img/4.jpg" alt="Two women running" class="img-responsive">
            </section>
        </section>
    </section>
    <div class="parentform">
        <section class="container regform formstyles" id="form">
            <section class="row">
                <article class="col-lg-12">
                    <h2 class="rform">Registration Form</h2>
                    <form role="form" id="regiForm" action=" " method="post" class="form-horizontal">
                        <div class="halign">
                            <h4 class="form-header">Your Details</h4>
                        </div>
                        <div class="form-group">
                            <label for="name" class="labelheading col-xs-3">Name:</label>
                            <div class="col-xs-9">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Bob Smith" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="gender" class="labelheading col-xs-3">Gender Identification:</label>
                            <div class="col-xs-9">
                                <select id="gender" class="form-control" name="gender" required>
                                    <option selected>Select one...</option>
                                    <option value="female">Female</option>
                                    <option value="male">Male</option>                                    
                                    <option value="nonbinary">Non-Binary</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="age" class="labelheading col-xs-3">Age:</label>
                            <div class="col-xs-9">
                                <input type="text" class="form-control" id="age" name="age" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="labelheading col-xs-3">Email:</label>
                            <div class="col-xs-9">
                                <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="accommodations" class="labelheading col-xs-3">Special Accommodations:</label>
                            <div class="col-xs-9">
                                <textarea form="accommodations" class="form-control" rows="5" name="accommodations" id="accommodations"></textarea>
                            </div>
                        </div>
                        <br>
                        <div class="halign">
                            <h4 class="form-header">Emergency Contact</h4>
                        </div>
                        <div class="form-group">
                            <label for="emergencyname" class="labelheading col-xs-3">Contact Name:</label>
                            <div class="col-xs-9">
                                <input type="text" class="form-control col-xs-9" id="emergencyname" name="emergencyname" data-error="Please enter your emergency contacts name." placeholder="Jane Doe" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="emergencyphone" class="labelheading col-xs-3">Contact Phone Number:</label>
                            <div class="col-xs-9">
                                <input type="tel" class="form-control" id="emergencyphone" name="emergencyphone" placeholder="555-555-5555" required>
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="halign">
                                <h4 class="form-header">Event Information</h4>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <h5 class="form-header-2">Saturday | June 22, 2019</h5>
                                    <div class="row">
                                        <div class="col-xs-4 radio-label">
                                            <h5 class="labelheading">Entering as an/a...</h5>
                                        </div>
                                        <div class="form-group col-sm-8 radio">
                                            <div class="row">
                                                <div class="col-xs-4 radio-text">
                                                    <label>
                                                        <input type="radio" name="statussaturday" class="enterOne" value="athleteSaturday">
                                                        Athlete
                                                    </label>
                                                </div>
                                                <div class="col-xs-4 radio-text">
                                                    <label>
                                                        <input type="radio" name="statussaturday" class="enterOne" value="volunteerSaturday">
                                                        Volunteer
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <label for="eventssaturday" class="labelheading eventshead">Event:</label>
                                        </div>
                                        <div class="form-group col-xs-9">
                                            <select class="form-control selectpicker choose" id="eventssaturday" name="eventssaturday">
                                                <option value="default" selected="selected">Select an event... </option>
                                                <option value="longCourse">Long Course</option>
                                                <option value="olympic">Olympic Triathlon</option>
                                                <option value="tenK">10K</option>
                                                <option value="halfMarathon">Half Marathon</option>
                                                <option value="noEvent">No Event</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <h5 class="form-header-2">Sunday | June 23, 2019</h5>
                                    <div class="row">
                                        <div class="col-xs-4 radio-label">
                                            <h5 class="labelheading">Entering as an/a...</h5>
                                        </div>
                                        <div class="form-group col-sm-8 radio">
                                            <div class="row">
                                                <div class="col-xs-4 radio-text">
                                                    <label>
                                                        <input type="radio" name="statussunday" class="enterTwo" value="athleteSunday">
                                                        Athlete
                                                    </label>
                                                </div>
                                                <div class="col-xs-4 radio-text">
                                                    <label>
                                                        <input type="radio" name="statussunday" class="enterTwo" value="volunteerSunday">
                                                        Volunteer
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <label for="eventssunday" class="labelheading eventshead">Event: </label>
                                        </div>
                                        <div class="form-group col-xs-9">
                                            <select class="form-control selectpicker choose" id="eventssunday" name="eventssunday">
                                                <option value="default" selected="selected">Select an event... </option>
                                                <option value="splashdash">Splash n Dash</option>
                                                <option value="sprint">Sprint</option>
                                                <option value="tryTri">Try-a-Tri</option>
                                                <option value="noEvent">No Event</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col text-center">
                                    <button type="reset" id="clearForm" class="btn btn-primary btn-sm ">Clear Form</button>
                                    <button type="submit" id="subForm" class="btn btn-success btn-sm ">Submit Registration</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </article>
            </section>
        </section>
    </div>
    <section class="container pickup">
        <section class="row">
            <article class="col-md-12">
                <div class="packet">
                    <h2 class="cinc">Packet Pick Up</h2>
                    <p>All packet pick up will occur at Why Worry Racing, 123 NW Everett, Portland OR. Packet pick up hours: Thursday 8-5, Friday 9-noon. No day of event packet pick up. </p>
                </div>
            </article>
        </section>
    </section>
    <section class="container includedcosts">
        <section class="row">
            <article class="col-md-6 kids">
                <img src="../img/6.jpg" alt="Kids splashing in pool" class="img-responsive">
            </article>
            <article class="col-md-6 costincludes">
                <h2 class="cinc">Cost Includes </h2>
                <div class="center-block">
                    <ol class="includes">
                        <li>Food and Beer </li>
                        <li>Access to the weekend's live entertainment and Fitness Expo</li>
                        <li>Commemorative Finisher medal</li>
                        <li>Accurate Chip Timing for competitive races</li>
                        <li>Ace in the Hole Multisport Weekend Tech Shirt</li>
                        <li>Post-event party and entertainment</li>
                    </ol>
                </div>
                <p class="note">NOTE: Tech shirts guaranteed to pre-registered participants only.</p>
            </article>
        </section>
    </section>
    <!---FOOTER--->
    <?php include '../includes/footer.inc.html.php'; ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>

</html>

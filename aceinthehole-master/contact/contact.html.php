<?php include '../includes/header.inc.html.php'; ?>
<h2 class="head intro">Contact</h2>
<section class="container" id="event-photos">
    <section class="row">
        <article class="col-md-6">
            <img src="../img/15.jpg" alt="" class="img-responsive">
        </article>
        <article class="col-md-6 testcon">
            <p class="testi">"I never thought I would be able to participate in an event like this because every one I saw online looked like it was for people who had been doing this for a long time. Ace in the Hole Multisport Events created an environment where I felt like I could participate...and enjoy myself at the same time!"
            </p>
        </article>
    </section>
</section>
<div id="contactstyle">
    <section class="container">
        <section class="row">
            <article class="col col-sm-6 col-sm-offset-3">
                <form role="form" id="contactForm" novalidate="true">
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label for="name" class="labelHeading">Your Name: </label>
                            <input type="text" class="form-control" id="name" placeholder="Bob Smith" data-error="Please enter your name." required>
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="email" class="labelHeading">Your Email: </label>
                            <input type="email" class="form-control" id="email" placeholder="example@domain.com" data-error="Please enter your email." required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="radio-label col-sm-1">
                            <p>Interested as a/an...</p>
                        </div>
                        <div class="form-group col-sm-11 radio">
                            <div class="col-sm-3 form-text">
                                <label class="radio-contact">
                                    <input type="radio" name="contactPos" value="volunteer" required class="radio-contact">
                                    <p>Volunteer</p>
                                </label>
                            </div>
                            <div class="col-sm-3 form-text">
                                <label class="radio-contact">
                                    <input type="radio" name="contactPos" value="athlete" required class="radio-contact">
                                    <p>Athlete</p>
                                </label>
                            </div>
                            <div class="col-sm-4 form-text">
                                <label class="contact-radio">
                                    <input type="radio" name="contactPos" value="other" required class="radio-contact">
                                    <p>Other</p>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-12">
                            <label for="message" class="labelheading">Your message: </label>
                            <textarea id="message" class="form-control" rows="4" placeholder="Please enter a message here..." data-error="Please enter a message." required></textarea>
                        </div>
                        <div class="col text-center">
                            <button type="submit" id="form-submit" class="btn btn-success btn-lg">Send</button>
                        </div>
                    </div>
                </form>
            </article>
        </section>
    </section>
</div>
<?php include '../includes/footer.inc.html.php'; ?>

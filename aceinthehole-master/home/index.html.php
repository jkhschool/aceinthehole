<?php include '../includes/header.inc.html.php'; ?>


<section class="container intro">
    <section class="row">
        <section class="col-md-12 slideshow">
            <div class="slides one">
                <img src="../img/1.jpg" alt="">
            </div>

            <div class="slides two">
                <img src="../img/3.jpg" alt="">
            </div>

            <div class="slides three">
                <img src="../img/14.jpg" alt="">
            </div>

            <div class="slides four">
                <img src="../img/5.jpg" alt="">
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
        </section>
    </section>
</section>

<section class="container">
    <section class="row">
        <article class="col col-md-12 test">
            <p class="testi">"I have been doing triathlon for a long time and wanted to give back to the community. This event is the perfect way for athletes like me to give to those who are new to the sport. Thank you for this opportunity!"</p>
        </article>
    </section>
</section>
<section class="container">
    <section class="row">
        <article class="col-md-6">
            <h2 class="btnclick">About Ace in the Hole</h2>
            <p>Ace in the Hole Multisport Events is proud to offer running and triathlon events to athletes of all shapes and sizes, national origins, sexual orientations and cultural backgrounds. We offer Events for Every Body.</p>
        </article>
        <article class="col col-md-6">
            <h2 class="btnclick">About the Event</h2>
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
            <div class="fb-page" data-href="https://www.facebook.com/cas222cascade/" data-tabs="timeline" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                <blockquote cite="https://www.facebook.com/cas222cascade/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/cas222cascade/">CAS 222</a></blockquote>
            </div>
        </article>
    </section>
</section>


<?php include '../includes/footer.inc.html.php'; ?>

<?php include '../includes/header.inc.html.php'; ?>
<h2 class="head intro">The Event</h2>
<section class="container" id="event-photos">
    <section class="row">
        <article class="col-md-6">
            <img src="../img/13.jpg" alt="" class="img-responsive">
        </article>
        <article class="col-md-6">
            <h2 class="btnclick">Starting Times:</h2>
            <h3>Saturday</h3>
            <br>
            <br>
            <p class="times">7:00 AM</p>
            <h4 class="timein">Long Course Triathlon</h4>
            <br>
            <br>
            <p class="times">7:15 AM</p>
            <h4 class="timein">10K</h4>
            <br>
            <br>
            <p class="times">7:15 AM</p>
            <h4 class="timein">Half Marathon</h4>
            <br>
            <br>
            <p class="times">7:30 AM</p>
            <h4 class="timein">Olympic Triathlon</h4>
            <br>
            <br>
            <h3>Sunday</h3>
            <br>
            <br>
            <p class="times">8:00 AM</p>
            <h4 class="timein">Sprint Triathlon</h4>
            <br>
            <br>
            <p class="times">8:20 AM</p>
            <h4 class="timein">Try-a-Tri</h4>
            <br>
            <br>
            <p class="times">12:00 PM</p>
            <h4 class="timein">Splash n Dash</h4>
        </article>
    </section>
</section>

<div id="eventinform">
    <section class="container" id="event-bring">
        <section class="row">
            <article class="col-md-12 center">
                <button onclick="functionBring()" class="btnclick">What to Bring +</button>
                <div id="bring">
                    <p class="about-even"> Watch the weather closely. The show goes on no matter what the weather is doing. &nbsp;You must wear your chip timing piece during the entire event. You will be given a band that will hold your chip timing piece around your ankle throughout the entire event. Be sure that it is snapped tightly. Be sure to have your Chip Timing piece on before you start the race and be sure to step over the timing mats after each segment of the race. If you are wearing a wet-suit, make sure the timing piece goes under your wetsuit otherwise, you will have a very difficult time getting off your wet suit.</p> &nbsp;

                    <h4>Swim: </h4>
                    <p>Wetsuits are optional for the swim but will provide buoyancy and warmth. However, many people opt for no wetsuit for a triathlon so no worries. We will provide you with a swim cap but you will want to bring your own goggles.</p> &nbsp;

                    <h4>Bike: </h4>
                    <p>A biking helmet is mandatory. You will also receive 2 stickers in your package with your race number on them. The small sticker should go on the front of your helmet. The bigger sticker will wrap around your bike frame. Road or mountain bikes are acceptable. For safety reasons, be sure to have end-caps on the end of your handle-bars.</p> &nbsp;

                    <h4>Run: </h4>
                    <p>You must finish the race with your bib number on the front of you. Some people choose to pin it on at the beginning of the race and have it on for the whole event so they don't have to worry about it. Others pin it on a singlet that they put on once they finish the swim before they head out for the bike. Others use an elastic racing strap that they pin their bib number to and then quickly strap it on before they leave for the run. Use whatever option feels best for you. <br>
                        Remember to bring a change of clothing so you can enjoy the post-event festivities. </p>
                </div>
            </article>
        </section>
    </section>
    <script>
        function functionBring() {
            var x = document.getElementById("bring");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }

    </script>
    <section class="container" id="event-faq">
        <section class="row">
            <article class="col-md-12 center">
                <button onclick="functionFaq()" class="btnclick">FAQ +</button>
                <div id="faq">
                    <h3>What are the Rules?</h3> <br>
                    <p>We currently adhere to the USAT Rules for Triathlon and Duathlon. Important rules include no drafting, you must wear a helmet and music is ABSOLUTELY NOT allowed during the bike for obvious safety reasons.</p> &nbsp;

                    <h3>Can I use a personal music device while cycling?</h3> <br>
                    <p>Absolutely no music devices are allowed during the bike segment for obvious safety risks and will result in immediate disqualification.</p> &nbsp;

                    <h3>Can I use a personal music device while running?</h3> <br>
                    <p>During any running segments, we prefer for athletes to NOT use music devices to maximize safety, assure a fair competitive environment and assure athletes can hear all course marshal instructions. With that said, we also understand that many athletes rely on music to help endure the challenge of running. To accommodate the needs of our athletes while still assuring maximum safety and a fair, competitive environment, here is the arrangement that we can accommodate.<br>

                        If you chose to use a personal music device, you must always keep one ear open for instructions so only one ear-bud can be used at any time. In addition, if you opt to use music, you will not be eligible for awards, points and rankings. So as an athlete, you have to make a choice: music or awards/points/rankings.
                        If you are using a personal music devise with two earbuds, you will be immediately disqualified. Trust us, we don't want to have to enforce a disqualification but in order to assure the safety of all athletes, this is a very important rule.
                        We also request that if you chose to use a personal music device that you keep the volume to a minimum to assure all instructions can be heard.</p> &nbsp;


                    <h3>Do I need to wear a wetsuit?</h3><br>
                    <p>No, you do not need to wear a wetsuit. Many will not wear a wetsuit while others will choose to wear a wetsuit because of the buoyancy and warmth factor.</p> &nbsp;

                    <h3>Do I have to use a road or racing bike?</h3><br>
                    <p>No. We welcome any type of bike as long as it is functioning properly with brakes and endcaps at the end of your handlebars.</p>
                </div>
            </article>
        </section>
    </section>
    <script>
        function functionFaq() {
            var x = document.getElementById("faq");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }

    </script>
</div>

<!---FOOTER--->
<?php include '../includes/footer.inc.html.php'; ?>

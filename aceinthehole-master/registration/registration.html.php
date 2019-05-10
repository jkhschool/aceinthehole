<?php include '../includes/header.inc.html.php'; ?>
<h2 class="head intro">Registration</h2>
<section class="container">
    <section class="row">
        <section class="col-md-12">
            <img src="../img/4.jpg" alt="" class="img-responsive">
        </section>
    </section>
</section>
<div id="courseinformation">
    <section class="container">
        <section class="row">
            <h2 class="cinfo">Course Information: </h2>
            <section class="col-md-12 course-details">
                <div id="details">
                    <p>Water temperature is expected to be between 62 and 66 degrees. The temperature will be taken on Friday and the morning of the race. Wetsuits are recommended.</p><br>
                    <button onclick="functionLong()" class="btndetails">Long Course $240 +</button>
                    <div id="longcour">
                        <h3>Long Course SWIM (1.2mi): </h3>
                        <p>Participants will make two counter-clockwise loops. Large buoys will mark the turn points. Kayakers will be positioned on the water to support the swimmers. Medical support will be present on the beach.</p> &nbsp;

                        <h3>Long Course BIKE (58mi):</h3>
                        <p> A scenic point-to-point course that travels over gently rolling hills prior to three hard climbs. The bike course will be marked with large directional signage and there will be course marshals at key intersections to help direct you. </p> &nbsp;

                        <h3>Long Course RUN (13.1mi): </h3>
                        <p> A mostly flat loop course on widely paved bike paths that traverse through and around this beautiful and scenic destination resort (two hills total with a minimal elevation gain).</p>
                    </div>
                    <script>
                        function functionLong() {
                            var x = document.getElementById("longcour");
                            if (x.style.display === "none") {
                                x.style.display = "block";
                            } else {
                                x.style.display = "none";
                            }
                        }

                    </script>
                    <br>
                    <button onclick="functionOlympic()" class="btndetails">Olympic $110 +</button>
                    <div id="olymp">
                        <h3>OLYMPIC SWIM (1,500 meters): </h3>
                        <p> Participants will make two counter-clockwise loops. Large buoys will mark the turn points. Kayakers will be positioned on the water to support the swimmers. Medical support will be present on the beach.</p> &nbsp;

                        <h3>OLYMPIC BIKE (28mi): </h3>
                        <p>A scenic point-to-point course that travels over gently rolling hills. The bike course will be marked with large directional signage and course marshals will be present at key intersections. </p>&nbsp;

                        <h3>OLYMPIC RUN 10K: </h3>
                        <p> A mostly flat loop course on widely paved bike paths that traverse through and around this beautiful and scenic destination resort (one hill total with a minimal elevation gain).</p>&nbsp;
                    </div>
                    <script>
                        function functionOlympic() {
                            var x = document.getElementById("olymp");
                            if (x.style.display === "none") {
                                x.style.display = "block";
                            } else {
                                x.style.display = "none";
                            }
                        }

                    </script>
                    <br>
                    <button onclick="functionSprint()" class="btndetails">Sprint $90 +</button>
                    <div id="sprin">
                        <p>Course will offer a 1-loop 1/2 mile swim, the exact same 28 mile Bike Course as the Olympic distance and a 5km run.</p>&nbsp;
                    </div>
                    <script>
                        function functionSprint() {
                            var x = document.getElementById("sprin");
                            if (x.style.display === "none") {
                                x.style.display = "block";
                            } else {
                                x.style.display = "none";
                            }
                        }

                    </script>
                    <br>
                    <button onclick="functionTry()" class="btndetails">Try-A-Tri $65 +</button>
                    <div id="tryatri">
                        <p>This novice race is designed for the first time triathlete, those new to the sport, our Junior Triathletes. The swim is a shorter, more manageable 1/4 mile distance, (instead of the standard 1/2-mile Sprint distance swim), 10 mile bike ride (vs 12 miles and it's a 2 loop course making it very spectator friendly!) and a flat 2 mile run (vs 3 mile sprint course).</p>&nbsp;
                    </div>
                    <script>
                        function functionTry() {
                            var x = document.getElementById("tryatri");
                            if (x.style.display === "none") {
                                x.style.display = "block";
                            } else {
                                x.style.display = "none";
                            }
                        }

                    </script>
                    <br>
                    <button onclick="functionHalf()" class="btndetails">Half Marathon $75 +</button>
                    <div id="halfmar">
                        <p>Half-Marathon event starts and finishes in the Athletes Village to the cheers of the enthusiastic crowd. Once finished, runners can enjoy the finish line festivities, including the Sports and Fitness Expo and live entertainment. Post-race refreshments will be provided and the Awards Ceremony for the Half-Marathon will begin once the results have been certified. </p>&nbsp;
                    </div>
                    <script>
                        function functionHalf() {
                            var x = document.getElementById("halfmar");
                            if (x.style.display === "none") {
                                x.style.display = "block";
                            } else {
                                x.style.display = "none";
                            }
                        }

                    </script>
                    <br>
                    <button onclick="functionTen()" class="btndetails">10K $50 +</button>
                    <div id="tenK">
                        <p>The 10K event starts and finishes in the Athletes Village. The paths are approximately 6 ft wide, perfectly paved and wind around through the forest. Each course has only two small hills with a minimal elevation gain to navigate and a fast downhill to flat finish to the roaring cheers of the crowd.</p>&nbsp;
                    </div>
                    <script>
                        function functionTen() {
                            var x = document.getElementById("tenK");
                            if (x.style.display === "none") {
                                x.style.display = "block";
                            } else {
                                x.style.display = "none";
                            }
                        }

                    </script>
                    <br>
                    <button onclick="functionSplash()" class="btndetails">Splash n' Dash +</button>
                    <div id="splashdash">
                        <p>Kids event for participants ages 4 to 15. This is a 100 yard swim and a 50 yard dash.</p>
                    </div>
                    <script>
                        function functionSplash() {
                            var x = document.getElementById("splashdash");
                            if (x.style.display === "none") {
                                x.style.display = "block";
                            } else {
                                x.style.display = "none";
                            }
                        }

                    </script>
                </div>
            </section>
        </section>
    </section>
</div>

<section class="container">
    <section class="row">
        <article class="col-md-6 col-center">
            <h3>Cost Includes </h3>
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
        <article class="col-md-6">
            <img src="../img/8.jpg" alt="" class="img-responsive">
        </article>
    </section>
</section>

<section class="container" id="form">
    <section class="row">
        <article class="col-lg-12">
            <h2 class="rform">Registration Form</h2>
            <form role="form" id="regiForm" action="registration-form-user.php" method="post" class="form-inline">
                <div class="halign">
                    <h4 class="form-header">Your Details</h4>
                </div>
                <div class="form-group">
                    <label for="name" class="labelheading">Name: </label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Bob Smith" required>
                </div>
                <div class="form-group">
                    <label for="inputGender" class="labelheading">Gender: </label>
                    <select id="inputGender" class="form-control" required>
                        <option selected>Select one...</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="nonbinary">Non-Binary</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="email" class="labelheading">Email: </label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" required>
                </div>
                <div class="form-group">
                    <label for="phone" class="labelheading">Phone Number: </label>
                    <input type="tel" class="form-control" id="phone" name="phone" placeholder="555-555-5555" required>
                </div>
                <div class="form-group">
                    <label for="specialA" class="labelheading">Special Accommodations: </label>
                    <textarea form="specialA" class="form-control" rows="10" name="specialA" id="specialA"></textarea>
                </div>
                <h4 class="form-header">Your Emergency Contact</h4>
                <div class="form-group">
                    <label for="emerName" class="labelheading">Contact Name: </label>
                    <input type="text" class="form-control" id="yourEmergency" name="yourEmergency" data-error="Please enter your emergency contacts name." placeholder="Jane Doe" required>
                </div>
                <div class="form-group">
                    <label for="phone" class="labelheading">Contact Phone Number: </label>
                    <input type="tel" class="form-control" id="phone" name="phone" placeholder="555-555-5555" required>
                </div>


                <div class="form-group">
                    <h4 class="form-header">Event Information</h4>
                    <div class="row">
                        <div class="col-sm-6">
                            <h5 class="form-header-2">Saturday | June 22, 2019</h5>
                            <div class="row">
                                <div class="col-xs-2 radio-label">
                                    <h5>Entering as an/a...</h5>
                                </div>
                                <div class="form-group col-sm-10 radio">
                                    <div class="row">
                                        <div class="col-xs-4 form-text">
                                            <label>
                                                <input type="radio" name="enterSat" class="enterOne" value="athleteSA">
                                                <p>Athlete</p>
                                            </label>
                                        </div>
                                        <div class="col-xs-4 form-text">
                                            <label>
                                                <input type="radio" name="enterSat" class="enterOne" value="volSA">
                                                <p>Volunteer</p>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-2">
                                    <label for="saEvent" class="labelHeading">Event: </label>
                                </div>
                                <div class="form-group col-xs-10">
                                    <select class="form-control selectpicker" id="saEvent" disabled="">
                                        <option id="saOption">Select "Athlete" or "Volunteer" first </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <h5 class="form-header-2">Sunday | June 23, 2019</h5>
                            <div class="row">
                                <div class="col-xs-2 radio-label">
                                    <h5>Entering as an/a...</h5>
                                </div>
                                <div class="form-group col-sm-10-radio">
                                    <div class="row">
                                        <div class="col-xs-4 form-text">
                                            <label>
                                                <input type="radio" name="enterSun" class="enterTwo" value="athleteSU">
                                                <p>Athlete</p>
                                            </label>
                                        </div>
                                        <div class="col-xs-4 form-text">
                                            <label>
                                                <input type="radio" name="enterSun" class="enterTwo" value="volSU">
                                                <p>Volunteer</p>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-2">
                                    <label for="eventSu" class="labelHeading">Event: </label>
                                </div>
                                <div class="form-group col-xs-10">
                                    <select class="form-control selectpicker" id="eventSu" name="eventSu" required>
                                        <option id="oneSu" selected disabled value>Select "Athlete" or "Volunteer" first </option>
                                        <option value="longCo">Long Course</option>
                                        <option value="olymp">Olympic</option>
                                        <option value="tenK">10K</option>
                                        <option value="halfMar">Half Marathon</option>
                                        <option value="sprint">Sprint</option>
                                        <option value="tryTri">Try-a-Tri</option>
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
            </form>
        </article>
    </section>
</section>
<section class="container">
    <section class="row">
        <article class="col-md-12">
            <div class="packet">
                <h2>Packet Pick Up</h2>
                <p>All packet pick up will occur at Why Worry Racing, 123 NW Everett, Portland OR. Packet pick up hours: Thursday 8-5, Friday 9-noon. No day of event packet pick up. </p>
            </div>
        </article>
    </section>
</section>
<!---FOOTER--->
<?php include '../includes/footer.inc.html.php'; ?>

<?php
/*
    We're using require_once here because we want to:
    1. Only include the file once
    2. Show us a FATAL ERROR if missing or we've linked the file incorrectly

    Other ways to include files are available:
    include(); - include files multiple times, only warning if missing
    require(); - include file multiple times, FATAL ERROR if missing
    include_once(); - include file ONLY once, only warning if missing

    Adding the _once multiple times just means any future _once of the
    same file gets ignored.

    So:
    require_once('assets/inc/header.php');
    require_once('assets/inc/header.php');
    require_once('assets/inc/header.php');

    Only the first one is loaded, and the others are ignored.
*/

require_once('assets/inc/header.php');
?>

<div class="background">
                <div class="main-pic-details">
                    <img src="./assets/img/mercury-details.jpg" alt="Planet Mercury">
                </div><!-- main-pic-details -->
                <div class="row">
                    <div class="col-9">
                        <div class="content">
                            <h2>Mercury</h2>
                            <p>The smallest planet in our solar system and nearest to the Sun, Mercury is only slightly larger than Earth's Moon. From the surface of Mercury, the Sun would appear more than three times as large as it does when viewed from Earth, and the sunlight would be as much as 11 times brighter. Despite its proximity to the Sun, Mercury is not the hottest planet in our solar system – that title belongs to nearby Venus, thanks to its dense atmosphere. But Mercury is the fastest planet, zipping around the Sun every 88 Earth days. Mercury is appropriately named for the swiftest of the ancient Roman gods.</p>
                            <h2>Size and Distance</h2>
                            <p>With a radius of 1,516 miles (2,440 kilometers), Mercury is a little more than 1/3 the width of Earth. If Earth were the size of a nickel, Mercury would be about as big as a blueberry. From an average distance of 36 million miles (58 million kilometers), Mercury is 0.4 astronomical units away from the Sun. One astronomical unit (abbreviated as AU), is the distance from the Sun to Earth. From this distance, it takes sunlight 3.2 minutes to travel from the Sun to Mercury.  </p>
                            <img src="./assets/img/mercury-small-1a.jpg" alt="Mercury layers">
                            <img src="./assets/img/mercury-small-2a.jpg" alt="">
                            <h2>Formation</h2>
                            <p>Mercury formed about 4.5 billion years ago when gravity pulled swirling gas and dust together to form this small planet nearest the Sun. Like its fellow terrestrial planets, Mercury has a central core, a rocky mantle and a solid crust.</p>
                            <h2>Potential for Life</h2>
                            <p>Mercury's environment is not conducive to life as we know it. The temperatures and solar radiation that characterize this planet are most likely too extreme for organisms to adapt to.</p>
                        </div><!-- content -->
                    </div><!-- col-9 -->


                    <div class="col-3">
                        <div class="side-text">
                            <h2>Ten things to know about Mercury</h2>
                            <ol>
                                <li>
                                    <h3>SMALLEST</h3>
                                    Mercury is the smallest planet in our solar system—only slightly larger than Earth's Moon.</li>

                                <li>
                                    <h3>INSIDER</h3>
                                    It is the closest planet to the Sun at a distance of about 36 million miles (58 million kilometers) or 0.39 AU.</li>

                                <li>
                                    <h3>LONG DAYS, SHORT YEARS</h3>
                                    One day on Mercury (the time it takes for Mercury to rotate or spin once with respect to the stars) takes 59 Earth days. One day-night cycle on Mercury takes 175.97 Earth days. Mercury makes a complete orbit around the Sun (a year in Mercury time) in just 88 Earth days.</li>

                                <li>
                                    <h3>ROUGH SURFACE</h3>
                                    Mercury is a rocky planet, also known as a terrestrial planet. Mercury has a solid, cratered surface, much like the Earth's moon.</li>

                                <li>
                                    <h3>CAN'T BREATHE IT</h3>
                                    Mercury's thin atmosphere, or exosphere, is composed mostly of oxygen (O2), sodium (Na), hydrogen (H2), helium (He), and potassium (K). Atoms that are blasted off the surface by the solar wind and micrometeoroid impacts create Mercury's exosphere.</li>

                                <li>
                                    <H3>MOONLESS</H3>
                                    Mercury has no moons.</li>

                                <li>
                                    <H3>RINGLESS</H3>
                                    There are no rings around Mercury.</li>

                                <li>
                                    <H3>TOUGH PLACE TO LIVE</H3>
                                    No evidence for life has been found on Mercury. Daytime Temperatures can reach 430 degrees Celsius (800 degrees Fahrenheit) and drop to -180 degrees Celsius (-290 degrees Fahrenheit) at night. It is unlikely life (as we know it) could survive on this planet.</li>

                                <li>
                                    <H3>BIG SUN</H3>
                                    Standing on Mercury's surface at its closest approach to the Sun, our star would appear more than three times larger than it does on Earth.</li>

                                <li>
                                    <h3>ROBOTIC VISITORS</h3>
                                    The two spacecraft of ESA-JAXA's BepiColombo are en route to Mercury. NASA's Mariner 10 was the first mission to explore Mercury. NASA's MESSENGER was the first to orbit the innnermost planet.</li>
                            </ol>
                        </div><!-- side-text -->
                    </div><!-- col-3 -->
                </div><!-- row -->
</div><!-- background -->

<?php require_once('assets/inc/footer.php') ?>

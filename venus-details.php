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
                    <img src="assets/img/venus-details.jpg" alt="Planet Venus">
                </div><!-- main-pic-details -->
                <div class="row">
                    <div class="col-9">
                        <div class="content">
                            <h2>Venus</h2>
                            <p>Venus is the second planet from the Sun and our closest planetary neighbor. Similar in structure and size to Earth, Venus spins slowly in the opposite direction from most planets. Its thick atmosphere traps heat in a runaway greenhouse effect, making it the hottest planet in our solar system with surface temperatures hot enough to melt lead. Glimpses below the clouds reveal volcanoes and deformed mountains. Venus is named for the ancient Roman goddess of love and beauty, who was known as Aphrodite to the Ancient Greeks.</p>

                            <h2>Size and Distance</h2>
                            <p>With a radius of 3,760 miles (6,052 kilometers), Venus is roughly the same size as Earth — just slightly smaller. From an average distance of 67 million miles (108 million kilometers), Venus is 0.7 astronomical units away from the Sun. One astronomical unit (abbreviated as AU), is the distance from the Sun to Earth. It takes sunlight 6 minutes to travel from the Sun to Venus.</p>

                            <img src="assets/img/venus-small-1.jpg" alt="Venus layers">

                            <img src="assets/img/venus-small-2.jpg" alt="Venus Shadows">

                            <h2>Formation</h2>
                            <p>When the solar system settled into its current layout about 4.5 billion years ago, Venus formed when gravity pulled swirling gas and dust together to form the second planet from the Sun. Like its fellow terrestrial planets, Venus has a central core, a rocky mantle and a solid crust.</p>

                            <h2>Potential for Life</h2>
                            <p>No human has visited Venus, but the spacecraft that have been sent to the surface of Venus do not last very long there. Venus' high surface temperatures overheat electronics in spacecraft in a short time, so it seems unlikely that a person could survive for long on the Venusian surface. There is speculation about life existing in Venus' distant past, as well as questions about the possibility of life in the top cloud layers of Venus' atmosphere, where the temperatures are less extreme.</p>

                        </div><!-- content -->
                    </div><!-- col-9 -->


                    <div class="col-3">
                        <div class="side-text">
                            <h2>Ten things to know about Venus</h2>
                            <ol>
                                <li>
                                    <h3>EARTH-SIZED</h3>

                                    If the sun were as tall as a typical front door, the Earth and Venus would each be about the size of a nickel.
                                <li>

                                    <h3>SECOND ROCK</h3>

                                    Venus orbits our Sun, a star. Venus is the second closest planet to the sun at a distance of about 67 million miles (108 million km).</li>

                                <li>
                                    <h3>A DAY LONGER THAN A YEAR</h3>

                                    One day on Venus lasts 243 Earth days because Venus spins backwards, with its sun rising in the west and setting in the east.</li>

                                <li>
                                    <h3>DIVERSE TERRAIN</h3>

                                    Venus' solid surface is a volcanic landscape covered with extensive plains featuring high volcanic mountains and vast ridged plateaus.</li>

                                <li>
                                    <h3>MOONLESS AND RINGLESS</h3>

                                    Venus has no moons and no rings.</li>

                                <li>
                                    <H3>GREENHOUSE EFFECT</H3>

                                    The planet’s surface temperature is about 900 degrees Fahrenheit (465 degrees Celsius)—hot enough to melt lead.</li>

                                <li>
                                    <H3>WATER ON VENUS</H3>

                                    Many scientists believe water once existed on the surface. Future Venus explorers will search for evidence of an ancient ocean.</li>

                                <li>
                                    <H3>MANY VISITORS</H3>

                                    More than 40 spacecraft have explored Venus. The ‘90s Magellan mission mapped the planet's surface and Akatsuki is currently orbiting Venus.</li>

                                <li>
                                    <H3>LIFE ON VENUS</H3>

                                    Venus’ extreme temperatures and acidic clouds make it an unlikely place for life as we know it.</li>

                                <li>
                                    <h3>SUPER ROTATING ATMOSPHERE</h3>

                                    While the surface rotates slowly, the winds blow at hurricane force, sending clouds completely around the planet every five days.</li>

                            </ol>
                        </div><!-- side-text -->
                    </div><!-- col-3 -->
                </div><!-- row -->
</div><!-- background -->

<?php require_once('assets/inc/footer.php') ?>

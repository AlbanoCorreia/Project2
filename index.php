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


                <div class="mercury">
                    <div class="planet-head">
                        <h1>Mercury</h1>
                        <p><a href="mercury-gallery-1.php">Gallery</a><a href="#">Details</a></p>
                </div><!-- planet-head -->
                </div><!-- mercury -->
        		<div class="venus">
                    <div class="planet-head">
                        <h1>Venus</h1>
                        <p><a href="#">Gallery</a><a href="#">Details</a></p>
                </div><!-- planet-head -->
                </div><!-- venus -->
        		<div class="earth">
                    <div class="planet-head">
                        <h1>Earth</h1>
                        <p><a href="#">Gallery</a><a href="#">Details</a></p>
                </div><!-- planet-head -->
                </div><!-- earth -->
        		<div class="mars">
                    <div class="planet-head">
                        <h1>Mars</h1>
                        <p><a href="#">Gallery</a><a href="#">Details</a></p>
                </div><!-- planet-head -->
                </div><!-- mars -->
        		<div class="jupiter">
                    <div class="planet-head">
                        <h1>Jupiter</h1>
                        <p><a href="#">Gallery</a><a href="#">Details</a></p>
                </div><!-- planet-head -->
                </div><!-- jupiter -->
        		<div class="saturn">
                    <div class="planet-head">
                        <h1>Saturn</h1>
                        <p><a href="#">Gallery</a><a href="#">Details</a></p>
                </div><!-- planet-head -->
                </div><!-- saturn -->
        		<div class="uranus">
                    <div class="planet-head">
                        <h1>Uranus</h1>
                        <p><a href="#">Gallery</a><a href="#">Details</a></p>
                </div><!-- planet-head -->
                </div><!-- uranus -->
        		<div class="neptune">
                    <div class="planet-head">
                        <h1>Neptune</h1>
                        <p><a href="#">Gallery</a><a href="#">Details</a></p>
                </div><!-- planet-head -->
                </div><!-- neptune -->



<?php require_once('assets/inc/footer.php') ?>

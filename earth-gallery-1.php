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
                <div class="row">
                    <div class="col-8">
                        <div class="content">
                        <img src="../assets/img/earth-a.jpg" alt="Earth Planet"/>
                        <h1>NASA Releases New High-Resolution Earthrise Image</h1>
                        <p>NASA's Lunar Reconnaissance Orbiter (LRO) recently captured a unique view of Earth from the spacecraft's vantage point in orbit around the moon."The image is simply stunning," said Noah Petro, Deputy Project Scientist for LRO at NASA's Goddard Space Flight Center in Greenbelt, Maryland. "The image of the Earth evokes the famous 'Blue Marble' image taken by Astronaut Harrison Schmitt during Apollo 17, 43 years ago, which also showed Africa prominently in the picture."</p><a class="button" href="earth-details.php">Details</a>
                    </div><!-- content -->
                    </div><!-- col9 -->

                    <div class="col-4">
                        <div class="side-bar">
                            <ul>
                                <li><a href="earth-gallery-1.php"><img src="./assets/img/earth-side-a.jpg" alt="Earth Planet 1"></a></li>
                                <li><a href="earth-gallery-2.php"><img src="./assets/img/earth-side-b.jpg" alt="Earth Planet 2"></a></li>
                                <li><a href="earth-gallery-3.php"><img src="./assets/img/earth-side-c.jpg" alt="Earth Planet 3"></a></li>
                                <li><a href="earth-gallery-4.php"><img src="./assets/img/earth-side-d.jpg" alt="Earth Planet 4"></a></li>
                            </ul>
                        </div><!-- side-bar-->
                    </div><!-- col3 -->
                </div><!-- row -->

</div><!-- background -->

<?php require_once('assets/inc/footer.php') ?>

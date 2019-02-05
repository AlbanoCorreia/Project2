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
                        <img src="../assets/img/mercury-a.jpg" alt="Mercury Planet"/>
                        <h1>Colors of the Innermost Planet - Mercury</h1>
                        <p>This colorful view of Mercury was produced by using images from the color base map imaging campaign during MESSENGER's primary mission.</p> <a  class="button" href="mercury-details.php">Details</a>
                    </div><!-- content -->
                    </div><!-- col9 -->

                    <div class="col-4">
                        <div class="side-bar">
                            <ul>
                                <li><a href="mercury-gallery-1.php"><img src="./assets/img/mercury-side-a.jpg" alt="Mercury Planet 1"></a></li>
                                <li><a href="mercury-gallery-2.php"><img src="./assets/img/mercury-side-b.jpg" alt="Mercury Planet 2"></a></li>
                                <li><a href="mercury-gallery-3.php"><img src="./assets/img/mercury-side-c.jpg" alt="Mercury Planet 3"></a></li>
                                <li><a href="mercury-gallery-4.php"><img src="./assets/img/mercury-side-d.jpg" alt="Mercury Planet 4"></a></li>
                            </ul>
                        </div><!-- side-bar-->
                    </div><!-- col3 -->
                </div><!-- row -->
</div><!-- background -->


<?php require_once('assets/inc/footer.php') ?>

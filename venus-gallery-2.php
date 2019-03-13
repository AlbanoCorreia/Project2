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


<div class="row">
    <div class="col-8">
        <div class="content">
            <img src="./assets/img/venus-b.jpg" alt="Venus Planet"/>
            <h1>Hemispheric View of Venus</h1>
            <p>The hemispheric view of Venus, as revealed by more than a decade of radar investigations culminating in the 1990-1994 Magellan mission, is centered at 180 degrees east longitude. The Magellan spacecraft imaged more than 98 percent of Venus at a resolution of about 100 m; the effective resolution of this image is about 3 km.</p> <a  class="button" href="venus-details.php">Details</a>
        </div><!-- content -->
    </div><!-- col8 -->

    <div class="col-4">
        <div class="side-bar">
            <ul>
                <li><a href="venus-gallery-1.php"><img src="./assets/img/venus-side-a.jpg" alt="Mercury Planet 1"></a></li>
                <li><a href="venus-gallery-2.php"><img src="./assets/img/venus-side-b.jpg" alt="Mercury Planet 2"></a></li>
                <li><a href="venus-gallery-3.php"><img src="./assets/img/venus-side-c.jpg" alt="Mercury Planet 3"></a></li>
                <li><a href="venus-gallery-4.php"><img src="./assets/img/venus-side-d.jpg" alt="Mercury Planet 4"></a></li>
            </ul>
        </div><!-- side-bar-->
    </div><!-- col4 -->
</div><!-- row -->



<?php require_once('assets/inc/footer.php') ?>

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

<iframe class="maps" width="600" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJiYeCFNYEdkgRjOHYbY8bEJ4&key=AIzaSyDwRI4AQIvmEGFKlOzLVv_m3V5hObAR9ws" allowfullscreen></iframe>





<?php require_once('assets/inc/footer.php') ?>

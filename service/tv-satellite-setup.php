<?php
define('SAFETORUN', TRUE);
$mytitle = 'TV & Satellite Setup';
$myMetaDescription = 'Do you need help in setting up your Digital TV or Satellite installations? We offer assistance in setting up Digital TV and Satellites, get in touch for a free quote.';
require_once($_SERVER['DOCUMENT_ROOT'] . "/resources/config.php");
require_once(TEMPLATES_PATH . "/core.php");
// HMTL Begins Here
// Body
// Header & Menu
?>
<div class="grid-container" id="main-content">
    <!-- Start of Main Container -->
    <section class="grid-x grid-padding-x">
        <div class="large-12 cell">
            <h1><?php echo $mytitle ?></h1>
            <h2>TV Setup Service - Have you just got a new TV?</h2>
            <p>You've just bought a brand new state of the art TV. Yet have you thought about how to setup the TV so that you get the best from it. TV's are now more complex than ever, they can access the internet, Netflix, Amazon Prime and a host of other catch up services. To get the best from your new TV we recommend that you have it professionally set up. We can ensure that your TV is setup correctly and is displaying the best picture for your home.</p>
            <div class="portrait-images">
                <img src="../img/portfolio/satellite_install_manchester_img_12.jpeg" class="float-left" alt="Satellite Installtion in Manchester">
                <img src="../img/portfolio/satellite_install_manchester_img_7.jpeg" class="float-right" alt="Satellite Installtion in Manchester">
            </div>
            <h3>Professional TV Installation</h3>
            <p>We offer a full in depth TV installation service where we will work with you to get the TV setup and installed correctly to suit your viewing. This will make setting up your new television hassle free.</p>
            <p>We will make sure that all the streaming services which your require are set up correctly. Also any external devices which you have can be connected to the televsion and setup for use, we aim to offer a same day service on TV installations to call us now to arrange a visit.</p> 
        </div>
    </section>
</div>
<?php require(TEMPLATES_PATH . "/cta.php"); ?>
<div class="grid-container">
    <section class="grid-x grid-padding-x">
        <div class="large-12 cell">
            <h3>Areas we cover - Manchester & Greater Manchester</h3>
            <p>We are located just outside of Manchester so we cover a large area around Manchester and Greater Manchester. Should you find that your aerial has been damaged and you are close to Manchester then give us a call on 07768 600180 and we can help you get your aerial repaired qucikly.</p>
        </div>
    </section>
</div><!-- End of Main Container -->
<?php
require(TEMPLATES_PATH . "/footer.php");
?>
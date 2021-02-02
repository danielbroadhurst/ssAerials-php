<?php
define('SAFETORUN', TRUE);
$mytitle = 'Aerial Storm Damage Repair';
$myMetaDescription = 'We offer Aerial Storm Damage Repair, has your aerial been damaged in a storm. We can repair or replace and broken parts and get your TV aerial working again.';
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
            <h2>Has your aerial been damaged in a storm?</h2>
            <p>If your aerial has been damaged in a recent storm we can fix it for you. We aim to respond to most call outs the same day, we can quickly repair and secure your existing aerial so you can resume watching you TV and Satellite services. The quickest way to get hold of us is to call us on <a href="tel:07768600180">07768 600180</a> where we will be able to give you an estimated time we could service your aerial.</p>
            <p>S&S Aerials are experts when it comes to fixing and repairing aerials, we can quickly get you back up and running. We will make sure that your aerial is secure using an aerial lashing system which will hopefully prevent any further light storm damage to your aerial.</p>
            <div class="landscape-images">
                <img src="../img/portfolio/satellite_install_manchester_img_8.jpeg" class="float-left" alt="TV Aerial Installation in Manchester">
                <img src="../img/portfolio/satellite_install_manchester_img_20.jpeg" class="float-right" alt="TV Aerial Installation in Manchester">
            </div>
            <h3>Weather Damage to Aerial UK</h3>
            <p>After the recent stormy weather your aerial may be damaged. If you TV service is not what it was it can be a frustrating time, we can quickly fix any damage and recalibrate your aerial. If your aerial has taken heavy damage then please do not worry, most aerials can be repaired and refitted.</p>
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
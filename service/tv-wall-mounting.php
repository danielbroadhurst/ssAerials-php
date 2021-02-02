<?php
define('SAFETORUN', TRUE);
$mytitle = 'TV Wall Mounting Service';
$myMetaDescription = 'Have you just bought a new TV? Do you need your TV mounting the the wall? Get in touch for a free quote, we can also provide suitable TV mounting brackets.';
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
            <h2>New TV? Do you require it to be mounted to the wall</h2>
            <p>Having your TV Professionally mounted to the wall can improve your viewing experience and your living room. Our TV installion experts can help you choose the best fitting brackets for the safest and most secure method of mounting your TV. If you do not already have a TV wall mounting bracket then we can advise on which will be the best bracket for your requirements.</p>
            <div class="portrait-images">
                <img src="../img/portfolio/satellite_install_manchester_img_27.jpeg" class="float-left" alt="TV Aerial Installation in Manchester">
                <img src="../img/portfolio/satellite_install_manchester_img_6.jpeg" class="float-right" alt="TV Aerial Installation in Manchester">
            </div>
            <h3>OLED &amp; QLED Installation</h3>
            <p>The latest OLED and QLED TVs can be wall mounted and look flush against your wall. We advise that you get your TV fitted professionally so that your TV is securely fitted to the wall.</p>
            <p>If you would like to also have your TV setup correctly then we also offer a <a href="https://ssaerials.co.uk/service/tv-satellite-setup">TV Setup Service</a>.</p>

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
    <?php
    define('SAFETORUN', TRUE);
    $mytitle = 'Aerial, Satellite and TV Installation';
    $myMetaDescription = 'S & S Aerials are Professional Aerial & Satellite Installation Experts. We offer a range of services which include Digital TV Aerial Installtion and setup, satellite dish setup and installation, aerial storm damage repair, TV Wall Mounting and Setup.';
    require_once($_SERVER['DOCUMENT_ROOT'] . "/resources/config.php");
    require_once(TEMPLATES_PATH . "/core.php");
    // HMTL Begins Here
    // Body
    // Header & Menu
    ?>

    <div class="hero-section" id="hero">
        <div class="grid-x grid-padding-x">
            <div class="large-6">
                <div class="hero-section-text">
                    <p class="header">Same Day Service &amp; Profesional Quality Guaranteed</p>
                    <h1>Aerial &amp; Satellite Installations</h1>
                    <p><a href="services/tv-aerial-Installation">Digital TV Aerial</a> and <a href="services/satellite-installation">Satellite Installation</a>. TV Setup, TV Wall Mounting and Aerial Repair. We aim to attend aerial and satellite call outs on the same day in Manchester.</p>
                    <p>We have a <?php echo ($percentage); ?>% <i class="fas fa-star checked"></i><i class="fas fa-star checked"></i><i class="fas fa-star checked"></i><i class="fas fa-star checked"></i><i class="fas fa-star checked"></i> customer satisfaction rating.</p>
                    <div class="portrait-images">
                        <img src="../img/portfolio/satellite_install_manchester_img_44.jpeg" class="float-left" alt="TV Aerial Installation in Manchester">
                        <img src="../img/portfolio/satellite_install_manchester_img_49.jpeg" class="float-right" alt="TV Aerial Installation in Manchester">
                    </div>
                </div>
            </div>
            <div class="large-6 slanted">
                <div class="hero-section-image"></div>
            </div>
        </div>
    </div>

    <?php require(TEMPLATES_PATH . "/cta.php"); ?>

    <div class="grid-container" id="main-content">
        <!-- Start of Main Container -->

        <section class="grid-x grid-padding-x">
            <div class="large-12 cell">
                <h2><?php echo $mytitle ?></h2>
                <p>We have provided a professional aerial and satellite installation service in Manchester for over 25 years. We hope to provide a same day service to many of our clients and aim to complete the majority of jobs that same day.</p>
                <p>If you require assistance with your aerial or satellite installation or repair then <a href="contact.php">Contact Us</a>. We supply a range of services which are listed here and also can assist with queries which you think we may be able to assist which relate to Aerials, Sky & Satellite Dishes and also TV Setup and Installations.</p>
            </div>
        </section>

        <section class="grid-x grid-padding-x">
            <div class="large-12 cell">
                <h2>Our Products &amp; Services</h2>
                <?php require(TEMPLATES_PATH . "/products-services.php"); ?>
            </div>
        </section>

        <section class="grid-x grid-padding-x">
            <div class="large-8 medium-8 cell">
                <h2>Contact Us for a Quote:</h2>
                <!-- Grid Example -->

                <div class="grid-x grid-padding-x">
                    <div class="large-12 cell">
                        <div class="primary callout">
                            <p><strong>Give us a call for a Free Quote for a TV Aerial or Satellite Installation:</strong><br /> Call Us on 07768 600180 or 0161 881 6515.</p>
                        </div>
                    </div>
                </div>
                <!-- <?php
                        require(TEMPLATES_PATH . "/contact-form.php");
                        ?> -->
            </div>


            <div class="large-4 medium-4 cell">

                <div class="row">
                    <div class="columns">
                        <h2>Our Work</h2>
                        <p>Here you can see the professional quality work we have completed for our existing customers.</p>
                    </div>
                </div>

                <div class="row">
                    <div class="columns">
                        <div class="orbit" role="region" aria-label="Favorite Text Ever" data-orbit>
                            <ul class="orbit-container">
                                <li class="is-active orbit-slide">
                                    <div class="docs-images-orbit-slide">
                                        <img src="img/portfolio/satellite_install_manchester_img_16.jpeg" alt="Image">
                                    </div>
                                </li>
                                <li class="orbit-slide">
                                    <div class="docs-images-orbit-slide">
                                        <img src="img/portfolio/satellite_install_manchester_img_7.jpeg" alt="Image">
                                    </div>
                                </li>
                                <li class="orbit-slide">
                                    <div class="docs-images-orbit-slide">
                                        <img src="img/portfolio/satellite_install_manchester_img_13.jpeg" alt="Image">
                                    </div>
                                </li>
                                <li class="orbit-slide">
                                    <div class="docs-images-orbit-slide">
                                        <img src="img/portfolio/satellite_install_manchester_img_6.jpeg" alt="Image">
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <p>Want to see more? Visit our <a href="portfolio.php">portfolio and reviews</a> page.</p>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <?php require(TEMPLATES_PATH . "/cta.php"); ?>

    <div class="grid-container">

        <section>
            <?php require(TEMPLATES_PATH . "/reviews.php"); ?>
        </section>

    </div> <!-- End of Main Container -->

    <?php
    require(TEMPLATES_PATH . "/footer.php");
    ?>
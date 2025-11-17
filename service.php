<?php include 'header.php';?>

    <section id="about-hero" style="position: relative; height: 500px; margin-top: 140px;">
        <!-- Background Image -->
        <img src="./assets/img/slider1.png" alt="About Us" class="img-fluid w-100 h-100" style="object-fit: cover;">

        <!-- Black Overlay -->
        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;
                    background-color: rgba(0,0,0,0.5);">
        </div>

        <!-- Text Content -->
        <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);
                    color: #fff; text-align: center; z-index: 2;">
            <h1 style="font-size: 3rem; text-shadow: 2px 2px 6px rgba(0,0,0,0.7);">Services</h1>
            <!-- <a href="index.php" style="text-decoration: none; color: #fff;">
                <p style="font-size: 1.2rem; max-width: 700px; margin: auto; text-shadow: 1px 1px 4px rgba(0,0,0,0.6); cursor: pointer;">
                    We provide world-class aviation solutions with a focus on MRO excellence and AI-powered innovation.
                </p>
            </a> -->
        </div>
    </section>

    <!-- Hero Section -->
    <section id="about" class="section about-section">
        <div class="container">
            <section id="services" class="section">
                <div class="container">
                    <div class="text-center ">
                        <h2 class="section-title">Our Services</h2>
                        <p class="section-subtitle">Comprehensive MRO Solutions for Modern Aviation</p>
                    </div>

                    <div class="row">
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="service-card">
                                <div class="service-icon"><i class="bi bi-wrench-adjustable"></i></div>
                                <h3 class="service-title">Base Maintenance</h3>
                                <p class="service-description">Comprehensive in-depth support for long-term
                                    airworthiness and
                                    reliability.</p>
                                <!-- <ul class="service-list">
                                    <li>Heavy maintenance checks (C/D Checks)</li>
                                    <li>Structural repairs and modifications</li>
                                    <li>Landing gear overhaul</li>
                                    <li>Avionics upgrades</li>
                                    <li>Cabin refurbishment</li>
                                </ul> -->
                                <a href="basemaintenance.php" class="btn  btn-custom_base ">Read more</a>
                                <!-- <a href="basemaintenance.php" class="btn btn-custom_base">Get Started</a> -->

                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="service-card">
                                <div class="service-icon"><i class="bi bi-clock-history"></i></div>
                                <h3 class="service-title">Line Maintenance</h3>
                                <p class="service-description">Fast, efficient day-to-day operations support with 24/7
                                    readiness.</p>
                                <!-- <ul class="service-list">
                                    <li>Daily & transit inspections</li>
                                    <li>Troubleshooting & defect rectification</li>
                                    <li>Component replacement</li>
                                    <li>AOG support</li>
                                    <li>Release-to-service approvals</li>
                                </ul> -->
                                <a href="linemaintenance.php" class="btn  btn-custom_base ">Read more</a>
                                <!-- <a href="basemaintenance.php" class="btn btn-custom_base">Get Started</a> -->
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="service-card">
                                <div class="service-icon"><i class="bi bi-lightning-charge"></i></div>
                                <h3 class="service-title">Engine & APU Overhaul</h3>
                                <p class="service-description">Peak performance restoration for critical power systems.
                                </p>
                                <!-- <ul class="service-list">
                                    <li>Full teardown & inspection</li>
                                    <li>Performance restoration</li>
                                    <li>Boroscope inspections</li>
                                    <li>Test cell runs</li>
                                    <li>Certification documentation</li>
                                </ul> -->
                                <a href="enginemaintenance.php" class="btn  btn-custom_base ">Read more</a>
                                <!-- <a href="basemaintenance.php" class="btn btn-custom_base">Get Started</a> -->
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="service-card">
                                <div class="service-icon"><i class="bi bi-chevron-double-down"></i></div>
                                <h3 class="service-title">Landing Gear Overhaul</h3>
                                <p class="service-description">Precision-engineered restoration with advanced NDT
                                    testing.</p>
                                <!-- <ul class="service-list">
                                    <li>NDT testing (FPI, MPI, Eddy Current)</li>
                                    <li>Shock strut servicing</li>
                                    <li>Brake assembly overhaul</li>
                                    <li>Load simulation tests</li>
                                    <li>OEM compliance</li>
                                </ul> -->
                                <a href="landinggear.php" class="btn  btn-custom_base ">Read more</a>
                                <!-- <a href="basemaintenance.php" class="btn btn-custom_base">Get Started</a> -->
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="service-card">
                                <div class="service-icon"><i class="bi bi-cpu"></i></div>
                                <h3 class="service-title">Avionics Accessories Overhaul
                                </h3>
                                <p class="service-description">Precision restoration of aircraft electronic systems.</p>
                                <!-- <ul class="service-list">
                                    <li>LRU functional testing</li>
                                    <li>Circuit-board repair</li>
                                    <li>Communication & navigation modules</li>
                                    <li>Automated test equipment</li>
                                    <li>Calibration services</li>
                                </ul> -->
                                <a href="avionicsaccessories.php" class="btn  btn-custom_base ">Read more</a>
                                <!-- <a href="basemaintenance.php" class="btn btn-custom_base">Get Started</a> -->
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="service-card">
                                <div class="service-icon"><i class="bi bi-tools"></i></div>
                                <h3 class="service-title">Specialized Services</h3>
                                <p class="service-description">High-precision solutions for complex maintenance needs.
                                </p>
                                <!-- <ul class="service-list">
                                    <li>NDT Services (FPI, MPI, Ultrasonic)</li>
                                    <li>Composite Repair</li>
                                    <li>Hydraulic System Testing</li>
                                    <li>Wheel & Brake Shop</li>
                                    <li>Painting & Refinishing</li>
                                </ul> -->
                                <a href="specializedservices.php" class="btn  btn-custom_base ">Read more</a>
                                <!-- <a href="basemaintenance.php" class="btn btn-custom_base">Get Started</a> -->
                            </div>
                        </div>



                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="service-card">
                                <div class="service-icon"><i class="bi bi-clock-history"></i></div>
                                <h3 class="service-title">Corporate Sustainability</h3>
                                <p class="service-description">We are committed to responsible,
                                    forward-thinking operations ..</p>
                                <!-- <ul class="service-list">
                                    <li>Daily & transit inspections</li>
                                    <li>Troubleshooting & defect rectification</li>
                                    <li>Component replacement</li>
                                    <li>AOG support</li>
                                    <li>Release-to-service approvals</li>
                                </ul> -->
                                <a href="corporatesustainability.php" class="btn  btn-custom_base ">Read more</a>
                                <!-- <a href="basemaintenance.php" class="btn btn-custom_base">Get Started</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>

  









<?php include 'footer.php'; ?>
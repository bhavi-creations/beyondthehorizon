<?php include 'header.php'; ?>


<section>
    <div id="heroCarousel" class="carousel carousel_section slide carousel-fade" data-bs-ride="carousel"
        style="margin-top: 76px;">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2"></button>
        </div>

        <div class="carousel-inner">
            <div class="carousel-item active position-relative">
                <img src="./assets/img/slider1.png" class="d-block w-100" alt="Aircraft in Flight"
                    style="height: 600px; object-fit: cover;">

                <!-- Full Dark Overlay -->
                <div
                    style="position: absolute; top:0; left:0; width:100%; height:100%; background-color: rgba(0,0,0,0.5); z-index:1;">
                </div>

                <div class="carousel-caption d-flex flex-column justify-content-center h-100"
                    style="top:0; bottom:0; z-index:2;">
                    <h2 class="display-4 fw-bold mb-3" style="color: var(--accent-blue);">Excellence in Aviation
                    </h2>
                    <p class="lead mb-4" style="color: var(--text-light);">World-Class MRO Solutions for Modern
                        Fleets</p>
                </div>
            </div>

            <div class="carousel-item position-relative">
                <img src="./assets/img/slider2.png" class="d-block w-100" alt="Aircraft Maintenance"
                    style="height: 600px; object-fit: cover;">
                <div
                    style="position: absolute; top:0; left:0; width:100%; height:100%; background-color: rgba(0,0,0,0.5); z-index:1;">
                </div>

                <div class="carousel-caption d-flex flex-column justify-content-center h-100"
                    style="top:0; bottom:0; z-index:2;">
                    <h2 class="display-4 fw-bold mb-3" style="color: var(--accent-blue);">Precision Engineering</h2>
                    <p class="lead mb-4" style="color: var(--text-light);">Advanced Diagnostics & Predictive
                        Maintenance</p>
                </div>
            </div>

            <div class="carousel-item position-relative">
                <img src="./assets/img/slider3.png" class="d-block w-100" alt="AI Technology"
                    style="height: 600px; object-fit: cover;">
                <div
                    style="position: absolute; top:0; left:0; width:100%; height:100%; background-color: rgba(0,0,0,0.5); z-index:1;">
                </div>

                <div class="carousel-caption d-flex flex-column justify-content-center h-100"
                    style="top:0; bottom:0; z-index:2;">
                    <h2 class="display-4 fw-bold mb-3" style="color: var(--accent-blue);">AI-Powered Innovation</h2>
                    <p class="lead mb-4" style="color: var(--text-light);">Smart Maintenance Through Artificial
                        Intelligence</p>
                </div>
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

</section>



<!-- Hero Section -->
<section id="home" class="hero-section">
    <div class="container">
        <div class="row align-items-center second_section">
            <div class="col-lg-7 hero-content mt-5">
                <h1 class="hero-title">Beyond The Horizon</h1>
                <p class="hero-subtitle">Where Engineering Excellence Meets Aviation's Future</p>

                <p class="hero-description" id="heroText">
                    At BTH – Beyond The Horizon, we redefine modern MRO by delivering world-class maintenance,
                    repair, overhaul, and digital aviation solutions. Our comprehensive capabilities cover airframe,
                    engine, avionics, landing gear, specialized components, and MBH programs — all designed to
                    maximize uptime, minimize operational risk, and keep aircraft flying at peak efficiency.
                    <br> <br>
                    Leveraging AI-enabled diagnostics, intelligent fleet monitoring, and a skilled engineering
                    workforce, we turn data into actionable insights that predict failures, enhance reliability, and
                    reduce AOG events. We modernize aging aircraft, upgrade systems, and provide future-ready
                    maintenance solutions that set new standards in safety, precision, and performance. At BTH, we
                    don’t just maintain aircraft — we push aviation beyond the horizon.

                </p>

                <a href="javascript:void(0);" id="readMoreBtn" class="btn btn-custom">Read More</a>
            </div>

            <div class="col-lg-5 text-center mt-5">
                <img src="./assets/img/service2.png" alt="Aircraft in Flight" class="img-fluid hero-image"
                    style="border-radius: 20px; box-shadow: 0 10px 40px rgba(37, 99, 235, 0.2); animation: fadeInUp 1s ease 0.8s backwards;">
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section id="about" class="section about-section">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title  section-title-about">About BTH Aviation</h2>
            <p class="section-subtitle">BTH: Where Engineering Excellence Meets Aviation's Future. Excellence in
                Motion.</p>
        </div>
        <div class="row">
            <div class="col-lg-6 mb-4">
                <img src="https://images.unsplash.com/photo-1581092160562-40aa08e78837?w=800&auto=format&fit=crop"
                    alt="Aircraft Maintenance" class="img-fluid"
                    style="border-radius: 15px; box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1); height: 300px; ">
            </div>
            <div class="col-lg-6 mb-4">
                <p style="font-size: 1.1rem; line-height: 1.8; color: var(--dark-text);">
                    BTH - Beyond The Horizon stands at the forefront of next-generation Aviation MRO , serving as a
                    future-ready partner that delivers complete, end-to-end maintenance, repair, and overhaul
                    solutions. We are a one-stop-shop for all engineering requirements for commercial, charter,
                    government, and private operators.
                </p>
                <!-- <p style="font-size: 1.1rem; line-height: 1.8; color: var(--dark-text);">
                        Our team of licensed engineers and skilled technicians brings deep capability across airframe,
                        engine, avionics, and component maintenance. Using advanced diagnostics, predictive tools, and a
                        robust quality management system, we ensure every aircraft meets international regulatory and
                        safety benchmarks.
                    </p> -->
                <a href="about.php" class="btn btn-custom">Read More</a>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-3 col-sm-6 mb-4">
                <div class="feature-card">
                    <div class="feature-icon"><i class="bi bi-shield-check"></i></div>
                    <h3 class="feature-title">Safety First</h3>
                    <p class="feature-text">Uncompromised safety standards in every operation</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 mb-4">
                <div class="feature-card">
                    <div class="feature-icon"><i class="bi bi-gear-wide-connected"></i></div>
                    <h3 class="feature-title">24/7 Support</h3>
                    <p class="feature-text">Round-the-clock technical assistance and AOG response</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 mb-4">
                <div class="feature-card">
                    <div class="feature-icon"><i class="bi bi-award"></i></div>
                    <h3 class="feature-title">Certified Excellence</h3>
                    <p class="feature-text">Licensed engineers and OEM-aligned procedures</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 mb-4">
                <div class="feature-card">
                    <div class="feature-icon"><i class="bi bi-graph-up-arrow"></i></div>
                    <h3 class="feature-title">Innovation</h3>
                    <p class="feature-text">AI-driven predictive maintenance technology</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<div class="section team-area section-padding">
    <div class="container">
        <div class="team-wrapper">
            <div class="text-center ">
                <h2 class="section-title-service">Our Services</h2>
                <p class="section-subtitle">Comprehensive MRO Solutions for Modern Aviation</p>
            </div>
            <div class="team-content-wrapper">
                <div class="team-content-wrapper">

                    <div class="custom-slide-container swiper">
                        <div class="custom-slide-content   ">
                            <div class="custom-card-wrapper swiper-wrapper py-5">

                                <div class="custom-card custom_card_bg_three swiper-slide">

                                    <div class="service-card">
                                        <div class="service-icon"><i class="bi bi-wrench-adjustable"></i></div>
                                        <h3 class="service-title">Base Maintenance</h3>
                                        <p class="service-description">Comprehensive in-depth support for
                                            long-term airworthiness and
                                            reliability.</p>
                                        <!-- <ul class="service-list">
                                    <li>Heavy maintenance checks (C/D Checks)</li>
                                    <li>Structural repairs and modifications</li>
                                    <li>Landing gear overhaul</li>
                                    <li>Avionics upgrades</li>
                                    <li>Cabin refurbishment</li>
                                </ul> -->
                                        <a href="basemaintenance.php" class="btn  btn-custom_base ">Read more</a>


                                    </div>
                                </div>

                                <div class="custom-card custom_card_bg_three swiper-slide">


                                    <div class="service-card">
                                        <div class="service-icon"><i class="bi bi-clock-history"></i></div>
                                        <h3 class="service-title">Line Maintenance</h3>
                                        <p class="service-description">Fast, efficient day-to-day operations
                                            support with 24/7
                                            readiness.</p>
                                        <!-- <ul class="service-list">
                                    <li>Daily & transit inspections</li>
                                    <li>Troubleshooting & defect rectification</li>
                                    <li>Component replacement</li>
                                    <li>AOG support</li>
                                    <li>Release-to-service approvals</li>
                                </ul> -->
                                        <a href="linemaintenance.php" class="btn btn-custom_base">Get
                                            Started</a>
                                    </div>
                                </div>

                                <div class="custom-card custom_card_bg_three swiper-slide">


                                    <div class="service-card">
                                        <div class="service-icon"><i class="bi bi-lightning-charge"></i></div>
                                        <h3 class="service-title">Engine & APU Overhaul</h3>
                                        <p class="service-description">Peak performance restoration for critical
                                            power systems.</p>
                                        <!-- <ul class="service-list">
                                    <li>Full teardown & inspection</li>
                                    <li>Performance restoration</li>
                                    <li>Boroscope inspections</li>
                                    <li>Test cell runs</li>
                                    <li>Certification documentation</li>
                                </ul> -->
                                        <a href="enginemaintenance.php" class="btn btn-custom_base">Get
                                            Started</a>
                                    </div>
                                </div>

                                <div class="custom-card custom_card_bg_three swiper-slide">


                                    <div class="service-card">
                                        <div class="service-icon"><i class="bi bi-chevron-double-down"></i>
                                        </div>
                                        <h3 class="service-title">Landing Gear Overhaul</h3>
                                        <p class="service-description">Precision-engineered restoration with
                                            advanced NDT testing.</p>
                                        <!-- <ul class="service-list">
                                    <li>NDT testing (FPI, MPI, Eddy Current)</li>
                                    <li>Shock strut servicing</li>
                                    <li>Brake assembly overhaul</li>
                                    <li>Load simulation tests</li>
                                    <li>OEM compliance</li>
                                </ul> -->
                                        <a href="landinggear.php" class="btn btn-custom_base">Get
                                            Started</a>
                                    </div>
                                </div>


                                <div class="custom-card custom_card_bg_three swiper-slide">


                                    <div class="service-card">
                                        <div class="service-icon"><i class="bi bi-cpu"></i></div>
                                        <h3 class="service-title">Avionics Accessories Overhaul
                                        </h3>
                                        <p class="service-description">Precision restoration of aircraft
                                            electronic systems.</p>
                                        <!-- <ul class="service-list">
                                    <li>LRU functional testing</li>
                                    <li>Circuit-board repair</li>
                                    <li>Communication & navigation modules</li>
                                    <li>Automated test equipment</li>
                                    <li>Calibration services</li>
                                </ul> -->

                                        <a href="avionicsaccessories.php" class="btn btn-custom_base">Get
                                            Started</a>
                                    </div>
                                </div>




                                <div class="custom-card custom_card_bg_three swiper-slide">


                                    <div class="service-card">
                                        <div class="service-icon"><i class="bi bi-cpu"></i></div>
                                        <h3 class="service-title">Corporate Sustainability

                                        </h3>
                                        <p class="service-description">We are committed to responsible,
                                            forward-thinking operations ..</p>
                                        <!-- <ul class="service-list">
                                    <li>LRU functional testing</li>
                                    <li>Circuit-board repair</li>
                                    <li>Communication & navigation modules</li>
                                    <li>Automated test equipment</li>
                                    <li>Calibration services</li>
                                </ul> -->

                                        <a href="corporatesustainability.php" class="btn btn-custom_base">Get
                                            Started</a>
                                    </div>
                                </div>






                                <div class="custom-card custom_card_bg_three swiper-slide">


                                    <div class="service-card">
                                        <div class="service-icon"><i class="bi bi-tools"></i></div>
                                        <h3 class="service-title">Specialized Services</h3>
                                        <p class="service-description">High-precision solutions for complex
                                            maintenance needs.</p>
                                        <!-- <ul class="service-list">
                                    <li>NDT Services (FPI, MPI, Ultrasonic)</li>
                                    <li>Composite Repair</li>
                                    <li>Hydraulic System Testing</li>
                                    <li>Wheel & Brake Shop</li>
                                    <li>Painting & Refinishing</li>
                                </ul> -->
                                        <a href="specializedservices.php" class="btn btn-custom_base">Get
                                            Started</a>
                                    </div>
                                </div>
                            </div>





                        </div>
                    </div>










                </div>
            </div>
        </div>
        <!-- Team Content Wrapper End -->
    </div>
</div>
</div>









<!-- AI Innovation Section -->
<section id="innovation" class="section ai-section">
    <div class="container position-relative">
        <div class="text-center mb-5">
            <h2 class="section-title-mro">AI-Enhanced MRO Innovation</h2>
            <p class="section-subtitle">Redefining the Future of Aircraft Maintenance</p>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="row align-items-center mb-4">
                    <div class="col-md-6 mb-4 mb-md-0">
                        <img src="./assets/img/5.png" alt="AI Technology" class="img-fluid"
                            style="border-radius: 15px; box-shadow: 0 8px 30px rgba(37, 99, 235, 0.15);">
                    </div>
                    <div class="col-md-6">
                        <p style="font-size: 1.15rem; line-height: 1.8; color: var(--dark-text);">
                            We are redefining the future of aircraft maintenance by seamlessly integrating
                            Artificial Intelligence into every stage of our MRO ecosystem. Our AI-driven platforms
                            transform raw operational data into actionable intelligence—enabling smarter planning,
                            faster decision-making, and unparalleled predictive accuracy.
                        </p>
                    </div>
                </div>
                <div class="service-card">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="feature-card text-start">
                                <h4 style="color: var(--primary-color); margin-bottom: 1rem;"><i
                                        class="bi bi-graph-up"></i> Predictive Analytics</h4>
                                <p style="color: var(--medium-text);">Identify potential issues before they impact
                                    operations, reducing AOG events and unscheduled maintenance.</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="feature-card text-start">
                                <h4 style="color: var(--primary-color); margin-bottom: 1rem;"><i
                                        class="bi bi-speedometer2"></i> Enhanced Efficiency</h4>
                                <p style="color: var(--medium-text);">Optimize task workflows, resource allocation,
                                    and component life forecasting for maximum efficiency.</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="feature-card text-start">
                                <h4 style="color: var(--primary-color); margin-bottom: 1rem;"><i
                                        class="bi bi-eye"></i> Real-Time Monitoring</h4>
                                <p style="color: var(--medium-text);">Digital inspections and system monitoring
                                    provide continuous insights into aircraft health.</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="feature-card text-start">
                                <h4 style="color: var(--primary-color); margin-bottom: 1rem;"><i
                                        class="bi bi-piggy-bank"></i> Cost Savings</h4>
                                <p style="color: var(--medium-text);">Deliver consistent cost savings and
                                    operational transparency through intelligent automation.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sustainability Section -->
<section id="sustainability" class="section   section-padding">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Corporate Sustainability</h2>
            <p class="section-subtitle">Responsible Operations for a Sustainable Future</p>
        </div>
        <div class="row">
            <div class="col-lg-8 mx-auto mb-4">
                <p style="font-size: 1.1rem; line-height: 1.8; color: var(--dark-text); margin-bottom: 2rem;">
                    We are committed to responsible, forward-thinking operations that support environmental
                    stewardship, operational efficiency, and long-term industry sustainability. Our approach
                    integrates modern technology, optimized processes, and ethical business practices to reduce our
                    environmental footprint while enhancing value for customers and communities.
                </p>
            </div>
            <div class="col-lg-8 mx-auto mb-4">
                <img src="./assets/img/service5.png" alt="Sustainable Aviation" class="img-fluid"
                    style="border-radius: 15px; box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);">
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-4 mb-4">
                <div class="feature-card">
                    <div class="feature-icon"> <i class="fa-solid fa-leaf"></i></div>
                    <h3 class="feature-title">Energy Efficiency</h3>
                    <p class="feature-text">Optimized tooling and low-emission equipment for responsible resource
                        use</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="feature-card">
                    <div class="feature-icon"><i class="bi bi-recycle"></i></div>
                    <h3 class="feature-title">Waste Reduction</h3>
                    <p class="feature-text">Recycling initiatives and safe disposal of hazardous materials</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="feature-card">
                    <div class="feature-icon"><i class="bi bi-file-earmark-text"></i></div>
                    <h3 class="feature-title">Digital Systems</h3>
                    <p class="feature-text">Paperless operations improving transparency and efficiency</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="section contact-section">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Reach Us</h2>
            <p class="section-subtitle">Your Next-Level Aviation Support is Just a Message Away</p>
        </div>

        <div class="row justify-content-center align-items-start">

            <!-- ⭐ LEFT SIDE – CONTACT FORM -->
            <div class="col-lg-6 mb-4">
                <div class="contact-card p-4">
                    <div class="contact-icon text-center">
                        <i class="bi bi-envelope"></i>
                    </div>

                    <!-- <h3 class="text-center" style="color: var(--primary-color); margin-bottom: 1rem;">Get in Touch
                        </h3>
                        <p class="text-center" style="color: var(--medium-text); margin-bottom: 2rem;">
                            Connect with our experts to explore tailored MRO solutions designed for your fleet's
                            success.
                        </p>

                        <a href="mailto:info@bthaviation.com" class="btn btn-custom mb-4 w-100 text-center">
                            <i class="bi bi-envelope me-2"></i>info@bthaviation.com
                        </a> -->

                    <!-- Contact Form -->
                    <form class="contact-form">

                        <div class="row">
                            <!-- Full Name -->
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Full Name</label>
                                <input type="text" class="form-control" placeholder="Enter your full name" required>
                            </div>

                            <!-- Email -->
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Email Address</label>
                                <input type="email" class="form-control" placeholder="Enter your email" required>
                            </div>
                        </div>

                        <div class="row">
                            <!-- Phone -->
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Phone Number</label>
                                <input type="text" class="form-control" placeholder="Enter your phone number">
                            </div>

                            <!-- Subject -->
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Subject</label>
                                <input type="text" class="form-control" placeholder="Enter subject">
                            </div>
                        </div>

                        <!-- Message -->
                        <div class="mb-3">
                            <label class="form-label">Message</label>
                            <textarea class="form-control" rows="4" placeholder="Write your message"
                                required></textarea>
                        </div>

                        <button type="submit" class="btn btn-custom w-100">
                            <i class="bi bi-send me-2"></i>Send Message
                        </button>
                    </form>

                </div>
            </div>

            <!-- ⭐ RIGHT SIDE – GOOGLE MAP -->
            <div class="col-lg-6 mb-4">
                <div class="map-container"
                    style="border-radius: 15px; overflow: hidden; height: 100%; min-height: 450px;">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3806.4068558766004!2d78.47442187494164!3d17.433378883451502!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb91ec3e8fbb4d%3A0x8c594b1b5e63a5c6!2sHyderabad%2C%20Telangana!5e0!3m2!1sen!2sin!4v1731180000000"
                        width="100%" height="450px" style="border:0;" allowfullscreen="" loading="lazy">
                    </iframe>
                </div>
            </div>

        </div>
    </div>
</section>
<?php include 'footer.php'; ?>
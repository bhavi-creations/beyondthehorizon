<?php include  'header.php'; ?>



<section id="about-hero" style="position: relative; height: 500px; margin-top: 140px;">
    <!-- Background Image -->
    <img src="./assets/img/contact_main_images.png" alt="About Us" class="img-fluid w-100 h-100" style="object-fit: cover;">

    <!-- Black Overlay -->
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;
                    background-color: rgba(0,0,0,0.5);">
    </div>

    <!-- Text Content -->
    <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);
                    color: #fff; text-align: center; z-index: 2;">
        <h1 style="font-size: 3rem; text-shadow: 2px 2px 6px rgba(0,0,0,0.7);">Contact us</h1>
        <!-- <a href="index.html" style="text-decoration: none; color: #fff;">
                <p style="font-size: 1.2rem; max-width: 700px; margin: auto; text-shadow: 1px 1px 4px rgba(0,0,0,0.6); cursor: pointer;">
                    We provide world-class aviation solutions with a focus on MRO excellence and AI-powered innovation.
                </p>
            </a> -->
    </div>
</section>

<section id="contact" class="section contact-section">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Reach Us</h2>
            <p class="section-subtitle">Connect with Our Business Development Team.</p>
            <!-- <p class="section-subtitle">Get in touch with our expert to explore tailored MRO solutions designed for your fleet's success.</p> -->
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
                    <form action="contactform.php" method="post" role="form" class="php-email-form" data-aos-delay="100">
                        <div class="row g-3">

                            <div class="col-12 col-md-6">
                                <input type="text" name="name" class="form-control form-control-uniform" placeholder="Your Name">
                            </div>

                            <div class="col-12 col-md-6">
                                <input type="email" name="Company" class="form-control form-control-uniform" placeholder="Company Name">
                            </div>

                            <div class="col-12 col-md-6">
                                <input type="email" name="Email" class="form-control form-control-uniform" placeholder="Enter Your Email">
                            </div>

                            <div class="col-12 col-md-6">
                                <input type="text" name="title" class="form-control form-control-uniform" placeholder="Title">
                            </div>

                            <div class="col-12 col-md-6">
                                <select class="form-select form-control-uniform" name="service">
                                    <option selected>Primary Interest</option>
                                    <option value="Base Maintenance">Base Maintenance</option>
                                    <option value="Component Overhaul">Component Overhaul</option>
                                    <option value="Partnership">Partnership</option>
                                    <!-- <option value="Invisible aligners">Invisible aligners</option>
                                    <option value="Teeth whitening">Teeth whitening</option>
                                    <option value="Teeth cleaning">Teeth cleaning</option>
                                    <option value="Teeth jewellery">Teeth jewellery</option>
                                    <option value="root canal">Root canal</option> -->
                                </select>
                            </div>

                            <div class="mb-3 col-12 col-md-6 ">
                                <!-- <label class="form-label">Message</label> -->
                                <textarea class="form-control" name="meassage"  rows="1" placeholder="Write your message"
                                    required></textarea>
                            </div>

                            <button type="submit" class="btn btn-custom w-100">
                                <i class="bi bi-send me-2"></i>Send Message
                            </button>

                        </div>
                    </form>

                </div>
            </div>

            <!-- ⭐ RIGHT SIDE – GOOGLE MAP -->
            <div class="col-lg-6 mb-4  d-flex justify-content-center">

            <img src="./assets/img/13.png" alt="" class="img-fluid">
                <!-- <div class="map-container"
                    style="border-radius: 15px; overflow: hidden; height: 100%; min-height: 450px;">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3877.3275672949653!2d79.54497857485377!3d13.637827386742183!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a4d4892440e6095%3A0xf1baad272b949686!2sTirupati%20International%20Airport!5e0!3m2!1sen!2sin!4v1763376722856!5m2!1sen!2sin"
                        width="100%" height="450px" style="border:0;" allowfullscreen="" loading="lazy">
                    </iframe>
                </div> -->
            </div>



        </div>
    </div>
</section>















<?php include 'footer.php'; ?>
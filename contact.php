<?php include  'header.php'; ?>



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
            <h1 style="font-size: 3rem; text-shadow: 2px 2px 6px rgba(0,0,0,0.7);">Line Maintenance</h1>
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
                <p class="section-subtitle">Get in touch with our expert to explore tailored MRO solutions designed for  your fleet's success</p>
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















<?php include 'footer.php';?>
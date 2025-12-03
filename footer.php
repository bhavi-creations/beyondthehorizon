<!-- Footer -->
<footer class="pt-5   section-padding">
    <div class="container">
        <div class="row">

            <!-- Column 1: Logo -->
            <div class="col-lg-3 col-sm-6 mb-4 text-center text-md-start">
                <!-- <img src="assets/img/LSKS.png" alt="BTH Aviation Logo" style="width:100%;"> -->
                <!-- <img src="assets/img/bg_11.png" alt="" class="img-fluid"  style="width: 173px; height: 110px ;" > -->

                <a class="navbar-brand d-flex flex-column align-items-start" href="#home">
                <!-- <img src="assets/img/btg_logo.png" alt="Logo" class="img-fluid" style="width:170px; height:auto;"> -->
                <img src="./assets/img/contact_us_11.png" alt="" class="img-fluid" style="width:300px; height: auto;">

                <!-- <img src="assets/img/121.png" alt="Logo" class="img-fluid" style="width:170px; height:auto;"> -->

                <!-- Tagline -->
                <!-- <span class="logo-tagline mt-1">Beyond The Horizon</span> -->
            </a>
            </div>

            <!-- Column 2: Quick Links -->
            <div class="col-lg-3 col-sm-6 mb-4">
                <h5 class="fw-bold mb-3" style="color:#ffffff;">Quick Links</h5>
                <ul class="list-unstyled footer-links">
                    <li>
                        <i class="fas fa-chevron-right me-2" style="color:#3baaff;"></i>
                        <a href="index.php" class="footer-link">Home</a>
                    </li>
                    <li>
                        <i class="fas fa-chevron-right me-2" style="color:#3baaff;"></i>
                        <a href="about.php#about" class="footer-link">About Us</a>
                    </li>
                    <li>
                        <i class="fas fa-chevron-right me-2" style="color:#3baaff;"></i>
                        <a href="service.php#service" class="footer-link">Services</a>
                    </li>
                    <li>
                        <i class="fas fa-chevron-right me-2" style="color:#3baaff;"></i>
                        <a href="innovation.php#innovation" class="footer-link">Innovation</a>
                    </li>
                    <li>
                        <i class="fas fa-chevron-right me-2" style="color:#3baaff;"></i>
                        <a href="contact.php#contact" class="footer-link">Contact US</a>
                    </li>
                </ul>
            </div>

            <!-- Column 3: Services -->
            <div class="col-lg-3 col-sm-6 mb-4">
                <h5 class="fw-bold mb-3" style="color:#ffffff;">Our Services</h5>
                <ul class="list-unstyled footer-links">
                    <li>
                        <i class="fas fa-chevron-right me-2" style="color:#3baaff;"></i>
                        <a href="basemaintenance.php#base_maintenance" class="footer-link">Base Maintenance</a>
                    </li>
                    <li>
                        <i class="fas fa-chevron-right me-2" style="color:#3baaff;"></i>
                        <a href="linemaintenance.php#line_maintenance" class="footer-link">Line Maintenance</a>
                    </li>
                    <li>
                        <i class="fas fa-chevron-right me-2" style="color:#3baaff;"></i>
                        <a href="enginemaintenance.php#engine" class="footer-link">Engine & APU Overhaul</a>
                    </li>
                    <li>
                        <i class="fas fa-chevron-right me-2" style="color:#3baaff;"></i>
                        <a href="landinggear.php#landinggear" class="footer-link">Landing Gear Overhaul</a>
                    </li>
                    <li>
                        <i class="fas fa-chevron-right me-2" style="color:#3baaff;"></i>
                        <a href="avionicsaccessories.php#avionic" class="footer-link">Avionics Accessories Overhaul
                        </a>
                    </li>

                    <li>
                        <i class="fas fa-chevron-right me-2" style="color:#3baaff;"></i>
                        <a href="specializedservices.php#specializedservices" class="footer-link"> Specialized Services
                        </a>
                    </li>

                    <li>
                        <i class="fas fa-chevron-right me-2" style="color:#3baaff;"></i>
                        <a href="corporatesustainability.php#corporate" class="footer-link">Corporate Sustainability
                        </a>
                    </li>




                </ul>
            </div>

            <!-- Column 4: Address -->
            <div class="col-lg-3 col-sm-6 mb-4">
                <h5 class="fw-bold mb-3" style="color:#ffffff;">Contact Us</h5>
                <ul class="list-unstyled" style="color:#cccccc;">
                    <li class="service-item"><i class="fas fa-map-marker-alt me-2" style="color:#3baaff;"></i>BTH-MRO Headquarters, Tirupati Airport</li>
                    <li><i class="fas fa-phone me-2" style="color:#3baaff;"></i>+91 9694 112299</li>
                    <li><i class="fas fa-envelope me-2" style="color:#3baaff;"></i>info@bthaviation.com</li>
                </ul>
            </div>

        </div>

        <!-- <hr style="border-color:#222;"> -->

        <!-- Bottom Row -->


    </div>
</footer>

<div class=" container last_section">
        <div class="text-center">
            <p style="color:white; margin:0;">
            BTH-MRO. Total Technical Excellence. Uncompromised Safety. Unmatched Reliability.
                <!-- <a href="https://bhavicreations.com/" target="_blank">Bhavi creations pvtltd</a> -->
            </p>
        </div>
    </div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Navbar scroll effect
    window.addEventListener('scroll', function() {
        const navbar = document.querySelector('.navbar');
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });

    // Active nav link on scroll
    const sections = document.querySelectorAll('section[id]');
    const navLinks = document.querySelectorAll('.nav-link');

    window.addEventListener('scroll', () => {
        let current = '';
        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.clientHeight;
            if (pageYOffset >= sectionTop - 200) {
                current = section.getAttribute('id');
            }
        });

        navLinks.forEach(link => {
            link.classList.remove('active');
            if (link.getAttribute('href') === `#${current}`) {
                link.classList.add('active');
            }
        });
    });

    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                const navbarHeight = document.querySelector('.navbar').offsetHeight;
                const targetPosition = target.offsetTop - navbarHeight;
                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
                // Close mobile menu if open
                const navbarCollapse = document.querySelector('.navbar-collapse');
                if (navbarCollapse.classList.contains('show')) {
                    navbarCollapse.classList.remove('show');
                }
            }
        });
    });

    // Animation on scroll
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);

    document.querySelectorAll('.service-card, .feature-card').forEach(card => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(30px)';
        card.style.transition = 'all 0.6s ease';
        observer.observe(card);
    });
</script>


<script>
    const readMoreBtn = document.getElementById("readMoreBtn");
    const heroText = document.getElementById("heroText");

    readMoreBtn.addEventListener("click", function() {
        heroText.classList.toggle("expanded");

        if (heroText.classList.contains("expanded")) {
            readMoreBtn.textContent = "Read Less";
        } else {
            readMoreBtn.textContent = "Read More";
        }
    });
</script>




<!-- img slider code   -->
<script>
    var swiper = new Swiper(".custom-slide-content", {
        slidesPerView: 3,
        spaceBetween: 25,
        loop: true,
        centerslide: 'true',
        fade: 'true',
        grabCursor: 'true',
        pagination: {
            el: ".custom-swiper-pagination",
            clickable: true,
            dynamicBullets: true,
        },
        autoplay: {
            delay: 3000, // Time in milliseconds between automatic slides (3 seconds here)
            disableOnInteraction: false, // Keeps autoplay active even after manual swiping
        },
        navigation: {
            nextEl: ".swiper-button-next.custom-swiper-navBtn",
            prevEl: ".swiper-button-prev.custom-swiper-navBtn",
        },

        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            520: {
                slidesPerView: 2,
            },
            950: {
                slidesPerView: 3,
            },
        },
    });
</script>




<!-- img salider   -->
<!-- 
<script>
    function initSlider(sliderId) {
        const bullets = document.querySelectorAll(`#${sliderId} li`);
        let currentIndex = 0;

        function showBullet(index) {
            bullets.forEach((li, i) => {
                li.style.opacity = i === index ? '1' : '0';
            });
        }

        showBullet(currentIndex);

        setInterval(() => {
            currentIndex = (currentIndex + 1) % bullets.length;
            showBullet(currentIndex);
        }, 3000);
    }

    // Initialize all three sliders
    initSlider('slider1');
    initSlider('slider2');
    initSlider('slider3');
</script> -->
</body>

</html>
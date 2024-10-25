


<!-- ======= Footer ======= -->

<footer id="footer">

    <div class="footer-top ">
        <div class="container">
            <div class="row side">

                <div class="col-lg-3 col-md-6 footer-links qlinks">
                    <h4>NAVIGATION</h4>
                    <ul>
                        <li> <a href="Main">Home</a></li>
                        <li> <a href="About">About</a></li>
                        <li> <a href="Feature">Features</a></li>
                        <li> <a href="Pricing">Pricing</a></li>
                        <li> <a href="Contact">Contact</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>FEATURES</h4>
                    <ul>
                        <li> <a href="Feature"> Patient Management</a></li>
                        <li> <a href="Feature">For Specialists</a></li>
                        <li> <a href="Feature">Integrated Payments</a></li>
                        <li> <a href="Feature">Prescription Ease</a></li>
                        <li> <a href="Feature">Analytics & Reports</a></li>
                        <li> <a href="Feature">Cloud Security</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Legal</h4>
                    <ul>
                        <li> <a href="privacy">Privacy Policy</a></li>
                        <li> <a href="terms">Terms of Service</a></li>
                        <li> <a href="disclaimer">Disclaimer</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links qlinks">
                    <h4>TALK TO US</h4>
                    <ul>
                        <li> <a href="">support@aesthetics.ai</a></li>
                        <li> <a href="">+91 9876543210</a></li>
                    </ul>
                </div>




            </div>
        </div>
    </div>

    <div class="container">
        <hr>
    </div>


    <div class="container py-3 text-center">
        <div class="row d-flex justify-content-between">
            <div class="col-md-4">
                <img src="assets/img/flogo.png" alt="" style=" height: 50px;">
            </div>
            <div class="col-md-4 d-flex align-items-center justify-content-center">
                <div class="copyright-text">
                    <p> © Designed by The Odin. All Rights Reserved. </p>
                </div>
            </div>
            <div class="col-md-4 d-flex justify-content-center  align-items-center">
                <div class="social-icons">
                    <a href="#" class="icon fb"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="icon twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="icon linkedin"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </div>


    </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

<script>
    const sliderWrapper = document.querySelector('.slider-wrapper');
let scrollAmount = 1; // Adjust this value to control speed

function startSlider() {
    // Move the slider to the left continuously
    sliderWrapper.style.transform = `translateX(${-scrollAmount}px)`;
    
    // Keep increasing the scroll amount for smooth movement
    scrollAmount += 1; // Adjust for speed, higher value = faster scroll

    // If the scroll amount exceeds the width of one set of images, reset it
    if (scrollAmount >= sliderWrapper.scrollWidth / 2) {
        scrollAmount = 0; // Reset to start for infinite scrolling effect
    }

    requestAnimationFrame(startSlider);
}

// Initialize the slider
requestAnimationFrame(startSlider);

</script>


<!-- header  -->
 <script>
    window.addEventListener('scroll', function() {
    const header = document.getElementById('header');
    
    if (window.scrollY > 50) {  // You can adjust the scroll threshold
        header.classList.add('with-border');
    } else {
        header.classList.remove('with-border');
    }
});

 </script>
<!-- header  -->

<!-- pricing btn -->
 <script>
    
    document.querySelectorAll('.toggle-option').forEach(option => {
  option.addEventListener('click', function() {
    document.querySelectorAll('.toggle-option').forEach(btn => btn.classList.remove('active'));
    this.classList.add('active');
  });
});

 </script>
<!-- pricing btn -->
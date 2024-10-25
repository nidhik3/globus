<style>
    .slider-container {
        width: 100%;
        overflow: hidden;
        position: relative;
    }

    .slider-wrapper {
        display: flex;
        width: calc(12 * 10%);
        /* 12 items */
    }

    .slider-item {
        /* min-width: 17%; */
        box-sizing: border-box;
    }

    .slider-item img {
        /* width: 200px;
        height: 33px; */
    }

    .slider {
        position: absolute;
        bottom: 10%;
    }

    /* Overlay styles */
    .slider-overlay {
        position: absolute;
        top: 0;
        bottom: 0;
        width: 20%;
        /* Adjust the width to control the overlay size */
        pointer-events: none;
        /* Make it non-interactive */
        background: linear-gradient(to right, rgba(255, 255, 255, 1), rgba(255, 255, 255, 0));
        z-index: 1;
        /* Ensure it stays above the slider */
    }

    .slider-overlay-left {
        left: 0;
        background: linear-gradient(to right, rgba(255, 255, 255, 1), rgba(255, 255, 255, 0));
        /* Fade from white to transparent */
    }

    .slider-overlay-right {
        right: 0;
        background: linear-gradient(to left, rgba(255, 255, 255, 1), rgba(255, 255, 255, 0));
        /* Fade from white to transparent */
    }
</style>
<!-- banner -->

<section>
    <div class="img1-container">
        <div class="img1">
            <img src="assets/img/banner1.png" alt="">
        </div>

        <div class="container">
            <div class="txt3">
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-md-6  text-center">
                        <p class="t1">Fuel your clinic’s success with <span class="gradient"> Intelligent
                                solutions</span> </p>
                    </div>
                </div>
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-md-5 text-center">
                        <p class="">A complete solution to elevate patient care, streamline workflows, and enhance your
                            practice's efficiency.</p>
                    </div>
                </div>
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-md-4 d-flex justify-content-evenly align-items-center ">
                        <div class="col-md-5 col-5"> <a class="black" href=" ">Explore Features</a></div>
                        <div class="col-md-5 col-5"> <a class="transparent" href=" ">Get Started</a></div>


                    </div>
                </div>


            </div>

            <div class="row ">
                <div class="slider-container">
                    <!-- Left white overlay -->
                    <div class="slider-overlay slider-overlay-left"></div>

                    <!-- Slider wrapper -->
                    <div class="slider-wrapper">
                        <div class="slider-item"><img src="assets/img/img1.png" alt="Image 1"></div>
                        <div class="slider-item"><img src="assets/img/img2.png" alt="Image 2"></div>
                        <div class="slider-item"><img src="assets/img/img3.png" alt="Image 3"></div>
                        <div class="slider-item"><img src="assets/img/img4.png" alt="Image 4"></div>
                        <div class="slider-item"><img src="assets/img/img5.png" alt="Image 5"></div>
                        <div class="slider-item"><img src="assets/img/img6.png" alt="Image 6"></div>
                        <!-- Duplicate images for infinite scroll -->
                        <div class="slider-item"><img src="assets/img/img1.png" alt="Image 1"></div>
                        <div class="slider-item"><img src="assets/img/img2.png" alt="Image 2"></div>
                        <div class="slider-item"><img src="assets/img/img3.png" alt="Image 3"></div>
                        <div class="slider-item"><img src="assets/img/img4.png" alt="Image 4"></div>
                        <div class="slider-item"><img src="assets/img/img5.png" alt="Image 5"></div>
                        <div class="slider-item"><img src="assets/img/img6.png" alt="Image 6"></div>
                    </div>

                    <!-- Right white overlay -->
                    <div class="slider-overlay slider-overlay-right"></div>
                </div>


            </div>
        </div>
    </div>

</section>


<!-- banner -->

<!--elevate -->
<section class="noBottom">
    <div class="container space-x">
        <div class="row d-flex justify-content-center align-items-center  pb-3">
            <div class="col-md-12 d-flex justify-content-center">
                <a class="light-blue"><img src="assets/img/icon1.png" alt="">Unique Features</a>
            </div>
        </div>
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-md-7 text-center">
                <p class="t1">Designed to fit into <span class="gradient"> your world</span> ,
                    not the other way around.</p>
            </div>
        </div>
        <div class="row d-flex justify-content-center align-items-center pb-3">
            <div class="col-md-7 text-center">
                <p class="">Explore Aesthetic AI’s Advanced Features—Enhance patient care, optimize workflows, and drive
                    practice success with ease.</p>
            </div>
        </div>

    </div>

</section>

<div class="bgimg  pt-0 pt-md-5" style="background-image: url('assets/img/banner1.png') ;width:100%; background-size: cover;">
    <div class="container space-x">
        <div class="row d-flex justify-content-evenly ">
            <div class="col-md-5">
                <div class="card card2 ">
                    <div class="card-body cbody pb-3">
                        <h5 class="card-title">Seamless Patient Management</h5>
                        <p class="card-text">From booking appointments to post-procedure follow-ups, manage every
                            aspect of patient care seamlessly.</p>
                    </div>
                    <img class="card-img-top ci" src="assets/img/card1.png" alt="Card image cap">

                </div>
            </div>
            <div class="col-md-7 pt-3 pt-md-0">
                <div class="card card2 ">
                    <div class="card-body cbody pb-3">
                        <h5 class="card-title">Tailored for Dermatologists & Dentists</h5>
                        <div class="col-md-9">
                            <p class="card-text">Custom-built to meet the specific needs of your practice, offering specialized tools for each field.</p>
                        </div>
                    </div>
                    <img class="card-img-top ci p-0 " src="assets/img/card2.png" alt="Card image cap">

                </div>
            </div>
        </div>
        <div class="row pt-4 d-flex justify-content-evenly">
            <div class="col-md-7 pt-3 pt-md-0">
                <div class="card card2 ">
                    <div class="card-body cbody pb-3">
                        <h5 class="card-title">Easy Prescription Management</h5>
                        <div class="col-md-9">
                            <p class="card-text">Generate and manage prescriptions with just a few clicks, ensuring accuracy and compliance.</p>
                        </div>
                    </div>
                    <img class="card-img-top ci " src="assets/img/card3.png" alt="Card image cap">

                </div>
            </div>
            <div class="col-md-5 pt-3 pt-md-0">
                <div class="card card2 ">
                    <div class="card-body cbody pb-3">
                        <h5 class="card-title">Integrated Payment Solutions</h5>
                        <p class="card-text">Simplify payments with secure, integrated billing that enhances the patient experience.</p>
                    </div>
                    <img class="card-img-top ci" src="assets/img/card4.png" alt="Card image cap">
                </div>
            </div>
        </div>

    </div>
</div>
<!-- elevate -->


<!--streamline -->
<section class="space">
    <div class="container space-x">
        <div class="row d-flex justify-content-center align-items-center pb-3">
            <div class="col-md-4 text-center d-flex justify-content-center align-items-center   ">
                <a class="light-blue light-blue1"><img src="assets/img/icon2.png" alt="">Product Showcase</a>
            </div>
        </div>
        <div class="row d-flex justify-content-center align-items-center ">
            <div class="col-md-7 text-center">
                <p class="t1 gradient">Streamlined, Intuitive, and Powerful.</p>
            </div>
        </div>
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-md-8 text-center">
                <p class="">Aesthetics AI simplifies every step of patient care.</p>
            </div>
        </div>
        <div class="center-gradient py-1 py-md-5" style="background-image: url('assets/img/center-gradient.png');width:100%; background-size: cover;">

            <div class="row d-flex justify-content-center" style="position: relative;">
                <div class="col-md-9 d-flex justify-content-evenly align-items-center">

                    <div class=" ic1">
                        <div class="row d-flex">
                            <div class="col-md-2">
                                <img src="assets/img/sicon1.png" alt="">
                            </div>
                            <div class="col-md-4">
                                <p>Seamless Appointments</p>
                            </div>

                        </div>
                    </div>
                    <div class=" ic2">
                        <div class="row d-flex">
                            <div class="col-md-2">

                            </div>
                            <div class="col-md-2">
                                <img src="assets/img/sicon1.png" alt="">
                            </div>
                            <div class="col-md-4  ">
                                <p>Seamless Appointment</p>
                            </div>

                        </div>


                    </div>
                    <div class=" ic3">
                        <div class="row ">
                            <div class="col-md-3">
                                <img src="assets/img/sicon2.png" alt="">
                            </div>
                            <div class="col-md-6 px-1">
                                <p>Analytics & Reports</p>
                            </div>

                        </div>
                    </div>
                    <div class=" ic4">
                        <div class="row d-flex">
                            <div class="col-md-2">

                            </div>
                            <div class="col-md-3">
                                <img src="assets/img/sicon3.png" alt="">
                            </div>
                            <div class="col-md-4  px-1">
                                <p>Prescription Ease</p>
                            </div>

                        </div>
                    </div>
                    <div class="i1 p-3 pt-md-5"> <img src="assets/img/m1.png" style="max-width: 100%;" alt=""></div>
                    <div class="i2"><img src="assets/img/m2.png" style="max-width: 100%;" alt=""></div>
                    <div class="i3 p-3 pt-md-5"><img src="assets/img/m3.png" style="max-width: 100%;" alt=""></div>
                </div>
            </div>

        </div>
        <div class="row d-flex justify-content-center align-items-center pt-4">
            <div class="col-md-8 text-center">
                <p class="">Built with the latest technology, our platform is designed to be both powerful and easy to
                    use, ensuring you can focus on what matters most – <span class="gradient"> your patients.</span></p>
            </div>
        </div>

    </div>


</section>

<!-- streamline -->


<!-- your practice -->
<section>
    <div class="img1-container practise1">
        <div class="img1">
            <img src="assets/img/practice.png" alt="">
        </div>
        <div class="container ">
            <div class="txt1">
                <div class="row  pb-3">
                    <div class="col-md-2 text-center">
                        <a class="light-blue"><img src="assets/img/icon3.png" alt="">Customise</a>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-md-6 text-start">
                        <p class="t1 gradient pb-1">Your practice, your rules,
                            Supported by flexible tools.</p>
                    </div>
                </div>
                <div class="row p-0 pt-md-4">
                    <div class="col-md-5 d-flex">
                        <div class="col-md-1"> <img src="assets/img/tick.png" alt=""></div>
                        <div class="col-md-10">
                            <p> <b>Flexible Configuration:</b> Adapt the platform to match your specific workflows and
                                preferences.</p>
                        </div>

                    </div>
                </div>
                <div class="row  pt-2">
                    <div class="col-md-5 d-flex">
                        <div class="col-md-1"> <img src="assets/img/tick.png" alt=""></div>
                        <div class="col-md-10">
                            <p> <b>Personalized Dashboards:</b> Customize your dashboard to display the metrics and
                                tools most relevant to you.</p>
                        </div>

                    </div>
                </div>
                <div class="row  pt-2">
                    <div class="col-md-5 d-flex">
                        <div class="col-md-1"> <img src="assets/img/tick.png" alt=""></div>
                        <div class="col-md-10">
                            <p> <b>Specialized Tools:</b> Choose from a range of tools designed specifically for
                                dermatologists and dentists.</p>
                        </div>

                    </div>
                </div>
                <div class="row  pt-2">
                    <div class="col-md-5 d-flex">
                        <div class="col-md-1"> <img src="assets/img/tick.png" alt=""></div>
                        <div class="col-md-10">
                            <p> <b> Scalable Solutions:</b> Easily scale features and functionality as your practice
                                grows.</p>
                        </div>

                    </div>
                </div>
            </div>

            <!--  <div class="row">
            <div class="col-md-2 text-center">
                <a class="gradient-border" href=" ">Click to Customise</a>
            </div>
        </div> -->
        </div>

</section>
<!-- your practice -->

<!-- ready -->
<section>
    <div class="img1-container">
        <div class="img1">
            <img src="assets/img/ready.png" alt="">
        </div>

        <div class="container">
            <div class="txt2">
                <div class="row d-flex justify-content-center align-items-center pb-3">
                    <div class="col-md-2 text-center  d-flex justify-content-center align-items-center  ">
                        <a class="join-us"><img src="assets/img/icon4.png" alt="">Join us</a>
                    </div>
                </div>
                <div class="row d-flex justify-content-center align-items-center ">
                    <div class="col-md-6 text-center">
                        <p class="t1 gradient">Ready to Revolutionize Your Practice?</p>
                    </div>
                </div>
                <div class="row d-flex justify-content-center align-items-center pb-4">
                    <div class="col-md-4 text-center">
                        <p class="" style="color: white;">Get started with Aesthetic AI today and experience the future
                            of patient care.</p>
                    </div>
                </div>
                <div class="row d-flex justify-content-center align-items-center ">
                    <div class="col-md-2 col-6 text-center">
                        <a class="transparent-white" href=" ">Request a Demo</a>
                    </div>
                </div>


            </div>

        </div>
    </div>

</section>
<!-- ready-->

<!-- pricing -->
<section class="space">
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center pb-3">
            <div class="col-md-2 text-center  d-flex justify-content-center align-items-center  ">
                <a class="light-blue"><img src="assets/img/icon5.png" alt="">Our Pricing </a>

            </div>
        </div>

        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-md-7 text-center">
                <p class="t1 mb-1">Our Pricing Plans</p>
            </div>
        </div>
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-md-8 text-center">
                <p class="m-0">Discover and select a plan that suits you well.</p>
            </div>
        </div>

        <div class="row d-flex justify-content-center align-items-center">
            <div class="toggle-container">
                <div class="toggle-btn ">
                    <div class="toggle-option active d-flex align-items-center justify-content-center" id="monthly">Monthly</div>
                    <div class="toggle-option d-flex align-items-center  justify-content-center" id="yearly">Yearly</div>
                </div>
            </div>
        </div>

        <div class="row d-flex justify-content-evenly  ">
            <div class="col-md-10 d-flex justify-content-evenly align-items-center">
                <div class="i1"> <img src="assets/img/p1.png" style="max-width: 100%;" alt=""></div>
                <div class="i2"><img src="assets/img/p2.png" style="max-width: 100%;" alt=""></div>
                <div class="i3"><img src="assets/img/p3.png" style="max-width: 100%;" alt=""></div>
            </div>
        </div>

        <div class="row pt-4 d-flex justify-content-center align-items-center">
            <div class="col-md-8 text-center">
                <p class="">Terms & Conditions appied*</p>
            </div>
        </div>

    </div>

</section>
<!-- pricing -->

<!-- download -->
<section class="noTop">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <div class="img1-container ">
                <div class="img4">
                    <img src="assets/img/download-banner.png" alt="" style="max-width:100%;">
                </div>

                <div class="container">
                    <div class="txt4">
                        <div class="row  pb-3">
                            <div class="col-md-2 text-left   ">
                                <a class="application"><img src="assets/img/icon4.png" alt="">Application</a>
                            </div>
                        </div>
                        <div class="row  ">
                            <div class="col-md-5 text-left">
                                <p class="t1 dw ">Download the App
                                    Now.</p>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-md-4 text-left">
                                <p class="pg">Get started with Aesthetic AI today and experience the future
                                    of patient care.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 col-8 text-center pb-4 position-relative">
                                <a class="download" href=" ">Download Now</a>

                                <div class="logos white-btn text-end">
                                    <a href="#">
                                        <img src="assets/img/apple.png" alt="Apple" />
                                    </a>
                                    <a href="#">
                                        <img src="assets/img/android.png" alt="Android" />
                                    </a>
                                </div>

                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-1"></div>
    </div>


</section>
<!-- download -->
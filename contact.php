<?php include('layout/header.php');?>
        <!-- Page Banner Start -->
        <div class="section page-banner-section" style="background-image: url(assets/images/page-banner.jpg);">
            <div class="shape-2"></div>
            <div class="container">
                <div class="page-banner-wrap">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Page Banner Content Start -->
                            <div class="page-banner text-center">
                                <h2 class="title">Contact Us</h2>
                                <ul class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                                </ul>
                            </div>
                            <!-- Page Banner Content End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Banner End -->



        <!-- Contact Info Start -->
        <div class="section contact-info-section section-padding-02">
            <div class="container">
                <!-- Contact Info Wrap Start -->
                <div class="contact-info-wrap">
                    <div class="row">
                        <div class="col-lg-4 col-sm-6">
                            <!--Single Contact Info Start -->
                            <div class="single-contact-info text-center">
                                <div class="info-icon">
                                    <i class="flaticon-phone-call"></i>
                                </div>
                                <div class="info-content">
                                    <h5 class="title">Telephone</h5>
                                    <p>----------</p>
                                </div>
                            </div>
                            <!--Single Contact Info End -->
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <!--Single Contact Info Start -->
                            <div class="single-contact-info text-center">
                                <div class="info-icon">
                                    <i class="flaticon-email"></i>
                                </div>
                                <div class="info-content">
                                    <h5 class="title">Mail Address</h5>
                                    <p>info@magnetetechnologies.com</p>
                                </div>
                            </div>
                            <!--Single Contact Info End -->
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <!--Single Contact Info Start -->
                            <div class="single-contact-info text-center">
                                <div class="info-icon">
                                    <i class="flaticon-pin"></i>
                                </div>
                                <div class="info-content">
                                    <h5 class="title">Location</h5>
                                    <p>Noida 63</p>
                                </div>
                            </div>
                            <!--Single Contact Info End -->
                        </div>
                    </div>
                </div>
                <!-- Contact Info Wrap End -->
            </div>
        </div>
        <!-- Contact Info End -->

        <!-- Contact Form Start -->
        <div class="section contact-form-section section-padding">
            <div class="container">
                <!-- Contact Wrap Start -->
                <div class="contact-wrap">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="form-title text-center">
                                <h2 class="title">Get Support from our Team</h2>
                            </div>
                            <!-- Contact Form Wrap Start -->
                            <div class="contact-form-wrap">
                                <form action="Mailer/contactmail.php" method="post" data-toggle="validator" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <!-- Single Form Start -->
                                            <div class="single-form">
                                                <input class="form-control" name="name" id="name" type="text" placeholder="Your Name" required>
                                            </div>
                                            <!-- Single Form End -->
                                        </div>
                                        <div class="col-md-6">
                                            <!-- Single Form Start -->
                                            <div class="single-form">
                                                <input class="form-control" name="email" id="email" type="email" placeholder="Your Email" required>
                                            </div>
                                            <!-- Single Form End -->
                                        </div>
                                        <div class="col-md-6">
                                            <!-- Single Form Start -->
                                            <div class="single-form">
                                                <input class="form-control" type="text" name="mobile" id="mobile" placeholder="Your Number" required>
                                            </div>
                                            <!-- Single Form End -->
                                        </div>
                                        <div class="col-md-6">
                                            <!-- Single Form Start -->
                                            <div class="single-form">
                                                <input class="form-control" type="text" name="subject" id="subject" placeholder="Subject" required>
                                            </div>
                                            <!-- Single Form End -->
                                        </div>
                                        <div class="col-md-12">
                                            <!-- Single Form Start -->
                                            <div class="single-form">
                                                <textarea class="form-control" placeholder="Write A Message" name="massege" id="massege" required></textarea>
                                            </div>
                                            <!-- Single Form End -->
                                        </div>
                                        <div class="col-md-12">
                                            <!--  Single Form Start -->
                                            <div class="form-btn text-center">
                                                <button class="btn" type="button" onclick="SendMsg()">Send Message</button>
                                            </div>
                                            <!--  Single Form End -->
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- Contact Form Wrap End -->
                        </div>
                    </div>
                </div>
                <!-- Contact Wrap End -->
            </div>
        </div>
        <!-- Contact Form End -->

        <!-- Contact Map Start -->
        <div class="section contact-map-section">
            <div class="contact-map-wrap">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.5428371297853!2d77.45709456440677!3d28.61348854169495!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cee70230b8bd1%3A0xf31c294ba6bb1c5!2sVictory%20One%20Amara%2C%20Victory%20Amara%2C%20Panchsheel%20Green%2C%20Ghaziabad%2C%20Uttar%20Pradesh%20201009!5e0!3m2!1sen!2sin!4v1673363340031!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            </div>
        </div>
        <!-- Contact Map End -->


        <!-- Footer Section Start -->
    <?php include('layout/footer.php');?>
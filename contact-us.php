<?php
/*
Template Name: Cantact Us
*/
get_header();
?>
    <!-- Banner Section -->
    <section id="banner-wrap" class="banner-section">
        <div class="banner-section-overlay">
            <div class="banner-section-text">
                <div class="banner-text-inner">
                    <h2> Contact Us</h2>
                    <div class="bradcome">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><i class="fa fa-long-arrow-right"></i></li>
                            <li><a href="contact-1.html">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ Banner Section -->

    <!-- Welcome Section -->
    <section id="about-wrap" class="section-gray">
        <div class="container">
            <div class="row">
                <div class="contact-page-description">
                    <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                        <div id="success-message"></div>
                        <form class="contact_us_popup" id="reg-form">
                            <div class="row">
                                <h4>REQUEST A QUOTE</h4>
                                <p>Donec ac viverra ligula, in scelerisque leo.</p>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input type="text" placeholder="Enter Name" class="form-control required name" name="name" aria-required="true" id="name" required>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input type="email" placeholder="Email" class="form-control required email" name="email" aria-required="true" id="email" required>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input type="text" placeholder="Phone" class="form-control" name="phone" id="phone" required>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input type="text" placeholder="Subject" class="form-control" name="subject" id="subject" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea placeholder="Message" rows="7" class="form-control required" name="message" required></textarea>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary" type="submit">Send your message</button>
                            </div>
                        </form>
                        <div id="message"></div>
                    </div>
                    <div class="col-mg-4 col-md-4 col-sm-6 col-xs-12">
                         <div class="sidebar-wrap">
                            <div class="siderbar-widget">
                                <h4 class="sidebar-widget-title">Office Address</h4>
                                <div class="single-address-item">
                                    <div class="address-left-bg"></div>
                                    <div class="address-icon">
                                        <i class="fa fa-volume-control-phone" aria-hidden="true"></i>
                                    </div>
                                    <div class="address-text">
                                        <h4>phone</h4>
                                        <p> (000)-000-0000
                                            <br> +880 0000 000000
                                            <br> +91 000000 00000 00 </p>
                                    </div>
                                </div>
                            
                            <div class="single-address-item">
                                <div class="address-left-bg"></div>
                                <div class="address-icon">
                                    <i class="fa fa-volume-control-phone" aria-hidden="true"></i>
                                </div>
                                <div class="address-text">
                                    <h4>phone</h4>
                                    <p> (000)-000-0000
                                        <br> +880 0000 000000
                                        <br> +91 000000 00000 00 </p>
                                </div>
                            </div>
                              <div class="single-address-item">
                                    <div class="address-left-bg"></div>
                                    <div class="address-icon">
                                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                    </div>
                                    <div class="address-text">
                                        <h4>email</h4>
                                        <p> info@carcare.com
                                            <br> admin@carcare.com
                                            <br> support@carcare.com
                                        </p>
                                    </div>
                                </div>  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=== Right Fixed Appiontment Form ===-->
    <div id="appiontment-now-box">
        <p class="toggle">APPOINTMENT</p>
        <div class="appiontment-now ">
            <div class="appiontment-form">
                <p>Instant online Appiontment</p>
                <form name="contact_us_popup" method="post" action="contact.php">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" placeholder="Enter Name" class="form-control required name" name="name" aria-required="true" id="name1" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="email" placeholder="Email" class="form-control required email" name="email" aria-required="true" id="email1" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input name="form_appontment_date" class="form-control required date-picker" type="text" placeholder="Date" aria-required="true" id="datepicker1" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" placeholder="Phone" class="form-control" name="phone" id="phone1" required>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <input type="text" placeholder="Vehicle Registration Num* " class="form-control required" name="subject" id="reg1" required>
                            </div>
                        </div>

                    </div>
                    <div class="form-group">
                        <textarea placeholder="Message" rows="7" class="form-control required" name="message" required></textarea>
                    </div>
                    <div class="form-group tac">
                        <button class="btn btn-primary transition3s" type="submit">APPOINTMENT Now</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--===/ Right Fixed Appiontment Form ===-->
<?php get_footer(); ?>
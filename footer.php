<div id="subscribe">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <h1 class="subs-title">Subscribe to news letter :</h1>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" id="subcrb-form">
                                <form class="subscription registerForm">
                                    <div class="input-group">
                                        <input type="email" name="formInput[email]" value="" class="form-control" placeholder="Your Email:" required="" title="valid email is required" id="emaill">
                                        <span class="input-group-btn">
                                        <button class="btn btn-secondary" type="submit" value="submit" id="submit-btn"><i class="fa fa-paper-plane-o"></i></button>
                                        </span>
                                    </div>
                                    <input type="hidden" name="action" value="submitform">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>  
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
                                <input type="email" placeholder="Email" class="form-control required email" name="email" aria-required="true" id="email" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input name="form_appontment_date" class="form-control required date-picker" type="text" placeholder="Date" aria-required="true" id="datepicker1" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" placeholder="Phone" class="form-control" name="phone" id="phone" required>
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
                        <button class="btn btn-primary transition7s" type="submit">APPOINTMENT Now</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<!--===/ Right Fixed Appiontment Form ===-->

<!-- Footer ============================================= -->
<div id="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 tac">
                    <div class="emergency-call mrb-50">
                        <span class="emergency-icon"><i class="flaticon-office-telephone"></i></span>
                        <span class="des">For emergency cases</span>
                        <span class="phone">0-000-000-0000</span>
                        <div class="underline_sep"><i class="fa fa-car"></i></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php dynamic_sidebar( 'foot_widget' );?>                 
            </div>
        </div>
    </div>
    <!-- /Footer  -->
    <!-- copyright
    ============================================= -->
    <div id="copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                    <div class="copyright">
                        <p>&copy; Copyright 2017, All Rights Reserved. <span> A Product Design by <a href="http://thememoor.com"> Theme Moor</a></span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /copyright   -->
    <a href="#" id="scrollTopButton">
        <i class="fa fa-arrow-up" aria-hidden="true"></i>
    </a>
    <!-- Footer Scripts Area -->
<!-- <script src="js/jquery-2.2.4.min.js"></script>  -->
<?php wp_footer();?>
</body>
</html>
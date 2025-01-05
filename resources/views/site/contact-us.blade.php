@extends('layouts.site')
@section('content')
    <!--Page Title-->
    <section class="page-title centred" style="background-image: url({{ asset('frontend/assets/images/background/Banner-4-800x256.jpg') }});">
        <div class="auto-container">
            <div class="content-box clearfix">
                <h1>Contact Us</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->


    <!-- contact-info-section -->
    <section class="contact-info-section sec-pad centred">
        <div class="auto-container">
            <div class="sec-title">
                <!-- <h5>Contact us</h5> -->
                <h5>Get In Touch</h5>
            </div>
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 info-block">
                    <div class="info-block-one">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-32"></i></div>
                            <h4>Email Address</h4>
                            <p><a href="mailto:contact@expertsrcm.com">contact@expertsrcm.com</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 info-block">
                    <div class="info-block-one">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-33"></i></div>
                            <h4>Phone Number</h4>
                            <p><a href="tel:+14086758992">+1 (408) 675-8992</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 info-block">
                    <div class="info-block-one">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-34"></i></div>
                            <h4>Office Address</h4>
                            <p>Gandhinagar, Gujarat.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-info-section end -->


    <!-- contact-section -->
    <section class="contact-section bg-color-1">
        <div class="auto-container">
            <div class="row align-items-center clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="content-box">
                        <div class="sec-title">
                            <h5>Contact Us</h5>
                            <!-- <h2>Contact Us</h2> -->
                        </div>
                        <div class="form-inner">
                            <form method="post" action="" id="contact-form"> 
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="username" placeholder="Your Name" required="">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="subject" placeholder="Subject" required="">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="email" name="email" placeholder="Email address" required="">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="phone" placeholder="Phone" required="">
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <textarea name="message" placeholder="Message"></textarea>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <label id="captchaProblem" for="userCaptchaAnswer"></label>
                                        <input type="text" id="userCaptchaAnswer" name="userCaptchaAnswer" required>
                                        <input type="hidden" id="captchaAnswer" name="captchaAnswer">
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                                        <div id="loader" style="display: none; margin-right: 10px;">
                                            <div class="spinner"></div>
                                        </div>
                                        <button class="theme-btn btn-one" type="submit" name="submit-form">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 map-column">
                    <div class="google-map-area">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d478.5414176891733!2d72.58225900002437!3d23.137496168690028!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e8326758d6457%3A0xbda4a51cb3c76f72!2sExperts%20RCM!5e1!3m2!1sen!2sin!4v1734179421286!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-section end -->
    
@endsection




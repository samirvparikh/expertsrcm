<!-- main header -->
<header class="main-header">
            
    <!-- header-lower -->
    <div class="header-lower">
        <div class="outer-box">
            <div class="main-box">
                <div class="logo-box">
                    <figure class="logo"><a href="{{ url('/') }}"><img src="{{ asset('frontend/assets/images/expert_rcm_logo.jpeg') }}" alt=""></a></figure>
                </div>
                <div class="menu-area clearfix">
                    <!--Mobile Navigation Toggler-->
                    <div class="mobile-nav-toggler">
                        <i class="icon-bar"></i>
                        <i class="icon-bar"></i>
                        <i class="icon-bar"></i>
                    </div>
                    <nav class="main-menu navbar-expand-md navbar-light">
                        <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li><a href="{{ url('/') }}"><span>Home</span></a></li>
                                <li><a href="{{ url('/about-us') }}"><span>About Us</span></a></li>
                                <li><a href="{{ url('/why-choose-us') }}"><span>Why Choose Us</span></a></li>
                                <li class="dropdown"><a href="#"><span>Services</span></a>
                                    <ul>
                                        <li><a href="{{ url('/credentialing') }}">Credentialing</a></li>
                                        <li><a href="{{ url('/eligibility') }}">Eligibility</a></li>
                                        <li><a href="{{ url('/claim-submission') }}">Claim Submission</a></li>
                                        <li><a href="{{ url('/payment-posting') }}">Payment Posting</a></li>
                                        <li><a href="{{ url('/account-receivable') }}">Account Receivable</a></li>
                                        <li><a href="{{ url('/adjustment-and-adjudication') }}">Adjustment and Adjudication</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ url('/contact-us') }}"><span>Contact Us</span></a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="btn-box">
                    <!-- <a href="{{ url('/') }}" class="theme-btn btn-one"><span>+</span>Add Listing</a> -->
                </div>
            </div>
        </div>
    </div>

    <!--sticky Header-->
    <div class="sticky-header">
        <div class="outer-box">
            <div class="main-box">
                <div class="logo-box">
                    <figure class="logo"><a href="{{ url('/') }}"><img src="{{ asset('frontend/assets/images/expert_rcm_logo.jpeg') }}" alt=""></a></figure>
                </div>
                <div class="menu-area clearfix">
                    <nav class="main-menu clearfix">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav>
                </div>
                <div class="btn-box">
                    <!-- <a href="{{ url('/') }}" class="theme-btn btn-one"><span>+</span>Add Listing...</a> -->
                </div>
            </div>
        </div>
    </div>
</header>
<!-- main-header end -->

<!-- Mobile Menu  -->
<div class="mobile-menu">
    <div class="menu-backdrop"></div>
    <div class="close-btn"><i class="fas fa-times"></i></div>

    <nav class="menu-box">
        <div class="nav-logo"><a href="{{ url('/') }}"><img src="{{ asset('frontend/assets/images/expert_rcm_logo.jpeg') }}" alt="" title=""></a></div>
        <div class="menu-outer">
            <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
        </div>
        <div class="contact-info">
            <h4>Contact Info</h4>
            <ul>
                <!-- <li>Block A, 1, Maitri Lake View, Ground Floor, Gandhinagar, Gujarat.</li>
                <li><a href="tel:+919033660504">+91 9033660504</a></li> -->
                <li><a href="mailto:contact@expertsrcm.com">contact@expertsrcm.com</a></li>
            </ul>
        </div>
        <div class="social-links">
            <ul class="clearfix">
                <li><a href="{{ url('/') }}"><span class="fab fa-twitter"></span></a></li>
                <li><a href="{{ url('/') }}"><span class="fab fa-facebook-square"></span></a></li>
                <li><a href="{{ url('/') }}"><span class="fab fa-pinterest-p"></span></a></li>
                <li><a href="{{ url('/') }}"><span class="fab fa-instagram"></span></a></li>
                <li><a href="{{ url('/') }}"><span class="fab fa-youtube"></span></a></li>
            </ul>
        </div>
    </nav>
</div><!-- End Mobile Menu -->
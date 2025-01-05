@extends('layouts.site')
@section('content')
    <!-- banner-section -->
    <section class="banner-section" style="background-image: url({{ asset('frontend/assets/images/background/Banner-3-800x256.jpg') }});">
        <div class="auto-container">
            <div class="inner-container">
                <div class="content-box centred">
                    <h2>Empowering Healthcare with Seamless Interoperability and Automation</h2>
                    <h2>Experience EXPERTS RCM Today!</h2>
                    <!-- <p>Experience EXPERTSRCM Today!</p> -->
                </div>
                
            </div>
        </div>
    </section>
    <!-- banner-section end -->


    <!-- about-section -->
    <section class="about-section about-page pb-0">
        <div class="auto-container">
            <div class="inner-container">
                <div class="row align-items-center clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                        <div class="image_block_2">
                            <div class="image-box">
                                <figure class="image"><img src="{{ asset('frontend/assets/images/banner/Banner-4-770x760.jpg') }}" alt=""></figure>
                                <!-- <div class="text wow fadeInLeft animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                    <h2>20</h2>
                                    <h4>Years of <br />Experience</h4>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content_block_3">
                            <div class="content-box">
                                <div class="sec-title text">
                                    <h5>Welcome to Experts RCM</h5>                                    
                                    <p style="text-align: justify;">We specialize in comprehensive <b>Revenue Cycle Management (RCM)</b> solutions designed to optimize the financial operations of dental practices. Our goal is to help you streamline your billing, collections, and overall financial processes, ensuring faster payments, fewer denials, and improved cash flow. With a team of experienced professionals, cutting-edge technology, and a commitment to excellence, we provide a wide range of services tailored to meet the unique needs of your practice.</p>
                                </div>
                                <div class="sec-title text">
                                    <h5>Our Services</h5>                                    
                                    <ul class="list clearfix">
                                        <li><b> Dental Credentialing Services</b></li>
                                        <li><b> Dental Insurance Eligibility Services</b></li>
                                        <li><b> Dental Claim Submission</b></li>
                                        <li><b> Payment Posting Services</b></li>
                                        <li><b> Accounts Receivable Services</b></li>
                                        <li><b> Adjustment and Adjudication Services</b></li>
                                        <li><b> Denial Management and Appeals</b></li>
                                        <li><b> Revenue Cycle Analytics</b></li>

                                    </ul>
                                <div class="btn-box">
                                    <a href="about-us.html" class="theme-btn btn-one">Read More...</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-section end -->


    <!-- feature-style-three -->
    <section class="feature-style-three service-page centred">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                    <div class="feature-block-two wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">                                
                            <div class="icon-box"><i class="icon-24"></i></div>
                            <h4>Credentialing</h4>
                            <p>We assist with the credentialing and recredentialing process, ensuring your practice is properly enrolled with insurance carriers, allowing you to get reimbursed for your services without delays. <a href="credentialing.html">Read More...</a></p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                    <div class="feature-block-two wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-25"></i></div>
                            <h4>Eligibility</h4>
                            <p>Our team verifies patient insurance eligibility, ensuring that your practice knows exactly what is covered before services are rendered, reducing claim denials and patient confusion. <a href="eligibility.html">Read More...</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                    <div class="feature-block-two wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-26"></i></div>
                            <h4>Claim Submission</h4>
                            <p>We handle the entire claim submission process, ensuring that all claims are accurately submitted and follow payer-specific requirements to avoid delays or denials. <a href="claim-submission.html">Read More...</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                    <div class="feature-block-two wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-26"></i></div>
                            <h4>Payment Posting</h4>
                            <p>Our team ensures that payments from insurance providers and patients are accurately posted to the correct accounts, helping you maintain financial accuracy and improving cash flow. <a href="payment-posting.html">Read More...</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                    <div class="feature-block-two wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-27"></i></div>
                            <h4>Account Receivable</h4>
                            <p>We manage your accounts receivable by following up on unpaid claims, resolving discrepancies, and ensuring that your practice receives timely payments, helping to reduce Days in Accounts Receivable (DAR) and improve liquidity. <a href="account-receivable.html">Read More...</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                    <div class="feature-block-two wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-24"></i></div>
                            <h4>Adjustment and Adjudication</h4>
                            <p>We handle claim adjustments and adjudication processes to resolve payment discrepancies, manage denials, and ensure that all claims are paid correctly in accordance with payer contracts. <a href="adjustment-and-adjudication.html">Read More...</a></p>
                        </div>
                    </div>
                </div>
            </div>                
        </div>
    </section>
    <!-- feature-style-three end -->


    <!-- cta-section -->
    <section class="cta-section alternate-2 pb-240 centred" style="background-image: url({{ asset('frontend/assets/images/background/Banner-3-800x256.jpg') }});">
        <div class="auto-container">
            <div class="inner-box clearfix">
                <div class="text">
                    <h2>Empowering Healthcare with Seamless Interoperability and Automation<br />Experience EXPERTS RCM Today!</h2>
                </div>
                <!-- <div class="btn-box">
                    <a href="property-details.html" class="theme-btn btn-three">Rent Properties</a>
                    <a href="{{ url('/') }}" class="theme-btn btn-one">Buy Properties</a>
                </div> -->
            </div>
        </div>
    </section>
    <!-- cta-section end -->


    <!-- clients-section -->
    <section class="clients-section bg-color-1">
        <div class="pattern-layer" style="background-image: url({{ asset('frontend/assets/images/shape/shape-1.png') }});"></div>
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 title-column">
                    <div class="sec-title">
                        <h5>"Let us help you take control of your practice’s finances with our tailored RCM solutions.</h5>
                        <h5>Contact us today to learn more about how we can support your practice's financial health!"</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- clients-section end -->
@endsection

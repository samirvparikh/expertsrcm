@extends('layouts.site')
@section('content')
    <!--Page Title-->
    <section class="page-title centred" style="background-image: url({{ asset('frontend/assets/images/background/Banner-4-800x256.jpg') }});">
        <div class="auto-container">
            <div class="content-box clearfix">
                <h1>About Us</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>About Us</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->


    

    <!-- about-section -->
    <section class="about-section about-page pb-0">
        <div class="auto-container">
            <div class="inner-container22">
                <div class="row align-items-center clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 content-column">
                        <div class="content_block_3">
                            <div class="content-box">
                                <div class="sec-title">
                                    <h5>About Us – ExpertsRCM</h5>
                                    <!-- <h2>Hi, I’m Jessica Blake</h2> -->
                                </div>
                                <div class="text">
                                    <p style="text-align: justify;">At <b>ExpertsRCM,</b> we specialize in comprehensive <b>Revenue Cycle Management (RCM)</b> solutions designed to optimize the financial operations of dental practices. Our goal is to help you streamline your billing, collections, and overall financial processes, ensuring faster payments, fewer denials, and improved cash flow. With a team of experienced professionals, cutting-edge technology, and a commitment to excellence, we provide a wide range of services tailored to meet the unique needs of your practice.</p>
                                </div>
                                <div class="sec-title">
                                    <h5>Our Services</h5>
                                </div>
                                <div class="faq-content-side">
                                    <ul class="accordion-box">
                                        <li class="accordion block active-block">
                                            <div class="acc-btn active">
                                                <div class="icon-outer"><i class="fas fa-angle-down"></i></div>
                                                <h5>Dental Credentialing Services</h5>
                                            </div>
                                            <div class="acc-content current" style="display: block;">
                                                <div class="content-box">
                                                    <p>We assist with the credentialing and recredentialing process, ensuring your practice is properly enrolled with insurance carriers, allowing you to get reimbursed for your services without delays</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="accordion block">
                                            <div class="acc-btn">
                                                <div class="icon-outer"><i class="fas fa-angle-down"></i></div>
                                                <h5>Dental Insurance Eligibility Services</h5>
                                            </div>
                                            <div class="acc-content">
                                                <div class="content-box">
                                                    <p>Our team verifies patient insurance eligibility, ensuring that your practice knows exactly what is covered before services are rendered, reducing claim denials and patient confusion</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="accordion block">
                                            <div class="acc-btn">
                                                <div class="icon-outer"><i class="fas fa-angle-down"></i></div>
                                                <h5>Dental Claim Submission</h5>
                                            </div>
                                            <div class="acc-content">
                                                <div class="content-box">
                                                    <p>We handle the entire claim submission process, ensuring that all claims are accurately submitted and follow payer-specific requirements to avoid delays or denials</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="accordion block">
                                            <div class="acc-btn">
                                                <div class="icon-outer"><i class="fas fa-angle-down"></i></div>
                                                <h5>Payment Posting Services</h5>
                                            </div>
                                            <div class="acc-content">
                                                <div class="content-box">
                                                    <p>Our team ensures that payments from insurance providers and patients are accurately posted to the correct accounts, helping you maintain financial accuracy and improving cash flow</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="accordion block">
                                            <div class="acc-btn">
                                                <div class="icon-outer"><i class="fas fa-angle-down"></i></div>
                                                <h5>Accounts Receivable Services</h5>
                                            </div>
                                            <div class="acc-content">
                                                <div class="content-box">
                                                    <p>We manage your accounts receivable by following up on unpaid claims, resolving discrepancies, and ensuring that your practice receives timely payments, helping to reduce Days in Accounts Receivable (DAR) and improve liquidity</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="accordion block">
                                            <div class="acc-btn">
                                                <div class="icon-outer"><i class="fas fa-angle-down"></i></div>
                                                <h5>Adjustment and Adjudication Services</h5>
                                            </div>
                                            <div class="acc-content">
                                                <div class="content-box">
                                                    <p>We handle claim adjustments and adjudication processes to resolve payment discrepancies, manage denials, and ensure that all claims are paid correctly in accordance with payer contracts</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="accordion block">
                                            <div class="acc-btn">
                                                <div class="icon-outer"><i class="fas fa-angle-down"></i></div>
                                                <h5>Denial Management and Appeals</h5>
                                            </div>
                                            <div class="acc-content">
                                                <div class="content-box">
                                                    <p>We proactively manage claim denials, investigate reasons for rejections, and submit appeals to ensure your practice recovers revenue efficiently</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="accordion block">
                                            <div class="acc-btn">
                                                <div class="icon-outer"><i class="fas fa-angle-down"></i></div>
                                                <h5>Revenue Cycle Analytics</h5>
                                            </div>
                                            <div class="acc-content">
                                                <div class="content-box">
                                                    <p>Through detailed reporting and data analytics, we provide insights into your practice’s financial health, helping you make informed decisions that improve overall profitability</p>
                                                </div>
                                            </div>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-section end -->

    <section class="about-section about-page pb-0">
        <div class="auto-container">
            <div class="inner-container">
                <div class="row align-items-center clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="content_block_3">
                            <div class="content-box">
                                <div class="text">
                                    <p style="text-align: justify;">By partnering with <b>ExpertsRCM,</b> you can reduce administrative burdens, enhance revenue cycle efficiency, and focus more on what matters most—providing high-quality care to your patients. Our goal is to optimize your practice's financial performance so you can achieve long-term growth and success</p>
                                </div>  
                            </div>
                        </div>

                        <div class="blockquote">
                            <blockquote>
                                <h4>“Let us help you take control of your practice’s finances with our tailored <b>RCM</b> solutions. Contact us today to learn more about how we can support your practice's financial health!”</h4>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

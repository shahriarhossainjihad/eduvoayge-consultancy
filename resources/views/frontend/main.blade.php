@extends('frontend.master')
@section('frontend.main')
 <!-- Start Main Slider -->
 <section class="main-slider style1">
     <div class="slider-box">
         <!-- Banner Carousel -->
         <div class="banner-carousel owl-theme owl-carousel">
             <!-- Slide -->
             <div class="slide">
                 <div class="image-layer" style="background-image: url('{{ asset('frontend/assets/images/slides/slide-v1-2.jpg') }}')">
                 </div>
                 <div class="auto-container">
                     <div class="content right">
                         <h3>High-Class Professionals</h3>
                         <h2>We Are Most Trusted<br> Educational Consultancy</h2>
                         <div class="btns-box">
                             <a class="btn-one" href="#"><span class="txt">Discover More</span></a>
                         </div>
                     </div>
                 </div>
             </div>
             <!-- Slide -->
             <div class="slide">
                 <div class="image-layer" style="background-image:url({{asset('frontend')}}/assets/images/slides/slide-v1-3.jpg)">
                 </div>
                 <div class="auto-container">
                     <div class="content">
                         <h3>Welcome To the Eduvoyage</h3>
                         <h2>Change Your Life<br> with Eduvoyage</h2>
                         <div class="btns-box">
                             <a class="btn-one" href="#"><span class="txt">Discover More</span></a>
                         </div>
                     </div>
                 </div>
             </div>
             <!-- Slide -->
             <div class="slide">
                 <div class="image-layer" style="background-image: url('{{ asset('frontend/assets/images/slides/slide-v1-4.jpg') }}')">
                 </div>
                 <div class="auto-container">
                     <div class="content right">
                         <h3>Embrace New Beginnings with Eduvoyage.</h3>
                         <h2>Step into a Brighter Future with Eduvoyage.</h2>
                         <div class="btns-box">
                             <a class="btn-one" href="#"><span class="txt">Discover More</span></a>
                         </div>
                     </div>
                 </div>
             </div>
             <!-- Slide -->
             <div class="slide">
                 <div class="image-layer" style="background-image:url({{asset('frontend')}}/assets/images/slides/slide-v1-1.jpg)">
                 </div>
                 <div class="auto-container">
                     <div class="content">
                         <h3>Build Your Future with Eduvoyage</h3>
                         <h2>Transform Your Dreams Into Reality <br> with Eduvoyage</h2>
                         <div class="btns-box">
                             <a class="btn-one" href="#"><span class="txt">Discover More</span></a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- End Main Slider -->

 <!--Start About Style1 Area-->
 <section class="about-style1-area mt-5">
     <div class="container">
         <div class="row">
             <div class="col-xl-6">
                 <div class="about-style1-text-box">
                     <div class="sec-title">
                         <h3>ABOUT EDUVOYAGE</h3>
                         <h2>Welcome to <br> <span>Eduvoyage Education Consultancy</span></h2>
                     </div>
                     <div class="inner-contant">
                         <div class="text">
                             <p>Embark on your educational journey with Eduvoyage, where your dreams of studying
                                 abroad or choosing the perfect career path come to life. Our dedicated team is
                                 here to provide personalized guidance and support to help you achieve your
                                 academic and professional goals.</p>
                         </div>
                         <ul>
                             <li>Talk to one of our best consultant today</li>
                             <li>Our experts are able to find new growth</li>
                             <li>Find more information our website</li>
                         </ul>
                         <div class="bottom-box">
                             <div class="left">
                                 <div class="button">
                                     <a class="btn-one" href="#"><span class="txt">More Detail<i class="fa fa-angle-double-right" aria-hidden="true"></i></span></a>
                                 </div>
                             </div>
                             <!-- <div class="right">
                                        <div class="icon">
                                            <span class="flaticon-24-hours thm-clr"></span>
                                        </div>
                                        <div class="phone">
                                            <a href="tel:123456789">+0 123 888 555</a>
                                        </div>
                                    </div> -->
                         </div>
                     </div>
                 </div>
             </div>

             <div class="col-xl-6">
                 <div class="about-style1-image-box">
                     <div class="image-box">
                         <div class="main-image"><img src="{{asset('frontend')}}/assets/images/about/about-1.jpg" alt=""></div>
                         <div class="inner">
                             <img class="" src="{{asset('frontend')}}/assets/images/about/about-2.jpg" alt="Awesome Image">
                             <div class="icon"><span class="flaticon-people-1"></span></div>
                         </div>
                     </div>
                 </div>
             </div>

         </div>
     </div>
 </section>
 <!--End About Style1 Area-->

 <!--Start Visa Style2 Area-->
 <section class="visa-style2-area">
     <div class="container">
         <div class="sec-title text-center">
             <h3>Our Services</h3>
             <h2>With Eduvoyage Immigration Visa<br> <span>Service We Provide.</span></h2>
         </div>
         <div class="row">
             <div class="col-xl-12">
                 <div class="theme-carousel visa-carousel owl-carousel owl-theme owl-dot-style1" data-options='{"loop":true, "margin":30, "autoheight":true, "nav":false, "dots":true, "autoplay":true, "stagePadding":0, "autoplayTimeout":10000, "smartSpeed":700, "responsive":{ "0":{"items": "1"}, "500":{"items": "1"}, "767":{"items": "2"}, "1199":{"items": "4"}, "1600":{"items": "4"} }}'>
                     <!--Start Single Visa Box Style2-->
                     <div class="single-visa-box-style2">
                         <div class="icon-holder"><span class="flaticon-technology thm-clr"></span></div>
                         <div class="text-holder">
                             <h3>Study Abroad Consultation</h3>
                             <p>Personalized guidance for choosing the right university, course, and securing
                                 visas.</p>
                         </div>
                     </div>
                     <!--End Single Visa Box-->
                     <!--Start Single Visa Box Style2-->
                     <div class="single-visa-box-style2">
                         <div class="icon-holder"><span class="flaticon-business-1 thm-clr"></span></div>
                         <div class="text-holder">
                             <h3>Career Counseling </h3>
                             <p>Expert advice to identify your strengths and plan a successful career path.</p>
                         </div>
                     </div>
                     <!--End Single Visa Box-->
                     <!--Start Single Visa Box Style2-->
                     <div class="single-visa-box-style2">
                         <div class="icon-holder"><span class="flaticon-electronics thm-clr"></span></div>
                         <div class="text-holder">
                             <h3>Test Preparation</h3>
                             <p>Comprehensive coaching for IELTS, TOEFL, GRE, and GMAT to help you achieve top
                                 scores.</p>
                         </div>
                     </div>
                     <!--End Single Visa Box-->
                     <!--Start Single Visa Box Style2-->
                     <div class="single-visa-box-style2">
                         <div class="icon-holder"><span class="flaticon-profession thm-clr"></span></div>
                         <div class="text-holder">
                             <h3>Tourist Visa</h3>
                             <p>Tourist visa to popular belief. Elementum sapien an pulvinar augue.</p>
                         </div>
                     </div>
                     <!--End Single Visa Box-->

                     <!--Start Single Visa Box Style2-->
                     <div class="single-visa-box-style2">
                         <div class="icon-holder"><span class="flaticon-technology thm-clr"></span></div>
                         <div class="text-holder">
                             <h3>Student Visa</h3>
                             <p>Student visa to popular belief. Elementum sapien an pulvinar augue.</p>
                         </div>
                     </div>
                     <!--End Single Visa Box-->
                     <!--Start Single Visa Box Style2-->
                     <div class="single-visa-box-style2">
                         <div class="icon-holder"><span class="flaticon-business-1 thm-clr"></span></div>
                         <div class="text-holder">
                             <h3>Business Visa </h3>
                             <p>Business visa to popular belief. Elementum sapien an pulvinar augue.</p>
                         </div>
                     </div>
                     <!--End Single Visa Box-->
                     <!--Start Single Visa Box Style2-->
                     <div class="single-visa-box-style2">
                         <div class="icon-holder"><span class="flaticon-electronics thm-clr"></span></div>
                         <div class="text-holder">
                             <h3>Job Seeker Visa</h3>
                             <p>Job Seeker visa to popular belief. Elementum sapien an pulvinar augue.</p>
                         </div>
                     </div>
                     <!--End Single Visa Box-->
                     <!--Start Single Visa Box Style2-->
                     <div class="single-visa-box-style2">
                         <div class="icon-holder"><span class="flaticon-profession thm-clr"></span></div>
                         <div class="text-holder">
                             <h3>Tourist Visa</h3>
                             <p>Tourist visa to popular belief. Elementum sapien an pulvinar augue.</p>
                         </div>
                     </div>
                     <!--End Single Visa Box-->
                 </div>
             </div>

         </div>
     </div>
 </section>
 <!--End Visa Style2 Area-->

 <!--Start Choose Area-->
 <section class="choose-area">
     <div class="layer-outer" style="background-image: url({{asset('frontend')}}/assets/images/shape/shape-1.png)"></div>
     <div class="container">
         <div class="row">
             <div class="col-xl-6">

                 <div class="choose-left-box">
                    <div class="border-box paroller"></div>
                    <div class="border-box2 paroller"></div>
                    <div class="video-holder-box" style="background-image: url({{asset('frontend')}}/assets/images/resources/video-gallery-bg.jpg)">
                        <div class="icon">
                            <a class="video-popup" title="Auto Repair Fastfix Video Gallery" href="{{asset('frontend/assets/images/resources/1.mp4')}}">
                                <span class="flaticon-play-button"></span>
                            </a>
                        </div>
                    </div>
                </div>

             </div>
             <div class="col-xl-6">
                 <div class="choose-content-box">
                     <div class="sec-title">
                         <h3>Why Choose Eduvoyage?</h3>
                         <h2>We are Provide<br> <span>Best Educational Services.</span></h2>
                     </div>
                     <div class="inner-content">
                         <h3>We tailor our services to meet your unique needs and aspirations.</h3>
                         <p>Our counselors have years of experience and deep industry knowledge. We have
                             partnerships with top institutions and a network of alumni worldwide. Read
                             testimonials from students who have successfully achieved their educational goals
                             with our help.</p>
                         <div class="progress-levels">
                             <!--Skill Box-->
                             <div class="progress-box wow">
                                 <div class="inner count-box">
                                     <div class="text">Test Preparation</div>
                                     <div class="bar">
                                         <div class="bar-innner">
                                             <div class="skill-percent">
                                                 <span class="count-text" data-speed="3000" data-stop="90">0</span>
                                                 <span class="percent">%</span>
                                             </div>
                                             <div class="bar-fill" data-percent="90"></div>
                                             <div class="bar-fill" data-percent="90" title="Book"></div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <!--Skill Box-->
                             <div class="progress-box wow">
                                 <div class="inner count-box">
                                     <div class="text">Study Abroad Assistance</div>
                                     <div class="bar">
                                         <div class="bar-innner">
                                             <div class="skill-percent">
                                                 <span class="count-text" data-speed="3000" data-stop="85">0</span>
                                                 <span class="percent">%</span>
                                             </div>
                                             <div class="bar-fill" data-percent="85"></div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <!--Skill Box-->
                             <div class="progress-box wow last-child">
                                 <div class="inner count-box">
                                     <div class="text">Career Counseling</div>
                                     <div class="bar">
                                         <div class="bar-innner">
                                             <div class="skill-percent">
                                                 <span class="count-text" data-speed="3000" data-stop="80">0</span>
                                                 <span class="percent">%</span>
                                             </div>
                                             <div class="bar-fill" data-percent="80"></div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>

                     </div>
                 </div>
             </div>

         </div>
     </div>
 </section>
 <!--End Choose Area-->

 <!--Start Blog Style1 Area-->
 <section class="blog-style1-area">
     <div class="container">
         <div class="sec-title text-center">
             <h3>OUR BLOG</h3>
             <h2>Articles From Resources<br> <span>And Latest Blog.</span></h2>
         </div>
         <div class="row">
             <!--Start Single blog Style1-->
             <div class="col-xl-4 col-lg-4">
                 <div class="single-blog-style1 wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="1500ms">
                     <div class="img-holder">
                         <div class="inner">
                             <img src="{{asset('frontend')}}/assets/images/blog/blog-v1-1.jpg" alt="Awesome Image">
                         </div>
                         <div class="date-box">
                             <h3>24<br><span>JUNE</span></h3>
                         </div>
                     </div>
                     <div class="text-holder">
                         <ul class="meta-info">
                             <li><span class="flaticon-user thm-clr"></span><a href="#">By admin</a></li>
                             <li><span class="flaticon-open-archive thm-clr"></span><a href="#">Immigration
                                     Visa</a></li>
                             <li><span class="flaticon-conversation thm-clr"></span><a href="#">02</a></li>
                         </ul>
                         <h3><a href="#">What Are The Best Countries to Immigrate With The
                                 Family?</a></h3>
                     </div>
                 </div>
             </div>
             <!--End Single blog Style1-->
             <!--Start Single blog Style1-->
             <div class="col-xl-4 col-lg-4">
                 <div class="single-blog-style1 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                     <div class="img-holder">
                         <div class="inner">
                             <img src="{{asset('frontend')}}/assets/images/blog/blog-v1-2.jpg" alt="Awesome Image">
                         </div>
                         <div class="date-box">
                             <h3>16<br><span>Mar</span></h3>
                         </div>
                     </div>
                     <div class="text-holder">
                         <ul class="meta-info">
                             <li><span class="flaticon-user thm-clr"></span><a href="#">By admin</a></li>
                             <li><span class="flaticon-open-archive thm-clr"></span><a href="#">Business Visa</a>
                             </li>
                             <li><span class="flaticon-conversation thm-clr"></span><a href="#">02</a></li>
                         </ul>
                         <h3><a href="#">Required Documents for Family Immigration Visas</a></h3>
                     </div>
                 </div>
             </div>
             <!--End Single blog Style1-->
             <!--Start Single blog Style1-->
             <div class="col-xl-4 col-lg-4">
                 <div class="single-blog-style1 wow fadeInRight" data-wow-delay="100ms" data-wow-duration="1500ms">
                     <div class="img-holder">
                         <div class="inner">
                             <img src="{{asset('frontend')}}/assets/images/blog/blog-v1-3.jpg" alt="Awesome Image">
                         </div>
                         <div class="date-box">
                             <h3>12<br><span>Mar</span></h3>
                         </div>
                     </div>
                     <div class="text-holder">
                         <ul class="meta-info">
                             <li><span class="flaticon-user thm-clr"></span><a href="#">By admin</a></li>
                             <li><span class="flaticon-open-archive thm-clr"></span><a href="#">Immigration
                                     Visa</a></li>
                             <li><span class="flaticon-conversation thm-clr"></span><a href="#">02</a></li>
                         </ul>
                         <h3><a href="#">Seven Reasons People Decide to Move to Another
                                 Country</a></h3>
                     </div>
                 </div>
             </div>
             <!--End Single blog Style1-->
         </div>
     </div>
 </section>
 <!--End Blog Style1 Area-->

 <!--Start Contact Form Section-->
 <section class="contact-form-area">
     <div class="container">
         <div class="title text-center">
             <h2>Get in Touch</h2>
             <p>Feel free to get in touch with me. We alwasy open to discussing now projects,<br> createive ideas
                 or opportunities to be part of your visions</p>
         </div>
         <div class="row">
             <div class="col-xl-12 col-lg-12">
                 <div class="contact-form">
                     <form id="contact-form" name="contact_form" class="default-form2" action="{{asset('frontend')}}/assets/inc/sendmail.php" method="post">
                         <div class="row">
                             <div class="col-xl-6 col-lg-6">
                                 <div class="input-box">
                                     <input type="text" name="form_name" value="" placeholder="Name" required="">
                                 </div>
                                 <div class="input-box">
                                     <input type="text" name="form_phone" value="" placeholder="Phone">
                                 </div>
                             </div>
                             <div class="col-xl-6 col-lg-6">
                                 <div class="input-box">
                                     <input type="email" name="form_email" value="" placeholder="Email" required="">
                                 </div>
                                 <div class="input-box">
                                     <input type="text" name="form_subject" value="" placeholder="Subject">
                                 </div>
                             </div>
                         </div>
                         <div class="row">
                             <div class="col-xl-12">
                                 <div class="input-box">
                                     <textarea name="form_message" placeholder="Message" required=""></textarea>
                                 </div>
                             </div>
                         </div>
                         <div class="row">
                             <div class="col-xl-12">
                                 <div class="button-box text-center">
                                     <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                                     <button class="btn-one" type="submit" data-loading-text="Please wait...">
                                         <span class="txt">Send Massage</span>
                                     </button>
                                 </div>
                             </div>
                         </div>
                     </form>
                 </div>
             </div>

         </div>
     </div>
 </section>
 <!--End Contact Form Section-->
 @endsection

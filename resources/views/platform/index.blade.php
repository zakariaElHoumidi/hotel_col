@extends('platform.layouts.layout')

@section('content')
        <!-- slider-area -->
        <section id="home" class="slider-area fix p-relative">

            <div class="slider-active" style="background: #101010;">
            <div class="single-slider slider-bg d-flex align-items-center" style="background-image: url(img/slider/slider_bg_01.png); background-size: cover;">
                    <div class="container">
                       <div class="row justify-content-center align-items-center">

                            <div class="col-lg-7 col-md-7">
                                <div class="slider-content s-slider-content mt-80 text-center">
                                     <h2 data-animation="fadeInUp" data-delay=".4s">Enjoy A Luxuary Experience</h2>
                                    <p data-animation="fadeInUp" data-delay=".6s">Donec vitae libero non enim placerat eleifend aliquam erat volutpat. Curabitur diam ex, dapibus purus sapien, cursus sed nisl tristique, commodo gravida lectus non.</p>

                                      <div class="slider-btn mt-30 mb-105">
                                          <a href="contact.html" class="btn ss-btn active mr-15" data-animation="fadeInLeft" data-delay=".4s">Visit Our Shop</a>
                                          <a href="https://www.youtube.com/watch?v=gyGsPlt06bo" class="video-i popup-video" data-animation="fadeInUp" data-delay=".8s" style="animation-delay: 0.8s;" tabindex="0"><i class="fas fa-play"></i> Intro Video</a>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                </div>
        </section>
        <!-- slider-area-end -->
        <!-- booking-area -->
        <div id="booking" class="booking-area p-relative">
            <div class="container">
                <form action="#" class="contact-form" >
                        <div class="row align-items-center">
                            <div class="col-lg-12">
                                <ul>
                                    <li>
                                        <div class="contact-field p-relative c-name">
                                           <label><i class="fal fa-badge-check"></i> Check In Date</label>
                                                 <input type="date" id="chackin" name="date">
                                        </div>
                                    </li>
                                    <li>
                                        <div class="contact-field p-relative c-name">
                                             <label><i class="fal fa-times-octagon"></i> Check Out Date</label>
                                                 <input type="date" id="chackout" name="date">
                                        </div>
                                    </li>
                                     <li>
                                        <div class="contact-field p-relative c-name">
                                             <label><i class="fal fa-users"></i> Adults</label>
                                            <select name="adults" id="adu">
                                              <option value="sports-massage">Adults</option>
                                              <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                    </li>
                                     <li>
                                        <div class="contact-field p-relative c-name">
                                             <label><i class="fal fa-baby"></i> Child</label>
                                            <select name="child" id="cld">
                                              <option value="sports-massage">Child</option>
                                              <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                    </li>
                                     <li>
                                        <div class="contact-field p-relative c-name">
                                            <label><i class="fal fa-concierge-bell"></i> Room</label>
                                           <select name="room" id="rm">
                                              <option value="sports-massage">Room</option>
                                              <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="slider-btn">
                                            <label><i class="fal fa-calendar-alt"></i></label>
                                        <button class="btn ss-btn" data-animation="fadeInRight" data-delay=".8s">Check Availability</button>
                                    </div>
                                    </li>
                                </ul>
                            </div>

                        </div>

                </form>
            </div>
        </div>
        <!-- booking-area-end -->
         <!-- room-area-->
        <section id="services" class="services-area pt-113 pb-150">

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-12">
                        <div class="section-title center-align mb-50 text-center">
                            <h5>The pleasure of luxury</h5>
                            <h2>Rooms & Suites</h2>
                            <p>Proin consectetur non dolor vitae pulvinar. Pellentesque sollicitudin dolor eget neque viverra, sed interdum metus interdum. Cras lobortis pulvinar dolor, sit amet ullamcorper dolor iaculis vel</p>
                        </div>
                    </div>
                </div>
                <div class="row services-active">
                    <div class="col-xl-4 col-md-6">
                        <div class="single-services mb-30">
                            <div class="services-thumb">
                                <a class="gallery-link popup-image" href="img/gallery/room-img01.png">
                                <img src="img/gallery/room-img01.png" alt="img">
                                </a>
                            </div>
                            <div class="services-content">
                                <div class="day-book">
                                    <ul>
                                        <li>$600/Night</li>
                                        <li><a href="contact.html">Book Now</a></li>
                                    </ul>
                                </div>
                                <h4><a href="single-rooms.html">Classic Balcony Room</a></h4>
                                <p>Aenean vehicula ligula eu rhoncus porttitor. Duis vel lacinia quam. Nunc rutrum porta place ullam ipsum. Morbi imperdiet, orci et dapibus.</p>
                                <div class="icon">
                                    <ul>
                                        <li><img src="img/icon/sve-icon1.png" alt="img"></li>
                                        <li><img src="img/icon/sve-icon2.png" alt="img"></li>
                                        <li><img src="img/icon/sve-icon3.png" alt="img"></li>
                                        <li><img src="img/icon/sve-icon4.png" alt="img"></li>
                                        <li><img src="img/icon/sve-icon5.png" alt="img"></li>
                                        <li><img src="img/icon/sve-icon6.png" alt="img"></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="single-services mb-30">
                            <div class="services-thumb">
                                <a class="gallery-link popup-image" href="img/gallery/room-img02.png">
                                <img src="img/gallery/room-img02.png" alt="img">
                                </a>
                            </div>
                            <div class="services-content">
                                <div class="day-book">
                                    <ul>
                                        <li>$400/Night</li>
                                        <li><a href="contact.html">Book Now</a></li>
                                    </ul>
                                </div>
                                <h4><a href="single-rooms.html">Superior Double Room</a></h4>
                                <p>Aenean vehicula ligula eu rhoncus porttitor. Duis vel lacinia quam. Nunc rutrum porta ex, in imperdiet tortor feugiat at.</p>
                                <div class="icon">
                                    <ul>
                                        <li><img src="img/icon/sve-icon1.png" alt="img"></li>
                                        <li><img src="img/icon/sve-icon2.png" alt="img"></li>
                                        <li><img src="img/icon/sve-icon3.png" alt="img"></li>
                                        <li><img src="img/icon/sve-icon4.png" alt="img"></li>
                                        <li><img src="img/icon/sve-icon5.png" alt="img"></li>
                                        <li><img src="img/icon/sve-icon6.png" alt="img"></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="single-services mb-30">
                            <div class="services-thumb">
                                <a class="gallery-link popup-image" href="img/gallery/room-img03.png">
                                <img src="img/gallery/room-img03.png" alt="img">
                                </a>
                            </div>
                            <div class="services-content">
                                <div class="day-book">
                                    <ul>
                                        <li>$100/Night</li>
                                        <li><a href="contact.html">Book Now</a></li>
                                    </ul>
                                </div>
                                <h4><a href="single-rooms.html">Super Balcony Double Room</a></h4>
                                <p>Aenean vehicula ligula eu rhoncus porttitor. Duis vel lacinia quam. Nunc rutrum porta place ullam ipsum. Morbi imperdiet, orci et dapibus.</p>
                                <div class="icon">
                                    <ul>
                                        <li><img src="img/icon/sve-icon1.png" alt="img"></li>
                                        <li><img src="img/icon/sve-icon2.png" alt="img"></li>
                                        <li><img src="img/icon/sve-icon3.png" alt="img"></li>
                                        <li><img src="img/icon/sve-icon4.png" alt="img"></li>
                                        <li><img src="img/icon/sve-icon5.png" alt="img"></li>
                                        <li><img src="img/icon/sve-icon6.png" alt="img"></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="single-services mb-30">
                            <div class="services-thumb">
                                <a class="gallery-link popup-image" href="img/gallery/room-img04.png">
                                <img src="img/gallery/room-img04.png" alt="img">
                                </a>
                            </div>
                            <div class="services-content">
                                <div class="day-book">
                                    <ul>
                                        <li>$300/Night</li>
                                        <li><a href="contact.html">Book Now</a></li>
                                    </ul>
                                </div>
                                <h4><a href="single-rooms.html">Delux Double Room</a></h4>
                               <p>Aenean vehicula ligula eu rhoncus porttitor. Duis vel lacinia quam. Nunc rutrum porta place ullam ipsum. Morbi imperdiet, orci et dapibus.</p>
                                <div class="icon">
                                    <ul>
                                        <li><img src="img/icon/sve-icon1.png" alt="img"></li>
                                        <li><img src="img/icon/sve-icon2.png" alt="img"></li>
                                        <li><img src="img/icon/sve-icon3.png" alt="img"></li>
                                        <li><img src="img/icon/sve-icon4.png" alt="img"></li>
                                        <li><img src="img/icon/sve-icon5.png" alt="img"></li>
                                        <li><img src="img/icon/sve-icon6.png" alt="img"></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- room-area-end -->
         <!-- feature-area -->
        <section class="feature-area2 p-relative fix" style="background: #f7f5f1;">
             <div class="animations-02"><img src="img/bg/an-img-02.png" alt="contact-bg-an-05"></div>
            <div class="container">
                <div class="row justify-content-center align-items-center">
                     <div class="col-lg-6 col-md-12 col-sm-12 pr-30">
                       <div class="feature-img">
                              <img src="img/features/feature.png" alt="img" class="img">
                            </div>
                    </div>
                   <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="feature-content s-about-content">
                            <div class="feature-title pb-20">
                                <h5>Luxury Hotel & Resort</h5>
                            <h2>
                             Pearl Of The Adriatic.
                            </h2>
                            </div>
                            <p>Vestibulum non ornare nunc. Maecenas a metus in est iaculis pretium. Aliquam ullamcorper nibh lacus, ac suscipit ipsum consequat porttitor.Aenean vehicula ligula eu rhoncus porttitor. Duis vel lacinia quam. Nunc rutrum porta ex, in imperdiet tortor feugiat at.</p>
                            <p>Cras finibus laoreet felis et hendrerit. Integer ligula lorem, finibus vitae lorem at, egestas consectetur urna. Integer id ultricies elit. Maecenas sodales nibh, quis posuere felis. In commodo mi lectus venenatis metus eget fringilla. Suspendisse varius ante eget.</p>
                            <div class="slider-btn mt-15">
                                             <a href="about.html" class="btn ss-btn smoth-scroll">Discover More</a>
                                        </div>

                        </div>
                    </div>


                </div>
            </div>
        </section>
        <!-- feature-area-end -->
         <!-- about-area -->
        <section class="about-area about-p pt-120 pb-120 p-relative fix">
            <div class="animations-02"><img src="img/bg/an-img-02.png" alt="contact-bg-an-02"></div>
            <div class="container">
                <div class="row justify-content-center align-items-center">
                <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="about-content s-about-content  wow fadeInRight  animated pr-30" data-animation="fadeInRight" data-delay=".4s">
                            <div class="about-title second-title pb-25">
                                <h5>About Us</h5>
                                <h2>Most Safe & Rated Hotel In London.</h2>
                            </div>
                               <p>Morbi tortor urna, placerat vel arcu quis, fringilla egestas neque. Morbi sit amet porta erat, quis rutrum risus. Vivamus et gravida nibh, quis posuere felis. In commodo mi lectus, Integer ligula lorem, finibus vitae lorem vitae tincidunt dolor consequat quis.</p>
                                <p>Cras finibus laoreet felis et hendrerit. Integer ligula lorem, finibus vitae lorem at, egestas consectetur urna. Integer id ultricies elit. Maecenas sodales nibh, quis posuere felis. In commodo mi lectus venenatis metus eget fringilla. Suspendisse varius ante eget lorem tempus blandit. Aenean eu vulputate lorem, quis auctor lectus.</p>
                                <div class="about-content3 mt-30">
                                <div class="row justify-content-center align-items-center">
                                <div class="col-md-12">
                                     <ul class="green mb-30">
                                                <li> 24 Month / 24,000km Nationwide Warranty monotone</li>
                                                <li> Curabitur dapibus nisl a urna congue, in pharetra urna accumsan.</li>
                                                <li> Customer Rewards Program and excellent technology</li>
                                           </ul>
                                    </div>
                                <div class="col-md-6">
                                      <div class="slider-btn">
                                             <a href="about.html" class="btn ss-btn smoth-scroll">Discover More</a>
                                        </div>
                                </div>
                                <div class="col-md-6 text-right">
                                    <div class="signature">
                                        <img src="img/features/signature.png" alt="img">
                                    </div>

                                </div>

                                </div>
                            </div>

                        </div>
                    </div>
                      <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="s-about-img p-relative  wow fadeInLeft animated" data-animation="fadeInLeft" data-delay=".4s">
                            <img src="img/features/about_img_02.png" alt="img">
                           <div class="about-icon">
                                 <img src="img/features/about_img_03.png" alt="img">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- about-area-end -->
        <!-- service-details2-area -->
        <section id="service-details2" class="pt-120 pb-90 p-relative" style="background-color: #f7f5f1;">
             <div class="animations-01"><img src="img/bg/an-img-01.png" alt="an-img-01"></div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="section-title center-align mb-50 text-center">
                            <h5>Explore</h5>
                            <h2>
                                The Hotel
                            </h2>
                            <p>Proin consectetur non dolor vitae pulvinar. Pellentesque sollicitudin dolor eget neque viverra, sed interdum metus interdum. Cras lobortis pulvinar dolor, sit amet ullamcorper dolor iaculis vel</p>
                        </div>

                    </div>
                    <div class="col-lg-4 col-md-6">
                            <div class="services-08-item mb-30">
                                <div class="services-icon2">
                                   <img src="img/icon/fe-icon01.png" alt="img">
                                </div>
                                <div class="services-08-thumb">
                                 <img src="img/icon/fe-icon01.png" alt="img">
                                </div>
                                <div class="services-08-content">
                                    <h3><a href="single-service.html"> Qulity Room</a></h3>
                                    <p>Nullam molestie lacus sit amet velit fermentum feugiat. Mauris auctor eget nunc sit amet.</p>
                                    <a href="single-service.html">Read More <i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                          <div class="col-lg-4 col-md-6">
                            <div class="services-08-item mb-30">
                                 <div class="services-icon2">
                                   <img src="img/icon/fe-icon04.png" alt="img">
                                </div>
                                <div class="services-08-thumb">
                               <img src="img/icon/fe-icon04.png" alt="img">
                                </div>
                                <div class="services-08-content">
                                    <h3><a href="single-service.html">Privet Beach</a></h3>
                                   <p>Nullam molestie lacus sit amet velit fermentum feugiat. Mauris auctor eget nunc sit amet.</p>
                                     <a href="single-service.html">Read More <i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                         <div class="col-lg-4 col-md-6">
                           <div class="services-08-item mb-30">
                                 <div class="services-icon2">
                                   <img src="img/icon/fe-icon05.png" alt="img">
                                </div>
                                <div class="services-08-thumb">
                                 <img src="img/icon/fe-icon05.png" alt="img">
                                </div>
                                <div class="services-08-content">
                                    <h3><a href="single-service.html">Best Accommodation</a></h3>
                                    <p>Nullam molestie lacus sit amet velit fermentum feugiat. Mauris auctor eget nunc sit amet.</p>
                                     <a href="single-service.html">Read More <i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                     <div class="col-lg-4 col-md-6">
                           <div class="services-08-item mb-30">
                                 <div class="services-icon2">
                                   <img src="img/icon/fe-icon06.png" alt="img">
                                </div>
                                <div class="services-08-thumb">
                                 <img src="img/icon/fe-icon06.png" alt="img">
                                </div>
                                <div class="services-08-content">
                                    <h3><a href="single-service.html"> Wellness & Spa</a></h3>
                                    <p>Nullam molestie lacus sit amet velit fermentum feugiat. Mauris auctor eget nunc sit amet.</p>
                                    <a href="single-service.html">Read More <i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                          <div class="col-lg-4 col-md-6">
                           <div class="services-08-item mb-30">
                               <div class="services-icon2">
                                   <img src="img/icon/fe-icon07.png" alt="img">
                                </div>
                                <div class="services-08-thumb">
                               <img src="img/icon/fe-icon07.png" alt="img">
                                </div>
                                <div class="services-08-content">
                                    <h3><a href="single-service.html">Restaurants & Bars</a></h3>
                                   <p>Nullam molestie lacus sit amet velit fermentum feugiat. Mauris auctor eget nunc sit amet.</p>
                                     <a href="single-service.html">Read More <i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                         <div class="col-lg-4 col-md-6">
                            <div class="services-08-item mb-30">
                                <div class="services-icon2">
                                   <img src="img/icon/fe-icon08.png" alt="img">
                                </div>
                                <div class="services-08-thumb">
                                 <img src="img/icon/fe-icon08.png" alt="img">
                                </div>
                                <div class="services-08-content">
                                    <h3><a href="single-service.html">Special Offers</a></h3>
                                    <p>Nullam molestie lacus sit amet velit fermentum feugiat. Mauris auctor eget nunc sit amet.</p>
                                     <a href="single-service.html">Read More <i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </section>
        <!-- service-details2-area-end -->
        <!-- pricing-area -->
        <section id="pricing" class="pricing-area pt-120 pb-60 fix p-relative">
             <div class="animations-01"><img src="img/bg/an-img-01.png" alt="an-img-01"></div>
            <div class="animations-02"><img src="img/bg/an-img-02.png" alt="contact-bg-an-01"></div>
            <div class="container">

               <div class="row justify-content-center align-items-center">

                    <div class="col-lg-4 col-md-12">
                     <div class="section-title mb-20">
                            <h5>Best Prices</h5>
                            <h2>Extra Services</h2>
                        </div>
                         <p>Proin consectetur non dolor vitae pulvinar. Pellentesque sollicitudin dolor eget neque viverra, sed interdum metus interdum. Cras lobortis pulvinar dolor, sit amet ullamcorper dolor iaculis vel</p>
                        <p>Cras finibus laoreet felis et hendrerit. Integer ligula lorem, finibus vitae lorem at, egestas consectetur urna. Integer id ultricies elit. Maecenas sodales nibh, quis posuere felis. In commodo mi lectus venenatis metus eget fringilla. Suspendisse varius ante eget.</p>
                    </div>
                    <div class="col-lg-4 col-md-6">
                         <div class="pricing-box pricing-box2 mb-60">
                                <div class="pricing-head">
                                    <h3>Room cleaning</h3>
                                    <p>Perfect for early-stage startups</p>
                                    <div class="month">Monthly</div>
                                    <div class="price-count">
                                        <h2>$39.99</h2>
                                    </div>
                                    <hr>
                                </div>

                                <div class="pricing-body mt-20 mb-30 text-left">
                                   <ul>
                                        <li>Hotel quis justo at lorem</li>
                                        <li>Fusce sodales, urna et tempus</li>
                                        <li>Vestibulum blandit lorem quis</li>
                                    </ul>
                                </div>


                                <div class="pricing-btn">
                                   <a href="contact.html" class="btn ss-btn">Get Started <i class="fal fa-angle-right"></i></a>
                                </div>
                            </div>

                    </div>
                     <div class="col-lg-4 col-md-6">
                        <div class="pricing-box pricing-box2 mb-60">
                                <div class="pricing-head">
                                    <h3>Drinks included</h3>
                                    <p>Perfect for early-stage startups</p>
                                    <div class="month">Monthly</div>
                                    <div class="price-count">
                                        <h2>$59.99</h2>
                                    </div>
                                    <hr>
                                </div>

                                <div class="pricing-body mt-20 mb-30 text-left">
                                   <ul>
                                       <li>Hotel quis justo at lorem</li>
                                        <li>Fusce sodales, urna et tempus</li>
                                        <li>Vestibulum blandit lorem quis</li>
                                    </ul>
                                </div>


                                <div class="pricing-btn">
                                   <a href="contact.html" class="btn ss-btn">Get Started <i class="fal fa-angle-right"></i></a>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- pricing-area-end -->
         <!-- testimonial-area -->
        <section class="testimonial-area pt-120 pb-90 p-relative fix" style="background-image: url(img/bg/testimonial-bg.png); background-size: cover;">
            <div class="container">
                <div class="row">
                     <div class="col-lg-12">
                          <div class="section-title center-align mb-50 text-center">
                            <h5>Testimonial</h5>
                            <h2>What Our Clients Says</h2>
                            <p>Proin consectetur non dolor vitae pulvinar. Pellentesque sollicitudin dolor eget neque viverra, sed interdum metus interdum. Cras lobortis pulvinar dolor, sit amet ullamcorper dolor iaculis vel</p>
                        </div>

                    </div>
                    <div class="col-lg-12">
                        <div class="testimonial-active">
                            <div class="single-testimonial">
                                 <div class="testi-author">
                                    <img src="img/testimonial/testi_avatar.png" alt="img">
                                    <div class="ta-info">
                                        <h6>Jina Nilson</h6>
                                        <span>Client</span>
                                    </div>
                                </div>
                                <div class="review-icon">
                                    <img src="img/testimonial/review-icon.png" alt="img">
                                 </div>
                                <p>“Phasellus aliquam quis lorem amet dapibus feugiat vitae purus vitae efficitur. Vestibulum sed elit id orci rhoncus ultricies. Morbi vitae semper consequat ipsum semper quam”.</p>

                                <div class="qt-img">
                                <img src="img/testimonial/qt-icon.png" alt="img">
                                </div>
                            </div>
                           <div class="single-testimonial">
                                 <div class="testi-author">
                                    <img src="img/testimonial/testi_avatar_02.png" alt="img">
                                    <div class="ta-info">
                                        <h6>Braitly Dcosta</h6>
                                        <span>Client</span>
                                    </div>
                                </div>
                               <div class="review-icon">
                                    <img src="img/testimonial/review-icon.png" alt="img">
                                 </div>
                                  <p>“Phasellus aliquam quis lorem amet dapibus feugiat vitae purus vitae efficitur. Vestibulum sed elit id orci rhoncus ultricies. Morbi vitae semper consequat ipsum semper quam”.</p>

                                <div class="qt-img">
                                <img src="img/testimonial/qt-icon.png" alt="img">
                                </div>
                            </div>
                           <div class="single-testimonial">
                                 <div class="testi-author">
                                    <img src="img/testimonial/testi_avatar_03.png" alt="img">
                                    <div class="ta-info">
                                        <h6>Roboto Dose</h6>
                                        <span>Client</span>
                                    </div>
                                </div>
                                <div class="review-icon">
                                    <img src="img/testimonial/review-icon.png" alt="img">
                                 </div>
                                <p>“Phasellus aliquam quis lorem amet dapibus feugiat vitae purus vitae efficitur. Vestibulum sed elit id orci rhoncus ultricies. Morbi vitae semper consequat ipsum semper quam”.</p>

                                <div class="qt-img">
                                <img src="img/testimonial/qt-icon.png" alt="img">
                                </div>
                            </div>
                           <div class="single-testimonial">
                                 <div class="testi-author">
                                    <img src="img/testimonial/testi_avatar_02.png" alt="img">
                                    <div class="ta-info">
                                        <h6>Braitly Dcosta</h6>
                                        <span>Client</span>
                                    </div>
                                </div>
                               <div class="review-icon">
                                    <img src="img/testimonial/review-icon.png" alt="img">
                                 </div>
                                  <p>“Phasellus aliquam quis lorem amet dapibus feugiat vitae purus vitae efficitur. Vestibulum sed elit id orci rhoncus ultricies. Morbi vitae semper consequat ipsum semper quam”.</p>

                                <div class="qt-img">
                                <img src="img/testimonial/qt-icon.png" alt="img">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- testimonial-area-end -->

        <!-- booking-area -->
        <section class="booking pt-120 pb-120 p-relative fix">
            <div class="animations-01"><img src="img/bg/an-img-01.png" alt="an-img-01"></div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                         <div class="contact-bg02">
                            <div class="section-title center-align">
                                <h5>make appointment</h5>
                                <h2>
                                   Book A Room
                                </h2>
                            </div>
                            <form action="https://htmldemo.zcubethemes.com/riorelax/mail.php" method="post" class="contact-form mt-30">
                                <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="contact-field p-relative c-name mb-20">
                                       <label><i class="fal fa-badge-check"></i> Check In Date</label>
                                                 <input type="date" id="chackin" name="date">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="contact-field p-relative c-subject mb-20">
                                       <label><i class="fal fa-times-octagon"></i> Check Out Date</label>
                                                 <input type="date" id="chackout" name="date">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="contact-field p-relative c-subject mb-20">
                                         <label><i class="fal fa-users"></i> Adults</label>
                                            <select name="adults" id="adu">
                                              <option value="sports-massage">Adults</option>
                                              <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="contact-field p-relative c-option mb-20">
                                        <label><i class="fal fa-concierge-bell"></i> Room</label>
                                           <select name="room" id="rm">
                                              <option value="sports-massage">Room</option>
                                              <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="slider-btn mt-15">
                                                <button class="btn ss-btn" data-animation="fadeInRight" data-delay=".8s"><span>Book Table Now</span></button>
                                            </div>
                                </div>
                                </div>
                        </form>
                        </div>

                    </div>
                    <div class="col-lg-6 col-md-6">
                         <div class="booking-img">
                             <img src="img/bg/booking-img.png" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- booking-area-end -->
       <!-- video-area -->
        <section id="video" class="video-area pt-150 pb-150 p-relative" style="background-image:url(img/bg/video-bg.png); background-repeat: no-repeat; background-position: center bottom; background-size:cover;">
             <!-- Lines -->
                        <div class="content-lines-wrapper2">
                            <div class="content-lines-inner2">
                                <div class="content-lines2"></div>
                            </div>
                        </div>
                       <!-- Lines -->
            <div class="container">
                 <div class="row">
                    <div class="col-12">
                        <div class="s-video-wrap">
                            <div class="s-video-content">
                                <a href="https://www.youtube.com/watch?v=gyGsPlt06bo" class="popup-video"><img src="img/bg/play-button.png" alt="circle_right"></a>

                            </div>
                        </div>
                        <div class="section-title center-align text-center">
                            <h2>
                             Take A Tour Of Luxuri
                            </h2>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- video-area-end -->

          <!-- blog-area -->
        <section id="blog" class="blog-area p-relative fix pt-90 pb-90">
             <div class="animations-02"><img src="img/bg/an-img-06.png" alt="contact-bg-an-05"></div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="section-title center-align mb-50 text-center wow fadeInDown animated" data-animation="fadeInDown" data-delay=".4s">
                             <h5>Our Blog</h5>
                            <h2>
                                Latest Blog & News
                            </h2>
                            <p>Proin consectetur non dolor vitae pulvinar. Pellentesque sollicitudin dolor eget neque viverra, sed interdum metus interdum. Cras lobortis pulvinar dolor, sit amet ullamcorper dolor iaculis vel</p>
                        </div>

                    </div>
                </div>
                <div class="row">
                   <div class="col-lg-4 col-md-6">
                        <div class="single-post2 hover-zoomin mb-30 wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                            <div class="blog-thumb2">
                                <a href="blog-details.html"><img src="img/blog/inner_b1.jpg" alt="img"></a>
                            </div>
                            <div class="blog-content2">
                                <div class="date-home">
                                    24th March 2022
                                </div>
                                <h4><a href="blog-details.html">Cras accumsan nulla nec lacus ultricies placerat.</a></h4>
                                <p>Curabitur sagittis libero tincidunt tempor finibus. Mauris at dignissim ligula, nec tristique orci.</p>
                                <div class="blog-btn"><a href="blog-details.html">Read More</a></div>

                            </div>
                        </div>
                    </div>
                     <div class="col-lg-4 col-md-6">
                        <div class="single-post2 mb-30 hover-zoomin wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                            <div class="blog-thumb2">
                                <a href="blog-details.html"><img src="img/blog/inner_b2.jpg" alt="img"></a>
                            </div>
                            <div class="blog-content2">
                                <div class="date-home">
                                   24th March 2022
                                </div>
                                <h4><a href="blog-details.html">Dras accumsan nulla nec lacus ultricies placerat.</a></h4>
                                <p>Curabitur sagittis libero tincidunt tempor finibus. Mauris at dignissim ligula, nec tristique orci.</p>
                                <div class="blog-btn"><a href="blog-details.html">Read More</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-post2 mb-30 hover-zoomin wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                            <div class="blog-thumb2">
                                <a href="blog-details.html"><img src="img/blog/inner_b3.jpg" alt="img"></a>
                            </div>
                            <div class="blog-content2">
                                <div class="date-home">
                                    24th March 2022
                                </div>
                                <h4><a href="blog-details.html">Seas accumsan nulla nec lacus ultricies placerat.</a></h4>
                                <p>Curabitur sagittis libero tincidunt tempor finibus. Mauris at dignissim ligula, nec tristique orci.</p>
                                <div class="blog-btn"><a href="blog-details.html">Read More</a></div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </section>
        <!-- blog-area-end -->
        <!-- brand-area -->
        <div class="brand-area pt-60 pb-60" style="background-color:#f7f5f1">
            <div class="container">
                <div class="row brand-active">
                    <div class="col-xl-2">
                        <div class="single-brand">
                            <img src="img/brand/b-logo1.png" alt="img">
                        </div>
                    </div>
                    <div class="col-xl-2">
                        <div class="single-brand">
                             <img src="img/brand/b-logo2.png" alt="img">
                        </div>
                    </div>
                    <div class="col-xl-2">
                        <div class="single-brand">
                             <img src="img/brand/b-logo3.png" alt="img">
                        </div>
                    </div>
                    <div class="col-xl-2">
                        <div class="single-brand">
                              <img src="img/brand/b-logo4.png" alt="img">
                        </div>
                    </div>
                    <div class="col-xl-2">
                        <div class="single-brand">
                             <img src="img/brand/b-logo5.png" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- brand-area-end -->


@endsection

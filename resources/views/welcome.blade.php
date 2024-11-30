@extends('layout')
@section('title', 'Home Page')
@section('content')
<!-- Banner Area -->
<div class="banner-area">
    <div class="container">
        <div class="banner-content">
            <h1>Welcome to New Eastern Comfort Hotel</h1>
            <p>
                Relax in our beautifully designed rooms and suites, tailored for comfort and style. Experience the perfect blend of elegance and convenience during your stay.
            </p>
            <div class="banner-btn">
                <a href="/contact_us" class="default-btn btn-bg-one border-radius-5">Book Now</a>
            </div>
        </div>
    </div>
</div>
<!-- Banner Area End -->

<!-- Banner Form Area -->
<!-- <div class="banner-form-area">
    <div class="container">
        <div class="banner-form">
            <form>
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-3 col-md-3">
                        <div class="form-group">
                            <label>CHECK IN TIME</label>
                            <div class="input-group">
                                <input id="datetimepicker" type="text" class="form-control" placeholder="11/02/2024">
                                <span class="input-group-addon"></span>
                            </div>
                            <i class='bx bxs-chevron-down'></i>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-3">
                        <div class="form-group">
                            <label>CHECK OUT TIME</label>
                            <div class="input-group">
                                <input id="datetimepicker-check" type="text" class="form-control"
                                    placeholder="11/02/2024">
                                <span class="input-group-addon"></span>
                            </div>
                            <i class='bx bxs-chevron-down'></i>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-2">
                        <div class="form-group">
                            <label>GUESTS</label>
                            <select class="form-control">
                                <option>01</option>
                                <option>02</option>
                                <option>03</option>
                                <option>04</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4">
                        <button type="submit" class="default-btn btn-bg-one border-radius-5">
                            Check Arability
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div> -->
<!-- Banner Form Area End -->

<!-- About Area -->
<div class="about-area pt-100 pb-70">
    <div class="container-fluid">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-6">
                <div class="about-img">
                    <img src="/assets/img/image1.jpg" alt="Images">
                </div>
            </div>

            <div class="col-lg-6">
                <div class="about-content">
                    <div class="section-title">
                        <span>About Us</span>
                        <h2>Experience Hospitality Like Never Before.</h2>
                        <p>
                        At New Eastern Comfort Hotel, we believe that luxury and comfort should go hand in hand. Located in a tranquil yet accessible area, our hotel is your perfect escape from the hustle and bustle of everyday life. Whether you're staying for business, leisure, or a family vacation, we are committed to delivering an unforgettable experience.
                        </p>
                    </div>

                    <ul>
                        <li>
                            <i class="flaticon-restaurant"></i>
                            <div class="content">
                                <h3>Prime Location</h3>
                                <p>
                                Conveniently situated in a serene environment yet close to major attractions, we provide the perfect balance of tranquility and accessibility.
                                </p>
                            </div>
                        </li>
                        <li>
                            <i class="flaticon-buildings"></i>
                            <div class="content">
                                <h3>State-of-the-Art Facilities </h3>
                                <p>Whether it's our fitness center, event hall, or laundry services, we deliver top-notch solutions for your needs.
                                </p>
                            </div>
                        </li>
                    </ul>
                
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About Area End -->

<!-- Services Area -->
<div class="services-area pb-70">
    <div class="container">
        <div class="section-title text-center">
            <span>Our Services</span>
            <h2>A Blend of Comfort and Convenience</h2>
        </div>
        <div class="services-slider owl-carousel owl-theme pt-45">
            <div class="services-item">
                <i class="bx bxs-hotel"></i>
                <h3>Accommodation</h3>
                <p>Choose from a range of elegantly designed rooms and suites, each equipped with modern conveniences such as Wi-Fi, flat-screen TVs, and premium bedding.</p>
            </div>
            <div class="services-item">
                <i class="bx bx-building-house"></i>
                <h3>Event Hall</h3>
                <p>
                Host your next event in our versatile hall, ideal for weddings, conferences, and social gatherings. Our dedicated event planning team ensures every detail is flawless.</p>
            </div>

            <div class="services-item">
                <i class="flaticon-tea-cup-with-muffin-and-cookies"></i>
                <h3>Indoor and Outdoor Restaurant</h3>
                <p>
                Enjoy a diverse menu of local and international cuisines in our elegantly designed indoor restaurant or savor your meal al fresco in our outdoor dining area.</p>
            </div>

            <div class="services-item">
                <i class="flaticon-champagne-glass"></i>
                <h3>Bar</h3>
                <p>
                Relax and unwind at our lively bar. From classic cocktails to premium spirits, we have the perfect drink for every mood.</p>
            </div>
        </div>
    </div>
</div>
<!-- Services Area End -->

<!-- Reservation Area -->
<div class="reservation-area section-bg pt-100 pb-70">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-6">
                <div class="reservation-content">
                    <div class="section-title">
                        <h2> Our Mission</h2>
                        <p>To create a space where comfort meets sophistication, and every guest feels valued and cared for. We aim to provide world-class services while maintaining the warmth and authenticity of local hospitality. To be the preferred choice for guests seeking exceptional hospitality experiences, driven by innovation, personalized service, and a passion for excellence.
                        </p>
                    </div>
                    <a href="/contact_us" class="default-btn btn-bg-one border-radius-5">Quick Booking</a>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="reservation-img">
                    <img src="/assets/img/home2.jpg" alt="Images">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Reservation Area End -->

<!-- Specialty Area End -->
<div class="specialty-area pt-100 pb-70">
    <div class="container">
        <div class="section-title text-center">
            <span>SPECIALTY</span>
            <h2>Discover Excellence in Every Detail</h2>
        </div>

        <div class="row pt-45 align-items-center">
            <div class="col-lg-6 col-xxl-7">
                <div class="specialty-img">
                    <img src="/assets/img/img.jpg" alt="Images">
                </div>
            </div>

            <div class="col-lg-6 col-xxl-5">
                <div class="specialty-list">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="specialty-list-card">
                                <i class="flaticon-decoration"></i>
                                <h3>Unmatched Comfort:</h3>
                                <p>From plush bedding to modern amenities, our accommodations are designed for your ultimate relaxation.</p>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="specialty-list-card">
                                <i class="flaticon-champagne-glass"></i>
                                <h3>Culinary Excellence</h3>
                                <p>Our chefs bring global flavors to your table, ensuring every meal is a gastronomic delight.</p>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="specialty-list-card">
                                <i class="flaticon-fireworks"></i>
                                <h3>Flexible Offerings</h3>
                                <p>From intimate getaways to large-scale events, we have packages tailored to suit every requirement.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Specialty Area End -->

<!-- Room Area -->
<div class="room-area pt-100 pb-70 section-bg">
    <div class="container">
        <div class="section-title text-center">
            <span>ROOMS</span>
            <h2>Our Rooms & Rates</h2>
        </div>
        <div class="row pt-45">
            <div class="col-lg-4 col-md-6">
                <div class="room-card"> 
                    <img src="/assets/img/standard.jpg" alt="Images">
                    <div class="content">
                        <h3>Standard Room</h3>
                        <ul>
                            <li>NGN 30,000</li>
                            <li>Per Night</li>
                        </ul>
                        
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="room-card">
                    
                        <img src="/assets/img/deluxe.jpg" alt="Images">
                    
                    <div class="content">
                        <h3>Delux Room</h3>
                        <ul>
                            <li>NGN 35,000</li>
                            <li>Per Night</li>
                        </ul>
                        
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="room-card">
                    
                        <img src="/assets/img/suite.jpg" alt="Images">
                    
                    <div class="content">
                        <h3>Suite</h3>
                        <ul>
                            <li>NGN 60,000</li>
                            <li>Per Night</li>
                        </ul>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Room Area End -->

<!-- Testimonials Area -->
<div class="testimonials-area-another pt-100 pb-70">
    <div class="container">
        <div class="section-title text-center">
            <h2>What Our Guests Are Saying</h2>
        </div>
        <div class="testimonials-slider-three owl-carousel owl-theme pt-45">
            <div class="testimonials-item">
                <i class="flaticon-left-quote text-color"></i>
                <p>
                
                My husband and I enjoyed a romantic weekend getaway at this hotel, and we were blown away by the hospitality. From the cozy rooms to the variety of meals, everything was perfect. It was like a home away from home.
                </p>
                <ul>
                    <li style="padding-left: 20px;">
                        <h3>Halima S.</h3>
                        <span>Abuja</span>
                    </li>
                </ul>
            </div>

            <div class="testimonials-item">
                <i class="flaticon-left-quote text-color"></i>
                <p>
                I stayed at New Eastern Comfort Hotel during a business trip, and I must say the experience was incredible. The staff were polite and attentive, the rooms were spotless, and the food was delicious. I’ll definitely come back whenever I’m in Umuahia.
                </p>
                <ul>
                    <li style="padding-left: 20px;">
                        <h3>Emeka O.</h3>
                        <span>Enugu</span>
                    </li>
                </ul>
            </div>
            <div class="testimonials-item">
                <i class="flaticon-left-quote text-color"></i>
                <p>
                The event hall at New Eastern Comfort Hotel was perfect for my sister's wedding. Everything from the decorations to the sound system was flawless. The team went above and beyond to make the day special for our family. Thank you!
                </p>
                <ul>
                    <li style="padding-left: 20px;">
                        <h3>Chioma A.</h3>
                        <span>Lagos</span>
                    </li>
                </ul>
            </div>

            <div class="testimonials-item">
                <i class="flaticon-left-quote text-color"></i>
                <p>
                    I was impressed by the gym facilities at this hotel. It’s rare to find a hotel in Nigeria with such a well-equipped fitness center. Plus, the environment is so serene and peaceful. A great place to relax after a long day.
                </p>
                <ul>
                    <li style="padding-left: 20px;">
                        <h3>Musa A.</h3>
                        <span>Kano</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Testimonials Area End -->

<!-- FAQ Area -->
<div class="faq-area pt-100 pb-70 section-bg">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 col-xxl-7">
                <div class="faq-img">
                    <img src="/assets/img/faq.jpg" alt="Images">
                </div>
            </div>

            <div class="col-lg-6 col-xxl-5">
                <div class="faq-content">
                    <div class="section-title">
                        <h2>Let's Start a Free of Questions And Get a Quick Support That Will Help You to Know Us</h2>
                    </div>

                    <div class="faq-accordion">
                        <ul class="accordion">
                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class='bx bx-plus'></i>
                                    Do you host events?
                                </a>

                                <div class="accordion-content">
                                    <p>
                                    Yes, our event hall and conference center are perfect for weddings, corporate meetings, and other special events. Our event planning team is available to assist with every detail.
                                    </p>
                                </div>
                            </li>

                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class='bx bx-plus'></i>
                                    How can I make a reservation?
                                </a>

                                <div class="accordion-content">
                                    <p>
                                    You can call us directly at {{ config('app.phone') }} or {{ config('app.phone2') }}  to book your stay or use our online booking platform (coming soon).
                                    </p>
                                </div>
                            </li>

                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <i class='bx bx-plus'></i>
                                    Do you offer room service?
                                </a>

                                <div class="accordion-content">
                                    <p>
                                    Yes, we offer 24/7 room service to ensure your convenience.
                                    </p>
                                </div>
                            </li>

                            <li class="accordion-item">
                                <a class="accordion-title active" href="javascript:void(0)">
                                    <i class='bx bx-plus'></i>
                                    Is parking available?
                                </a>

                                <div class="accordion-content show">
                                    <p>
                                    Yes, we provide secure and ample parking spaces for our guests.
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- FAQ Area End -->
@endsection
@extends('layout')
@section('title', 'Services')
@section('content')
<!-- Inner Banner -->
    <div class="inner-banner inner-bg7">
        <div class="container">
            <div class="inner-title">
                <ul>
                    <li>
                        <a href="/">Home</a>
                    </li>
                    <li><i class='bx bx-chevron-right'></i></li>
                    <li>Services</li>
                </ul>
                <h3>Services</h3>
            </div>
        </div>
    </div>
<!-- Inner Banner End -->

<!-- Services Area Two -->
    <div class="services-area-two pt-100 pb-70">
        <div class="container">
            <div class="section-title text-center">
                <span class="sp-color">SERVICES</span>
                <h2>Experience Excellence in Every Service We Offer</h2>
            </div>
            <div class="row pt-45">
                <div class="col-lg-4 col-sm-6">
                    <div class="services-card">
                        <i class="bx bxs-hotel text-color"></i>
                        <h3>Accommodation</h3>
                        <p>
                        Choose from a range of elegantly designed rooms and suites, each equipped with modern conveniences such as Wi-Fi, flat-screen TVs, and premium bedding. Whether you’re here for business or leisure, our accommodations are crafted for your comfort.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="services-card">
                        <i class="bx bx-building-house text-color"></i>
                        <h3>Event Hall</h3>
                        <p>
                        Host your next event in our versatile hall, ideal for weddings, conferences, and social gatherings. Our dedicated event planning team ensures every detail is flawless.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="services-card">
                        <i class="flaticon-tea-cup-with-muffin-and-cookies text-color"></i>
                        <h3>Indoor and Outdoor Restaurant</h3>
                        <p>
                        Enjoy a diverse menu of local and international cuisines in our elegantly designed indoor restaurant or savor your meal al fresco in our outdoor dining area.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="services-card">
                        <i class="flaticon-champagne-glass text-color"></i>
                        <h3>Bar</h3>
                        <p> 
                        Relax and unwind at our lively bar. From classic cocktails to premium spirits, we have the perfect drink for every mood.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="services-card">
                        <i class="bx bx-dumbbell text-color"></i>
                        <h3>Gym</h3>
                        <p>
                        Stay fit with our state-of-the-art fitness center, equipped with the latest machines and personal trainers available on request.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="services-card">
                        <i class="flaticon-hotel text-color"></i>
                        <h3>Laundry Services</h3>
                        <p>
                        Our professional laundry team provides quick and efficient services, so you can focus on enjoying your stay.</p>
                    </div>
                </div>


            </div>
        </div>
    </div>
<!-- Services Area Two End -->
    <div class="book-area-two pb-70">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6">
                    <div class="book-img-2">
                        <img src="/assets/img/call.jpg" alt="Images">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="book-content-two">
                        <div class="section-title">
                            <h2>Book Your Stay Today!</h2>
                            <p>
                            At New Eastern Comfort Hotel, every guest is family. We invite you to experience the perfect blend of luxury, comfort, and hospitality. Whether you’re here for business or leisure, we promise to make your stay unforgettable.
                            </p>
                        </div>
                        <a href="/contact_us" class="default-btn btn-bg-three border-radius-5">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- Book Area -->
    <div class="book-area pb-70">
        <div class="container">
            <div class="row">
                <div class="reservation-widget-content">
                    <h2>Our Rooms & Rates</h2>
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-4">
                            <div class="room-item reservation-room">
                                <img src="/assets/img/standard.jpg" alt="Images">
                                <div class="content">
                                    <h3>Standard Room</h3>
                                    <p>
                                    Our Standard Rooms are designed for simplicity and comfort, offering a cozy retreat for solo travelers or couples.
                                    </p>
                                    <ul>
                                        <li class="text-color">NGN 30,000</li>
                                        <li><span>Per Night</span></li>
                                    </ul>
                                    <a href="/contact_us" class="book-btn">Book Now</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4">
                            <div class="room-item reservation-room">
                                <img src="/assets/img/deluxe.jpg" alt="Images">
                                <div class="content">
                                    <h3>Delux Room</h3>
                                    <p>
                                    Upgrade your experience with our spacious Deluxe Rooms. Featuring elegant interiors, premium furnishings, and additional amenities, these rooms are perfect for guests seeking extra comfort and style.
                                    </p>
                                    <ul>
                                        <li class="text-color">NGN 35,000</li>
                                        <li><span>Per Night</span></li>
                                    </ul>
                                    <a href="/contact_us" class="book-btn">Book Now</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4">
                            <div class="room-item reservation-room">
                                    <img src="/assets/img/suite.jpg" alt="Images">
                                <div class="content">
                                    <h3>Suite</h3>
                                    <p>Indulge in the ultimate luxury with our exclusive Suites. Boasting separate living and sleeping areas, plush decor, and top-tier amenities, they are ideal for those who value space, privacy, and sophistication.</p>
                                    <ul>
                                        <li class="text-color">NGN 60,000</li>
                                        <li><span>Per Night</span></li>
                                    </ul>
                                    <a href="/contact_us" class="book-btn">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Book Area End -->
@endsection

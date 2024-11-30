@extends('layout')
@section('title', 'Our Rooms')
@section('content')

<!-- Inner Banner -->
<div class="inner-banner inner-bg10">
    <div class="container">
        <div class="inner-title">
            <ul>
                <li>
                    <a href="/">Home</a>
                </li>
                <li><i class='bx bx-chevron-right'></i></li>
                <li>Rooms </li>
            </ul>
            <h3>Rooms</h3>
        </div>
    </div>
</div>
<!-- Inner Banner End -->

<!-- Room Details Other -->
<div class="room-details-other pt-100 pb-70">
    <div class="container">
        <div class="row ">
            <div class="col-lg-12">
                <div class="room-card-two">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-5 col-md-4 p-0">
                        <div class="room-details-slider owl-carousel owl-theme">
                                <div class="room-details-item">
                                    <img src="/assets/img/standard.jpg" alt="Images">
                                </div>
                                <div class="room-details-item">
                                    <img src="/assets/img/standard2.jpg" alt="Images">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-7 col-md-8 p-0">
                            <div class="room-card-content">
                                <h3>
                                    Standard Room
                                </h3>
                                <span>NGN 30,000  / Per Night </span>
                                <p>Our Standard Rooms are designed for simplicity and comfort, offering a cozy retreat for solo travelers or couples. Enjoy modern amenities, a comfortable bed, and an inviting atmosphere that ensures a restful stay.</p>
                            
                                <a href="/contact_us" class="book-more-btn">
                                    Book Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="room-card-two">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-5 col-md-4 p-0">
                        <div class="room-details-slider owl-carousel owl-theme">
                                <div class="room-details-item">
                                    <img src="/assets/img/deluxe.jpg" alt="Images">
                                </div>
                                <div class="room-details-item">
                                    <img src="/assets/img/deluxe2.jpg" alt="Images">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-7 col-md-8 p-0">
                            <div class="room-card-content">
                                <h3>
                                Deluxe Room
                                </h3>
                                <span>NGN 35,000 / Per Night </span>
                                <p>Upgrade your experience with our spacious Deluxe Rooms. Featuring elegant interiors, premium furnishings, and additional amenities, these rooms are perfect for guests seeking extra comfort and style.</p>
                                <a href="/contact_us" class="book-more-btn">
                                    Book Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="room-card-two">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-5 col-md-4 p-0">
                        <div class="room-details-slider owl-carousel owl-theme">
                                <div class="room-details-item">
                                    <img src="/assets/img/suite.jpg" alt="Images">
                                </div>
                                <div class="room-details-item">
                                    <img src="/assets/img/suite2.jpg" alt="Images">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-7 col-md-8 p-0">
                            <div class="room-card-content">
                                <h3>
                                    Suite
                                </h3>
                                <span>NGN 60,000  / Per Night </span>
                                <p>Indulge in the ultimate luxury with our exclusive Suites. Boasting separate living and sleeping areas, plush decor, and top-tier amenities, they are ideal for those who value space, privacy, and sophistication.</p>
                                <a href="/contact_us" class="book-more-btn">
                                    Book Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
<!-- Room Details Other End -->

<div class="book-area-two pb-70">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-6">
                <div class="book-img-2">
                    <img src="/assets/img/abt1.jpg" alt="Images">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="book-content-two">
                    <div class="section-title">
                        <h2>Make a Reservation</h2>
                        <p>
                        Secure your spot today at New Eastern Comfort Hotel and Gardens. Whether you’re visiting for business or leisure, our luxurious rooms, serene environment, and exceptional service guarantee an unforgettable stay. Don’t wait—book now and indulge in the ultimate comfort and convenience.
                        </p>
                    </div>
                    <a href="/contact_us" class="default-btn btn-bg-three border-radius-5">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@extends('layout')
@section('title', 'About Us')
@section('content')
<!-- Inner Banner -->
<div class="inner-banner inner-bg1">
    <div class="container">
        <div class="inner-title">
            <ul>
                <li>
                    <a href="/">Home</a>
                </li>
                <li><i class='bx bx-chevron-right'></i></li>
                <li>About Us</li>
            </ul>
            <h3>About Us</h3>
        </div>
    </div>
</div>
<!-- Inner Banner End -->

<!-- About Area -->
<div class="about-area pt-100 pb-70">
    <div class="container-fluid">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-6">
                <div class="about-img">
                    <img src="/assets/img/bar.jpg" alt="Images">
                </div>
            </div>

            <div class="col-lg-6">
                <div class="about-content">
                    <div class="section-title">
                        <h2>A Tradition of Excellence in Hospitality</h2>
                        <p>At New Eastern Comfort Hotel, we redefine the essence of comfort, elegance, and hospitality. Nestled in a prime location, our hotel has become a beacon for travelers seeking a home away from home. Whether you’re a business professional, a leisure traveler, or a guest celebrating a special occasion, we are dedicated to providing an experience that blends luxury with genuine warmth.
                        </p>

                        <p>Our journey began with the belief that a great hotel is more than just its rooms; it’s a place where every detail, from the ambiance to the service, speaks of excellence. Today, that vision continues to guide us as we innovate and expand, always staying true to our commitment to quality and care.</p>
                    </div>

                    <!--CHECK IN <div class="about-form">
                        <form>
                            <div class="row align-items-center justify-content-center">
                                <div class="col-lg-4 col-md-4">
                                    <div class="form-group">
                                        <label>Check in</label>
                                        <div class="input-group">
                                            <input id="datetimepicker" type="text" class="form-control"
                                                placeholder="09/29/2024">
                                            <span class="input-group-addon"></span>
                                        </div>
                                        <i class='bx bxs-calendar'></i>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-4">
                                    <div class="form-group">
                                        <label>Persons</label>
                                        <select class="form-control">
                                            <option>01</option>
                                            <option>02</option>
                                            <option>03</option>
                                            <option>04</option>
                                            <option>05</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-4">
                                    <div class="form-group">
                                        <label>Check Out</label>
                                        <div class="input-group">
                                            <input id="datetimepicker-check" type="text" class="form-control"
                                                placeholder="09/29/2024">
                                            <span class="input-group-addon"></span>
                                        </div>
                                        <i class='bx bxs-calendar'></i>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <button type="submit" class="default-btn btn-bg-three border-radius-5">
                                        Check Availability
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About Area End -->

<!-- Choose Area -->
<div class="choose-area pb-70">
    <div class="container">
        <div class="section-title text-center">
            <h2>What Makes Us Unique</h2>
        </div>
        <div class="row pt-45">
            <div class="col-lg-4 col-md-6">
                <div class="choose-card">
                    <i class="flaticon-restaurant"></i>
                    <h3>Blend of Modern and Traditional</h3>
                    <p>At New Eastern Comfort Hotel, we seamlessly combine contemporary design with the charm of timeless hospitality.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="choose-card">
                    <i class="flaticon-wifi-signal-1"></i>
                    <h3> Attention to Detail</h3>
                    <p>Every corner of our hotel is meticulously designed to enhance your experience, from the elegant décor to the thoughtfully curated services.
                    </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6  ">
                <div class="choose-card">
                    <i class="flaticon-fireworks"></i>
                    <h3>Commitment to Sustainability</h3>
                    <p>We are dedicated to reducing our environmental footprint by adopting sustainable practices, including energy-efficient systems, waste reduction programs, and supporting local communities.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Choose Area End -->

<!-- Ability Area -->
<div class="ability-area section-bg pt-100 pb-70">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-6">
                <div class="ability-content">
                    <div class="section-title">
                        <h2>Our Facilities and Offerings</h2>
                        <p>From luxurious accommodations to state-of-the-art event spaces, every aspect of our hotel is designed with your needs in mind. Enjoy a meal at our exquisite restaurant, relax at our vibrant bar, or rejuvenate in our fully equipped gym. We also offer practical services like laundry and concierge support to ensure a seamless stay.
                        </p>
                        <p>Behind every exceptional stay is a dedicated team of professionals who bring passion, expertise, and a commitment to excellence. From the front desk staff who greet you with a smile to the housekeeping team who ensure your comfort, our people are the heart of New Eastern Comfort Hotel.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="ability-img-2">
                    <img src="/assets/img/abt1.jpg" alt="Images">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Ability Area  End -->

<!-- Specialty Area Two -->
<div class="specialty-area pt-100 pb-70">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-6">
                <div class="specialty-img-3">
                    <img src="/assets/img/comfort.jpg" alt="Images">
                </div>
            </div>

            <div class="col-lg-6">
                <div class="specialty-list">
                    <div class="section-title">
                        <h2>What Drives Us</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="specialty-list-card" style="padding: 40px;">
                                <h3>Customer-Centric Approach</h3>
                                <p>Every guest is unique, and we tailor our services to meet your individual needs, ensuring your stay is memorable.</p>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="specialty-list-card" style="padding: 40px;">
                                <h3>Excellence</h3>
                                <p>From the quality of our rooms to the professionalism of our staff, we are committed to setting the standard for hospitality.</p>
                            </div>
                        </div>
                
                        <div class="col-lg-12">
                            <div class="specialty-list-card" style="padding: 40px;">
                                <h3>Innovation</h3>
                                <p>We continuously evolve to meet the changing needs of our guests, integrating modern technologies and trends to enhance your experience.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Specialty Area Two End -->

<!-- Testimonials Area Another -->
<div class="testimonials-area-another pb-70">
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
<!-- Testimonials Area Another End -->
@endsection

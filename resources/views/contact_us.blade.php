@extends('layout')
@section('title', 'Contact Us')
@section('content')
<!-- Inner Banner -->
<div class="inner-banner inner-bg2">
    <div class="container">
        <div class="inner-title">
            <ul>
                <li>
                    <a href="/">Home</a>
                </li>
                <li><i class='bx bx-chevron-right'></i></li>
                <li>Contact</li>
            </ul>
            <h3>Contact</h3>
        </div>
    </div>
</div>
<!-- Inner Banner End -->

<!-- contact Another -->
<div class="contact-another pt-100 pb-70">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="contact-another-content">
                    <div class="section-title">
                        <h2>We’re Here to Assist You</h2>
                        <p>
                        Planning a visit, event, or dining experience at New Eastern Comfort Hotel? Get in touch:
                        </p>
                    </div>

                    <div class="contact-item">
                        <ul>
                            <li>
                                <i class='bx bx-home-alt'></i>
                                <div class="content">
                                    <span>{{ config('app.address')  }}</span>
                                </div>
                            </li>
                            <li>
                                <i class='bx bx-phone-call'></i>
                                <div class="content">
                                    <span><a href="tel:{{ config('app.phone')}}">{{ config('app.phone')}}</a></span>
                                    <span><a href="tel:{{ config('app.phone2')}}">{{ config('app.phone2')}}</a></span>
                                </div>
                            </li>
                            <li>
                                <i class='bx bx-envelope'></i>
                                <div class="content">
                                    <span>
                                        <a href="{{ config('app.email')}}">{{ config('app.email')}}</a>
                                            </span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>


            <div class="col-lg-6">
                <div class="contact-another-img">
                    <img src="/assets/img/contact.jpg" alt="Images">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- contact Another End -->

<!-- Map Area -->
<div class="map-area">
    <div class="container-fluid m-0 p-0">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3971.3911952185013!2d7.486413474984819!3d5.508801894471223!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1042c32e8e02a14d%3A0x1885661110d07ba1!2s134%2C%20136%20Aba%20Rd%2C%20Umuahia%20440236%2C%20Abia!5e0!3m2!1sen!2sng!4v1732704122758!5m2!1sen!2sng"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>
<!-- Map Area End -->

@endsection

@extends('layout.app')
@section('content')
    <section class="breadcrumb-wrap bg-f br-bg-1">
        <div class="overlay op-6 bg-black"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1 col-md-10 offset-md-1">
                    <div class="breadcrumb-title">
                        <h2>Contact us</h2>
                        <ul class="breadcrumb-menu">
                            <li><a href="{{ route('home') }}">Home </a></li>
                            <li>Contact Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb  end -->

    <!-- Contact section start -->
    <section class="contact-wrap pt-100 pb-70">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-lg-4 col-md-6">
                    <div class="contact-address">
                        <div class="contact-icon">
                            <i class="ri-map-pin-fill"></i>
                        </div>
                        <div class="contact-info">
                            <h5>Address</h5>
                            <p class="mb-0">123 Western Road,LA</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="contact-address">
                        <div class="contact-icon">
                            <i class="ri-phone-line"></i>
                        </div>
                        <div class="contact-info">
                            <h5>Phone Number</h5>
                            <p class="mb-0"><a href="tel:99762236473">+99 762 23 6473</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="contact-address">
                        <div class="contact-icon">
                            <i class="ri-mail-send-line"></i>
                        </div>
                        <div class="contact-info">
                            <h5>Email Address</h5>
                            <p class="mb-0"><a href="mailto:contact@yourdomain.com">contact@yourdomain.com</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="company-location">
        <div class="comp-map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.8385385572983!2d144.95358331584498!3d-37.81725074201705!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4dd5a05d97%3A0x3e64f855a564844d!2s121%20King%20St%2C%20Melbourne%20VIC%203000%2C%20Australia!5e0!3m2!1sen!2sbd!4v1612419490850!5m2!1sen!2sbd"></iframe>
        </div>
    </div>
    <div class="contact-form_wrap pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center mb-40 style1">
                        <span>Contact Us</span>
                        <h2>Leave Message</h2>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="contact-form">
                        <form class="form-wrap" id="contactForm">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" name="name" placeholder="Your Full Name*" id="name"
                                            required data-error="Please enter your name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" required
                                            placeholder="Email Address*" data-error="Please enter your email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" name="phone_number" placeholder="Phone Number"
                                            id="phone_number" required data-error="Please enter your phone number">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" name="msg_subject" placeholder="Subject" id="msg_subject"
                                            required data-error="Please enter your subject">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group v1">
                                        <textarea name="message" id="message" placeholder="Your Messages.." cols="30" rows="10" required
                                            data-error="Please enter your message"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <button type="submit" class="btn v1 d-block w-100">Send Message</button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

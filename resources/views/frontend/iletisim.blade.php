@extends('frontend.layout.app')
@section('content')
    @include('frontend.layout.pageheader')
    <div class="contact-area pd-top-110 pd-bottom-120">
        <div class="container">
            <div class="section-title text-center">
                <h2 class="title">Get in touch</h2>
            </div>
            <div class="row">
                <div class="col-lg-5 col-md-6">
                    <div class="contact-page-thumb thumb" style="background-image: url('./assets/img/bg/5.png')"></div>
                </div>
                <div class="col-lg-7 col-md-6 align-self-center">
                    <form class="contact-form-inner  mt-5 mt-md-0">
                        <div class="row custom-gutters-20">
                            <div class="col-lg-6">
                                <label class="single-input-inner style-bg-border">
                                    <input type="text" placeholder="First Name">
                                </label>
                            </div>
                            <div class="col-lg-6">
                                <label class="single-input-inner style-bg-border">
                                    <input type="text" placeholder="Last Name">
                                </label>
                            </div>
                            <div class="col-12">
                                <label class="single-input-inner style-bg-border">
                                    <input type="text" placeholder="Email">
                                </label>
                            </div>
                            <div class="col-12">
                                <label class="single-input-inner style-bg-border">
                                    <textarea placeholder="Message"></textarea>
                                </label>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-base">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="contact-g-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d29208.601361499546!2d90.3598076!3d23.7803374!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1589109092857!5m2!1sen!2sbd"></iframe>
    </div>
    @endsection

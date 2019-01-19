@extends('layouts.main_body')

    @section('content') 
    <br>
<div class="container">

                    <!-- Contact Us Area -->
                    <div class="contact-area contact-area-v1 panel">

                        <div class="ptb-30 prl-30">
                            <div class="row row-tb-20">
                                <div class="col-md-6">
                                    <div class="contact-area-col contact-form">
                                        <h3 class="t-uppercase h-title mb-20">Keep in touch with us &#9733</h3>
                					<form method="POST" action="/contact">
                						@csrf
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" name="name" class="form-control" placeholder="Your name?" required="required">
                                        </div>
                                        <div class="form-group">
                                            <label>Email Address</label>
                                            <input type="email" name="email" class="form-control" placeholder="Your email" required="required">
                                        </div>
                                        <div class="form-group">
                                            <label>Number</label>
                                            <input type="number" name="number" class="form-control" placeholder="Your Contact Info" required="required">
                                        </div>
                                        <div class="form-group">
                                            <label>Message</label>
                                            <textarea rows="5" class="form-control" name="body" placeholder="Your question?" required="required"></textarea>
                                        </div>
                                       <button class="btn btn-primary btn-lg btn-block btn btn-o" style="color: #fff;">Send Message</button>
                                    </form>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <img src="{{asset('images/question.svg')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Contact Us Area -->

                </div><br>

    @endsection 
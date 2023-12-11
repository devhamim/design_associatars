@extends('frontend.layout.app')
@section('content')
    <div class="site-header--placeholder"></div>
    <section class="ftco-section contact-section ftco-animate">
        <div class="container">
            <div class="content">
                <h2 class="title mb-5">Contact</h2>
                <div class="row block-9">
                    <div class="col-md-4 col-md-4a contact-info ftco-animate">
                        <div class="row">
                            <div class="col-md-12 mb-4">
                                <h4>Address</h4>
                            </div>
                            <div class="col-md-12 mb-3">
                                <span>Design Associates</span><br>
                                House 483-485, Road 7 (New), <br>Mirpur DOHS, Dhaka - 1216<br>Bangladesh
                            </div>
                            <div class="col-md-12 mb-3">
                                <span>Phone:</span> <a href="tel:+8801999907833">+8801999907833</a>
                            </div>
                            <div class="col-md-12 mb-3">
                                <span>Email:</span> <a
                                    href="mailto:info@designassociates.ltd">info@designassociates.ltd</a>
                            </div>
                            <div class="col-md-12 mb-3">
                                <span>Website:</span> <a href="../index.html">https://www.designassociates.ltd</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1a"></div>
                    <div class="col-md-6 row-gap ftco-animate">
                        <form action="https://www.designassociates.ltd/contact/" class="contact-form" method="post"
                            autocomplete="off">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="message_name" class="form-control"
                                            placeholder="Your Name" value="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="message_email" class="form-control"
                                            placeholder="Your Email" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" name="message_subject" class="form-control" placeholder="Subject"
                                    value="">
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="message_human" class="form-control"
                                            placeholder="Human Verification">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-disabled" disabled
                                            placeholder=" 5 - 3 = ? [ What is 5 - 3 ? ]">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea name="message_text" cols="30" rows="7" class="form-control"
                                    placeholder="Message"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="hidden" name="submitted" value="1">
                            </div>
                            <div class="form-group">
                                <input type="submit" name="button" value="Send Message"
                                    class="btn btn-primary py-3 px-5">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

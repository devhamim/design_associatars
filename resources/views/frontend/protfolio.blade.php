@extends('frontend.layout.app')

@section('content')
    <div class="site-header--placeholder"></div>
    <section class="ftco-section ftco-animate">
        <div class="container">
            <div class="content">
                <h2 class="title">Portfolio</h2>
                <p id="brcrumbs"><span><span><a href="../index.html">Home</a> » <span class="breadcrumb_last"
                                aria-current="page">Portfolio</span></span></span></p>
                <div class="row d-flex">
                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="blog-entry align-self-stretch">
                            <figure class="effect-bubba">
                                <img src="{{ asset('frontend') }}/wp-content/uploads/2020/02/MJC-01-360x360.jpg" alt="Mujib Corner"
                                    width="360" height="360" />
                                <figcaption>
                                    <h2 class="title">Mujib Corner</h2>
                                    <p>Standard Bank Limited, Motijheel</p>
                                    <a href="mujib-corner/index.html">View more</a>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="blog-entry align-self-stretch">
                            <figure class="effect-bubba">
                                <img src="{{ asset('frontend') }}/wp-content/uploads/2019/11/E54B15A2-427A-443D-BD96-CFAA89AC6D0B-360x360.jpg"
                                    alt="Residence Interior" width="360" height="360" />
                                <figcaption>
                                    <h2 class="title">Residence Interior</h2>
                                    <p>Dr. Shiraji, Bashundhara</p>
                                    <a href="residence-interior-2/index.html">View more</a>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="blog-entry align-self-stretch">
                            <figure class="effect-bubba">
                                <img src="{{ asset('frontend') }}/wp-content/uploads/2019/07/203897A4-4A28-4F1D-B67C-C56430148002-360x360.jpg"
                                    alt="Bank Interior" width="360" height="360" />
                                <figcaption>
                                    <h2 class="title">Bank Interior</h2>
                                    <p>Standard Bank Limited</p>
                                    <a href="standard-bank-limited-maheshkhali-branch-interior-design/index.html">View
                                        more</a>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="blog-entry align-self-stretch">
                            <figure class="effect-bubba">
                                <img src="{{ asset('frontend') }}/wp-content/uploads/2019/04/Union-Office-Interior-1-360x360.jpg"
                                    alt="Office Interior" width="360" height="360" />
                                <figcaption>
                                    <h2 class="title">Office Interior</h2>
                                    <p>Union Group, Banani</p>
                                    <a href="union-office-interior-design/index.html">View more</a>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="blog-entry align-self-stretch">
                            <figure class="effect-bubba">
                                <img src="{{ asset('frontend') }}/wp-content/uploads/2019/04/PEB-Office-Interior-3-360x360.jpg"
                                    alt="Office Interior" width="360" height="360" />
                                <figcaption>
                                    <h2 class="title">Office Interior</h2>
                                    <p>PEB, Banani</p>
                                    <a href="peb-office-interior-design/index.html">View more</a>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="blog-entry align-self-stretch">
                            <figure class="effect-bubba">
                                <img src="{{ asset('frontend') }}/wp-content/uploads/2019/04/PBL-Prime-Bank-Limited-6-360x360.jpg"
                                    alt="Bank Interior" width="360" height="360" />
                                <figcaption>
                                    <h2 class="title">Bank Interior</h2>
                                    <p>Prime Bank Limited</p>
                                    <a href="prime-bank-limited-office-interior-design/index.html">View more</a>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="blog-entry align-self-stretch">
                            <figure class="effect-bubba">
                                <img src="{{ asset('frontend') }}/wp-content/uploads/2019/04/Bangladesh-Army-1-360x360.jpg"
                                    alt="Office Interior" width="360" height="360" />
                                <figcaption>
                                    <h2 class="title">Office Interior</h2>
                                    <p>Bangladesh Army</p>
                                    <a href="bd-army-office-interior/index.html">View more</a>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="blog-entry align-self-stretch">
                            <figure class="effect-bubba">
                                <img src="{{ asset('frontend') }}/wp-content/uploads/2019/04/Philips-Lighting-India-Ltd-4-360x360.jpg"
                                    alt="Office Interior" width="360" height="360" />
                                <figcaption>
                                    <h2 class="title">Office Interior</h2>
                                    <p>Philips Lighting India Limited, Gulshan</p>
                                    <a href="philips-lighting-india-limited-office-interior-design/index.html">View
                                        more</a>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="blog-entry align-self-stretch">
                            <figure class="effect-bubba">
                                <img src="{{ asset('frontend') }}/wp-content/uploads/2019/04/Billal-Mollah-Residence-Interior-Design-1-360x360.jpg"
                                    alt="Residence Interior" width="360" height="360" />
                                <figcaption>
                                    <h2 class="title">Residence Interior</h2>
                                    <p>Billal Mollah, Tongi</p>
                                    <a href="residence-interior-design/index.html">View more</a>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="row mt-5 ftco-animate">
                    <div class="col text-center">
                        <span aria-current="page" class="page-numbers current">1</span>
                        <a class="page-numbers" href="page/2/index.html">2</a>
                        <a class="page-numbers" href="page/3/index.html">3</a>
                        <a class="next page-numbers" href="page/2/index.html">></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@extends('platform.layouts.layout')

@section('content')


    <!-- breadcrumb-area -->
    <section class="breadcrumb-area d-flex align-items-center" style="background-image:url(img/bg/bdrc-bg.jpg)">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-12 col-lg-12">
                    <div class="breadcrumb-wrap text-center">
                        <div class="breadcrumb-title">
                            <h2>Login</h2>
                            <div class="breadcrumb-wrap">

                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Login</li>
                            </ol>
                        </nav>
                    </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->
    <!-- contact-area -->
    <section id="contact" class="contact-area after-none contact-bg pt-120 pb-120 p-relative fix">
        <div class="container">

            <div class="row justify-content-center align-items-center">
                <div class="col-lg-8 order-2">
                    <div class="contact-bg02">
                        <div class="section-title center-align mb-40 text-center wow fadeInDown  animated" data-animation="fadeInDown" data-delay=".4s" style="visibility: visible; animation-name: fadeInDown;">
                        <h2>
                          Log into your Account
                        </h2>
                        </div>
                        @if ($errors->any())
                        <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                            <form action="{{ route('auth.handleLogin') }}" method="post" class="contact-form mt-30">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="contact-field p-relative c-name mb-20">
                                            <input type="text" id="email" name="email" placeholder="Full Name" required="">
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <div class="contact-field p-relative c-subject mb-20">
                                            <input type="password" id="password" name="password" placeholder="*********" required="">
                                        </div>
                                    </div>
                                    <div>
                                        <button type="submit" class="btn btn-custom" id="send2">Login</button>
                                    </div>
                                </div>
                        </form>
                    </div>

                </div>
            </div>

        </div>

    </section>
    <!-- contact-area-end -->
  <!-- newslater-area -->
    <section class="newslater-area p-relative pt-120 pb-120" style="background-color: #f7f5f1;">
        <div class="animations-01"><img src="img/bg/an-img-07.png" alt="contact-bg-an-05"></div>
        <div class="container">
            <div class="row justify-content-center align-items-center text-center">
                <div class="col-xl-9 col-lg-9">
                    <div class="section-title center-align mb-40 text-center wow fadeInDown  animated" data-animation="fadeInDown" data-delay=".4s" style="visibility: visible; animation-name: fadeInDown;">
                         <h5>Newsletter</h5>
                        <h2>
                            Get Best Offers On The Hotel
                        </h2>
                        <p>With the subscription, enjoy your favourite Hotels without having to think about it</p>
                    </div>
                    <form name="ajax-form" id="contact-form4" action="#" method="post" class="contact-form newslater">
                       <div class="form-group">
                          <input class="form-control" id="email3" name="email" type="email" placeholder="Your Email Address" value="" required="">
                          <button type="submit" class="btn btn-custom" id="send2">Subscribe Now</button>
                       </div>
                       <!-- /Form-email -->
                    </form>
                </div>

            </div>

        </div>
    </section>
    <!-- newslater-aread-end -->


@endsection

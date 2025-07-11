@extends('front.layouts.app')
@section('content')
    <!-- Pricing Section -->
    <section id="pricing" class="pricing section">

        <br>
        <br>
        <br>
        <br>

        <div class="container section-title" data-aos="fade-up">
            <div class="section-header">
                <h1>Perfect plan for every team</h1>
                <h6>No large investment. Only month wise subscription base HR Software</h6>
            </div>

            <br>
            <br>
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Pricing</h2>
                <p>Check Our Affordable Pricing<br></p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                        <div class="pricing-tem">
                            <h3 style="color: #20c997;">Package-Tiny</h3>
                            <h6>For individuals and teams getting started</h6>
                            <div class="price"><sup>$</sup>75<span> / mo</span></div>
                            <div class="icon">
                                <i class="bi bi-box" style="color: #20c997;"></i>
                            </div>
                            <ul>
                                <li><i class="bi bi-check2-circle"></i>
                                    For 1 - 25 Employees
                                </li>
                                <li><i class="bi bi-check2-circle"></i>
                                    Excluding Vat & Tax
                                </li>
                                <li><i class="bi bi-check2-circle"></i>
                                    Installation Charge Applicable
                                </li>
                                <li><i class="bi bi-check2-circle"></i>
                                    Six Months Advance Mandatory
                                </li>
                                <li><i class="bi bi-check2-circle"></i>
                                    Free Employee Database
                                </li>
                                <li><i class="bi bi-check2-circle"></i>
                                    24/7 Free Support
                                </li>
                                <li ><i class="bi bi-check2-circle"></i>
                                    Free Updates
                                </li>
                                {{-- <li class="na"><i class="bi bi-check2-circle"></i>
                                    Free Updates
                                </li> --}}

                            </ul>
                            <a href="{{ route('front.contact') }}" class="btn-buy">Contact Us</a>
                        </div>
                    </div><!-- End Pricing Item -->

                    <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                        <div class="pricing-tem">
                            <span class="featured">Featured</span>
                            <h3 style="color: #0dcaf0;">Package-Small</h3>
                            <h6>For individuals and teams getting started</h6>
                            <div class="price"><sup>$</sup>150<span> / mo</span></div>
                            <div class="icon">
                                <i class="bi bi-send" style="color: #0dcaf0;"></i>
                            </div>
                            <ul>
                                 <li><i class="bi bi-check2-circle"></i>
                                    For 26 - 50 Employees
                                </li>
                                <li><i class="bi bi-check2-circle"></i>
                                    Excluding Vat & Tax
                                </li>
                                <li><i class="bi bi-check2-circle"></i>
                                    Installation Charge Applicable
                                </li>
                                <li class="na"><i class="bi bi-check2-circle"></i>
                                    Six Months Advance Mandatory
                                </li>
                                <li><i class="bi bi-check2-circle"></i>
                                    Free Employee Database
                                </li>
                                <li><i class="bi bi-check2-circle"></i>
                                    24/7 Free Support
                                </li>
                                <li><i class="bi bi-check2-circle"></i>
                                    Free Updates
                                </li>
                                {{-- <li class="na"><i class="bi bi-check2-circle"></i>
                                    Free Updates
                                </li> --}}
                            </ul>
                            <a href="{{ route('front.contact') }}" class="btn-buy">Contact Us</a>
                        </div>
                    </div><!-- End Pricing Item -->

                    <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                        <div class="pricing-tem">
                            <h3 style="color: #fd7e14;">Package-Mid</h3>
                            <h6>For individuals and teams getting started</h6>
                            <div class="price"><sup>$</sup>300<span> / mo</span></div>
                            <div class="icon">
                                <i class="bi bi-airplane" style="color: #fd7e14;"></i>
                            </div>
                            <ul>
                                 <li><i class="bi bi-check2-circle"></i>
                                   For 51 - 100 Employees
                                </li>
                                <li><i class="bi bi-check2-circle"></i>
                                    Excluding Vat & Tax
                                </li>
                                <li><i class="bi bi-check2-circle"></i>
                                    Installation Charge Applicable
                                </li>
                                <li class="na"><i class="bi bi-check2-circle"></i>
                                    Six Months Advance Mandatory
                                </li>
                                <li><i class="bi bi-check2-circle"></i>
                                    Free Employee Database
                                </li>
                                <li><i class="bi bi-check2-circle"></i>
                                    24/7 Free Support
                                </li>
                                <li ><i class="bi bi-check2-circle"></i>
                                    Free Updates
                                </li>
                                {{-- <li class="na"><i class="bi bi-check2-circle"></i>
                                    Free Updates
                                </li> --}}
                            </ul>
                            <a href="{{ route('front.contact') }}" class="btn-buy">Contact Us</a>
                        </div>
                    </div><!-- End Pricing Item -->

                    <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="400">
                        <div class="pricing-tem">
                            <h3 style="color: #0d6efd;">Package-Large</h3>
                            <h6>For individuals and teams getting started</h6>
                            <div class="price"><sup></sup>100+<span> / Employees</span></div>
                            <div class="icon">
                                <i class="bi bi-rocket" style="color: #0d6efd;"></i>
                            </div>
                            <ul>
                                    {{-- <li><i class="bi bi-check2-circle"></i>
                                    For 51 - 100 Employees
                                </li> --}}
                                <li><i class="bi bi-check2-circle"></i>
                                    Excluding Vat & Tax
                                </li>
                                <li><i class="bi bi-check2-circle"></i>
                                    Installation Charge Applicable
                                </li>
                                {{-- <li><i class="bi bi-check2-circle"></i>
                                    Six Months Advance Mandatory
                                </li> --}}
                                <li><i class="bi bi-check2-circle"></i>
                                    Free Employee Database
                                </li>
                                <li><i class="bi bi-check2-circle"></i>
                                    24/7 Free Support
                                </li>
                                <li ><i class="bi bi-check2-circle"></i>
                                    Free Updates
                                </li>
                                {{-- <li class="na"><i class="bi bi-check2-circle"></i>
                                    Free Updates
                                </li> --}}
                            </ul>
                            <a href="{{ route('front.contact') }}" class="btn-buy">Contact Us</a>
                        </div>
                    </div><!-- End Pricing Item -->

                </div><!-- End pricing row -->

            </div>

    </section><!-- /Pricing Section -->


<!-- Clients Section -->
                <section id="clients" class="clients section">

                    <!-- Section Title -->
                    <div class="container section-title" data-aos="fade-up">
                        <h2>Clients</h2>
                        <p>We work with best clients<br></p>
                    </div><!-- End Section Title -->

                    <div class="container" data-aos="fade-up" data-aos-delay="100">

                        <div class="swiper init-swiper">
                            <script type="application/json" class="swiper-config">
                                {
                                "loop": true,
                                "speed": 600,
                                "autoplay": {
                                    "delay": 5000
                                },
                                "slidesPerView": "auto",
                                "pagination": {
                                    "el": ".swiper-pagination",
                                    "type": "bullets",
                                    "clickable": true
                                },
                                "breakpoints": {
                                    "320": {
                                    "slidesPerView": 2,
                                    "spaceBetween": 40
                                    },
                                    "480": {
                                    "slidesPerView": 3,
                                    "spaceBetween": 60
                                    },
                                    "640": {
                                    "slidesPerView": 4,
                                    "spaceBetween": 80
                                    },
                                    "992": {
                                    "slidesPerView": 6,
                                    "spaceBetween": 120
                                    }
                                }
                                }
                                </script>

                            <div class="swiper-wrapper align-items-center">
                                @foreach ($clients as $client)
                                    <div class="swiper-slide text-center">
                                        <a href="{{ $client->link }}" target="_blank">
                                            <img src="{{ asset('uploads/first_section/' . $client->logo) }}"
                                                class="img-fluid" alt="{{ $client->name ?? 'Client Logo' }}"
                                                loading="lazy" width="150">
                                        </a>
                                    </div>
                                @endforeach
                            </div>

                            <div class="swiper-pagination"></div>
                        </div>

                    </div>

                </section>
                <!-- /Clients Section -->

@endsection

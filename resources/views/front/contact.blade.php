@extends('front.layouts.app')
@section('content')
    <!-- Contact Section -->
    <section id="contact" class="contact section">

        <br>
        <br>
        <br>
        <br>


        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Contact</h2>
            <p>Contact Us</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">

                <div class="col-lg-6">

                    <h1> <b style="color: #F69A1A">Unlock the perfect match for your team with Goldfish HR.</b></h1>

                    <h5>Feel free to reach out with any questions — we're happy to help.</h5>

                    <h6><i class="bi bi-check2-circle"></i> Secure an appointment to talk to one of our sales representative
                    </h6>
                    <h6><i class="bi bi-check2-circle"></i> Learn how Goldfish HR can improve employee management</h6>

                    <br>
                    <br>

                    <div class="row gy-4">
                        {{-- <div class="col-md-6">
                        <div class="info-item" data-aos="fade" data-aos-delay="200">
                            <i class="bi bi-geo-alt"></i>
                            <h3>Address</h3>
                            <p>Khan Tower (2nd Floor , 3rd Floor & 4th Floor)</p>
                            <p>80/3, VIP Road, Kakrail Dhaka, Bangladesh.</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="col-md-6">
                        <div class="info-item" data-aos="fade" data-aos-delay="300">
                            <i class="bi bi-telephone"></i>
                            <h3>Call Us</h3>
                            <p>+88-01811317129</p>
                            <p>+8802222225006</p>
                        </div>
                    </div><!-- End Info Item --> --}}




                        <div class="col-md-6">
                            <div class="info-item" data-aos="fade" data-aos-delay="400">
                                <i class="bi bi-envelope"></i>
                                <h3>Email Us</h3>
                                <p>info@opus-bd.com</p>
                                <p>sales@opus-bd.com</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="col-md-6">
                            <div class="info-item" data-aos="fade" data-aos-delay="500">
                                <i class="bi bi-clock"></i>
                                <h3>Open Hours</h3>
                                <p>Sunday - Thursday</p>
                                <p>9:00AM - 06:00PM</p>
                            </div>
                        </div><!-- End Info Item -->

                    </div>

                </div>

                <div class="col-lg-6">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('contact_us.store') }}" method="post" class="php-email-form" data-aos="fade-up"
                        data-aos-delay="200">
                        @csrf
                        <div class="row gy-4">

                            <div class="col-md-12">
                                <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                            </div>

                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                            </div>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="phone" placeholder="Phone Number"
                                    required>
                            </div>

                            <div class="col-12">
                                <input type="text" class="form-control" name="company_name" placeholder="Company Name"
                                    required>
                            </div>

                            <div class="col-12">
                                <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                            </div>

                            <!-- 👇 New Employee Count Radio Group -->
                            <div class="col-12">
                                <label class="form-label d-block mb-2">How many employees do you
                                    have?</label>
                                <div class="d-flex flex-wrap gap-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="employee_count" id="emp1"
                                            value="0-25" checked>
                                        <label class="form-check-label" for="emp1">0-25</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="employee_count" id="emp2"
                                            value="25-50">
                                        <label class="form-check-label" for="emp2">25-50</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="employee_count" id="emp3"
                                            value="50-100">
                                        <label class="form-check-label" for="emp3">50-100</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="employee_count" id="emp4"
                                            value="100+">
                                        <label class="form-check-label" for="emp4">100+</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 text-center">
                                <button type="submit">Contact Sales</button>
                            </div>


                        </div>
                    </form>
                </div>
                <!-- End Contact Form -->

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

            </div>

        </div>

    </section><!-- /Contact Section -->
@endsection

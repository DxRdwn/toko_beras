@extends('layout.layout')
@section('content')
    <!-- Page Title -->
    <div class="page-title light-background">
        <div class="container d-lg-flex justify-content-between align-items-center">
            <h1 class="mb-2 mb-lg-0">Contact</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li class="current">Contact</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <!-- Contact 2 Section -->
    <section id="contact-2" class="contact-2 section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <!-- Contact Info Boxes -->
            <div class="row gy-4 mb-5">
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="contact-info-box">
                        <div class="icon-box">
                            <i class="bi bi-geo-alt"></i>
                        </div>
                        <div class="info-content">
                            <h4>Our Address</h4>
                            <p>Perum Jl. Griya Brondong Rejo Permai No.Blok B22 RT01, RW.03, Brondongrejo, Purwodadi,
                                Purworejo Regency, Central Java 54173</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="contact-info-box">
                        <div class="icon-box">
                            <i class="bi bi-envelope"></i>
                        </div>
                        <div class="info-content">
                            <h4>Email Address</h4>
                            <p>mulyadi@gmail.com</p>
                            <p>tokoberasmul@gmail.com</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="contact-info-box">
                        <div class="icon-box">
                            <i class="bi bi-headset"></i>
                        </div>
                        <div class="info-content">
                            <h4>Hours of Operation</h4>
                            <p>Sunday-Fri: 9 AM - 6 PM</p>
                            <p>Saturday: 9 AM - 4 PM</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Google Maps (Full Width) -->
        <div class="map-section" data-aos="fade-up" data-aos-delay="200">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d555.8563338776469!2d109.98093662066933!3d-7.780147576578518!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7ae978140a2ef7%3A0x7878afe088395fd5!2sRumah%20Pak%20Mulyadi!5e0!3m2!1sid!2sid!4v1765986509828!5m2!1sid!2sid"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>



    </section><!-- /Contact 2 Section -->
@endsection

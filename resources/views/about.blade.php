@extends('pages.layout')

@section('title', 'About')

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-3 text-white animated slideInRight">About Us</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb animated slideInRight mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">About Us</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
<div class="container-xxl py-5">
    <div class="container">
        <!-- Page Title -->
        <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
            <p class="fw-medium text-uppercase text-primary mb-2">About Us</p>
            <h1 class="display-5 mb-4">Vishal Metal & Mining Limited (VMML)</h1>
        </div>

        <!-- Who We Are -->
        <div class="wow fadeInUp mb-5" data-wow-delay="0.2s">
            <h3>Who We Are</h3>
            <p>Founded in 2015, the VMML Group has established itself as a trusted name in the trading of bulk Ferro Alloys, with a strategic focus on Manganese, Chrome, and Silicon-based alloys. Driven by a commitment to meet the evolving needs of our customers, we have built a strong market presence and continue to grow through reliable service, deep industry knowledge, and customer-centric solutions.</p>
            <p>At VMML, customer satisfaction is at the heart of everything we do. We deliver tailored solutions with high-quality products, competitive pricing, timely shipments, and unwavering dedication—ensuring long-term value and trusted partnerships.</p>
        </div>

        <!-- Founder’s Vision -->
        <div class="wow fadeInUp mb-5" data-wow-delay="0.3s">
            <h3>Founder’s Vision</h3>
            <p>To be a global leader in the metal and mining industry by delivering critical steel raw materials with unmatched efficiency, reliability, and integrity. At VMML, we are committed to powering the steel supply chain—from mine to mill—through strategic partnerships, innovation, and operational excellence.</p>
            <p>We envision a future where VMML plays a pivotal role in both national and international markets, building long-term value for stakeholders and contributing to a sustainable global infrastructure. Our goal is to develop a fully integrated iron ore supply chain, expand beneficiation plants, forge global partnerships, and drive rural development through impactful CSR initiatives.</p>
        </div>

        <!-- Industry Overview (with Image) -->
        <div class="row align-items-center mb-5 wow fadeInUp" data-wow-delay="0.4s">
            <div class="col-md-5">
                <img class="img-fluid rounded" src="{{ asset('img/about-industry.jpg')}}" alt="Industry Overview">
            </div>
            <div class="col-md-7">
                <h3>Industry Overview</h3>
                <p>Our core focus lies in the production of Ferro Alloys—essential additives in steelmaking that enhance mechanical properties, control grain size, and aid in de-oxidation. Though they account for less than 1% of steel’s raw materials, their role is vital in achieving desired steel quality.</p>
                <p>The demand for specific types of Ferro Alloys depends on the steelmaking process and the required steel grade. Their critical role makes them indispensable in the steel industry. India is among the top three exporters globally, with over 10,000 shipments and export values reaching USD 3.16 billion in 2021. Production hubs are concentrated in West Bengal, Andhra Pradesh, and Chhattisgarh.</p>
            </div>
        </div>

        <!-- Our Esteemed Customers -->
        <div class="wow fadeInUp mb-5" data-wow-delay="0.5s">
            <h3>Our Esteemed Customers</h3>
            <p>VMML proudly supports the raw material needs of the JSW Group—one of India’s largest private-sector steel producers. With a consolidated supply volume exceeding 7 million metric tons annually, we contribute significantly to their steel production.</p>
            <p>This long-standing partnership reflects our commitment to consistency, reliability, and excellence in customer service.</p>
        </div>

        <!-- Our Suppliers -->
        <div class="wow fadeInUp mb-5" data-wow-delay="0.6s">
            <h3>Our Suppliers</h3>
            <p>Our strength lies in long-term partnerships with India’s most reputable miners and beneficiation operators. These trusted partners ensure consistent quality and supply:</p>
            <ul>
                <li>Pathak Group (Katni)</li>
                <li>Pacific Iron Manufacturing Co. Ltd – 80,000 M/T</li>
                <li>Geomin Iron & Geomin Industries Ltd – 120,000 M/T (post-expansion)</li>
                <li>Jain Mines Pvt. Ltd – 21,000 M/T</li>
                <li>Sagar Stone Industries – 70,000 M/T</li>
                <li>4 Man Industries Pvt. Ltd – 45,000 M/T</li>
                <li>Jakhodia Mineral – Exclusive long-term marketing arrangement</li>
            </ul>
        </div>

        <!-- CSR Commitment -->
        <div class="wow fadeInUp" data-wow-delay="0.7s">
            <h3>CSR Commitment</h3>
            <p>We believe in giving back to the community through impactful initiatives. As part of our CSR, we supported the construction of two 4,100 sq. ft. shelters for over 150 cows in Jabalpur, led by the Baahubali Charitable Trust.</p>
            <p>This reflects our values of sustainability, compassion, and community well-being—investing in causes that make a lasting positive impact.</p>
        </div>
    </div>
</div>



<!-- Testimonial End -->

@endsection
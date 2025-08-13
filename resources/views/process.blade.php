@extends('pages.layout')

@section('title', 'Process')

@section('content')
<style>
    .process-image {
        width: 100%; /* container width */
        max-height: 600px; /* reduce height */
        object-fit: cover; /* keep proportions & crop excess */
    }
</style>

<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <h1 class="display-3 text-white animated slideInRight">Process</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb animated slideInRight mb-0">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active" aria-current="page">Process</li>
            </ol>
        </nav>
    </div>
</div>
<div class="container-xxl py-5">
    <div class="text-center mb-5">
        <h1 class="display-5 fw-bold">Iron Ore Beneficiation Process</h1>
        <p class="text-muted">From mining to steelmaking – the complete journey of iron ore transformation.</p>
        <img src="{{ asset('img/iron-ore-overview.jpg') }}" alt="Iron Ore Overview" class="img-fluid rounded shadow process-image">
    </div>

    <div class="mb-5">
        <h3>1. Mining of Iron Ore</h3>
        <p>Iron ore is extracted from open-pit or underground mines. Common types include:</p>
        <ul>
            <li>Hematite (Fe₂O₃)</li>
            <li>Magnetite (Fe₃O₄)</li>
            <li>Limonite</li>
            <li>Siderite</li>
        </ul>
        <img src="{{ asset('img/mining.jpg') }}" alt="Mining Iron Ore" class="img-fluid rounded shadow mt-3 process-image">
    </div>

    <div class="mb-5">
        <h3>2. Beneficiation Process (Ore Preparation)</h3>
        <p>Beneficiation improves the ore's iron content and removes impurities (gangue materials like silica, alumina).</p>
        <ul>
            <li><strong>Crushing and Grinding</strong> – Reduces ore to fine particles.</li>
            <li><strong>Screening</strong> – Separates particles based on size.</li>
            <li><strong>Magnetic Separation</strong> – Uses magnetic properties to extract iron-rich particles.</li>
            <li><strong>Gravity Separation</strong> – Uses water or air flow to separate heavier particles.</li>
            <li><strong>Froth Flotation</strong> – Removes impurities using chemical reagents (if required).</li>
        </ul>
        <img src="{{ asset('img/beneficiation.jpg') }}" alt="Ore Beneficiation" class="img-fluid rounded shadow mt-3 process-image">
    </div>

    <div class="mb-5">
        <h3>3. Concentration and Pelletizing</h3>
        <p>Fine ore is concentrated and sometimes agglomerated into pellets or sinter for easier use in blast furnaces.</p>
        <img src="{{ asset('img/pelletizing.jpg') }}" alt="Pelletizing Iron Ore" class="img-fluid rounded shadow mt-3 process-image">
    </div>

    <div class="mb-5">
        <h3>4. Smelting (Refining)</h3>
        <p>Converts iron ore into metallic iron (pig iron or steel) via:</p>
        <ul>
            <li><strong>Blast Furnace Process</strong> – Uses coke, limestone, and ore to produce molten iron and slag.</li>
            <li><strong>Direct Reduced Iron (DRI)</strong> – Produces sponge iron using natural gas or coal.</li>
        </ul>
        <img src="{{ asset('img/smelting.jpg') }}" alt="Iron Smelting" class="img-fluid rounded shadow mt-3 process-image">
    </div>

    <div class="mb-5">
        <h3>5. Steelmaking (Optional Final Step)</h3>
        <p>Pig iron is converted to steel by removing carbon and other impurities in:</p>
        <ul>
            <li>Basic Oxygen Furnace (BOF)</li>
            <li>Electric Arc Furnace (EAF)</li>
        </ul>
        <img src="{{ asset('img/steelmaking.jpg') }}" alt="Steelmaking" class="img-fluid rounded shadow mt-3 process-image">
    </div>

    <div class="bg-light p-4 rounded shadow">
        <p>We have built strong, long-term supply arrangements with strategic partners, enabling consistent growth and product reliability. Our competitive edge lies in our robust financial foundation, efficient supply chain and shipping operations, and dedicated administration.</p>
        <p>With a sales turnover exceeding ₹750 crore in FY 2024-25, our vision for the future is clear: to deepen our partnerships, expand our global footprint, and continue delivering value through trust, quality, and performance.</p>
    </div>
</div>

<!-- Testimonial End -->

@endsection
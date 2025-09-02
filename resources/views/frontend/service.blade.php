@extends('component.main')
@section('content')

{{-- SERVICES PAGE --}}

    {{-- HERO BANNER --}}
    <section class="relative w-full h-[60vh] lg:h-[50vh] flex items-center justify-center overflow-hidden">
        <!-- Background Image -->
        <img src="https://cdn.pixabay.com/photo/2020/05/19/10/52/banner-5190181_1280.jpg"
             alt="Services Banner"
             class="absolute inset-0 w-full h-full object-cover">

        <!-- Dark Overlay -->
        <div class="absolute inset-0 bg-black/60"></div>

        <!-- Content -->
        <div class="relative z-10 text-center text-white px-6">
            <h1 class="text-4xl md:text-5xl font-extrabold mb-4 font-[Poppins]">
                Our Services
            </h1>
            <nav aria-label="breadcrumb">
                <ul class="flex items-center justify-center space-x-2 text-sm md:text-base">
                    <li><a href="/" class="text-[#EBA35B] hover:underline">Home</a></li>
                    <li class="text-white">/</li>
                    <li class="text-white/80">Services</li>
                </ul>
            </nav>
        </div>
    </section>

    {{-- INTRO SECTION --}}
    <section class="py-16">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <span class="inline-block text-sm uppercase tracking-[4px] px-4 py-4 bg-[#EBA35B]/20 text-[#EBA35B] font-semibold mb-2 rounded-full">
                What We Offer
            </span>
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">
                Transforming Lives Through Handwriting & Watch Analysis
            </h2>
            <p class="max-w-3xl mx-auto text-white">
                At Shivansh Dargarh, we provide deep insights into your personality, strengths, and life
                patterns through professional handwriting analysis and wristwatch reading. Discover yourself
                in a way you’ve never imagined before.
            </p>
        </div>
    </section>

    {{-- SERVICES GRID --}}
    <section class="py-20 ">
        <div class="max-w-full mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mx-8">
                <!-- Service Card -->
                <div class=" rounded-2xl bg-[#EBA35B]/40 shadow-md p-8 hover:shadow-xl transition duration-300 text-center">
                    <span class="material-symbols-outlined text-5xl text-[#EBA35B] mb-4">edit_note</span>
                    <h3 class="text-xl font-semibold mb-3">Handwriting Analysis</h3>
                    <p class="text-white mb-4">
                        Unlock hidden personality traits, strengths, and behavioral patterns by analyzing your handwriting.
                    </p>
                    <a href="#" class="text-[#EBA35B] font-semibold hover:underline">Learn More →</a>
                </div>

                <!-- Service Card -->
                <div class=" rounded-2xl bg-[#EBA35B]/40 shadow-md p-8 hover:shadow-xl transition duration-300 text-center">
                    <span class="material-symbols-outlined text-5xl text-[#EBA35B] mb-4">watch</span>
                    <h3 class="text-xl font-semibold mb-3">Wristwatch Reading</h3>
                    <p class="text-white mb-4">
                        Your wristwatch reflects your mindset, lifestyle, and choices. Discover what your timepiece says about you.
                    </p>
                    <a href="#" class="text-[#EBA35B] font-semibold hover:underline">Learn More →</a>
                </div>

                <!-- Service Card -->
                <div class=" rounded-2xl bg-[#EBA35B]/40 shadow-md p-8 hover:shadow-xl transition duration-300 text-center">
                    <span class="material-symbols-outlined text-5xl text-[#EBA35B] mb-4">psychology</span>
                    <h3 class="text-xl font-semibold mb-3">Personal Development</h3>
                    <p class="text-white mb-4">
                        Gain clarity in decision-making, career, and relationships with insights tailored to your unique traits.
                    </p>
                    <a href="#" class="text-[#EBA35B] font-semibold hover:underline">Learn More →</a>
                </div>
            </div>
        </div>
    </section>

    {{-- CALL TO ACTION --}}
    <section class="py-16 bg-[#3E3229] text-center text-white">
        <div class="max-w-4xl mx-auto px-6">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">
                Ready to Discover Yourself?
            </h2>
            <p class="text-lg text-white mb-8">
                Book a session with Shivansh Dargarh today and start your journey towards self-discovery
                and confident life decisions.
            </p>
            <a href="/contact"
               class="inline-block bg-[#EBA35B] hover:bg-[#c88744] text-white font-semibold px-8 py-3 rounded-full shadow-md transition">
               Book a Session
            </a>
        </div>
    </section>



@endsection

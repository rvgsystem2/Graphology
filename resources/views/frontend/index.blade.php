@extends('component.main')
@section('content')
    {{-- HERO SECTION --}}

    <section
        class="bg-[#3E3229] max-w-full mx-auto flex flex-col-reverse md:flex-row gap-8 md:gap-12 justify-center items-center py-12 md:py-20 lg:py-20 px-6 md:px-4 lg:px-24 overflow-hidden">
        <!-- Left Content -->
        <div class="space-y-6 md:space-y-8 relative z-10 max-w-2xl">
            <!-- Tagline -->
            <span
                class="inline-block text-sm uppercase tracking-[4px] text-[#EBA35B] font-semibold bg-[#EBA35B]/10 px-4 py-1 rounded-full">
                Welcome to <strong class="text-[#EBA35B]">Shivansh Dargarh</strong>
            </span>

            <!-- Heading -->
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold leading-tight text-white font-[Poppins]">
                 <span class="text-[#EBA35B]">Graphologist</span>,<br class="hidden md:block">
                Handwriting Analyst & <span class="text-[#EBA35B]">Wristwatch Teller</span>
            </h1>

            <!-- Description -->
            <p class="text-lg md:text-xl text-gray-300 max-w-2xl leading-relaxed font-light">
                Every stroke of your pen tells a story. Every watch you wear whispers secrets of your personality.
                At <span class="text-[#EBA35B] font-semibold">Shivansh Dargarh</span>, we decode these hidden patterns
                through <span class="text-white font-medium">handwriting analysis</span>
                and <span class="text-white font-medium">wristwatch readings</span> — helping you unlock strengths,
                gain clarity, and discover your true self.
            </p>

            <!-- Buttons -->
            <div class="flex flex-wrap md:flex-nowrap gap-4 pt-4">
                <a href="#"
                    class="px-7 py-3 rounded-2xl bg-[#EBA35B] text-white font-semibold text-lg shadow-lg shadow-[#EBA35B]/30 hover:bg-white hover:text-[#EBA35B] transition-all duration-300">
                    Get Started
                </a>
                <a href="#"
                    class="px-7 py-3 rounded-2xl border-2 border-[#EBA35B] text-[#EBA35B] font-semibold text-lg hover:bg-[#EBA35B] hover:text-white transition-all duration-300">
                    Learn More
                </a>
            </div>
        </div>

        <!-- Right Image -->
        <div class="relative w-full md:w-full h-[360px] md:h-[550px] lg:h-[700px] mt-10 md:mt-0 lg:mt-0 overflow-hidden ">
            <!-- Placeholder for the image -->
            <div class="relative w-full h-[500px] md:h-[500px] lg:h-auto">
                <img src="{{ asset('asset/img/banner.png') }}" alt="Graphology and Wristwatch Reading at Shivansh Dargarh"
                    class="w-full h-full object-cover rounded-lg md:rounded-none transform hover:scale-105 transition duration-700 ease-out ">
            </div>
        </div>
    </section>
    {{-- end hero section --}}


    <!-- Decorative Divider -->
    <div class="relative w-full -mt-20 h-2 my-12 overflow-hidden bg-[#EBA35B] hidden md:block">
        <!-- Background Image -->
        {{-- <img src="https://cdn.pixabay.com/photo/2015/09/24/12/33/background-955454_1280.jpg"
         alt="Decorative Divider"
         class="w-full h-full object-cover opacity-90 rounded-lg shadow-md"> --}}

        <!-- Overlay -->
        <div class="absolute inset-0 bg-black/40 rounded-lg"></div>
    </div>



    {{-- ABOUT SECTION --}}
    <section id="about" class="overflow-hidden">
        <div
            class=" max-w-full mx-auto flex flex-col md:flex-row gap-8 md:gap-12 justify-center items-center py-12 md:py-12 lg:py-20 px-6 md:px-4 lg:px-24 overflow-hidden">

            <!-- Image Left -->
            <div class="">
                <div class="text-start md:mb-8">
                    <!-- Tagline -->
                    <span
                        class="inline-block text-sm uppercase tracking-[4px] text-[#EBA35B] font-semibold bg-[#EBA35B]/10 px-6 py-2 rounded-full shadow-sm">
                        <strong class="text-[#EBA35B]">About Me</strong>
                    </span>
                </div>

                <img src="{{ asset('asset/img/enhaced-img.png') }}" alt="About Shivansh Dargarh"
                    class="w-full h-full  transform hover:scale-105 transition duration-500 ease-out object-cover overflow-hidden">
            </div>

            <!-- Content -->
            <div class="space-y-8 order-2 lg:order-none max-w-xl">
                <!-- Heading -->
                <h2 class="text-3xl md:text-4xl font-extrabold text-white leading-snug font-[Poppins]">
                    Discover <span class="text-[#EBA35B]">What Your Handwriting & Wristwatch Reveal</span>
                </h2>

                <!-- Intro -->
                <p class="text-lg text-white/80 leading-relaxed">
                    Every stroke of your pen tells a story, and even the watch on your wrist speaks about who you are.
                    At <span class="text-[#EBA35B] font-semibold">Shivansh Dargarh</span>, we help you unlock hidden stories
                    through handwriting analysis and wristwatch reading, offering deep insights into your
                    <span class="font-medium">personality, strengths, and life patterns</span>.
                </p>

                <!-- Call to Action -->
                <div class="pt-2">
                    <p class="text-lg text-white/80 mb-6">
                        Ready to uncover the story your handwriting and wristwatch are trying to tell?
                        Book a session today with Kanpur’s <span class="text-[#EBA35B] font-semibold">leading graphologist &
                            wristwatch expert</span>.
                    </p>
                    <a href="#contact"
                        class="inline-block px-8 py-3 bg-gradient-to-r from-[#EBA35B] to-[#d98b41] text-white font-semibold rounded-xl shadow-lg hover:shadow-xl hover:scale-105 transition-all duration-300">
                        Book a Session
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- end section --}}

    <!-- Decorative Divider -->
    <div class="relative w-full -mt-20 h-2 my-12 overflow-hidden bg-[#EBA35B] hidden md:block">
        <!-- Background Image -->
        {{-- <img src="https://cdn.pixabay.com/photo/2015/09/24/12/33/background-955454_1280.jpg"
         alt="Decorative Divider"
         class="w-full h-full object-cover opacity-90 rounded-lg shadow-md"> --}}

        <!-- Overlay -->
        <div class="absolute inset-0 bg-black/40 rounded-lg"></div>
    </div>

    <!-- Services Section -->
    <section id="services" class="max-w-full mx-auto py-12 md:py-12 lg:py-20 px-6 md:px-4 lg:px-24">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-8">
            <!-- Heading -->
            <div class="max-w-2xl py-2">
                <span
                    class="inline-block text-sm uppercase tracking-[4px] text-[#EBA35B] font-semibold bg-[#EBA35B]/10 px-6 py-2 rounded-full">my
                    Services</span>
                <h2 class="mt-6 text-3xl sm:text-4xl font-extrabold leading-tight text-[#EBA35B]">Handwriting & Wristwatch
                    Analysis</h2>
                <p class="mt-4 text-gray-300 text-base">Personalised, insightful analysis combining scientific handwriting
                    profiling and symbolic wristwatch interpretation — designed to uncover strengths, guide careers and
                    deepen relationships.</p>
            </div>

            <!-- CTA -->
            <div class="flex items-center gap-4">

                <span class="text-sm font-semibold text-white bg-[#EBA35B]/60 py-4 bg-[#EBA35B]/40 px-4 rounded-full">Book a
                    Session</span>

            </div>
        </div>

        <!-- Cards Grid -->
        <div class="mt-12 mx-auto flex flex-col md:flex-row gap-8 md:gap-12 ">

            <!-- Card 1: Handwriting Analysis -->
            <article
                class="md:p-6 p-3 rounded-2xl border border-white/6 glass hover:shadow-2xl transform hover:-translate-y-1 transition bg-[#EBA35B]/40">
                <div class="flex items-center gap-4">
                    <div class="md:p-3 rounded-lg flex-shrink-0">
                        <!-- Pen Icon -->
                        <div>
                            <img src="{{ asset('asset/img/writing.png') }}" alt=""
                                class="md:w-32 md:h-32 w-12 h-12 rounded-full bg-white p-4">
                        </div>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-[#EBA35B]">Handwriting Analysis</h3>
                        <p class="mt-1 text-sm text-gray-300">Personality profiling, career guidance and relationship
                            insights from your handwriting.</p>
                    </div>
                </div>

                <ul class="mt-4 space-y-2 text-sm text-gray-300">
                    <li class="flex items-start gap-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mt-1 text-green-400" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm-1-7l-1.5-1.5a1 1 0 111.4-1.4L9 8.6l3.1-3.1a1 1 0 011.4 1.4L9 11z"
                                clip-rule="evenodd" />
                        </svg>
                        <span><strong>Personality Profiling</strong> — detailed trait analysis based on strokes, pressure &
                            slant.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mt-1 text-green-400" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm-1-7l-1.5-1.5a1 1 0 111.4-1.4L9 8.6l3.1-3.1a1 1 0 011.4 1.4L9 11z"
                                clip-rule="evenodd" />
                        </svg>
                        <span><strong>Career Guidance</strong> — strengths & role fit suggestions.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mt-1 text-green-400" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm-1-7l-1.5-1.5a1 1 0 111.4-1.4L9 8.6l3.1-3.1a1 1 0 011.4 1.4L9 11z"
                                clip-rule="evenodd" />
                        </svg>
                        <span><strong>Relationship Insights</strong> — communication styles and compatibility
                            pointers.</span>
                    </li>
                </ul>

                <div class="mt-6 flex items-center justify-between">
                    <a href="#watch" class="text-sm font-medium underline underline-offset-4 text-yellow-200">Learn
                        more</a>
                    <a href="#book"
                        class="inline-flex items-center gap-2 text-sm font-semibold px-3 py-2 rounded-lg bg-white border border-indigo-500/20">Book
                        Now</a>
                </div>
            </article>

            <!-- Card 2: Wristwatch Telling -->
            <article
                class="md:p-6 p-3 rounded-2xl border border-white/6 glass hover:shadow-2xl transform hover:-translate-y-1 transition bg-[#EBA35B]/40">
                <div class="flex items-center gap-4">
                    <div class="md:p-3 rounded-lg flex-shrink-0">
                        <!-- Pen Icon -->
                        <div>
                            <img src="{{ asset('asset/img/wrist-watch.png') }}" alt=""
                                class="md:w-32 md:h-32 w-12 h-12 rounded-full bg-white p-4">
                        </div>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-[#EBA35B]">Wristwatch Telling</h3>
                        <p class="mt-1 text-sm text-gray-300">Style & personality mapping, timekeeping habits and emotional
                            symbolism in your watch choice.</p>
                    </div>
                </div>

                <ul class="mt-4 space-y-2 text-sm text-gray-300">
                    <li class="flex items-start gap-3"><svg xmlns="http://www.w3.org/2000/svg"
                            class="h-4 w-4 mt-1 text-green-400" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm-1-7l-1.5-1.5a1 1 0 111.4-1.4L9 8.6l3.1-3.1a1 1 0 011.4 1.4L9 11z"
                                clip-rule="evenodd" />
                        </svg>
                        <span><strong>Style & Personality Mapping</strong> — what your watch says about you.</span>
                    </li>
                    <li class="flex items-start gap-3"><svg xmlns="http://www.w3.org/2000/svg"
                            class="h-4 w-4 mt-1 text-green-400" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm-1-7l-1.5-1.5a1 1 0 111.4-1.4L9 8.6l3.1-3.1a1 1 0 011.4 1.4L9 11z"
                                clip-rule="evenodd" />
                        </svg>
                        <span><strong>Timekeeping Habits & Traits</strong> — punctuality, routine & energy rhythms.</span>
                    </li>
                    <li class="flex items-start gap-3"><svg xmlns="http://www.w3.org/2000/svg"
                            class="h-4 w-4 mt-1 text-green-400" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm-1-7l-1.5-1.5a1 1 0 111.4-1.4L9 8.6l3.1-3.1a1 1 0 011.4 1.4L9 11z"
                                clip-rule="evenodd" />
                        </svg>
                        <span><strong>Emotional & Symbolic Insights</strong> — colours, dials and materials as personal
                            symbols.</span>
                    </li>
                </ul>

                <div class="mt-6 flex items-center justify-between">
                    <a href="#watch" class="text-sm font-medium underline underline-offset-4 text-yellow-200">Learn
                        more</a>
                    <a href="#book"
                        class="inline-flex items-center gap-2 text-sm font-semibold px-3 py-2 rounded-lg bg-white border border-indigo-500/20">Book
                        Now</a>
                </div>
            </article>

            <!-- Card 3: Combined Analysis -->
            <article
                class="md:p-6 p-3 rounded-2xl border border-white/6 glass hover:shadow-2xl transform hover:-translate-y-1 transition bg-[#EBA35B]/40">
                <div class="flex items-center gap-4">
                    <div class="md:p-3 rounded-lg flex-shrink-0">
                        <!-- Pen Icon -->
                        <div>
                            <img src="{{ asset('asset/img/combine.png') }}" alt=""
                                class="md:w-32 md:h-32 w-12 h-12 rounded-full bg-white p-4">
                        </div>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-[#EBA35B]">Combined Analysis Package</h3>
                        <p class="mt-1 text-sm text-gray-300">A unique session combining handwriting & wristwatch analysis
                            for a complete personality assessment.</p>
                    </div>
                </div>

                <ul class="mt-4 space-y-2 text-sm text-gray-300">
                    <li class="flex items-start gap-3"><svg xmlns="http://www.w3.org/2000/svg"
                            class="h-4 w-4 mt-1 text-green-400" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm-1-7l-1.5-1.5a1 1 0 111.4-1.4L9 8.6l3.1-3.1a1 1 0 011.4 1.4L9 11z"
                                clip-rule="evenodd" />
                        </svg>
                        <span><strong>Integrated Report</strong> — combined insights with actionable steps.</span>
                    </li>
                    <li class="flex items-start gap-3"><svg xmlns="http://www.w3.org/2000/svg"
                            class="h-4 w-4 mt-1 text-green-400" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm-1-7l-1.5-1.5a1 1 0 111.4-1.4L9 8.6l3.1-3.1a1 1 0 011.4 1.4L9 11z"
                                clip-rule="evenodd" />
                        </svg>
                        <span><strong>Personalised Roadmap</strong> — steps for growth, career moves and
                            relationships.</span>
                    </li>
                </ul>

                <div class="mt-6 flex items-center justify-between">
                    <a href="#combined" class="text-sm font-medium underline underline-offset-4 text-yellow-200">Learn
                        more</a>
                    <a href="#book"
                        class="inline-flex items-center gap-2 text-sm font-semibold px-3 py-2 rounded-lg bg-white border border-emerald-400/20">Book
                        Now</a>
                </div>
            </article>

        </div>


    </section>

    {{-- end service section --}}
<!-- Decorative Divider -->
<div class="relative w-full  h-2 my-12 overflow-hidden bg-[#EBA35B] hidden md:block">
    <!-- Background Image -->
    {{-- <img src="https://cdn.pixabay.com/photo/2015/09/24/12/33/background-955454_1280.jpg"
     alt="Decorative Divider"
     class="w-full h-full object-cover opacity-90 rounded-lg shadow-md"> --}}

    <!-- Overlay -->
    <div class="absolute inset-0 bg-black/40 rounded-lg"></div>
</div>


    {{-- SERVICE DETAILS SECTION  --}}

    <!-- Insights Section -->
    <section id="insights" class="w-full mx-auto px-6 md:px-12 lg:px-24 py-16">
        <!-- Heading -->
        <!-- Heading -->
        <div class="max-w-2xl py-2"> <span
                class="inline-block text-sm uppercase tracking-[4px] text-[#EBA35B] font-semibold bg-[#EBA35B]/10 px-6 py-2 rounded-full">My
                Analysis</span>
            <h2 class="mt-6 text-3xl sm:text-4xl font-extrabold leading-tight text-[#EBA35B]">Handwriting & Wristwatch
                Analysis</h2>
            <p class="mt-4 text-gray-300 text-base">Personalised, insightful analysis combining scientific handwriting
                profiling and symbolic wristwatch interpretation — designed to uncover strengths, guide careers and deepen
                relationships.</p>
        </div>

        <!-- Grid Layout -->
        <div class="mt-12 grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-10 lg:gap-12">

            <!-- Card 1 - Handwriting Analysis -->
            <div class="relative group rounded-2xl overflow-hidden shadow-lg h-[420px] sm:h-[480px] md:h-[500px]">
                <!-- Background Image -->
                <img src="https://cdn.pixabay.com/photo/2016/11/23/18/14/fountain-pen-1854169_1280.jpg"
                    alt="Handwriting Analysis"
                    class="w-full h-full object-cover transform group-hover:scale-105 transition duration-500">

                <!-- Overlay -->
                <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/60 to-transparent"></div>

                <!-- Content -->
                <div class="absolute bottom-0 p-6 md:p-8 space-y-4 text-white">
                    <span
                        class="inline-block text-xs uppercase tracking-widest bg-yellow-400/20 text-yellow-400 px-3 py-1 rounded-full font-semibold">
                        Handwriting Analysis
                    </span>
                    <h3 class="text-xl sm:text-2xl md:text-3xl font-extrabold leading-snug text-[#EBA35B]">
                        Discover Yourself Through Handwriting
                    </h3>
                    <ul class="space-y-2 text-sm md:text-base text-gray-200">
                        <li class="flex items-start gap-2">
                            <svg class="h-4 w-4 md:h-5 md:w-5 text-green-400 flex-shrink-0" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm-1-7l-2-2 1.4-1.4L9 8.6l3.6 3.6L11 14l-2-3z"
                                    clip-rule="evenodd" />
                            </svg>
                            Understand your personality traits and behavioral patterns
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="h-4 w-4 md:h-5 md:w-5 text-green-400 flex-shrink-0" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm-1-7l-2-2 1.4-1.4L9 8.6l3.6 3.6L11 14l-2-3z"
                                    clip-rule="evenodd" />
                            </svg>
                            Discover hidden strengths and areas for growth
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="h-4 w-4 md:h-5 md:w-5 text-green-400 flex-shrink-0" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm-1-7l-2-2 1.4-1.4L9 8.6l3.6 3.6L11 14l-2-3z"
                                    clip-rule="evenodd" />
                            </svg>
                            Boost confidence and communication skills
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="h-4 w-4 md:h-5 md:w-5 text-green-400 flex-shrink-0" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm-1-7l-2-2 1.4-1.4L9 8.6l3.6 3.6L11 14l-2-3z"
                                    clip-rule="evenodd" />
                            </svg>
                            Gain clarity on career choices and personal development
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Card 2 - Wristwatch Insights -->
            <div class="relative group rounded-2xl overflow-hidden shadow-lg h-[420px] sm:h-[480px] md:h-[500px]">
                <!-- Background Image -->
                <img src="https://cdn.pixabay.com/photo/2016/11/29/01/44/hands-1866619_1280.jpg" alt="Wristwatch Insights"
                    class="w-full h-full object-cover transform group-hover:scale-105 transition duration-500">

                <!-- Overlay -->
                <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/60 to-transparent"></div>

                <!-- Content -->
                <div class="absolute bottom-0 p-6 md:p-8 space-y-4 text-white">
                    <span
                        class="inline-block text-xs uppercase tracking-widest bg-yellow-400/20 text-yellow-400 px-3 py-1 rounded-full font-semibold">
                        Wristwatch Insights
                    </span>
                    <h3 class="text-xl sm:text-2xl md:text-3xl font-extrabold leading-snug text-[#EBA35B]">
                        Explore the Secret Behind Your Wristwatch
                    </h3>
                    <ul class="space-y-2 text-sm md:text-base text-gray-200">
                        <li class="flex items-start gap-2">
                            <svg class="h-4 w-4 md:h-5 md:w-5 text-green-400 flex-shrink-0" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm-1-7l-2-2 1.4-1.4L9 8.6l3.6 3.6L11 14l-2-3z"
                                    clip-rule="evenodd" />
                            </svg>
                            Decode how your watch style connects with your life decisions
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="h-4 w-4 md:h-5 md:w-5 text-green-400 flex-shrink-0" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm-1-7l-2-2 1.4-1.4L9 8.6l3.6 3.6L11 14l-2-3z"
                                    clip-rule="evenodd" />
                            </svg>
                            Understand what your watch preference reveals about your character
                        </li>
                        <li class="flex items-start gap-2">
                            <svg class="h-4 w-4 md:h-5 md:w-5 text-green-400 flex-shrink-0" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm-1-7l-2-2 1.4-1.4L9 8.6l3.6 3.6L11 14l-2-3z"
                                    clip-rule="evenodd" />
                            </svg>
                            Uncover insights into your thought process and decision-making style
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </section>


<!-- Decorative Divider -->
<div class="relative w-full h-2 my-12 overflow-hidden bg-[#EBA35B] hidden md:block">
    <!-- Background Image -->
    {{-- <img src="https://cdn.pixabay.com/photo/2015/09/24/12/33/background-955454_1280.jpg"
     alt="Decorative Divider"
     class="w-full h-full object-cover opacity-90 rounded-lg shadow-md"> --}}

    <!-- Overlay -->
    <div class="absolute inset-0 bg-black/40 rounded-lg"></div>
</div>

    {{--  END SERVICE DETAILS SECTION  --}}


    {{-- WHY CHOOSE ME --}}
    <section id="why-choose" class="relative bg-[#3E3229] py-16 md:py-20 lg:py-24">
        <div class="max-w-full mx-auto px-6 md:px-10 lg:px-20 text-center">

            <!-- Heading -->
            <div class="mb-12">
                <span
                    class="inline-block text-sm uppercase tracking-[4px] text-[#EBA35B] font-semibold bg-[#EBA35B]/10 px-4 py-1 rounded-full">
                    Why Choose Shivansh Dargarh
                </span>
                <h2 class="mt-4 text-3xl md:text-4xl lg:text-5xl font-extrabold text-white">
                    People  <span class="text-[#EBA35B]">Trust </span> Shivansh Dargarh
                </h2>
                <p class="mt-4 max-w-3xl mx-auto text-gray-300 text-lg">
                    Known for accuracy, empathy, and a unique approach, here’s what sets us apart:
                </p>
            </div>

            <!-- Feature Grid -->
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-8">

                <!-- Card 1 -->
                <div
                    class="p-6 bg-white/5 backdrop-blur-sm rounded-2xl border border-white/10 hover:bg-white/10 transition duration-300 shadow-lg">
                    <div class="flex justify-center items-center w-14 h-14 rounded-full bg-white mx-auto mb-4">
                        <div>
                            <img src="{{ asset('asset/img/data-analysis.png') }}" alt="" class="w-10 h-10">
                        </div>
                    </div>
                    <h3 class="text-lg font-semibold text-white mb-2">Personalized Analysis</h3>
                    <p class="text-gray-300 text-sm">Every session is tailored to your unique handwriting and lifestyle.
                    </p>
                </div>

                <!-- Card 2 -->
                <div
                    class="p-6 bg-white/5 backdrop-blur-sm rounded-2xl border border-white/10 hover:bg-white/10 transition duration-300 shadow-lg">
                    <div class="flex justify-center items-center w-14 h-14 rounded-full bg-white mx-auto mb-4">
                        <div>
                            <img src="{{ asset('asset/img/shield.png') }}" alt="" class="w-10 h-10">
                        </div>
                    </div>
                    <h3 class="text-lg font-semibold text-white mb-2">Trusted Expertise</h3>
                    <p class="text-gray-300 text-sm">Recognized as one of the most reliable handwriting analysts in Kanpur.
                    </p>
                </div>

                <!-- Card 3 -->
                <div
                    class="p-6 bg-white/5 backdrop-blur-sm rounded-2xl border border-white/10 hover:bg-white/10 transition duration-300 shadow-lg">
                    <div class="flex justify-center items-center w-14 h-14 rounded-full bg-white mx-auto mb-4">
                        <div>
                            <img src="{{ asset('asset/img/combine.png') }}" alt="" class="w-10 h-10">
                        </div>
                    </div>
                    <h3 class="text-lg font-semibold text-white mb-2">Holistic Insights</h3>
                    <p class="text-gray-300 text-sm">A rare combination of handwriting analysis and wristwatch reading.</p>
                </div>

                <!-- Card 4 -->
                <div
                    class="p-6 bg-white/5 backdrop-blur-sm rounded-2xl border border-white/10 hover:bg-white/10 transition duration-300 shadow-lg">
                    <div class="flex justify-center items-center w-14 h-14 rounded-full bg-white mx-auto mb-4">
                        <div>
                            <img src="{{ asset('asset/img/customer-service.png') }}" alt="" class="w-10 h-10">
                        </div>
                    </div>
                    <h3 class="text-lg font-semibold text-white mb-2">Flexible Sessions</h3>
                    <p class="text-gray-300 text-sm">Book in-person consultations in Kanpur or online sessions from
                        anywhere.</p>
                </div>
            </div>
        </div>
    </section>


    {{-- END WHY CHOOSE  ME SECTION --}}

    <!-- Decorative Divider -->
    <div class="relative w-full  h-2 my-12 overflow-hidden bg-[#EBA35B] hidden md:block">
        <!-- Background Image -->
        {{-- <img src="https://cdn.pixabay.com/photo/2015/09/24/12/33/background-955454_1280.jpg"
         alt="Decorative Divider"
         class="w-full h-full object-cover opacity-90 rounded-lg shadow-md"> --}}

        <!-- Overlay -->
        <div class="absolute inset-0 bg-black/40 rounded-lg"></div>
    </div>

    {{-- NEXT STEP TO DO --}}
    <section id="cta"
        class="relative bg-gradient-to-r from-[#3E3229] via-[#2a221c] to-[#3E3229] py-16 md:py-20 lg:py-24">
        <div class="max-w-5xl mx-auto px-6 md:px-12 lg:px-20 text-center relative z-10">

            <!-- Tagline -->
            <span
                class="inline-block text-sm uppercase tracking-[4px] text-[#EBA35B] font-semibold bg-[#EBA35B]/10 px-4 py-1 rounded-full">
                Take the Next Step
            </span>

            <!-- Heading -->
            <h2 class="mt-6 text-3xl md:text-4xl lg:text-5xl font-extrabold text-white leading-tight">
                Ready to Discover <span class="text-[#EBA35B]">the Story</span> Behind Your Handwriting & Wristwatch?
            </h2>

            <!-- Description -->
            <p class="mt-6 text-lg md:text-xl text-gray-300 max-w-3xl mx-auto">
                Book a session with <span class="font-semibold text-[#EBA35B]">Shivansh Dargarh</span> today —
                the <span class="text-[#EBA35B]">best graphologist in Kanpur</span>,
                <span class="text-[#EBA35B]">trusted handwriting analyst</span>, and
                <span class="text-[#EBA35B]">renowned wristwatch teller expert</span>.
                Get a personalized, in-depth analysis that helps you understand yourself better and make confident life
                decisions.
            </p>

            <!-- Buttons -->
            <div class="mt-10 flex flex-col sm:flex-row justify-center gap-4">
                <a href="tel:+91XXXXXXXXXX"
                    class="px-6 py-3 rounded-full bg-[#EBA35B] text-[#3E3229] font-semibold text-lg shadow-lg hover:bg-[#d28f45] transition">
                    📞 Call Us Now
                </a>
                <a href="/book-session"
                    class="px-6 py-3 rounded-full border-2 border-[#EBA35B] text-[#EBA35B] font-semibold text-lg hover:bg-[#EBA35B]/10 transition">
                    📅 Book Online
                </a>
            </div>
        </div>

        <!-- Decorative Glow -->
        <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent"></div>
    </section>
    {{-- END NEXT STEP SECTION  --}}
@endsection

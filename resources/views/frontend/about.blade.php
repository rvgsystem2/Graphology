@extends('component.main')
@section('content')
    <section class="relative bg-cover bg-center h-[50vh] flex items-center justify-center text-center px-6"
        style="background-image: url('https://cdn.pixabay.com/photo/2015/09/05/21/51/handwriting-926175_1280.jpg');">
        <div class="absolute inset-0 bg-black/60"></div>
        <!-- Content -->
        <div class="relative z-10 text-center text-white px-6">
            <h1 class="text-4xl md:text-5xl text-[#EBA35B] font-extrabold mb-4 font-[Poppins]">
                About Me
            </h1>
            <nav aria-label="breadcrumb">
                <ul class="flex items-center justify-center space-x-2 text-sm md:text-base">
                    <li><a href="/" class="text-[#EBA35B] hover:underline">Home</a></li>
                    <li class="text-white">/</li>
                    <li class="text-white/80">About </li>
                </ul>
            </nav>
        </div>
    </section>


    <!-- Hero Section -->


    <section class="bg-[#3E3229] text-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 py-16 lg:py-24">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

                <!-- Left: image / visual -->
                <div class="relative group">
                    <div
                        class="rounded-2xl overflow-hidden shadow-2xl ring-1 ring-black/20 transition transform group-hover:scale-[1.02]">
                        <img src="{{ asset('asset/img/about.jpg') }}"
                            alt="Handwriting analysis and wristwatch reading - Shivansh Dargarh"
                            class="w-full h-auto object-cover" />
                    </div>
                    <!-- small badge -->
                    <div
                        class="absolute bottom-4 left-4 bg-[#EBA35B] text-[#3E3229] px-4 py-1.5 rounded-full text-sm font-semibold shadow-md">
                        ⭐ Kanpur's Leading Graphologist
                    </div>
                </div>

                <!-- Right: content -->
                <div class="space-y-6">
                    <h2 class="text-3xl sm:text-4xl font-extrabold leading-tight tracking-tight">
                        Hi, I am <span class="text-[#EBA35B]">Shivansh Dargarh</span>
                    </h2>

                    <p class="text-neutral-200 max-w-prose leading-relaxed">
                        I help people discover their true personality through handwriting analysis and wristwatch
                        personality reading.
                        Over the years, I’ve worked with students, professionals, business owners, and couples — helping
                        them gain
                        clarity about their emotions, habits, and decision-making patterns.
                    </p>

                    <p class="text-neutral-300 leading-relaxed">
                        My journey began with a simple curiosity: how small details like the way someone writes or the kind
                        of watch they
                        wear can reveal so much about who they are. That curiosity became a deep study of graphology, and
                        today I’m proud
                        to be recognized as one of the best graphologists in Kanpur and a trusted handwriting analyst.
                    </p>

                    <!-- features list -->
                    <ul class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-6">
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-[#EBA35B]" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 00-1.414 0L8 12.586 4.707 9.293a1 1 0 10-1.414 1.414l4 4a1 1 0 001.414 0l8-8a1 1 0 000-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="text-sm text-neutral-200">Handwriting personality profiling</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-[#EBA35B]" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M2 5a2 2 0 012-2h3v2H4v10h12V5h-3V3h3a2 2 0 012 2v10a2 2 0 01-2 2H4a2 2 0 01-2-2V5z" />
                                <path d="M7 9h6v2H7V9z" />
                            </svg>
                            <span class="text-sm text-neutral-200">Wristwatch teller readings</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-[#EBA35B]" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 2a1 1 0 01.894.553l3.5 7a1 1 0 01-.088.995L10 18 5.694 11.549a1 1 0 01-.088-.995l3.5-7A1 1 0 0110 2z" />
                            </svg>
                            <span class="text-sm text-neutral-200">Career & personality guidance</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-[#EBA35B]" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11V6a1 1 0 10-2 0v2a1 1 0 00.293.707L10 9.414l.707-.707A1 1 0 0011 7z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="text-sm text-neutral-200">Couples & relationship insights</span>
                        </li>
                    </ul>

                    <!-- CTA -->
                    <div class="flex flex-wrap gap-4 mt-8">
                        <a href="#book"
                            class="inline-flex items-center gap-2 bg-[#EBA35B] text-[#3E3229] px-6 py-3 rounded-lg font-semibold shadow-md hover:opacity-95 transition">
                            📖 Book a Reading
                        </a>
                        <a href="#services"
                            class="inline-flex items-center gap-2 border border-neutral-600 px-5 py-3 rounded-lg text-sm text-neutral-200 hover:bg-neutral-700/40 transition">
                            📌 Learn More
                        </a>
                    </div>

                    <!-- small note -->
                    <p class="text-xs text-neutral-400 mt-4 max-w-[40ch]">
                        Accurate, compassionate readings — backed by years of study and real-life results. Sessions are
                        private and tailored to your goals.
                    </p>
                </div>
            </div>
        </div>
    </section>



    <!-- About Section -->
    <!-- My Mission section for Shivansh Dargarh -->
    <section id="mission" class="bg-[#2f2621] text-white">
        <div class="max-w-7xl mx-auto px-6 py-14 lg:py-20">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-10 items-start">
                <!-- Left: headline & intro -->
                <div class="lg:col-span-1 space-y-4">
                    <h3 class="text-3xl font-extrabold leading-tight">
                        My Mission
                    </h3>
                    <p class="text-neutral-300 max-w-prose">
                        I believe self-awareness is the first step toward transformation. Most people do not realize how
                        much
                        their handwriting and personal choices reveal about their inner strengths, fears, and potential.
                    </p>

                    <!-- small decorative card -->
                    <div
                        class="mt-4 inline-flex items-center gap-3 bg-[#EBA35B]/10 border border-[#EBA35B]/20 px-4 py-2 rounded-lg">
                        <svg class="w-5 h-5 text-[#EBA35B]" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                            <path d="M12 2v6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M12 22v-6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M4.2 7.6l3.9 2.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M19.8 16.4l-3.9-2.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                        <span class="text-sm text-neutral-200 font-medium">Sessions are private, compassionate &
                            result-driven</span>
                    </div>
                </div>

                <!-- Right: mission bullets -->
                <div class="lg:col-span-2">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <!-- Card template -->
                        <div class="bg-[#3b2f28] p-6 rounded-2xl shadow-md border border-neutral-800">
                            <div class="flex items-start gap-4">
                                <div
                                    class="flex-none w-11 h-11 rounded-lg bg-[#EBA35B]/10 ring-1 ring-[#EBA35B]/20 flex items-center justify-center">
                                    <svg class="w-6 h-6 text-[#EBA35B]" viewBox="0 0 24 24" fill="none"
                                        aria-hidden="true">
                                        <path d="M12 6v6l4 2" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                        <circle cx="12" cy="12" r="9" stroke="currentColor"
                                            stroke-width="1.2" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="text-lg font-semibold">Understand your personality</h4>
                                    <p class="text-sm text-neutral-300 mt-1">Understand your personality traits and
                                        behavioral patterns.</p>
                                </div>
                            </div>
                        </div>

                        <div class="bg-[#3b2f28] p-6 rounded-2xl shadow-md border border-neutral-800">
                            <div class="flex items-start gap-4">
                                <div
                                    class="flex-none w-11 h-11 rounded-lg bg-[#EBA35B]/10 ring-1 ring-[#EBA35B]/20 flex items-center justify-center">
                                    <svg class="w-6 h-6 text-[#EBA35B]" viewBox="0 0 24 24" fill="none"
                                        aria-hidden="true">
                                        <path d="M3 7h18" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round" />
                                        <path d="M6 12h12" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round" />
                                        <path d="M9 17h6" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="text-lg font-semibold">Discover strengths</h4>
                                    <p class="text-sm text-neutral-300 mt-1">Discover your hidden strengths and areas for
                                        improvement.</p>
                                </div>
                            </div>
                        </div>

                        <div class="bg-[#3b2f28] p-6 rounded-2xl shadow-md border border-neutral-800">
                            <div class="flex items-start gap-4">
                                <div
                                    class="flex-none w-11 h-11 rounded-lg bg-[#EBA35B]/10 ring-1 ring-[#EBA35B]/20 flex items-center justify-center">
                                    <svg class="w-6 h-6 text-[#EBA35B]" viewBox="0 0 24 24" fill="none"
                                        aria-hidden="true">
                                        <path d="M12 2v20" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round" />
                                        <path d="M2 12h20" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="text-lg font-semibold">Gain clarity</h4>
                                    <p class="text-sm text-neutral-300 mt-1">Gain clarity in career, relationships, and
                                        personal growth.</p>
                                </div>
                            </div>
                        </div>

                        <div class="bg-[#3b2f28] p-6 rounded-2xl shadow-md border border-neutral-800">
                            <div class="flex items-start gap-4">
                                <div
                                    class="flex-none w-11 h-11 rounded-lg bg-[#EBA35B]/10 ring-1 ring-[#EBA35B]/20 flex items-center justify-center">
                                    <svg class="w-6 h-6 text-[#EBA35B]" viewBox="0 0 24 24" fill="none"
                                        aria-hidden="true">
                                        <path d="M12 20c4.418 0 8-3.582 8-8s-3.582-8-8-8-8 3.582-8 8 3.582 8 8 8z"
                                            stroke="currentColor" stroke-width="1.2" />
                                        <path d="M8 12l2 2 4-4" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="text-lg font-semibold">Build confidence</h4>
                                    <p class="text-sm text-neutral-300 mt-1">Build confidence and improve communication.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Final CTA row -->
                    <div class="mt-8 flex flex-wrap items-center gap-4">
                        <a href="#book"
                            class="inline-flex items-center gap-2 bg-[#EBA35B] text-[#2f2621] px-5 py-3 rounded-lg font-medium shadow">
                            Book a Session
                        </a>
                        <a href="#contact" class="text-sm text-neutral-300 underline hover:text-neutral-100">Contact for
                            custom workshops</a>
                    </div>

                    <!-- small footnote -->
                    <p class="text-xs text-neutral-400 mt-4 max-w-xl">
                        Unlock your full potential and live with purpose — one handwriting stroke and one watch at a time.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Why People Call Me the Best Graphologist in Kanpur -->
    <section id="why-best" class="bg-[#3E3229] text-white">
        <div class="max-w-7xl mx-auto px-6 py-16 lg:py-24">
            <div class="text-center mb-12">
                <h2 class="text-3xl sm:text-4xl font-extrabold">
                    Why People Call Me the <span class="text-[#EBA35B]">Best Graphologist in Kanpur</span>
                </h2>
                <p class="mt-4 text-neutral-300 max-w-2xl mx-auto">
                    Over the years, I have built a trusted reputation for delivering accurate, personalized, and insightful
                    analyses.
                    People choose me because:
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Card -->
                <div class="bg-[#2f2621] p-6 rounded-2xl shadow-md border border-neutral-800">
                    <h4 class="text-lg font-semibold text-[#EBA35B] mb-2">Personalized Insights</h4>
                    <p class="text-neutral-300 text-sm">Every handwriting and wristwatch analysis is unique to you.</p>
                </div>

                <div class="bg-[#2f2621] p-6 rounded-2xl shadow-md border border-neutral-800">
                    <h4 class="text-lg font-semibold text-[#EBA35B] mb-2">Easy-to-Understand</h4>
                    <p class="text-neutral-300 text-sm">No complicated terms, just clear and simple insights.</p>
                </div>

                <div class="bg-[#2f2621] p-6 rounded-2xl shadow-md border border-neutral-800">
                    <h4 class="text-lg font-semibold text-[#EBA35B] mb-2">Holistic Approach</h4>
                    <p class="text-neutral-300 text-sm">Combining handwriting analysis with wristwatch personality reading.
                    </p>
                </div>

                <div class="bg-[#2f2621] p-6 rounded-2xl shadow-md border border-neutral-800">
                    <h4 class="text-lg font-semibold text-[#EBA35B] mb-2">Confidential Sessions</h4>
                    <p class="text-neutral-300 text-sm">Every consultation is private, respectful, and comfortable.</p>
                </div>

                <div class="bg-[#2f2621] p-6 rounded-2xl shadow-md border border-neutral-800">
                    <h4 class="text-lg font-semibold text-[#EBA35B] mb-2">Trusted Expertise</h4>
                    <p class="text-neutral-300 text-sm">Recognized as the best handwriting analyst and wristwatch teller
                        expert in Kanpur.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- How I Can Help You -->
    <section id="help" class="bg-[#2f2621] text-white">
        <div class="max-w-7xl mx-auto px-6 py-16 lg:py-24">
            <div class="text-center mb-12">
                <h2 class="text-3xl sm:text-4xl font-extrabold">
                    How I Can <span class="text-[#EBA35B]">Help You</span>
                </h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Item -->
                <div class="flex gap-4 items-start bg-[#3b2f28] p-6 rounded-2xl border border-neutral-800">
                    <div
                        class="w-11 h-11 rounded-lg bg-[#EBA35B]/10 flex items-center justify-center text-[#EBA35B] font-bold text-lg">
                        1</div>
                    <div>
                        <h4 class="text-lg font-semibold">Handwriting Analysis</h4>
                        <p class="text-sm text-neutral-300 mt-1">Understand your emotions, mindset, and personality.</p>
                    </div>
                </div>

                <div class="flex gap-4 items-start bg-[#3b2f28] p-6 rounded-2xl border border-neutral-800">
                    <div
                        class="w-11 h-11 rounded-lg bg-[#EBA35B]/10 flex items-center justify-center text-[#EBA35B] font-bold text-lg">
                        2</div>
                    <div>
                        <h4 class="text-lg font-semibold">Personality Analysis</h4>
                        <p class="text-sm text-neutral-300 mt-1">Get a complete profile of your traits, strengths, and
                            weaknesses.</p>
                    </div>
                </div>

                <div class="flex gap-4 items-start bg-[#3b2f28] p-6 rounded-2xl border border-neutral-800">
                    <div
                        class="w-11 h-11 rounded-lg bg-[#EBA35B]/10 flex items-center justify-center text-[#EBA35B] font-bold text-lg">
                        3</div>
                    <div>
                        <h4 class="text-lg font-semibold">Wristwatch Personality Reading</h4>
                        <p class="text-sm text-neutral-300 mt-1">Discover what your choice of watch reveals about you.</p>
                    </div>
                </div>

                <div class="flex gap-4 items-start bg-[#3b2f28] p-6 rounded-2xl border border-neutral-800">
                    <div
                        class="w-11 h-11 rounded-lg bg-[#EBA35B]/10 flex items-center justify-center text-[#EBA35B] font-bold text-lg">
                        4</div>
                    <div>
                        <h4 class="text-lg font-semibold">Personal Growth Guidance</h4>
                        <p class="text-sm text-neutral-300 mt-1">Build self-confidence, improve relationships, and make
                            better decisions.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Let Us Connect Section -->
    <section id="contact" class="bg-[#3E3229] text-white">
        <div class="max-w-7xl mx-auto px-6 py-16 lg:py-24">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

                <!-- Left: Content -->
                <div class="space-y-6">
                    <h2 class="text-3xl sm:text-4xl font-extrabold">
                        Let Us <span class="text-[#EBA35B]">Connect</span>
                    </h2>
                    <p class="text-neutral-300">
                        Your handwriting and wristwatch hold secrets about you, and I am here to help you uncover them.
                        If you want a personalized handwriting analysis or a wristwatch reading from the
                        <span class="text-[#EBA35B] font-semibold">best graphologist in Kanpur</span>, let us connect.
                    </p>

                    <div class="space-y-4">
                        <p class="flex items-center gap-3">
                            <svg class="w-6 h-6 text-[#EBA35B]" fill="none" stroke="currentColor" stroke-width="1.5"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 2C8.13 2 5 5.13 5 9c0 7 7 13 7 13s7-6 7-13c0-3.87-3.13-7-7-7z" />
                                <circle cx="12" cy="9" r="2.5" fill="currentColor" />
                            </svg>
                            <span>Kanpur, India</span>
                        </p>

                        <p class="flex items-center gap-3">
                            <svg class="w-6 h-6 text-[#EBA35B]" fill="none" stroke="currentColor" stroke-width="1.5"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 6.75l8.954 5.364a1.5 1.5 0 001.592 0L21.75 6.75M3.75 19.5h16.5a1.5 1.5 0 001.5-1.5v-9a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 9v9a1.5 1.5 0 001.5 1.5z" />
                            </svg>
                            <span>shivanshdargarhlts@gmail.com</span>
                        </p>

                        <p class="flex items-center gap-3">
                            <svg class="w-6 h-6 text-[#EBA35B]" fill="none" stroke="currentColor" stroke-width="1.5"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2 5.75a.75.75 0 01.75-.75h2.39a.75.75 0 01.74.63l.59 3.53a.75.75 0 01-.43.79l-1.48.74a11.04 11.04 0 006.34 6.34l.74-1.48a.75.75 0 01.79-.43l3.53.59a.75.75 0 01.63.74v2.39a.75.75 0 01-.75.75H17A15 15 0 012 5.75z" />
                            </svg>
                            <span>+91 94527 73435</span>
                        </p>
                    </div>

                    <p class="mt-6 text-sm text-neutral-400 italic">
                        “Your story is already written in your handwriting and your timepiece.
                        Let me help you read it.”
                    </p>
                </div>

                <!-- Right: Contact Form -->
                <div class="bg-[#2f2621] p-8 rounded-2xl shadow-lg border border-neutral-800">
                    <h3 class="text-xl font-semibold mb-6 text-center text-[#EBA35B]">Send a Message</h3>
                    <form action="#" method="POST" class="space-y-5">
                        <div>
                            <label for="name" class="block text-sm font-medium text-neutral-300 mb-1">Name</label>
                            <input type="text" id="name" name="name" placeholder="Your Name"
                                class="w-full px-4 py-3 rounded-lg bg-transparent border border-neutral-600 text-white placeholder-neutral-400 focus:ring-2 focus:ring-[#EBA35B] focus:outline-none">
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium text-neutral-300 mb-1">Email</label>
                            <input type="email" id="email" name="email" placeholder="you@example.com"
                                class="w-full px-4 py-3 rounded-lg bg-transparent border border-neutral-600 text-white placeholder-neutral-400 focus:ring-2 focus:ring-[#EBA35B] focus:outline-none">
                        </div>
                        <div>
                            <label for="message" class="block text-sm font-medium text-neutral-300 mb-1">Message</label>
                            <textarea id="message" name="message" rows="4" placeholder="Write your message..."
                                class="w-full px-4 py-3 rounded-lg bg-transparent border border-neutral-600 text-white placeholder-neutral-400 focus:ring-2 focus:ring-[#EBA35B] focus:outline-none"></textarea>
                        </div>
                        <button type="submit"
                            class="w-full bg-[#EBA35B] text-[#3E3229] font-semibold py-3 px-6 rounded-lg shadow hover:opacity-90 transition">
                            Send Message
                        </button>
                    </form>
                </div>

            </div>
        </div>
    </section>
@endsection

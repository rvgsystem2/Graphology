@extends('component.main')
@section('content')
    <!-- HERO SECTION -->
    <section class="relative bg-cover bg-center h-[50vh] flex items-center justify-center text-center px-6"
        style="background-image: url('https://cdn.pixabay.com/photo/2015/09/05/21/51/handwriting-926175_1280.jpg');">
        <div class="absolute inset-0 bg-black/60"></div>
        <!-- Content -->
        <div class="relative z-10 text-center text-white px-6">
            <h1 class="text-4xl md:text-5xl text-[#EBA35B] font-extrabold mb-4 font-[Poppins]">
                Consultation Services
            </h1>
            <nav aria-label="breadcrumb">
                <ul class="flex items-center justify-center space-x-2 text-sm md:text-base">
                    <li><a href="/" class="text-[#EBA35B] hover:underline">Home</a></li>
                    <li class="text-white">/</li>
                    <li class="text-white/80">Consultation</li>
                </ul>
            </nav>
        </div>
    </section>
    {{-- CONSULTATION PAGE --}}
    <section class="bg-[#3E3229] min-h-screen py-16 px-6 md:px-12 lg:px-24">
        <div class="max-w-6xl mx-auto space-y-16">

            <!-- Page Header -->
            <div class="text-center space-y-4">
                <h1 class="text-4xl md:text-5xl font-bold text-[#EBA35B]">Book a Consultation</h1>
                <p class="text-gray-300 max-w-2xl mx-auto">
                    Unlock the secrets hidden in your handwriting and wristwatch.
                    Begin your journey toward <span class="font-semibold text-[#EBA35B]">self-discovery and
                        transformation</span> with Shivansh Dargarh.
                </p>
            </div>

            <!-- Two Column Layout -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start ">


                 <!-- Right: Booking Form -->
                 <div class="bg-[#524439]/90 rounded-2xl shadow-xl p-4 md:p-8 lg:p-10 border border-[#EBA35B]/30 ">
                    <h2 class="text-2xl font-bold text-[#EBA35B] mb-6 text-center">Book Your Session</h2>

                            <!-- Booking Form -->
                            <form action="{{route('consultation.store')}}" method="post" class="space-y-6" id="bookingForm">
                                @csrf
                                <!-- Full Name -->
                                <div>
                                    <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
                                    <input type="text" id="name" name="name" required
                                        class="w-full border border-gray-300 rounded-md px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#EBA35B] transition duration-200 bg-transparent text-white"  />
                                </div>

                                <!-- Email -->
                                <div>
                                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                                    <input type="email" id="email" name="email" required
                                        class="w-full border border-gray-300 rounded-md px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#EBA35B] transition duration-200 bg-transparent text-white" />
                                </div>

                                <!-- Phone Number -->
                                <div>
                                    <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Phone Number</label>
                                    <input type="tel" id="phone" name="phone"
                                        class="w-full border border-gray-300 rounded-md px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#EBA35B] transition duration-200 bg-transparent text-white" />
                                </div>

                                <!-- Date and Time Grid -->
                                <div class="grid md:grid-cols-2 gap-6">
                                    <!-- Preferred Date -->
                                    <div>
                                        <label for="date" class="block text-sm font-medium text-gray-700 mb-1">Preferred Date</label>
                                        <input type="date" id="date" name="date" required
                                            class="w-full border border-gray-300 rounded-md px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#EBA35B] transition duration-200 bg-transparent text-white" />
                                    </div>

                                    <!-- Preferred Time -->
                                    <div>
                                        <label for="time" class="block text-sm font-medium text-gray-700 mb-1">Preferred Time</label>
                                        <input type="time" id="time" name="time" required
                                            class="w-full border border-gray-300 rounded-md px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#EBA35B] transition duration-200 bg-transparent text-white" />
                                    </div>
                                </div>

                                <!-- Additional Notes -->
                                <div>
                                    <label for="notes" class="block text-sm font-medium text-gray-700 mb-1">Additional Notes</label>
                                    <textarea id="notes" name="notes" rows="4"
                                        placeholder="Tell us more about your needs..."
                                        class="w-full border border-gray-300 rounded-md px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#EBA35B] transition duration-200 bg-transparent text-white"></textarea>
                                </div>

                                <!-- Submit Button -->
                                <div>
                                    <button type="submit"
                                        class="w-full bg-[#EBA35B] text-white py-3 rounded-lg font-semibold text-lg hover:bg-[#c97c36] transition duration-200">
                                        Confirm Booking
                                    </button>
                                </div>

                            </form>

                </div>

                <!-- Left: Info Section -->
                <div class="space-y-10">

                    <!-- Handwriting Analysis -->
                    <div class="bg-[#524439]/80 p-4 md:p-8 rounded-2xl shadow-lg border border-[#EBA35B]/20 space-y-4">
                        <h2 class="text-2xl font-semibold text-[#EBA35B]">Handwriting Analysis</h2>
                        <p class="text-gray-200 leading-relaxed">
                            Discover your true personality through the strokes of your handwriting.
                            Understand strengths, weaknesses, and behavioral patterns that shape your decisions and life
                            journey.
                        </p>
                        <ul class="list-disc list-inside text-gray-300 space-y-1">
                            <li>Gain clarity about emotions & mindset</li>
                            <li>Improve confidence & communication</li>
                            <li>Understand decision-making patterns</li>
                        </ul>
                    </div>

                    <!-- Wristwatch Analysis -->
                    <div class="bg-[#524439]/80 p-4 md:p-8 rounded-2xl shadow-lg border border-[#EBA35B]/20 space-y-4">
                        <h2 class="text-2xl font-semibold text-[#EBA35B]">Wristwatch Analysis</h2>
                        <p class="text-gray-200 leading-relaxed">
                            Every watch tells a story. Your choice of wristwatch reveals priorities,
                            thinking style, and hidden aspects of your personality.
                        </p>
                        <ul class="list-disc list-inside text-gray-300 space-y-1">
                            <li>Reveal subconscious preferences</li>
                            <li>Understand life goals & priorities</li>
                            <li>Gain insights into compatibility</li>
                        </ul>
                    </div>

                </div>


            </div>

            <!-- Contact Info -->
            <div class="text-center space-y-2">
                <p class="text-gray-300"><span class="font-semibold text-[#EBA35B]">Contact:</span> <a
                        href="tel:+919517291500" class="hover:underline">+91 95172 91500</a></p>
                <p class="text-gray-300"><span class="font-semibold text-[#EBA35B]">Email:</span> <a
                        href="mailto:shivanshdargarhlts@gmail.com" class="hover:underline">shivanshdargarhlts@gmail.com</a>
                </p>
            </div>

        </div>
    </section>

@endsection

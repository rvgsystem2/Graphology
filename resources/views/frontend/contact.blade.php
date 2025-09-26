@extends('component.main')
@section('content')
    <!-- HERO SECTION -->
    <section class="relative bg-cover bg-center h-[50vh] flex items-center justify-center text-center px-6"
        style="background-image: url('https://cdn.pixabay.com/photo/2015/09/05/21/51/handwriting-926175_1280.jpg');">
        <div class="absolute inset-0 bg-black/60"></div>
        <!-- Content -->
        <div class="relative z-10 text-center text-white px-6">
            <h1 class="text-4xl md:text-5xl text-[#EBA35B] font-extrabold mb-4 font-[Poppins]">
                Contact With Me
            </h1>
            <nav aria-label="breadcrumb">
                <ul class="flex items-center justify-center space-x-2 text-sm md:text-base">
                    <li><a href="/" class="text-[#EBA35B] hover:underline">Home</a></li>
                    <li class="text-white">/</li>
                    <li class="text-white/80">Contact</li>
                </ul>
            </nav>
        </div>
    </section>
    {{-- CONTACT PAGE --}}
    <section class="relative bg-[#3E3229] py-20 px-6 md:px-12 lg:px-24">
        <div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-12 items-center">

            <!-- Left: Contact Info -->
            <div class="space-y-8">
                <h2 class="text-3xl md:text-4xl font-bold text-[#EBA35B]">Get in Touch</h2>
                <p class="text-gray-300 leading-relaxed">
                    Have questions or want to book a session? We’d love to hear from you.
                    Reach out and let’s unlock the insights hidden in your handwriting and wristwatch.
                </p>

                <!-- Contact Details -->
                <div class="space-y-6">
                    <div class="flex items-center gap-4">
                        <span class="bg-[#EBA35B]/20 p-3 rounded-full">
                            <i class="fa-solid fa-phone text-[#EBA35B]"></i>
                        </span>
                        <div>
                            <p class="text-sm text-gray-400">Phone</p>
                            <a href="tel:+919517291500"
                                class="text-sm md:text-lg font-semibold text-gray-100 hover:text-[#EBA35B] transition">
                                +91 95172 91500
                            </a>
                        </div>
                    </div>

                    <div class="flex items-center gap-4">
                        <span class="bg-[#EBA35B]/20 p-3 rounded-full">
                            <i class="fa-solid fa-envelope text-[#EBA35B]"></i>
                        </span>
                        <div>
                            <p class="text-sm text-gray-400">Email</p>
                            <a href="mailto:shivanshdargarhlts@gmail.com"
                                class="text-sm md:text-lg font-semibold text-gray-100 hover:text-[#EBA35B] transition">
                                shivanshdargarhlts@gmail.com
                            </a>
                        </div>
                    </div>

                    <div class="flex items-center gap-4">
                        <span class="bg-[#EBA35B]/20 p-3 rounded-full">
                            <i class="fa-solid fa-location-dot text-[#EBA35B]"></i>
                        </span>
                        <div>
                            <p class="text-sm text-gray-400">Location</p>
                            <p class="text-sm md:text-lg font-semibold text-gray-100">Kanpur, Uttar Pradesh, India</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right: Contact Form -->
            <div class="bg-[#524439]/70 p-8 rounded-2xl shadow-lg">
                <h3 class="text-2xl font-semibold text-[#EBA35B] mb-6">Send a Message</h3>
                <form action="{{route('contact.store')}}" method="post" class="space-y-5">
                    @csrf
                    <div>
                        <label for="name" class="block text-gray-200 mb-2">Name</label>
                        <input type="text" id="name" name="name" required
                            class="w-full px-4 py-3 bg-transparent border border-gray-500 rounded-lg text-gray-100 placeholder-gray-400 focus:ring-2 focus:ring-[#EBA35B] focus:outline-none">
                    </div>
                    <div>
                        <label for="email" class="block text-gray-200 mb-2">Email</label>
                        <input type="email" id="email" name="email" required
                            class="w-full px-4 py-3 bg-transparent border border-gray-500 rounded-lg text-gray-100 placeholder-gray-400 focus:ring-2 focus:ring-[#EBA35B] focus:outline-none">
                    </div>
                    <div>
                        <label for="message" class="block text-gray-200 mb-2">Message</label>
                        <textarea id="message" name="message" rows="5" required
                            class="w-full px-4 py-3 bg-transparent border border-gray-500 rounded-lg text-gray-100 placeholder-gray-400 focus:ring-2 focus:ring-[#EBA35B] focus:outline-none"></textarea>
                    </div>
                    <button type="submit"
                        class="w-full py-3 bg-[#EBA35B] text-[#3E3229] font-semibold rounded-lg shadow-lg hover:bg-[#d88f4f] transition">
                        Send Message
                    </button>
                </form>
            </div>
        </div>

        <!-- Map -->
        <div class="max-w-7xl mx-auto mt-16">
            <iframe class="w-full h-72 rounded-xl shadow-lg border-2 border-[#EBA35B]/40"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3559.646628504126!2d80.33187117486796!3d26.44715428001901!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399c3838c0193d4b%3A0xecd5e31c2e2942f0!2sKanpur%2C%20Uttar%20Pradesh!5e0!3m2!1sen!2sin!4v1693999999999"
                allowfullscreen="" loading="lazy"></iframe>
        </div>
    </section>
@endsection

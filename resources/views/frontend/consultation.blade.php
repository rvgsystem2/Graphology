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



                 <!-- Right: Booking Form -->
                 <div class="bg-[#524439]/90 rounded-2xl shadow-xl p-4 md:p-8 lg:p-10 border border-[#EBA35B]/30 ">
                    {{-- <h2 class="text-2xl font-bold text-[#EBA35B] mb-6 text-center">Book Your Session</h2> --}}

                            <!-- Booking Form -->
                            <form action="{{route('consultation.store')}}" method="post" class="space-y-6" id="bookingForm">
                                @csrf
                                <!-- Full Name -->
                                <div>
                                    <label for="name" class="block text-sm font-medium text-gray-100 mb-1">Full Name</label>
                                    <input type="text" id="name" name="name" required
                                        class="w-full border border-gray-300 rounded-md px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#EBA35B] transition duration-200 bg-transparent text-white"  />
                                </div>

                                <!-- Email -->
                                <div>
                                    <label for="email" class="block text-sm font-medium text-gray-100 mb-1">Email Address</label>
                                    <input type="email" id="email" name="email" required
                                        class="w-full border border-gray-300 rounded-md px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#EBA35B] transition duration-200 bg-transparent text-white" />
                                </div>

                                <!-- Phone Number -->
                                <div>
                                    <label for="phone" class="block text-sm font-medium text-gray-100 mb-1">Phone Number</label>
                                    <input type="tel" id="phone" name="phone"
                                        class="w-full border border-gray-300 rounded-md px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#EBA35B] transition duration-200 bg-transparent text-white" />
                                </div>

                                <!-- Date and Time Grid -->
                                <div class="grid md:grid-cols-2 gap-6">
                                    <!-- Preferred Date -->
                                    <div>
                                        <label for="date" class="block text-sm font-medium text-gray-100 mb-1">Prefred Date</label>
                                        <input type="date" id="date" name="date" required
                                            class="w-full border border-gray-300 rounded-md px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#EBA35B] transition duration-200 bg-transparent text-white" />
                                    </div>

                                    <!-- Preferred Time -->
                                    <div>
                                        <label for="time" class="block text-sm font-medium text-gray-100 mb-1">Prefred Time</label>
                                        <input type="time" id="time" name="time" required
                                            class="w-full border border-gray-300 rounded-md px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#EBA35B] transition duration-200 bg-transparent text-white" />
                                    </div>
                                </div>

                                <!-- Additional Notes -->
                                <div>
                                    <label for="notes" class="block text-sm font-medium text-gray-100 mb-1">Additional Notes</label>
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



        </div>
    </section>

@endsection

@extends('component.main')
@section('content')

<section class="py-16 bg-[#3E3229]">
    <div class="max-w-3xl mx-auto bg-white shadow-lg rounded-xl p-8 md:p-10 mt-12">

        <!-- Heading -->
        <h2 class="text-3xl font-bold text-center text-[#EBA35B] mb-6">
            Book Your Appointment
        </h2>

        <!-- Description (optional) -->
        <p class="text-center text-gray-600 mb-10">
            Fill out the form below to schedule your appointment. We’ll get back to you shortly with a confirmation.
        </p>

        <!-- Booking Form -->
        <form class="space-y-6" id="bookingForm">

            <!-- Full Name -->
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
                <input type="text" id="name" name="name" required
                    class="w-full border border-gray-300 rounded-md px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#EBA35B] transition duration-200" />
            </div>

            <!-- Email -->
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                <input type="email" id="email" name="email" required
                    class="w-full border border-gray-300 rounded-md px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#EBA35B] transition duration-200" />
            </div>

            <!-- Phone Number -->
            <div>
                <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Phone Number</label>
                <input type="tel" id="phone" name="phone"
                    class="w-full border border-gray-300 rounded-md px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#EBA35B] transition duration-200" />
            </div>

            <!-- Date and Time Grid -->
            <div class="grid md:grid-cols-2 gap-6">
                <!-- Preferred Date -->
                <div>
                    <label for="date" class="block text-sm font-medium text-gray-700 mb-1">Preferred Date</label>
                    <input type="date" id="date" name="date" required
                        class="w-full border border-gray-300 rounded-md px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#EBA35B] transition duration-200" />
                </div>

                <!-- Preferred Time -->
                <div>
                    <label for="time" class="block text-sm font-medium text-gray-700 mb-1">Preferred Time</label>
                    <input type="time" id="time" name="time" required
                        class="w-full border border-gray-300 rounded-md px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#EBA35B] transition duration-200" />
                </div>
            </div>

            <!-- Additional Notes -->
            <div>
                <label for="notes" class="block text-sm font-medium text-gray-700 mb-1">Additional Notes</label>
                <textarea id="notes" name="notes" rows="4"
                    placeholder="Tell us more about your needs..."
                    class="w-full border border-gray-300 rounded-md px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#EBA35B] transition duration-200"></textarea>
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
</section>

@endsection

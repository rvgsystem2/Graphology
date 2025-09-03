@extends('component.main')
@section('content')
    <!-- HERO SECTION -->
    <section class="relative bg-cover bg-center h-[50vh] flex items-center justify-center text-center px-6"
        style="background-image: url('https://cdn.pixabay.com/photo/2015/09/05/21/51/handwriting-926175_1280.jpg');">
        <div class="absolute inset-0 bg-black/60"></div>
        <!-- Content -->
        <div class="relative z-10 text-center text-white px-6">
            <h1 class="text-4xl md:text-5xl text-[#EBA35B] font-extrabold mb-4 font-[Poppins]">
                Grapho Remedy
            </h1>
            <nav aria-label="breadcrumb">
                <ul class="flex items-center justify-center space-x-2 text-sm md:text-base">
                    <li><a href="/" class="text-[#EBA35B] hover:underline">Home</a></li>
                    <li class="text-white">/</li>
                    <li class="text-white/80">Grapho-Remedy</li>
                </ul>
            </nav>
        </div>
    </section>
    <!-- Grapho Remedy Page -->
    <section class="bg-[#3E3229] py-16 px-6 md:px-12 lg:px-20">
        <div class="max-w-7xl mx-auto space-y-16">

            <!-- Hero -->
            <div class="text-center space-y-6">
                <h1 class="text-4xl md:text-5xl font-bold text-[#EBA35B]">Grapho Remedies</h1>
                <p class="text-lg md:text-xl text-gray-300 max-w-3xl mx-auto">
                    Transform your handwriting, transform your life. Grapho Remedies help you improve habits,
                    boost confidence, and unlock hidden potential by consciously reshaping your writing strokes.
                </p>
            </div>

            <!-- How It Works -->
            <div class="bg-[#524439]/70 p-4 md:p-10 rounded-2xl shadow-xl space-y-6">
                <h2 class="text-2xl font-semibold text-[#EBA35B]">How Grapho Remedies Work</h2>
                <ul class="space-y-3 text-gray-200 list-disc list-inside">
                    <li>Identify negative patterns in your handwriting</li>
                    <li>Introduce corrective strokes to reprogram your subconscious mind</li>
                    <li>Practice specific writing drills designed for transformation</li>
                    <li>Experience positive changes in mindset, confidence, and life outcomes</li>
                </ul>
            </div>

            <!-- Remedies Sections -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                <!-- Confidence -->
                <div class="bg-[#524439]/70 p-4 md:p-8 rounded-2xl shadow-lg space-y-4">
                    <h3 class="text-xl font-semibold text-[#EBA35B]">Boost Self-Confidence</h3>
                    <p class="text-gray-300">
                        Through grapho therapy, you can strengthen strokes that build self-belief and
                        eliminate patterns of self-doubt. Gradually, your confidence will reflect in both handwriting
                        and personality.
                    </p>
                </div>

                <!-- Focus -->
                <div class="bg-[#524439]/70 p-4 md:p-8 rounded-2xl shadow-lg space-y-4">
                    <h3 class="text-xl font-semibold text-[#EBA35B]">Improve Focus & Clarity</h3>
                    <p class="text-gray-300">
                        Grapho remedies help in developing a sharper, goal-oriented mindset by aligning
                        strokes with clarity, discipline, and better concentration.
                    </p>
                </div>

                <!-- Stress Relief -->
                <div class="bg-[#524439]/70 p-4 md:p-8 rounded-2xl shadow-lg space-y-4">
                    <h3 class="text-xl font-semibold text-[#EBA35B]">Reduce Stress & Anxiety</h3>
                    <p class="text-gray-300">
                        Handwriting modifications can rewire your subconscious, bringing calmness, emotional
                        stability, and stress relief through simple yet powerful exercises.
                    </p>
                </div>

                <!-- Success Mindset -->
                <div class="bg-[#524439]/70 p-4 md:p-8 rounded-2xl shadow-lg space-y-4">
                    <h3 class="text-xl font-semibold text-[#EBA35B]">Develop a Success Mindset</h3>
                    <p class="text-gray-300">
                        Shape your strokes to cultivate positivity, ambition, and perseverance, helping
                        you align with success in both personal and professional life.
                    </p>
                </div>
            </div>

            <!-- Who Can Benefit -->
            <div class="bg-[#524439]/70 p-4 md:p-10 rounded-2xl shadow-xl space-y-6">
                <h2 class="text-2xl font-semibold text-[#EBA35B]">Who Can Benefit?</h2>
                <ul class="space-y-3 text-gray-200 list-disc list-inside">
                    <li>Students aiming for better concentration and academic success</li>
                    <li>Professionals seeking confidence and leadership growth</li>
                    <li>Individuals dealing with stress, anxiety, or emotional imbalance</li>
                    <li>Anyone looking for personal development through handwriting transformation</li>
                </ul>
            </div>

            <!-- Call to Action -->
            <div class="text-center bg-[#EBA35B]/10 border border-[#EBA35B]/40 rounded-2xl shadow-xl p-4 md:p-12 space-y-6">
                <h2 class="text-3xl font-bold text-[#EBA35B]">Begin Your Grapho Remedy Journey</h2>
                <p class="text-gray-200 max-w-2xl mx-auto">
                    Every stroke has the power to change your destiny. Book your Grapho Remedy session
                    with <span class="font-semibold text-[#EBA35B]">Shivansh Dargarh</span> today and take the first
                    step towards a transformed life.
                </p>
                <div class="space-y-2">
                    <p><span class="font-semibold text-[#EBA35B]">Contact:</span> <a href="tel:+919517291500" class="hover:underline text-white">+91
                            95172 91500</a></p>
                    <p><span class="font-semibold text-[#EBA35B]">Email:</span> <a href="mailto:shivanshdargarhlts@gmail.com"
                            class="hover:underline text-white">shivanshdargarhlts@gmail.com</a></p>
                </div>
                <a href="mailto:shivanshdargarhlts@gmail.com"
                    class="inline-block px-8 py-3 bg-[#EBA35B] text-[#3E3229] font-semibold rounded-full shadow-lg hover:bg-[#d88f4f] transition">
                    Book a Session
                </a>
            </div>
        </div>
    </section>
@endsection

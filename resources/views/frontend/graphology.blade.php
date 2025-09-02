@extends('component.main')
@section('content')



  <!-- HERO SECTION -->
  <section class="relative bg-cover bg-center h-[50vh] flex items-center justify-center text-center px-6"
           style="background-image: url('https://cdn.pixabay.com/photo/2015/09/05/21/51/handwriting-926175_1280.jpg');">
    <div class="absolute inset-0 bg-black/60"></div>
      <!-- Content -->
      <div class="relative z-10 text-center text-white px-6">
        <h1 class="text-4xl md:text-5xl text-[#EBA35B] font-extrabold mb-4 font-[Poppins]">
            Graphology Services
        </h1>
        <nav aria-label="breadcrumb">
            <ul class="flex items-center justify-center space-x-2 text-sm md:text-base">
                <li><a href="/" class="text-[#EBA35B] hover:underline">Home</a></li>
                <li class="text-white">/</li>
                <li class="text-white/80">Graphology</li>
            </ul>
        </nav>
    </div>
  </section>

  <!-- ABOUT GRAPHOLGY -->
  <section id="services" class="relative py-20 bg-gradient-to-b from-[#3E3229] via-[#2C241F] to-[#3E3229] overflow-hidden">
    <div class="max-w-7xl mx-auto px-6 lg:px-12 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

      <!-- Left Content -->
      <div class="space-y-6 text-center lg:text-left">
        <h2 class="text-4xl md:text-5xl font-extrabold text-[#EBA35B] tracking-wide">
          Graphology Services
        </h2>
        <p class="text-gray-300 text-lg leading-relaxed">
          Your handwriting is more than just letters on paper. Every stroke, curve, and space you create reflects your
          <span class="text-[#EBA35B] font-semibold">thoughts, emotions, and personality traits</span>.
        </p>
        <p class="text-gray-400 leading-relaxed">
          At <span class="text-[#EBA35B] font-semibold">Shivansh Dargarh Transformation</span>, we specialize in graphology — the science of understanding personality through handwriting.
          With years of expertise, I have helped hundreds of people unlock their hidden strengths, weaknesses, and potential using advanced handwriting analysis techniques.
        </p>

        <!-- Highlighted Points -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-6">
          <div class="p-4 bg-[#EBA35B]/10 rounded-xl hover:bg-[#EBA35B]/20 transition">
            <h4 class="text-[#EBA35B] font-semibold">Self-Awareness</h4>
            <p class="text-gray-300 text-sm">Understand your personality traits & emotional patterns.</p>
          </div>
          <div class="p-4 bg-[#EBA35B]/10 rounded-xl hover:bg-[#EBA35B]/20 transition">
            <h4 class="text-[#EBA35B] font-semibold">Personal Growth</h4>
            <p class="text-gray-300 text-sm">Unlock hidden strengths & improve relationships.</p>
          </div>
        </div>

        <!-- CTA Button -->
        <div class="mt-8">
          <a href="#contact"
             class="inline-block px-6 py-3 bg-[#EBA35B] text-[#3E3229] font-semibold rounded-full shadow-md hover:bg-[#d38c44] transition">
            Book Your Session
          </a>
        </div>
      </div>

      <!-- Right Image -->
      <div class="relative">
        <img src="https://cdn.pixabay.com/photo/2024/11/29/17/18/ai-generated-9233355_1280.png"
             alt="Graphology Services"
             class="w-full rounded-2xl shadow-2xl transform hover:scale-105 transition duration-500">
        <!-- Glow Effect -->
        <div class="absolute inset-0 bg-gradient-to-tr from-[#EBA35B]/20 via-transparent to-transparent rounded-2xl"></div>
      </div>
    </div>
  </section>


<!-- WHY CHOOSE GRAPHOLGY -->
<section id="why" class="relative py-20 px-6 lg:px-24 bg-gradient-to-b from-[#3E3229] to-[#2C241F]">
    <div class="max-w-6xl mx-auto">
      <h2 class="text-4xl font-extrabold text-[#EBA35B] mb-12 text-center tracking-wide">
        Why Choose Graphology
      </h2>

      <div class="grid md:grid-cols-2 gap-10 items-center text-gray-200">
        <!-- Left: Bullet Points -->
        <ul class="space-y-5 text-lg">
          <li class="flex items-start gap-3">
            <span class="text-[#EBA35B] text-xl">✔</span>
            <span>Understand your personality traits and emotional patterns</span>
          </li>
          <li class="flex items-start gap-3">
            <span class="text-[#EBA35B] text-xl">✔</span>
            <span>Gain clarity about your strengths and challenges</span>
          </li>
          <li class="flex items-start gap-3">
            <span class="text-[#EBA35B] text-xl">✔</span>
            <span>Improve self-awareness and build confidence</span>
          </li>
          <li class="flex items-start gap-3">
            <span class="text-[#EBA35B] text-xl">✔</span>
            <span>Make better career and relationship decisions</span>
          </li>
          <li class="flex items-start gap-3">
            <span class="text-[#EBA35B] text-xl">✔</span>
            <span>Overcome mental and emotional blocks</span>
          </li>
        </ul>

        <!-- Right: Highlight Box -->
        <div class="relative bg-[#524439] p-8 rounded-2xl shadow-xl hover:scale-105 transition-transform">
          <p class="text-lg leading-relaxed">
            Graphology gives you a deeper understanding of yourself and others.
            With personalized handwriting evaluation, I guide you toward
            <span class="text-[#EBA35B] font-semibold">personal growth, clarity, and transformation</span>.
          </p>
          <div class="absolute inset-0 rounded-2xl border border-[#EBA35B]/30 pointer-events-none"></div>
        </div>
      </div>
    </div>
  </section>

  <!-- WHY TRUST -->
  <section id="trust" class="py-20 px-6 lg:px-24 bg-[#3E3229] relative">
    <div class="max-w-6xl mx-auto text-center">
      <h2 class="text-4xl font-extrabold text-[#EBA35B] mb-12 tracking-wide">
        Why People Trust Shivansh Dargarh
      </h2>

      <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 text-gray-200">
        <!-- Card -->
        <div class="bg-[#524439] p-8 rounded-2xl shadow-xl hover:translate-y-[-6px] hover:shadow-2xl transition">
          <h3 class="text-xl font-semibold mb-3 text-[#EBA35B]">Expertise</h3>
          <p class="text-gray-300">Experienced graphologist with in-depth knowledge and proven techniques.</p>
        </div>
        <!-- Card -->
        <div class="bg-[#524439] p-8 rounded-2xl shadow-xl hover:translate-y-[-6px] hover:shadow-2xl transition">
          <h3 class="text-xl font-semibold mb-3 text-[#EBA35B]">Recognition</h3>
          <p class="text-gray-300">Recognized as one of the best graphologists in Kanpur with trusted reputation.</p>
        </div>
        <!-- Card -->
        <div class="bg-[#524439] p-8 rounded-2xl shadow-xl hover:translate-y-[-6px] hover:shadow-2xl transition">
          <h3 class="text-xl font-semibold mb-3 text-[#EBA35B]">Personalized Sessions</h3>
          <p class="text-gray-300">One-on-one tailored sessions designed specifically for your needs.</p>
        </div>
        <!-- Card -->
        <div class="bg-[#524439] p-8 rounded-2xl shadow-xl hover:translate-y-[-6px] hover:shadow-2xl transition">
          <h3 class="text-xl font-semibold mb-3 text-[#EBA35B]">Confidentiality</h3>
          <p class="text-gray-300">100% confidential, respectful, and non-judgmental environment.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- CALL TO ACTION -->
  <section id="contact" class="relative py-24 px-6 lg:px-24 bg-gradient-to-r from-[#524439] via-[#3E3229] to-[#2C241F] text-center">
    <div class="max-w-4xl mx-auto">
      <h2 class="text-4xl md:text-5xl font-extrabold text-[#EBA35B] mb-6">Book Your Graphology Session Today</h2>
      <p class="text-gray-200 text-lg leading-relaxed max-w-2xl mx-auto mb-10">
        Discover what your handwriting reveals about you. Get a personalized session with Shivansh Dargarh and take the first step toward
        <span class="text-[#EBA35B] font-semibold">self-awareness and transformation</span>.
      </p>

      <!-- Contact Info -->
      <div class="space-y-3 text-lg text-gray-300">
        <p><strong>Contact:</strong> <a href="tel:+919517291500" class="text-[#EBA35B] hover:underline">+91 95172 91500</a></p>
        <p><strong>Email:</strong> <a href="mailto:shivanshdargarhlts@gmail.com" class="text-[#EBA35B] hover:underline">shivanshdargarhlts@gmail.com</a></p>
      </div>

      <!-- Button -->
      <div class="mt-10">
        <a href="mailto:shivanshdargarhlts@gmail.com"
           class="inline-block px-10 py-4 bg-[#EBA35B] text-[#3E3229] font-semibold rounded-full shadow-lg hover:bg-[#d48d46] hover:scale-105 transition">
          Book Now
        </a>
      </div>
    </div>

    <!-- Glow Accent -->
    <div class="absolute inset-0 bg-gradient-to-tr from-[#EBA35B]/10 via-transparent to-transparent pointer-events-none"></div>
  </section>



@endsection

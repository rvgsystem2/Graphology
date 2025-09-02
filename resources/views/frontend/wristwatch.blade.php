@extends('component.main')
@section('content')
    <!-- HERO SECTION -->
    <section class="relative bg-cover bg-center h-[50vh] flex items-center justify-center text-center px-6"
        style="background-image: url('https://cdn.pixabay.com/photo/2015/09/05/21/51/handwriting-926175_1280.jpg');">
        <div class="absolute inset-0 bg-black/60"></div>
        <!-- Content -->
        <div class="relative z-10 text-center text-white px-6">
            <h1 class="text-4xl md:text-5xl text-[#EBA35B] font-extrabold mb-4 font-[Poppins]">
                Wristwatch-Analysis Services
            </h1>
            <nav aria-label="breadcrumb">
                <ul class="flex items-center justify-center space-x-2 text-sm md:text-base">
                    <li><a href="/" class="text-[#EBA35B] hover:underline">Home</a></li>
                    <li class="text-white">/</li>
                    <li class="text-white/80">Wristwatch-Ananlysis</li>
                </ul>
            </nav>
        </div>
    </section>

    <!-- ================================
  WRISTWATCH ANALYSIS SERVICES PAGE
  Author: Shivansh Dargarh
  ================================ -->

<section class="relative  text-white py-20 px-6 md:px-12 lg:px-24">
    <!-- Hero Title -->
    <div class="text-center max-w-4xl mx-auto space-y-6">
      <h2 class="text-3xl md:text-5xl font-extrabold tracking-tight text-[#EBA35B]">
        Wristwatch Analysis Services
      </h2>
      <p class="text-lg md:text-xl text-gray-300 leading-relaxed">
        Discover What Your Watch Says About You with the
        <span class="font-semibold text-[#EBA35B]">Best Wristwatch Teller in Kanpur</span>
      </p>
      <p class="text-gray-400 leading-relaxed">
        Your wristwatch is more than just an accessory—it reflects your choices, priorities, and personality.
        At <span class="font-semibold text-[#EBA35B]">Shivansh Dargarh Transformation</span>, we decode what your watch reveals about your mindset, emotions, and lifestyle.
      </p>
    </div>

    <!-- Divider -->
    <div class="mt-12 mb-16 border-t border-gray-700"></div>

    <!-- How It Works -->
    <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-12 items-center">
      <!-- Text -->
      <div>
        <h3 class="text-2xl md:text-3xl font-semibold text-[#EBA35B] mb-6">How Wristwatch Analysis Works</h3>
        <ul class="space-y-4 text-gray-300">
          <li class="flex items-start gap-3">
            <span class="text-[#EBA35B] text-xl">⏱</span>
            Understand how your watch style reflects your thinking patterns
          </li>
          <li class="flex items-start gap-3">
            <span class="text-[#EBA35B] text-xl">⌚</span>
            Learn what your preference for brands and designs says about your personality
          </li>
          <li class="flex items-start gap-3">
            <span class="text-[#EBA35B] text-xl">🕰</span>
            Discover your decision-making style through your choice of timepieces
          </li>
          <li class="flex items-start gap-3">
            <span class="text-[#EBA35B] text-xl">⭐</span>
            Gain insights into your life priorities and inner mindset
          </li>
        </ul>
      </div>
      <!-- Image -->
      <div class="relative">
        <img src="https://cdn.pixabay.com/photo/2017/09/13/11/39/wrist-watch-2745278_1280.png"
             alt="Wristwatch Analysis"
             class=" transform transition duration-500">
      </div>
    </div>

    <!-- Divider -->
    <div class="mt-20 mb-16 border-t border-gray-700"></div>

    <!-- Why Choose -->
    <div class="max-w-5xl mx-auto text-center space-y-6">
      <h3 class="text-2xl md:text-3xl font-semibold text-[#EBA35B]">Why Choose Shivansh Dargarh</h3>
      <ul class="grid md:grid-cols-2 gap-6 text-gray-300 mt-8 text-left">
        <li class="bg-[#EBA35B]/30 rounded-xl p-6 shadow-md hover:shadow-lg transition">
          ✅ Recognized as the best wristwatch teller in Kanpur
        </li>
        <li class="bg-[#EBA35B]/30 rounded-xl p-6 shadow-md hover:shadow-lg transition">
          ✅ Specialized expertise in linking watch choices to personality traits
        </li>
        <li class="bg-[#EBA35B]/30 rounded-xl p-6 shadow-md hover:shadow-lg transition">
          ✅ A rare, modern approach combined with graphology and handwriting analysis
        </li>
        <li class="bg-[#EBA35B]/30 rounded-xl p-6 shadow-md hover:shadow-lg transition">
          ✅ Personalized sessions designed for self-discovery and growth
        </li>
      </ul>
    </div>

    <!-- Divider -->
    <div class="mt-20 mb-16 border-t border-gray-700"></div>

    <!-- Who Can Benefit -->
    <div class="max-w-6xl mx-auto">
      <h3 class="text-2xl md:text-3xl font-semibold text-[#EBA35B] text-center mb-10">
        Who Can Benefit from Wristwatch Analysis
      </h3>
      <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 text-center">
        <div class="bg-[#EBA35B]/30 rounded-xl p-6 shadow hover:scale-105 transition">
          <p class="text-gray-300">🔍 Individuals curious about their personality and decision-making style</p>
        </div>
        <div class="bg-[#EBA35B]/30 rounded-xl p-6 shadow hover:scale-105 transition">
          <p class="text-gray-300">💼 Professionals wanting to understand their life patterns and priorities</p>
        </div>
        <div class="bg-[#EBA35B]/30 rounded-xl p-6 shadow hover:scale-105 transition">
          <p class="text-gray-300">❤️ Couples seeking deeper insights into compatibility and preferences</p>
        </div>
        <div class="bg-[#EBA35B]/30 rounded-xl p-6 shadow hover:scale-105 transition">
          <p class="text-gray-300">🌟 Anyone looking for a unique and eye-opening personality analysis</p>
        </div>
      </div>
    </div>

    <!-- CTA Section -->
    <div class="mt-20 text-center space-y-6">
      <h3 class="text-2xl md:text-3xl font-bold text-[#EBA35B]">
        Book Your Wristwatch Analysis Session
      </h3>
      <p class="text-gray-300 max-w-2xl mx-auto">
        Your watch tells a story. Let Shivansh Dargarh, the best wristwatch teller in Kanpur,
        help you read it and gain valuable insights about your personality and life choices.
      </p>
      <div class="flex flex-col md:flex-row items-center justify-center gap-4">
        <a href="tel:+919517291500"
           class="bg-[#EBA35B] hover:bg-[#c9873e] text-black font-semibold px-6 py-3 rounded-xl shadow-md transition">
          📞 +91 95172 91500
        </a>
        <a href="mailto:shivanshdargarhlts@gmail.com"
           class="bg-transparent border border-[#EBA35B] hover:bg-[#EBA35B] hover:text-black text-[#EBA35B] font-semibold px-6 py-3 rounded-xl transition">
          ✉️ shivanshdargarhlts@gmail.com
        </a>
      </div>
    </div>
  </section>

@endsection

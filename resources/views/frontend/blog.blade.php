@extends('component.main')
@section('content')
  <style>
    body {
      font-family: 'Poppins', sans-serif;
    }
  </style>

  <!-- HERO SECTION -->
  <section class="relative w-full h-[40vh] md:h-[50vh] flex items-center justify-center mt-8 md:mt-0">
    <img src="{{asset('asset/img/banner.png')}}"
      alt="Graphology Blog Banner"
      class="absolute inset-0 w-full h-full object-cover opacity-40">
    <div class="absolute inset-0 bg-black/70"></div>

    <div class="relative z-10 text-center px-4 md:px-6">
      <h1 class="text-3xl md:text-5xl font-extrabold text-[#EBA35B]">The Science of Graphology</h1>
      <p class="mt-3 md:mt-4 text-base md:text-lg text-gray-200">Unlocking personality through handwriting analysis</p>
      <div class="mt-3 md:mt-4 text-xs md:text-sm text-gray-400 flex flex-wrap justify-center gap-2">
        <span class="flex items-center gap-1"><span class="material-symbols-outlined text-[#EBA35B]">calendar_month</span> August 30, 2025</span>
        <span class="hidden md:inline">|</span>
        <span class="flex items-center gap-1"><span class="material-symbols-outlined text-[#EBA35B]">person</span> Shivansh Dargarh</span>
      </div>
    </div>
  </section>

  <!-- MAIN BLOG LAYOUT -->
  <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-10 py-10 md:py-16 grid grid-cols-1 lg:grid-cols-3 gap-10 lg:gap-12">

    <!-- Blog Content -->
    <article class="lg:col-span-2 space-y-8">
      <!-- Intro -->
      <p class="text-base md:text-lg leading-relaxed text-gray-300">
        Graphology, also known as handwriting analysis, is the study of handwriting to understand the
        personality, emotions, and subconscious patterns of an individual. Every stroke of your pen carries
        hidden messages that can reveal your confidence, decision-making style, and even your emotional balance.
      </p>

      <!-- Section 1 -->
      <div>
        <h2 class="text-xl md:text-2xl font-bold text-[#EBA35B] mb-3 md:mb-4">What is Graphology?</h2>
        <p class="text-gray-300 leading-relaxed text-sm md:text-base">
          Graphology is based on the principle that handwriting is a projection of the mind.
          The way we form letters, the pressure applied, spacing, slant, and rhythm all
          reflect psychological states. It is widely used in personality assessments,
          recruitment, counseling, and even compatibility checks in relationships.
        </p>
      </div>

      <!-- Section 2 -->
      <div>
        <h2 class="text-xl md:text-2xl font-bold text-[#EBA35B] mb-3 md:mb-4">Key Elements in Handwriting Analysis</h2>
        <ul class="list-disc list-inside space-y-2 text-gray-300 text-sm md:text-base">
          <li><span class="text-[#EBA35B] font-semibold">Size of Writing:</span> Large writing shows confidence and extroversion, while small writing indicates focus and introversion.</li>
          <li><span class="text-[#EBA35B] font-semibold">Slant:</span> Right slant suggests emotional expressiveness, left slant hints at restraint, and upright shows logical thinking.</li>
          <li><span class="text-[#EBA35B] font-semibold">Pressure:</span> Heavy pressure indicates emotional intensity, while light pressure reveals sensitivity and adaptability.</li>
          <li><span class="text-[#EBA35B] font-semibold">Spacing:</span> Wide spacing reflects independence, while cramped writing shows a need for closeness.</li>
        </ul>
      </div>

      <!-- Section 3 -->
      <div>
        <h2 class="text-xl md:text-2xl font-bold text-[#EBA35B] mb-3 md:mb-4">Applications of Graphology</h2>
        <p class="text-gray-300 mb-3 text-sm md:text-base">
          Graphology is not fortune-telling—it is a psychological tool. Its applications include:
        </p>
        <ul class="list-decimal list-inside space-y-2 text-gray-300 text-sm md:text-base">
          <li>Personality Development</li>
          <li>Career Guidance & Recruitment</li>
          <li>Relationship Compatibility</li>
          <li>Emotional & Behavioral Counseling</li>
        </ul>
      </div>

      <!-- Section 4 -->
      <div>
        <h2 class="text-xl md:text-2xl font-bold text-[#EBA35B] mb-3 md:mb-4">Graphology & Wristwatch Analysis</h2>
        <p class="text-gray-300 leading-relaxed text-sm md:text-base">
          Alongside handwriting, even your wristwatch choice can reveal personality traits.
          The style, color, and type of watch reflect subconscious decisions tied to your values, mindset, and lifestyle.
          When combined with graphology, wristwatch analysis provides a powerful tool for self-discovery.
        </p>
      </div>

      <!-- CTA -->
      <div class="bg-[#EBA35B]/10 p-5 md:p-6 rounded-xl shadow-lg border border-[#EBA35B]/30">
        <h3 class="text-lg md:text-xl font-semibold text-[#EBA35B] mb-3 md:mb-4">Ready to Discover Yourself?</h3>
        <p class="text-gray-300 mb-4 md:mb-6 text-sm md:text-base">
          Book a one-on-one session with Shivansh Dargarh, Kanpur’s leading graphologist and wristwatch teller expert, to gain personalized insights into your personality and life path.
        </p>
        <a href="#contact"
          class="inline-block px-5 md:px-6 py-2.5 md:py-3 bg-gradient-to-r from-[#EBA35B] to-[#d98b41] text-white font-semibold rounded-lg shadow-lg hover:scale-105 transition-transform duration-300 text-sm md:text-base">
          Book Your Consultation
        </a>
      </div>
    </article>

    <!-- Sidebar -->
    <aside class="space-y-8">
      <!-- Author Box -->
      <div class="bg-[#EBA35B]/50 border border-[#EBA35B]/30 p-5 md:p-6 rounded-2xl shadow-lg text-center hover:shadow-xl transition duration-300">
        <div class="w-24 h-24 md:w-32 md:h-32 mx-auto relative">
          <img src="{{ asset('asset/img/banner.png') }}"
            alt="Author Shivansh Dargarh"
            class="w-full h-full rounded-full border-4 border-[#EBA35B]/60 shadow-md object-cover">
          <span class="absolute bottom-2 right-2 w-3 h-3 md:w-4 md:h-4 bg-green-500 border-2 border-[#2A2A2A] rounded-full"></span>
        </div>
        <h3 class="mt-4 font-bold text-lg md:text-xl text-[#EBA35B] tracking-wide">Shivansh Dargarh</h3>
        <p class="text-gray-300 text-xs md:text-sm mt-2 leading-relaxed">
          <span class="block">Graphologist</span>
          <span class="block">Handwriting Analyst</span>
          <span class="block">Wristwatch Teller Expert</span>
        </p>
        <div class="flex justify-center gap-4 mt-3 md:mt-4">
          <a href="#" class="text-gray-400 hover:text-[#EBA35B] transition"><span class="material-symbols-outlined">mail</span></a>
          <a href="#" class="text-gray-400 hover:text-[#EBA35B] transition"><span class="material-symbols-outlined">call</span></a>
          <a href="#" class="text-gray-400 hover:text-[#EBA35B] transition"><span class="material-symbols-outlined">share</span></a>
        </div>
      </div>

      <!-- Related Posts -->
      <div>
        <h3 class="text-lg md:text-xl font-semibold text-white mb-3 md:mb-4">Related Articles</h3>
        <ul class="space-y-3 md:space-y-4 text-sm md:text-base">
          <li class="border-b border-gray-600 pb-2">
            <a href="#" class="hover:text-white text-gray-300 transition">How Handwriting Reflects Your Emotions</a>
          </li>
          <li class="border-b border-gray-600 pb-2">
            <a href="#" class="hover:text-white text-gray-300 transition">5 Things Your Signature Reveals About You</a>
          </li>
          <li>
            <a href="#" class="hover:text-white text-gray-300 transition">The Psychology Behind Wristwatch Choices</a>
          </li>
        </ul>
      </div>
    </aside>
  </section>
@endsection

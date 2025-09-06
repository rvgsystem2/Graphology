<!-- ================= HEADER WITH TOPBAR ================= -->
<header class="bg-white shadow-md fixed top-0 left-0 w-full z-50">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between h-16 items-center">
<!-- Logo -->
<div class="flex-shrink-0">
    <a href="/" class="flex items-center">
      <img src="{{ asset('asset/img/Shivansh Dargarh Logo.png') }}"
           alt="Shivansh Dargarh Logo"
           class="md:h-44 md:w-44 h-32 w-32 p-4 object-contain">
    </a>
  </div>

        <!-- Mobile Menu Button -->
        <div class="lg:hidden">
          <button id="menu-btn"
            class="text-black focus:outline-none focus:ring-2 focus:ring-[#EBA35B] rounded-md p-1">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
              viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
          </button>
        </div>

        <!-- Desktop Navigation -->
        <nav class="hidden lg:flex">
          <ul class="flex space-x-6 text-black font-medium items-center">

            <li><a href="/" class="hover:text-[#EFD094] transition">Home</a></li>
            <li><a href="{{route('frontend.about')}}" class="hover:text-[#EFD094] transition">About</a></li>

            <!-- Dropdown Services -->
            <li class="relative" x-data="{ open: false }">
              <button @click="open = !open" class="flex items-center space-x-1 hover:text-[#EFD094] transition focus:outline-none">
                <span>Services</span>
                <svg class="w-4 h-4 transition-transform duration-200"
                  :class="{'rotate-180': open}" fill="none" stroke="currentColor"
                  stroke-width="2" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                </svg>
              </button>

              <!-- Dropdown -->
              <ul x-show="open" @click.away="open = false"
                x-transition
                class="absolute left-0 mt-2 w-56 bg-white border border-gray-200 rounded-lg shadow-lg text-gray-800">
                <li><a href="{{route('frontend.graphology')}}" class="block px-4 py-2 hover:bg-[#EFD094] hover:text-[#1A1A1A] transition">Graphology</a></li>
                <li><a href="{{route('frontend.handwriting')}}" class="block px-4 py-2 hover:bg-[#EFD094] hover:text-[#1A1A1A] transition">Handwriting Analysis</a></li>
                <li><a href="{{route('frontend.wristwatch')}}" class="block px-4 py-2 hover:bg-[#EFD094] hover:text-[#1A1A1A] transition">Wristwatch Analysis</a></li>
              </ul>
            </li>

            <li><a href="{{route('frontend.consultation')}}" class="hover:text-[#EFD094] transition">Consultation</a></li>
            <li><a href="{{route('frontend.grapho_remedy')}}" class="hover:text-[#EFD094] transition">Grapho Remedy</a></li>
            <li><a href="{{route('frontend.contact')}}" class="hover:text-[#EFD094] transition">Contact</a></li>
          </ul>
        </nav>
      </div>
    </div>

    <!-- 🔹 Mobile Menu -->
    <div id="mobile-menu"
      class="lg:hidden hidden bg-[#524439] text-white px-4 py-4 space-y-3 transition-all">

      <a href="/" class="block hover:text-[#EFD094] transition">Home</a>
      <a href="{{route('frontend.about')}}" class="block hover:text-[#EFD094] transition">About</a>

      <!-- Mobile Dropdown Services -->
      <div x-data="{ open: false }" class="space-y-2">
        <button @click="open = !open" class="flex justify-between w-full hover:text-[#EFD094] focus:outline-none">
          <span>Services</span>
          <svg :class="{'rotate-180': open}" class="w-4 h-4 transform transition-transform"
            fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
          </svg>
        </button>
        <div x-show="open" x-transition class="pl-4 space-y-2">
          <a href="{{route('frontend.graphology')}}" class="block hover:text-[#EFD094] transition">Graphology</a>
          <a href="{{route('frontend.handwriting')}}" class="block hover:text-[#EFD094] transition">Handwriting Analysis</a>
          <a href="{{route('frontend.wristwatch')}}" class="block hover:text-[#EFD094] transition">Wristwatch Analysis</a>
        </div>
      </div>

      <a href="{{route('frontend.consultation')}}" class="block hover:text-[#EFD094] transition">Consultation</a>
      <a href="{{route('frontend.grapho_remedy')}}" class="block hover:text-[#EFD094] transition">Grapho Remedy</a>
      <a href="{{route('frontend.contact')}}" class="block hover:text-[#EFD094] transition">Contact</a>
    </div>
  </header>

  <!-- Alpine.js -->
  <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

  <script>
    // Toggle mobile menu
    const menuBtn = document.getElementById("menu-btn");
    const mobileMenu = document.getElementById("mobile-menu");

    menuBtn.addEventListener("click", () => {
      mobileMenu.classList.toggle("hidden");
    });
  </script>

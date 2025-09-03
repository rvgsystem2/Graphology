@extends('component.main')
@section('content')
    <!-- HERO SECTION -->
    <section class="relative bg-cover bg-center h-[50vh] flex items-center justify-center text-center px-6"
        style="background-image: url('https://cdn.pixabay.com/photo/2015/09/05/21/51/handwriting-926175_1280.jpg');">
        <div class="absolute inset-0 bg-black/60"></div>
        <!-- Content -->
        <div class="relative z-10 text-center text-white px-6">
            <h1 class="text-4xl md:text-5xl text-[#EBA35B] font-extrabold mb-4 font-[Poppins]">
                HandWritting-Analysis Services
            </h1>
            <nav aria-label="breadcrumb">
                <ul class="flex items-center justify-center space-x-2 text-sm md:text-base">
                    <li><a href="/" class="text-[#EBA35B] hover:underline">Home</a></li>
                    <li class="text-white">/</li>
                    <li class="text-white/80">Handwriting-Ananlysis</li>
                </ul>
            </nav>
        </div>
    </section>
    <!-- ================= HANDWRITING ANALYSIS SERVICES PAGE ================= -->
    <section id="handwriting-analysis" class="bg-[#3E3229] text-gray-200 py-20 px-6 md:px-12 lg:px-24">
        <div class="max-w-7xl mx-auto">

            <!-- Heading -->
            <div class="text-center mb-12">
                <h1 class="text-4xl md:text-5xl font-bold text-[#EBA35B] mb-4">
                    Handwriting Analysis Services
                </h1>
                <p class="text-lg text-gray-300 max-w-3xl mx-auto leading-relaxed">
                    Unlock your personality with the <span class="text-[#EBA35B] font-semibold">Best Handwriting Analyst in
                        Kanpur</span>.
                    Your handwriting is a mirror of your inner world—it reveals your emotions, thought patterns, and
                    personality traits.
                </p>
            </div>

            <!-- Hero Section -->
            <div class="grid md:grid-cols-2 gap-12 items-center mb-16">
                <div class="space-y-6">
                    <p class="leading-relaxed">
                        Your <span class="text-[#EBA35B]">handwriting</span> is a mirror of your inner world. It reflects your emotions, thinking patterns, and personality traits. <span class="text-[#EBA35B]">At Shivansh Dargarh Transformation,</span> we offer detailed handwriting analysis sessions that help you understand yourself better and make confident life decisions.
                        With years of experience,<span class="text-[#EBA35B]"> Shivansh Dargarh </span> widely known as the best handwriting analyst in Kanpur, helping people from different walks of life achieve clarity and personal growth through accurate and personalized handwriting assessments.

                    </p>
                </div>
                <div>
                    <img src="https://cdn.pixabay.com/photo/2014/09/05/18/33/old-letters-436501_1280.jpg"
                        alt="Handwriting Analysis" class="rounded-2xl shadow-xl border border-gray-700">
                </div>
            </div>

            <!-- Benefits Section -->
            <div class="mb-16">
                <h2 class="text-2xl md:text-3xl font-bold text-[#EBA35B] text-center mb-8">
                    How Handwriting Analysis Can Help You
                </h2>
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="bg-[#524439] p-6 rounded-xl shadow-md hover:shadow-lg transition">
                        <h3 class="text-xl font-semibold mb-3">Emotional Balance</h3>
                        <p>Understand your emotions, stress levels, and thought patterns for better self-awareness.</p>
                    </div>
                    <div class="bg-[#524439] p-6 rounded-xl shadow-md hover:shadow-lg transition">
                        <h3 class="text-xl font-semibold mb-3">Communication Skills</h3>
                        <p>Gain insights into your communication style and decision-making abilities.</p>
                    </div>
                    <div class="bg-[#524439] p-6 rounded-xl shadow-md hover:shadow-lg transition">
                        <h3 class="text-xl font-semibold mb-3">Hidden Strengths</h3>
                        <p>Identify your strengths and weaknesses to make better life and career choices.</p>
                    </div>
                    <div class="bg-[#524439] p-6 rounded-xl shadow-md hover:shadow-lg transition">
                        <h3 class="text-xl font-semibold mb-3">Improved Relationships</h3>
                        <p>Strengthen your personal and professional relationships through better understanding.</p>
                    </div>
                    <div class="bg-[#524439] p-6 rounded-xl shadow-md hover:shadow-lg transition">
                        <h3 class="text-xl font-semibold mb-3">Career Growth</h3>
                        <p>Discover your ideal career path and gain confidence in decision-making.</p>
                    </div>
                    <div class="bg-[#524439] p-6 rounded-xl shadow-md hover:shadow-lg transition">
                        <h3 class="text-xl font-semibold mb-3">Stress Management</h3>
                        <p>Reduce stress by identifying behavioral triggers and learning coping strategies.</p>
                    </div>
                </div>
            </div>

            <!-- Why Choose Section -->
            <div class="bg-[#2A211C] rounded-2xl p-10 mb-16 shadow-xl">
                <h2 class="text-2xl md:text-3xl font-bold text-[#EBA35B] text-center mb-8">
                    Why Choose Shivansh Dargarh
                </h2>
                <ul class="grid md:grid-cols-2 gap-6 text-lg">
                    <li class="flex items-start space-x-3">
                        <span class="text-[#EBA35B] text-2xl">✔</span>
                        <span>Recognized as the <strong>best handwriting analyst in Kanpur</strong></span>
                    </li>
                    <li class="flex items-start space-x-3">
                        <span class="text-[#EBA35B] text-2xl">✔</span>
                        <span>Hundreds of clients guided through accurate personality insights</span>
                    </li>
                    <li class="flex items-start space-x-3">
                        <span class="text-[#EBA35B] text-2xl">✔</span>
                        <span>In-depth analysis customized to your personal and professional goals</span>
                    </li>
                    <li class="flex items-start space-x-3">
                        <span class="text-[#EBA35B] text-2xl">✔</span>
                        <span>Sessions are confidential, friendly, and easy to understand</span>
                    </li>
                </ul>
            </div>

            <!-- Who Can Benefit -->
            <div>
                <h2 class="text-2xl md:text-3xl font-bold text-[#EBA35B] text-center mb-8">
                    Who Can Benefit
                </h2>
                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <div class="bg-[#524439] p-6 rounded-xl shadow-md hover:shadow-lg transition text-center">
                        <h3 class="text-xl font-semibold mb-3">Students</h3>
                        <p>Guidance for education and career paths.</p>
                    </div>
                    <div class="bg-[#524439] p-6 rounded-xl shadow-md hover:shadow-lg transition text-center">
                        <h3 class="text-xl font-semibold mb-3">Professionals</h3>
                        <p>Clarity in career choices and decision-making.</p>
                    </div>
                    <div class="bg-[#524439] p-6 rounded-xl shadow-md hover:shadow-lg transition text-center">
                        <h3 class="text-xl font-semibold mb-3">Couples</h3>
                        <p>Improve compatibility, communication, and relationships.</p>
                    </div>
                    <div class="bg-[#524439] p-6 rounded-xl shadow-md hover:shadow-lg transition text-center">
                        <h3 class="text-xl font-semibold mb-3">Business Owners</h3>
                        <p>Understand teams better for improved productivity.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section id="book-session" class="bg-[#3E3229] py-16 px-6 lg:px-24">
        <div class="max-w-4xl mx-auto text-center">
            <!-- Heading -->
            <h2 class="text-3xl md:text-4xl font-bold text-[#EBA35B] mb-6">
                Book Your Handwriting Analysis Session
            </h2>
            <p class="text-gray-300 leading-relaxed mb-10">
                Take the first step toward <span class="text-[#EBA35B] font-semibold">self-awareness</span> and
                <span class="text-[#EBA35B] font-semibold">personal transformation</span>.
                Get your handwriting analyzed by <span class="text-[#EBA35B]">Shivansh Dargarh</span>,
                the <span class="italic">best handwriting analyst in Kanpur</span>,
                and explore the real you.
            </p>

            <!-- Contact Cards -->
            <div class="grid gap-8 md:grid-cols-2">
                <!-- Phone -->
                <div
                    class="bg-[#4A3A30] border border-[#EBA35B]/40 rounded-2xl p-6 shadow-lg hover:shadow-xl transition duration-300">
                    <div class="flex items-center justify-center mb-4">
                        <span class="material-symbols-outlined text-[#EBA35B] text-4xl">call</span>
                    </div>
                    <h3 class="text-xl font-semibold text-[#EBA35B] mb-2">Call / WhatsApp</h3>
                    <p class="text-gray-200">+91 95172 91500</p>
                </div>

                <!-- Email -->
                <div
                    class="bg-[#4A3A30] border border-[#EBA35B]/40 rounded-2xl p-6 shadow-lg hover:shadow-xl transition duration-300">
                    <div class="flex items-center justify-center mb-4">
                        <span class="material-symbols-outlined text-[#EBA35B] text-4xl">mail</span>
                    </div>
                    <h3 class="text-xl font-semibold text-[#EBA35B] mb-2">Email</h3>
                    <p class="text-gray-200">shivanshdargarhlts@gmail.com</p>
                </div>
            </div>

            <!-- CTA Button -->
            <div class="mt-10">
                <a href="mailto:shivanshdargarhlts@gmail.com"
                    class="inline-block bg-[#EBA35B] text-[#3E3229] font-semibold px-8 py-3 rounded-xl shadow-md hover:bg-[#d08f4a] transition duration-300">
                    Book Your Session Now
                </a>
            </div>
        </div>
    </section>

    <!-- ================= END HANDWRITING ANALYSIS SERVICES ================= -->
@endsection

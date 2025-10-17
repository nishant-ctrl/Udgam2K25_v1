<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>About Us</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="./css/aboutus.css" />
  <style>
    :root {
      --color-wood-dark: #3a2c20;
      --color-wood-medium: #5c4737;
      --color-wood-light: #8d6e4f;
      --color-cream-text: #fdfaf5;
      --color-accent-gold: #e7b54c;
      --color-accent-orange: #d37f3a;
    }

    .bg-orange-400 {
      background-color: var(--color-accent-orange) !important;
    }

    .text-orange-400 {
      color: var(--color-accent-gold) !important;
    }

    .border-orange-400 {
      border-color: var(--color-accent-gold) !important;
    }

    .text-orange-300 {
      color: var(--color-accent-gold) !important;
    }

    .border-orange-300 {
      border-color: var(--color-wood-light) !important;
    }

    .text-orange-200 {
      color: var(--color-accent-gold) !important;
    }

    .bg-orange-600\/90 {
      background-color: rgba(211, 127, 58, 0.9) !important;
    }

    .bg-orange-400\/30 {
      background-color: rgba(231, 181, 76, 0.3) !important;
    }

    .text-gray-300 {
      color: #d1c6bc !important;
    }

    .text-gray-400 {
      color: #bfae9c !important;
    }

    .hover\:text-\[\--festival-coral\]:hover {
      color: var(--color-accent-gold) !important;
    }
  </style>
</head>
<link rel="stylesheet" href="./css/universalStyle.css">
<body class="text-white font-[Poppins] bg-[var(--color-wood-medium)] bg-cover bg-fixed bg-center"
  style="background-image: url('./assets/images/bga.png');">
<div class="main-content-wrapper" id="mainContent">
  <?php include 'src/components/header.php'?>
  <section
    class="hero relative min-h-screen flex flex-col justify-center items-center text-center bg-cover bg-center px-4 sm:px-6 md:px-10">
    <div class="absolute inset-0 bg-overlay"></div>

    <div class="relative z-10 max-w-4xl mx-auto">
      <button
        class="about-btn border border-orange-400 text-orange-200 px-4 sm:px-6 py-2 rounded-full text-base sm:text-lg mb-4 sm:mb-6 btn-hover">
        About Our Festival
      </button>

      <h1 class="text-3xl sm:text-5xl md:text-7xl font-extrabold mb-3 sm:mb-4 leading-tight">
        Celebrating <span class="text-orange-400">Udgam 2025</span>
      </h1>

      <p class="text-base sm:text-lg md:text-2xl max-w-2xl sm:max-w-3xl mx-auto mb-8 sm:mb-10 px-2">
        A premier cultural festival that showcases the rich diversity of Indian heritage
        while fostering innovation and artistic excellence at NIT Sikkim.
      </p>

      <a href="#" id="exploreId"
        class="explore-btn bg-orange-400 text-white px-6 sm:px-8 py-2 sm:py-3 rounded-full font-semibold text-base sm:text-lg btn-hover inline-block">
        Explore Our Story
      </a>
    </div>

    <div id="scrollDown"
      class="absolute bottom-6 sm:bottom-10 scroll-down text-orange-300 text-2xl sm:text-3xl cursor-pointer text-center">
      <span>↓</span>
      <p class="text-xs sm:text-sm">Scroll to explore</p>
    </div>
  </section>

  <section id="about"
    class="relative min-h-screen flex flex-col md:flex-row justify-center items-center px-4 sm:px-8 py-12 sm:py-20 bg-gradient-to-b from-[var(--color-wood-dark)] to-[var(--color-wood-medium)] overflow-hidden gap-10">

    <canvas id="stars" class="absolute inset-0"></canvas>

    <div class="w-full md:w-1/2 flex justify-center items-center mb-8 md:mb-0 relative z-10 reveal slide-left">
      <div
        class="absolute w-[250px] sm:w-[350px] md:w-[400px] h-[250px] sm:h-[350px] md:h-[400px] bg-orange-400/30 rounded-full blur-3xl animate-pulseGlow">
      </div>
      <img src="./assets/images/campus.png" alt="NIT Sikkim Campus"
        class="w-3/4 max-w-[280px] sm:max-w-md float-hover relative z-10 rounded-xl" />
    </div>

    <div class="w-full md:w-1/2 text-left relative z-10 space-y-4 sm:space-y-6">
      <h2 class="text-3xl sm:text-4xl md:text-5xl font-extrabold mb-2 sm:mb-4 slide-right">
        About <span class="text-orange-400">Udgam</span>
      </h2>

      <div class="card-hover bg-white/10 border border-orange-300 p-4 sm:p-6 rounded-xl reveal zoom-reveal">
        <p class="text-sm sm:text-base leading-relaxed">
          <strong class="text-orange-300">UDGAM</strong> is more than just a cultural fest. It is the heartbeat
          of National Institute of Technology Sikkim and one of the most awaited celebrations in the North East. From
          art to culture, every moment here is filled with energy, togetherness, and memories that last a lifetime.
        </p>
      </div>

      <div class="card-hover bg-white/10 border border-orange-300 p-4 sm:p-6 rounded-xl reveal zoom-reveal">
        <p class="text-sm sm:text-base leading-relaxed">
          This fest is a vibrant three-day celebration that brings life to our world through art, language, food,
          customs, and traditions. It provides a platform for emerging artists,
          unique talents, and unforgettable experiences. Every year, it welcomes renowned personalities and continues to
          grow in participation, sponsorship, and events.
        </p>
      </div>

      <div class="flex flex-wrap gap-3 sm:gap-4 reveal slide-left">
        <div class="stat-hover bg-white/10 border border-orange-300 p-4 sm:p-6 rounded-xl w-32 sm:w-36 text-center">
          <h3 class="text-2xl sm:text-3xl font-bold text-orange-400">40+</h3>
          <p class="text-xs sm:text-sm text-gray-300">Cultural Events</p>
        </div>
        <div class="stat-hover bg-white/10 border border-orange-300 p-4 sm:p-6 rounded-xl w-32 sm:w-36 text-center">
          <h3 class="text-2xl sm:text-3xl font-bold text-orange-400">500+</h3>
          <p class="text-xs sm:text-sm text-gray-300">Participants</p>
        </div>
      </div>

      <button
        class="bg-orange-400 text-white px-6 sm:px-8 py-2 sm:py-3 rounded-full font-semibold text-base sm:text-lg btn-hover mt-4 sm:mt-6 reveal slide-up">
        Discover Our Heritage
      </button>
    </div>
  </section>

  <section id="excellence"
    class="relative min-h-screen flex flex-col justify-center items-center px-4 sm:px-8 md:px-16 py-12 sm:py-16 bg-gradient-to-b from-[var(--color-wood-medium)] to-[var(--color-wood-dark)] overflow-hidden">

    <div class="max-w-7xl w-full grid md:grid-cols-2 gap-8 sm:gap-12 items-center relative z-10">
      <div class="flex justify-center relative reveal zoom-reveal">
        <div
          class="absolute w-[280px] sm:w-[380px] md:w-[420px] h-[200px] sm:h-[280px] md:h-[320px] bg-orange-400 rounded-3xl blur-lg rotate-card">
        </div>
        <div
          class="relative bg-white rounded-3xl p-4 sm:p-6 shadow-2xl z-10 hover:scale-105 transition-transform duration-500">
          <img src="./assets/images/campus.png" alt="NIT Sikkim Campus"
            class="rounded-2xl w-[240px] sm:w-[300px] md:w-[350px] object-cover mx-auto" />
        </div>
        <div
          class="absolute bottom-[-30px] sm:bottom-[-40px] left-1/2 -translate-x-1/2 bg-orange-600/90 text-white px-4 sm:px-6 py-2 sm:py-3 rounded-2xl shadow-lg z-20 border border-orange-300 hover:scale-105 transition-transform duration-300 text-xs sm:text-sm">
          <h4 class="font-semibold">Est. 2010</h4>
          <p class="text-[10px] sm:text-sm text-orange-100">Institute of National Importance</p>
        </div>
      </div>

      <div class="space-y-4 sm:space-y-6">
        <button
          class="border border-orange-400 text-orange-300 px-3 sm:px-4 py-1 rounded-full text-xs sm:text-sm font-semibold btn-hover reveal">
          Our Institution
        </button>

        <h2 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-white reveal slide-right">
          NIT Sikkim <span class="text-orange-400">Excellence</span>
        </h2>

        <p class="text-gray-300 leading-relaxed text-sm sm:text-base reveal slide-left">
          Nestled in the pristine Himalayas, National Institute of Technology Sikkim stands as a beacon of academic
          excellence and cultural heritage, celebrating the vibrant spirit of Northeast India.
        </p>

        <h3 class="text-xl sm:text-2xl font-bold text-white reveal slide-left">
          Where Innovation Meets Tradition
        </h3>

        <p class="text-gray-300 text-sm sm:text-base reveal zoom-reveal">
          Established in 2010, NIT Sikkim has rapidly emerged as one of India's premier technical institutions.
          Our campus, set against the backdrop of the majestic Himalayas, provides an inspiring environment
          for academic pursuit and cultural exploration.
        </p>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 sm:gap-4 reveal zoom-reveal">
          <div
            class="feature-card p-3 sm:p-4 rounded-xl border border-orange-300 bg-white/10 hover:bg-orange-300/10 transition-all duration-300">
            <h4 class="font-semibold text-orange-400">🎓 Academic Excellence</h4>
            <p class="text-xs sm:text-sm text-gray-300">Top-tier engineering and technology programs</p>
          </div>
          <div
            class="feature-card p-3 sm:p-4 rounded-xl border border-orange-300 bg-white/10 hover:bg-orange-300/10 transition-all duration-300">
            <h4 class="font-semibold text-orange-400">🏔 Himalayan Campus</h4>
            <p class="text-xs sm:text-sm text-gray-300">Serene environment for holistic growth</p>
          </div>
          <div
            class="feature-card p-3 sm:p-4 rounded-xl border border-orange-300 bg-white/10 hover:bg-orange-300/10 transition-all duration-300">
            <h4 class="font-semibold text-orange-400">🌏 Diverse Community</h4>
            <p class="text-xs sm:text-sm text-gray-300">Students from 25+ states across India</p>
          </div>
          <div
            class="feature-card p-3 sm:p-4 rounded-xl border border-orange-300 bg-white/10 hover:bg-orange-300/10 transition-all duration-300">
            <h4 class="font-semibold text-orange-400">🔬 Research Focus</h4>
            <p class="text-xs sm:text-sm text-gray-300">Cutting-edge research in technologies</p>
          </div>
        </div>

        <div class="flex flex-wrap gap-3 sm:gap-4 mt-4 sm:mt-6 reveal zoom-reveal justify-center sm:justify-start">
          <div
            class="stat-hover bg-white/10 border border-orange-300 p-3 sm:p-4 rounded-xl text-center w-28 sm:w-32 hover:-translate-y-1 transition">
            <h3 class="text-xl sm:text-2xl font-bold text-orange-400">2000+</h3>
            <p class="text-xs sm:text-sm text-gray-300">Students</p>
          </div>
          <div
            class="stat-hover bg-white/10 border border-orange-300 p-3 sm:p-4 rounded-xl text-center w-28 sm:w-32 hover:-translate-y-1 transition">
            <h3 class="text-xl sm:text-2xl font-bold text-orange-400">150+</h3>
            <p class="text-xs sm:text-sm text-gray-300">Faculty</p>
          </div>
          <div
            class="stat-hover bg-white/10 border border-orange-300 p-3 sm:p-4 rounded-xl text-center w-28 sm:w-32 hover:-translate-y-1 transition">
            <h3 class="text-xl sm:text-2xl font-bold text-orange-400">25+</h3>
            <p class="text-xs sm:text-sm text-gray-300">States</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer class="relative bg-[var(--color-wood-dark)] text-white overflow-hidden">
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 sm:py-16">
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 sm:gap-12">
        <div class="lg:col-span-2">
          <h3 class="text-3xl sm:text-4xl font-black mb-4">Udgam 2k25</h3>
          <p class="text-gray-300 text-sm sm:text-lg leading-relaxed mb-6 max-w-md">Join us for the most spectacular
            cultural celebration at NIT Sikkim. Experience vibrant colors, traditions, and unity of Indian
            heritage.</p>
          <div class="space-y-3 text-sm sm:text-base">
            <div class="flex items-start sm:items-center gap-2 sm:gap-3 text-gray-300">
              <span>📍</span><span>NIT Sikkim, Ravangla, South Sikkim - 737139</span>
            </div>
            <div class="flex items-start sm:items-center gap-2 sm:gap-3 text-gray-300">
              <span>✉️</span><span>udgam2k25@nitsikkim.ac.in</span>
            </div>
            <div class="flex items-start sm:items-center gap-2 sm:gap-3 text-gray-300">
              <span>📞</span><span>+91 9876543210</span>
            </div>
          </div>
        </div>

        <div>
          <h4 class="text-lg sm:text-xl font-black text-orange-400 mb-4 sm:mb-6">Quick Links</h4>
          <ul class="space-y-2 sm:space-y-3 text-sm sm:text-base">
            <li><a href="#" class="text-gray-300 hover:text-white transition">About Festival</a></li>
            <li><a href="#" class="text-gray-300 hover:text-white transition">Events</a></li>
            <li><a href="#" class="text-gray-300 hover:text-white transition">Registration</a></li>
            <li><a href="#" class="text-gray-300 hover:text-white transition">Schedule</a></li>
            <li><a href="#" class="text-gray-300 hover:text-white transition">Gallery</a></li>
            <li><a href="#" class="text-gray-300 hover:text-white transition">Contact</a></li>
          </ul>
        </div>

        <div>
          <h4 class="text-lg sm:text-xl font-black text-orange-400 mb-4 sm:mb-6">Stay Connected</h4>
          <div class="flex gap-3 sm:gap-4 mb-6 sm:mb-8 justify-center sm:justify-start">
            <a href="#"
              class="w-10 sm:w-12 h-10 sm:h-12 bg-white/10 rounded-full flex items-center justify-center hover:bg-orange-400 transition">
              <span>f</span>
            </a>
            <a href="#"
              class="w-10 sm:w-12 h-10 sm:h-12 bg-white/10 rounded-full flex items-center justify-center hover:bg-orange-400 transition">
              <span>📸</span>
            </a>
            <a href="#"
              class="w-10 sm:w-12 h-10 sm:h-12 bg-white/10 rounded-full flex items-center justify-center hover:bg-orange-400 transition">
              <span>🐦</span>
            </a>
            <a href="#"
              class="w-10 sm:w-12 h-10 sm:h-12 bg-white/10 rounded-full flex items-center justify-center hover:bg-orange-400 transition">
              <span>▶</span>
            </a>
          </div>
          <div class="space-y-2 sm:space-y-3">
            <p class="text-gray-300 text-xs sm:text-sm">Get festival updates</p>
            <div class="flex flex-col sm:flex-row"> <input type="email" placeholder="Enter email"
                class="flex-1 px-3 sm:px-4 py-2 bg-white/10 border border-white/20 rounded-t-lg sm:rounded-l-lg sm:rounded-t-none text-white placeholder-gray-400 focus:outline-none focus:border-orange-400 text-sm sm:text-base">
              <button
                class="px-3 sm:px-4 py-2 bg-orange-400 hover:bg-orange-500 rounded-b-lg sm:rounded-r-lg sm:rounded-b-none transition text-sm sm:text-base">Subscribe</button>
            </div>
          </div>
        </div>
      </div>
      <div class="mt-16 pt-8 border-t border-white/20 flex flex-col md:flex-row justify-between items-center gap-4">
        <div class="text-gray-400 text-sm">© 2025 Udgam 2k25, NIT Sikkim. All rights reserved.</div>
        <div class="flex gap-6 text-sm text-gray-400"> <a href="#"
            class="hover:text-[var(--color-accent-gold)] transition-colors">Privacy Policy</a> <a href="#"
            class="hover:text-[var(--color-accent-gold)] transition-colors">Terms of Service</a> <a href="#"
            class="hover:text-[var(--color-accent-gold)] transition-colors">Contact Us</a> </div>
      </div>
    </div>
  </footer>
  <script src="./js/aboutus.js"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>About Us</title>
  <link rel="icon" type="image/x-icon" href="<?= $path['fav_dir'] ?>/udg2k25.png">
  <script src="<?= $path['js_dir'] ?>/tailwind.js"></script>
  <link rel="stylesheet" href="<?= $path['css_dir'] ?>/aboutus.css" />

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@400;500;600;700&family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

  <style>
    :root {
      --color-wood-dark: #3a2c20;
      --color-wood-medium: #5c4737;
      --color-wood-light: #8d6e4f;
      --color-primary-text: #FFFFFF;
      --color-secondary-text: #FFE5B4;
      --color-accent-bright: #FF6B35;
      --color-accent-gold: #FFC845;
      --color-accent-pink: #FF6B9D;
      --color-accent-purple: #9B59B6;
      --color-muted-text: #F5DEB3;
      --color-dark-purple: #1A1A2E;
    }

    /* Font setup */
    body {
      font-family: 'Poppins', sans-serif;
      color: var(--color-primary-text);
      font-weight: 400;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      font-family: 'Fredoka', sans-serif;
      color: var(--color-primary-text);
      font-weight: 700;
      letter-spacing: 1px;
    }

    h1 {
      text-shadow: 0 0 20px rgba(255, 107, 53, 0.5),
        0 0 40px rgba(255, 200, 69, 0.3),
        2px 4px 8px rgba(0, 0, 0, 0.8);
      background: linear-gradient(135deg, #FFFFFF 0%, #FFE5B4 50%, #FFC845 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
      animation: shimmer 3s ease-in-out infinite;
    }

    @keyframes shimmer {

      0%,
      100% {
        background-position: 0% 50%;
      }

      50% {
        background-position: 100% 50%;
      }
    }

    h2 {
      text-shadow: 0 0 15px rgba(255, 200, 69, 0.6),
        2px 3px 6px rgba(0, 0, 0, 0.6);
    }

    h3,
    h4 {
      text-shadow: 1px 2px 4px rgba(0, 0, 0, 0.5);
    }

    p {
      color: var(--color-secondary-text);
      line-height: 1.8;
    }

    strong {
      color: var(--color-accent-gold);
      font-weight: 700;
      text-shadow: 0 0 10px rgba(255, 200, 69, 0.5);
    }

    /* Gradient backgrounds */
    .bg-orange-400 {
      background: linear-gradient(135deg, #FF6B35 0%, #FFC845 50%, #FF6B9D 100%) !important;
      background-size: 200% 200%;
      animation: gradientShift 3s ease infinite;
    }

    @keyframes gradientShift {

      0%,
      100% {
        background-position: 0% 50%;
      }

      50% {
        background-position: 100% 50%;
      }
    }

    .text-orange-400 {
      color: var(--color-accent-gold) !important;
      text-shadow: 0 0 10px rgba(255, 200, 69, 0.5);
    }

    .border-orange-400 {
      border-color: var(--color-accent-gold) !important;
      box-shadow: 0 0 15px rgba(255, 200, 69, 0.3);
    }

    .text-orange-300 {
      color: var(--color-accent-gold) !important;
      text-shadow: 0 0 20px rgba(255, 200, 69, 0.8);
      animation: pulse 2s ease-in-out infinite;
    }

    @keyframes pulse {

      0%,
      100% {
        opacity: 1;
      }

      50% {
        opacity: 0.7;
      }
    }

    .border-orange-300 {
      border-color: var(--color-accent-pink) !important;
      box-shadow: 0 0 20px rgba(255, 107, 157, 0.4);
    }

    .bg-orange-600\/90 {
      background: linear-gradient(135deg, rgba(255, 107, 53, 0.95), rgba(255, 200, 69, 0.95)) !important;
      backdrop-filter: blur(15px) saturate(180%);
      box-shadow: 0 8px 32px rgba(255, 107, 53, 0.4);
    }

    .bg-orange-400\/30 {
      background: radial-gradient(circle, rgba(255, 107, 53, 0.4), rgba(255, 200, 69, 0.3)) !important;
      animation: glowPulse 3s ease-in-out infinite;
    }

    @keyframes glowPulse {

      0%,
      100% {
        transform: scale(1);
        opacity: 0.5;
      }

      50% {
        transform: scale(1.1);
        opacity: 0.8;
      }
    }

    .text-gray-300 {
      color: var(--color-secondary-text) !important;
    }

    .text-gray-400 {
      color: var(--color-muted-text) !important;
    }

    /* Enhanced button styles */
    .explore-btn,
    button:not(.border) {
      color: var(--color-dark-purple) !important;
      font-weight: 700;
      text-shadow: none;
      box-shadow: 0 4px 20px rgba(255, 107, 53, 0.5),
        0 0 40px rgba(255, 200, 69, 0.3);
      transition: all 0.4s ease;
      position: relative;
      overflow: hidden;
    }

    .explore-btn::before,
    button:not(.border)::before {
      content: '';
      position: absolute;
      top: 50%;
      left: 50%;
      width: 0;
      height: 0;
      border-radius: 50%;
      background: rgba(255, 255, 255, 0.3);
      transform: translate(-50%, -50%);
      transition: width 0.6s, height 0.6s;
    }

    .explore-btn:hover::before,
    button:not(.border):hover::before {
      width: 300px;
      height: 300px;
    }

    .explore-btn:hover,
    button:not(.border):hover {
      box-shadow: 0 6px 30px rgba(255, 107, 53, 0.7),
        0 0 60px rgba(255, 200, 69, 0.5);
      transform: translateY(-3px) scale(1.05);
    }

    /* Card enhancements */
    .card-hover,
    .stat-hover,
    .feature-card {
      backdrop-filter: blur(15px) saturate(150%);
      border-width: 2px;
      transition: all 0.4s ease;
      position: relative;
      overflow: hidden;
    }

    .card-hover::before,
    .stat-hover::before,
    .feature-card::before {
      content: '';
      position: absolute;
      top: -50%;
      left: -50%;
      width: 200%;
      height: 200%;
      background: linear-gradient(45deg, transparent, rgba(255, 200, 69, 0.1), transparent);
      transform: rotate(45deg);
      transition: all 0.6s ease;
    }

    .card-hover:hover::before,
    .stat-hover:hover::before,
    .feature-card:hover::before {
      left: 100%;
    }

    .card-hover:hover,
    .stat-hover:hover,
    .feature-card:hover {
      background: rgba(255, 255, 255, 0.2) !important;
      border-color: var(--color-accent-gold) !important;
      box-shadow: 0 10px 40px rgba(255, 200, 69, 0.5),
        inset 0 0 20px rgba(255, 107, 53, 0.2);
      transform: translateY(-5px) scale(1.02);
    }

    /* Border button */
    button.border {
      background: transparent !important;
      color: var(--color-accent-gold) !important;
      border: 2px solid var(--color-accent-gold) !important;
      box-shadow: 0 0 15px rgba(255, 200, 69, 0.3),
        inset 0 0 10px rgba(255, 200, 69, 0.1);
      transition: all 0.4s ease;
    }

    button.border:hover {
      background: linear-gradient(135deg, rgba(255, 107, 53, 0.2), rgba(255, 200, 69, 0.2)) !important;
      color: var(--color-primary-text) !important;
      border-color: var(--color-accent-pink) !important;
      box-shadow: 0 0 25px rgba(255, 107, 157, 0.5);
      transform: scale(1.05);
    }

    /* Scroll indicator animation */
    #scrollDown span {
      animation: bounce 2s ease-in-out infinite;
    }

    @keyframes bounce {

      0%,
      100% {
        transform: translateY(0);
      }

      50% {
        transform: translateY(10px);
      }
    }

    /* Image container glow */
    .float-hover {
      animation: float 6s ease-in-out infinite;
      box-shadow: 0 10px 40px rgba(255, 200, 69, 0.4);
      border: 3px solid rgba(255, 200, 69, 0.3);
    }

    @keyframes float {

      0%,
      100% {
        transform: translateY(0px);
      }

      50% {
        transform: translateY(-20px);
      }
    }

    /* Stat numbers glow */
    .stat-hover h3 {
      background: linear-gradient(135deg, #FFC845 0%, #FF6B35 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
      text-shadow: none;
      filter: drop-shadow(0 0 10px rgba(255, 200, 69, 0.6));
    }

    /* Feature card icons */
    .feature-card h4 {
      font-size: 1rem;
      display: flex;
      align-items: center;
      gap: 8px;
    }

    /* Background overlay enhancement */
    .bg-overlay {
      background: radial-gradient(ellipse at center, rgba(0, 0, 0, 0.3) 0%, rgba(0, 0, 0, 0.6) 100%);
    }

    /* Rotate card animation */
    .rotate-card {
      animation: rotate 20s linear infinite;
    }

    @keyframes rotate {
      from {
        transform: rotate(0deg);
      }

      to {
        transform: rotate(360deg);
      }
    }
  </style>
</head>
<link rel="stylesheet" href="<?=$path['css_dir']?>/universalStyle.css" />
  <body class="bg-[var(--color-wood-medium)] bg-cover bg-fixed bg-center overflow-x-hidden"
    style="background-image: url('./assets/images/abg.png');">
    <?php include "{$path['pages_dir']}/doors.php" ?>
          <?php include "{$path['pages_dir']}/header.php" ?>
    <div class="main-content-wrapper" id="mainContent">
      <section
        class="hero relative min-h-screen flex flex-col justify-center items-center text-center bg-cover bg-center px-4 sm:px-6 md:px-10">
        <div class="absolute inset-0 bg-overlay"></div>

        <div class="relative z-10 max-w-4xl mx-auto">

          <h1 class="text-4xl sm:text-6xl md:text-8xl font-extrabold mb-4 sm:mb-6 leading-tight">
            Celebrating Udgam 2K25
          </h1>

          <p class="text-lg sm:text-xl md:text-3xl max-w-2xl sm:max-w-3xl mx-auto mb-10 sm:mb-12 px-2 font-medium">
            A premier cultural festival that showcases the rich diversity of Indian heritage
            while fostering innovation and artistic excellence at NIT Sikkim.
          </p>

          <a href="#" id="exploreId"
            class="explore-btn inline-block bg-orange-400 px-8 sm:px-10 py-3 sm:py-4 rounded-full font-bold text-lg sm:text-xl relative z-10">
            Explore Our Story
          </a>
        </div>

        <div id="scrollDown"
          class="absolute bottom-6 sm:bottom-10 scroll-down text-orange-300 text-3xl sm:text-4xl cursor-pointer text-center">
          <span>↓</span>
          <p class="text-sm sm:text-base font-medium">Scroll to explore</p>
        </div>
      </section>

      <section id="about"
        class="relative min-h-screen flex flex-col md:flex-row justify-center items-center px-4 sm:px-8 py-12 sm:py-20 bg-gradient-to-b from-[var(--color-wood-dark)] to-[var(--color-wood-medium)] overflow-hidden gap-10">

        <canvas id="stars" class="absolute inset-0"></canvas>

        <div class="w-full md:w-1/2 flex justify-center items-center mb-8 md:mb-0 relative z-10 reveal slide-left">
          <div
            class="absolute w-[250px] sm:w-[350px] md:w-[400px] h-[250px] sm:h-[350px] md:h-[400px] bg-orange-400/30 rounded-full blur-3xl">
          </div>
          <img src="./assets/images/campus.png" alt="NIT Sikkim Campus"
            class="w-3/4 max-w-[280px] sm:max-w-md float-hover relative z-10 rounded-xl" />
        </div>

        <div class="w-full md:w-1/2 text-left relative z-10 space-y-5 sm:space-y-7">
          <h2 class="text-4xl sm:text-5xl md:text-6xl font-extrabold mb-3 sm:mb-5 slide-right">
            About <span class="text-orange-400">Udgam</span>
          </h2>

          <div class="card-hover bg-white/10 border border-orange-300 p-5 sm:p-7 rounded-2xl reveal zoom-reveal">
            <p class="text-base sm:text-lg leading-relaxed">
              <strong>UDGAM</strong> is more than just a cultural fest. It is the heartbeat
              of National Institute of Technology Sikkim and one of the most awaited celebrations in the North East. From
              art to culture, every moment here is filled with energy, togetherness, and memories that last a lifetime.
            </p>
          </div>

          <div class="card-hover bg-white/10 border border-orange-300 p-5 sm:p-7 rounded-2xl reveal zoom-reveal">
            <p class="text-base sm:text-lg leading-relaxed">
              This fest is a vibrant three-day celebration that brings life to our world through art, language, food,
              customs, and traditions. It provides a platform for emerging artists,
              unique talents, and unforgettable experiences. Every year, it welcomes renowned personalities and continues to
              grow in participation, sponsorship, and events.
            </p>
          </div>

          <div class="flex flex-wrap gap-4 sm:gap-5 reveal slide-left">
            <div class="stat-hover bg-white/10 border border-orange-300 p-5 sm:p-7 rounded-2xl w-36 sm:w-40 text-center">
              <h3 class="text-3xl sm:text-4xl font-bold mb-2">40+</h3>
              <p class="text-sm sm:text-base text-gray-300 font-medium">Cultural Events</p>
            </div>
            <div class="stat-hover bg-white/10 border border-orange-300 p-5 sm:p-7 rounded-2xl w-36 sm:w-40 text-center">
              <h3 class="text-3xl sm:text-4xl font-bold mb-2">500+</h3>
              <p class="text-sm sm:text-base text-gray-300 font-medium">Participants</p>
            </div>
          </div>
          <button id="downloadBtn"
            class="bg-orange-400 px-8 sm:px-10 py-3 sm:py-4 rounded-full font-bold text-lg sm:text-xl btn-hover mt-5 sm:mt-7 reveal slide-up">
            Click Here for UDGAM'25 Brochure
          </button>
          <script>
            document.getElementById("downloadBtn").addEventListener("click", function() {
              const link = document.createElement("a");
              link.href = "./assets/pdf/Udgam25_brochure.pdf";
              link.download = "Udgam 2k25 brochure.pdf";
              link.click();
            });
          </script>
        </div>
      </section>

      <section id="excellence"
        class="relative min-h-screen flex flex-col justify-center items-center px-4 sm:px-8 md:px-16 py-12 sm:py-16 bg-gradient-to-b from-[var(--color-wood-medium)] to-[var(--color-wood-dark)] overflow-hidden">

        <div class="max-w-7xl w-full grid md:grid-cols-2 gap-10 sm:gap-14 items-center relative z-10">
          <div class="flex justify-center relative reveal zoom-reveal">
            <div
              class="absolute w-[280px] sm:w-[380px] md:w-[420px] h-[200px] sm:h-[280px] md:h-[320px] bg-orange-400 rounded-3xl blur-lg rotate-card">
            </div>
            <div
              class="relative bg-white rounded-3xl p-5 sm:p-7 shadow-2xl z-10 hover:scale-105 transition-transform duration-500">
              <img src="./assets/images/campus.png" alt="NIT Sikkim Campus"
                class="rounded-2xl w-[240px] sm:w-[300px] md:w-[350px] object-cover mx-auto" />
            </div>
            <div
              class="absolute bottom-[-35px] sm:bottom-[-45px] left-1/2 -translate-x-1/2 bg-orange-600/90 px-5 sm:px-7 py-3 sm:py-4 rounded-2xl shadow-lg z-20 border-2 border-orange-300 hover:scale-110 transition-transform duration-300 text-sm sm:text-base">
              <h4 class="font-bold text-lg">Est. 2010</h4>
              <p class="text-xs sm:text-sm">Institute of National Importance</p>
            </div>
          </div>

          <div class="space-y-5 sm:space-y-7">
            <button
              class="border border-orange-400 text-orange-400 px-4 sm:px-5 py-2 rounded-full text-sm sm:text-base font-bold btn-hover reveal">
              Our Institution
            </button>

            <h2 class="text-4xl sm:text-5xl md:text-6xl font-extrabold reveal slide-right">
              NIT Sikkim <span class="text-orange-400">Excellence</span>
            </h2>

            <p class="text-gray-300 leading-relaxed text-base sm:text-lg reveal slide-left card-hover bg-white/10 border border-orange-300 p-5 sm:p-7 rounded-2xl reveal zoom-reveal">
              Nestled amidst the ethereal beauty of the eastern Himalayas, the National Institute of Technology Sikkim (NIT Sikkim) stands as an Institute of National Importance (INI), symbolizing a unique fusion of advanced technical education with the region's serene natural splendor and vibrant culture.
            </p>

            <h3 class="text-2xl sm:text-3xl font-bold reveal slide-left">
              Where Innovation Meets Tradition
            </h3>

            <p class="text-gray-300 text-base sm:text-lg reveal zoom-reveal card-hover bg-white/10 border border-orange-300 p-5 sm:p-7 rounded-2xl reveal zoom-reveal">
              Established in 2010, NIT Sikkim has rapidly emerged as one of India's premier technical institutions.
              Our campus, set against the backdrop of the majestic Himalayas, provides an inspiring environment
              for academic pursuit and cultural exploration.
            </p>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-5 reveal zoom-reveal">
              <div
                class="feature-card p-4 sm:p-5 rounded-2xl border-2 border-orange-300 bg-white/10 transition-all duration-300">
                <h4 class="font-bold text-orange-400 text-base sm:text-lg mb-2"> Academic Excellence</h4>
                <p class="text-sm sm:text-base text-gray-300">Top-tier engineering and technology programs</p>
              </div>
              <div
                class="feature-card p-4 sm:p-5 rounded-2xl border-2 border-orange-300 bg-white/10 transition-all duration-300">
                <h4 class="font-bold text-orange-400 text-base sm:text-lg mb-2"> Himalayan Campus</h4>
                <p class="text-sm sm:text-base text-gray-300">Serene environment for holistic growth</p>
              </div>
              <div
                class="feature-card p-4 sm:p-5 rounded-2xl border-2 border-orange-300 bg-white/10 transition-all duration-300">
                <h4 class="font-bold text-orange-400 text-base sm:text-lg mb-2"> Diverse Community</h4>
                <p class="text-sm sm:text-base text-gray-300">Students from 25+ states across India</p>
              </div>
              <div
                class="feature-card p-4 sm:p-5 rounded-2xl border-2 border-orange-300 bg-white/10 transition-all duration-300">
                <h4 class="font-bold text-orange-400 text-base sm:text-lg mb-2"> Research Focus</h4>
                <p class="text-sm sm:text-base text-gray-300">Cutting-edge research in technologies</p>
              </div>
            </div>

            <div class="flex flex-wrap gap-4 sm:gap-5 mt-5 sm:mt-7 reveal zoom-reveal justify-center sm:justify-start">
              <div
                class="stat-hover bg-white/10 border-2 border-orange-300 p-4 sm:p-5 rounded-2xl text-center w-32 sm:w-36 transition">
                <h3 class="text-3xl sm:text-4xl font-bold mb-2">1000+</h3>
                <p class="text-sm sm:text-base text-gray-300 font-medium">Students</p>
              </div>
              <div
                class="stat-hover bg-white/10 border-2 border-orange-300 p-4 sm:p-5 rounded-2xl text-center w-32 sm:w-36 transition">
                <h3 class="text-3xl sm:text-4xl font-bold mb-2">100+</h3>
                <p class="text-sm sm:text-base text-gray-300 font-medium">Faculty</p>
              </div>
              <div
                class="stat-hover bg-white/10 border-2 border-orange-300 p-4 sm:p-5 rounded-2xl text-center w-32 sm:w-36 transition">
                <h3 class="text-3xl sm:text-4xl font-bold mb-2">25+</h3>
                <p class="text-sm sm:text-base text-gray-300 font-medium">States</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <script src="./js/aboutus.js"></script>
      </div>
  </body>

</html>
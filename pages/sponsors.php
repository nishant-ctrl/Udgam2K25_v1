<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sponsors</title>
  <link rel="icon" type="image/x-icon" href="<?= $path['fav_dir'] ?>/udg2k25.png">
  <script src="<?= $path['js_dir'] ?>/tailwind.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&family=Open+Sans:wght@400;700&display=swap"
    rel="stylesheet">

  <style>
    ::-webkit-scrollbar {
      display: none;
    }

    body.bg-sponsors-page {
      background-image: url('./assets/images/sponsersBg.png');
      background-size: cover;
      background-position: center top;
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-color: #3e261a;
      overflow-x: hidden;
      color: #f8e9c4;
      font-family: 'Open Sans', sans-serif;
    }

    @keyframes float {

      0%,
      100% {
        transform: translateY(0px);
      }

      50% {
        transform: translateY(-8px);
      }
    }

    @keyframes fadeInUp {
      0% {
        opacity: 0;
        transform: translateY(40px);
      }

      100% {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @keyframes glowPulse {

      0%,
      100% {
        filter: drop-shadow(0 0 8px rgba(255, 215, 100, 0.6));
      }

      50% {
        filter: drop-shadow(0 0 20px rgba(255, 180, 50, 1));
      }
    }

    .fade-in-up {
      opacity: 0;
      transform: translateY(40px);
      transition: opacity 0.8s ease, transform 0.8s ease;
    }

    .fade-in-up.visible {
      opacity: 1;
      transform: translateY(0);
    }

    .sponsor-card {
      background: rgba(40, 25, 10, 0.85);
      border: 2.5px solid rgba(255, 215, 0, 0.6);
      border-radius: 1.75rem;
      box-shadow: 0 0 25px rgba(255, 190, 70, 0.4);
      transition: transform 0.4s ease, box-shadow 0.4s ease;
      backdrop-filter: blur(5px);
      animation: float 6s ease-in-out infinite;

      /* ✅ Fixed uniform size */
      width: 18rem;           /* Same width for all */
      height: 21rem;          /* Same height for all */
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }

    .sponsor-card:hover {
      transform: scale(1.07);
      box-shadow: 0 0 50px rgba(255, 230, 140, 0.9);
    }

    #sponsors-title {
      animation: glowPulse 3s ease-in-out infinite;
      color: #ffe28a;
    }

    .gallery-title {
      font-family: "Georgia", serif;
      letter-spacing: 2px;
    }

    .section-label {
      background: rgba(0, 0, 0, 0.5);
      border: 2px solid #ffcc66;
      border-radius: 1rem;
      display: inline-block;
      padding: 0.75rem 1.5rem;
      color: #ffd77a;
      font-size: 1.5rem;
      text-transform: uppercase;
      letter-spacing: 2px;
      margin-bottom: 1.5rem;
      text-shadow: 0 0 8px rgba(255, 200, 100, 0.8);
      animation: float 5s ease-in-out infinite;
    }

    .sponsor-logo {
      max-width: 200px;
      width: 100%;
      height: auto;
      margin: 0 auto 1rem;
      filter: drop-shadow(0 0 10px rgba(255, 180, 60, 0.7));
      transition: transform 0.3s ease;
    }

    .sponsor-logo:hover {
      transform: scale(1.1);
    }

    .benefits-section {
      background: rgba(20, 10, 5, 0.8);
      border: 3px solid rgba(255, 215, 0, 0.6);
      border-radius: 1.5rem;
      box-shadow: 0 0 30px rgba(255, 180, 50, 0.5);
      padding: 2rem;
      backdrop-filter: blur(6px);
      animation: float 5s ease-in-out infinite;
    }
  </style>
</head>
<link rel="stylesheet" href="<?= $path['css_dir'] ?>/universalStyle.css" />

<body class="bg-sponsors-page min-h-screen relative">
  <?php include "{$path['pages_dir']}/header.php" ?>
  <?php include "{$path['pages_dir']}/doors.php" ?>

  <div class="main-content-wrapper" id="mainContent">
    <div class="container mx-auto px-4 sm:px-6 md:px-10 py-10 sm:py-16 relative z-10">

      <!-- HEADER -->
      <header class="mt-12 text-center mb-16 fade-in-up">
        <h1 id="sponsors-title"
          class="gallery-title text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-extrabold uppercase tracking-widest bg-gradient-to-r from-amber-200 via-yellow-400 to-red-500 text-transparent bg-clip-text drop-shadow-[0_0_15px_rgba(120,60,10,0.5)] leading-tight">
          Our Grand Sponsors
        </h1>
        <div
          class="mx-auto mt-4 h-[3px] w-32 sm:w-44 bg-gradient-to-r from-red-700 via-amber-400 to-red-700 rounded-full animate-pulse">
        </div>
        <p
          class="text-lg sm:text-xl text-amber-100 mt-6 italic tracking-wide drop-shadow-[0_0_6px_rgba(120,60,10,0.5)]">
          With heartfelt gratitude, we celebrate our partners who make Udgam 2025 shine brighter.
        </p>
      </header>

      <!-- SPONSOR CATEGORIES -->
      <section class="fade-in-up space-y-20">

        <!-- BANKING PARTNERS -->
        <div class="text-center">
          <div class="section-label">Our Sponsers</div>
          <div class="flex flex-wrap justify-center gap-10 mt-6">

            <a href="https://www.canarabank.bank.in">
              <div class="sponsor-card p-8 w-72">
              <img src="./assets/images/canaraLogo.avif" alt="Canara Bank" class="sponsor-logo">
              <h3 class="text-2xl font-semibold text-amber-200">Canara Bank</h3>
            </div>
            </a>
            <a href="https://www.unionbankofindia.bank.in/en/home">
              <div class="sponsor-card p-8 w-72">
              <img src="./assets/images/unionLogo.jpg" alt="Union Bank" class="sponsor-logo">
              <h3 class="text-2xl font-semibold text-amber-200">Union Bank of India</h3>
            </div>
            </a>
            <a href="https://nbccindia.in">
              <div class="sponsor-card p-8 w-72">
              <img src="./assets/images/nbccLogo.png" alt="Union Bank" class="sponsor-logo">
              <h3 class="text-2xl font-semibold text-amber-200">NBCC</h3>
            </div>
            </a>
            <a href="https://cisb.co.in">
              <div class="sponsor-card p-8 w-72">
              <img src="./assets/images/cisbLogo.png" alt="Union Bank" class="sponsor-logo">
              <h3 class="text-2xl font-semibold text-amber-200">CISB</h3>
            </div>
            </a>
            <a href="https://www.coca-cola.com/in/en">
              <div class="sponsor-card p-8 w-72">
              <img src="./assets/images/cocaColaLogo.png" alt="Coca Cola" class="sponsor-logo">
              <h3 class="text-2xl font-semibold text-amber-200">Coca-Cola</h3>
            </div>
            </a>
          </div>
        </div>

        <!-- EVENT PARTNER -->
        <div class="text-center">
          <div class="section-label">Racing Partner</div>
          <div class="flex flex-wrap justify-center gap-10 mt-6">
            <a href="https://www.ktmindia.com">
              <div class="sponsor-card p-8 w-72 text-center">
              <img src="./assets/images/ktmLogo.png" alt="KTM Logo" class="sponsor-logo">
              <h3 class="text-3xl font-bold text-amber-200 mb-2">KTM</h3>
            </div>
            </a>
          </div>
        </div>

        <!-- FOOD PARTNERS -->
        <div class="text-center">
          <div class="section-label">Food Partner</div>
          <div class="flex flex-wrap justify-center gap-10 mt-6">
            <a href="https://www.facebook.com/people/Hotel-Twin-Spring-Gangtok/61565147977136/#">
              <div class="sponsor-card p-8 w-72">
                <img src="./assets/images/twinSpringsLogo.png" alt="Twin Springs" class="sponsor-logo">
                <h3 class="text-2xl font-semibold text-amber-200">Twin Spring</h3>
    
              </div>
            </a>
          </div>
        </div>
        <div class="text-center">
          <div class="section-label">Fashion Partner</div>
          <div class="flex flex-wrap justify-center gap-10 mt-6">
            <a href="https://thehouseofrare.com/?srsltid=AfmBOooaGI3audNX21a6xyXkFwyh7RMVcgiEqypYasdAvWjQzPvLVMW-">
              <div class="sponsor-card p-8 w-72">
                <img src="./assets/images/rarerabbitLogo.png" alt="Twin Springs" class="sponsor-logo">
                <h3 class="text-2xl font-semibold text-amber-200">Rare Rabbit</h3>
    
              </div>
            </a>
          </div>
        </div>





        <!-- HOSPITALITY PARTNERS -->
        <div class="text-center">
          <div class="section-label">Hospitality Partners</div>
          <div class="flex flex-wrap justify-center gap-10 mt-6">
            <a href="https://www.facebook.com/ravongla">
              <div class="sponsor-card p-8 w-72">
              <img src="./assets/images/ravanglaStarLogo.jpeg" alt="Hotel Ravangla Star" class="sponsor-logo">
              <h3 class="text-2xl font-semibold text-amber-200">Hotel Ravangla Star</h3>
            </div>
            </a>
            <a href="https://hotelbuddhaparkravangla.com/home.html">
              <div class="sponsor-card p-8 w-72">
              <img src="./assets/images/buddhaResidencyLogo.png" alt="Buddha Residency" class="sponsor-logo">
              <h3 class="text-2xl font-semibold text-amber-200">Buddha Residency</h3>
              
            </div>
            </a>
            <a href="https://www.facebook.com/thealnus.ravangla">
              <div class="sponsor-card p-8 w-72">
              <img src="./assets/images/alnusRavanglaLogo.png" alt="The Alnus Ravangla" class="sponsor-logo">
              <h3 class="text-2xl font-semibold text-amber-200">The Alnus Ravangla</h3>
              
            </div>
            </a>
          </div>
        </div>
      </section>



    </div>
  </div>

  <script>
    const faders = document.querySelectorAll('.fade-in-up');
    const appearOptions = { threshold: 0.1 };
    const appearOnScroll = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
        if (!entry.isIntersecting) return;
        entry.target.classList.add('visible');
        observer.unobserve(entry.target);
      });
    }, appearOptions);
    faders.forEach(fader => appearOnScroll.observe(fader));
  </script>
</body>

</html>
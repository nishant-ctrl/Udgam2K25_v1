<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sponsors | Fest 2025</title>
  <script src="./js/tailwind.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&family=Open+Sans:wght@400;700&display=swap"
    rel="stylesheet">

  <style>
    /* Background styling */
    body.bg-sponsors-page {
      background-image: url('./assets/images/sponsersBg.png');
      background-size: cover;
      background-position: center top;
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-color: #3e261a;
      overflow-x: hidden;
    }

    /* Floating animation for subtle movement */
    @keyframes float {
      0%, 100% {
        transform: translateY(0px);
      }
      50% {
        transform: translateY(-8px);
      }
    }

    /* Fade-in on scroll */
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

    .fade-in-up {
      opacity: 0;
      transform: translateY(40px);
      transition: opacity 0.8s ease, transform 0.8s ease;
    }

    .fade-in-up.visible {
      opacity: 1;
      transform: translateY(0);
    }

    /* Glowing button effect */
    .vintage-button {
      background: linear-gradient(90deg, #8b0000, #ff4500);
      box-shadow: 0 0 15px rgba(255, 165, 0, 0.6);
      transition: all 0.3s ease;
    }

    .vintage-button:hover {
      transform: scale(1.07);
      box-shadow: 0 0 30px rgba(255, 200, 0, 0.9);
    }

    /* Vintage frame for panels */
    .vintage-panel {
      background: rgba(30, 15, 10, 0.75);
      border: 4px solid rgba(255, 215, 0, 0.7);
      border-radius: 1.5rem;
      box-shadow: 0 0 25px rgba(0, 0, 0, 0.7);
      animation: float 4s ease-in-out infinite;
    }

    .sponsor-card {
      background: rgba(255, 250, 230, 0.15);
      border: 3px solid rgba(255, 215, 0, 0.5);
      border-radius: 1.5rem;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      animation: float 6s ease-in-out infinite;
    }

    .sponsor-card:hover {
      transform: scale(1.05);
      box-shadow: 0 0 40px rgba(255, 200, 0, 0.8);
    }

    /* Heading animation */
    @keyframes glowText {
      0%, 100% {
        text-shadow: 0 0 10px #ffb300, 0 0 20px #ff4500;
      }
      50% {
        text-shadow: 0 0 20px #ff6600, 0 0 40px #ff0000;
      }
    }

    #sponsors-title {
      animation: glowText 3s ease-in-out infinite alternate;
      color: #ffe28a;
    }
    .gallery-title {
    font-family: "Georgia", serif;
    letter-spacing: 2px;
    text-shadow: 2px 2px 6px rgba(120, 60, 10, 0.4);
    }

    /* Gentle glowing animation */
    @keyframes glowPulse {
    0%, 100% {
        filter: drop-shadow(0 0 8px rgba(255, 215, 100, 0.6));
    }
    50% {
        filter: drop-shadow(0 0 20px rgba(255, 180, 50, 1));
    }
    }

    #sponsors-title {
    animation: glowPulse 3s ease-in-out infinite;
    }
  </style>
</head>

<body class="bg-sponsors-page min-h-screen relative">
  <?php include 'src/components/header.php'?>

  <div class="container mx-auto px-4 py-16 relative z-10">

    <!-- HEADER -->
    <header class="text-center mb-20 mt-16 fade-in-up">
      <h1 id="sponsors-title"
          class="gallery-title text-6xl md:text-7xl font-extrabold uppercase tracking-widest bg-gradient-to-r from-amber-200 via-yellow-400 to-red-500 text-transparent bg-clip-text drop-shadow-[0_0_15px_rgba(120,60,10,0.5)]">
        Our Grand Sponsors
      </h1>

      <div class="mx-auto mt-4 h-[4px] w-36 bg-gradient-to-r from-red-700 via-amber-400 to-red-700 rounded-full animate-pulse"></div>

      <p class="text-lg md:text-xl text-amber-100 mt-6 font-[Georgia] italic tracking-wide drop-shadow-[0_0_6px_rgba(120,60,10,0.5)]">
        The generous partners who help make the magic happen.
      </p>
    </header>


    <!-- WHY SPONSOR US -->
    <section id="why-sponsor-us" class="mb-20 fade-in-up">
      <div class="vintage-panel mx-auto max-w-4xl p-10">
        <h2 class="text-4xl font-luckiest-guy uppercase text-center mb-6 text-amber-300 drop-shadow-lg">
          Why Sponsor Us?
        </h2>
        <div class="text-center font-open-sans text-amber-100 text-lg space-y-4">
          <p>
            UDGAM’25, one of the biggest cultural festivals in North East India, offers your brand a great opportunity to connect with a large and diverse audience. Partnering with our reputed institute of national importance will help your brand build a stronger presence across the region and beyond.
          </p>
          <p>
            Our sponsors receive excellent visibility through mentions on our official website, social media platforms, and displays across the event venue.
          </p>
          <p>
            By supporting us, you promote your brand while fostering creativity, empowering young minds, and building lasting connections for future collaborations.
          </p>
          <a href="mailto:udgam@nitsikkim.ac.in"
            class="inline-block mt-6 px-8 py-3 text-white font-bold uppercase rounded-lg shadow-xl vintage-button">
            Inquire About Sponsorship
          </a>
        </div>
      </div>
    </section>

    <!-- SPONSOR TIERS -->
    <section id="sponsor-tiers" class="mt-20 fade-in-up">
      <div class="text-center mb-16">
        <div class="inline-block px-10 py-4 committee-label bg-black/40 rounded-xl border border-amber-500">
          <p class="text-2xl font-semibold font-open-sans uppercase text-amber-50 tracking-wider">
            Our Sponsors
          </p>
        </div>
      </div>

      <div id="sponsor-cards" class="flex flex-wrap justify-center gap-10">
        <div class="sponsor-card w-full max-w-lg p-12 text-center shadow-2xl relative">
          <h3 class="text-6xl font-luckiest-guy uppercase text-center text-red-700">
            Coming Soon!
          </h3>
        </div>
      </div>
    </section>
  </div>

  <!-- Scroll animation script -->
  <script>
    const faders = document.querySelectorAll('.fade-in-up');
    const appearOptions = { threshold: 0.1 };

    const appearOnScroll = new IntersectionObserver(function (entries, observer) {
      entries.forEach(entry => {
        if (!entry.isIntersecting) return;
        entry.target.classList.add('visible');
        observer.unobserve(entry.target);
      });
    }, appearOptions);

    faders.forEach(fader => {
      appearOnScroll.observe(fader);
    });
  </script>
</body>

</html>

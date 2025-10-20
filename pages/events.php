<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Udgam 2025 | Events</title>
  <link rel="icon" type="image/x-icon" href="<?= $path['fav_dir']?>/udg2k25.png">
  <script src="<?= $path['js_dir']?>/tailwind.js"></script>
  <link rel="stylesheet" href="<?=$path['css_dir']?>/sponsors.css" />
  <link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&family=Open+Sans:wght@400;700&display=swap"
    rel="stylesheet">
  <style>
    /* -------------------------------------------------------------------------- */
    /* --- BASE STYLES (NO CHANGE) --- */
    /* -------------------------------------------------------------------------- */
    html, body {
        width: 100%; /* Changed from 100vw to 100% for better compatibility */
        height: 100vh;
        overflow: hidden;
        margin: 0;
        padding: 0;
        position: relative;
    }

    body.bg-events-page {
      background-image: url('assets/images/event.png');
      background-size: cover;
      background-position: center top;
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-color: #0a0a0a;
      display: flex;
      flex-direction: column;
    }

    /* -------------------------------------------------------------------------- */
    /* --- FERRIS WHEEL STYLES (MODIFIED FOR RESPONSIVENESS) --- */
    /* -------------------------------------------------------------------------- */
    .ferris-elements-container {
      position: fixed;
      top: 60%;
      right: 50px;
      transform: translateY(-50%);
      width: 400px; /* Base size */
      height: 400px;
      z-index: 5;
    }

    .front-ferris-wheel-svg {
      width: 100%;
      height: 100%;
      opacity: 0.9;
      animation: frontFerrisRotate 45s linear infinite;
      /* --- FIX APPLIED HERE --- */
      transform-origin: 50% 50%; /* Changed from 200px 200px to 50% 50% for correct scaling rotation */
      /* ------------------------- */
    }

    .fixed-ferris-support-svg {
      position: absolute;
      bottom: 0;
      left: 0;
      width: 400px;
      height: 100px;
      z-index: 4;
      opacity: 0.9;
    }
    /* -------------------------------------------------------------------------- */
    /* --- MAIN CONTENT (MODIFIED FOR RESPONSIVENESS) --- */
    /* -------------------------------------------------------------------------- */
    .main-content {
        flex-grow: 1;
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
        height: 100%;
        box-sizing: border-box;
        padding-top: 64px;
        overflow-y: auto;
        /* Default padding-right for desktop/large screen to avoid Ferris wheel */
        padding-right: 480px; /* 400px width + 50px right margin + 30px extra buffer */
    }


    /* -------------------------------------------------------------------------- */
    /* --- Header (MODIFIED FOR RESPONSIVENESS) --- */
    /* -------------------------------------------------------------------------- */
    /* --- Font Imports --- */


@import url('https://fonts.googleapis.com/css2?family=Luckiest+Guy&family=Bangers&family=Cinzel:wght@400;700&display=swap');

.font-carnival-poster {
    font-family: 'Bangers', cursive; /* Comic-book style, great for bold headlines */
    /* Alternative: 'Luckiest Guy' if Bangers is too comic, or 'Passion One' */
}
.font-cinzel {
    font-family: 'Cinzel', serif; /* Elegant, classic serif for subtitles */
}

/* --- Header Styling with Background Integration --- */+
.header-with-bg-image {
    /* The provided image will be set as the background of a parent container
       or directly on this header, depending on your layout.
       For this example, assume it's set on this header's container.
       The CSS below styles the *text* to complement it. */
    background: transparent; /* Assuming the image is handled by a parent or element above */
    padding-top: 50px; /* Adjust as needed based on where text should sit on image */
    padding-bottom: 50px;
    /* You might want to add a semi-transparent overlay *over* the image if text readability is an issue */
    /* background-color: rgba(0, 0, 0, 0.2); */
}

/* --- Vintage Carnival Title (H1) --- */
.vintage-carnival-title {
    color: #ffcc00; /* Bright carnival yellow/gold */
    text-shadow:
        -3px -3px 0 #8B0000,   /* Dark Red outline */
         3px -3px 0 #8B0000,
        -3px  3px 0 #8B0000,
         3px  3px 0 #8B0000,
        -6px -6px 0 #d4af37,   /* Deep Gold secondary outline */
         6px -6px 0 #d4af37,
        -6px  6px 0 #d4af37,
         6px  6px 0 #d4af37,
        10px 10px 15px rgba(0,0,0,0.8); /* Strong drop shadow for depth */
    letter-spacing: 0.18em; /* Very wide spacing for a grand feel */
    line-height: 1; /* Keep lines tight */
    /* Add a subtle animation to make it feel like an old marquee sign */
    animation: marquee-pulse 2.5s infinite alternate ease-in-out;
    -webkit-text-stroke: 1.5px #A0522D; /* A subtle stroke for carved look */
}

@keyframes marquee-pulse {
    0% {
        transform: scale(1);
        text-shadow:
            -3px -3px 0 #8B0000, 3px -3px 0 #8B0000, -3px 3px 0 #8B0000, 3px 3px 0 #8B0000,
            -6px -6px 0 #d4af37, 6px -6px 0 #d4af37, -6px 6px 0 #d4af37, 6px 6px 0 #d4af37,
            10px 10px 15px rgba(0,0,0,0.8);
        color: #ffcc00;
    }
    50% {
        transform: scale(1.01); /* Very subtle growth */
        text-shadow:
            -3px -3px 0 #8B0000, 3px -3px 0 #8B0000, -3px 3px 0 #8B0000, 3px 3px 0 #8B0000,
            -7px -7px 0 #ffd700, 7px -7px 0 #ffd700, -7px 7px 0 #ffd700, 7px 7px 0 #ffd700, /* Gold outline brighter */
            12px 12px 20px rgba(0,0,0,0.9); /* Shadow becomes more pronounced */
        color: #ffe65a; /* Slightly brighter yellow */
    }
    100% {
        transform: scale(1);
        text-shadow:
            -3px -3px 0 #8B0000, 3px -3px 0 #8B0000, -3px 3px 0 #8B0000, 3px 3px 0 #8B0000,
            -6px -6px 0 #d4af37, 6px -6px 0 #d4af37, -6px 6px 0 #d4af37, 6px 6px 0 #d4af37,
            10px 10px 15px rgba(0,0,0,0.8);
        color: #ffcc00;
    }
}

/* --- Vintage Carnival Subtitle (P) --- */
.vintage-carnival-subtitle {
    color: #FDF5E6; /* Creamy white for contrast */
    text-shadow: 3px 3px 5px rgba(0,0,0,0.7), 1px 1px 0 #8B0000; /* Strong shadow + red outline */
    letter-spacing: 0.1em; /* More spacing for elegance */
    line-height: 1.4; /* Better readability */
    font-weight: 700; /* Bold for impact */
    font-style: italic; /* Classic touch */
    /* Subtle animation for the subtitle to match the vintage feel */
    animation: text-wobble 4s infinite ease-in-out alternate;
}

@keyframes text-wobble {
    0%, 100% {
        transform: translateY(0) rotateZ(0);
        opacity: 1;
    }
    50% {
        transform: translateY(-2px) rotateZ(0.2deg); /* Very slight wobble/lift */
        opacity: 0.98; /* Subtle dim */
    }
}

/* --- General Styling (Adjust based on your actual page layout) --- */
body {
    background-color: #333; /* Dark neutral if image doesn't cover whole body */
    margin: 0;
    padding: 0;
}
/* This is important: ensure your header's parent or the header itself is set to use the image */
/* Example: if you wrap your header in a div with id="main-header-container" */
#main-header-container {
    background-image: url('your-background-image.jpg'); /* Replace with your image path */
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    /* Set a min-height to ensure the background image is visible */
    min-height: 400px; /* Adjust as needed */
    display: flex; /* For centering content vertically if needed */
    align-items: center;
    justify-content: center;
    flex-direction: column;
}

    /* -------------------------------------------------------------------------- */
    /* --- MEDIA QUERIES FOR RESPONSIVENESS --- */
    /* -------------------------------------------------------------------------- */

    /* Tablet and smaller desktops (992px max-width) */
    @media (max-width: 1200px) {
        .ferris-elements-container {
            /* Reduce size slightly on smaller desktops/large tablets */
            width: 300px;
            height: 300px;
            right: 30px;
        }

        .fixed-ferris-support-svg {
            width: 300px;
            height: 75px; /* Proportionally adjust height */
        }

        .main-content {
            /* Adjust padding to account for the smaller wheel */
            padding-right: 360px; /* 300px width + 30px margin + 30px buffer */
        }
        
        /* Reduce main heading size */
        #sponsors-title {
            font-size: 5rem; /* 50px */
        }
    }


    /* Mobile and small tablets (768px max-width) */
    @media (max-width: 768px) {
        /* Hide the Ferris Wheel entirely on small screens where space is critical */
        .ferris-elements-container {
            display: none;
        }

        .main-content {
            /* Remove the right padding since the wheel is hidden */
            padding-right: 1rem; /* Use a standard padding */
            padding-left: 1rem;
        }

        /* Adjust font sizes for mobile legibility */
        #sponsors-title {
            font-size: 3rem; /* Smaller heading */
        }
        .wooden-sign-container h2 {
            font-size: 2.5rem;
        }
        .wooden-day-plank {
            font-size: 1.2rem;
            padding: 12px 20px;
        }
        
        /* Allow event cards to stack nicely */
        .event-card {
            width: 100%; /* Take full width on mobile */
            max-width: 400px; /* Prevent cards from getting too wide on narrow screens */
        }
    }

    /* -------------------------------------------------------------------------- */
    /* --- REST OF ORIGINAL STYLES (KEPT BELOW) --- */
    /* -------------------------------------------------------------------------- */
    @keyframes frontFerrisRotate {
      0% {
        transform: rotate(0deg);
      }
      100% {
        transform: rotate(360deg);
      }
    }
    /* Styles for the floating elements */
    .floating-element {
      position: fixed; /* Changed from absolute to fixed to ensure they float over the content */
      font-size: 2.5rem;
      opacity: 0.8;
      pointer-events: none;
      filter: saturate(0.6) brightness(1.2);
      text-shadow: 0 0 8px rgba(255, 215, 0, 0.5);
      animation: floatEffect 15s ease-in-out infinite;
      z-index: 3;
      /* CSS variables for JS to control initial position and animation */
      left: clamp(5%, var(--initial-left, 50%), 90%);
      top: clamp(5%, var(--initial-top, 50%), 90%);
    }

    /* Keyframes for the floating effect - constrained to stay within 0-100% viewport */
    @keyframes floatEffect {
      0% {
        transform: translate(0, 0) scale(1);
      }
      25% {
        transform: translate(calc(var(--rand-x) * 20vw), calc(var(--rand-y) * 20vh)) scale(1.1);
      }
      50% {
        transform: translate(calc(var(--rand-x) * 10vw), calc(var(--rand-y) * 15vh)) scale(0.9);
      }
      75% {
        transform: translate(calc(var(--rand-x) * 25vw), calc(var(--rand-y) * 18vh)) scale(1.05);
      }
      100% {
        transform: translate(0, 0) scale(1);
      }
    }

    /* Add sparkle animation for the JS */
    @keyframes sparkleEffect {
        0% {
            transform: scale(0) rotate(0deg);
            opacity: 1;
        }
        50% {
            transform: scale(1) rotate(180deg);
            opacity: 1;
        }
        100% {
            transform: scale(0) rotate(360deg);
            opacity: 0;
        }
    }
    .event-selection-area {
      display: flex;
      flex-direction: column;
      gap: 20px;
      margin-top: 40px;
      margin-bottom: 40px;
      align-items: center;
    }
    .day-selector-buttons {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 20px;
    }
    .wooden-sign-container {
      margin-bottom: 30px;
      position: relative;
      padding: 20px 40px;
      background: linear-gradient(to bottom, #8B4513 0%, #A0522D 50%, #8B4513 100%);
      border: 4px solid #4E2A1E;
      border-radius: 10px;
      box-shadow: 0 10px 20px rgba(0,0,0,0.6), inset 0 0 10px rgba(255,255,255,0.2);
      transform: rotate(-2deg);
      max-width: fit-content;
    }
    .wooden-sign-container h2 {
      font-family: 'Luckiest Guy', cursive;
      font-size: 3.5rem;
      color: #FFD700;
      text-shadow: 
        -2px -2px 0 #8B4513,  
         2px -2px 0 #8B4513,
        -2px  2px 0 #8B4513,
         2px  2px 0 #8B4513,
         0 0 15px rgba(255,215,0,0.8);
      margin: 0;
      line-height: 1;
      position: relative;
      z-index: 1;
    }
    .wooden-sign-container::before,
    .wooden-sign-container::after {
        content: '';
        position: absolute;
        width: 12px;
        height: 12px;
        background-color: #4E2A1E;
        border-radius: 50%;
        border: 2px solid #2C180E;
        box-shadow: inset 0 0 3px rgba(0,0,0,0.5);
        z-index: 2;
    }
    .wooden-sign-container::before { top: 10px; left: 10px; }
    .wooden-sign-container::after { top: 10px; right: 10px; }
    .wooden-sign-container .bottom-left::before { bottom: 10px; left: 10px; top: auto; }
    .wooden-sign-container .bottom-right::before { bottom: 10px; right: 10px; top: auto; left: auto;}
    .wooden-day-selector {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 15px;
        padding: 20px;
        background: radial-gradient(circle at center, #A0522D 0%, #8B4513 100%);
        border: 6px solid #4E2A1E;
        border-radius: 15px;
        box-shadow: 0 10px 25px rgba(0,0,0,0.7), inset 0 0 15px rgba(0,0,0,0.4);
        max-width: 800px;
        margin-left: auto;
        margin-right: auto;
        transform: rotate(1deg);
    }
    .wooden-day-plank {
        background: linear-gradient(to right, #B8860B 0%, #FFD700 50%, #B8860B 100%);
        color: #4E2A1E;
        padding: 15px 25px;
        border-radius: 8px;
        font-family: 'Luckiest Guy', cursive;
        font-size: 1.8rem;
        cursor: pointer;
        box-shadow: 0 4px 10px rgba(0,0,0,0.4), inset 0 0 8px rgba(255,255,255,0.3);
        transition: all 0.2s ease;
        border: 3px solid #8B4513;
        text-transform: uppercase;
        letter-spacing: 1px;
        text-shadow: 1px 1px 2px rgba(0,0,0,0.2);
        position: relative;
    }
    .wooden-day-plank:hover {
        background: linear-gradient(to right, #FFD700 0%, #F5DEB3 50%, #FFD700 100%);
        transform: translateY(-3px) scale(1.02);
        box-shadow: 0 7px 15px rgba(0,0,0,0.6), inset 0 0 10px rgba(255,255,255,0.4);
    }
    .wooden-day-plank.active {
        background: linear-gradient(to right, #FFD700 0%, #FFEA00 50%, #FFD700 100%);
        transform: translateY(-5px) scale(1.05);
        box-shadow: 0 10px 20px rgba(0,0,0,0.8), inset 0 0 12px rgba(255,255,255,0.5);
        border-color: #4E2A1E;
        cursor: default;
    }
    .wooden-day-plank::before, .wooden-day-plank::after {
        content: '';
        position: absolute;
        width: 8px;
        height: 8px;
        background-color: #4E2A1E;
        border-radius: 50%;
        border: 1px solid #2C180E;
        box-shadow: inset 0 0 2px rgba(0,0,0,0.4);
        z-index: 1;
    }
    .wooden-day-plank::before { top: 5px; left: 5px; }
    .wooden-day-plank::after { top: 5px; right: 5px; }
    #eventDetailsList {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 20px;
        margin-top: 30px;
    }
    .event-card {
        width: 300px;
        background-color: #795548;
        border: 5px solid #D4A373;
        border-radius: 10px;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.6);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        overflow: hidden;
        text-align: center;
        position: relative;
        padding-bottom: 20px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }
    .event-card:hover {
        transform: translateY(-5px) scale(1.02);
        box-shadow: 0 12px 24px rgba(0, 0, 0, 0.8);
    }
    .event-card-image-container {
        width: 100%;
        position: relative;
        padding-top: 100%;
        overflow: hidden;
        border-bottom: 3px solid #D4A373;
        background-color: #554035;
    }
    .event-card img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: contain;
        transition: transform 0.3s ease;
    }
    .event-card:hover img {
        transform: scale(1.05);
    }
    .event-card-content {
        padding: 15px;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }
    .event-card h3 {
        font-family: 'Luckiest Guy', cursive;
        font-size: 1.7rem;
        color: #FFD700;
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.7);
        margin-bottom: 10px;
        line-height: 1.2;
    }
    .event-card p {
        font-family: 'Open Sans', sans-serif;
        color: #F5DEB3;
        font-size: 0.95rem;
        margin-bottom: 5px;
    }
    .event-card .coordinators {
        font-style: italic;
        font-size: 0.85rem;
        color: #D4A373;
    }
    .event-card .card-buttons {
        margin-top: 15px;
        display: flex;
        justify-content: center;
        gap: 10px;
        flex-wrap: wrap;
    }
    .event-card .card-button {
        display: inline-block;
        background-color: #B8860B;
        color: #4E2A1E;
        padding: 8px 15px;
        border-radius: 5px;
        text-decoration: none;
        font-family: 'Open Sans', sans-serif;
        font-weight: bold;
        font-size: 0.9rem;
        transition: background-color 0.2s ease, transform 0.2s ease;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
    }
    .event-card .card-button:hover {
        background-color: #FFD700;
        transform: translateY(-2px);
    }

  </style>
</head>
<body class="bg-events-page">
  <?php include "{$path['pages_dir']}/header.php" ?>
  <div class="main-content">
    <div class="container mx-auto px-4 relative z-10">
   <header class="text-center mb-16 mt-16 relative header-with-bg-image">
    <h1 id="sponsors-title"
        class="text-5xl sm:text-6xl md:text-7xl lg:text-8xl font-extrabold pb-4 uppercase tracking-widest
              relative z-20 font-carnival-poster
              bg-gradient-to-r from-red-600 via-yellow-400 to-amber-300 text-transparent bg-clip-text
              drop-shadow-[0_0_20px_rgba(120,60,10,0.7)] leading-tight">
        Our Exciting Events
    </h1>
    <p class="text-xl bg-[#795548] rounded-xl py-1 sm:text-2xl mb-10 max-w-2xl mx-auto leading-relaxed
              tracking-wide relative z-20 vintage-carnival-subtitle font-cinzel
              text-amber-100 drop-shadow-[0_4px_10px_rgba(0,0,0,0.9)]">
        Step right up! Explore the vibrant lineup of cultural and technical events we have in store for you this year!
    </p>
</header>

      <div class="event-selection-area">
        <div class="wooden-sign-container flex justify-center items-center">
            <h2 class="bottom-left bottom-right">Select a Day</h2>
        </div>

        <div class="wooden-day-selector">
          <button class="wooden-day-plank" data-day="Day 0">Day 0</button>
          <button class="wooden-day-plank" data-day="Day 1">Day 1</button>
          <button class="wooden-day-plank" data-day="Day 2">Day 2</button>
          <button class="wooden-day-plank" data-day="Day 3">Day 3</button>
          <button class="wooden-day-plank" data-day="Extra">Extra</button>
        </div>

        <div id="eventDisplayBox">
          <h2 id="eventDisplayTitle" class="text-4xl font-luckiest-guy text-amber-400 text-center mt-8 mb-4"></h2>
          <div id="eventDetailsList">
             <div class="sponsor-card w-full max-w-lg p-12 text-center shadow-2xl relative">
                    <h3 class="text-6xl font-luckiest-guy uppercase text-center text-red-700 ">
                        Select a Day to see events!
                    </h3>
                    
                </div>
          </div>
        </div>

      </div> </div>
  </div>
  <div class="floating-element">🎪</div>
  <div class="floating-element">🎠</div>
  <div class="floating-element">🎡</div>
  <div class="floating-element">🎢</div>
  <div class="floating-element">🎭</div>
  <div class="floating-element">🎷</div>
  <div class="floating-element">💃</div>
  <div class="floating-element">🕺</div>
  <div class="floating-element">🎨</div>
  <div class="floating-element">🥁</div>
  <div class="ferris-elements-container">
    <svg class="front-ferris-wheel-svg" viewBox="0 0 400 400" xmlns="http://www.w3.org/2000/svg">
      <circle cx="200" cy="200" r="190" fill="none" stroke="#A0522D" stroke-width="8" />
      <circle cx="200" cy="200" r="180" fill="none" stroke="#8B4513" stroke-width="12" />

      <circle cx="200" cy="200" r="50" fill="#B8860B" />
      <circle cx="200" cy="200" r="40" fill="#A0522D" />
      <circle cx="200" cy="200" r="20" fill="#8B4513" />

      <g>
        <?php for ($i = 0; $i < 12; $i++): ?>
          <?php
            $angle = $i * (360 / 12); // Angle for each spoke/gondola
            $radiusGondola = 170; // Radius for gondola position
            $radiusSpokeInner = 50; // Inner radius for spokes (from hub)
            $radiusSpokeOuter = 180; // Outer radius for spokes (to rim)

            $spokeInnerX = 200 + $radiusSpokeInner * cos(deg2rad($angle));
            $spokeInnerY = 200 + $radiusSpokeInner * sin(deg2rad($angle));

            $spokeOuterX = 200 + $radiusSpokeOuter * cos(deg2rad($angle));
            $spokeOuterY = 200 + $radiusSpokeOuter * sin(deg2rad($angle));

            $gondolaCenterX = 200 + $radiusGondola * cos(deg2rad($angle));
            $gondolaCenterY = 200 + $radiusGondola * sin(deg2rad($angle));

            $gondolaWidth = 40;
            $gondolaHeight = 25;
          ?>

          <line x1="<?= $spokeInnerX ?>" y1="<?= $spokeInnerY ?>" x2="<?= $spokeOuterX ?>" y2="<?= $spokeOuterY ?>"
            stroke="#A0522D" stroke-width="4" />

          <line x1="<?= $spokeOuterX ?>" y1="<?= $spokeOuterY ?>" x2="<?= $gondolaCenterX ?>" y2="<?= $gondolaCenterY ?>"
            stroke="#8B4513" stroke-width="2" />

          <rect x="<?= $gondolaCenterX - ($gondolaWidth / 2) ?>" y="<?= $gondolaCenterY - ($gondolaHeight / 2) ?>"
            width="<?= $gondolaWidth ?>" height="<?= $gondolaHeight ?>" rx="5" ry="5"
            fill="#A0522D" stroke="#8B4513" stroke-width="2"
            transform="rotate(-<?= $angle ?> <?= $gondolaCenterX ?> <?= $gondolaCenterY ?>)" />

          <circle cx="<?= $gondolaCenterX ?>" cy="<?= $gondolaCenterY ?>" r="6" fill="#FFD700" opacity="0.9">
            <animate attributeName="opacity" values="0.9;0.5;0.9" dur="2s" begin="<?= $i * 0.1 ?>s" repeatCount="indefinite" />
          </circle>

        <?php endfor; ?>
      </g>
    </svg>

    <svg class="fixed-ferris-support-svg" viewBox="0 0 400 100" xmlns="http://www.w3.org/2000/svg">
      <polygon points="170,0 230,0 280,100 120,100" fill="#B8860B" stroke="#8B4513" stroke-width="4" opacity="0.9" />
      <polygon points="180,0 220,0 260,100 140,100" fill="#A0522D" stroke="#8B4513" stroke-width="2" opacity="0.9" />

      <rect x="190" y="-20" width="20" height="40" fill="#8B4513" opacity="0.9" />

      <rect x="100" y="80" width="200" height="20" fill="#8B4513" stroke="#A0522D" stroke-width="3" opacity="0.9" />
      <rect x="110" y="70" width="180" height="10" fill="#A0522D" opacity="0.8" />
    </svg>
  </div>
  <script>
      let eventsData = {}; // This will hold the data from events.json
      let currentDay = null; // Keep track of the currently selected day

      async function fetchEventsData() {
          try {
              const response = await fetch('assets/events.json'); // Fetch the external JSON file
              if (!response.ok) {
                  throw new Error(`HTTP error! status: ${response.status}`);
              }
              eventsData = await response.json(); // Parse the JSON data
              console.log("Events data loaded:", eventsData);
              // Optionally, display events for Day 0 or a default message after loading
              // showSelectedDayEvents('Day 0'); 
          } catch (error) {
              console.error("Could not fetch events data:", error);
              document.getElementById('eventDetailsList').innerHTML = `
                  <div class="sponsor-card w-full max-w-lg p-12 text-center shadow-2xl relative">
                      <h3 class="text-6xl font-luckiest-guy uppercase text-center text-red-700 ">
                          Error loading events. Please try again later.
                      </h3>
                  </div>
              `;
          }
      }

      function showSelectedDayEvents(day) {
          currentDay = day; // Update current day

          // Update active state for day buttons (now wooden planks)
          const dayButtons = document.querySelectorAll('.wooden-day-plank');
          dayButtons.forEach(button => {
            if (button.dataset.day === day) {
              button.classList.add('active');
            } else {
              button.classList.remove('active');
            }
          });

          const eventDisplayTitle = document.getElementById('eventDisplayTitle');
          const eventDetailsList = document.getElementById('eventDetailsList');
          eventDetailsList.innerHTML = ''; // Clear previous events

          const eventsForDay = eventsData[day];

          if (eventsForDay && eventsForDay.length > 0) {
              eventDisplayTitle.textContent = `${day} Events`;
              eventsForDay.forEach(event => {
                  const eventCard = document.createElement('div');
                  eventCard.classList.add('event-card');
                  eventCard.innerHTML = `
                      <div class="event-card-image-container">
                          <img src="${event.event_image}" alt="${event.event_name}">
                      </div>
                      <div class="event-card-content">
                          <div>
                              <h3>${event.event_name}</h3>
                              ${event.event_deadline ? `<p><strong>Deadline:</strong> ${event.event_deadline}</p>` : ''}
                              ${event.event_venue ? `<p><strong>Venue:</strong> ${event.event_venue}</p>` : ''}
                              ${event.event_time ? `<p><strong>Time:</strong> ${event.event_time}</p>` : ''}
                              ${event.event_coordinators && event.event_coordinators.length > 0 ?
                                  `<p class="coordinators"><strong>Coordinators:</strong> ${event.event_coordinators.join(', ')}</p>` : ''
                              }
                          </div>
                          <div class="card-buttons">
                              <a href="${event.event_registration_link}" target="_blank" class="card-button">Register</a>
                              <a href="${event.event_rulebook}" target="_blank" class="card-button">Rulebook</a>
                          </div>
                      </div>
                  `;
                  eventDetailsList.appendChild(eventCard);
              });
          } else {
              eventDisplayTitle.textContent = ''; // Clear title if no events
              eventDetailsList.innerHTML = `
                  <div class="sponsor-card w-full max-w-lg p-12 text-center shadow-2xl relative">
                      <h3 class="text-6xl font-luckiest-guy uppercase text-center text-red-700 ">
                          No events scheduled for ${day} yet!
                      </h3>
                  </div>
              `;
          }
      }

      document.addEventListener('DOMContentLoaded', () => {
        fetchEventsData().then(() => {
            // Initially show a message prompting user to select a day
            document.getElementById('eventDisplayTitle').textContent = '';
            document.getElementById('eventDetailsList').innerHTML = `
                <div class="sponsor-card w-full max-w-lg p-12 text-center shadow-2xl relative">
                    <h3 class="text-6xl font-luckiest-guy uppercase text-center text-red-700 ">
                        Select a Day to see events!
                    </h3>
                </div>
            `;
        });

        // --- Day Selection Buttons (now wooden planks) ---
        const dayButtons = document.querySelectorAll('.wooden-day-plank');
        dayButtons.forEach(button => {
          button.addEventListener('click', () => {
            showSelectedDayEvents(button.dataset.day);
          });
        });

        // Add some interactive sparkle effects
        document.addEventListener("mousemove", function (e) {
            if (Math.random() > 0.99) {
            createSparkle(e.clientX, e.clientY);
            }
        });

        function createSparkle(x, y) {
            const sparkle = document.createElement("div");
            sparkle.style.position = "fixed";
            sparkle.style.left = x + "px";
            sparkle.style.top = y + "px";
            sparkle.style.width = "4px";
            sparkle.style.height = "4px";
            sparkle.style.background = "#FFD700";
            sparkle.style.borderRadius = "50%";
            sparkle.style.pointerEvents = "none";
            sparkle.style.zIndex = "9999";
            sparkle.style.animation = "sparkleEffect 1s ease-out forwards";

            document.body.appendChild(sparkle);

            setTimeout(() => {
            sparkle.remove();
            }, 10);
        }

        // --- JavaScript for randomizing floating element positions and animation delays (MODIFIED) ---
        const floatingElements = document.querySelectorAll('.floating-element');
        const elementSize = 40; // Approx size of the emoji (2.5rem ≈ 40px)

        floatingElements.forEach((element, index) => {
            // Use window.innerWidth and window.innerHeight from the script
            const maxLeft = window.innerWidth - elementSize;
            const maxTop = window.innerHeight - elementSize;

            // Set initial random position within safe bounds
            const initialLeft = Math.random() * maxLeft;
            const initialTop = Math.random() * maxTop;
            
            // Set the absolute pixel position for the element style
            element.style.left = `${initialLeft}px`;
            element.style.top = `${initialTop}px`;

            // Set the CSS variables for the floatEffect animation (using percentage for smooth animation)
            element.style.setProperty('--initial-left', `${initialLeft / window.innerWidth * 100}%`);
            element.style.setProperty('--initial-top', `${initialTop / window.innerHeight * 100}%`);


            // Generate random values for --rand-x and --rand-y
            const randX = (Math.random() * 0.8 - 0.4); // -0.4 to 0.4
            const randY = (Math.random() * 0.8 - 0.4); // -0.4 to 0.4
            element.style.setProperty('--rand-x', randX.toFixed(2));
            element.style.setProperty('--rand-y', randY.toFixed(2));

            // Randomize animation delay and duration slightly
            element.style.animationDelay = `${Math.random() * 5}s`;
            element.style.animationDuration = `${12 + Math.random() * 8}s`; // 12-20 seconds
            element.style.animationName = `floatEffect`;
        });
      });
    </script>
</body>
</html>
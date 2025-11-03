<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Events</title>
  <link rel="icon" type="image/x-icon" href="<?= $path[
      "fav_dir"
  ] ?>/udg2k25.png">
  <script src="<?= $path["js_dir"] ?>/tailwind.js"></script>
  <link rel="stylesheet" href="<?= $path["css_dir"] ?>/sponsors.css" />
  <link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&family=Open+Sans:wght@400;700&display=swap"
    rel="stylesheet">
  <style>
    /* -------------------------------------------------------------------------- */
    /* --- BASE STYLES --- */
    /* -------------------------------------------------------------------------- */
    html,
    body {
      width: 100%;
      height: 100vh;
      overflow: hidden;
      margin: 0;
      padding: 0;
      position: relative;
    }

    body.bg-events-page {
      background-image: url('assets/images/event.png');
      /* Ensure this path is correct */
      background-size: cover;
      background-position: center top;
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-color: #0a0a0a;
      display: flex;
      flex-direction: column;
    }

    /* -------------------------------------------------------------------------- */
    /* --- FERRIS WHEEL STYLES --- */
    /* -------------------------------------------------------------------------- */
    .ferris-elements-container {
      position: fixed;
      top: 60%;
      right: 50px;
      transform: translateY(-50%);
      width: 400px;
      height: 400px;
      z-index: 5;
    }

    .front-ferris-wheel-svg {
      width: 100%;
      height: 100%;
      opacity: 0.9;
      animation: frontFerrisRotate 45s linear infinite;
      transform-origin: 50% 50%;
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
    /* --- MAIN CONTENT & LAYOUT --- */
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
      padding-right: 480px;
      /* Space for Ferris wheel */
    }

    /* Font Imports & Header Styling */
    @import url('https://fonts.googleapis.com/css2?family=Luckiest+Guy&family=Bangers&family=Cinzel:wght@400;700&display=swap');

    .font-carnival-poster {
      font-family: 'Bangers', cursive;
    }

    .font-cinzel {
      font-family: 'Cinzel', serif;
    }

    .header-with-bg-image {
      background: transparent;
      padding-top: 50px;
      padding-bottom: 50px;
    }

    .vintage-carnival-title {
      color: #ffcc00;
      text-shadow:
        -3px -3px 0 #8B0000, 3px -3px 0 #8B0000, -3px 3px 0 #8B0000, 3px 3px 0 #8B0000,
        -6px -6px 0 #d4af37, 6px -6px 0 #d4af37, -6px 6px 0 #d4af37, 6px 6px 0 #d4af37,
        10px 10px 15px rgba(0, 0, 0, 0.8);
      letter-spacing: 0.18em;
      line-height: 1;
      animation: marquee-pulse 2.5s infinite alternate ease-in-out;
      -webkit-text-stroke: 1.5px #A0522D;
    }

    @keyframes marquee-pulse {
      0% {
        transform: scale(1);
        text-shadow: -3px -3px 0 #8B0000, 3px -3px 0 #8B0000, -3px 3px 0 #8B0000, 3px 3px 0 #8B0000, -6px -6px 0 #d4af37, 6px -6px 0 #d4af37, -6px 6px 0 #d4af37, 6px 6px 0 #d4af37, 10px 10px 15px rgba(0, 0, 0, 0.8);
        color: #ffcc00;
      }

      50% {
        transform: scale(1.01);
        text-shadow: -3px -3px 0 #8B0000, 3px -3px 0 #8B0000, -3px 3px 0 #8B0000, 3px 3px 0 #8B0000, -7px -7px 0 #ffd700, 7px -7px 0 #ffd700, -7px 7px 0 #ffd700, 7px 7px 0 #ffd700, 12px 12px 20px rgba(0, 0, 0, 0.9);
        color: #ffe65a;
      }

      100% {
        transform: scale(1);
        text-shadow: -3px -3px 0 #8B0000, 3px -3px 0 #8B0000, -3px 3px 0 #8B0000, 3px 3px 0 #8B0000, -6px -6px 0 #d4af37, 6px -6px 0 #d4af37, -6px 6px 0 #d4af37, 6px 6px 0 #d4af37, 10px 10px 15px rgba(0, 0, 0, 0.8);
        color: #ffcc00;
      }
    }

    .vintage-carnival-subtitle {
      color: #FDF5E6;
      text-shadow: 3px 3px 5px rgba(0, 0, 0, 0.7), 1px 1px 0 #8B0000;
      letter-spacing: 0.1em;
      line-height: 1.4;
      font-weight: 700;
      font-style: italic;
      animation: text-wobble 4s infinite ease-in-out alternate;
    }

    @keyframes text-wobble {

      0%,
      100% {
        transform: translateY(0) rotateZ(0);
        opacity: 1;
      }

      50% {
        transform: translateY(-2px) rotateZ(0.2deg);
        opacity: 0.98;
      }
    }

    /* -------------------------------------------------------------------------- */
    /* --- MEDIA QUERIES --- */
    /* -------------------------------------------------------------------------- */
    @media (max-width: 1200px) {
      .ferris-elements-container {
        width: 300px;
        height: 300px;
        right: 30px;
      }

      .fixed-ferris-support-svg {
        width: 300px;
        height: 75px;
      }

      .main-content {
        padding-right: 360px;
      }

      #sponsors-title {
        font-size: 5rem;
      }
    }

    @media (max-width: 768px) {
      .ferris-elements-container {
        display: none;
      }

      .main-content {
        padding-right: 1rem;
        padding-left: 1rem;
      }

      #sponsors-title {
        font-size: 3rem;
      }

      .wooden-sign-container h2 {
        font-size: 2.5rem;
      }

      .wooden-day-plank {
        font-size: 1.2rem;
        padding: 12px 20px;
      }

      .event-card {
        width: 100%;
        max-width: 400px;
      }
    }

    /* -------------------------------------------------------------------------- */
    /* --- COMPONENTS & EVENT CARD STYLES --- */
    /* -------------------------------------------------------------------------- */
    @keyframes frontFerrisRotate {
      0% {
        transform: rotate(0deg);
      }

      100% {
        transform: rotate(360deg);
      }
    }

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

    .wooden-sign-container {
      margin-bottom: 30px;
      position: relative;
      padding: 20px 40px;
      background: linear-gradient(to bottom, #8B4513 0%, #A0522D 50%, #8B4513 100%);
      border: 4px solid #4E2A1E;
      border-radius: 10px;
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.6), inset 0 0 10px rgba(255, 255, 255, 0.2);
      transform: rotate(-2deg);
      max-width: fit-content;
    }

    .wooden-sign-container h2 {
      font-family: 'Luckiest Guy', cursive;
      font-size: 3.5rem;
      color: #FFD700;
      text-shadow: -2px -2px 0 #8B4513, 2px -2px 0 #8B4513, -2px 2px 0 #8B4513, 2px 2px 0 #8B4513, 0 0 15px rgba(255, 215, 0, 0.8);
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
      box-shadow: inset 0 0 3px rgba(0, 0, 0, 0.5);
      z-index: 2;
    }

    .wooden-sign-container::before {
      top: 10px;
      left: 10px;
    }

    .wooden-sign-container::after {
      top: 10px;
      right: 10px;
    }

    .wooden-day-selector {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 15px;
      padding: 20px;
      background: radial-gradient(circle at center, #A0522D 0%, #8B4513 100%);
      border: 6px solid #4E2A1E;
      border-radius: 15px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.7), inset 0 0 15px rgba(0, 0, 0, 0.4);
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
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.4), inset 0 0 8px rgba(255, 255, 255, 0.3);
      transition: all 0.2s ease;
      border: 3px solid #8B4513;
      text-transform: uppercase;
      letter-spacing: 1px;
      text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
      position: relative;
    }

    .wooden-day-plank:hover {
      background: linear-gradient(to right, #FFD700 0%, #F5DEB3 50%, #FFD700 100%);
      transform: translateY(-3px) scale(1.02);
      box-shadow: 0 7px 15px rgba(0, 0, 0, 0.6), inset 0 0 10px rgba(255, 255, 255, 0.4);
    }

    .wooden-day-plank.active {
      background: linear-gradient(to right, #FFD700 0%, #FFEA00 50%, #FFD700 100%);
      transform: translateY(-5px) scale(1.05);
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.8), inset 0 0 12px rgba(255, 255, 255, 0.5);
      border-color: #4E2A1E;
      cursor: default;
    }

    .wooden-day-plank::before,
    .wooden-day-plank::after {
      content: '';
      position: absolute;
      width: 8px;
      height: 8px;
      background-color: #4E2A1E;
      border-radius: 50%;
      border: 1px solid #2C180E;
      box-shadow: inset 0 0 2px rgba(0, 0, 0, 0.4);
      z-index: 1;
    }

    .wooden-day-plank::before {
      top: 5px;
      left: 5px;
    }

    .wooden-day-plank::after {
      top: 5px;
      right: 5px;
    }

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

    .event-card .card-button:hover:not([disabled]) {
      background-color: #FFD700;
      transform: translateY(-2px);
    }

    /* --- DEADLINE PASSED STYLES (NEW) --- */
    .event-card .card-button.deadline-passed {
      background-color: #A00000;
      /* Deep Red */
      color: #FFD700;
      /* Gold text */
      cursor: not-allowed;
      box-shadow: 0 0 10px rgba(160, 0, 0, 0.7);
      /* Red glow */
      border: 2px solid #FFD700;
      pointer-events: none;
      /* Make the anchor unclickable */
    }

    .event-card .card-button.deadline-passed:hover {
      background-color: #A00000;
      transform: none;
    }
  </style>
</head>
<link rel="stylesheet" href="<?=$path['css_dir']?>/universalStyle.css" />

<body class="bg-events-page">
    <?php include "{$path["pages_dir"]}/header.php"; ?>
    <?php include "{$path["pages_dir"]}/doors.php"; ?>
    <div class="main-content">
      <div class="main-content-wrapper" id="mainContent">    
    <div class="container mx-auto px-4 relative z-10">
      <header class="text-center mb-16 mt-16 relative header-with-bg-image">
        <h1 id="sponsors-title" class="text-5xl sm:text-6xl md:text-7xl lg:text-8xl font-extrabold pb-4 uppercase tracking-widest
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

      </div>
    </div>
  </div>
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
        $angle = $i * (360 / 12);
        $radiusGondola = 170;
        $radiusSpokeInner = 50;
        $radiusSpokeOuter = 180;

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

        <rect x="<?= $gondolaCenterX -
            $gondolaWidth / 2 ?>" y="<?= $gondolaCenterY -
    $gondolaHeight / 2 ?>"
          width="<?= $gondolaWidth ?>" height="<?= $gondolaHeight ?>" rx="5" ry="5" fill="#A0522D" stroke="#8B4513"
          stroke-width="2" transform="rotate(-<?= $angle ?> <?= $gondolaCenterX ?> <?= $gondolaCenterY ?>)" />

        <circle cx="<?= $gondolaCenterX ?>" cy="<?= $gondolaCenterY ?>" r="6" fill="#FFD700" opacity="0.9">
          <animate attributeName="opacity" values="0.9;0.5;0.9" dur="2s" begin="<?= $i *
              0.1 ?>s"
            repeatCount="indefinite" />
        </circle>

        <?php endfor; ?>
      </g>
    </svg>

    <svg class="fixed-ferris-support-svg" viewBox="0 0 400 100" xmlns="http://www.w3.org/2000/svg">
      <polygon points="170,0 230,0 230,0 280,100 120,100" fill="#B8860B" stroke="#8B4513" stroke-width="4"
        opacity="0.9" />
      <polygon points="180,0 220,0 260,100 140,100" fill="#A0522D" stroke="#8B4513" stroke-width="2" opacity="0.9" />

      <rect x="190" y="-20" width="20" height="40" fill="#8B4513" opacity="0.9" />

      <rect x="100" y="80" width="200" height="20" fill="#8B4513" stroke="#A0522D" stroke-width="3" opacity="0.9" />
      <rect x="110" y="70" width="180" height="10" fill="#A0522D" opacity="0.8" />
    </svg>
  </div>
</div>
  <script>
  const EVENTS_DATA_JSON = {
  "Day 0": [
    {
      "event_name": "KTM Show",
      "event_time": "9:00 AM to 2:00 PM",
      "event_venue": "Basketball Ground",
      "event_date": "Day 0",
      "event_image": "assets/images/day0_1.png",
      "event_registration_link": "NIL",
      "event_rulebook": "NIL"
    },
    {
      "event_name": "Wall-E-ART",
      "event_time": "10:00 AM to 4:00 PM",
      "event_venue": "Campus",
      "event_date": "Day 0",
      "event_image": "assets/images/day0_2.png",
      "event_registration_link": "https://docs.google.com/forms/d/e/1FAIpQLSdJbXBznffc_LaeRooX3mO-dFXJYCgNakMxPHif48Jze7Tb3g/viewform",
      "event_rulebook": "https://drive.google.com/file/d/1ZxL6jJFah-_Wv1yorofpe_3-GGehUqBy/view?usp=drive_link"
    },
    {
      "event_name": "Food Fiesta",
      "event_time": "2:00 PM to 5:00 PM",
      "event_venue": "Girls Mess + Civil Dept.",
      "event_date": "Day 0",
      "event_image": "assets/images/day0_3.png",
      "event_registration_link": "https://docs.google.com/forms/d/e/1FAIpQLSf8CmMcwA7xM1fY1XrZkeIOMvjVaTTnvCI9tpD_os0YM485QQ/viewform",
      "event_rulebook": "https://drive.google.com/file/d/1w2Fb8jQuct_1H-RW8QiM3X3wEcVKecjC/view?usp=drive_link"
    },
    {
      "event_name": "Udgam Unplugged",
      "event_time": "5:00 PM to 6:00 PM",
      "event_venue": "MPH",
      "event_date": "Day 0",
      "event_image": "assets/images/day0_4.png",
      "event_registration_link": "https://docs.google.com/forms/d/e/1FAIpQLSeisNxZ6cz43Aw1ILsUqx6ge20VCwQilnUhOPueYARcCDVXnw/viewform",
      "event_rulebook": "https://drive.google.com/file/d/1xvk-lnwDabaWKoIu4K7tf9MurZijgs8h/view?usp=drive_link"
    },
    {
      "event_name": "Step Sync",
      "event_time": "6:00 PM to 7:00 PM",
      "event_venue": "MPH",
      "event_date": "Day 0",
      "event_image": "assets/images/day0_5.png",
      "event_registration_link": "https://docs.google.com/forms/d/e/1FAIpQLScx3rkFxpctmo-DzW1gYr8I0iPT7EEB4BsOpZBfri1uvXGGPw/viewform",
      "event_rulebook": "https://drive.google.com/file/d/1NLkvpf_sT3pT3fL4bKd6DmWnkG3BJ6U8/view?usp=drive_link"
    },
    {
      "event_name": "Mini Militia",
      "event_time": "5:00 PM to 7:00 PM",
      "event_venue": "Shed 2",
      "event_date": "Day 0",
      "event_image": "assets/images/day0_6.png",
      "event_registration_link": "https://docs.google.com/forms/d/e/1FAIpQLSfPMCf6OuPl-sBR-yHigf28uvoaEwHnqLyMs-yh2NbI3n_HcA/viewform",
      "event_rulebook": "https://drive.google.com/file/d/17LJOLGiBKYcVNLP5YQ6WnEXrRoQxCIx5/view?usp=drive_link"
    },
    {
      "event_name": "Counter Strike",
      "event_time": "5:00 PM to 7:00 PM",
      "event_venue": "Shed 3",
      "event_date": "Day 0",
      "event_image": "assets/images/day0_7.png",
      "event_registration_link": "https://docs.google.com/forms/d/1zc638pIPjuUNfclog2rFCIxpqZmM3YKeRdMbkBTMK4I/viewform?edit_requested=true",
      "event_rulebook": "https://drive.google.com/file/d/1yHytIKlQCPePiszp_nfi3BLP7Q9k-Ml6/view?usp=drive_link"
    }
  ],
  "Day 1": [
    {
      "event_name": "Rangayan",
      "event_time": "9:00 AM to 11:00 AM",
      "event_venue": "Campus",
      "event_date": "Day 1",
      "event_image": "assets/images/day1_1.png",
      "event_registration_link": "https://docs.google.com/forms/d/e/1FAIpQLSe0buH2PxFWKrfT1DzWAkqHEaULpkq5vtF4RSurJdn3WHXwZw/viewform",
      "event_rulebook": "https://drive.google.com/file/d/1bpBMMZDhVbbQ_KbgoSOmrGPoYfAzU5wT/view?usp=drive_link"
    },
    {
      "event_name": "BGMI",
      "event_time": "9:00 AM to 11:00 AM",
      "event_venue": "Shed 3",
      "event_date": "Day 1",
      "event_image": "assets/images/day1_2.png",
      "event_registration_link": "https://docs.google.com/forms/d/e/1FAIpQLSf5tBS-5SIyT8oCTZWuMGMgmsmFzy4y8TcgYF43G4ohDzn9cQ/viewform",
      "event_rulebook": "https://drive.google.com/file/d/1upzH4W3olgOagxnZcSogAHER9xqSsPDL/view?usp=drive_link"
    },
    {
      "event_name": "Free Fire",
      "event_time": "9:00 AM to 11:00 AM",
      "event_venue": "Shed 3",
      "event_date": "Day 1",
      "event_image": "assets/images/day1_3.png",
      "event_registration_link": "https://docs.google.com/forms/d/e/1FAIpQLSe8BhWaQvJN08Mg8hfO7zqYuGVdKhkYmWzRuEUinjGHJofWWg/viewform",
      "event_rulebook": "https://drive.google.com/file/d/12mnYNQ4JvREXjGh6L0T2rgTLtgUmX56l/view?usp=drive_link"
    },
    {
      "event_name": "Three Leg Tie",
      "event_time": "11:00 AM to 12:00 PM",
      "event_venue": "Basketball Ground",
      "event_date": "Day 1",
      "event_image": "assets/images/day1_4.png",
      "event_registration_link": "https://docs.google.com/forms/d/e/1FAIpQLSfx0Xx-_SNVV37Ejq2psDqX8o0xFlEosifIww6ZGeVO7XkLZg/viewform",
      "event_rulebook": "https://drive.google.com/file/d/1e5STf1b2hyItkCsVUKqZup001J_P8weJ/view?usp=drive_link"
    },
    {
      "event_name": "Balloon Burst",
      "event_time": "11:00 AM to 12:00 PM",
      "event_venue": "Basketball Ground",
      "event_date": "Day 1",
      "event_image": "assets/images/day1_5.png",
      "event_registration_link": "https://docs.google.com/forms/d/e/1FAIpQLSf9K2bY2xxO2AWBLgtpRmdbvV1bbtYoJmjhU8RFIGewEW6_UA/viewform",
      "event_rulebook": "https://drive.google.com/file/d/1SJr-1u8TpXGa9QE_XuH7WxiS9oZrg3Ku/view?usp=drive_link"
    },
    {
      "event_name": "Spoil the T-shirt",
      "event_time": "1:00 PM to 4:00 PM",
      "event_venue": "Volleyball Ground",
      "event_date": "Day 1",
      "event_image": "assets/images/day1_6.png",
      "event_registration_link": "https://docs.google.com/forms/d/e/1FAIpQLSfFHvMPphEKY3Eol0tSsvt5pwlwI-HFTrt-TJFuQjdpe4lv6g/viewform",
      "event_rulebook": "https://drive.google.com/file/d/16GaZU4jodYa87ldcKqhxU4Qs0dmL3JBM/view?usp=drive_link"
    }
  ],
  "Day 2": [
    {
      "event_name": "IPL Auction",
      "event_time": "9:00 AM to 11:00 AM",
      "event_venue": "Football Ground",
      "event_date": "Day 2",
      "event_image": "assets/images/day2_1.png",
      "event_registration_link": "https://docs.google.com/forms/d/e/1FAIpQLSdg1ADw8AwFwX7aY34gh0Oo33U6OmDT3gsCD2pAPkrsMnNytQ/viewform",
      "event_rulebook": "https://drive.google.com/file/d/1vpiWOiOD0Rw1Bgv5eGAC4cWlZH9WbVFT/view?usp=drive_link"
    },
    {
      "event_name": "Food Eating",
      "event_time": "11:00 AM to 11:30 AM",
      "event_venue": "Boys Mess / Girls Mess",
      "event_date": "Day 2",
      "event_image": "assets/images/day2_2.png",
      "event_registration_link": "https://docs.google.com/forms/d/e/1FAIpQLSdy1VqGrwmtqYMKP6BnvLlpVCVWyHtNfqo6VlX45g4UIHaJkA/viewform",
      "event_rulebook": "https://drive.google.com/file/d/1LqPS6Y35LNX0ZQG5hDmHDtw9wB1NKITy/view?usp=drive_link"
    },
    {
      "event_name": "Dumb Charades",
      "event_time": "12:00 PM to 2:00 PM",
      "event_venue": "MPH",
      "event_date": "Day 2",
      "event_image": "assets/images/day2_3.png",
      "event_registration_link": "https://docs.google.com/forms/d/e/1FAIpQLScpc7t-kOy5yJllJ41-qlCSyk28iOKrqEJdghMzmtKwK44Idg/viewform",
      "event_rulebook": "https://drive.google.com/file/d/185hxWrsPGk5FlkN8vjmesXsu_SjIHFqz/view?usp=drive_link"
    },
    {
      "event_name": "Squid Game",
      "event_time": "2:00 PM to 4:00 PM",
      "event_venue": "Basketball Ground",
      "event_date": "Day 2",
      "event_image": "assets/images/day2_4.png",
      "event_registration_link": "https://docs.google.com/forms/d/e/1FAIpQLScvbi4cgzNls5iEq4eh2DSbzpp1dx6k-l8Y-NAIbmKe0cUhuw/viewform",
      "event_rulebook": "https://drive.google.com/file/d/1JtYX7OS8P6SX6HDtGM2Ad4rFm8UbxcZ_/view?usp=drive_link"
    },
    {
      "event_name": "Ramp Walk",
      "event_time": "5:00 PM to 7:00 PM",
      "event_venue": "Football Ground",
      "event_date": "Day 2",
      "event_image": "assets/images/day2_5.png",
      "event_registration_link": "https://docs.google.com/forms/d/e/1FAIpQLSdDqsFbdiDsVDHWkBudBmD9Kf8rEbk7qP9Ukf5sE6r5mPNIGg/viewform",
      "event_rulebook": "https://drive.google.com/file/d/1uuLquiLanpo52fKTJcvb9FtpkbUgdmSh/view?usp=drive_link"
    }
  ],
  "Day 3": [
    {
      "event_name": "Treasure Hunt",
      "event_time": "9:00 AM to 11:00 AM",
      "event_venue": "MPH + Campus",
      "event_date": "Day 3",
      "event_image": "assets/images/day3_1.png",
      "event_registration_link": "https://docs.google.com/forms/d/e/1FAIpQLSeNCCGOKw9EbbqyrkQkKggd0v34qodzlBBTu63EdPo8qfumow/viewform",
      "event_rulebook": "https://drive.google.com/file/d/1Pekqy3WcH7OxUQBjyqXRySWnm5wT71HP/view?usp=drive_link"
    },
    {
      "event_name": "Sur Sangam 2.0",
      "event_time": "11:00 AM to 1:00 PM",
      "event_venue": "MPH",
      "event_date": "Day 3",
      "event_image": "assets/images/day3_2.png",
      "event_registration_link": "https://docs.google.com/forms/d/e/1FAIpQLSfSV57nI3TjBw19jVeIZEJiSXkHSU0-v2PTw2qpd1mPeyHWmA/viewform",
      "event_rulebook": "https://drive.google.com/file/d/1KogVFuFsV0QiR_TWWleYUYb1Zlr6FPni/view?usp=drive_link"
    },
    {
      "event_name": "BGMI",
      "event_time": "1:00 PM to 3:00 PM",
      "event_venue": "Shed 3",
      "event_date": "Day 3",
      "event_image": "assets/images/day1_2.png",
      "event_registration_link": "https://docs.google.com/forms/d/e/1FAIpQLSf5tBS-5SIyT8oCTZWuMGMgmsmFzy4y8TcgYF43G4ohDzn9cQ/viewform",
      "event_rulebook": "https://drive.google.com/file/d/1upzH4W3olgOagxnZcSogAHER9xqSsPDL/view?usp=drive_link"
    },
    {
      "event_name": "Free Fire",
      "event_time": "1:00 PM to 3:00 PM",
      "event_venue": "Shed 3",
      "event_date": "Day 3",
      "event_image": "assets/images/day1_3.png",
      "event_registration_link": "https://docs.google.com/forms/d/e/1FAIpQLSe8BhWaQvJN08Mg8hfO7zqYuGVdKhkYmWzRuEUinjGHJofWWg/viewform",
      "event_rulebook": "https://drive.google.com/file/d/12mnYNQ4JvREXjGh6L0T2rgTLtgUmX56l/view?usp=drive_link"
    },
    {
      "event_name": "Tug of War",
      "event_time": "3:00 PM to 3:30 PM",
      "event_venue": "Basketball Ground",
      "event_date": "Day 3",
      "event_image": "assets/images/day3_3.png",
      "event_registration_link": "https://docs.google.com/forms/d/e/1FAIpQLSfFTjD16CzWXaXq7ZvfjnIz308LsVc6pYPCTZtlgELjeRMmYQ/viewform",
      "event_rulebook": "https://drive.google.com/file/d/1Xu_C3_Ny11zHifJMXvr9BdwbPwvwtkqT/view?usp=drive_link"
    }
  ],
  "Extra": [
    {
      "event_name": "Short Movie Competition",
      "event_image": "assets/images/extra_1.png",
      "event_registration_link": "https://docs.google.com/forms/d/e/1FAIpQLSfl5XJnSdnaTD7cc4nu8-XZ-NGG0AILgrt_IwPTFHgOisKeIw/viewform",
      "event_rulebook": "https://drive.google.com/file/d/1JqN3rFk9jCItzCvoxqASJSp6ZpLdy9rk/view?usp=drive_link",
      "event_time": "See rulebook for details",
      "event_venue": "Online / See rulebook"
    },
    {
      "event_name": "Drishya 3.0",
      "event_image": "assets/images/extra_2.png",
      "event_registration_link": "https://docs.google.com/forms/d/e/1FAIpQLSfwjq0aWPgkB4jhq_V4apwQQ_6rpLo1v02nV5smmx_l8TwOtQ/viewform?usp=sharing&ouid=108369559826362231923&urp=gmail_link",
      "event_rulebook": "https://drive.google.com/file/d/1URwDNg6gBGwmF_9eS-kh4TiGqlm1Yi20/view?usp=drive_link",
      "event_time": "See rulebook for details",
      "event_venue": "Online / See rulebook"
    }
  ]
};


    let eventsData = EVENTS_DATA_JSON;
    let currentDay = null;
    function isDeadlinePassed(deadlineString) {
      if (!deadlineString) return false;
      const now = new Date();
      const deadline = new Date(deadlineString);

      return !isNaN(deadline.getTime()) && deadline < now;
    }

    function showSelectedDayEvents(day) {
      currentDay = day;

      // Update active state for day buttons
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

          // --- DEADLINE LOGIC ---
          const deadlinePassed = isDeadlinePassed(event.event_deadline);
          const buttonClass = deadlinePassed ? 'deadline-passed' : '';
          const buttonText = deadlinePassed ? 'Registration Closed' : 'Register Now';

          const eventCard = document.createElement('div');
          eventCard.classList.add('event-card');

          // Use a placeholder image if the path is missing or not provided in JSON
          const imagePath = event.event_image || 'assets/images/default_event.jpg';

          eventCard.innerHTML = `
                      <div class="event-card-image-container">
                          <img src="${imagePath}" alt="${event.event_name}">
                      </div>
                      <div class="event-card-content">
                          <div>
                              <h3>${event.event_name}</h3>
                              ${event.event_deadline ? `<p><strong>Deadline:</strong> ${event.event_deadline}</p>` : ''}
                              
                              <p><strong>Venue:</strong> ${event.event_venue || 'Campus'}</p>
                              <p><strong>Time:</strong> ${event.event_time || 'TBA'}</p>
                              
                              ${event.event_coordinators && event.event_coordinators.length > 0 ?
              `<p class="coordinators"><strong>Coordinators:</strong> ${event.event_coordinators.join(', ')}</p>` : ''
            }
                          </div>
        ${event.event_registration_link !== "NIL" ?
                         `<div class="card-buttons">
                              <a href="${event.event_registration_link}" 
                                 target="_blank" 
                                 class="card-button ${buttonClass}"
                                 ${deadlinePassed ? 'aria-disabled="true"' : ''}>
                                 ${buttonText}
                              </a>
                              <a href="${event.event_rulebook}" target="_blank" class="card-button">Rulebook</a>
                          </div>` :""
                          }
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
      // Initial state prompt
      document.getElementById('eventDisplayTitle').textContent = '';
      document.getElementById('eventDetailsList').innerHTML = `
            <div class="sponsor-card w-full max-w-lg p-12 text-center shadow-2xl relative">
                <h3 class="text-6xl font-luckiest-guy uppercase text-center text-red-700 ">
                    Select a Day to see events!
                </h3>
            </div>
        `;

      // --- Day Selection Buttons ---
      const dayButtons = document.querySelectorAll('.wooden-day-plank');
      dayButtons.forEach(button => {
        button.addEventListener('click', () => {
          showSelectedDayEvents(button.dataset.day);
        });
      });

      // --- Sparkle and Floating Elements Logic (Keeping original script for effects) ---
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

      const floatingElements = document.querySelectorAll('.floating-element');
      const elementSize = 40;

      floatingElements.forEach((element, index) => {
        const maxLeft = window.innerWidth - elementSize;
        const maxTop = window.innerHeight - elementSize;
        const initialLeft = Math.random() * maxLeft;
        const initialTop = Math.random() * maxTop;

        element.style.left = `${initialLeft}px`;
        element.style.top = `${initialTop}px`;

        element.style.setProperty('--initial-left', `${initialLeft / window.innerWidth * 100}%`);
        element.style.setProperty('--initial-top', `${initialTop / window.innerHeight * 100}%`);

        const randX = (Math.random() * 0.8 - 0.4);
        const randY = (Math.random() * 0.8 - 0.4);
        element.style.setProperty('--rand-x', randX.toFixed(2));
        element.style.setProperty('--rand-y', randY.toFixed(2));

        element.style.animationDelay = `${Math.random() * 5}s`;
        element.style.animationDuration = `${12 + Math.random() * 8}s`;
        element.style.animationName = `floatEffect`;
      });
    });

      const dayButtons = document.querySelectorAll(".wooden-day-plank");
  const eventDetailsList = document.getElementById("eventDetailsList");
  const eventDisplayTitle = document.getElementById("eventDisplayTitle");

  // Handle day button click
  dayButtons.forEach(button => {
    button.addEventListener("click", () => {
      // Remove previous active
      dayButtons.forEach(btn => btn.classList.remove("active"));
      button.classList.add("active");

      const selectedDay = button.getAttribute("data-day");
      const events = EVENTS_DATA_JSON[selectedDay] || [];

      // Update title
      eventDisplayTitle.textContent = selectedDay + " Events";

      // Clear old cards
      eventDetailsList.innerHTML = "";

      if (events.length === 0) {
        eventDetailsList.innerHTML = `
          <div class="sponsor-card w-full max-w-lg p-12 text-center shadow-2xl relative">
            <h3 class="text-5xl font-luckiest-guy uppercase text-center text-amber-400">
              No events for ${selectedDay} yet!
            </h3>
          </div>
        `;
        return;
      }

      // Generate event cards
      events.forEach(event => {
        const card = document.createElement("div");
        card.className = "event-card";

        card.innerHTML = `
          <div class="event-card-image-container">
            <img src="${event.event_image}" alt="${event.event_name}">
          </div>
          <div class="event-card-content">
            <h3>${event.event_name}</h3>
            <p><strong>Time:</strong> ${event.event_time}</p>
            <p><strong>Venue:</strong> ${event.event_venue}</p>
            <div class="card-buttons">
              <a href="${event.event_rulebook}" class="card-button" target="_blank">Rulebook</a>
              <a href="${event.event_registration_link}" class="card-button" target="_blank">Register</a>
            </div>
          </div>
        `;
        eventDetailsList.appendChild(card);
      });
    });
  });

  </script>
</body>

</html>
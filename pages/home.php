<?php
$records = [
    [
        'year' => 'Udgam 2k25',
        'path' => '/logo2k25.png',
        'url' => '#',
    ],
    [
        'year' => 'Udgam 2k24',
        'path' => '/logo2k24.jpg',
        'url' => 'https://udgam.nitsikkim.ac.in/udgam24/',
    ],
    [
        'year' => 'Udgam 2k23',
        'path' => '/logo2k23.jpg',
        'url' => 'https://nitsikkim.ac.in/udgam/udgam23/home.php',
    ],
    [
        'year' => 'Udgam 2k20',
        'path' => '/logo2k18_19.jpg',
        'url' => 'https://nitsikkim.ac.in/udgam/udgam20/',
    ],
    [
        'year' => 'Udgam 2k19',
        'path' => '/logo2k18_19.jpg',
        'url' => 'https://udgam.nitsikkim.ac.in/udgam19/',
    ],
    [
        'year' => 'Udgam 2k18',
        'path' => '/logo2k18_19.jpg',
        'url' => 'https://udgam.nitsikkim.ac.in/udgam18/HIGH%20VOLTAGE/H_V.php#contact',
    ],
    [
        'year' => 'Udgam 2k17',
        'path' => '/logo2k17.jpg',
        'url' => '#',
    ],
    [
        'year' => 'Udgam 2k16',
        'path' => '/logo2k16.jpg',
        'url' => '#',
    ],
    [
        'year' => 'Udgam 2k15',
        'path' => '/logo2k15.jpg',
        'url' => '#',
    ],
    [
        'year' => 'Udgam 2k14',
        'path' => '/logo2k14.jpg',
        'url' => '#',
    ],
];

$team_contacts = [
    [
        'name' => 'Ayan Roy',
        'position' => 'President',
        'phone' => '+91 91238 34091',
        'email' => 'b230073@nitsikkim.ac.in',
        'pic' => '/ayan.jpeg',
        'linkedin' => '#',
        'instagram' => '#'
    ],
    [
        'name' => 'Indrani Adhikary',
        'position' => 'Vice President',
        'phone' => '+91 76791 79646',
        'email' => 'b230011@nitsikkim.ac.in',
        'pic' => '/indrani.jpeg',
        'linkedin' => 'https://www.linkedin.com/in/indrani-adhikary-1006422b5',
        'instagram' => 'https://www.instagram.com/ind_028?igsh=MWp5djNyb3B3dXRlcQ=='
    ],
    [
        'name' => 'Ayush Choudhary',
        'position' => 'General Secretary',
        'phone' => '+91 96497 34621',
        'email' => 'b230120@nitsikkim.ac.in',
        'pic' => '/ayush.jpeg',
        'linkedin' => 'https://www.linkedin.com/in/aayush-choudhary-86848835a',
        'instagram' => 'https://www.instagram.com/spyrant?igsh=MTRvcDF5anZxcWhkdQ=='
    ],
    [
        'name' => 'Ritik Kumar Paswan',
        'position' => 'Treasurer',
        'phone' => '+91 85430 30340',
        'email' => 'b230082@nitsikkim.ac.in',
        'pic' => '/ritik.jpeg',
        'linkedin' => 'https://www.linkedin.com/in/ritik-paswan-96181527a',
        'instagram' => 'https://www.instagram.com/ritikkumarpaswan17?igsh=MXgwYjdiMnE4cDd3Yw=='
    ]
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Udgam 2k25</title>
    <link rel="icon" type="image/x-icon" href="<?= $path['fav_dir']?>/udg2k25.png">
  <script src="<?= $path['js_dir']?>/tailwind.js"></script>
  <link rel="stylesheet" href="<?=$path['css_dir']?>/style.css" />
  <!-- <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script> -->
  
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Fascinate&family=Rye&display=swap" rel="stylesheet">
</head>
<link rel="stylesheet" href="<?=$path['css_dir']?>/universalStyle.css" />
<!-- <link rel="stylesheet" href="./css/universalStyle.css"> -->
<body class="overflow-x-hidden">
    <?php include "{$path['pages_dir']}/counter.php" ?>
    <?php include "{$path['pages_dir']}/doors.php" ?>
    <div class="main-content-wrapper" id="mainContent">
        <div class="w-screen flex flex-col smooth-scroll overflow-x-hidden">

            <!-- Hero Section with Background -->
            <div id="home" class="relative min-h-screen sm:min-h-[110vh] lg:min-h-[130vh] w-screen flex justify-center overflow-hidden">
                <!-- Background Image -->
                <img src="" class="absolute inset-0 w-full h-full object-cover update -z-10" alt="Welcome">
                <?php include 'header.php' ?>
                <!-- Hero Content -->
                <div class="flex justify-center items-center w-full px-4 sm:px-6 md:px-8 absolute top-1/2 -translate-y-1/2">
                    <div class="text-center scale-animate">
                        <h1 class="text-5xl sm:text-6xl md:text-7xl lg:text-8xl xl:text-9xl 2xl:text-[140px] font-bold text-amber-100"
                            style="text-shadow: 3px 3px 0px #6b3410, 6px 6px 12px rgba(0,0,0,0.6); font-family: 'Georgia', serif; letter-spacing: 0.05em;">
                            Udgam
                        </h1>
                        <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl xl:text-7xl 2xl:text-8xl font-bold text-amber-200 mt-2"
                            style="text-shadow: 2px 2px 0px #8b4513, 4px 4px 10px rgba(0,0,0,0.5); font-family: 'Georgia', serif; letter-spacing: 0.08em;">
                            2025
                        </h1>
                        <p class="text-xs sm:text-sm md:text-base lg:text-lg xl:text-xl font-semibold bg-[#8b4513] rounded-3xl py-1 text-amber-50 mt-3 sm:mt-2 md:mt-3 italic"
                            style="text-shadow: 1px 1px 3px rgba(0,0,0,0.7); font-family: 'Georgia', serif;">
                            Ascending to new horizon
                        </p>
                    </div>
                </div>
            </div>

            <!-- About Section -->
            <div id="about" style="background-image: url(./assets/images/bg3.png);" class="relative bg-center w-full min-h-screen flex flex-col items-center justify-center p-4 sm:p-6 lg:p-12 z-10">
                <!-- Decorative Lights -->
                <div class="absolute -top-2 flex overflow-x-hidden w-full">
                    <img src="./assets/images/hlights.png" alt="" class="h-8 sm:h-10 md:h-12 lg:h-16 glow-pulse">
                    <img src="./assets/images/hlights.png" alt="" class="h-8 sm:h-10 md:h-12 lg:h-16 glow-pulse">
                    <img src="./assets/images/hlights.png" alt="" class="h-8 sm:h-10 md:h-12 lg:h-16 glow-pulse">
                    <img src="./assets/images/hlights.png" alt="" class="h-8 sm:h-10 md:h-12 lg:h-16 glow-pulse">
                    <img src="./assets/images/hlights.png" alt="" class="h-8 sm:h-10 md:h-12 lg:h-16 glow-pulse">
                    <img src="./assets/images/hlights.png" alt="" class="h-8 sm:h-10 md:h-12 lg:h-16 glow-pulse">
                    <img src="./assets/images/hlights.png" alt="" class="h-8 sm:h-10 md:h-12 lg:h-16 glow-pulse">
                    <img src="./assets/images/hlights.png" alt="" class="h-8 sm:h-10 md:h-12 lg:h-16 glow-pulse">
                </div>

                <!-- About Us Title -->
                <div class="relative w-full sm:w-3/4 md:w-2/3 lg:w-1/2 mb-8 sm:mb-12 rounded-2xl sm:rounded-3xl flex justify-center scroll-animate">
                    <img src="./assets/images/aboutus.png" class="w-full max-w-md hover-glow" alt="About Us">
                    <div class="absolute w-full h-full inset-0 flex items-center justify-center pointer-events-none -z-10 overflow-hidden opacity-30">
                        <img src="./assets/images/rope.png" class="w-full" alt="">
                        <img src="./assets/images/rope.png" class="w-full" alt="">
                    </div>
                </div>

                <!-- About Content -->
                <div class="w-full max-w-6xl mb-8 sm:mb-12 bg-[#F7F2DF] p-4 sm:p-6 lg:p-8 rounded-2xl sm:rounded-3xl border-2 sm:border-4 border-vintage shadow-vintage scroll-animate hover-lift">
                    <p class="text-sm sm:text-base md:text-lg lg:text-xl text-vintage-dark mb-4 sm:mb-6 leading-relaxed">
                        UDGAM is more than just a cultural fest. It is the heartbeat of National Institute of Technology Sikkim and one of the most awaited celebrations in the north east. From art to culture, every moment here is filled with energy, togetherness, and memories that last a lifetime.
                    </p>
                    <p class="text-sm sm:text-base md:text-lg lg:text-xl text-vintage-dark mb-4 sm:mb-6 leading-relaxed">
                        This fest is a vibrant three-day celebration that brings life to our world through art, language, food, customs and traditions. It is known for its diversity. The festival provides a platform for emerging artists. Unique talents and unforgettable experiences. Every year, it welcomes renowned personalities and continues to grow in participation, sponsorship and events. It is not just a fest, it's a chance to explore culture, connect with people, and create lasting memories.
                    </p>
                </div>

                <!-- Legacy Title -->
                <div class="w-full sm:w-3/4 md:w-2/3 lg:w-1/2 relative mb-8 sm:mb-12 flex items-center justify-center gap-2 sm:gap-4 md:gap-6 px-4 scroll-animate">
                    <img src="./assets/images/legacy.png" class="w-full max-w-md hover-glow" alt="Our Legacy">
                    <div class="absolute w-full h-full inset-0 flex items-center justify-center pointer-events-none -z-10 overflow-hidden opacity-30">
                        <img src="./assets/images/rope.png" class="w-full" alt="">
                        <img src="./assets/images/rope.png" class="w-full" alt="">
                    </div>
                </div>

                <!-- Legacy Section with PHP Loop - Zigzag Design -->
                <div class="w-full max-w-7xl relative z-10 mb-12 px-4">
                    <!-- Connecting Lines Container -->
                    <svg class="absolute inset-0 w-full h-full pointer-events-none" style="z-index: 1;">
                        <defs>
                            <linearGradient id="lineGradient" x1="0%" y1="0%" x2="100%" y2="0%">
                                <stop offset="0%" style="stop-color:#8b4513;stop-opacity:0.6" />
                                <stop offset="50%" style="stop-color:#a0522d;stop-opacity:0.8" />
                                <stop offset="100%" style="stop-color:#8b4513;stop-opacity:0.6" />
                            </linearGradient>
                            <filter id="glow">
                                <feGaussianBlur stdDeviation="2" result="coloredBlur" />
                                <feMerge>
                                    <feMergeNode in="coloredBlur" />
                                    <feMergeNode in="SourceGraphic" />
                                </feMerge>
                            </filter>
                        </defs>
                        <!-- Lines will be drawn by JavaScript -->
                        <g id="zigzagLines"></g>
                    </svg>

                    <div class="relative" style="z-index: 2;">
                        <?php foreach ($records as $index => $record): ?>
                            <?php $isEven = $index % 2 === 0; ?>
                            <?php $animClass = $isEven ? 'scroll-left' : 'scroll-right'; ?>
                            <?php $delay = 'delay-' . (($index % 4) * 100 + 100); ?>
                            <?php $position = $isEven ? 'justify-start' : 'justify-end'; ?>

                            <div class="flex <?php echo $position; ?> mb-16 md:mb-20 lg:mb-24 last:mb-0" data-legacy-index="<?php echo $index; ?>">
                                <div class="legacy-item <?php echo $animClass; ?> <?php echo $delay; ?> group relative flex flex-col justify-center items-center rounded-xl transition-all duration-300 gap-4 sm:gap-6">
                                    <!-- Animated Ring Around Logo -->
                                    <div class="absolute w-40 h-40 sm:w-48 sm:h-48 md:w-56 md:h-56 lg:w-64 lg:h-64 -z-5">
                                        <div class="absolute inset-0 rounded-full border-2 border-amber-500/30 animate-ping-slow"></div>
                                        <div class="absolute inset-2 rounded-full border-2 border-amber-600/40 animate-pulse-ring"></div>
                                        <div class="absolute inset-4 rounded-full border border-amber-700/20 animate-rotate-slow"></div>
                                    </div>

                                    <!-- Logo Container -->
                                    <a href="<?php echo $record['url']; ?>" target="_blank" rel="noopener noreferrer" class="block relative z-10">
                                        <div class="w-32 h-32 sm:w-40 sm:h-40 md:w-48 md:h-48 lg:w-54 lg:h-54 rounded-full border-4 border-vintage bg-white p-2 shadow-2xl overflow-hidden hover-glow relative">
                                            <!-- Orbiting Dots -->
                                            <div class="absolute inset-0 pointer-events-none">
                                                <div class="absolute w-2 h-2 bg-amber-500 rounded-full top-0 left-1/2 -translate-x-1/2 animate-orbit-1"></div>
                                                <div class="absolute w-2 h-2 bg-amber-600 rounded-full top-1/2 right-0 -translate-y-1/2 animate-orbit-2"></div>
                                                <div class="absolute w-2 h-2 bg-amber-700 rounded-full bottom-0 left-1/2 -translate-x-1/2 animate-orbit-3"></div>
                                                <div class="absolute w-2 h-2 bg-amber-800 rounded-full top-1/2 left-0 -translate-y-1/2 animate-orbit-4"></div>
                                            </div>

                                            <!-- Logo Image -->
                                            <img src="<?php echo "{$path['logos_dir']}{$record['path']}"; ?>"
                                                alt="<?php echo $record['year']; ?>"
                                                class="w-full h-full object-cover rounded-full transform transition-all duration-700 ease-out group-hover:scale-110 group-hover:rotate-3 relative z-10">
                                        </div>
                                    </a>

                                    <!-- Year Label -->
                                    <a href="<?php echo $record['url']; ?>" target="_blank" rel="noopener noreferrer" class="block relative z-10">
                                        <div class="bg-vintage-light px-6 py-2 rounded-full border-2 border-vintage shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                                            <span class="text-2xl sm:text-3xl lg:text-4xl text-vintage-brown font-bold drop-shadow-lg hover:text-amber-600 transition-colors">
                                                <?= $record['year'] ?>
                                            </span>
                                        </div>
                                    </a>

                                    <!-- Decorative Rope Background -->
                                    <div class="absolute inset-0 overflow-hidden -z-10 flex items-center justify-center opacity-10 pointer-events-none">
                                        <img src="./assets/images/rope.png" class="w-full <?php echo $isEven ? '-rotate-45' : 'rotate-45'; ?> animate-swing-slow" alt="">
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <script>
                    // Draw zigzag connecting lines between legacy items
                    function drawZigzagLines() {
                        const legacyItems = document.querySelectorAll('[data-legacy-index]');
                        const svgGroup = document.getElementById('zigzagLines');

                        if (!svgGroup || legacyItems.length < 2) return;

                        svgGroup.innerHTML = ''; // Clear existing lines

                        for (let i = 0; i < legacyItems.length - 1; i++) {
                            const currentItem = legacyItems[i].querySelector('.legacy-item');
                            const nextItem = legacyItems[i + 1].querySelector('.legacy-item');

                            if (!currentItem || !nextItem) continue;

                            const currentRect = currentItem.getBoundingClientRect();
                            const nextRect = nextItem.getBoundingClientRect();
                            const containerRect = svgGroup.closest('svg').getBoundingClientRect();

                            // Calculate center points relative to SVG container
                            const x1 = currentRect.left + currentRect.width / 2 - containerRect.left;
                            const y1 = currentRect.top + currentRect.height / 2 - containerRect.top;
                            const x2 = nextRect.left + nextRect.width / 2 - containerRect.left;
                            const y2 = nextRect.top + nextRect.height / 2 - containerRect.top;

                            // Create curved path
                            const midX = (x1 + x2) / 2;
                            const midY = (y1 + y2) / 2;
                            const curve = Math.abs(x2 - x1) / 3;

                            const path = document.createElementNS('http://www.w3.org/2000/svg', 'path');
                            const pathData = `M ${x1} ${y1} Q ${midX + (i % 2 === 0 ? curve : -curve)} ${midY} ${x2} ${y2}`;

                            path.setAttribute('d', pathData);
                            path.setAttribute('stroke', 'url(#lineGradient)');
                            path.setAttribute('stroke-width', '3');
                            path.setAttribute('fill', 'none');
                            path.setAttribute('stroke-dasharray', '10 5');
                            path.setAttribute('filter', 'url(#glow)');
                            path.setAttribute('class', 'animate-dash');

                            svgGroup.appendChild(path);
                        }
                    }

                    // Draw lines after page load and on resize
                    window.addEventListener('load', () => {
                        setTimeout(drawZigzagLines, 3000); // After loading animation
                    });

                    let resizeTimeout;
                    window.addEventListener('resize', () => {
                        clearTimeout(resizeTimeout);
                        resizeTimeout = setTimeout(drawZigzagLines, 250);
                    });

                    // Redraw on scroll (for responsive updates)
                    let scrollTimeout;
                    window.addEventListener('scroll', () => {
                        clearTimeout(scrollTimeout);
                        scrollTimeout = setTimeout(drawZigzagLines, 100);
                    }, {
                        passive: true
                    });
                </script>

                <!-- Message Title -->
                <div class="w-full sm:w-3/4 md:w-2/3 lg:w-1/2 relative p-4 sm:p-6 lg:p-8 rounded-2xl sm:rounded-3xl flex justify-center items-center scroll-animate">
                    <img src="./assets/images/msg.png" class="w-full max-w-md hover-glow" alt="Message">
                    <div class="absolute w-full h-full inset-0 flex items-center justify-center pointer-events-none -z-10 overflow-hidden opacity-30">
                        <img src="./assets/images/rope.png" class="w-full" alt="">
                        <img src="./assets/images/rope.png" class="w-full" alt="">
                    </div>
                </div>

                <!-- Message Content -->
                <div class="w-full max-w-6xl bg-[#F7F2DF] p-4 sm:p-6 lg:p-8 rounded-2xl sm:rounded-3xl border-2 sm:border-4 border-vintage shadow-vintage scroll-animate hover-lift">
                    <p class="text-sm sm:text-base md:text-lg lg:text-xl text-vintage-dark mb-4 sm:mb-6 leading-relaxed">
                        We are very delighted to share that UDGAM 2025, our annual cultural fest is back! This year, it will be one of the best UDGAM Fests yet. Fresh vibes, new energy, and we have never had a stronger purpose!!
                    </p>
                    <p class="text-sm sm:text-base md:text-lg lg:text-xl text-vintage-dark mb-4 sm:mb-6 leading-relaxed">
                        We, as the organizing committee, have been motivated, determined and focused to ensure that UDGAM'25 will be the best event you ever attended. With the support of various groups, and communities we will provide you three days and nights of music, talent, art and experiences that you will cherish for years.
                    </p>
                    <p class="text-sm sm:text-base md:text-lg lg:text-xl text-vintage-dark mb-4 sm:mb-6 leading-relaxed">
                        We know there will be something for everyone at UDGAM'25 - whether you want to compete, support, or just enjoy the fun - there will be plenty to keep you busy. And yes, lots of prizes, awards and certificates for the best of the best!
                    </p>
                    <p class="text-sm sm:text-base md:text-lg lg:text-xl text-vintage-dark mb-4 sm:mb-6 leading-relaxed">
                        A special thanks to all of our generous sponsors and partners - we would be unable to grow UDGAM without your ongoing support. Every year we aspire to grow UDGAM with your help.
                    </p>
                    <p class="text-sm sm:text-base md:text-lg lg:text-xl font-bold text-end text-vintage-dark mb-4 sm:mb-6 leading-relaxed">
                        ~Team UDGAM 2K25
                    </p>
                </div>
            </div>

            <!-- NIT SIKKIM Section -->
            <div style="background-image: url(./assets/images/bg3.png);" class="relative w-full min-h-screen p-4 sm:p-6 lg:p-8 flex items-center justify-center z-10">
                <div class="w-full max-w-7xl relative z-10">
                    <!-- NIT Header -->
                    <div class="flex flex-col sm:flex-row gap-4 sm:gap-6 mb-8 lg:mb-12 bg-vintage-light p-4 sm:p-6 rounded-2xl sm:rounded-3xl border-2 sm:border-4 border-vintage shadow-vintage items-center scroll-animate hover-lift">
                        <div class="w-16 h-16 sm:w-20 sm:h-20 md:w-24 md:h-24 bg-white rounded-full p-2 sm:p-3 border-2 sm:border-4 border-vintage flex-shrink-0 hover-rotate">
                            <img src="./assets/images/nitLogo.png" alt="NIT Logo" class="w-full h-full object-contain">
                        </div>
                        <div class="text-center sm:text-left">
                            <h1 class="text-xl sm:text-2xl md:text-3xl lg:text-4xl xl:text-5xl 2xl:text-6xl font-bold text-vintage-brown drop-shadow-lg">
                                NIT SIKKIM
                            </h1>
                            <p class="text-xs sm:text-sm md:text-base lg:text-lg font-bold text-vintage-tan drop-shadow-lg">
                                An Institute of National Importance
                            </p>
                        </div>
                    </div>

                    <!-- NIT Content -->
                    <div class="flex flex-col lg:flex-row justify-center items-center gap-6 lg:gap-12">
                        <!-- Campus Image -->
                        <div class="w-full lg:w-2/5 flex justify-center scroll-left">
                            <div class="relative w-full max-w-md border-2 sm:border-4 border-vintage rounded-2xl shadow-vintage overflow-hidden group bg-[#F7F2DF] p-3 sm:p-4 hover-lift">
                                <div class="w-full h-48 sm:h-56 md:h-64 rounded-xl overflow-hidden">
                                    <img src="./assets/images/campus.png" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" alt="nit campus">
                                </div>

                                <div class="absolute -right-6 sm:-right-8 bottom-4 sm:bottom-6 bg-vintage-brown -rotate-45 px-8 sm:px-12 py-2 sm:py-2.5 font-bold rounded-xl text-amber-100 shadow-lg text-xs sm:text-sm">
                                    EST. 2010
                                </div>

                                <div class="absolute -left-6 sm:-left-8 top-4 sm:top-6 bg-vintage-brown -rotate-45 px-6 sm:px-10 py-2 sm:py-2.5 font-bold rounded-xl text-amber-100 shadow-lg text-xs sm:text-sm">
                                    Our Campus
                                </div>
                            </div>
                        </div>

                        <!-- NIT Description -->
                        <div class="w-full lg:w-3/5 scroll-right">
                            <div class="relative rounded-2xl p-4 sm:p-6 md:p-8 shadow-vintage border-2 sm:border-4 border-vintage overflow-hidden bg-[#F7F2DF] hover-lift">
                                <div class="relative z-50 text-vintage-dark space-y-3 sm:space-y-4 text-xs sm:text-sm md:text-base lg:text-lg leading-relaxed">
                                    <p class="first-letter:text-2xl sm:first-letter:text-3xl md:first-letter:text-4xl lg:first-letter:text-5xl first-letter:font-bold first-letter:text-vintage-brown first-letter:mr-2 first-letter:float-left">
                                        National Institute of Technology Sikkim (NIT Sikkim) is a premier technical
                                        institution established in 2010. Located in the serene landscapes of Sikkim, the
                                        institute has grown to become a center of excellence in engineering education and
                                        research. With state-of-the-art facilities and a dedicated faculty, NIT Sikkim
                                        provides a conducive environment for holistic development of students.
                                    </p>
                                    <p>
                                        The institute offers undergraduate and postgraduate programs in various engineering
                                        disciplines, fostering innovation and critical thinking. Our campus is equipped with
                                        modern laboratories, a well-stocked library, and advanced computing facilities.
                                        Beyond academics, we encourage students to participate in extracurricular
                                        activities, technical competitions, and cultural events. The natural beauty
                                        surrounding our campus provides an inspiring backdrop for learning and personal
                                        growth, making NIT Sikkim a unique destination for aspiring engineers.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Section -->
            <div id="team" style="background-image: url(<?= $path['img_dir']?>/bg3.png);" class="relative w-full min-h-screen flex items-center justify-center p-4 sm:p-6 lg:p-8">
                <div class="bg-amber-900 p-4 sm:p-6 md:p-8 rounded-3xl shadow-2xl max-w-5xl w-full scroll-animate hover-lift">
                    <!-- Frame Header -->
                    <div class="bg-gradient-to-b from-amber-200 to-amber-300 p-4 sm:p-6 text-center rounded-t-2xl border-4 sm:border-8 border-amber-950 relative">
                        <div class="absolute -top-4 sm:-top-6 left-1/2 transform -translate-x-1/2 w-32 sm:w-48 h-8 sm:h-10 bg-amber-900 rounded-t-3xl"></div>
                        <h1 class="text-xl sm:text-2xl md:text-3xl lg:text-4xl xl:text-5xl font-bold text-amber-950 tracking-[0.2em] sm:tracking-[0.3em] drop-shadow-lg">
                            Anything to Ask???
                        </h1>
                    </div>

                    <!-- Frame Content -->
                    <div class="relative bg-white border-4 sm:border-8 border-amber-950 border-t-0 rounded-b-2xl min-h-[400px] sm:min-h-[500px] p-4 sm:p-6">
                        <h2 class="text-2xl sm:text-3xl font-bold text-amber-950 text-center mb-6 sm:mb-8">Contact Us</h2>

                        <!-- Contact Grid -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-6">
                            <?php foreach ($team_contacts as $index => $contact): ?>
                                <?php $delay = 'delay-' . (($index % 4) * 100 + 100); ?>
                                <div class="relative shadow-md hover:shadow-xl hover:-translate-y-1 transition-all duration-300 scale-animate <?php echo $delay; ?>">
                                    <!-- Background Frame Image -->
                                    <img src="./assets/images/bgC.png" class="w-full h-auto" alt="Frame Background">

                                    <!-- Content positioned absolutely to overlay on frame -->
                                    <div class="absolute inset-0 flex flex-col items-center justify-center p-4">
                                        <!-- Photo Container -->
                                        <div class="flex justify-center mb-3">
                                            <div class="w-32 h-40 sm:w-40 sm:h-48 md:w-50 md:h-60 bg-[#FFFBEB] overflow-hidden border-4 border-amber-900 shadow-lg hover-glow">
                                                <img src="<?php echo "{$path['img_dir']}{$contact['pic']}"; ?>" alt="<?php echo $contact['name']; ?>" class="w-full h-full object-cover">
                                            </div>
                                        </div>

                                        <h3 class="text-base sm:text-lg font-bold text-amber-950 text-center drop-shadow-sm"><?php echo $contact['name']; ?></h3>
                                        <p class="text-xs text-amber-800 text-center font-medium mb-2"><?php echo $contact['position']; ?></p>

                                        <div class="flex justify-center gap-2 flex-wrap">
                                            <a href="<?php echo $contact['linkedin'];?>" target="_blank" class="w-7 h-7 sm:w-8 sm:h-8 bg-amber-900 rounded-full flex items-center justify-center text-white hover:bg-amber-950 hover-scale transition-all duration-300">
                                                <svg class="w-3 h-3 sm:w-4 sm:h-4 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                    <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                                                </svg>
                                            </a>
                                            <a href="<?php echo $contact['instagram'];?>" target="_blank" class="w-7 h-7 sm:w-8 sm:h-8 bg-amber-900 rounded-full flex items-center justify-center text-white hover:bg-amber-950 hover-scale transition-all duration-300">
                                                <svg class="w-3 h-3 sm:w-4 sm:h-4 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                                                </svg>
                                            </a>
                                            <a href="mailto:<?php echo $contact['email']; ?>" class="w-7 h-7 sm:w-8 sm:h-8 bg-amber-900 rounded-full flex items-center justify-center text-white hover:bg-amber-950 hover-scale transition-all duration-300">
                                                <svg class="w-3 h-3 sm:w-4 sm:h-4 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                    <path d="M0 3v18h24v-18h-24zm6.623 7.929l-4.623 5.712v-9.458l4.623 3.746zm-4.141-5.929h19.035l-9.517 7.713-9.518-7.713zm5.694 7.188l3.824 3.099 3.83-3.104 5.612 6.817h-18.779l5.513-6.812zm9.208-1.264l4.616-3.741v9.348l-4.616-5.607z" />
                                                </svg>
                                            </a>
                                            <a href="tel:<?php echo $contact['phone']; ?>" class="w-7 h-7 sm:w-8 sm:h-8 bg-amber-900 rounded-full flex items-center justify-center text-white hover:bg-amber-950 hover-scale transition-all duration-300">
                                                <svg class="w-3 h-3 sm:w-4 sm:h-4 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                    <path d="M20 22.621l-3.521-6.795c-.008.004-1.974.97-2.064 1.011-2.24 1.086-6.799-7.82-4.609-8.994l2.083-1.026-3.493-6.817-2.106 1.039c-7.202 3.755 4.233 25.982 11.6 22.615.121-.055 2.102-1.029 2.11-1.033z" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <div style="background-image: url(./assets/images/bg3.png);" class="relative w-full bg-center p-4 sm:p-6 lg:p-8 z-10">
                <div class="mb-16 flex flex-col sm:flex-row justify-around items-center w-full max-w-7xl mx-auto bg-vintage-light p-6 sm:p-8 lg:p-10 rounded-2xl sm:rounded-3xl border-2 sm:border-4 border-vintage shadow-vintage text-center scroll-animate hover-lift">
                    <img src="./assets/images/ferris.png" alt="Ferris Wheel" class="w-24 sm:w-32 md:w-40 lg:w-48 hidden sm:block animate-float">
                    <div class="my-4 sm:my-0">
                        <p class="text-xl sm:text-2xl lg:text-3xl font-bold text-vintage-brown mb-2">UDGAM 2025</p>
                        <p class="text-sm sm:text-base lg:text-lg text-vintage-tan mb-4">National Institute of Technology Sikkim</p>
                        <p class="text-xs sm:text-sm lg:text-base text-vintage-dark">© 2025 UDGAM. All rights reserved.</p>
                        <p class="text-xs sm:text-sm lg:text-base text-vintage-dark mt-2">Ravangla, South Sikkim - 737139</p>
                    </div>
                    <img src="./assets/images/ferris.png" alt="Ferris Wheel" class="w-24 sm:w-32 md:w-40 lg:w-48 hidden sm:block animate-float">
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    addEventListener('DOMContentLoaded', () => {
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animated');
                }
            });
        }, observerOptions);

        // Observe all elements with animation classes
        setTimeout(() => {
            document.querySelectorAll('.scroll-animate, .scroll-left, .scroll-right, .scale-animate').forEach(el => {
                observer.observe(el);
            });
        }, 2000);

    })
</script>

</html>
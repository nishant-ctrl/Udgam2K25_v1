<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sponsors</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="./css/sponsers.css">
    <link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&family=Open+Sans:wght@400;700&display=swap"
        rel="stylesheet">

        <style>
                body.bg-sponsors-page {
        /* Use the uploaded vintage circus image */
        background-image: url('./assets/images/sponsersBg.png');
        background-size: cover;
        background-position: center top; 
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-color: #3e261a; /* Dark brown fallback */
    }

        </style>
</head>

<body class="bg-sponsors-page min-h-screen relative">
  <?php include 'src/components/header.php'?>
    <div class="container mx-auto px-4 py-16 relative z-10 ">

        <header class="text-center mb-16 mt-16">
            <h1 id="sponsors-title"
                class="text-7xl font-extrabold pb-4 font-luckiest-guy uppercase tracking-wide">
                Our Grand Patrons
            </h1>
            <p class="text-xl text-amber-50 mb-10 font-open-sans"> 
                The generous partners who help make the magic happen.
            </p>
        </header>
        
        <section id="why-sponsor-us" class="mb-20">
            <div class="vintage-panel mx-auto max-w-4xl p-10">
                <h2 class="text-4xl font-luckiest-guy uppercase text-center mb-6 text-amber-300 drop-shadow-lg">
                    Why Partnership with Us?
                </h2>
                <div class="text-center font-open-sans text-amber-100 text-lg space-y-4">
                    <p>
                        Becoming a <strong>Grand Patron</strong> means more than just a logo placement. You become an integral part of the most anticipated college event of the year, gaining unparalleled visibility with thousands of students, industry leaders, and media personnel.
                    </p>
                    <p>
                        Your support directly contributes to spectacular events, renowned artists, and groundbreaking competitions. Join us in creating memories that last a lifetime and showcase your brand's commitment to innovation and community spirit.
                    </p>
                    <a href="mailto:udgam@nitsikkim.ac.in"
                        class="inline-block mt-6 px-8 py-3 bg-red-800 text-white font-bold uppercase rounded-lg shadow-xl hover:bg-red-900 transition duration-300 vintage-button">
                        Inquire About Sponsorship
                    </a>
                </div>
            </div>
        </section>



        <section id="sponsor-tiers" class="mt-20">
            <div class="text-center mb-16">
                <div class="inline-block px-10 py-4 committee-label">
                    <p class="text-2xl font-semibold font-open-sans uppercase text-amber-50">Our Grand Patrons</p>
                </div>
            </div>

            <div id="sponsor-cards" class="flex flex-wrap justify-center">

                <div class="sponsor-card w-full max-w-lg p-12 text-center shadow-2xl relative">
                    
                    <h3 class="text-6xl font-luckiest-guy uppercase text-center text-red-700 ">
                        Coming Soon!
                    </h3>
                </div>
            </div>
        </section>
    </div>
</body>

</html>
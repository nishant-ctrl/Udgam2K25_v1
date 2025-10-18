<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fest Committees</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="./css/teams.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&family=Open+Sans:wght@400;700&display=swap"
        rel="stylesheet">
    <style>
        body.bg-carnival-stage {
            background-color: #f5e1c0;
            /* NOTE: Using a placeholder image for leadsBg.png */
            background-image: url('./assets/images/leadsBg.png'); 
            background-size: cover;
            background-position: center center;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        /* Custom styles for the new filter buttons */
     .filter-btn {
            background-image: linear-gradient(135deg, #8B4513, #D4A373); /* warm brown to golden tan */
            border: 2px solid #E6BE8A; /* soft gold border */
            color: #FFF8DC; /* antique white text */
            font-weight: 600;
            letter-spacing: 0.5px;
            box-shadow: 0 4px 10px rgba(60, 35, 20, 0.5);
            transition: all 0.3s ease;
            cursor: pointer;
            border-radius: 12px;
            text-shadow: 0 1px 2px rgba(50, 30, 10, 0.7);
            padding: 0.75rem 1.5rem; /* comfortable padding */
            min-width: 140px; /* ensures consistent width on desktop */
            text-align: center;
            display: inline-flex;
            justify-content: center;
            align-items: center;
        }

        .filter-btn:hover {
            transform: translateY(-3px);
            background-image: linear-gradient(135deg, #A0522D, #E6BE8A); /* warmer bronze highlight */
            box-shadow: 0 6px 15px rgba(50, 25, 10, 0.6),
                        0 0 10px rgba(230, 190, 100, 0.4);
        }

        .filter-btn.active {
            transform: scale(1.07);
            background-image: linear-gradient(135deg, #FFD700, #B8860B); /* gold to bronze */
            border-color: #8B4513; /* deep brown border */
            color: #4E2A1E; /* vintage dark brown text */
            text-shadow: 0 1px 2px rgba(255, 255, 255, 0.6);
            box-shadow: 0 0 20px rgba(255, 215, 100, 0.8),
                        0 8px 20px rgba(30, 15, 10, 0.8);
        }

        /* Responsive styling */
        @media (max-width: 768px) {
            .filter-btn {
                width: 48%; /* two buttons side by side with small gap */
                min-width: unset; /* remove fixed width */
                font-size: 0.9rem;
                padding: 0.65rem 1rem;
                margin-bottom: 0.5rem;
            }
        }

        @media (max-width: 480px) {
            .filter-btn {
                width: 100%; /* full width on small screens */
                font-size: 0.95rem;
                padding: 0.7rem 1.2rem;
            }
        }

    </style>
</head>

<body class="bg-carnival-stage min-h-screen relative">


    <div class="container mx-auto px-4 py-16 text-white relative z-10 carnival-content-frame">
  <?php include 'src/components/header.php'?>
        <header class="text-center mb-16 mt-16">
            <div class="flex justify-center mb-4">
                <div
                    class="w-20 h-1 bg-yellow-300 rounded-full flex justify-between items-center relative after:content-[''] after:absolute after:w-2 after:h-2 after:bg-yellow-300 after:rounded-full after:top-1/2 after:-translate-y-1/2 after:-left-1 after:shadow-md before:content-[''] before:absolute before:w-2 before:h-2 before:bg-yellow-300 before:rounded-full before:top-1/2 before:-translate-y-1/2 before:-right-1 before:shadow-md">
                </div>
            </div>

            <h1 id="fest-title"
                class="text-6xl md:text-7xl font-extrabold pb-4 font-luckiest-guy uppercase tracking-wide">
                Our Fest Committees
            </h1>
            <p
                class="text-lg mb-10 font-open-sans text-[#4E2A1E] tracking-wide drop-shadow-[1px_1px_2px_rgba(30,15,10,0.4)]">
                Meet the passionate team members who make our college fest a grand success
            </p>

            <div class="flex justify-center flex-wrap gap-4 mb-16"> <button id="core-team-btn"
                    class="filter-btn active text-lg md:text-xl font-luckiest-guy uppercase">
                    Core Team
                </button>
                <button id="committees-btn"
                    class="filter-btn text-lg md:text-xl font-luckiest-guy uppercase">
                    Committees
                </button>
                <button id="organising-team-btn"
                    class="filter-btn text-lg md:text-xl font-luckiest-guy uppercase">
                    Organising Team
                </button>
                </div>
            </header>

        <div id="core-team-section">
            <div class="mt-16">
                <div class="text-center">
                    <div id="committee-title-card"
                        class="inline-block px-10 py-5 rounded-[15px] shadow-[0_10px_20px_rgba(30,15,10,0.5)] bg-gradient-to-br from-[#D4A373] to-[#8B5E3C] 
                               transition duration-500 hover:scale-[1.05] hover:shadow-[0_12px_25px_rgba(30,15,10,0.6)] cursor-pointer relative z-10 carnival-title-card">
                        <h2 id="committee-title-text" class="text-3xl md:text-4xl font-bold font-luckiest-guy uppercase bg-gradient-to-r from-[#E6BE8A] to-[#B88746] bg-clip-text text-transparent 
                                     tracking-wide" style="
                                text-shadow:
                                  /* Deep outline (dark brown) */
                                  -2px -2px 0 #8b5a10,
                                   2px -2px 0 #502b1e,
                                  -2px  2px 0 #4E2A1E,
                                   2px  2px 0 #4E2A1E,
                            
                                  /* Mid-tone glow (muted cream) */
                                  0 0 10px rgba(135, 100, 30, 0.8),
                            
                                  /* Depth drop shadow */
                                  5px 5px 0 rgba(30, 15, 10, 0.9);
                              ">
                            Core Team
                        </h2>


                        <div class="ribbon top-left"></div>
                        <div class="ribbon bottom-right"></div>
                    </div>
                </div>

                <section class="mt-20">
                    <div class="flex justify-center mb-12">
                        <div
                            class="committee-label px-8 py-3 rounded-full shadow-lg border-2 border-yellow-400 bg-red-600">
                            <span class="w-3 h-3 bg-yellow-300 rounded-full animate-pulse-slow"></span>
                            <p class="text-base font-semibold text-yellow-100 ml-3 mr-3 font-open-sans">President</p>
                            <span class="w-3 h-3 bg-yellow-300 rounded-full animate-pulse-slow"></span>
                        </div>
                    </div>

                    <div id="committee-leads" class="flex flex-wrap justify-center gap-8 md:gap-12">

                        <div
                            class="member-card w-[300px] h-[440px] transform transition duration-500 hover:scale-[1.03] relative carnival-member-card">
                            <div class="card-content-wrapper">
                                <div class="relative flex justify-center mb-4">
                                    <div class="member-avatar w-[170px] h-[170px] rounded-full flex items-center justify-center border-4 border-[#E6B35A]"
                                        style="background-color: #a36025b8;">
                                        <img src="./assets/images/nis.png" class="w-full h-full object-cover rounded-full"
                                            alt="Ayan Roy Avatar">
                                        <span class="avatar-star absolute top-1 right-1"></span>
                                        <span class="avatar-star absolute bottom-1 left-1 transform rotate-45"></span>
                                    </div>

                                </div>
                                <div class="text-center">
                                    <h3 class="text-2xl font-bold mb-1 font-luckiest-guy uppercase">AYAN ROY</h3>
                                    <div class="contact-icons-wrapper flex items-center justify-evenly">
                                        <a href="mailto:b230057@nitsikkim.ac.in" class="contact-icon-link">
                                            <span class="material-icons">mail</span>
                                        </a>

                                        <a href="https://linkedin.com/in/arjunmehta" target="_blank"
                                            class="contact-icon-link">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24">
                                                <path fill="currentColor"
                                                    d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.239-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>
                <section class="mt-20">
                    <div class="flex justify-center mb-12">
                        <div
                            class="committee-label px-8 py-3 rounded-full shadow-lg border-2 border-yellow-400 bg-red-600">
                            <span class="w-3 h-3 bg-yellow-300 rounded-full animate-pulse-slow"></span>
                            <p class="text-base font-semibold text-yellow-100 ml-3 mr-3 font-open-sans">Vice Presidents
                            </p>
                            <span class="w-3 h-3 bg-yellow-300 rounded-full animate-pulse-slow"></span>
                        </div>
                    </div>

                    <div id="committee-leads" class="flex flex-wrap justify-center gap-8 md:gap-12">

                        <div
                            class="member-card w-[300px] h-[440px] transform transition duration-500 hover:scale-[1.03] relative carnival-member-card">
                            <div class="card-content-wrapper">
                                <div class="relative flex justify-center mb-4">
                                    <div class="member-avatar w-[170px] h-[170px] rounded-full flex items-center justify-center border-4 border-[#E6B35A]"
                                        style="background-color: #a36025b8;">
                                        <img src="./assets/images/b230011@nitsikkim.ac.in.png" class="w-full h-full object-cover rounded-full"
                                            alt="Indrani Adhikary Avatar">
                                        <span class="avatar-star absolute top-1 right-1"></span>
                                        <span class="avatar-star absolute bottom-1 left-1 transform rotate-45"></span>
                                    </div>

                                </div>
                                <div class="text-center">
                                    <h3 class="text-2xl font-bold mb-1 font-luckiest-guy uppercase">INDRANI ADHIKARY
                                    </h3>
                                    <div class="contact-icons-wrapper flex items-center justify-evenly">
                                        <a href="mailto:b230011@nitsikkim.ac.in" class="contact-icon-link">
                                            <span class="material-icons">mail</span>
                                        </a>

                                        <a href="https://www.linkedin.com/in/indrani-adhikary-1006422b5" target="_blank"
                                            class="contact-icon-link">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24">
                                                <path fill="currentColor"
                                                    d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.239-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div
                            class="member-card w-[300px] h-[440px] transform transition duration-500 hover:scale-[1.03] relative carnival-member-card">
                            <div class="card-content-wrapper">
                                <div class="relative flex justify-center mb-4">
                                    <div class="member-avatar w-[170px] h-[170px] rounded-full flex items-center justify-center border-4 border-[#E6B35A]"
                                        style="background-color: #a36025b8;">
                                        <img src="./assets/images/b230061@nitsikkim.ac.in.png"
                                            class="w-full h-full object-cover rounded-full" alt="Rahul Patle Avatar">
                                        <span class="avatar-star absolute top-1 right-1"></span>
                                        <span class="avatar-star absolute bottom-1 left-1 transform rotate-45"></span>
                                    </div>

                                </div>
                                <div class="text-center">
                                    <h3 class="text-2xl font-bold mb-1 font-luckiest-guy uppercase">RAHUL PATLE</h3>
                                    <div class="contact-icons-wrapper flex items-center justify-evenly">
                                        <a href="mailto:b230061@nitsikkim.ac.in" class="contact-icon-link">
                                            <span class="material-icons">mail</span>
                                        </a>

                                        <a href="https://www.linkedin.com/in/rahul-patle-993756277" target="_blank"
                                            class="contact-icon-link">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24">
                                                <path fill="currentColor"
                                                    d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.239-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>
                <section class="mt-20">
                    <div class="flex justify-center mb-12">
                        <div
                            class="committee-label px-8 py-3 rounded-full shadow-lg border-2 border-yellow-400 bg-red-600">
                            <span class="w-3 h-3 bg-yellow-300 rounded-full animate-pulse-slow"></span>
                            <p class="text-base font-semibold text-yellow-100 ml-3 mr-3 font-open-sans">Treasurer</p>
                            <span class="w-3 h-3 bg-yellow-300 rounded-full animate-pulse-slow"></span>
                        </div>
                    </div>

                    <div id="committee-leads" class="flex flex-wrap justify-center gap-8 md:gap-12">

                        <div
                            class="member-card w-[300px] h-[440px] transform transition duration-500 hover:scale-[1.03] relative carnival-member-card">
                            <div class="card-content-wrapper">
                                <div class="relative flex justify-center mb-4">
                                    <div class="member-avatar w-[170px] h-[170px] rounded-full flex items-center justify-center border-4 border-[#E6B35A]"
                                        style="background-color: #a36025b8;">
                                        <img src="./assets/images/b230082@nitsikkim.ac.in.png" class="w-full h-full object-cover rounded-full"
                                            alt="Ritik Kumar Paswan Avatar">
                                        <span class="avatar-star absolute top-1 right-1"></span>
                                        <span class="avatar-star absolute bottom-1 left-1 transform rotate-45"></span>
                                    </div>

                                </div>
                                <div class="text-center">
                                    <h3 class="text-2xl font-bold mb-1 font-luckiest-guy uppercase">RITIK KUMAR PASWAN
                                    </h3>
                                    <div class="contact-icons-wrapper flex items-center justify-evenly">
                                        <a href="mailto:b230082@nitsikkim.ac.in" class="contact-icon-link">
                                            <span class="material-icons">mail</span>
                                        </a>

                                        <a href="https://www.linkedin.com/in/ritik-paswan-96181527a" target="_blank"
                                            class="contact-icon-link">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24">
                                                <path fill="currentColor"
                                                    d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.239-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>
            </div>
            <section class="mt-20">
                <div class="flex justify-center mb-12">
                    <div class="committee-label px-8 py-3 rounded-full shadow-lg border-2 border-yellow-400 bg-red-600">
                        <span class="w-3 h-3 bg-yellow-300 rounded-full animate-pulse-slow"></span>
                        <p class="text-base font-semibold text-yellow-100 ml-3 mr-3 font-open-sans">General Secretaries
                        </p>
                        <span class="w-3 h-3 bg-yellow-300 rounded-full animate-pulse-slow"></span>
                    </div>
                </div>

                <div id="committee-leads" class="flex flex-wrap justify-center gap-8 md:gap-12">

                    <div
                        class="member-card w-[300px] h-[440px] transform transition duration-500 hover:scale-[1.03] relative carnival-member-card">
                        <div class="card-content-wrapper">
                            <div class="relative flex justify-center mb-4">
                                <div class="member-avatar w-[170px] h-[170px] rounded-full flex items-center justify-center border-4 border-[#E6B35A]"
                                    style="background-color: #a36025b8;">
                                    <img src="./assets/images/b230120@nitsikkim.ac.in.png" class="w-full h-full object-cover rounded-full"
                                        alt="Ayush Choudhary Avatar">
                                    <span class="avatar-star absolute top-1 right-1"></span>
                                    <span class="avatar-star absolute bottom-1 left-1 transform rotate-45"></span>
                                </div>

                            </div>
                            <div class="text-center">
                                <h3 class="text-2xl font-bold mb-1 font-luckiest-guy uppercase">AYUSH CHOUDHARY</h3>
                                <div class="contact-icons-wrapper flex items-center justify-evenly">
                                    <a href="mailto:b230120@nitsikkim.ac.in" class="contact-icon-link">
                                        <span class="material-icons">mail</span>
                                    </a>

                                    <a href="https://www.linkedin.com/in/aayush-choudhary-86848835a" target="_blank"
                                        class="contact-icon-link">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24">
                                            <path fill="currentColor"
                                                d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.239-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
        
                    <div
                        class="member-card w-[300px] h-[440px] transform transition duration-500 hover:scale-[1.03] relative carnival-member-card">
                        <div class="card-content-wrapper">
                            <div class="relative flex justify-center mb-4">
                                <div class="member-avatar w-[170px] h-[170px] rounded-full flex items-center justify-center border-4 border-[#E6B35A]"
                                    style="background-color: #a36025b8;">
                                    <img src="./assets/images/b230094@nitsikkim.ac.in.png" class="w-full h-full object-cover rounded-full"
                                        alt="Aditi Singh Avatar">
                                    <span class="avatar-star absolute top-1 right-1"></span>
                                    <span class="avatar-star absolute bottom-1 left-1 transform rotate-45"></span>
                                </div>

                            </div>
                            <div class="text-center">
                                <h3 class="text-2xl font-bold mb-1 font-luckiest-guy uppercase">ADITI SINGH</h3>
                                <div class="contact-icons-wrapper flex items-center justify-evenly">
                                    <a href="mailto:b230094@nitsikkim.ac.in" class="contact-icon-link">
                                        <span class="material-icons">mail</span>
                                    </a>

                                    <a href="https://www.linkedin.com/in/aditi-singh-484104252" target="_blank"
                                        class="contact-icon-link">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24">
                                            <path fill="currentColor"
                                                d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.239-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div
                        class="member-card w-[300px] h-[440px] transform transition duration-500 hover:scale-[1.03] relative carnival-member-card">
                        <div class="card-content-wrapper">
                            <div class="relative flex justify-center mb-4">
                                <div class="member-avatar w-[170px] h-[170px] rounded-full flex items-center justify-center border-4 border-[#E6B35A]"
                                    style="background-color: #a36025b8;">
                                    <img src="./assets/images/b230115@nitsikkim.ac.in.png" class="w-full h-full object-cover rounded-full"
                                        alt="Rishabh Kumar Gupta Avatar">
                                    <span class="avatar-star absolute top-1 right-1"></span>
                                    <span class="avatar-star absolute bottom-1 left-1 transform rotate-45"></span>
                                </div>

                            </div>
                            <div class="text-center">
                                <h3 class="text-2xl font-bold mb-1 font-luckiest-guy uppercase">RISHABH KUMAR GUPTA</h3>
                                <div class="contact-icons-wrapper flex items-center justify-evenly">
                                    <a href="mailto:b230115@nitsikkim.ac.in" class="contact-icon-link">
                                        <span class="material-icons">mail</span>
                                    </a>

                                    <a href="https://www.linkedin.com/in/rishabh-kumar-gupta-394826311" target="_blank"
                                        class="contact-icon-link">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24">
                                            <path fill="currentColor"
                                                d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.239-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div
                        class="member-card w-[300px] h-[440px] transform transition duration-500 hover:scale-[1.03] relative carnival-member-card">
                        <div class="card-content-wrapper">
                            <div class="relative flex justify-center mb-4">
                                <div class="member-avatar w-[170px] h-[170px] rounded-full flex items-center justify-center border-4 border-[#E6B35A]"
                                    style="background-color: #a36025b8;">
                                    <img src="./assets/images/nis.png" class="w-full h-full object-cover rounded-full"
                                        alt="Tanisha Chakraborty Avatar">
                                    <span class="avatar-star absolute top-1 right-1"></span>
                                    <span class="avatar-star absolute bottom-1 left-1 transform rotate-45"></span>
                                </div>

                            </div>
                            <div class="text-center">
                                <h3 class="text-2xl font-bold mb-1 font-luckiest-guy uppercase">TANISHA CHAKRABORTY</h3>
                                <div class="contact-icons-wrapper flex items-center justify-evenly">
                                    <a href="mailto:b230057@nitsikkim.ac.in" class="contact-icon-link">
                                        <span class="material-icons">mail</span>
                                    </a>

                                    <a href="https://linkedin.com/in/arjunmehta" target="_blank"
                                        class="contact-icon-link">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24">
                                            <path fill="currentColor"
                                                d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.239-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div id="teams-container" class="mt-16 hidden"></div>
        
        <div id="organising-team-container" class="mt-16 hidden"></div>
        </div>


    <script>
    // script.js

    const handleContactClick = (event) => {
        const name = event.currentTarget.getAttribute("data-name");
        if (name)
            alert(
                `Step right up! Your message/request to connect with ${name} is being sent!`
            );
    };

    const attachContactListeners = () => {
        const contactButtons = document.querySelectorAll(".get-in-touch-btn");
        contactButtons.forEach((button) => {
            if (!button.dataset.listenerAttached) {
                button.addEventListener("click", handleContactClick);
                button.dataset.listenerAttached = "true";
            }
        });
    };

    // 1. RESTRUCTURED ORGANISING TEAM DATA 
    // Data is grouped by the FUNCTIONAL ROLE/SECTION instead of generic Leads/Associates.
    const organisingTeamData = [
        {
            roleTitle: "Associate Treasurers",
            members: [
                {
                    name: "Sulav Singhal",
                    img: "./assets/images/b230033@nitsikkim.ac.in.png",
                    mail: "b230033@nitsikkim.ac.in",
                    linkedin: "https://www.linkedin.com/in/sulavsinghal",
                },
                {
                    name: "Bittu Kumar",
                    img: "./assets/images/b230127@nitsikkim.ac.in.png",
                    mail: "b230127@nitsikkim.ac.in",
                    linkedin: "https://www.linkedin.com/in/bittu-kumar-59b00b32b",
                },
                {
                    name: "Amit Sharma",
                    img: "./assets/images/nis.png",
                    mail: "amit@mail.com",
                    linkedin: "",
                },
                {
                    name: "Gaurav Kumar",
                    img: "./assets/images/b230105@nitsikkim.ac.in.png",
                    mail: "b230105@nitsikkim.ac.in",
                    linkedin: "https://www.linkedin.com/in/gaurav-kumar-469899281?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app",
                },
            ],
        },
        {
            roleTitle: "Secratary",
            members: [
                {
                    name: "Shashi",
                    img: "./assets/images/nis.png",
                    mail: "varun@mail.com",
                    linkedin: "",
                },
            ],
        },
        {
            roleTitle: "Joint Secretaries",
            members: [
                {
                    name: "Varun Sharma",
                    img: "./assets/images/b230038@nitsikkim.ac.in.png",
                    mail: "b230038@nitsikkim.ac.in",
                    linkedin: "https://linkedin.com/in/intotheabyss19",
                },
                {
                    name: "Debopriyo Khan",
                    img: "./assets/images/b230047@nitsikkim.ac.in.png",
                    mail: "b230047@nitsikkim.ac.in",
                    linkedin: "https://www.linkedin.com/in/debopriyo-khan-1b766328a",
                },
            ],
        },
        // Add more organising sections here if needed
    ];
    // -----------------------------------


    // Full team list including leads and associate leads (Kept for 'Committees' tab)
    const teams = [
        {
            name: "Web Development",
            leads: [
                {
                    name: "Nishant Kumar",
                    img: "./assets/images/b230057@nitsikkim.ac.in.png",
                    mail: "b230057@nitsikkim.ac.in",
                    linkedin: "https://www.linkedin.com/in/nishant9135",
                },
                {
                    name: "Anshu Kumar",
                    img: "./assets/images/b230124@nitsikkim.ac.in.png",
                    mail: "b230124@nitsikkim.ac.in",
                    linkedin: "https://www.linkedin.com/in/anshu-kumar-98b76424a?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app",
                },
                {
                    name: "Shiran",
                    img: "./assets/images/b230024@nitsikkim.ac.in.png",
                    mail: "b230024@nitsikkim.ac.in",
                    linkedin: "https://www.linkedin.com/in/shiranul-haque-2697792ba",
                },
            ],
            associates: [
                { name: "Ravi Prakash Ranjan", img: "./assets/images/b230062@nitsikkim.ac.in.png", mail: "b230062@nitsikkim.ac.in", linkedin: "https://www.linkedin.com/in/ravi-prakash-ranjan-8983a1324" },
                {
                    name: "Rajesh Siddareddy",
                    img: "./assets/images/nis.png",
                    mail: "",
                    linkedin: "",
                },
                {
                    name: "Priyal Meena",
                    img: "./assets/images/nis.png",
                    mail: "",
                    linkedin: "",
                },
            ],
        },

        {
            name: "Sponsorship",
            leads: [
                { name: "Neymit", img: "./assets/images/nis.png", mail: "", linkedin: "" },
                {
                    name: "Trilokjeet Basu",
                    img: "./assets/images/b230140@nitsikkim.ac.in.png",
                    mail: "b230140@nitsikkim.ac.in",
                    linkedin: "https://www.linkedin.com/in/trilokjeetbasu",
                },
            ],
            associates: [
                {
                    name: "Debopriyo Khan",
                    img: "./assets/images/b230047@nitsikkim.ac.in.png",
                    mail: "",
                    linkedin: "",
                },
                {
                    name: "Neeraj Kumar Gupta",
                    img: "./assets/images/b230015@nitsikkim.ac.in.png",
                    mail: "b230015@nitsikkim.ac.in",
                    linkedin: "#",
                },
            ],
        },
        {
            name: "Graphics",
            leads: [
                {
                    name: "Durgaprasad Valle",
                    img: "./assets/images/nis.png",
                    mail: "",
                    linkedin: "",
                },
                {
                    name: "Abhishek Kumar",
                    img: "./assets/images/b230121@nitsikkim.ac.in.png",
                    mail: "b230121@nitsikkim.ac.in",
                    linkedin: "https://www.linkedin.com/in/abhishek-kumar-357994329?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3B4eEraQEwTfeIfRedCWUYhA%3D%3D",
                },
            ],
            associates: [],
        },
        {
            name: "Content",
            leads: [
                {
                    name: "Srijan Mahajan",
                    img: "./assets/images/b230089@nitsikkim.ac.in.png",
                    mail: "b230089@nitsikkim.ac.in",
                    linkedin: "https://www.linkedin.com/in/srijan-mahajan-764b2035a/",
                },
                {
                    name: "Sakshi Roy",
                    img: "./assets/images/b230086@nitsikkim.ac.in.png",
                    mail: "b230086@nitsikkim.ac.in",
                    linkedin: "https://www.linkedin.com/in/sakshi-roy-bb1485316/",
                },
            ],
            associates: [],
        },
        {
            name: "Social Media",
            leads: [
                {
                    name: "Ayush Kumar",
                    img: "./assets/images/b230008@nitsikkim.ac.in.png",
                    mail: "b230008@nitsikkim.ac.in",
                    linkedin: "https://linkedin.com/in/ayush-kumar-0735a6289 ",
                },
                {
                    name: "Shreyasi",
                    img: "./assets/images/b230029@nitsikkim.ac.in.png",
                    mail: "b230029@nitsikkim.ac.in",
                    linkedin: "https://www.linkedin.com/in/shreyasi-soumya",
                },
            ],
            associates: [
                {
                    name: "Awantika Sharma",
                    img: "./assets/images/nis.png",
                    mail: "",
                    linkedin: "",
                },
            ],
        },
        {
            name: "Publicity",
            leads: [
                { name: "Vaibhav Singh", img: "./assets/images/b230119@nitsikkim.ac.in.png", mail: "b230119@nitsikkim.ac.in", linkedin: "https://www.linkedin.com/in/vaibhav-singh-6a5b51370?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" },
                {
                    name: "Ayush Chhetri",
                    img: "./assets/images/b230074@nitsikkim.ac.in.png",
                    mail: "b230074@nitsikkim.ac.in",
                    linkedin: "https://www.linkedin.com/in/ayush-chhetri-971135330",
                },
            ],
            associates: [
                {
                    name: "Dilkhush Napit",
                    img: "./assets/images/b230049@nitsikkim.ac.in.png",
                    mail: "b230049@nitsikkim.ac.in",
                    linkedin: "https://www.linkedin.com/in/dilkhush-napit-4037b02a0",
                },
            ],
        },
        {
            name: "Merchandise",
            leads: [
                { name: "Abhinav Kumar Jha", img: "./assets/images/b230043@nitsikkim.ac.in.png", mail: "b230043@nitsikkim.ac.in", linkedin: "https://www.linkedin.com/in/abhinav-kumar-jha-9068b7379" },
                { name: "Chombey", img: "./assets/images/nis.png", mail: "", linkedin: "" },
            ],
            associates: [
                { name: "Teegan", img: "./assets/images/b230091@nitsikkim.ac.in.png", mail: "b230091@nitsikkim.ac.in", linkedin: "https://www.linkedin.com/in/teegan-subba-561b23310" },
            ],
        },
        {
            name: "Cultural",
            leads: [
                { name: "Rohit", img: "./assets/images/b230134@nitsikkim.ac.in.png", mail: "b230134@nitsikkim.ac.in", linkedin: "https://www.linkedin.com/in/rohit-kumar-singh-651b72370" },
                { name: "Richa", img: "./assets/images/nis.png", mail: "", linkedin: "" },
            ],
            associates: [

            ],
        },
        {
            name: "Hospitality & Logistics",
            leads: [
                { name: "Aman", img: "./assets/images/b230098@nitsikkim.ac.in.png", mail: "b230098@nitsikkim.ac.in", linkedin: "https://www.linkedin.com/in/amanraj-patel-70920737a" },
                {
                    name: "Shashwat Mishra",
                    img: "./assets/images/b230138@nitsikkim.ac.in.png",
                    mail: "b230138@nitsikkim.ac.in",
                    linkedin: "https://www.linkedin.com/in/shashwat-mishra-978687379",
                },
                { name: "Nirmal", img: "./assets/images/b230056@nitsikkim.ac.in.png", mail: "b230056@nitsikkim.ac.in", linkedin: "https://www.linkedin.com/in/nirmal-kumar-chauhan-7a2b64320" },
            ],
            associates: [
                {
                    name: "Shree Krishn Bhakt",
                    img: "./assets/images/nis.png",
                    mail: "",
                    linkedin: "",
                },
            ],
        },
        {
            name: "Technical",
            leads: [
                {
                    name: "Piyush Bharti",
                    img: "./assets/images/nis.png",
                    mail: "",
                    linkedin: "",
                },
            ],
            associates: [
                {
                    name: "Ashutosh Ranjan",
                    img: "./assets/images/b230006@nitsikkim.ac.in.png",
                    mail: "b230006@nitsikkim.ac.in",
                    linkedin: "https://www.linkedin.com/in/authran",
                },
                {
                    name: "Prashant Kumar",
                    img: "./assets/images/nis.png",
                    mail: "",
                    linkedin: "",
                },

            ],
        },
        {
            name: "Photography",
            leads: [
                { name: "Betha Jayant Veer", img: "./assets/images/nis.png", mail: "", linkedin: "" },
                {
                    name: "Awanish Patel",
                    img: "./assets/images/b230126@nitsikkim.ac.in.png",
                    mail: "b230126@nitsikkim.ac.in",
                    linkedin: "https://www.linkedin.com/in/awanishpatel",
                },
            ],
            associates: [
                {
                    name: "Annepu Gnana Prasad",
                    img: "./assets/images/b230003@nitsikkim.ac.in.png",
                    mail: "b230003@nitsikkim.ac.in",
                    linkedin: "https://www.linkedin.com/in/annepu-gnana-prasad-b7136528a",
                },
            ],
        },
        {
            name: "Event Management",
            leads: [
                { name: "Saurav", img: "./assets/images/b230032@nitsikkim.ac.in.png", mail: "b230032@nitsikkim.ac.in", linkedin: "https://www.linkedin.com/in/sourav-mahato121?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" },
                {
                    name: "Vikash Singh",
                    img: "./assets/images/b230069@nitsikkim.ac.in.png",
                    mail: "b230069@nitsikkim.ac.in",
                    linkedin: "https://www.linkedin.com/in/vikas-singh-37377828a",
                },
            ],
            associates: [
                { name: "Akriti Patel", img: "./assets/images/b230097@nitsikkim.ac.in.png", mail: "b230097@nitsikkim.ac.in", linkedin: "https://www.linkedin.com/in/akriti-patel-991684330/" },
                { name: "Satya", img: "./assets/images/nis.png", mail: "", linkedin: "" },
                { name: "Nehal Rai", img: "./assets/images/b230111@nitsikkim.ac.in.png", mail: "b230111@nitsikkim.ac.in", linkedin: "https://www.linkedin.com/in/nehal-rai-6b8209381" },
                { name: "Prem", img: "./assets/images/b230059@nitsikkim.ac.in.png", mail: "b230059@nitsikkim.ac.in", linkedin: "https://www.linkedin.com/in/prem-kumar-shah-01ba36316" },
                { name: "Abhishek", img: "./assets/images/b230093@nitsikkim.ac.in.png", mail: "b230093@nitsikkim.ac.in", linkedin: "https://www.linkedin.com/in/abhishek-kumar-gond-260694310?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" },
                {
                    name: "Hritik",
                    img: "./assets/images/nis.png",
                    mail: "",
                    linkedin: "",
                },
            ],
        },
        {
            name: "Discipline",
            leads: [
                { name: "Harsh", img: "./assets/images/nis.png", mail: "", linkedin: "" },
            ],
            associates: [
                { name: "Ankit", img: "./assets/images/b230122@nitsikkim.ac.in.png", mail: "b230122@nitsikkim.ac.in", linkedin: "https://www.linkedin.com/in/ankit-bhaskar-655441307?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" },
                {
                    name: "Prayas Palit",
                    img: "./assets/images/nis.png",
                    mail: "",
                    linkedin: "",
                },
                { name: "Aditya", img: "./assets/images/nis.png", mail: "", linkedin: "" },
            ],
        },
        {
            name: "Medical",
            leads: [
                {
                    name: "Himalaya Raj",
                    img: "./assets/images/b230107@nitsikkim.ac.in.png",
                    mail: "b230107@nitsikkim.ac.in",
                    linkedin: "https://www.linkedin.com/in/himalaya-raj-73128128a?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app",
                },
            ],
            associates: [
                {
                    name: "Dhiraj Kumar",
                    img: "./assets/images/nis.png",
                    mail: "",
                    linkedin: "",
                },
                {
                    name: "Arijit Mondal",
                    img: "./assets/images/b230125@nitsikkim.ac.in.png",
                    mail: "b230125@nitsikkim.ac.in",
                    linkedin: "#",
                },
            ],
        },
        {
            name: "Guest Receive",
            leads: [
                {
                    name: "Ritik Kumar Paswan",
                    img: "./assets/images/nis.png",
                    mail: "",
                    linkedin: "",
                },
            ],
            associates: [
                {
                    name: "Sachin Sahu",
                    img: "./assets/images/nis.png",
                    mail: "",
                    linkedin: "",
                },
            ],
        },
    ];

    // Create member card (Reusable function)
    function createMemberCard(member) {
        // No role is explicitly rendered under the name for the committees or organising team
        // as the sections themselves define the role (Leads or specific Organising Group).
        const subTitle = ''; 
            
        return `
        <div class="member-card w-[300px] h-[440px] transform transition duration-500 hover:scale-[1.03] relative carnival-member-card">
        <div class="card-content-wrapper">
            <div class="relative flex justify-center mb-4">
            <div class="member-avatar w-[170px] h-[170px] rounded-full flex items-center justify-center border-4 border-[#E6B35A]" style="background-color: #a36025b8;">
                <img src="${member.img}" class="w-full h-full object-cover rounded-full" alt="${member.name} Avatar">
                <span class="avatar-star absolute top-1 right-1"></span>
                <span class="avatar-star absolute bottom-1 left-1 transform rotate-45"></span>
            </div>
            </div>
            <div class="text-center">
            <h3 class="text-2xl font-bold mb-1 font-luckiest-guy uppercase">${member.name}</h3>
            ${subTitle}
            <div class="contact-icons-wrapper flex items-center justify-evenly">
                <a href="mailto:${member.mail}" class="contact-icon-link"><span class="material-icons">mail</span></a>
                <a href="${member.linkedin}" target="_blank" class="contact-icon-link">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path fill="currentColor"
                    d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.239-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                </svg>
                </a>
            </div>
            </div>
        </div>
        </div>
    `;
    }

    // Create a section with a label (Reusable function)
    function createCommitteeSection(title, members, colorClass) {
        if (!members || members.length === 0) return ""; // skip empty sections
        return `
        <section class="mt-16">
        <div class="flex justify-center mb-12">
            <div class="committee-label px-8 py-3 rounded-full shadow-lg border-2 border-yellow-400 ${colorClass}">
            <span class="w-3 h-3 bg-yellow-300 rounded-full animate-pulse-slow"></span>
            <p class="text-base font-semibold text-yellow-100 ml-3 mr-3 font-open-sans">${title}</p>
            <span class="w-3 h-3 bg-yellow-300 rounded-full animate-pulse-slow"></span>
            </div>
        </div>
        <div class="flex flex-wrap justify-center gap-8 md:gap-12">
            ${members.map(createMemberCard).join("")}
        </div>
        </section>
    `;
    }

    // Create team cards (Used for main Committees only)
    function createTeam(team) {
        return `
        <div class="mt-16">
        <div class="text-center">
            <div id="committee-title-card" class="inline-block px-10 py-5 rounded-[15px] shadow-[0_10px_20px_rgba(30,15,10,0.5)] bg-gradient-to-br from-[#D4A373] to-[#8B5E3C] transition duration-500 hover:scale-[1.05] hover:shadow-[0_12px_25px_rgba(30,15,10,0.6)] cursor-pointer relative z-10 carnival-title-card">
            <h2 class="text-3xl md:text-4xl font-bold font-luckiest-guy uppercase bg-gradient-to-r from-[#E6BE8A] to-[#B88746] bg-clip-text text-transparent tracking-wide" style="text-shadow:-2px -2px 0 #8b5a10,2px -2px 0 #502b1e,-2px 2px 0 #4E2A1E,2px 2px 0 #4E2A1E,0 0 10px rgba(135,100,30,0.8),5px 5px 0 rgba(30,15,10,0.9);">${
                team.name
            }</h2>
            <div class="ribbon top-left"></div>
            <div class="ribbon bottom-right"></div>
            </div>
        </div>

        ${createCommitteeSection("Leads", team.leads, "bg-red-600")}
        ${createCommitteeSection(
            "Associate Leads",
            team.associates,
            "bg-blue-600"
        )}
        </div>
    `;
    }
    
    // 2. NEW/MODIFIED FUNCTION TO RENDER ORGANISING TEAM UNIQUELY
    function renderOrganisingTeamUnique() {
        const organisingContainer = document.getElementById('organising-team-container');
        
        let htmlContent = `
            <div class="mt-16">
                <div class="text-center">
                    <div id="committee-title-card" class="inline-block px-10 py-5 rounded-[15px] shadow-[0_10px_20px_rgba(30,15,10,0.5)] bg-gradient-to-br from-[#D4A373] to-[#8B5E3C] 
                            transition duration-500 hover:scale-[1.05] hover:shadow-[0_12px_25px_rgba(30,15,10,0.6)] cursor-pointer relative z-10 carnival-title-card">
                        <h2 class="text-3xl md:text-4xl font-bold font-luckiest-guy uppercase bg-gradient-to-r from-[#E6BE8A] to-[#B88746] bg-clip-text text-transparent tracking-wide" style="text-shadow:-2px -2px 0 #8b5a10,2px -2px 0 #502b1e,-2px 2px 0 #4E2A1E,2px 2px 0 #4E2A1E,0 0 10px rgba(135,100,30,0.8),5px 5px 0 rgba(30,15,10,0.9);">
                            Organising Team
                        </h2>
                        <div class="ribbon top-left"></div>
                        <div class="ribbon bottom-right"></div>
                    </div>
                </div>
            `;
            
        // Iterate over the functional groups (e.g., Event Coordinators) and render them
        organisingTeamData.forEach(group => {
            htmlContent += createCommitteeSection(group.roleTitle, group.members, "bg-green-700");
        });
        
        htmlContent += `</div>`;
        organisingContainer.innerHTML = htmlContent;
    }
    // ------------------------------------------------


    // Function to toggle team visibility (Unchanged logic, just using the new render function)
    function toggleTeams(teamType) {
        const coreTeamSection = document.getElementById('core-team-section');
        const committeesContainer = document.getElementById('teams-container');
        const organisingContainer = document.getElementById('organising-team-container');
        
        // Buttons
        const coreBtn = document.getElementById('core-team-btn');
        const committeesBtn = document.getElementById('committees-btn');
        const organisingBtn = document.getElementById('organising-team-btn');

        // Array of all section/button pairs for easy toggling
        const sections = [
            { id: coreTeamSection, btn: coreBtn, type: 'core' },
            { id: committeesContainer, btn: committeesBtn, type: 'committees' },
            { id: organisingContainer, btn: organisingBtn, type: 'organising' }
        ];

        sections.forEach(item => {
            if (item.type === teamType) {
                item.id.classList.remove('hidden');
                item.btn.classList.add('active');
            } else {
                item.id.classList.add('hidden');
                item.btn.classList.remove('active');
            }
        });
        
        attachContactListeners();
    }


    // Render all teams and attach listeners
    document.addEventListener("DOMContentLoaded", () => {
        const container = document.getElementById("teams-container");
        // Render the committee teams into the hidden container once
        container.innerHTML = teams.map(createTeam).join("");
        
        // RENDER THE NEW UNIQUE ORGANISING TEAM STRUCTURE
        renderOrganisingTeamUnique(); 
        // --------------------------

        attachContactListeners();

        // Get buttons
        const coreBtn = document.getElementById('core-team-btn');
        const committeesBtn = document.getElementById('committees-btn');
        const organisingBtn = document.getElementById('organising-team-btn');

        // Attach toggle listeners
        coreBtn.addEventListener('click', () => toggleTeams('core'));
        committeesBtn.addEventListener('click', () => toggleTeams('committees'));
        organisingBtn.addEventListener('click', () => toggleTeams('organising'));
        
        // Initial state is set to Core Team 
        toggleTeams('core');
    });

</script>
</body>

</html>
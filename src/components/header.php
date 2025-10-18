<!-- Desktop Navigation -->
<nav class="hidden lg:flex justify-center items-start absolute -top-3 right-0 gap-2 xl:gap-3 px-4 z-40 w-full">
    <a href="home" class="nav-item w-36 lg:w-40 xl:w-48 flex-shrink-0 relative cursor-pointer hover-scale transition-transform duration-300 animate-swing delay-100">
        <img src="./assets/images/plank.png" alt="Home" class="w-full h-auto object-contain">
        <span class="absolute inset-0 flex items-center justify-center text-sm lg:text-base font-bold text-white/80 hover:text-white/90 transition-all px-2">Home</span>
    </a>
    <a href="aboutus" class="nav-item w-36 lg:w-40 xl:w-48 flex-shrink-0 relative cursor-pointer hover-scale transition-transform duration-300 animate-swing delay-200">
        <img src="./assets/images/plank.png" alt="About" class="w-full h-auto object-contain">
        <span class="absolute inset-0 flex items-center justify-center text-sm lg:text-base font-bold text-white/80 hover:text-white/90 transition-all px-2">About Us</span>
    </a>
    <a href="gallery" class="nav-item w-36 lg:w-40 xl:w-48 flex-shrink-0 relative cursor-pointer hover-scale transition-transform duration-300 animate-swing delay-300">
        <img src="./assets/images/plank.png" alt="Gallery" class="w-full h-auto object-contain">
        <span class="absolute inset-0 flex items-center justify-center text-sm lg:text-base font-bold text-white/80 hover:text-white/90 transition-all px-2">Gallery</span>
    </a>
    <a href="sponsors" class="nav-item w-36 lg:w-40 xl:w-48 flex-shrink-0 relative cursor-pointer hover-scale transition-transform duration-300 animate-swing delay-400">
        <img src="./assets/images/plank.png" alt="Sponsors" class="w-full h-auto object-contain">
        <span class="absolute inset-0 flex items-center justify-center text-sm lg:text-base font-bold text-white/80 hover:text-white/90 transition-all px-2">Sponsors</span>
    </a>
    <a href="events" class="nav-item w-36 lg:w-40 xl:w-48 flex-shrink-0 relative cursor-pointer hover-scale transition-transform duration-300 animate-swing delay-500">
        <img src="./assets/images/plank.png" alt="Events" class="w-full h-auto object-contain">
        <span class="absolute inset-0 flex items-center justify-center text-sm lg:text-base font-bold text-white/80 hover:text-white/90 transition-all px-2">Events</span>
    </a>
    <a href="teams" class="nav-item w-36 lg:w-40 xl:w-48 flex-shrink-0 relative cursor-pointer hover-scale transition-transform duration-300 animate-swing delay-600">
        <img src="./assets/images/plank.png" alt="Team" class="w-full h-auto object-contain">
        <span class="absolute inset-0 flex items-center justify-center text-sm lg:text-base font-bold text-white/80 hover:text-white/90 transition-all px-2">Team</span>
    </a>
</nav>

<!-- Mobile/Tablet Navigation Button -->
<div class="lg:hidden fixed top-0 left-0 right-0 z-50 flex justify-end p-4">
    <button id="menuButton" class="text-[#C9AA7C] focus:outline-none p-3 hover:bg-amber-800 bg-[#F6F1DE] rounded-lg transition-all duration-300 shadow-lg hover-scale">
        <svg id="hamburgerIcon" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
        </svg>
        <svg id="closeIcon" class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
        </svg>
    </button>
</div>

<!-- Mobile Menu -->
<div style="background-image: url(./assets/images/leftLoad.png);" id="mobileMenu" class="lg:hidden fixed inset-y-0 right-0 z-40 w-full sm:w-80 bg-[#C9AA7E] transform translate-x-full transition-transform duration-300 ease-in-out rounded-l-3xl shadow-2xl overflow-y-auto">
    <!-- Logo Section -->
    <div class="flex items-center justify-center pt-6 pb-4 border-b border-amber-700/30">
        <img src="./assets/logos/logo2k25.png" alt="Logo" class="h-20 sm:h-24 w-auto animate-float">
    </div>

    <!-- Menu Items -->
    <div class="px-4 sm:px-6 py-6 space-y-3">
        <a href="home" class="menu-link group flex items-center gap-3 px-4 py-3 text-white/90 hover:text-white bg-amber-800/40 hover:bg-amber-700/60 rounded-xl transition-all duration-300 font-medium border border-transparent hover:border-amber-600/30 hover:shadow-lg">
            <svg class="w-5 h-5 text-amber-400 group-hover:text-amber-300 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
            </svg>
            <span>Home</span>
        </a>

        <a href="aboutus" class="menu-link group flex items-center gap-3 px-4 py-3 text-white/90 hover:text-white bg-amber-800/40 hover:bg-amber-700/60 rounded-xl transition-all duration-300 font-medium border border-transparent hover:border-amber-600/30 hover:shadow-lg">
            <svg class="w-5 h-5 text-amber-400 group-hover:text-amber-300 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            <span>About Us</span>
        </a>

        <a href="gallery" class="menu-link group flex items-center gap-3 px-4 py-3 text-white/90 hover:text-white bg-amber-800/40 hover:bg-amber-700/60 rounded-xl transition-all duration-300 font-medium border border-transparent hover:border-amber-600/30 hover:shadow-lg">
            <svg class="w-5 h-5 text-amber-400 group-hover:text-amber-300 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
            </svg>
            <span>Gallery</span>
        </a>

        <a href="sponsors" class="menu-link group flex items-center gap-3 px-4 py-3 text-white/90 hover:text-white bg-amber-800/40 hover:bg-amber-700/60 rounded-xl transition-all duration-300 font-medium border border-transparent hover:border-amber-600/30 hover:shadow-lg">
            <svg class="w-5 h-5 text-amber-400 group-hover:text-amber-300 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
            </svg>
            <span>Sponsors</span>
        </a>

        <a href="events" class="menu-link group flex items-center gap-3 px-4 py-3 text-white/90 hover:text-white bg-amber-800/40 hover:bg-amber-700/60 rounded-xl transition-all duration-300 font-medium border border-transparent hover:border-amber-600/30 hover:shadow-lg">
            <svg class="w-5 h-5 text-amber-400 group-hover:text-amber-300 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
            </svg>
            <span>Events</span>
        </a>

        <a href="teams" class="menu-link group flex items-center gap-3 px-4 py-3 text-white/90 hover:text-white bg-amber-800/40 hover:bg-amber-700/60 rounded-xl transition-all duration-300 font-medium border border-transparent hover:border-amber-600/30 hover:shadow-lg">
            <svg class="w-5 h-5 text-amber-400 group-hover:text-amber-300 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
            </svg>
            <span>Team</span>
        </a>
    </div>
</div>
<script>
    addEventListener('DOMContentLoaded', (e) => {
        // Mobile Menu Toggle
        e.preventDefault()
        const menuButton = document.getElementById('menuButton');
        const mobileMenu = document.getElementById('mobileMenu');
        const hamburgerIcon = document.getElementById('hamburgerIcon');
        const closeIcon = document.getElementById('closeIcon');

        if (menuButton) {
            menuButton.addEventListener('click', function() {
                if (mobileMenu.classList.contains('translate-x-full')) {
                    mobileMenu.classList.remove('translate-x-full');
                } else {
                    mobileMenu.classList.add('translate-x-full');
                }
                hamburgerIcon.classList.toggle('hidden');
                closeIcon.classList.toggle('hidden');
            });

            // Close menu when clicking on a link
            const menuLinks = mobileMenu.querySelectorAll('.menu-link');
            menuLinks.forEach(link => {
                link.addEventListener('click', function() {
                    mobileMenu.classList.add('translate-x-full');
                    hamburgerIcon.classList.remove('hidden');
                    closeIcon.classList.add('hidden');
                });
            });
        }

        // Mobile Menu Toggle
        // Add active class to current nav item
        const sections = document.querySelectorAll('div[id]');
        const navLinks = document.querySelectorAll('nav a, #mobileMenu a');

        window.addEventListener('scroll', () => {
            let current = '';
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.clientHeight;
                if (window.pageYOffset >= sectionTop - 200) {
                    current = section.getAttribute('id');
                }
            });

            navLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === `#${current}`) {
                    link.classList.add('active');
                }
            });
        });
    });
</script>
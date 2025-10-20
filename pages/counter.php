<div class="w-screen flex justify-center z-50">
    <div class="fixed bottom-0 z-40 m-3 bg-[#8b4513] text-white rounded-xl flex flex-col justify-center items-center px-3 py-2">
        <p id='cs' class="text-white font-bold text-sm sm:text-base lg:text-lg mb-2 text-center drop-shadow-lg"></p>
        <div style="color: #6b3410;" id="countdown" class="hidden flex-wrap justify-center text-center font-bold bg-white rounded-lg sm:rounded-xl p-2 sm:p-3 shadow-2xl border-2 border-amber-700">
            <div class="flex flex-col mx-1 sm:mx-2 countdown-digit">
                <p id="days" class="text-xl sm:text-2xl lg:text-3xl"></p>
                <p class="text-xs sm:text-sm">Days</p>
            </div>
            <span class="text-xl sm:text-2xl lg:text-3xl mx-1">:</span>
            <div class="flex flex-col mx-1 sm:mx-2 countdown-digit">
                <p id="hours" class="text-xl sm:text-2xl lg:text-3xl"></p>
                <p class="text-xs sm:text-sm">Hrs</p>
            </div>
            <span class="text-xl sm:text-2xl lg:text-3xl mx-1">:</span>
            <div class="flex flex-col mx-1 sm:mx-2 countdown-digit">
                <p id="minutes" class="text-xl sm:text-2xl lg:text-3xl"></p>
                <p class="text-xs sm:text-sm">Min</p>
            </div>
            <span class="text-xl sm:text-2xl lg:text-3xl mx-1">:</span>
            <div class="flex flex-col mx-1 sm:mx-2 countdown-digit">
                <p id="seconds" class="text-xl sm:text-2xl lg:text-3xl"></p>
                <p class="text-xs sm:text-sm">Sec</p>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
     
        // Countdown Timer
        const specificDate = new Date(2025, 10, 4, 11, 59, 59);
        console.log('Countdown to:', specificDate);

        function updateCountdown() {
            const now = new Date();
            const diff = specificDate - now;
            
            if (diff < 0) {
                document.getElementById('countdown').style.display = 'none';
                document.getElementById('cs').textContent = 'UDGAM 2K25 HAS BEGUN!';
                return;
            }
            
            const days = Math.floor(diff / (1000 * 60 * 60 * 24));
            const hours = Math.floor((diff / (1000 * 60 * 60)) % 24);
            const minutes = Math.floor((diff / (1000 * 60)) % 60);
            const seconds = Math.floor((diff / 1000) % 60);

            document.getElementById('days').innerText = days.toString().padStart(2, '0');
            document.getElementById('hours').innerText = hours.toString().padStart(2, '0');
            document.getElementById('minutes').innerText = minutes.toString().padStart(2, '0');
            document.getElementById('seconds').innerText = seconds.toString().padStart(2, '0');

            // Show countdown after first calculation
            document.getElementById('countdown').style.display = 'flex';
            document.getElementById('cs').innerText = "Countdown to Udgam 2k25";
        }

        // Background Image Update (Day/Night)
        function imgUpdate() {
            const date = new Date();
            const hours = date.getHours();
            const imageEle = document.querySelector('.update');
            
            if (imageEle) {
                imageEle.style.opacity = '0';
                imageEle.style.transition = 'opacity 2s ease';
                
                setTimeout(() => {
                    if (hours < 18 && hours >= 6) {
                        imageEle.src = './assets/images/bg2.jpeg';
                    } else {
                        imageEle.src = './assets/images/bg1.jpeg';
                    }

                    setTimeout(() => {
                        imageEle.style.opacity = '1';
                    }, 50);
                }, 1000);
            }
        }

        // Smooth Scroll for Navigation
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Parallax Effect on Scroll
        let ticking = false;
        window.addEventListener('scroll', () => {
            if (!ticking) {
                window.requestAnimationFrame(() => {
                    const scrolled = window.pageYOffset;
                    const parallaxElements = document.querySelectorAll('.parallax');
                    
                    parallaxElements.forEach(el => {
                        const speed = el.dataset.speed || 0.5;
                        el.style.transform = `translateY(${scrolled * speed}px)`;
                    });
                    
                    ticking = false;
                });
                ticking = true;
            }
        });

        // Initialize
        updateCountdown();
        imgUpdate();
        
        // Update intervals
        setInterval(updateCountdown, 1000);
        setInterval(imgUpdate, 3 * 60 * 60 * 1000); // Update every 3 hours
    });
</script>
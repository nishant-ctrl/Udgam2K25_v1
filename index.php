<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Udgam 2k25</title>
    <link rel="icon" type="image/x-icon" href="./assests/favicon/udg2k25.png">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fascinate&family=Rye&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body class="overflow-x-hidden">
    <!-- Loading Text Overlay -->
    <div class="loading-text-overlay" id="loadingText">
        <!-- Background Images -->
        <img src="./assests/images/left.png" class="absolute top-0 left-0 w-1/2 h-full object-cover" alt="">
        <img src="./assests/images/right.png" class="absolute top-0 right-0 w-1/2 h-full object-cover" alt="">

        <!-- Logo Container -->
        <div class="absolute left-0 w-1/2 h-full flex justify-center items-center z-10">
            <img src="./assests/logos/logo2k25.png" class="w-1/2 max-w-xs bg-white rounded-full p-4 shadow-2xl" alt="Logo">
        </div>

        <!-- Loading Text -->
        <h2 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl xl:text-8xl font-bold text-[#FEF3C6] z-20 relative"
            style="text-shadow: 2px 2px 0px #cb5f12ff, 4px 4px 10px rgba(0,0,0,0.5); font-family: 'Georgia', serif; letter-spacing: 0.08em;"
            id="textDisplay">
        </h2>
    </div>

    <!-- Split Screen Animation -->
    <div class="fixed inset-0 z-[999] pointer-events-none" id="splitContainer">
        <!-- Left Half -->
        <div class="absolute inset-y-0 left-0 w-1/2 split-half left overflow-hidden" id="leftHalf">
            <img src="./assests/images/left.png" class="absolute inset-0 w-full h-full object-cover" alt="">
            <div class="absolute inset-0 flex justify-center items-center">
                <img src="./assests/logos/logo2k25.png" class="w-1/2 max-w-xs bg-white rounded-full p-4 shadow-2xl" alt="Logo">
            </div>
        </div>

        <!-- Right Half -->
        <div class="absolute inset-y-0 right-0 w-1/2 split-half right overflow-hidden" id="rightHalf">
            <img src="./assests/images/right.png" class="absolute inset-0 w-full h-full object-cover" alt="">
        </div>
    </div>

    <?php include 'src/pages/home.php'; ?>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const leftHalf = document.getElementById('leftHalf');
            const rightHalf = document.getElementById('rightHalf');
            const mainContent = document.getElementById('mainContent');
            const loadingText = document.getElementById('loadingText');
            const textDisplay = document.getElementById('textDisplay');

            const texts = ['Welcome', 'To Udgam', '2025'];
            let textIndex = 0;

            function showNextText() {
                if (textIndex < texts.length) {
                    textDisplay.style.opacity = '0';
                    
                    setTimeout(() => {
                        textDisplay.textContent = texts[textIndex];
                        textDisplay.style.opacity = '1';
                        textIndex++;
                        setTimeout(showNextText, 800);
                    }, 300);
                } else {
                    setTimeout(() => {
                        loadingText.style.opacity = '0';
                        
                        setTimeout(() => {
                            leftHalf.classList.add('open');
                            rightHalf.classList.add('open');
                            mainContent.classList.add('visible');
                            
                            setTimeout(() => {
                                loadingText.style.display = 'none';
                            }, 1500);
                        }, 1000);
                    }, 1000);
                }
            }

            showNextText();

            // Scroll animations
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
        });
    </script>
</body>

</html>
<!-- Loading Screen with Door Animation -->
<div class="fixed inset-0 z-[9999]" id="loadingScreen">
    <!-- Left Half -->
    <div class="absolute inset-y-0 left-0 w-1/2 split-half left overflow-hidden" id="leftHalf">
        <img src="./assets/images/leftLoad.png" class="absolute inset-0 w-full h-full object-cover" alt="">
        <div class="absolute inset-0 flex justify-center items-center">
            <img src="./assets/logos/logo2k25.png" class="logo-center w-1/2 max-w-xs bg-white rounded-full p-4 shadow-2xl" alt="Logo">
        </div>
    </div>

    <!-- Right Half -->
    <div class="absolute inset-y-0 right-0 w-1/2 split-half right overflow-hidden" id="rightHalf">
        <img src="./assets/images/rightLoad.png" class="absolute inset-0 w-full h-full object-cover" alt="">
    </div>
</div>

<style>
/* Loading Screen Styles */
#loadingScreen {
    pointer-events: all;
    transition: opacity 0.5s ease-out;
}

#loadingScreen.fade-out {
    opacity: 0;
    pointer-events: none;
}

.split-half {
    position: absolute;
    width: 50%;
    height: 100vh;
    transition: transform 1.2s cubic-bezier(0.645, 0.045, 0.355, 1);
    will-change: transform;
}

.split-half.left {
    left: 0;
    transform-origin: left center;
}

.split-half.right {
    right: 0;
    transform-origin: right center;
}

.split-half.open.left {
    transform: translateX(-100%);
}

.split-half.open.right {
    transform: translateX(100%);
}

/* Logo Animation */
.logo-center {
    animation: logoFadeIn 0.6s ease-out forwards;
    opacity: 0;
}

@keyframes logoFadeIn {
    to {
        opacity: 1;
    }
}

/* Main Content */
.main-content-wrapper {
    opacity: 0;
    transition: opacity 0.8s ease-out, transform 0.8s ease-out;
}

.main-content-wrapper.visible {
    opacity: 1;
    transform: scale(1);
}
</style>

<script>
(function() {
    // Wait for DOM to be ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initDoorAnimation);
    } else {
        initDoorAnimation();
    }

    function initDoorAnimation() {
        const leftHalf = document.getElementById('leftHalf');
        const rightHalf = document.getElementById('rightHalf');
        const mainContent = document.getElementById('mainContent');
        const loadingScreen = document.getElementById('loadingScreen');

        // Ensure elements exist
        if (!leftHalf || !rightHalf || !mainContent || !loadingScreen) {
            console.error('Required elements not found');
            return;
        }

        // Show logo first, then open doors
        setTimeout(() => {
            // Open the doors
            leftHalf.classList.add('open');
            rightHalf.classList.add('open');
            
            // Show main content slightly before doors finish opening
            setTimeout(() => {
                mainContent.classList.add('visible');
            }, 400);
            
            // Fade out and remove loading screen after doors open
            setTimeout(() => {
                loadingScreen.classList.add('fade-out');
                
                setTimeout(() => {
                    loadingScreen.remove();
                }, 500);
            }, 1200);
            
        }, 800); // Initial delay to show logo
    }
})();
</script>
  <!-- Loading Text Overlay -->
  <div class="loading-text-overlay" id="loadingText">
      <!-- Background Images -->
      <img src="./assets/images/left.png" class="absolute top-0 left-0 w-1/2 h-full object-cover" alt="">
      <img src="./assets/images/right.png" class="absolute top-0 right-0 w-1/2 h-full object-cover" alt="">

      <!-- Logo Container -->
      <div class="absolute left-0 w-1/2 h-full flex justify-center items-center z-10">
          <img src="./assets/logos/logo2k25.png" class="w-1/2 max-w-xs bg-white rounded-full p-4 shadow-2xl" alt="Logo">
      </div>
  </div>

  <!-- Split Screen Animation -->
  <div class="fixed inset-0 z-[999] pointer-events-none" id="splitContainer">
      <!-- Left Half -->
      <div class="absolute inset-y-0 left-0 w-1/2 split-half left overflow-hidden" id="leftHalf">
          <img src="./assets/images/left.png" class="absolute inset-0 w-full h-full object-cover" alt="">
          <div class="absolute inset-0 flex justify-center items-center">
              <img src="./assets/logos/logo2k25.png" class="w-1/2 max-w-xs bg-white rounded-full p-4 shadow-2xl" alt="Logo">
          </div>
      </div>

      <!-- Right Half -->
      <div class="absolute inset-y-0 right-0 w-1/2 split-half right overflow-hidden" id="rightHalf">
          <img src="./assets/images/right.png" class="absolute inset-0 w-full h-full object-cover" alt="">
      </div>
  </div>

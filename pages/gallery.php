<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" type="image/x-icon" href="<?= $path['fav_dir'] ?>/udg2k25.png">
  <title>Udgam Gallery</title>
  <script src="<?= $path['js_dir']?>/tailwind.js"></script>
 <link rel="stylesheet" href="<?=$path['css_dir']?>/universalStyle.css" />

  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            'udgam-bg-light': '#5a2c0a',
            'udgam-dark-text': '#ffffff',
            'udgam-accent': '#FFB057',
            'primary-fest': '#A31C2D',
          }
        }
      }
    }
  </script>



  <style>
    body {
      background-image: url('./assets/images/gbg.png');
      background-size: cover;
      background-attachment: fixed;
      background-position: center;
    }
    .content-wrapper {
      min-height: calc(100vh - 64px);
      border-radius: 1rem;
      padding: 2rem;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
    }
    .custom-polaroid-frame {
      transform: rotate(0);
      transition: all 0.5s ease;
      box-shadow: 0 5px 15px rgba(114, 67, 39, 0.4);
      border: 2px solid #D9C3A0;
      background-color: rgba(114, 67, 39);
      animation: floatCard 5s ease-in-out infinite;
    }

    @keyframes floatCard {
      0%, 100% {
        transform: translateY(0px) rotate(0deg);
      }
      50% {
        transform: translateY(-5px) rotate(0.5deg);
      }
    }

    .event-card {
  position: relative;
  background: rgba(255, 255, 255, 0.12);
  backdrop-filter: blur(12px);
  border: 2px solid rgba(255, 176, 87, 0.3);
  border-radius: 1rem;
  overflow: hidden;
  transition: all 0.5s ease;
  box-shadow: 0 4px 20px rgba(114, 67, 39, 0.4);
  transform-style: preserve-3d;
}

.event-card::before {
  content: "";
  position: absolute;
  top: -50%;
  left: -50%;
  width: 200%;
  height: 200%;
  background: radial-gradient(
    circle at top left,
    rgba(255, 176, 87, 0.15),
    transparent 60%
  );
  transform: rotate(25deg);
  z-index: 0;
}

.event-card img {
  width: 100%;
  height: 15rem;
  object-fit: cover;
  border-radius: 0.75rem;
  transition: transform 0.6s ease, filter 0.4s ease;
}

.event-card:hover {
  transform: translateY(-8px) scale(1.04) rotateX(3deg);
  border-color: rgba(255, 176, 87, 0.7);
  box-shadow: 0 0 25px rgba(255, 176, 87, 0.7),
              0 15px 30px rgba(0, 0, 0, 0.3);
}

.event-card:hover img {
  transform: scale(1.08);
  filter: brightness(1.15);
}

.event-card h3 {
  position: relative;
  z-index: 2;
  font-size: 1.25rem;
  font-weight: 700;
  text-align: center;
  color: #fff;
  background: rgba(90, 44, 10, 0.6);
  backdrop-filter: blur(4px);
  border-top: 2px solid rgba(255, 176, 87, 0.3);
  padding: 0.75rem;
  border-radius: 0 0 1rem 1rem;
  letter-spacing: 0.5px;
  transition: color 0.4s ease, transform 0.3s ease;
}

.event-card:hover h3 {
  color: #ffb057;
  transform: translateY(-3px);
}

    .gallery-image-card {
  position: relative;
  overflow: hidden;
  border-radius: 1rem;
  background: rgba(255, 255, 255, 0.08);
  backdrop-filter: blur(10px);
  border: 2px solid rgba(255, 176, 87, 0.35);
  box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
  transition: all 0.6s ease;
  transform-style: preserve-3d;
}

.gallery-image-card::before {
  content: "";
  position: absolute;
  inset: 0;
  background: linear-gradient(
    135deg,
    rgba(255, 176, 87, 0.15),
    rgba(163, 28, 45, 0.1)
  );
  opacity: 0;
  transition: opacity 0.5s ease;
  z-index: 1;
}

.gallery-image-card:hover::before {
  opacity: 1;
}

.gallery-image-card img {
  width: 100%;
  height: 16rem;
  object-fit: cover;
  border-radius: 0.75rem;
  transition: transform 0.8s ease, filter 0.6s ease;
}

.gallery-image-card:hover img {
  transform: scale(1.1) rotate(-1deg);
  filter: brightness(1.2) saturate(1.15);
}

.gallery-image-card:hover {
  transform: translateY(-10px) scale(1.04) rotateX(3deg);
  border-color: rgba(255, 176, 87, 0.7);
  box-shadow: 0 0 20px rgba(255, 176, 87, 0.7),
              0 12px 35px rgba(0, 0, 0, 0.4);
}

/* ✨ Optional overlay title effect */
.gallery-image-card .overlay-title {
  position: absolute;
  bottom: 0;
  width: 100%;
  text-align: center;
  background: rgba(0, 0, 0, 0.5);
  color: #ffb057;
  font-weight: 600;
  font-size: 1.1rem;
  padding: 0.5rem 0;
  opacity: 0;
  transition: opacity 0.4s ease, transform 0.4s ease;
  z-index: 2;
}

.gallery-image-card:hover .overlay-title {
  opacity: 1;
  transform: translateY(-5px);
}

    header h1,
    header p {
      text-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
    }

    .udgam-accent-line {
      height: 2px;
      width: 80%;
      margin: 0 auto;
      background: linear-gradient(to right, #FFB057, #E58C4F);
      display: block;
    }
    #back-to-events {
      border: 2px solid transparent;
      transition: all 0.3s ease-out;
      transform: translateX(0);
    }

    #back-to-events:hover {
      border-color: #FFB057;
      transform: translateX(-5px);
      box-shadow: 0 0 10px rgba(255, 176, 87, 0.6);
    }
  </style>
</head>

<body>
  <?php include "{$path['pages_dir']}/header.php" ?>
  <?php include "{$path['pages_dir']}/doors.php" ?>

  <div class="main-content-wrapper" id="mainContent">
    <div class="content-wrapper max-w-7xl mx-auto">
      <header class="mb-10 text-center mt-20">
        <h1 class="text-6xl font-serif font-bold text-udgam-dark-text tracking-tight mb-2">
          Udgam Gallery
        </h1>
        <div class="udgam-accent-line w-40 mb-4"></div>
        <p class="mt-2 text-2xl text-udgam-dark-text">
          "A celebration of art, color, and creativity."
        </p>
      </header>

      <main id="gallery-content">
        <section id="event-cards-view" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
          <?php 
            $card_data = [
              ['id' => 'Flashmob', 'title' => 'Flashmob' ,'path'=>'./assets/images/flash7.jpg'],
              ['id' => 'dance', 'title' => 'Dance','path'=>'./assets/images/dance.png'],
              ['id' => 'music', 'title' => 'Music Performances','path'=>'./assets/images/music.png'],
              ['id' => 'art', 'title' => 'Art & Culture','path'=>'./assets/images/art.png'],
              // ['id' => 'ShowStopper', 'title' => 'ShowStopper','path'=>'./assets/images/flash7.jpg'],
              ['id' => 'GameVerse', 'title' => 'GameVerse','path'=>'./assets/images/Gameverse.png'],
              ['id' => 'Udgam Arena ', 'title' => 'Udgam Arena','path'=>'./assets/images/UdgamArena.png'],
              ['id' => 'food', 'title' => 'Food Stalls & Fair','path'=>'./assets/images/Foodstall.png'],
            ];
            foreach ($card_data as $data) { ?>
              <div 
                class="event-card group  p-3 shadow-md cursor-pointer transition-transform duration-300 custom-polaroid-frame"
                data-event-id="<?= $data['id'] ?>"
                data-event-title="<?= $data['title'] ?>">
                <div class="overflow-hidden mb-2">
                  <img 
                    src="<?= $data['path'] ?>"
                    alt="<?= $data['title'] ?> Thumbnail"
                    class="w-full h-60 object-cover group-hover:scale-105 transition-transform duration-500 rounded-sm"
                    loading="lazy" />
                </div>
                <h3 class="text-xl font-bold text-udgam-bg-light text-center mb-1 px-2">
                  <?= $data['title'] ?>
                </h3>
              </div>
          <?php } ?>
        </section>

        <section id="gallery-detail-view" class="hidden opacity-0 transition-opacity duration-500">
          <button id="back-to-events"
            class="text-lg text-udgam-dark-text bg-udgam-bg-light font-medium mb-8 flex items-center p-2 px-4 rounded-lg transition-colors shadow-md hover:shadow-xl">
            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20"
              xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                clip-rule="evenodd"></path>
            </svg>
            <span>Back to Events</span>
          </button>

          <h2 id="gallery-event-title" class="text-4xl text-udgam-dark-text font-serif font-bold mb-8"></h2>

          <div id="image-grid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8"></div>
        </section>
      </main>
    </div>
  </div>

  <!-- JavaScript Section -->
  <script>
    const IMAGE_PATH = './assets/images/gbg.png';
    const GALLERY_DATA = {

      'Flashmob': ['./assets/images/flash5.jpg','./assets/images/flash6.jpg','./assets/images/flash8.jpg','./assets/images/flash9.jpg','./assets/images/flash1.jpg','./assets/images/flash2.jpg','./assets/images/flash3.jpg','./assets/images/flash4.jpg','./assets/images/flash10.jpg','./assets/images/flash13.jpg','./assets/images/flash14.jpg','./assets/images/flash15.jpg'],
      'dance': [],
      'music': [],
      'art': [],
      'art': [],
      'food': [],
    };

    const eventCardsView = document.getElementById('event-cards-view');
    const galleryDetailView = document.getElementById('gallery-detail-view');
    const galleryEventTitle = document.getElementById('gallery-event-title');
    const imageGrid = document.getElementById('image-grid');

   function showGallery(eventId, title) {
  const currentGalleryImages = GALLERY_DATA[eventId] || [];
  eventCardsView.classList.add('opacity-0', 'pointer-events-none');
  
  setTimeout(() => {
    eventCardsView.classList.add('hidden');
    galleryDetailView.classList.remove('hidden');
    setTimeout(() => galleryDetailView.classList.remove('opacity-0'), 50);
    galleryEventTitle.textContent = title;
    imageGrid.innerHTML = '';

    if (currentGalleryImages.length === 0) {
      // Show "Coming Soon" message
      const comingSoonDiv = document.createElement('div');
      comingSoonDiv.className =
        'flex flex-col items-center justify-center col-span-full text-center text-udgam-dark-text';
      comingSoonDiv.innerHTML = `
        <p class="text-4xl font-serif font-bold">We are coming soon!</p>
        <p class="text-2xl mt-2 text-white">Stay tuned for updates.</p>
      `;
      imageGrid.appendChild(comingSoonDiv);
      return;
    }

    currentGalleryImages.forEach((src, index) => {
      const card = document.createElement('div');
      card.className =
        'gallery-image-card  p-3 shadow-md rounded-xl overflow-hidden';
      card.style.animationDelay = `${index * 0.15}s`;
     card.innerHTML = `
  <img src="${src}" alt="${title} Photo ${index + 1}"
       class="w-full h-64 object-cover rounded-sm" loading="lazy" />
  
`;

      imageGrid.appendChild(card);
    });
  }, 500);
}



    function backToEvents() {
      galleryDetailView.classList.add('opacity-0');
      setTimeout(() => {
        galleryDetailView.classList.add('hidden');
        eventCardsView.classList.remove('hidden');
        setTimeout(() => eventCardsView.classList.remove('opacity-0', 'pointer-events-none'), 50);
      }, 500);
    }

    document.addEventListener('DOMContentLoaded', () => {
      document.querySelectorAll('.event-card').forEach(card => {
        card.addEventListener('click', function () {
          const eventId = this.dataset.eventId;
          const eventTitle = this.dataset.eventTitle;
          showGallery(eventId, eventTitle);
        });
      });
      document.getElementById('back-to-events').addEventListener('click', backToEvents);
    });
  </script>
</body>
</html>

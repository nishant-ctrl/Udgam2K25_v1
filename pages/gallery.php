<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Udgam Gallery</title>
  <link rel="icon" type="image/x-icon" href="<?= $path['fav_dir']?>/udg2k25.png">
  <script src="<?= $path['js_dir']?>/tailwind.js"></script>
  <link rel="stylesheet" href="<?=$path['css_dir']?>/gallery.css" />
</head>

<body class="min-h-screen bg-cover bg-center flex items-center justify-center relative overflow-hidden"
  style="background-image: url('./assets/images/gbg.png');">

  <?php include "{$path['pages_dir']}/header.php" ?>
  <div class="absolute inset-0 bg-gradient-to-b from-transparent via-[#3b1d0a40] to-[#1a0b0490]"></div>

  <div class="gallery-box relative z-10 text-center rounded-2xl px-10 py-8 max-w-2xl">
    <h1 class="text-5xl font-bold gallery-title underline-art">
      Udgam Gallery
    </h1>
    <p class="mt-6 text-xl italic text-[#7b3f00] font-semibold">
      “A celebration of art, color, and creativity.”
    </p>
    <p class="mt-8 text-lg text-[#5c2e05]">
      We are curating something beautiful. Stay tuned for our grand opening!
    </p>
  </div>

</body>

</html>

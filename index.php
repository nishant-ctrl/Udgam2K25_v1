<?php
//var_dump($_SERVER['REQUEST_URI']);
$uri = trim($_SERVER['REQUEST_URI'], '/');
$path = include './root.php';
// 2. Explode the URI, then filter out any empty values (which prevents issues 
//    if there are double slashes // somewhere).
$x = array_filter(explode('/', $uri));
// 3. Get the last segment, which is the page slug (e.g., 'home', 'aboutus').
//    If the array is empty (i.e., it's the root URL), $page_slug will be null/false.
$page_slug = end($x);

// 4. Handle the root URL case (when $page_slug is false or empty)
if (!$page_slug) {
    $page_slug = ''; // Treat the root as an empty string for the switch case
}
switch ($page_slug) {
    case '':
        include "{$path['pages_dir']}/home.php";
        break;
    case 'home':
        include "{$path['pages_dir']}/home.php";
        break;
    case 'aboutus':
        include "{$path['pages_dir']}/aboutus.php";
        break;
    case 'events':
        include "{$path['pages_dir']}/events.php";
        break;
    case 'teams':
        include "{$path['pages_dir']}/teams.php";
        break;
    case 'sponsors':
        include "{$path['pages_dir']}/sponsors.php";
        break;
    case 'gallery':
        include "{$path['pages_dir']}/gallery.php";
        break;
    default:
        // echo $page_slug;
        echo "404 Not Found";
        break;
}
?>
<script>
    addEventListener('DOMContentLoaded', () => {
        // Scroll animations
        const leftHalf = document.getElementById('leftHalf');
        const rightHalf = document.getElementById('rightHalf');
        const mainContent = document.getElementById('mainContent');

        function showNextText() {
            setTimeout(() => {
                loadingText.style.opacity = '0';

                setTimeout(() => {
                    leftHalf.classList.add('open');
                    rightHalf.classList.add('open');
                    mainContent.classList.add('visible');


                }, 500);
            }, 500);
        }

        showNextText();
      
    })
</script>
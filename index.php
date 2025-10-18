<?php
//var_dump($_SERVER['REQUEST_URI']);
$x = explode('/', $_SERVER['REQUEST_URI']);
switch ($x[2]) {
    case '':
        include 'src/pages/home.php';
        break;
    case 'aboutus':
        include 'src/pages/aboutus.php';
        break;
    case 'events':
        include 'src/pages/events.php';
        break;
    case 'teams':
        include 'src/pages/teams.php';
        break;
    case 'sponsors':
        include 'src/pages/sponsers.php';
        break;
    case 'gallery':
        include 'src/pages/gallery.php';
        break;
    default:
        http_response_code(404);
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
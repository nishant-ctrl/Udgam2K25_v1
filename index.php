<?php
//var_dump($_SERVER['REQUEST_URI']);
$x = explode('/', $_SERVER['REQUEST_URI']);
switch ($x[2]) {
    case '':
        include 'pages/home.php';
        break;
    case 'home':
        include 'pages/home.php';
        break;
    case 'aboutus':
        include 'pages/aboutus.php';
        break;
    case 'events':
        include 'pages/events.php';
        break;
    case 'teams':
        include 'pages/teams.php';
        break;
    case 'sponsors':
        include 'pages/sponsers.php';
        break;
    case 'gallery':
        include 'pages/gallery.php';
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
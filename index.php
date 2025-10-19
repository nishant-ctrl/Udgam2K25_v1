<?php
// Get and clean the URI (remove query strings)
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Automatically detect and remove base directory
$scriptName = dirname($_SERVER['SCRIPT_NAME']);
if ($scriptName !== '/' && strpos($uri, $scriptName) === 0) {
    $uri = substr($uri, strlen($scriptName));
}

$uri = trim($uri, '/');
$path = include './root.php';

// Extract the last segment efficiently
if ($uri === '') {
    $page_slug = '';
} else {
    $lastSlash = strrpos($uri, '/');
    $page_slug = $lastSlash !== false ? substr($uri, $lastSlash + 1) : $uri;
}

switch ($page_slug) {
    case '':
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
        http_response_code(404);
        echo "<h1>404 - Page Not Found</h1>";
        echo "<p>The page you are looking for does not exist.</p>";
        break;
}
?>
<script>
    addEventListener('DOMContentLoaded', () => {
        const leftHalf = document.getElementById('leftHalf');
        const rightHalf = document.getElementById('rightHalf');
        const mainContent = document.getElementById('mainContent');
        const loadingText = document.getElementById('loadingText');

        function showNextText() {
            setTimeout(() => {
                if (loadingText) loadingText.style.opacity = '0';

                setTimeout(() => {
                    if (leftHalf) leftHalf.classList.add('open');
                    if (rightHalf) rightHalf.classList.add('open');
                    if (mainContent) mainContent.classList.add('visible');
                }, 500);
            }, 500);
        }

        showNextText();
    });
</script>
<?php
session_start();
include_once 'helpers/routes.php';
include_once 'helpers/functions.php';
include_once 'helpers/flasher.php';
include_once 'helpers/config.php';
$routes = Routes::getRoutes();

if (strpos($_SERVER['REQUEST_URI'], '/api') !== false) {
    run($_SERVER['REQUEST_URI'], $routes);
    return; // Stop further execution to prevent HTML rendering for API requests
}
?>

<!DOCTYPE html>
<html class="scroll-smooth" lang="en" data-bs-theme="auto">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Selamat Datang di laman ecommerce kami">
    <meta name="author" content="Ridho Akbar">
    <meta name="generator" content="Ridho Akbar">
    <meta name="theme-color" content="#712cf9">
    <title>e-Commerce</title>

    <link rel="stylesheet" href="http://localhost:8000/assets/css/output.css" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;400;700;800&display=swap"
        rel="stylesheet" />

    <!-- Your Meta Tags, Title, Stylesheets, and Other Head Content -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <style>
        .work-sans {
            font-family: 'Work Sans', sans-serif;
        }

        #menu-toggle:checked+#menu {
            display: block;
        }

        .hover\:grow {
            transition: all 0.3s;
            transform: scale(1);
        }

        .hover\:grow:hover {
            transform: scale(1.02);
        }

        .carousel-open:checked+.carousel-item {
            position: static;
            opacity: 100;
        }

        .carousel-item {
            -webkit-transition: opacity 0.6s ease-out;
            transition: opacity 0.6s ease-out;
        }

        #carousel-1:checked~.control-1,
        #carousel-2:checked~.control-2,
        #carousel-3:checked~.control-3 {
            display: block;
        }

        .carousel-indicators {
            list-style: none;
            margin: 0;
            padding: 0;
            position: absolute;
            bottom: 2%;
            left: 0;
            right: 0;
            text-align: center;
            z-index: 10;
        }

        #carousel-1:checked~.control-1~.carousel-indicators li:nth-child(1) .carousel-bullet,
        #carousel-2:checked~.control-2~.carousel-indicators li:nth-child(2) .carousel-bullet,
        #carousel-3:checked~.control-3~.carousel-indicators li:nth-child(3) .carousel-bullet {
            color: #000;
            /*Set to match the Tailwind colour you want the active one to be */
        }
    </style>
</head>

<body
    class="bg-gradient-to-r from-purple-300 to-pink-300 text-gray-600 work-sans leading-normal text-base tracking-normal">

    <?php if (isset($_SESSION['flash_message'])) {
        $flashMessage = $_SESSION['flash_message'];
        unset($_SESSION['flash_message']);
        echo '<script>
        Swal.fire({
            title: "' . $flashMessage['pesan'] . '",
            icon: "' . $flashMessage['tipe'] . '",
          });
        </script>';
        // <div id="toast-undo" class="animate-timer fixed flex items-center w-full max-w-xs p-10 space-x-4 text-gray-500 bg-white divide-x rtl:divide-x-reverse divide-gray-200 rounded-lg shadow top-5 left-5 dark:text-gray-400 dark:divide-gray-700 space-x dark:bg-gray-800" role="alert">
        //     <div class="text-sm font-normal">' . $flashMessage['pesan'] . '</div>
        // </div>
    }
    ?>

    <?php
    run($_SERVER['REQUEST_URI'], $routes);
    ?>
    <!-- ini bagian tema gelap, terang dan auto -->
    <!-- ini bagian javascript -->

    <?php
    if (isset($_SESSION['role_user']) && $_SESSION['role_user'] === 1) {
        echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>';
    } else {
        echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>';

    }
    ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>

</html>
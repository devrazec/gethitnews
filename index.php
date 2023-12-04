<?php

$pageTitle = 'Home - Get Hit News';

// Google
$googleTitle = '';
$googleDescription = '';
$googleCopyright = '';
$googleCreator = '';
$googleAuthor = '';

// Facebook
$faceTitle = '';
$faceDescription = '';
$faceCopyright = '';
$faceCreator = '';
$faceAuthor = '';

// Twitter
$twitterTitle = '';
$twitterDescription = '';
$twitterCopyright = '';
$twitterCreator = '';
$twitterAuthor = '';

include_once 'head.php';

?>

<body class="bg-gray-50 dark:bg-gray-800">

    <?php
    include_once 'header.html';
    include_once 'home.php';
    include_once 'footer.html';
    include_once 'cookie.html';
    ?>

    <!-- SCRIPTS -->

    <script src="assets/js/flowbite181.js"></script>
    <script src="assets/js/cookie.js"></script>
    <script src="assets/js/dark-mode.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/newscalendar.js"></script>

    <?php
    // include_once 'googleanalitics.html';       
    ?>

</body>

</html>
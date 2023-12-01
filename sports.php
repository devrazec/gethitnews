<?php

$pageTitle = 'Sports - Get Hit News';

// Google
$googleTitle = '';
$googleDescription = '';
$googleKeywords = '';
$googleCopyright = '';
$googleCreator = '';
$googleAuthor = '';

// Facebook
$faceTitle = '';
$faceDescription = '';
$faceKeywords = '';
$faceCopyright = '';
$faceCreator = '';
$faceAuthor = '';

// Twitter
$twitterTitle = '';
$twitterDescription = '';
$twitterKeywords = '';
$twitterCopyright = '';
$twitterCreator = '';
$twitterAuthor = '';

include_once 'head.php';

?>

<body>

    <?php
    include_once 'header.html';
    ?>

    <main class="pb-8 lg:pb-12 bg-white dark:bg-gray-900">

        <div class="flex relative z-20 justify-center px-4 mx-auto max-w-screen-xl bg-white dark:bg-gray-900 rounded">
            <div class="xl:w-[828px] mx-auto max-w-none dark:format-invert">

                <rssapp-wall id="t2j80JKMY0FKgVE8"></rssapp-wall>
                <script src="https://widget.rss.app/v1/wall.js" type="text/javascript" async></script>

            </div>
            <aside class="hidden xl:block" aria-labelledby="sidebar-label">
                <div class="xl:w-[336px] sticky pt-5 top-2">
                    <?php
                    include_once 'rightsidetodaynews.php';
                    include_once 'newsletterbox.php';
                    ?>
                </div>
            </aside>
        </div>
    </main>

    <?php
    include_once 'footer.html';
    ?>

    <!-- SCRIPTS -->

    <script src="assets/js/flowbite181.js"></script>
    <script src="assets/js/dark-mode.js"></script>

</body>

</html>
<?php

include_once 'assets/setup.php';

$file_date = date("Y-m-d");

// Json file name
$sports_json = $_SERVER['DOCUMENT_ROOT'] . '/assets/json/' . $file_date . '/sports.json';

$news_date = date('M d' . ', ' . 'Y');
$news_category = 'sports';
$news_item = '';

// Check the file
if (file_exists($sports_json)) {

    if (is_file($sports_json) && is_readable($sports_json)) {

        $data_json = json_decode(file_get_contents($sports_json), JSON_PRETTY_PRINT);
        $news_item = $data_json['items'];

        //var_dump($data_item);
        //die();

    } else {
        header("Content-type: application/json");
        echo json_encode("Error in sports.json file_get_contents()");
    }
} else {
    header("Content-type: application/json");
    echo json_encode("Error in sports.json file_exists()");
    createNews(date("Y-m-d"));
}

$pageTitle = 'Sports - Get Hit News';

$headLineTitle  = 'Lifestyle - Get Hit News';
$headLineImage1 = 'https://gethitnews.com/assets/images/lifstyleimage1.jpg';
$headLineImage2 = 'https://gethitnews.com/assets/images/lifstyleimage2.jpg';
$headLineImage3 = 'https://gethitnews.com/assets/images/lifstyleimage3.jpg';
$headLineDate   = date("Y-m-d");

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

                <section class="py-0">
                    <div class="container pt-5">
                        <div class="flex flex-wrap -m-3 mb-16">
                            
                            <?php

                                if(count($news_item) > 0) {

                                    foreach ($news_item as $key => $item) { 
                                        
                                        echo '<div class="flex items-stretch w-full md:w-1/2 lg:w-1/3 p-3">';
                                        echo '<div class="p-6 rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">';
                                        echo '<div class="relative h-52 mb-6">';
                                        echo '<span class="absolute top-0 right-0 mt-4 mr-4 text-xs text-white px-2 py-1 font-semibold bg-gray-600 bg-opacity-50 rounded-md uppercase">' . $news_category . '</span>';
                                        
                                        if (array_key_exists('image', $item)) {
                                            echo '<img class="w-full h-full object-cover rounded-lg" src="' . $item['image'] . '" alt="'. $news_category . '_image_' . $key . '">';
                                        } else {
                                            echo '<img class="w-full h-full object-cover rounded-lg" src="assets/logos/logo-180x180.png" alt="'. $news_category . '_image_' . $key . '">';
                                        }
                                       
                                        echo '</div>';
                                        echo '<span class="inline-block mb-2 text-xs text-gray-500 dark:text-gray-400">' . $news_date . '</span>';
                                        echo '<h5 class="mb-2 font-semibold leading-tight text-gray-900 dark:text-white">'. $item['title'] . '</h5>';
                                        echo '<p class="mb-2 font-light text-gray-500 dark:text-gray-400">'. $item['content_text'] . '</p>';
                                        echo '<a rel="nofollow" href="'. $item['url'] . '" class="inline-flex items-center font-medium text-primary-600 hover:underline dark:text-primary-500" target="_blank">';
                                        echo 'Read more';
                                        echo '<svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                             </svg>';
                                        echo '</a>';
                                        echo '</div>';
                                        echo '</div>';
                                    }
                                }
                            ?>
                        </div>
                    </div>
                </section>

            </div>
            <aside class="hidden xl:block" aria-labelledby="sidebar-label">
                <div class="xl:w-[336px] sticky pt-5 top-2">
                    <?php
                    include_once 'newscalendar.php';
                    //include_once 'rightsidetodaynews.php';
                    //include_once 'newsletterbox.php';
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
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/newscalendar.js"></script>

</body>
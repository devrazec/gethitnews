<?php

include_once 'assets/setup.php';

$file_date = date("Y-m-d");

// Json file name
$lifestyle_json = $_SERVER['DOCUMENT_ROOT'] . '/assets/json/' . $file_date . '/lifestyle.json';

$news_date = date('M d' . ', ' . 'Y');
$news_category = 'Lifestyle';
$news_item = '';

function unique_multidim_array($array, $key) {

    $temp_array = array();
    $i = 0;
    $key_array = array();

    foreach($array as $val) {
        if (!in_array($val[$key], $key_array)) {
            $key_array[$i] = $val[$key];
            $temp_array[$i] = $val;
        }
        $i++;
    }
    return $temp_array;
}

// Check the file
if (file_exists($lifestyle_json)) {

    if (is_file($lifestyle_json) && is_readable($lifestyle_json)) {

        $data_json = json_decode(file_get_contents($lifestyle_json), JSON_PRETTY_PRINT);
        $news_item = $data_json['items'];
        $news_item = unique_multidim_array($news_item, 'title');
        
        //$news_item_array [] = $news_item;

        //$news_item = array_unique($news_item_array);
        //print_r($news_item_array);

        //var_dump($multi_array);
        //die();

    } else {
        header("Content-type: application/json");
        echo json_encode("Error in lifestyle.json file_get_contents()");
    }
} else {
    header("Content-type: application/json");
    echo json_encode("Error in lifestyle.json file_exists()");
    createNews(date("Y-m-d"));
}

$pageTitle = 'Lifestyle - Get Hit News';

$headLineTitle  = 'Lifestyle - Get Hit News';
$headLineImage1 = 'https://gethitnews.com/images/images/lifstyleimage1.jpg';
$headLineImage2 = 'https://gethitnews.com/assets/images/lifstyleimage2.jpg';
$headLineImage3 = 'https://gethitnews.com/assets/images/lifstyleimage3.jpg';
$headLineDate   = date("Y-m-d");

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

function get_response_code($url) {

    //var_dump($url);
    //die();
    // error 451
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_exec($ch);
    $status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    //return $status;

    //file_put_contents($sports_path, file_get_contents('https://rss.app/feeds/v1.1/t2j80JKMY0FKgVE8.json'));

    //file_get_contents($url);
    //list($version, $status, $text) = explode(' ', $http_response_header[0], 3);

    //var_dump($status);
    //die();
    return $status;
}

//var_dump(get_response_code('http://badurl.com'));

?>

<body>

    <?php
    include_once 'header.html';
    ?>

    <main class="pb-8 lg:pb-12 bg-white dark:bg-gray-900">

        <div class="flex relative z-20 justify-center px-4 mx-auto max-w-screen-xl bg-white dark:bg-gray-900 rounded">
            <div class="xl:w-[828px] mx-auto max-w-none dark:format-invert">

                <!-- <rssapp-wall id="tP8kWRI6p7bKNb5M"></rssapp-wall>
                <script src="https://widget.rss.app/v1/wall.js" type="text/javascript" async></script> -->

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
                                            $status = get_response_code($item['url']);

                                            var_dump($status);
                                            //die();
                                            //if (get_response_code($item['image']) == '403') {

                                            //}

                                            echo '<img class="w-full h-full object-cover rounded-lg" src="' . $item['image'] . '" alt="'. $news_category . '_image_' . $key . '">';
                                        } else {
                                            echo '<img class="w-full h-full object-cover rounded-lg" src="assets/images/category/home-get-hit-news.jpg" alt="'. $news_category . '_image_' . $key . '">';
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

                            <!-- <div class="w-full md:w-1/2 lg:w-1/3 p-3">
                                <div class="p-6 rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                                    <div class="relative h-52 mb-6">
                                        <span class="absolute top-0 right-0 mt-4 mr-4 text-xs text-white px-2 py-1 font-semibold bg-gray-600 bg-opacity-50 rounded-md uppercase"><?php echo $news_category; ?></span>
                                        <img class="w-full h-full object-cover rounded-lg" src="<?php echo $news_item[0]['image']; ?>" alt="">
                                    </div>
                                    <span class="inline-block mb-2 text-xs text-gray-500 dark:text-gray-400"><?php echo $news_date; ?></span>
                                    <h5 class="mb-2 font-semibold leading-tight text-gray-900 dark:text-white"><?php echo $news_item[0]['title']; ?></h5>
                                    <p class="mb-2 font-light text-gray-500 dark:text-gray-400"><?php echo $news_item[0]['content_text']; ?></p>
                                    <a href="<?php echo $news_item[0]['url']; ?>" class="inline-flex items-center font-medium text-primary-600 hover:underline dark:text-primary-500" target="_blank">
                                        Read more
                                        <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div> -->

                        </div>
                        <!-- <div class="text-center">
                            <button type="submit" class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800 text-center">View More News</button>
                        </div> -->
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
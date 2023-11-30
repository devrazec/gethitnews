<?php

$pageTitle = 'Page - Get Hit News';

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

// News
$newsMainTitle = 'Prototyping from A to Z: best practices for successful prototypes from A to Z: best practices for successful prototypes';
$newsAutor = 'Jese Leos';
$newsAutorUrl = 'https://devrazec.com';
$newsStringDate = 'Feb. 08, 2023';
$newsDatetime = '2023-02-08';
$newsExternalUrl = '';
$newsInternallUrl = '';
$newsFileName = '';
$newsUrlCategory = 'https://devrazec.com';
$newsCategoryName = 'Travel';

// newsText1
$newsTitle1 = '';
$newsUrlImage1 = '';
$newsAltImage1 = '';
$newsLegendImage1 = '';
$newsText1 = '';

// newsText2
$newsTitle2 = '';
$newsUrlImage2 = '';
$newsAltImage2 = '';
$newsLegendImage2 = '';
$newsText2 = '';

// newsText3
$newsTitle3 = 'Suella Braverman has said the pressure on public services from migration is "unsustainable", after figures estimated record levels last year.';
$newsUrlImage3 = 'https://ichef.bbci.co.uk/news/976/cpsprodpb/D25A/production/_131805835_gettyimages-1258838283.jpg.webp';
$newsAltImage3 = '';
$newsLegendImage3 = 'Suella Braverman';
$newsText3 = 'Other Tory MPs, including former cabinet ministers Sir Jacob Rees-Mogg and Sir Simon Clarke, have also called for more action to bring down migration.

    The New Conservatives group, which is on the right of the party, described the issue as "do or die" for the party.
    
    Each of us made a promise to the electorate. We dont believe that such promises can be ignored, the group, led by Miriam Cates, Danny Kruger and Sir John Hayes, said in a statement.
    
    Back in 2010, Lord David Cameron, the former Tory PM who was appointed foreign secretary in last weeks reshuffle, pledged to get net migration below 100,000 - but the commitment has never been met.';
?>

<body>

    <?php
    include_once 'header.html';
    ?>

    <main class="pb-8 lg:pb-12 bg-white dark:bg-gray-900">
        <header class="py-8">
            <div class="px-4 mx-auto w-full max-w-screen-xl text-center">
                <h1 class="text-2xl font-extrabold leading-tight text-gray-900 lg:text-4xl dark:text-white">
                    <?php echo $newsMainTitle; ?>
                </h1>
            </div>
        </header>
        <div class="flex relative z-20 justify-center px-4 mx-auto max-w-screen-xl bg-white dark:bg-gray-900 rounded">
            <article class="xl:w-[828px] mx-auto w-full max-w-none format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">

                <div class="flex flex-col lg:flex-row justify-between lg:items-center pb-6 dark:border-gray-700">
                    <span class="text-base mb-4 lg:mb-0 font-normal text-gray-500 dark:text-gray-400">
                        By
                        <a href="<?php echo ($newsAutorUrl != '') ? $newsAutorUrl : '#'; ?>" rel="author" class="font-bold text-gray-900 dark:text-white no-underline hover:underline">
                            <?php echo $newsAutor; ?>
                        </a>
                        on
                        <time pubdate datetime="<?php echo $newsDatetime; ?>" title="<?php echo $newsStringDate; ?>"><?php echo $newsStringDate; ?>
                        </time>
                    </span>
                    <a href="<?php echo ($newsUrlCategory != '') ? $newsUrlCategory : '#'; ?>" class="font-bold text-primary-600 dark:text-primary-500 no-underline hover:underline">
                        <?php echo $newsCategoryName; ?>
                    </a>
                </div>

                <?php

                // newsText1
                if (strlen($newsTitle1) > 0) {
                    echo '<h3>' . $newsTitle1 . '</h3>';
                }
                if (strlen($newsUrlImage1) > 0) {
                    echo '<figure>';
                    echo '<img src="' . $newsUrlImage1 . '" alt="' . $newsAltImage1 . '" class="mx-auto">';
                    echo '<figcaption>' . $newsLegendImage1 . '</figcaption>';
                    echo '</figure>';
                }
                if (strlen($newsText1) > 0) {
                    echo '<p>' . $newsText1 . '</p>';
                }

                // newsText2
                if (strlen($newsTitle2) > 0) {
                    echo '<h3>' . $newsTitle2 . '</h3>';
                }
                if (strlen($newsUrlImage2) > 0) {
                    echo '<figure>';
                    echo '<img src="' . $newsUrlImage2 . '" alt="' . $newsAltImage2 . '" class="mx-auto">';
                    echo '<figcaption>' . $newsLegendImage2 . '</figcaption>';
                    echo '</figure>';
                }
                if (strlen($newsText2) > 0) {
                    echo '<p>' . $newsText2 . '</p>';
                }

                // newsText3
                if (strlen($newsTitle3) > 0) {
                    echo '<h3>' . $newsTitle3 . '</h3>';
                }
                if (strlen($newsUrlImage3) > 0) {
                    echo '<figure>';
                    echo '<img src="' . $newsUrlImage3 . '" alt="' . $newsAltImage3 . '" class="mx-auto">';
                    echo '<figcaption>' . $newsLegendImage3 . '</figcaption>';
                    echo '</figure>';
                }
                if (strlen($newsText3) > 0) {
                    echo '<p>' . $newsText3 . '</p>';
                }
                ?>

            </article>

            <aside class="hidden xl:block" aria-labelledby="sidebar-label">
                <div class="xl:w-[336px] sticky top-6">
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
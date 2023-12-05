<!DOCTYPE html>
<html lang="en" class="dark">

<head>

    <!-- Mobile Specific Metas -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Basic Page Needs -->

    <title><?php echo $pageTitle; ?></title>
    <meta name="robots" content="index, follow">
    <meta name="GOOGLEBOT" content="INDEX, FOLLOW">
    <!-- <meta name="google-site-verification" content="+nxGUDJ4QpAZ5l9Bsjdi102tLVC21AIh5d1Nl23908vVuFHs34="> -->
    <meta name="classification" content="News">

    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <meta name="url" content="https://gethitnews.com">
    <meta name="title" content="<?php echo $googleTitle; ?>">
    <meta name="description" content="<?php echo $googleDescription; ?>">
    <meta name="type" content="website">
    <meta name="image" content="https://gethitnews.com/images/logo/180x180.png">
    <meta name="site_name" content="Get Hit News">
    <meta name="copyright" content="<?php echo $googleCopyright; ?>">
    <meta name="creator" content="<?php echo $googleCreator; ?>">
    <meta name="author" content="<?php echo $googleAuthor; ?>">

    <!-- Facebook -->

    <meta property="og:url" content="https://gethitnews.com">
    <meta property="og:title" content="<?php echo $faceTitle; ?>">
    <meta property="og:description" content="<?php echo $faceDescription; ?>">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://gethitnews.com/images/logo/180x180.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:site_name" content="Get Hit News">
    <meta property="og:copyright" content="<?php echo $faceCopyright; ?>">
    <meta property="og:creator" content="<?php echo $faceCreator; ?>">
    <meta property="og:author" content="<?php echo $faceAuthor; ?>">

    <!-- Twitter -->

    <meta name="twitter:url" content="https://gethitnews.com">
    <meta name="twitter:title" content="<?php echo $twitterTitle; ?>">
    <meta name="twitter:description" content="<?php echo $twitterDescription; ?>">
    <meta name="twitter:type" content="website">
    <meta name="twitter:image" content="https://gethitnews.com/images/logo/180x180.png">
    <meta name="twitter:site" content="@gethitnews">
    <meta name="twitter:copyright" content="<?php echo $twitterCopyright; ?>">
    <meta name="twitter:creator" content="<?php echo $twitterCreator; ?>">
    <meta name="twitter:author" content="<?php echo $twitterAuthor; ?>">
    <meta name="twitter:card" content="summary_large_image">

    <!-- Favicons -->

    <link rel="shortcut icon" type="image/x-icon" href="images/logo/favicon.ico">
    <link rel="apple-touch-icon" type="image/png" sizes="180x180" href="images/logo/180x180.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/logo/16x16.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/logo/32x32.png">
    <link rel="icon" type="image/png" sizes="180x180" href="images/logo/180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="images/logo/192x192.png">
    <link rel="icon" type="image/png" sizes="512x512" href="images/logo/512x512.png">

    <link rel="canonical" href="https://gethitnews.com">

    <!-- SCRIPTS -->

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "NewsArticle",
      "headline": "<?php echo $headLineTitle; ?>",
      "image": [
        "<?php echo $headLineImage1; ?>",
        "<?php echo $headLineImage2; ?>",
        "<?php echo $headLineImage3; ?>"
        ],
      "datePublished": "<?php echo $headLineDate; ?>",
      "dateModified": "<?php echo $headLineDate; ?>",
      "author": [{
          "@type": "Organization",
          "name": "Get Hit News",
          "url": "https://gethitnews.com"
        }]
    }
    </script>
    
    <script>
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>

    <!-- FONTS -->

    <link rel="stylesheet" href="assets/css/typography.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap">

    <!-- CSS -->

    <link rel="stylesheet" href="assets/css/flowbite181.min.css">
    <link rel="stylesheet" href="assets/css/tailwind.css">

</head>
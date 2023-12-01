<?php

$news_date = date("Y-m-d");

?>

<div class="p-4 mb-6 rounded-lg border border-gray-200 dark:border-gray-700">
    <h4 class="mb-2 text-sm font-bold text-gray-900 dark:text-white uppercase">News Calendar</h4>
    <p class="mb-4 text-sm text-gray-500 dark:text-gray-400">Choose a date and search the News.</p>
    <form action="#">
        <div class="relative mb-4">
            <div inline-datepicker datepicker-format="yyyy/mm/dd" data-date="<?php echo $news_date; ?>"></div>
        </div>
        <button type="submit" class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800 text-center w-full">Search</button>
    </form>
</div>
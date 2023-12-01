<?php
$news_date = date("Y-m-d");
?>

<div class="p-4 mb-6 rounded-lg border border-gray-200 dark:border-gray-700">
    <h4 class="mb-2 text-sm font-bold text-gray-900 dark:text-white uppercase">News Calendar</h4>
    <p class="mb-4 text-sm text-gray-500 dark:text-gray-400">Choose a date to see the News.</p>
    <form action="#">
        <div class="relative mb-4">
            <div id="datepickerId" inline-datepicker datepicker-format="yyyy/mm/dd" data-date="<?php echo $news_date; ?>"></div>
        </div>
    </form>
</div>

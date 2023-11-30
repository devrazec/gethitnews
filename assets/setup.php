<?php

    function createNews($date) 
    {
        $today_folder = $_SERVER['DOCUMENT_ROOT'] . '/assets/json/' . $date;
        
        if (!file_exists($today_folder)) {

            $oldumask = umask(0);
            mkdir($_SERVER['DOCUMENT_ROOT'] . '/assets/json/' . $date, 0777, true);
            umask($oldumask);
        }

        $sports_path = $today_folder . '/sports.json';
        $lifestyle_path = $today_folder . '/lifestyle.json';
        $technology_path = $today_folder . '/technology.json';
        $science_path = $today_folder . '/science.json';
        $travel_path = $today_folder . '/travel.json';

        if (!file_exists($sports_path)) {
            file_put_contents($sports_path, file_get_contents('https://rss.app/feeds/v1.1/t2j80JKMY0FKgVE8.json'));
        }

        if (!file_exists($lifestyle_path)) {
            file_put_contents($lifestyle_path, file_get_contents('https://rss.app/feeds/v1.1/tP8kWRI6p7bKNb5M.json'));
        }

        if (!file_exists($technology_path)) {
            file_put_contents($technology_path, file_get_contents('https://rss.app/feeds/v1.1/ty5OznrTPisNeRAu.json'));
        }

        if (!file_exists($science_path)) {
            file_put_contents($science_path, file_get_contents('https://rss.app/feeds/v1.1/trz8SbQ6vmUNr0l8.json'));
        }

        if (!file_exists($travel_path)) {
            file_put_contents($travel_path, file_get_contents('https://rss.app/feeds/v1.1/tz25LoaL6ee1cEPc.json'));
        }
    }
?>
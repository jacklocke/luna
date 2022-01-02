<?php

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    if (isset($_POST['data'])) {

        $file = "../../config.json";
        $fileBackup = "../../config.backup.json";

        // temporary backup
        file_put_contents($fileBackup, file_get_contents($file));

        // effective config file
        file_put_contents($file, $_POST['data']);

        echo "SAVED!"; //$_POST['data'];

    } else {
        echo "No data received...";
    }

?>
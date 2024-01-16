<?php 
    $disksList = file_get_contents("./json/disks.json");
    header("Content-Type: application/json");
    echo $disksList;
?>
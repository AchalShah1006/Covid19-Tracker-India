<?php
    $jsonData = file_get_contents("https://api.covid19india.org/data.json");
    $data = json_decode($jsonData ,true);
    $statewise = $data["statewise"];
?>
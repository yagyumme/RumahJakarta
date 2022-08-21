<?php

    $data = file_get_contents(__DIR__ . '/../views/home.json');
    $data = json_decode($data);

    echo $data

?>
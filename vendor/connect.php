<?php

    $connect = mysqli_connect('localhost', 'root', '', 'examDb');

    if (!$connect) {
        die('Error connect to DataBase');
    }
<?php

function age($date) {

    $age = date('Y') - date("Y", $date);
    if (date('md') < date('md', strtotime($date))) {
        return $age - 1;
    }
    return $age;
}
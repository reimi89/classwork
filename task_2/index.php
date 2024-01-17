<?php

$college = array(
    "Студенты" => array("Никита", "Гена", "Стас", "Турбо"),
    "Преподаватели" => array("Скуф", "Крип мечник", "2к помойка")
);

foreach ($college as $people => $items) {
    echo "<h1> $people </h1>";
    echo "<ul>";
    foreach ($items as $item => $value) {
        echo "<li> $value </li>";
    }
    echo "<ul>";
}
<?php

$meny = [
    'index.php' => 'Домой',
    'about.php' => 'О нас',
    'contact.php' => 'Контакты',
    'table.php' => 'Таблица умножения',
    'calc.php' => 'Калькулятор',
];

foreach ($meny as $link => $name){
    echo '<a class="blog-nav-item active" href="index.php">Домой</a>';
}




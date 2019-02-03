<?php
$meny = [
    'index.php' => 'Главная',
    'about.php' => 'О нас',
    'contact.php' => 'Контакты',
    'table.php' => 'Таблица умножения',
    'calc.php' => 'Калькулятор',
];

function getMeny($meny)
{
    foreach ($meny as $link => $name) {
            echo '<a class="blog-nav-item active" href="' . $link . '">' . $name . '</a><br/>';
        }
}

getMeny($meny);
<?php

function getMeny($meny)
{
    echo '<a class="blog-nav-item active" href="index.php">Домой</a><br/>';
    echo '<a class="blog-nav-item active" href="about.php">О нас</a><br/>';
    echo '<a class="blog-nav-item active" href="contact.php">Контакты</a><br/>';
    echo '<a class="blog-nav-item active" href="table.php">Таблица умножения</a><br/>';
    echo '<a class="blog-nav-item active" href="calc.php">Калькулятор</a><br/>';
}

getMeny($meny);
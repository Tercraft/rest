
<?php

$menu = [
    'news.php' => 'Главная',
    '#' => 'О нас',
    '#' => 'Курсы',
    'news.php' => 'Новости',
    'snippets.php' => 'Сниппеты',
    'contact.php' => 'Контакты',
];

//function getMenu(array $menu, $vertical = false)
//{
//    echo '<nav class="grid">';
//    
//    foreach ($menu as $key => $value) {
//        echo '<a href="'. $key .'"><div class="nav__item grid">' . $value . '</div></a>';
//    }
//    
//    echo '</nav>';
//}

getMenu($menu);
//
function getMenu(array $menu, $vertical = false)
{
     if ($vertical){
         
         echo '<div class = "right__article__container">';
     }
     
     else
         echo '<nav class="grid">';
    
     foreach ($menu as $key => $value) {
        echo '<a href = ' . $key . ' class = item>' . $value  . '</a>';
    }
    echo '</nav>';
}
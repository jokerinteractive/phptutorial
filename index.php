<?php

  $main_menu = [
    '/' => 'Главная',
    '/about' => 'О нас',
    '/news' => 'Новости',
    '/catalog' => 'Каталог товаров',
    '/contacts' => 'Контакты',
    '/submenu' => [
      '/sub1' => 'Подменю1',
      '/sub2' => 'Подменю2',
      '/sub3' => 'Подменю3',
    ]
  ];

  $news = [
    [
      'date' => '',
      'title' => '',
      'picture' => '/img/news1.jpg',
    ],
    []
  ];

  include_once('tpl/header.php');

  if ($_SERVER['REQUEST_URI'] == '/') {
    include_once('content/index.php');
  } elseif (file_exists('content' . $_SERVER['REQUEST_URI'] . '.php')) {
    include_once('content' . $_SERVER['REQUEST_URI'] . '.php');
  } else {
    include_once('content/404.php');
  }

  require_once('tpl/footer.php');
?>

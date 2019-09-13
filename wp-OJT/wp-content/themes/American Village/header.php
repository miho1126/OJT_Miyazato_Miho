<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
  <?php wp_head();?>
</head>
<body>
 <header>
     <div class="header">
      <div class="header__logo"><img src="<?php echo get_template_directory_uri(); ?>../img/logo.png" alt="アメリカンビレッジ文字のロゴ"></div>
      <div class="header__hum">
        <span></span>
        <span></span>
        <span></span>
      </div>

      <!-- テンプレートファイルのメニューを表示したい場所に記述 -->
      <?php
       wp_nav_menu( array(
         'container'       => '',
         'items_wrap'      => '<ul class="header__nav">%3$s</ul>',
        ) );
       ?>


    </div>
  </header>

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
      <ul class="header__nav">
        <li><a href="">Menu01</a></li>
        <li><a href="">Menu02</a></li>
        <li><a href="">Menu03</a></li>
        <li><a href="">Menu04</a></li>
      </ul>
    </div>
  </header>

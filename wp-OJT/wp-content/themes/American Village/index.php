<?php get_header();?>
<?php
$args = [
    'orderby' => 'date', //並べ替えの方法
    'order' => 'DESC', //降順(昇順 ASC)
    'post_status' => 'publish', //記事の公開ステータス
    'post_type' => 'post', //記事のタイプ
    'posts_per_page' => 6, //出力する数。全出力したい場合は-1
];

$the_query = new WP_Query($args);
?>
<main>
<div class="main">
  <picture class="main__visual">
    <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/img/visual_1_sp.png" />
    <img src="<?php echo get_template_directory_uri(); ?>/img/visual_1_pc.png" alt="アメリカンビレッジ夜景" />
  </picture>

  <picture class="main__text">
    <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/img/visual_text_sp.png" />
    <img src="<?php echo get_template_directory_uri(); ?>/img/visual_text_pc.png" alt="アメリカンビレッジ文字" />
  </picture>
</div>
  <div class="text">
    <p>進化し続ける「街」</p>
    <p>アメリカンビレッジマガジン</p>
  </div>

<div class="container">
  <h1>Latest Articles</h1>
  <div class="center">
    <?php if ($the_query->have_posts()): ?>
      <div class="flex">
    <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
      <div class="card">
    <?php
$alt = get_the_title(); // 代替テキストがない場合記事のタイトルを取得
if (has_post_thumbnail()) {
    $image_id = get_post_thumbnail_id();
    $imgSrc = wp_get_attachment_image_src($image_id, 'thumbnail')[0]; // 画像のURL
    // $imgWidth = wp_get_attachment_image_src($image_id, 'thumbnail')[1]; // 画像の幅
    // $imgHeight = wp_get_attachment_image_src($image_id, 'thumbnail')[2]; // 画像の高さ
    $alt = get_post_meta($image_id, '_wp_attachment_image_alt', true); //代替テキスト
} else {
    $imgSrc = 'ダミーのパス"';
}?>
  <img class="card__img" src="<?php echo $imgSrc; ?>" alt="<?php echo $alt; ?>">
  <p class="card__date"><time datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('Y/m/d/'); ?></time>
</p>
  <h2 class="card__title"><?php the_title()?></h2>

  <div class="card__btn">
    <a href="<?php the_permalink()?>">READ MORE</a>
  </div>
      </div>
      <?php endwhile; ?>
      </div>
      <?php endif; ?>
  </main>

<!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/app.js"></script>
<?php get_footer();?>

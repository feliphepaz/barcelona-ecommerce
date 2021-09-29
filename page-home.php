<?php
// Template name: Home
get_header();
?>

<ul id="slide-banner">
  <?php
  $banners = get_post_meta(get_the_id(), 'banner_field', true);
  if (isset($banners)) { foreach ($banners as $banner) { ?>
  <li>
    <a class="banner" href="<?= $banner['link_banner']; ?>">
    <img src="<?= $banner['img_banner']; ?>" alt="<?= $banner['nome_banner']; ?>"></a>
    <button aria-label="Navegar entre os banners" class="btn-slide-banner"></button>
  </li>
  <?php } } ?>
</ul>

<div class='categorias'>
  <a class="masculino" href="">
    <h2>Masculino</h2>
  </a>
  <a class="feminino" href="">
    <h2>Feminino</h2>
  </a>
</div>

<?php

$products_detach = wc_get_products([
  'limit' => 2,
  'category' => ['destaque'],
]);

$products_new = wc_get_products([
  'limit' => 9,
  'orderby' => 'date',
  'order' => 'DESC',
]);

$products_sales = wc_get_products([
  'limit' => 6,
  'meta_key' => 'total_sales',
  'orderby' => 'meta_value_num',
  'order' => 'DESC',
]);

$data['destaques'] = format_products($products_detach, 'medium');
$data['lançamentos'] = format_products($products_new, 'medium');
$data['vendidos'] = format_products($products_sales, 'medium');

?>

<?php if(have_posts()) { while (have_posts()) {the_post(); ?>


<section class='lancamentos'>
  <div class="container">
    <h1 class="subtitulo">Lançamentos</h1>
    <?= barcelona_products_list($data['destaques']); ?>
  </div>
</section>

<?php } } ?>

<?php get_footer() ?>
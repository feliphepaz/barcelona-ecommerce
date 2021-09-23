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

<?php get_footer() ?>
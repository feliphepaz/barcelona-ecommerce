<!DOCTYPE html>
<html lang="pt-br">

<?php
$style = get_stylesheet_directory_uri();
$cart_count = WC()->cart->get_cart_contents_count();
?>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name') ?> | <?php the_title() ?></title>
  <link rel="stylesheet" href="<?= $style ?>/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;900&display=swap" rel="stylesheet">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >
  <header class='header'>
    <div class='container'>
      <a href="/barcelona-ecommerce/"><img class='logo' src="<?= $style ?>/img/logo.png" alt=""></a>
      <div class='busca'>
        <form action="<?php bloginfo('url'); ?>/loja/" method='get'>
          <input class='input-busca' type="text" name='s' id='s' placeholder='buscar' value='<?php the_search_query(); ?>'>
          <input type="text" name='post_type' value='product' class='hidden'>
          <input class='input-submit' type="submit" id='searchbutton' value='Buscar'>
        </form>
      </div>
      <nav class='conta'>
        <a href="barcelona-ecommerce/minha-conta" class='minha-conta'>Minha Conta</a>
        <a href="barcelona-ecommerce/carrinho" class='carrinho'>Carrinho
          <?php if($cart_count) { ?>
            <span class="carrinho-count"><?= $cart_count; ?></span>
          <?php } ?>
        </a>
        <a class='conta-categorias-btn' href="">☰</a>
      </nav>
    </div>
    <nav class='menu-header'>
      <ul class='container'>
        <li><a href="">Camisas Masculinas</a></li>
        <li><a href="">Camisas Femininas</a></li>
        <li><a href="">Acessórios</a></li>
        <li><a href="">Jaquetas</a></li>
        <li><a href="">Conjuntos</a></li>
        <li><a href="">Infantil</a></li>
        <li><a href="">Outlet</a></li>
      </ul>
    </nav>
  </header>
<?php get_header(); ?>

<?php 
$products = [];
if(have_posts()) { while(have_posts()) { the_post();
  $products[] = wc_get_product(get_the_ID());
} }

$data = [];
$data['products'] = format_products($products);
?>

<div class="container breadcrumb">
  <?php woocommerce_breadcrumb(['delimiter' => ' > ']); ?>
</div>

<article class="container products-archive">
  <nav class="filtros">
    <button class="btn-filtrar">Filtrar produtos <span data-rotate>▼</span></button>
    <div data-filtro>
      <div class="filtro">
        <h2>Categorias</h2>
        <nav>
            <ul class='filtro-categorias'>
                <li><a href="">Camisas</a></li>
                <li><a href="">Acessórios</a></li>
                <li><a href="">Jaquetas</a></li>
                <li><a href="">Conjuntos</a></li>
                <li><a href="">infantil</a></li>
            </ul>
        </nav>
      </div>
      <div class="filtro">
        <h2>Tamanhos</h2>
        <?php 
          $attribute_taxonomies = wc_get_attribute_taxonomies();
          foreach($attribute_taxonomies as $attribute) {
            the_widget('WC_Widget_Layered_Nav', [
              'attribute' => $attribute->attribute_name,
            ]);
          }
        ?>
      </div>
      <div class="filtro">
        <h2>Filtrar por preço</h2>
        <form class="filtrar-preco" action="">
          <div>
            <label for="min_price">De R$</label>
            <input class="input-busca" required type="text" name="min_price" id="min_price" value="<?= $GET['min_prince'];  ?>">
          </div>
          <div>
            <label for="max_price">Até R$</label>
            <input class="input-busca" required type="text" name="max_price" id="max_price" value="<?= $GET['max_prince'];  ?>">
          </div>
          <input class="input-submit" type="submit" value="Filtrar">
        </form>
      </div>
    </div>
  </nav>
  <main class="produtos produtos-loja">
    <?php if($data['products'][0]) { ?>
      <?php woocommerce_catalog_ordering(); ?>
      <?php barcelona_products_list($data['products']); ?>
      <?= get_the_posts_pagination(); ?>
    <?php } else { ?>
      <p class="error">Infelizmente não temos nenhum resultado para a sua busca. &#128546</p>
    <?php } ?>
  </main>
</article>

<?php get_footer(); ?>
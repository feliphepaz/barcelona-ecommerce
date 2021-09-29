<?php

function barcelona_add_woocommerce_support() {
  add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'barcelona_add_woocommerce_support');

function barcelona_custom_images() {
  update_option('medium_crop', 1);
}
add_action('after_setup_theme', 'barcelona_custom_images' );

function barcelona_loop_shop_per_page() {
  return 12;
}
add_filter('loop_shop_per_page', 'barcelona_loop_shop_per_page');

function remove_some_body_class($classes) {
  $woo_class = array_search('woocommerce', $classes);
  $woopage_class = array_search('woocommerce-page', $classes);
  $search = in_array('archive', $classes) || in_array('product-template-default', $classes);
  if($woo_class && $woopage_class && $search) {
    unset($classes[$woo_class]);
    unset($classes[$woopage_class]);
  }
  return $classes;
}
add_filter('body_class', 'remove_some_body_class');

function format_products($products, $img_size = 'medium') {
  foreach($products as $product) {
    $products_final[] = [
      'name' => $product->get_name(),
      'price' => $product->get_price_html(),
      'link' => $product->get_permalink(),
      'img' => wp_get_attachment_image_src($product->get_image_id(), $img_size)[0],
    ];
  }
  return $products_final;
}

function barcelona_products_list($products) { ?>
  <ul class="products-list">
  <?php foreach($products as $product) { ?>
    <li>
      <a href="<?= $product['link'] ?>">
        <div class="product-info">
          <img src="<?= $product['img'] ?>" alt="<?= $product['name'] ?>">
          <h2><?= $product['name'] ?> <br>| <?= $product['price'] ?></h2>
        </div>
      </a>
    </li>
  <?php } ?>
  </ul>
<?php
}



add_action( 'cmb2_admin_init', 'banner_field' );
function banner_field() {
  $cmb = new_cmb2_box([
    'id' => 'slide_field',
    'title' => 'Slide',
    'object_types' => ['page'],
    'show_on' => [
      'key' => 'page-template',
      'value' => 'page-home.php'
    ],
  ]);

  $banners = $cmb->add_field([
    'id' => 'banner_field',
    'desc' => '<strong>Importante</strong>: Nunca deixe o slide de novidades da loja com nenhum banner. O site foi desenvolvido com muito carinho para que pelo menos tivesse sempre um. O recomendado também é ter no MÁXIMO 3 banners ao mesmo tempo. Ou seja, de 1 a 3.',
    'type' => 'group',
    'repeatable' => true,
    'options' => [
      'group_title' => 'Banner {#}',
      'add_button' => 'Adicionar',
      'remove_button' => 'Remover',
      'sortable' => true,
    ],
  ]);

  $cmb->add_group_field($banners, [
    'name' => 'Nome do Banner',
    'id' => 'nome_banner',
    'desc' => '<p>Neste campo você pode colocar o nome do banner, da promoção ou da novidade da loja.</p>',
    'type' => 'text_medium',
  ]);

  $cmb->add_group_field($banners, [
    'name' => 'Imagem do Banner',
    'id' => 'img_banner',
    'desc' => '<strong>Importante</strong>: Carregue um banner de tamanho 1440 x 600. Qualquer outra imagem fora desse tamanho, não ficará bom. Tipo de arquivo recomendado: jpeg ou jpg.',
    'type' => 'file',
    'options' => [
      'url' => false,
    ],
  ]);

  $cmb->add_group_field($banners, [
    'name' => 'Link do Banner',
    'id' => 'link_banner',
    'desc' => '<p style="margin-top: -18px;">O link do qual você gostaria que o seu banner levasse os clientes.</p>',
    'type' => 'text_url',
  ]);
}

?>
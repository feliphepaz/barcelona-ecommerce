<?php

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
<?php get_header(); ?>


<pre>
<?php 
$products = [];
if (have_posts()) { while(have_posts()) { the_post();

    $products[] = wc_get_product(get_the_ID());

} }


$data['products'] = format_products($products);
print_r($products);
?>
</pre>


<?php get_footer(); ?>
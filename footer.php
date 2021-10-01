<?php wp_footer(); ?>

<?php
$style = get_stylesheet_directory_uri();
?>

<footer class='footer'>
    <div class='container'>
        <img class='logo' src="<?= $style ?>/img/logo.png" alt="">
    </div>
</footer>

<script src="<?= get_stylesheet_directory_uri(); ?>/js/slide-banner.js"></script>
</body>
</html>
<?php wp_footer(); ?>

<?php
$style = get_stylesheet_directory_uri();
?>

<section class='newsletter'>
    <div class='container'>
        <p>Assine nossa Newsletter e receba 10% de desconto no seu primeiro pedido!</p>
        <form action="">
            <input type="text" class='input-busca'>
            <input type="submit" class='input-submit'>
        </form>
    </div>
</section>

<footer class='footer'>
    <div class='container'>
        <div class='footer-content'>
            <div>
                <h3>Mapa do Site</h3>
                <nav>
                    <ul>
                        <li><a href="">Camisas</a></li>
                        <li><a href="">Acessórios</a></li>
                        <li><a href="">Jaquetas</a></li>
                        <li><a href="">Conjuntos</a></li>
                        <li><a href="">infantil</a></li>
                    </ul>
                    <ul>
                        <li><a href="">Produtos</a></li>
                        <li><a href="">Contato</a></li>
                        <li><a href="">Minha conta</a></li>
                        <li><a href="">Carrinho</a></li>
                        <li><a href="">Termos & Condições</a></li>
                    </ul>
                </nav>
                <a class='institucional' href="">Conheça nosso site institucional</a>
            </div>
            <div>
                <h3>Entre em contato</h3>
                <ul>
                    <li><a href="">Facebook</a></li>
                    <li><a href="">Twitter</a></li>
                    <li><a href="">Instagram</a></li>
                    <div class='footer-contact'>
                        <a href="">(73) 98244 6162</a>
                        <a href="">comunicacao@barcelonafc.com.br</a>
                    </div>
                </ul>
            </div>
            <div>
                <h3>Meios de pagamento</h3>
                <ul>
                    <li><img src="<?= $style ?>/img/elo.png" alt=""></li>
                    <li><img src="<?= $style ?>/img/mastercard.png" alt=""></li>
                    <li><img src="<?= $style ?>/img/dinersclub.png" alt=""></li>
                    <li><img src="<?= $style ?>/img/hipercard.png" alt=""></li>
                    <li><img src="<?= $style ?>/img/visa.png" alt=""></li>
                    <li><img src="<?= $style ?>/img/boleto.png" alt=""></li>
                    <li></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<section class='copyright'>
    <div class='container'>
        <img class='logo' src="<?= $style ?>/img/logo.png" alt="">
        <legend class='copy'>Barcelona Futebol Clube. 2021 Todos os direitos reservados.</legend>
    </div>
</section>

<script src="<?= get_stylesheet_directory_uri(); ?>/js/slide-banner.js"></script>
</body>
</html>
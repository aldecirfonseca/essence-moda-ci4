<?= $this->extend('templates\layout_publico') ?>

<?= $this->section("main") ?>  

    <!-- ##### Single Product Details Area Start ##### -->
    <section class="single_product_details_area d-flex align-items-center">

        <!-- Single Product Thumb -->
        <div class="single_product_thumb clearfix">
            <div class="product_thumbnail_slides owl-carousel">
                <img src="<?= base_url() ?>assets/uploads/produtos/product-1.jpg" alt="">
                <img src="<?= base_url() ?>assets/uploads/produtos/product-2.jpg" alt="">
                <img src="<?= base_url() ?>assets/uploads/produtos/product-3.jpg" alt="">
            </div>
        </div>

        <!-- Single Product Description -->
        <div class="single_product_desc clearfix">
            <span>Vestidos</span>
            <a href="cart.html">
                <h2>Vestido tecido azul</h2>
            </a>
            <p class="product-price "><span class="old-price">R$ 150,00</span> R$ 99,00</p>
            <p class="product-desc">Liallbras Vestido de festa com renda e manga curta.</p>

            <!-- Form -->
            <form class="cart-form clearfix" method="post" action="index.php?view=carrinho-compras">
                <!-- Select Box -->
                <div class="select-box d-flex mt-50 mb-30">
                    <label>Tamanho</label>
                    <select name="select" id="productSize" class="mr-5">
                        <option value="value">XL</option>
                        <option value="value">X</option>
                        <option value="value">M</option>
                        <option value="value">S</option>
                    </select>

                    <label>Cor</label>
                    <select name="select" id="productColor">
                        <option value="value">Preto</option>
                        <option value="value">Branco</option>
                        <option value="value">Vermelho</option>
                        <option value="value">Roxo</option>
                    </select>
                </div>
                <div class="cart-fav-box d-flex align-items-center">
                    <!-- Cart -->
                    <button type="submit" name="addtocart" value="5" class="btn essence-btn">Adicionar ao Carrinho</button>
                    <!-- Favorito -->
                    <div class="product-favourite ml-4">
                        <a href="#" class="favme fa fa-heart"></a>
                    </div>
                </div>
            </form>
        </div>
    </section>

<?= $this->endSection() ?>
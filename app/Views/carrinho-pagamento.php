<?= $this->extend('templates\layout_publico') ?>

<?= $this->section("main") ?>  

    <div class="breadcumb_area bg-img" style="background-image: url(<?= base_url() ?>assets/img/bg-img/breadcumb.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="page-title text-center">
                        <h2>Pagamento</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="checkout_area section-padding-80">
        <div class="container">
            <div class="row">

                <div class="col-12 col-md-6">
                    <div class="checkout_details_area mt-50 clearfix">

                        <div class="cart-page-heading mb-30">
                            <h5>Endereço de Entrega</h5>
                        </div>

                        <form action="#" method="post">
                            <div class="row">

                                <div class="col-12 mb-3">
                                    <div class="custom-control custom-checkbox d-block mb-2">
                                        <input type="checkbox" class="custom-control-input" id="endereco1">
                                        <label class="custom-control-label" for="endereco1">Av. primeiro endereço, 100 - Centro - Muriaé-MG</label>
                                    </div>
                                </div>

                                <div class="col-12 mb-3">
                                    <div class="custom-control custom-checkbox d-block mb-2">
                                        <input type="checkbox" class="custom-control-input" id="endereco2">
                                        <label class="custom-control-label" for="endereco2">Av. segundo endereço, 500 - Barra - Muriaé-MG</label>
                                    </div>
                                </div>

                                <div class="col-12 mb-3">
                                    <div class="custom-control custom-checkbox d-block mb-2">
                                        <input type="checkbox" class="custom-control-input" id="endereco3">
                                        <label class="custom-control-label" for="endereco3">Av. terceiro endereço, 50 - São Pedro - Belo Horizonte-MG</label>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-5 ml-lg-auto">
                    <div class="order-details-confirmation">

                        <div class="cart-page-heading">
                            <h5>Seu Pedido</h5>
                            <p>Os Detalhes</p>
                        </div>

                        <ul class="order-details-form mb-4">
                            <li><span>Produto</span> <span>Total</span></li>
                            <li><span>VESTIDO AMARELO COCKTAIL</span> <span>R$ 159,90</span></li>
                            <li><span>SHORT VERLHEMO</span> <span>R$ 79,90</span></li>
                            <li><span>Subtotal</span> <span>R$ 239,80</span></li>
                            <li><span>Frete</span> <span>R$ 0,00</span></li>
                            <li><span>Total</span> <span>R$ 239,80</span></li>
                        </ul>

                        <div id="accordion" role="tablist" class="mb-4">
                            <h5>Forma de Pagamento</h5>
                            <div class="card">
                                <div class="card-header" role="tab" id="headingOne">
                                    <h6 class="mb-0">
                                        <a data-toggle="collapse" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne"><i class="fa fa-circle-o mr-3"></i>PIX</a>
                                    </h6>
                                </div>

                            </div>
                            <div class="card">
                                <div class="card-header" role="tab" id="headingTwo">
                                    <h6 class="mb-0">
                                        <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"><i class="fa fa-circle-o mr-3"></i>Boleto Bancário</a>
                                    </h6>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" role="tab" id="headingThree">
                                    <h6 class="mb-0">
                                        <a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree"><i class="fa fa-circle-o mr-3"></i>Cartão de Crédito</a>
                                    </h6>
                                </div>
                            </div>

                            <div class="card mt-5">

                                <div class="col-12">
                                    <div class="custom-control custom-checkbox d-block mb-2">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">Termos e condições</label>
                                    </div>
                                </div>
                            </div>


                        </div>

                        <a href="#" class="btn essence-btn">Confirmar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?= $this->endSection() ?>
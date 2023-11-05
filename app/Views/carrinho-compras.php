<?= $this->extend('templates\layout_publico') ?>

<?= $this->section("main") ?>  

<div class="container">

    <h2 class="mb-5">Carrinho compras</h2>

    <form>

        <div class="cart_inner">
            <div class="table-responsive">
                <table class="table table-responsive-sm table-sm">
                    <thead>
                        <tr>
                            <th scope="col">Produto</th>
                            <th scope="col">Preço</th>
                            <th scope="col">Quantidade</th>
                            <th scope="col"></th>
                            <th scope="col">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="media">
                                    <div class="d-flex">
                                        <img src="<?= base_url() ?>assets/uploads/produtos/product-1.jpg" style="width: 100px; height: 100px" alt="">
                                    </div>
                                    <div class="media-body">
                                        <p>Minimalistic shop for multipurpose use</p>
                                    </div>
                                </div>
                            </td>
                            <td class="text-right">
                                R$ 360,00
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="quantidade" id="quantidade" maxlength="12" value="1" title="Quantidade">
                                </div>
                            </td>
                            <td>
                                <a href="#" class="btn btn-outline-primary btn-sm">+</a>
                                <a href="#" class="btn btn-outline-primary btn-sm">-</a>
                            </td>
                            <td class="text-right">
                                R$ 720,00
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="media">
                                    <div class="d-flex">
                                        <img src="<?= base_url() ?>assets/uploads/produtos/product-2.jpg" style="width: 100px; height: 100px" alt="">
                                    </div>
                                    <div class="media-body">
                                        <p>Minimalistic shop for multipurpose use</p>
                                    </div>
                                </div>
                            </td>
                            <td class="text-right">
                                R$ 360,00
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="quantidade" id="quantidade" maxlength="12" value="1" title="Quantidade">
                                </div>
                            </td>
                            <td>
                                <a href="#" class="btn btn-outline-primary btn-sm">+</a>
                                <a href="#" class="btn btn-outline-primary btn-sm">-</a>
                            </td>
                            <td class="text-right">
                                R$ 720,00
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="media">
                                    <div class="d-flex">
                                        <img src="<?= base_url() ?>assets/uploads/produtos/product-3.jpg" style="width: 100px; height: 100px" alt="">
                                    </div>
                                    <div class="media-body">
                                        <p>Minimalistic shop for multipurpose use</p>
                                    </div>
                                </div>
                            </td>
                            <td class="text-right">
                                R$ 360,00
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="quantidade" id="quantidade" maxlength="12" value="1" title="Quantidade">
                                </div>
                            </td>
                            <td>
                                <a href="#" class="btn btn-outline-primary btn-sm">+</a>
                                <a href="#" class="btn btn-outline-primary btn-sm">-</a>
                            </td>
                            <td class="text-right">
                                R$ 720,00
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <h5>Subtotal</h5>
                            </td>
                            <td style="width: 150px !important;" class="text-right">
                                <h5>R$ 2.160,00</h5>
                            </td>
                        </tr>
                        <tr class="shipping_area">
                            <td class="d-none d-md-block"></td>
                            <td></td>
                            <td></td>
                            <td>
                                <h5>Frete</h5>
                            </td>
                            <td class="text-right">
                                <div class="shipping_box text-right">
                                    <select name="tipoFrete" id="tipoFrete">
                                        <option value="1">SEDEX: R$ 15,00</option>
                                        <option value="2">Frete Grátis</option>
                                    </select>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <h5>Total</h5>
                            </td>
                            <td style="width: 150px !important;" class="text-right">
                                <h5>R$ 2.160,00</h5>
                            </td>
                        </tr>

                        <tr>
                            <td class="d-none-l"></td>
                            <td></td>
                            <td></td>
                            <td colspan="2">
                                <div class="d-flex text-right">
                                    <a class="btn btn-outline-secondary btn-sm" href="<?= base_url() ?>">Continue comprando</a>
                                    <a class="btn btn-outline-secondary btn-sm ml-2" href="<?= base_url() ?>carrinho-pagamento">Pagamento</a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </form>

</div>

<?= $this->endSection() ?>
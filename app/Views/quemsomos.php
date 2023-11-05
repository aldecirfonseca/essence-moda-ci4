<?= $this->extend('templates\layout_publico') ?>

<?= $this->section("main") ?>  

<div class="container">

    <h2 class="mb-5">Quem Somos</h2>

    <div class="single-blog-wrapper">

        <div class="single-blog-post-thumb">
            <img src="<?= base_url() ?>assets/uploads/quemsomos/bg-8.jpg" alt="">
        </div>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10">
                    <div class="regular-page-content-wrapper section-padding-80">
                        <div class="regular-page-text">
                            <p>
                                Nosso fundador uma pessoa humilde do interior mineiro, mas um sonhardor, um visionário que sempre sonhou em criar algo inovador, que pudesse tranformar a vida das pessoas e antigir o maior público possível.
                            </p>

                            <p>
                                Dai nasce a <a href="<?= base_url() ?>" class="quemsomos-link-empresa"><strong>Essence Moda</strong></a> uma empresa que visa revolucionar o mercado de vendas online dando a todos uma experiência única em compras virtuais.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-10">
                    <h4>Missão</h4>
                    <p>Ser uma marca lider mundial com um time obstinado em prever e atender as necessidades dos clientes e consumidores sempre agregando valores.</p>
                </div>

                <div class="col-12 col-md-10 mt-3">
                    <h4>Visão</h4>
                    <p>Ser marca líder e inspirar paixão em quem produz e em quem usa nossos produtos.</p>
                </div>

                <div class="col-12 col-md-10 mt-3">
                    <h4>Valores</h4>
                    <p>Honestidade, respeito e dedicação.</p>
                </div>

            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
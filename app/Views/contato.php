<?= $this->extend('templates\layout_publico') ?>

<?= $this->section("main") ?>  

<?php
    $errors = \Config\Services::validation()->getErrors();
?>

<div class="container">

    <h2 class="mb-5">Contato</h2>

    <?= mensagem() ?>

    <div class="contact-area d-flex align-items-center">

        <div class="row">
            <div class="col-6">
                <img src="<?= base_url() ?>assets/img/essence-moda-localizacao.png">
            </div>

            <div class="col-6 contact-info">

                <div class="row">
                    <div class="col-12">
                        <h4>Muriaé-MG</h4>
                        <p>Praça Aninna Bisegna, 40 - Centro</p>
                    </div>
                    <div class="col-12 mt-5">
                        <h4>+55 (32) 3721-1026</h4>
                        <p>De segunda a sexta das 8 às 18 horas</p>
                    </div>
                    <div class="col-12 mt-5">
                        <h3><a href="mailto:aldecir.fonseca@santamarcelina.edu.br" class="contato-link-email">aldecir.fonseca@santamarcelina.edu.br</a></h3>
                        <p>Envie-nos uma mensagem a qualquer momento!</p>
                    </div>

                </div>
            </div>
        </div>

    </div>

    <?= form_open("contatoEnviaEmail") ?>

        <div class="row">

            <h3 class="ml-3 mt-5 mb-3">Envie nos um e-mail</h3>

            <div class="col-12">
                <div class="form-group">
                    <input class="form-control" name="nome" id="nome" type="text" placeholder="Seu nome" required maxlength="60"
                        value="<?= setValue("nome", $dados) ?>">
                    <?= setMsgErrorCampo("nome", $errors) ?>
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="form-group">
                    <input class="form-control" name="celular" id="celular" type="text" maxlength="11" 
                    placeholder="Seu telefone para contato" required
                    value="<?= setValue("celular", $dados) ?>">
                    <?= setMsgErrorCampo("celular", $errors) ?>
                </div>
            </div>

            <div class="col-12 col-md-8">
                <div class="form-group">
                    <input class="form-control" name="email" id="email" type="email" maxlength="100" 
                    placeholder="Seu e-mail" required
                    value="<?= setValue("email", $dados) ?>">
                    <?= setMsgErrorCampo("email", $errors) ?>
                </div>
            </div>

            <div class="col-12">
                <div class="form-group">
                    <input class="form-control" name="assunto" id="assunto" type="text" placeholder="Resumo do assunto" required
                        value="<?= setValue("assunto", $dados) ?>">
                    <?= setMsgErrorCampo("assunto", $errors) ?>
                </div>
            </div>

            <div class="col-12">
                <textarea name="mensagem" id="mensagem"  
                        placeholder="Descreva de forma detalha o motivo do seu contato"><?= setValue("mensagem", $dados) ?>"</textarea>
                <?= setMsgErrorCampo("mensagem", $errors) ?>
            </div>

            <div class="col-12 mt-3">
                <button type="submit" class="btn btn-outline-dark">Enviar Mensagem</button>
            </div>

        </div>

    <?= form_close() ?>

</div>

<script src="<?= base_url() ?>/assets/ckeditor5/ckeditor.js"></script>

<script>
    ClassicEditor
        .create( document.querySelector( '#mensagem' ) )
        .catch( error => {
            console.error( error );
        } );
</script>

<?= $this->endSection() ?>
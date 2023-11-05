<?= $this->extend('templates\layout_publico') ?>

<?= $this->section("main") ?>  

<div class="container">

    <h2 class="mb-5">Login / Criar Nova Conta</h2>

    <section class="login_box_area section-margin">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 login_box_criarconta">
                    <div class="mt-3">
                        <div class="hover">
                            <h4 class="mb-5">Novo em nosso site?</h4>
                            <p class="mb-5">
                                Crie uma conta para poder curtir, comentar, marcar como lido nossos conteúdos criados para você.
                            </p>
                            <a class="btn btn-outline-primary" href="<?= base_url() ?>criarNovaConta">Crie sua conta aqui</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="login_form_inner">
                        <h3 class="mt-3 mb-3">Entre com seu Login</h3>

                        <?= form_open("Login/signIn", ["class" => "row login_form", "id" => "contactForm"]) ?>

                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="email" name="email" placeholder="E-mail" value="">
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha">
                            </div>
                            <div class="col-md-12 form-group">
                                <div class="creat_account">
                                    <input type="checkbox" id="manterConectado" name="manterConectado">
                                    <label for="manterConectado">Mantenha-me conectado</label>
                                </div>
                            </div>
                            <div class="col-md-12 form-group">
                                <?= mensagem() ?>
                            </div>
                            <div class="col-md-12 form-group">
                                <button type="submit" value="submit" class="btn btn-outline-secondary">Entrar</button>
                                <a href="#" class="ml-3">Esqueceu a senha?</a>
                            </div>

                        <?= form_close() ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

<?= $this->endSection() ?>
<?= $this->extend('templates\layout_publico') ?>

<?= $this->section("main") ?>  

<div class="container">

    <h2 class="mb-5">Criar Nova Conta</h2>

    <section class="login_box_area section-margin">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 login_box_criarconta">
                    <div class="mt-3">
                        <div class="hover">
                            <h4>Já possui conta?</h4>
                            <p class="mt-5">
                                Faça seu login e curta, comente, marcar como lido nossos conteúdos criados para você.
                            </p>
                            <a class="btn btn-outline-primary mt-5" href="<?= base_url() ?>login">Login</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="login_form_inner register_form_inner">
                        <h3 class="mt-3">Crie sua nova conta aqui</h3>
                        <form class="row mt-3" action="#/" id="register_form">
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Nome Completo" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nome Completo'">
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="celular" name="celular" placeholder="Tefone para contato" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Tefone para contato'">
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="email" name="email" placeholder="Seu melhor e-mail" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Seu melhor e-mail'">
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="password" name="password" placeholder="Sua senha" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Sua senha'">
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="Confirme sua senha" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Confirme sua senha'">
                            </div>
                            <div class="col-md-12 mt-2 form-group">
                                <div class="creat_account">
                                    <input type="checkbox" id="f-option2" name="selector">
                                    <label for="f-option2">Mantenha-me conectado</label>
                                </div>
                            </div>
                            <div class="col-md-12 form-group">
                                <button type="submit" value="submit" class="btn btn-outline-secondary w-100">Criar conta</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

<?= $this->endSection() ?>
<?= $this->extend('templates\layout_admin') ?>

<?= $this->section("main") ?>

<script src="<?= base_url("assets/ckeditor5/ckeditor.js") ?>" type="text/Javascript"></script>

<main class="container">

    <?= exibeTitulo("Produto", ['acao' => $action]) ?>

    <section class="mb-5">

        <?= form_open("Produto/". ($action == "delete" ? 'delete' : 'store') , ['enctype' => 'multipart/form-data']) ?>

            <div class="row">

                <div class="form-group col-12 col-md-8">
                    <label for="descricao" class="form-label">Descrição</label>
                    <input type="text" name="descricao" id="descricao"  class="form-control" maxlength="50" value="<?= setValue('descricao', $data) ?>" required autofocus>
                    <?= setMsgErrorCampo('descricao', $errors) ?>
                </div>

                <div class="form-group col-12 col-md-4">
                    <?= comboboxStatus(setValue('statusRegistro', $data)) ?>
                    <?= setMsgErrorCampo('statusRegistro', $errors) ?>
                </div>

                <div class="form-group col-12">
                    <label for="detalhamento" class="form-label">Detalhamento</label>
                    <textarea class="form-control" name="detalhamento" id="detalhamento"
                        placeholder="Descreva detalhes técnicos do produto"><?= setValue("detalhamento", $data) ?></textarea>
                    <?= setMsgErrorCampo("detalhamento", $errors) ?>
                </div>

                <div class="form-group col-6">
                    <label for="categoria_id" class="form-label">Categoria</label>
                    <select name="categoria_id" id="categoria_id" class="form-control" required>
                        <option value="">...</option>
                        <?php foreach ($aCategoria as $categoriaValue): ?>
                            <option value="<?= $categoriaValue['id'] ?>" <?= (setValue("categoria_id", $data) == $categoriaValue['id'] ? "selected" : "") ?>><?= $categoriaValue['descricao'] ?></option>
                        <?php endforeach; ?>
                    </select>
                    <?= setMsgErrorCampo("categoria_id", $errors) ?>
                </div>
                
                <div class="form-group col-12 col-md-3">
                    <label for="precoVenda" class="form-label">Preço de Venda</label>
                    <input type="text" name="precoVenda" id="precoVenda"  class="form-control" maxlength="20" value="<?= setValue('precoVenda', $data) ?>" required>
                    <?= setMsgErrorCampo('precoVenda', $errors) ?>
                </div>
                
                <div class="form-group col-12 col-md-3">
                    <label for="pesoBruto" class="form-label">Peso Bruto (kg)</label>
                    <input type="text" name="pesoBruto" id="pesoBruto"  class="form-control" maxlength="20" value="<?= setValue('pesoBruto', $data) ?>" required>
                    <?= setMsgErrorCampo('pesoBruto', $errors) ?>
                </div>

                <div class="form-group col-12 col-md-4">
                    <label for="largura" class="form-label">Largura (cm)</label>
                    <input type="text" name="largura" id="largura"  class="form-control" maxlength="20" value="<?= setValue('largura', $data) ?>" required>
                    <?= setMsgErrorCampo('largura', $errors) ?>
                </div>

                <div class="form-group col-12 col-md-4">
                    <label for="altura" class="form-label">Altura (cm)</label>
                    <input type="text" name="altura" id="altura"  class="form-control" maxlength="20" value="<?= setValue('altura', $data) ?>" required>
                    <?= setMsgErrorCampo('altura', $errors) ?>
                </div>

                <div class="form-group col-12 col-md-4">
                    <label for="profundidade" class="form-label">Profundidade (cm)</label>
                    <input type="text" name="profundidade" id="profundidade"  class="form-control" maxlength="20" value="<?= setValue('profundidade', $data) ?>" required>
                    <?= setMsgErrorCampo('profundidade', $errors) ?>
                </div>

                <div class="col-12 form-group">
                    <label for="imagem" class="form-label">Imagens</label>
                    <input type="file" class="form-control" id="imagem" name="imagem[]" multiple>
                    <div id="imagem" class="form-text">Recomendamos Imagens de Até 210x210</div>
                </div>

            </div>

            <hr />
            <h3>Imagens</h3>

            <div class="row">

                <?php foreach ($aAnexo as $anexo): ?>
                    <div class="col-3">
                        <img src="<?= base_url('uploads/produto/' . $anexo['nomeArquivo']) ?>" alt="..." width="210" height="210">
                        <a href="<?= base_url() ?>/Produto/excluirImagem/<?= setValue("id", $data) . "/" . $action . "/" . $anexo['nomeArquivo'] ?>">Excluir</a>
                    </div>
                <?php endforeach; ?>

            </div>
            
            <hr />

            <div class="row">

                <input type="hidden" name="action" value="<?= $action ?>">
                <input type="hidden" name="id" value="<?= setValue("id", $data) ?>">

                <div class="form-group col-12">
                    <a href="<?= base_url() ?>/Produto">Voltar</a>
                    <button type="submit" value="submit" class="button button-login ml-3">Gravar</button>
                </div>

            </div>

        <?= form_close() ?>

    </section>
    
</main>

<script type="text/javascript">
    
    ClassicEditor
        .create(document.querySelector('#detalhamento'))
        .catch(error => {
            console.error(error);
    });

    $(document).ready( function() { 
        $('#precoVenda').mask('##.###.###.##0,00', {reverse: true});
        $('#pesoBruto').mask('##.###.###.##0,000', {reverse: true});
    })

</script>

<?= $this->endSection() ?>
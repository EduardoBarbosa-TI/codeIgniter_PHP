<div class="col-12 col-sm-12 mt-5">
    <h2>Cadastro de Produtos</h2>
    <form class="row g-3" method="POST" action="<?=base_url('admin/registerProducts')?>">
        <div class="col-md-12">
            <label for="validationDefault01" class="form-label">Nome do Produto</label>
            <input type="text" class="form-control" name="name" id="validationDefault01" required>
        </div>
        <div class="col-md-12">
            <label for="validationDefault02" class="form-label">Preço do produto</label>
            <input type="text" class="form-control" name="price" id="validationDefault02" required>
        </div>
        <div class="col-md-6">
            <label for="validationDefault02" class="form-label">Categoria</label>
            <input type="text" class="form-control" name="category" id="validationDefault02" required>
        </div>
        <div class="col-md-12">
            <label for="validationTextarea" class="form-label">Textarea</label>
            <textarea class="form-control" id="validationTextarea" placeholder="Required example textarea" name="description" required></textarea>
        </div>
        <div class="col-12">
            <button class="btn btn-primary" name="create" type="submit">Submit form</button>
        </div>
    </form>
</div>

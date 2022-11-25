<div class="w-50 mt-5">
    <h2>Editar Produto</h2>
    <?php
        foreach ($arrayProducts as $product) {
    ?>
    <form class="row g-3" method="POST" action="<?=base_url('admin/updateProducts/'.$product['idProduct'])?>">
        <div class="col-md-12">
            <label for="validationDefault01" class="form-label" value>Nome do Produto</label>
            <input type="text" class="form-control" name="name" id="validationDefault01" value="<?= $product['name'] ?>" required>
        </div>
        <div class="col-md-12">
            <label for="validationDefault02" class="form-label">Preço do produto</label>
            <input type="text" class="form-control" name="price" id="validationDefault02" value="<?= $product['price'] ?>" required>
        </div>
        <div class="col-md-6">
            <label for="validationDefault02" class="form-label">Categoria</label>
            <input type="text" class="form-control" name="category" id="validationDefault02" value="<?= $product['idCategory'] ?>" required>
        </div>
        <div class="col-md-12">
            <label for="validationTextarea" class="form-label">Textarea</label>
            <textarea class="form-control" id="validationTextarea"  name="description" required><?= $product['description'] ?></textarea>
            <input type="hidden" name="idProduct" value="<?= $product['idProduct'] ?>">
        </div>
        <div class="col-12">
            <button class="btn btn-primary" name="update" type="submit">Submit form</button>
        </div>
        <?php    
        }
        ?>
    </form>
</div>

<div class="w-100 mt-5 table-responsive">
    <h2>Lista de Produtos</h2>
    <table class="table table-striped">
        <tr>
            <th>ID Produto</th>
            <th>ID Categoria</th>
            <th>Descrição</th>
            <th>Nome</th>
            <th>Preço</th>
        </tr>
        <?php
        foreach ($products as $product) {
        ?>
            <tr>
                <td>
                    <?= $product['idProduct'] ?>
                </td>
                <td>
                    <?= $product['idCategory'] ?>
                </td>
                <td>
                    <?= $product['description'] ?>
                </td>
                <td>
                    <?= $product['name'] ?>
                </td>
                <td>
                    <?= $product['price'] ?>
                </td>
                <td>
                    <a class="btn btn-sm btn-primary me-2" href='<?= base_url('admin/product/consult/'.$product['idProduct']) ?>'><i class="bi bi-pencil"></i></a>
                    <a class="btn btn-sm btn-danger me-2" href='<?= base_url('admin/product/delete/'.$product['idProduct'])?>'><i class="bi bi-trash"></i></a>
                    </div>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</div>
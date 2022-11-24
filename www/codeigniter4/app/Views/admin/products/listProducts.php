<div class="col-12 col-sm-8">
    <h2>Lista de Produtos</h2>
    <table class="table table-striped">
        <tr>
            <th>ID Produto</th>
            <th>ID Categoria</th>
            <th>descrição</th>
            <th>nome</th>
            <th>preço</th>
        </tr>
        <?php
        foreach ($arrayProducts as $products) {
        ?>
            <tr>
                <td>
                    <?= $products['idProduct'] ?>
                </td>
                <td>
                    <?= $products['idCategory'] ?>
                </td>
                <td>
                    <?= $products['description'] ?>
                </td>
                <td>
                    <?= $products['name'] ?>
                </td>
                <td>
                    <?= $products['price'] ?>
                </td>
                <td>
                    <a class="btn btn-sm btn-primary me-2" href='<?= base_url('admin/consultProducts/' . $products['idProduct']) ?>'><i class="bi bi-pencil"></i></a>
                    <a class="btn btn-sm btn-danger me-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="bi bi-trash"></i></a>
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                                    <a class="btn-close" data-bs-dismiss="modal" aria-label="Close"></a>
                                </div>
                                <div class="modal-body">
                                    Você realmente deseja excluir o produto ?
                                </div>
                                <div class="modal-footer">
                                    <a class="btn btn-secondary" data-bs-dismiss="modal">Fechar</a>
                                    <a href='<?= base_url('admin/deleteProducts/'.$products['idProduct'])?>' class="btn btn-primary">Excluir produto</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</div>
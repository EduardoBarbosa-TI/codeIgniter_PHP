<div class="col-12 col-sm-8 table-responsive">
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
            foreach($arrayProducts as $products){
        ?>
            <tr>
                <td>
                    <?=$products['idProduct']?>
                </td>
                <td>
                    <?=$products['idCategory']?>
                </td>
                <td>
                    <?=$products['description']?>
                </td>
                <td>
                    <?=$products['name']?>
                </td>
                <td>
                    <?=$products['price']?>
                </td>
            </tr>
            <?php
                }
            ?>
    </table> 
</div>
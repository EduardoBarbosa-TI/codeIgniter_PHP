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
            foreach($products as $product){
        ?>
            <tr>
                <td>
                    <?=$product['idProduct']?>
                </td>
                <td>
                    <?=$product['idCategory']?>
                </td>
                <td>
                    <?=$product['description']?>
                </td>
                <td>
                    <?=$product['name']?>
                </td>
                <td>
                    <?=$product['price']?>
                </td>
            </tr>
            <?php
                }
            ?>
    </table> 
</div>
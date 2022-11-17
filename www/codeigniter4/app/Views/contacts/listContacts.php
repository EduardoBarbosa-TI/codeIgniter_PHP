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
            foreach($arrayContacts as $contacts){
        ?>
            <tr>
                <td>
                    <?=$contacts['idContact']?>
                </td>
                <td>
                    <?=$contacts['name']?>
                </td>
                <td>
                    <?=$contacts['email']?>
                </td>
                <td>
                    <?=$contacts['message']?>
                </td>
                <td>
                    <?=$contacts['status']?>
                </td>
                <td>
                    <?=$contacts['description']?>
                </td>
            </tr>
            <?php
                }
            ?>
    </table> 
</div>
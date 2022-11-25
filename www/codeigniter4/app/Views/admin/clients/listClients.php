<div class="w-100 mt-5">
    <h2>Lista de Clientes</h2>
    <table class="table table-striped">
        <tr>
            <th>ID Cliente</th>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Email</th>
            <th>Endereço</th>
        </tr>
        <?php
        foreach ($arrayClients as $clients) {
        ?>
            <tr>
                <td>
                    <?= $clients['idClient'] ?>
                </td>
                <td>
                    <?= $clients['name'] ?>
                </td>
                <td>
                    <?= $clients['phone'] ?>
                </td>
                <td>
                    <?= $clients['email'] ?>
                </td>
                <td>
                    <?= $clients['address'] ?>
                </td>
                <td>
                    <a class="btn btn-sm btn-primary me-2" href='<?= base_url('admin/consultClients/' . $clients['idClient']) ?>'><i class="bi bi-pencil"></i></a>

                    <a class="btn btn-sm btn-danger me-2" href="<?= base_url('admin/deleteClient/' . $clients['idClient']) ?>"><i class="bi bi-trash"></i></a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</div>
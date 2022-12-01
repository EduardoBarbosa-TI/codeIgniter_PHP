<div class="w-100 mt-5 table-responsive">
    <h2>Lista de Clientes</h2>
    <table class="table table-striped">
        <tr>
            <th>ID Contato</th>
            <th>name</th>
            <th>email</th>
            <th>message</th>
            <th>status</th>
            <th>description</th>
        </tr>
        <?php
         foreach ($arrayContacts as $contacts) {
        ?>
            <tr>
                <td>
                    <?= $contacts['idContact'] ?>
                </td>
                <td>
                    <?= $contacts['name'] ?>
                </td>
                <td>
                    <?= $contacts['email'] ?>
                </td>
                <td>
                    <?= $contacts['message'] ?>
                </td>
                <td>
                    <?= $contacts['status'] ?>
                </td>
                <td>
                    <?= $contacts['description'] ?>
                </td>
                <td>
                    <a class="btn btn-sm btn-primary me-2" href='<?= base_url('admin/consultContacts/' . $contacts['idContact']) ?>'><i class="bi bi-pencil"></i></a>

                    <a class="btn btn-sm btn-danger me-2" href="<?= base_url('admin/deleteContact/' . $contacts['idContact']) ?>"><i class="bi bi-trash"></i></a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</div>
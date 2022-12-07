<div class="w-100 mt-5 table-responsive">
    <h2>Lista de Contatos</h2>
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
         foreach ($contacts as $contact) {
        ?>
            <tr>
                <td>
                    <?= $contact['idContact'] ?>
                </td>
                <td>
                    <?= $contact['name'] ?>
                </td>
                <td>
                    <?= $contact['email'] ?>
                </td>
                <td>
                    <?= $contact['message'] ?>
                </td>
                <td>
                    <?= $contact['status'] ?>
                </td>
                <td>
                    <?= $contact['description'] ?>
                </td>
                <td>
                    <a class="btn btn-sm btn-primary me-2" href='<?= base_url('admin/contact/consult/'.$contact['idContact']) ?>'><i class="bi bi-pencil"></i></a>

                    <a class="btn btn-sm btn-danger me-2" href="<?= base_url('admin/contact/delete/'.$contact['idContact']) ?>"><i class="bi bi-trash"></i></a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</div>
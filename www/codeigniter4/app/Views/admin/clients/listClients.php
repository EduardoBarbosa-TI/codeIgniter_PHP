<div class="w-100 mt-5 table-responsive">
    <div class="col-12 col-md-12">
        <div class="col-6 com-md-6">
            <h2 class="mb-3">Lista de Clientes</h2>
        </div>
        <div class="col-6 com-md-6 mb-3">
            <form class="d-flex" role="search" method="POST" action="<?=base_url('admin/client/search')?>">
                <input class="form-control me-2" type="search" name="search" placeholder="Consulta de clientes" aria-label="Search">
                <button class="btn btn-outline-primary" type="submit">Search</button>
            </form>
        </div>

    </div>
    
    <table class="table table-striped">
        <tr>
            <th>ID Cliente</th>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Email</th>
            <th>Endereço</th>
        </tr>
        <?php
        foreach ($clients as $client) {
        ?>
            <tr>
                <td>
                    <?= $client['idClient'] ?>
                </td>
                <td>
                    <?= $client['name'] ?>
                </td>
                <td>
                    <?= $client['phone'] ?>
                </td>
                <td>
                    <?= $client['email'] ?>
                </td>
                <td>
                    <?= $client['address'] ?>
                </td>
                <td>
                    <a class="btn btn-sm btn-primary me-2 mb-2 mb-sm-0" href='<?= base_url('admin/client/consult/'.$client['idClient']) ?>'><i class="bi bi-pencil"></i></a>

                    <a class="btn btn-sm btn-danger me-2" href="<?= base_url('admin/client/delete/'.$client['idClient']) ?>"><i class="bi bi-trash"></i></a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</div>
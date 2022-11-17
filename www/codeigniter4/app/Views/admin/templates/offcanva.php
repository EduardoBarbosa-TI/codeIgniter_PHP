<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasExampleLabel">Empresa LTDA</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div class="row">
            <div class="col-12 col-sm-12">
                <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample01" aria-expanded="false" aria-controls="collapseExample">
                    Clientes
                </button>
                <div class="collapse" id="collapseExample01">
                    <ul class=" mt-3">
                        <li><a class="dropdown-item" href="<?=base_url('registerClients')?>">Cadastrar CLientes</a></li>
                        <li><a class="dropdown-item" href="<?=base_url('listClients')?>">Listar Clientes</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-sm-12 mt-2">
                <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample02" aria-expanded="false" aria-controls="collapseExample">
                    Produtos
                </button>
                <div class="collapse" id="collapseExample02">
                    <ul class="mt-3">
                        <li><a class="dropdown-item" href="<?=base_url('admin/registerProducts')?>">Cadastrar Produtos</a></li>
                        <li><a class="dropdown-item" href="<?=base_url('admin/listProducts')?>">Listar Produtos</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-sm-12 mt-2">
                <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample04" aria-expanded="false" aria-controls="collapseExample04">
                    Contatos
                </button>
                <div class="collapse" id="collapseExample04">
                    <ul class="mt-3">
                        <li><a class="dropdown-item" href="<?=base_url('registerContacts')?>">Cadastrar Contatos</a></li>
                        <li><a class="dropdown-item" href="<?=base_url('listContacts')?>">Listar Contatos</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
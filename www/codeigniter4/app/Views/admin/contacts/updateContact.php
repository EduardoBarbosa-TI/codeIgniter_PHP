<div class="w-50 mt-5">
    <h2>Editar Contato</h2>
    <?php
    foreach ($arrayContact as $client) {
    ?>
        <h2>Cadastro de Clientes</h2>
        <form class="row g-3" method="POST" action="<?=base_url('admin/registerContacts')?>">
        <div class="col-md-12">
            <label for="validationDefault01" class="form-label">Nome do Cliente</label>
            <input type="text" class="form-control" name="name" value="<?= $client['name'] ?>" id="validationDefault01" required>
        </div>
        <div class="col-md-12">
            <label for="validationDefault02" class="form-label">Telefone</label>
            <input type="text" class="form-control" name="phone" value="<?= $client['phone'] ?>" id="validationDefault02" required>
        </div>
        <div class="col-md-12">
            <label for="validationDefault02" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" value="<?= $client['email'] ?>" id="validationDefault02" required>
        </div>
        <div class="col-md-12">
            <label for="validationDefault02" class="form-label">status</label>
            <input type="text" class="form-control" name="status" value="<?= $client['status'] ?>" id="validationDefault02" required>
        </div>
        <div class="col-md-12">
            <label for="validationTextarea" class="form-label">Mensagem</label>
            <textarea class="form-control" id="validationTextarea" value="<?= $client['message'] ?>" placeholder="Required example textarea" name="message" required></textarea>
        </div>
        <div class="col-md-12">
            <label for="validationTextarea" class="form-label">Descrição</label>
            <textarea class="form-control" id="validationTextarea" placeholder="Required example textarea" name="description" required></textarea>
        </div>
        <div class="col-12">
            <button class="btn btn-primary" name="update" type="submit">Submit form</button>
        </div>
    </form>
    <?php
        }
    ?>
</div>
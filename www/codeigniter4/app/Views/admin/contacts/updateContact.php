<div class="col-12 col-sm-12 mt-5">
    
    <?php
    foreach ($contacts as $contact) {
    ?>
        <h2 class="mb-3">Editar Contato</h2>
        <form class="row g-3" method="POST" action="<?=base_url('admin/contact/consult/'.$contact['idContact'])?>">
        <div class="col-md-12">
            <label for="validationDefault01" class="form-label">Nome do Contato</label>
            <input type="text" class="form-control" name="name" value="<?=$contact['name'] ?>" id="validationDefault01" required>
        </div>
        <div class="col-md-12">
            <label for="validationDefault02" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" value="<?= $contact['email'] ?>" id="validationDefault02" required>
        </div>
        <div class="col-md-12">
            <label for="validationTextarea" class="form-label">Descrição</label>
            <textarea class="form-control" id="validationTextarea" placeholder="Required example textarea" name="description" value="<?= $contact['description'] ?>" required></textarea>
        </div>
        <div class="col-12">
            <button class="btn btn-primary" name="update" type="submit">Submit form</button>
        </div>
    </form>
    <?php
        }
    ?>
</div>
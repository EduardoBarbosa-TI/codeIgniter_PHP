<div class="col-12 col-sm-12 mt-5">
    <h2 class="mb-3">Editar Cliente</h2>
   <?php
        foreach($arrayClient as $client){
   ?>
    
    <form class="row g-3" method="POST" action="<?=base_url('admin/updateClient/'.$client['idClient'])?>">
        <div class="col-md-12">
            <label for="validationDefault01"  class="form-label">Nome do Cliente</label>
            <input type="text" class="form-control"  name="name" id="validationDefault01" value="<?= $client['name'] ?>" required>
        </div>
        <div class="col-md-12">
            <label for="validationDefault02" class="form-label">Telefone</label>
            <input type="text" class="form-control" name="phone" id="validationDefault02" value="<?= $client['phone'] ?>" required>
        </div>
        <div class="col-md-12">
            <label for="validationDefault02" class="form-label">email</label>
            <input type="email" class="form-control" name="email" id="validationDefault02" value="<?= $client['email'] ?>" required>
        </div>
        <div class="col-md-12">
            <label for="validationDefault02" class="form-label">address</label>
            <input type="text" class="form-control" name="address" id="validationDefault02" value="<?= $client['address'] ?>" required>
        </div>
        <div class="col-12">
            <button class="btn btn-primary" name="update" type="submit">Submit form</button>
        </div>
    </form>
    <?php
        }
    ?>
</div>


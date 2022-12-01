<div class="col-12 col-sm-12 mt-5">
    <h2>Cadastro de Clientes</h2>
    <form class="row g-3" method="POST" action="<?=base_url('admin/registerClients')?>">
        <div class="col-md-12">
            <label for="validationDefault01" class="form-label">Nome do Cliente</label>
            <input type="text" class="form-control" name="name" id="validationDefault01" required>
        </div>
        <div class="col-md-12">
            <label for="validationDefault02" class="form-label">Telefone</label>
            <input type="text" class="form-control" name="phone" id="validationDefault02" required>
        </div>
        <div class="col-md-12">
            <label for="validationDefault02" class="form-label">email</label>
            <input type="email" class="form-control" name="email" id="validationDefault02" required>
        </div>
        <div class="col-md-12">
            <label for="validationDefault02" class="form-label">address</label>
            <input type="text" class="form-control" name="address" id="validationDefault02" required>
        </div>
        <div class="col-12">
            <button class="btn btn-primary" name="submit" type="submit">Submit form</button>
        </div>
    </form>
</div>
<?php 
    $session = \Config\Services::session(); 
     if ($session->has('message')) { 
?>
       <div class="container-fluid fixed-bottom ">
           <div class="row">
               <div class="col-12 col-sm-12 alert alert-success fade show text-center p-4" tabindex="-10" role="alert">
                   <strong>Cliente Cadastrado</strong>
                   <button type="button" class="btn-close float-end" data-bs-dismiss="alert" aria-label="Close"></button>
               </div>
           </div>
       </div>

<?php   
}
$session->remove('message');
?>



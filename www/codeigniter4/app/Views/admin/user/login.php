<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Construtora LTDA</title>


    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <header class="container-fluid bg-primary py-5">
        <h1 class="text-white m-4 mt-0">Login</h1>
    </header>

    <section class="container py-5">
        <div class="row">
            <div class="col-12 col-sm-6 offset-sm-3">
                <div class="text-center">
                    <h3>Login do Sistema</h3>
                </div>
                <div>
                    <form action="<?=base_url('admin/validateLogin')?>" class="row g-3 needs-validation" method=POST>
                        <div class="col-md-12">
                            <label for="validationTooltip01" class="form-label">Login</label>
                            <input type="text" name="login" class="form-control" id="validationTooltip01" required>
                        </div>
                        <div class="col-md-12">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-12">
                                <input type="password" name="password" class="form-control" id="inputPassword" required>
                            </div>
                        </div>
                        <div class="col-12 mt-4">
                            <div class="row">
                                <div class="col-6 col-sm-6">
                                    <button class="btn btn-primary" type="submit">Submit form</button>
                                </div>
                                <div class="col-6 col-sm-6 d-flex justify-content-end align-items-center">
                                    <a class="nav nav-link" href="#">Cadastre <i class="bi bi-arrow-right-short" style="font-size: 1.3em;"></i></a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <?php if (isset($_SESSION['messageInvalidPassword'])) { ?>
        <div class="container-fluid messageInvalid  ">
            <div class="row">
                <div class="col-12 col-sm-12 alert alert-danger fade show text-center fixed-bottom p-4" tabindex="-10" role="alert">
                    <strong>Senha inválida</strong>
                    <button type="button" class="btn-close float-end" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        </div>
    <?php
        unset($_SESSION['messageInvalidPassword']);
    } ?>

    <?php if (isset($_SESSION['messageInvalidNameAndPassword'])) { ?>
        <div class="container-fluid" id="messageinvalid">
            <div class="row">
                <div class="col-12 col-sm-12 alert alert-danger fade show text-center fixed-bottom p-4" tabindex="-10" role="alert">
                    <strong>Senha ou Usuário inválido</strong>
                    <button type="button" class="btn-close float-end" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        </div>

    <?php
        unset($_SESSION['messageInvalidNameAndPassword']);
    }
    ?>
</body>

</html>
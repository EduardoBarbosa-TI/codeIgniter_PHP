<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu primeiro trabalho PW</title>

    <!-- Bootstrap Group -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Meus elementos-->
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/script.js"></script>

</head>
<body>

    <header class="jumbotron">
        <h1>Cabeçalho do Sistema MVC</h1>
    </header>

    <div class="row">
        <nav class="navbar bg-light col-md-3">
            
            <ul class="navbar-nav">
                <h2>Menu</h2>
                <li class="nav-item">
                    <a id="home" class="nav-link" href="<?=base_url('home')?>">Home</a>
                </li>
                <li class="nav-item">
                    <a id="about" class="nav-link" href="<?=base_url('about')?>">Sobre</a>
                </li>
                <li class="nav-item">
                    <a id="product" class="nav-link" href="<?=base_url('products')?>">Produtos e Serviços</a>
                </li>
                <li class="nav-item">
                    <a id="contact" class="nav-link" href="<?=base_url('contact')?>">Contato</a>
                </li>
        
                <h4>Clientes</h4>
                <li class="nav-item">
                    <a id="" class="nav-link" href="?controller=client&action=register">Cadastro</a>
                </li>
                <li class="nav-item">
                    <a id="" class="nav-link" href="?controller=client&action=listClients">Listar Clientes</a>
                </li>

            </ul>
        </nav>

        <section class="col-md-9">
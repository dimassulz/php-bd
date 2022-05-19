<?php
    require_once 'core/conexao.php';
    require_once 'models/tbMedico.php';

    if(isset($_POST['nome']) && $_POST['crm']){
        //vou mandar para o banco de dados
        $dados = [
            'nu_crm' => $_POST['crm'],
            'no_medico' => $_POST['nome']
        ];

        try{
            insertMedico($conn, $dados);
            echo "<script>alert('Médico Inserido com sucesso!')</script>";
        }catch(Exception $e){
            echo "<script>alert('Ocorreu um erro ao inserir o médico, tente novamente mais tarde!')</script>";
            echo '<script>alert("'.$e->getMessage().' Codigo erro: '.$e->getCode().'")</script>';
        }
    }

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Laboratório de Análises Clinicas - SABON</title>

    <link rel="canonical" href="https://getbootstrap.comhttps://getbootstrap.com/docs/5.0/examples/album/">



    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#7952b3">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


</head>

<body>

    <header>
        <div class="collapse bg-dark" id="navbarHeader">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-md-7 py-4">
                        <h4 class="text-white">Sobre</h4>
                        <p class="text-muted">NOsso laboratorio ....</p>
                    </div>
                    <div class="col-sm-4 offset-md-1 py-4">
                        <h4 class="text-white">Menu</h4>
                        <ul class="list-unstyled">
                            <li><a href="/laboratorio" class="text-white">Home</a></li>
                            <li><a href="/laboratorio/medico.php" class="text-white">Médicos</a></li>
                            <li><a href="/laboratorio/tecnico.php" class="text-white">Técnicos</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a href="#" class="navbar-brand d-flex align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2" viewBox="0 0 24 24">
                        <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z" />
                        <circle cx="12" cy="13" r="4" />
                    </svg>
                    <strong>SABON</strong>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
    </header>

    <main>
        <div class="container">
            <div class="col-md-12 col-lg-12">
                <h3 class="mb-3">Cadastro Médico</h3>
                <form class="needs-validation" method="post" action="/laboratorio/cad_medico.php">
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <label for="firstName" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite um nome" value="" required>
                            <div class="invalid-feedback">
                                Nome é obrigatório
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <label for="lastName" class="form-label">CRM</label>
                            <input type="text" class="form-control" id="crm" name="crm" placeholder="Digite um CRM" value="" required>
                            <div class="invalid-feedback">
                                CRM é obrigatório
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <button class="w-20 btn btn-outline-secondary btn-lg " type="button" onclick="window.location='/laboratorio'">Voltar</button>
                        </div>
                        <div class="col-sm-6">
                            <button class="w-20 btn btn-primary btn-lg" type="submit">Cadastrar</button>
                        </div>
                </form>
            </div>
        </div>

    </main>

    <footer class="text-muted py-5">
        <div class="container">
            <p class="float-end mb-1">
                <a href="#">Back to top</a>
            </p>
            <p class="mb-1">Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
            <p class="mb-0">New to Bootstrap? <a href="/">Visit the homepage</a> or read our <a href="https://getbootstrap.com/docs/5.0/getting-started/introduction/">getting started guide</a>.</p>
        </div>
    </footer>


    <script src="https://getbootstrap.com/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>
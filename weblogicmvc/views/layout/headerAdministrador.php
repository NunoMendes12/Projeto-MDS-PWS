<html>
<head>
    <title><?= APP_NAME ?></title>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <link href="./public/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="./router.php"><?php echo APP_NAME ?></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="./router.php">Home</a>
                </li>

                <li class="nav-item">
                    <?php
                    if(isset($username))
                    {
                        echo '<a class="nav-link" href="./router.php?c=plano&a=index">Produtos</a>';
                    }
                    ?>
                </li>
                <li class="nav-item">
                    <?php
                    if(isset($username))
                    {
                        echo '<a class="nav-link" href="./router.php?c=plano&a=index">Emitir Fatura</a>';
                    }
                    ?>

                <li class="nav-item">
                    <?php
                    if(isset($username))
                    {
                        echo '<a class="nav-link" href="./router.php?c=plano&a=index">Clientes</a>';
                    }
                    ?>
                </li>
                <li class="nav-item">
                    <?php
                    if(isset($username))
                    {
                        echo '<a class="nav-link" href="./router.php?c=plano&a=index">Taxa IVA</a>';
                    }
                    ?>
                </li>
                <li class="nav-item">
                    <?php
                    if(isset($username))
                    {
                        echo '<a class="nav-link" href="./router.php?c=plano&a=index">Empresa</a>';
                    }
                    ?>
                </li>
                <li class="nav-item">
                    <?php
                    if(isset($username))
                    {
                        echo '<a class="nav-link" href="./router.php?c=plano&a=index">Historico das Faturas</a>';
                    }
                    ?>
                </li>
                <li class="nav-item">
                    <?php
                    if(isset($username))
                    {
                        echo '<a class="nav-link" href="./router.php?c=plano&a=index">Alterar Dados</a>';
                    }
                    ?>
                </li>
                <li class="nav-item">
                    <?php
                    if(isset($username))
                    {
                        echo '<a class="nav-link" href="./router.php?c=plano&a=index">Criar Utilizadores</a>';
                    }
                    ?>
                </li>
                    <?php
                    if(isset($username))
                    {
                        echo '<a class="nav-link" href="./router.php?c=login&a=logout">Logout('.$username.')</a>';
                    }
                    else
                    {
                        echo '<a class="nav-link" href="./router.php?c=login&a=index">Login</a>';
                    }
                    ?>
                </li>
            </ul>
        </div>
    </div>
</nav>
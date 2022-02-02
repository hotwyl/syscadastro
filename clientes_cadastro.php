<!DOCTYPE html>
<html lang="pt_br">

<head>
    <?php include_once 'includes/head.php' ?>
</head>

<body>
    <header>
        <?php include_once 'includes/header.php' ?>
    </header>

    <main class="container">

        <section class="pt-1">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">DashBoard</a></li>
                    <li class="breadcrumb-item"><a href="clientes.php">Lista Clientes</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Cadastro Cliente</li>
                </ol>
            </nav>

            <section class="d-flex justify-content-evenly py-3">
                <h2 class="text-center">
                    Cadastrar Novo Cliente <i class="fa fa-user-plus"></i>
                </h2>
            </section>

            <section>
                <?php include_once __DIR__.'/includes/clientes_form_cadastro.php' ?>
            </section>

    </main>

    <footer>
        <?php include_once 'includes/footer.php' ?>
    </footer>

    <?php include_once 'includes/body.php' ?>
</body>

</html>
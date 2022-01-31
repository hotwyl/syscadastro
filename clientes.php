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
                    <li class="breadcrumb-item active" aria-current="page">Lista Clientes</li>
                </ol>
            </nav>

            <section class="d-flex justify-content-evenly py-3">
                <h2 class="text-center">
                    Lista de Clientes <i class="fa fa-users"></i>
                </h2>

                <h5 class="text-end">
                    <a href="cadastro_clientes.php" class="btn btn-primary btn-sm">
                        <i class="fa fa-user-plus"></i>
                    </a>
                </h5>
            </section>

            <section>
                <?php include_once 'lista_clientes.php' ?>
            </section>

    </main>

    <footer>
        <?php include_once 'includes/footer.php' ?>
    </footer>

    <?php include_once 'includes/body.php' ?>
</body>

</html>
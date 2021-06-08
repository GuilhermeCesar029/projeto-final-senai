<?php 
//incluindo arquivo de verificação do login
include('verifica_login.php');
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="../css/bulma.min.css" />
</head>
<body>
    <nav class="navbar" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="#">
                <img src="../assets/img/logo.png" width="100" height="28">
            </a>

            <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            </a>
        </div>

        <div id="navbarBasicExample" class="navbar-menu">
            <div class="navbar-start">
            <a class="navbar-item">
                Home
            </a>

            <a class="navbar-item">
                Documentation
            </a>

            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">Mais</a>
                <div class="navbar-dropdown">
                    <a class="navbar-item">----</a>
                    <hr class="navbar-divider">
                    <a class="navbar-item">-----</a>
                </div>
            </div>
            </div>

            <div class="navbar-end">
            <div class="navbar-item">
                <div class="buttons">
                    <div class="navbar-item has-dropdown is-hoverable">
                        <a class="navbar-link"  >
                            <?php echo $_SESSION['usuario']; ?>
                        </a>
                        <div class="navbar-dropdown">
                            <a href="logout.php" class="navbar-item">
                                Sair
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </nav>
    <script src="./js/painel.js"></script>
</body>
</html>
<?php 
//incluindo arquivo de verificação do login
include('../login/verifica_login.php');
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <!-- <nav class="navbar" role="navigation" aria-label="main navigation">
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
                            <a href="../login/logout.php" class="navbar-item">
                                Sair
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </nav> -->

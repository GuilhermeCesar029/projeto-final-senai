
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestão de Clientes</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <nav>
        <div class="nav-wrapper blue dark-5">
        <a href="#" class="brand-logo">
            <img src="../assets/img/logo.png" width="100" height="28">
        </a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="index.php">Home</a></li>
            <li><a href="adicionar.php">Adicionar Cliente</a></li>
            <li>
                <a href="collapsible.html">
                    <!-- Dropdown Trigger -->
                    <a class='dropdown-trigger btn blue dark-3' href='#' data-target='dropdown1'>
                        <?php echo $_SESSION['usuario']; ?>
                    </a>

                    <!-- Dropdown Structure -->
                    <ul id='dropdown1' class='dropdown-content'>
                    <li><a href="../login/logout.php">Sair <i class="material-icons">power_settings_new</i></a></li>
                    </ul>
                </a>
            </li>
        </ul>
        </div>
    </nav>

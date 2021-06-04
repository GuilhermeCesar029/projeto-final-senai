<?php 
//incluindo arquivo de verificação do login
include('verifica_login.php');
?>

<h2>Ola, <?php echo $_SESSION['usuario']; ?></h2>
<h2><a href="logout.php">Sair</a></h2>
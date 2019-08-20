<?php
session_start();
session_destroy();
echo '<p>Vous êtes à présent déconnecté <br />
Cliquez <a href="../index.php">ici</a> pour revenir à la page principale</p>';
?>

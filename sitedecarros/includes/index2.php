<?php 
session_start();
print_r($_SESSION);
if(!iseet($_SESSION['usuario'])
) {
    echo "é necessario fazer o login";

}
echo "<br/><a href='index.php'>pagina1</a>";

?>
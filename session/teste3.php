<?php
//iniciar a session
session_start();

// //imprimir conteudo da session
echo "Conteudo da session";
echo "<br>";
print_r($_SESSION);
echo "</br>";

//encerrar a session
session_unset();
session_destroy();

header(
"location: index.html"
);

?>

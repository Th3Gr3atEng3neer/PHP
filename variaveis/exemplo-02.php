<?php 

$anoNascimento = 1997; //a variavel pode ser declarada assim 
$nome1 = "Gabriel";
$sobrenome = "Ribeiro";
$nomeCompleto = $nome1 ." ". $sobrenome;

echo $nomeCompleto

exit;

echo $nome1;

echo "<br/>";

unset($nome1);

if (isset($nome1)) {
	echo $nome1;
}

?>
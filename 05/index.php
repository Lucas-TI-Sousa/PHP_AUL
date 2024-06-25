<?php
//// ESTRUTURA DE REPETIÇÃO EM PHP

//EXEMPLOS 1: FOR
echo "Exemplo 1: FOR <BR>";
for ($i = 1; $i < 50 ; $i = $i + 2) {
    echo "numero $i <br>";
}
echo "<br>";

//Exemplo 2: WHILE
$contador = 1;

while($contador <= 5) {
    echo "Numero $contador <br>";
    $contador++;
}
"<br>";

// Exemolo 3: DO-WHILE
echo "Exemplo 3: DO-WHILE <BR>";

$cont_do = 1;
do{
    echo "Numero $cont_do <br>";
    $cont_do++;
} while ($cont_do <= );

echo "<br>";

// Exemplo 4: FOREACH
$array_vogais = ["a"; "e"; "i"; "o"; "u"];

foreach($array_vogais as $vogal) {
    echo "vogal: $vogal <br>";
}


?>
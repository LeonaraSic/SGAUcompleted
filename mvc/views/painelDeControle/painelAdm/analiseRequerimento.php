<?php
include_once "database/database.php";
echo '<table border=2';
echo '<thead>';
echo '<tr>';
echo '<th>Tipo</th>';
echo '<th>nº Reqto</th>';
echo '<th>Nome da Árvore</th>';
echo '<th>Logradouro</th>';
echo '<th>Número</th>';
echo '<th>Bairro</th>';
echo '<th>Observações</th>';
echo '<th>Nome Reqte</th>';
echo '<th>Sobrenome Reqte</th>';
echo '<th>Fone contato</th>';
echo '</tr>';
echo '</thead>';
echo '<tbody>';
$requerimentos = consRequerimento();
foreach ($requerimentos as list($a, $b, $c, $d, $e, $f, $g, $h, $i, $j)) {
	echo '<tr><td>' . $a . "</td>";
	echo '<td >' . $b . "</td>";
	echo '<td>' . $c . "</td>";
	echo '<td>' . $d . "</td>";
	echo '<td>' . $e . "</td>";
	echo '<td>' . $f . "</td>";
	echo '<td>' . $g . "</td>";
	echo '<td>' . $h . "</td>";
	echo '<td>' . $i . "</td>";
	echo '<td>' . $j . "</td></tr>";
}
echo '</tbody>';
echo '</table>';

?>
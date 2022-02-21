<?php
$matrix = [];
$matrix[0][0] = 1;
$matrix[0][1] = 14;
$matrix[0][2] = 8;
$matrix[0][3] = 3;
$matrix[1][0] = 6;
$matrix[1][1] = 19;
$matrix[1][2] = 7;
$matrix[1][3] = 2;
$matrix[2][0] = 3;
$matrix[2][1] = 13;
$matrix[2][2] = 4;
$matrix[2][3] = 1;
?>
<table style="border: solid 1px; display: flexbox; font-family: 'Courier New', Courier, monospace;">
    <caption>Alumnos Idiomas</caption>
    <thead>
        <td>
            <!-- Empty area 4 stability -->
        </td>
        <th>Inglés</th>
        <th>Francés</th>
        <th>Alemán</th>
        <th>Ruso</th>
    </thead>
    <tbody style="align-content: center;">
        <tr>
            <th>Nivel Básico</th>
            <?php for ($i = 0; $i < sizeof($matrix[0]); $i++) {
                echo "<td>" . $matrix[0][$i] . "</td>";
            } ?>
        </tr>
        <tr>
            <th>Nivel Medio</th>
            <?php for ($i = 0; $i < sizeof($matrix[1]); $i++) {
                echo "<td>" . $matrix[1][$i] . "</td>";
            } ?>
        </tr>
        <tr>
            <th>Nivel de Perfeccionamiento</th>
            <?php for ($i = 0; $i < sizeof($matrix[2]); $i++) {
                echo "<td>" . $matrix[2][$i] . "</td>";
            } ?>
        </tr>
    </tbody>
</table>
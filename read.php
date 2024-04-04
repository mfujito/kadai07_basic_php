<?php
$file = fopen('kenshindatas.csv', 'r');
echo '<table border="1">
    <tr>
    <th>性別</th>
    <th>年齢</th>
    <th>予算</th>
    </tr>';
while ($kenshindatas_csv = fgetcsv($file)) {
    echo '<tr><td>'.$kenshindatas_csv[0].'</td>';
    echo '<td>'.$kenshindatas_csv[1].'</td>';
    echo '<td>'.$kenshindatas_csv[2].'</td></tr>';
}
echo '</table>';
fclose($file);
?>

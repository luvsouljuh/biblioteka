<h1> Tabela czytelnicy w bazie danych <i> <?= $database ?> </i></h1>
<?php
$query = ' select * from czytelnicy where 1';
$result = mysqli_query($conn, $query);
?>
<p> Zawiera <?= mysqli_num_rows($result) ?> wierszy </p>

<table style="border-collapse: collapse">
    <tr>
        <th>Nr_czytelnika</th>
        <th>Nazwisko</th>
        <th>Imie</th>
        <th>Data_ur</th>
        <th>Ulica</th>
        <th>Kod</th>
        <th>Miasto</th>
        <th>Data_zapisania</th>
        <th>Data_skreslenia</th>
        <th>Nr_legitymacji</th>
        <th>Funkcja</th>
        <th>Plec</th>
    </tr>
    <?php
    if (mysqli_num_rows($result) > 0){
        while ($row = mysqli_fetch_assoc($result)) {
            $plec = $row['Plec'] == 'M' ? 'Mężczyzna' : 'Kobieta';
            echo '<tr> <td>' . $row['Nr_czytelnika'] . '</td><td>'
                . $row['Nazwisko'] . '</td><td>'
                . $row['Imie'] . '</td><td>'
                . $row['Data_ur'] . '</td><td>'
                . $row['Ulica'] . '</td><td>'
                . SUBSTR($row['Kod'], 0, 2) . '-' . SUBSTR($row['Kod'],2,3).  '</td><td>'
                . $row['Miasto'] . '</td><td>'
                . $row['Data_zapisania'] . '</td><td>'
                . $row['Data_skreslenia'] . '</td><td>'
                . $row['Nr_legitymacji'] . '</td><td>'
                . $row['Funkcja'] . '</td><td>'
                . $plec . '</td></tr>';-
        }
    }
    ?>
</table>

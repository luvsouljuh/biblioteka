<h1> Tabela pracownicy w bazie danych <i> <?= $database ?> </i></h1>
<?php
$query = ' select * from pracownicy where 1';
$result = mysqli_query($conn, $query);
?>
<p> Zawiera <?= mysqli_num_rows($result) ?> wierszy </p>

<table style="border-collapse: collapse">
    <tr>
        <th> Id_pracownika</th>
        <th> Nazwisko</th>
        <th> Imie</th>
        <th> Id_stanowisko</th>
        <th> Miasto </th>
        <th> Data_zatrudnienia </th>
        <th> wynagrodzenie</th>
    </tr>
    <?php
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr> <td>' . $row['Id_pracownika'] . '</td><td>'
                . $row['Nazwisko'] . '</td><td>'
                . $row['Imie'] . '</td><td>'
                . $row['Id_stanowisko'] . '</td><td>'
                . $row['Miasto'] . '</td><td>'
                . $row['Data_zatrudnienia'] . '</td><td>'
                . $row['wynagrodzenie'] . '</td></tr>' ;
        }
    }
    ?>
</table>
<h1> Tabela wypożyczenia w bazie danych <i> <?= $database ?> </i></h1>
<?php
$query = ' select * from wypozyczenia where 1';
$result = mysqli_query($conn, $query);
?>
<p> Zawiera <?= mysqli_num_rows($result) ?> wierszy </p>

<table style="border-collapse: collapse">
    <tr>
        <th> Nr_transakcji</th>
        <th> Sygnatura</th>
        <th> Id_pracownika</th>
        <th> Nr_czytelnika</th>
        <th> Data_wypozyczenia </th>
        <th> Data_zwrotu</th>
    </tr>
<?php
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr> <td>' . $row['Nr_transakcji'] . '</td><td>'
            . $row['Sygnatura'] . '</td><td>'
            . $row['Id_pracownika'] . '</td><td>'
            . $row['Nr_czytelnika'] . '</td><td>'
            . $row['Data_wypozyczenia'] . '</td><td>'
            . $row['Data_zwrotu'] . '</td></tr>';
    }
}
?>
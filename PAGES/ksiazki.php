<h1> Tabela książki w bazie danych <i> <?= $database ?> </i></h1>
<?php
$query = ' select * from ksiazki where 1';
$result = mysqli_query($conn, $query);
$session['sebix'] = "śmieszek";
?>
<p> Zawiera <?= mysqli_num_rows($result) ?> wierszy </p>

<table style="border-collapse: collapse">
    <tr>
        <th> Sygnatura</th>
        <th> Tytuł</th>
        <th> Nazwisko</th>
        <th> Imie</th>
        <th> Wydawnictwo</th>
        <th> Miejsce_wyd</th>
        <th> Rok_wyd</th>
        <th> Objetosc_ks</th>
        <th> Cena</th>
        <th> Id_dział</th>
    </tr>
    <?php
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr> <td>' . $row['Sygnatura'] . '</td><td>'
                . $row['Tytul'] . '</td><td>'
                . $row['Nazwisko'] . '</td><td>'
                . $row['Wydawnictwo'] . '</td><td>'
                . $row['Miejsce_wyd'] . '</td><td>'
                . $row['Rok_wyd'] . '</td><td>'
                . $row['Objetosc_ks'] . '</td><td>'
                . $row['Cena'] . '</td><td>'
                . $row['Id_dzial'] . '</td></tr>';
        }
        echo $session['sebix'];
    }
    ?>
</table>
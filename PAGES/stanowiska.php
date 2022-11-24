<h1> Tabela stanowiska w bazie danych <i> <?= $database ?> </i></h1>
<?php
$query = ' select * from stanowiska where 1';
$result = mysqli_query($conn, $query);
?>
<p> Zawiera <?= mysqli_num_rows($result) ?> wierszy </p>

<table style="border-collapse: collapse">
    <tr>
        <th> Id_stanowiska </th>
        <th> Nazwa </th>
        <th></th>
    </tr>
    <?php
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr> <td>'. $row['Id_stanowisko'] .'</td><td>'
                . $row['Nazwa'] . '</td><td>'.'<a href="?page=stanowiska_formularz&stanowisko='.$row['Id_stanowisko'].'">edycja</a></td></tr>';
        }
    }
    ?>
</table>
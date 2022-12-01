<h1> Tabela działy w bazie danych <i> <?= $database ?> </i></h1>
<?php
$query = ' select * from dzialy where 1';
$result = mysqli_query($conn, $query);
$dzialy = array();
?>
<p> Zawiera <?= mysqli_num_rows($result) ?> wierszy </p>

<table style="border-collapse: collapse">
    <tr>
        <th> Id_dzial</th>
        <th> Nazwa</th>
    </tr>
    <?php
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $dzialy[]=$row;
            echo '<tr><td>' . $row['Id_dzial'] . '</td><td>'
                . $row['Nazwa'] . '</td></tr>';
        }
        setcookie("dzialy", json_encode($dzialy), 86400+time(), "/");
    }
    ?>
</table>


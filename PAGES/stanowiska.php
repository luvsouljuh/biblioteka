<?php
$query = 'SELECT * from stanowiska;';
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    echo '<h1>Tabela książki</h1><table><tr><th>Id_stanowisko</th><th>Nazwa</th><th></th></tr>';
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr><td>' . $row['Id_stanowisko'] . '</td><td>'
            . $row['Nazwa'] . '</td><td><a href="?page=stanowiska_formularz&stanowisko='.$row['Id_stanowisko'].'"> 🖊️ </a> <a href="?page=stanowiska_usun&stanowisko='.$row['Id_stanowisko'].'"> ❌</a></td></tr>';
    }
    echo '<tr><td style="text-align: center" colspan="3"><a href="?page=stanowiska_dodaj">Dodaj</a></td></tr></table>';
}
else {
    echo 'brak danych';
}
?>
<pre>
    <?php
    if(isset($_COOKIE['stanowiska']))
    {
        $historyArrays = json_decode($_COOKIE['stanowiska']);
        echo '<p>Historia edycji: <a class="collapse_link" data-collapse-block-id="stanowiska_historia_lista" href="#">&dArr;</a>';
        echo '<ul id="stanowiska_historia_lista" style="display: none;">';
        foreach ($historyArrays as $editNumber => $editArray)
        {
            echo '<li>Edycja nr ' . $editNumber . ': ';
            foreach ($editArray as $key => $value)
            {
                echo $key . ' = ' . $value . ' | ';
            }
            echo '</li>';
        }
        echo '</ul>';
    }
    ?>
</pre>

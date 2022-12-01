<h1>Edycja rekordu tabeli <i>stanowiska</i></h1>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Id_stanowisko = $_POST['Id_stanowisko'] ? intval($_POST['Id_stanowisko']) : 0;
    $Nazwa = $_POST['Nazwa'] ? htmlspecialchars($_POST['Nazwa']) : '';

    $query = sprintf("UPDATE stanowiska SET Nazwa='%s' WHERE Id_stanowisko=%u;",
        mysqli_real_escape_string($conn, $Nazwa),
        mysqli_real_escape_string($conn, $Id_stanowisko)
    );

    if (mysqli_query($conn, $query)) {
        echo "Pomyślnie zaktualizowano";
    } else {
        echo "Błąd w czasie aktualizacji: " . mysqli_error($conn);
    }

} else {
    $Id_stanowisko = isset($_GET['stanowisko']) ? intval($_GET['stanowisko']) : 0;
    $query = sprintf("SELECT * FROM stanowiska WHERE Id_stanowisko=%u;",
        mysqli_real_escape_string($conn, $Id_stanowisko));
    //echo '<pre>'.$query.'</pre>';
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    if ($row) {
    setcookie("ciastko", json_encode($row), 86400+time(), "maty.com");
        ?>
        <form action="?page=stanowiska_formularz" method="post">
            <table>
                <tr>
                    <td><label for="Id_stanowisko">Id_stanowisko</label></td>
                    <td><input id="Id_stanowisko" name="Id_stanowisko" readonly type="text"
                               value="<?= $row['Id_stanowisko'] ?>"></td>
                </tr>
                <tr>
                    <td><label for="Nazwa">Nazwa</label></td>
                    <td><input id="Nazwa" name="Nazwa" type="text" value="<?= $row['Nazwa'] ?>"></td>
                </tr>
                <tr>
                    <td style="text-align: center" colspan="2"><input type="submit" value="Zapisz"></td>
                </tr>
            </table>
        </form>
        <?php
    } else {
        echo 'Zapytanie zwróciło pusty wynik';
    }
}
?>
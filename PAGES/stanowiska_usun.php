<h1>Usuwanie rekordu tabeli <i>stanowiska</i></h1>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $Id_stanowisko = $_POST['Id_stanowisko'] ? intval($_POST['Id_stanowisko']) : 0;
    $query1 = sprintf("DELETE FROM stanowiska WHERE Id_stanowisko=%u;",
        mysqli_real_escape_string($conn, $Id_stanowisko),
    );

    if (mysqli_query($conn,$query1)) {

        echo '<h4 class="success">Pomyślnie usunięto</h4>';
    }
    else {

        echo '<h4 class="failure">Błąd w czasie usuwania: </h4>' . mysqli_error($conn);
    }

}
else {

    $Id_stanowisko = isset($_GET['stanowisko']) ? intval($_GET['stanowisko']) : 0;

    $query2 = sprintf("SELECT * FROM `stanowiska` WHERE Id_stanowisko=%u;", mysqli_real_escape_string($conn, $Id_stanowisko));

    $result = mysqli_query($conn, $query2);

    $row = mysqli_fetch_assoc($result);
    if($row) {
        ?>
        <h4 class="failure">Czy napewno chcesz usunąć?</h4>
        <form action="?page=stanowiska_usun" method="post">
            <table>
                <tr><td><label for="Stanowisko">Id_stanowisko</label></td><td><input type="number" value="<?=$row['Id_stanowisko']?>" name="Id_stanowisko" id="Id_stanowisko" readonly></td></tr>
                <tr><td><label for="Nazwa">Nazwa </label></td><td><input type="text" value="<?=$row['Nazwa']?>" name="Nazwa" id="Nazwa" maxlength="40" readonly></td></tr>
                <tr><td colspan="2" style="text-align: center"><input type="submit" value="Usuń" name="Usun" id="Usun"></td></tr>
            </table>
        </form>
        <?php
    }
    else
    {
        echo 'Zapytanie zwróciło pusty wynik';
    }
}
?>
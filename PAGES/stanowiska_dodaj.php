<h1> Nowe dane tabeli <i> stanowiska </i></h1>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Nazwa = $_POST['Nazwa'] ? htmlspecialchars(trim($_POST['Nazwa'])) : '';

    $query = sprintf("INSERT INTO stanowiska (Nazwa) VALUES ('%s');", mysqli_real_escape_string($conn, $Nazwa)
    );

    if (mysqli_query($conn, $query)) {
        echo '<h4 class="success"> Nowe dane zostały dodane </h4> ';
    } else {
        echo '<h4 class="failure"> Błąd w czasie dodawania: </h4><br>' . mysqli_error($conn);
    }
}

    ?>
    <form action="?page=stanowiska_dodaj" method="post">
        <table>
            <tr>
                <td><label for="Id_stanowisko"> Id_stanowisko </label></td>
                <td><input disabled id="Id_stanowisko" name="Id_stanowisko" type="text"></td>

            </tr>
            <tr>
                <td><label for="Nazwa">Nazwa</label></td>
                <td><input id="Nazwa" maxlength="40" name="Nazwa" required type="text"></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;"><input type="submit" value="Dodaj"></td>
            </tr>
        </table>
    </form>
    <?php
?>

</tr>

</table>
</form>
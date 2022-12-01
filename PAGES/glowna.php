<h1>Strona główna</h1>
<?php
echo "<pre>";
print_r($_COOKIE);
echo "</pre>";
echo "<pre>";
print_r($_SESSION);
echo "</pre>";

if(isset($_COOKIE['ciastko'])){
    echo '<p>Dane z ciastka wyświetlane jako tablica asocjacyjna PHP:</p><pre>';
    print_r(json_decode($_COOKIE['ciastko'], true));
    echo '</pre>';

    echo '<p>Dane z ciastka wyświetlane jak tekst JSON:</p><pre>'.$_COOKIE['ciastko'].'</pre>';

}
if(isset($_COOKIE['dzialy'])) {
    echo '<p>Dane z działów wyświetlane jako tablica asocjacyjna PHP:</p><pre>';
    print_r(json_decode($_COOKIE['dzialy'], true));
    echo '</pre>';
}
?>

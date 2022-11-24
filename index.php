<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="STYLE/layout.css">
    <link rel="stylesheet" href="STYLE/style.css">
    <title>Biblioteka</title>
</head>
<?php require 'INCLUDE/db_connect.php'; ?>
<body>

<div class="sidenav">
    <a class="<?= ($_GET['page'] ?? '') == 'glowna' ? 'active' : '' ?>" href="?page=glowna"> Strona Główna </a>
    <a class="<?= ($_GET['page'] ?? '') == 'test' ? 'active' : '' ?>" href="?page=test"> Test połączenia </a>
    <a class="<?= ($_GET['page'] ?? '') == 'tabele' ? 'active' : '' ?>" href="?page=tabele"> Lista tabel </a>
    <a class="<?= ($_GET['page'] ?? '') == 'czytelnicy' ? 'active' : '' ?>" href="?page=czytelnicy"> Tabela <i> czytelnicy</i> </a>
    <a class="<?= ($_GET['page'] ?? '') == 'dzialy' ? 'active' : '' ?>" href="?page=dzialy"> Tabela <i>działy</i> </a>
    <a class="<?= ($_GET['page'] ?? '') == 'ksiazki' ? 'active' : '' ?>" href="?page=ksiazki"> Tabela <i>książki</i> </a>
    <a class="<?= ($_GET['page'] ?? '') == 'pracownicy' ? 'active' : '' ?>" href="?page=pracownicy"> Tabela <i>pracownicy</i> </a>
    <a class="<?= ($_GET['page'] ?? '') == 'stanowiska' ? 'active' : '' ?>" href="?page=stanowiska"> Tabela <i> stanowiska </i> </a>
    <a class="<?= ($_GET['page'] ?? '') == 'wypozyczenia' ? 'active' : '' ?>" href="?page=wypozyczenia"> Tabela <i> wypożyczenia </i> </a>
</div>

<div class="content">
    <?php
    if (isset($_GET['page']) && file_exists( 'pages/' . $_GET['page'] . '.php'))
    {
        include 'pages/' . $_GET['page'] . '.php';
    }
    ?>
</div>

</body>
<?php require 'INCLUDE/db_disconnect.php'; ?>
</html>
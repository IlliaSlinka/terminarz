<?php
$polaczenie = mysqli_connect('localhost', 'root', '', 'terminarz') or die('Brak polaczenia');
?>

<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl6.css">
    <title>Zadania ma lipiec</title>
</head>

<body>

    <header>

        <section id="lewy_baner">
            <img src="logo1.png" alt="lipiec">
        </section>

        <section id="prawy_baner">
            <h1>TERMINARZ</h1>
            <!-- <p>najbliższe zadania: </p> -->
            <!-- skrypt 1 -->
            <?php
            $wynik1 = mysqli_query($polaczenie, "SELECT DISTINCT zadania.wpis FROM zadania WHERE zadania.wpis != '' && zadania.dataZadania BETWEEN '2020-07-01' AND '2020-07-07'");
            while ($wiersz1 = mysqli_fetch_array($wynik1)) {
                // echo "<p>" . $wiersz1[0] . "</p>" ;
                echo "<p>" . "najbliższe zadania:" . $wiersz1[0] . "; "  . "</p>";
            }
            ?>
        </section>

    </header>

    <main>

        <!-- skrypt 2 -->
        <?php
        $wynik2 = mysqli_query($polaczenie, "SELECT zadania.dataZadania, zadania.wpis FROM zadania WHERE zadania.miesiac = 'lipiec';");
        while ($wiersz2 = mysqli_fetch_array($wynik2)) {
            echo "<section id='kalendarz'>";
            echo "<h6>" . $wiersz2[0] . "</h6>";
            echo "<p>" . $wiersz2[1] . "</p>";
            echo "</section>";
        }
        ?>
    </main>

    <footer>
        <a href="sierpien.html">Terminarz na sierpień</a>
        <p>Stronę wykonał: Illia Slinka</p>
    </footer>

</body>

</html>

<?php
mysqli_close($polaczenie);
?>
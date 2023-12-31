<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wędkowanie</title>
    <link rel="stylesheet" href="styl_1.css">
</head>

<body>
    <div class="container">
        <div class="baner">
            <h1>Portal dla wędkarzy</h1>
        </div>
        <div class="left-top">
            <h3>Ryby zamieszkujące rzeki</h3>
            
            <ol>
                <li>Szczupak pływa w rzece Warta-Obrzycko, Wielkopolskie</li>
                <li>Leszcz pływa w rzece Przemsza k. Okradzinowa, Slaskie</li>
            </ol>
            <?php
            $mysqli = new mysqli('localhost', 'root', '', 'wedkowanie');

            $mysqli -> close();
            ?>
        </div>
        <div class="prawo">
            <img class="obrazek" src="ryba1.jpg" alt="Sum">
            <a href="kweredny.com">Pobierz kwerendy</a>
        </div>
        <div class="left-bot">
            <h3>Ryby drapieżne naszych wód</h3>
            
            <table>
                <tr>
                    <th>L.p.</th>
                    <th>Gatunek</th>
                    <th>Występowanie</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Szczupak</td>
                    <td>stawy, rzeki</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Sandacz</td>
                    <td>stawy, jeziora, rzeki</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Okon</td>
                    <td>rzeki</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Sum</td>
                    <td>jeziora, rzeki</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Dorsz</td>
                    <td>morza, ocenany</td>
                </tr>
            </table>
            <?php
            $mysqli = new mysqli('localhost', 'root', '', 'wedkowanie');

            $mysqli -> close();
            ?>
        </div>
        <div class="stopka">
            <p>Stronę wykonał: Kacper Pestka</p>
        </div>
    </div>
</body>

</html>
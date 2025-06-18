<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juros</title>
</head>

<body>
    <form action="" method="post">
        <label for="">Capital: </label><input type="text" name="cap"><br><br>
        <label for="">Taxa: </label><input type="text" name="tax"><br><br>
        <label for="">Tempo: </label><input type="text" name="tem"><br><br>
        <input type="submit" name="Enviar"> <br>
    </form>
    <table border="1px">
        <tr>
            <th>Tempo</th>
            <th>Montante</th>
            <th>Juros</th>
        </tr>
    <?php
    if (isset($_POST['cap']) and isset($_POST['tax']) and isset($_POST['tem'])) 
    {
        $cap = $_POST['cap'];
        $tax = $_POST['tax'];
        $tem = $_POST['tem'];
        $jur0 = ($cap * $tax) / 100;
        $jur1 = 0;
        for ($i=0; $i <= $tem; $i++) { 
            echo "<tr>";
            echo "<th>$i</th>";
            echo "<th>$cap</th>";
            echo "<th>$jur1</th>";
            echo "</tr>";

            $jur1 += $jur0;
            $cap += $jur0;
        }
    }
    ?>
    </table>
</body>

</html>
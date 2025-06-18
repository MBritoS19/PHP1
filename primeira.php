<!DOCTYPE html>
<html>
<head>
    <title>Primeria</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class='container-fluid'>
        <form action="nome.php">
        <h1>Nome</h1>
            <label for="nome" class="form-label">Escreva o Nome:</label>
            <!-- $_GET['nome'] -->
            <input type="text" id="nome" name="nome" class="form-control"><br>
            <input type="submit" value="Mostrar" name="multiplicacao" class="btn btn-primary">
            <?php
                session_start();
                    

            ?>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
    <link rel="stylesheet" href="/style.css"> 
</head>
<body>

<h2>Crear Joke</h2>
<form action="postJoke.proc.php" method="POST">
    <p><input type="text" id="author" name="author" required placeholder="Author" /></p>
    <p><input type="text" id="joke" name="joke" required placeholder="Joke" /></p>
    <p><input type="text" id="source" name="source" required placeholder="Source" /></p>
    <p><input type="submit" value="Enviar"/></p>
</form>

</body>
</html>

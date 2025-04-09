<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
    <link rel="stylesheet" href="/style.css"> 
</head>
<body>

<h2>Canviar Joke</h2>
<form action="putJoke.proc.php" method="POST">
    <p><input type="text" id="id" name="id" placeholder="ID"></p>    
    <p><input type="text" id="title" name="title" size="20" maxlength="30" required placeholder="Titulo" /></p>
    <p><input type="number" id="price" name="price" required placeholder="Price" /></p>
    <p><input type="text" id="image" name="image" required placeholder="Image" /></p>
    <p><input type="text" id="category" name="category" required placeholder="category" /></p>
    <p><input type="submit" value="Enviar"/></p>
</form>

</body>
</html>
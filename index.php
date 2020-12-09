<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Exercise</title>
</head>
<body>
    <?php

    // Si el método es POST, guarda el nombre en una variable.
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $firstname = $_POST["firstname"];
    } else {
        $firstname = "";
    }

    ?>
    <form method="POST">
        <input 
            type="text" 
            name="firstname" 
            value="<?= /* Asigna el valor de la variable al valor del campo */ $firstname ?>"
        >
        <input type="text" name="lastname">
        <button>Submit</button>
    </form>
    
</body>
</html>
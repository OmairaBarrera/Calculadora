<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <form method="post">
        <input type="text" name="numero1" placeholder="Ingrese el numero">
        <select name="select">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="text" name="numero2" placeholder="Ingrese el numero"><br>
        <input type="submit" value="Enviar">
    </form>
    <?php
        switch ($_POST['select']) {
            case '+':
                echo $_POST['numero1'] + $_POST['numero2'];
                break;
            case '-':
                echo $_POST['numero1'] - $_POST['numero2'];
                break;
            case '*':
                echo $_POST['numero1'] * $_POST['numero2'];
                break;
            case '/':
                echo $_POST['numero1'] / $_POST['numero2'];
                break;
        }
    ?>
</body>
</html>
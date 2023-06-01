<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <?php
        $resul = 0;
        $mensaje = "";
        switch ($_POST['select']) {
            case '+':
                $resul = $_POST['numero1'] + $_POST['numero2'];
                $mensaje = "{$_POST['numero1']} + {$_POST['numero2']} = $resul";
                break;
            case '-':
                $resul = $_POST['numero1'] - $_POST['numero2'];
                break;
            case '*':
                $resul = $_POST['numero1'] * $_POST['numero2'];
                break;
            case '/':
                if($_POST['numero2'] == 0){
                    $resul = 'La division no se puede realizar';
                } else {
                    $resul = $_POST['numero1'] / $_POST['numero2'];
                }
                break;
        }
    ?>
    <section>
        <div class="operaciones">
            <p>
                <?php echo "$mensaje"?>
            </p> 
        </div>
        <div class="resultado">
            <p>
                <?php echo $resul?>
            </p>
        </div>
        <form method="post">
            <input class="num" type="text" name="numero1" placeholder="Numero 1">
            <select name="select">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>
            <input class="num" type="text" name="numero2" placeholder="Numero 2"><br>
            <input class="btn-equal" type="submit" value="=">
        </form>
    </section>
    
</body>
</html>
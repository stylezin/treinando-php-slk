<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Idade</title>
</head>
<body>
    <div>
        <?php
           $aa = $_GET['aa'];
           $an = $_GET['an'];
           $name = $_GET['name'];
           $CPF = $_GET['CPF'];

           $idade = $aa - $an;
           echo "{$name} idade é {$idade}"; <br>
           echo "{$name} Seu CPF é:{$CPF}";
        ?>
        <br>
        <br>
        <a href="formidade.html">Voltar</a>
    </div>
</body>
</html>
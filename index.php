<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST"> 
    <label for="a">Dia</label>
    <input type="text" name="dia"><br><br>
    <label for="a">Mês</label>
    <input type="text" name="mes"><br><br>
    <label for="a">Ano</label>
    <input type="text" name="ano"><br><br>
    <button type="submit">Traduzir</button>
</form>

<?php

$variable = $_POST['dia'];
    switch ($variable) {
        case 'domingo':
            $dia = "Sunday";
            echo "<hr>";
            break;
        case 'segunda':
            $dia = "Monday";
            echo "<hr>";
            break;
        case 'terça':
            $dia = "Tuesday";
            echo "<hr>";
            break;
        case 'quarta':
            $dia = "Wednesday";
            echo "<hr>";
            break;
        case 'quinta':
            $dia = "Thursday";
            echo "<hr>";
            break;
        case 'sexta':
            $dia = "Friday";
            echo "<hr>";
            break;
        case 'sabado':
            $dia = "Saturday";
            echo "<hr>";
            break;
        default:
           echo "Nenhum dia foi informado";
           echo "<br>";
            break;
    }
$mes = $_POST['mes'];
    switch ($mes) {
        case 'janeiro':
            $dia = "January";
            echo "<hr>";
            break;
        case 'fevereiro':
            $mes = "February";
            echo "<hr>";
            break;
        case 'março':
            $mes = "March";
            echo "<hr>";
            break;
        case 'abril':
            $mes = "April";
            echo "<hr>";
            break;
        case 'maio':
            $mes = "May";
            echo "<hr>";
            break;
        case 'junho':
            $mes = "June";
            echo "<hr>";
            break;
        case 'julho':
            $mes = " July";
            echo "<hr>";
            break;
        case 'agosto':
            $mes = "August";
            echo "<hr>";
            break;
        case 'setembro':
            $mes = "September";
            echo "<hr>";
            break;
        case 'outubro':
            $mes = "October";
            echo "<hr>";
            break;
        case 'novembro':
            $mes = "November";
            echo "<hr>";
            break;
        case 'dezembro':
            $mes = "December";
            echo "<hr>";               
            break;
        default:
           echo "Nenhum mes foi informado";
            break;
    }    
$ano = $_POST['ano'];
    echo "$dia - $mes de $ano";

?>
</body>
</html>
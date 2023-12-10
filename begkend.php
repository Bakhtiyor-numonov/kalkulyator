<?php
    declare(strict_types=1);
    ini_set('display_errors', '1');
    error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Калкулятор</title>
</head>
<body>
    <form>
        <input type="text" name="number1"/>
        <select name="mat_amallar">
            <option>+</option>
            <option>-</option>
            <option>*</option>
            <option>/</option>
        </select>
        <input type="text" name="number2"/>
        <button name="mat_=">=</button>
    </form>
</body>
</html>

<?php
    if (!isset($_GET['number1'],$_GET['number2'])){
        print 'Пожалуйста, введите номер';
    } else {
        $num1 = $_GET['number1'];
        $num2 = $_GET['number2'];

        if (ctype_digit($num1) & ctype_digit($num2)){
            if ($_GET['mat_amallar'] == '+') {
                print $num1 + $num2;
            } elseif ($_GET['mat_amallar'] == '-') {
                print $num1 - $num2;
            } elseif ($_GET['mat_amallar'] == '*') {
                print $num1 * $num2;
            } elseif ($_GET['mat_amallar'] == '/') {
                print $num1 / $num2;
            }

        }else{
            print "Вы ввели неверную информацию, здесь введен только номер";
        }
    }


?>


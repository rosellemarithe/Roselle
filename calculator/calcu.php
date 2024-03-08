<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roselle Calculator</title>
    <link href="calcu.css" rel="stylesheet" />
</head>
<body>
<div class="calculator">
        <form action="" method="post">
            <input type="number" name="num1" placeholder="Enter number 1" required><br>
            <select name="operator">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select><br>
            <input type="number" name="num2" placeholder="Enter number 2" required><br>
            <input type="submit" value="Calculate" />
        </form>
        <br>
        <?php
        if(isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['operator'])){
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $operator = $_POST['operator'];
            switch ($operator) {
                case '+':
                    $result = $num1 + $num2;
                    break;
                case '-':
                    $result = $num1 - $num2;
                    break;
                case '*':
                    $result = $num1 * $num2;
                    break;
                case '/':
                    if($num2 != 0) {
                        $result = $num1 / $num2;
                    } else {
                        $result = "Cannot divide by zero!";
                    }
                    break;
                default:
                    $result = "Invalid operator!";
                    break;
            }
            echo "Result: $result";
        }
        ?>
    </div>
</body>
</html>
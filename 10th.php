<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
</head>
<body>
    <h2>Simple Calculator Operations</h2>
    <form method="post">
        First Number: <input type="number" name="num1" value="<?php if(isset($_POST['num1'])) echo $_POST['num1']; ?>"><br><br>
        Second Number: <input type="number" name="num2" value="<?php if(isset($_POST['num2'])) echo $_POST['num2']; ?>"><br><br>
        Result: <input type="text" name="result" value="<?php if(isset($result)) echo $result; ?>" readonly><br><br>
        
        <input type="submit" name="operation" value="+">
        <input type="submit" name="operation" value="-">
        <input type="submit" name="operation" value="*">
        <input type="submit" name="operation" value="/">
    </form>

<?php
if (isset($_POST['operation'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $op = $_POST['operation'];

    switch ($op) {
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
            if ($num2 != 0) {
                $result = $num1 / $num2;
            } else {
                $result = "Division by zero!";
            }
            break;
        default:
            $result = "Invalid Operation";
    }
}
?>
</body>
</html>

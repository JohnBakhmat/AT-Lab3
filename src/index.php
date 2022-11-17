
<html lang="en">
    <link rel="stylesheet" href="./style.css"/>
    <body>
        <div class="wrap">
            <div>
                <h1>PHP Calculator</h1>
                <h2>by Yevhenii Bakhmat</h2>
            </div>
            <form action="index.php" method="post">
                <input type="number" name="a" placeholder="0" value="0" step="any">
                <select name="operation">
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="*">*</option>
                    <option value="/">/</option>
                </select>
                <input type="number" name="b" placeholder="0" value="0" step="any">
                <input type="submit" value="Calculate">
            </form>

            <?php
            require 'Calculator.php';
            $calculator = new Calculator();
               if (isset($_POST['a']) && isset($_POST['b']) && isset($_POST['operation'])) {
                $a = $_POST['a'];
                $b = $_POST['b'];
                $operation = $_POST['operation'];
                try{
                $result = $calculator->evaluate($a, $b, $operation);
                echo "<h2>Result: $result</h2>";
                }
                catch (DivisionByZeroError $e){
                    echo "<h2>Result: Division by zero</h2>";
                }
                catch (Exception $e){
                    echo "<h2>Result: Error</h2>";
                }
                catch( InvalidArgumentException $e){
                    echo "<h2>Result: Invalid argument</h2>";
                }
               }
            ?>
        </div>
    </body>
</html>
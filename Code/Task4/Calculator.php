
<html>
    <head>
        <title>TASK 4</title>
    </head>
    <body>
        <h1>SIMPLE CALCULATOR</h1>
        <form action="" method="post" target="_self">
            <p>Enter First Number <input type="text" name="first"></p>
            <p>Select Operator <select name="operator" placeholder="select operator">
                <option value="add"> + </option>
                <option value="sub"> - </option>
                <option value="mul"> * </option>
                <option value="div"> / </option>    
            </select></p>
            <p>Enter Second Number <input type="text" name="second"></p>
            <input type="Submit" value="Calculate" >    
        </form>
        <?php

$operator = $_POST["operator"];
$first = $_POST["first"];
$second = $_POST["second"];
$answer;

switch ($operator) {
    case 'add':
        $answer= $first + $second;
        echo "Answer of = " .$first  ." + "  .$second ." is " .$answer;
        break;
    case 'sub':
        $answer= $first - $second;
        echo "Answer of = " .$first  ." - "  .$second ." is " .$answer;
        break;
    case 'mul':
        $answer= $first * $second;
        echo "Answer of = " .$first  ." * "  .$second ." is " .$answer;
        break;
    case 'div':
        $answer= $second / $first;
        echo "Answer of = " .$first  ." / "  .$second ." is " .$answer;
        break;
    default:
        echo "invalid operator";
        break;
}?>
    </body>
</html>
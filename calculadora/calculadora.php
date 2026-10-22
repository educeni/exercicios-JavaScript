<?php   
    $v1 = $_GET["a"];
    $v2 = $_GET["b"];
    $operador = $_GET["op"];

    if ($operador == "+") {
        $result = $v1 + $v2;
    } elseif ($operador == "-") {
        $result = $v1 - $v2;
    } elseif ($operador == "*") {
        $result = $v1 * $v2;
    } elseif ($operador == "/") {
        if ($v2 != 0) {
            $result = $v1 / $v2;
        } else {
            echo "Error: Division by zero.";
            exit();
        }
    } else {
        echo "Error: Invalid operator.";
        exit();
    }

    echo $result;
?>
<?php

class Calculator {
    public function calculate($num1, $num2, $operator) {
        switch ($operator) {
            case '+':
                return $num1 + $num2;
            case '-':
                return $num1 - $num2;
            case '*':
                return $num1 * $num2;
            case '/':
                if ($num2 != 0) {
                    return $num1 / $num2;
                } else {
                    return "Cannot divide by zero";
                }
            default:
                return "Invalid operator";
        }
    }
}
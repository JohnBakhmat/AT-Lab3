<?php

class Calculator
{
    public function evaluate($a, $b, $operation): float|int
    {
        if (!is_numeric($a) || !is_numeric($b)) {
            throw new InvalidArgumentException('Invalid argument');
        }

        return match ($operation) {
            '+' => $a + $b,
            '-' => $a - $b,
            '*' => $a * $b,
            '/' => $a / $b,
            default => throw new InvalidArgumentException('Invalid operation'),
        };
    }
}
<?php

array_map(
    function ($arg1, $arg2) use ($var1, $var2) {
        return $arg1 + $arg2 / ($var1 + $var2);
    },
    [
        "complex" => "code",
        "with" => function () {
            return "inconsistent";
        },
        "formatting" => "is",
        "hard" => "to",
        "maintain" => true,
    ]
);

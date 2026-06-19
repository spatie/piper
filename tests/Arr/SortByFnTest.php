<?php

use function Spatie\Piper\Arr\sortBy;

it('sorts values ascending while preserving keys', function () {
    expect([
        ['name' => 'Aaron', 'score' => 43],
        ['name' => 'Sophie', 'score' => 87],
        ['name' => 'Aaron', 'score' => 59],
        ['name' => 'Sophie', 'score' => 62],
    ] |> sortBy([
        fn (array $a, array $b) => $a['name'] <=> $b['name'],
        fn (array $a, array $b) => $b['score'] <=> $a['score'],
    ]))->toBe([
        2 => ['name' => 'Aaron', 'score' => 59],
        0 => ['name' => 'Aaron', 'score' => 43],
        1 => ['name' => 'Sophie', 'score' => 87],
        3 => ['name' => 'Sophie', 'score' => 62],
    ]);
});

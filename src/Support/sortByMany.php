<?php

namespace Spatie\Piper\Support;

function sortByMany(array $items, array $comparisons): array
{
    uasort($items, function (mixed $a, mixed $b) use ($comparisons): int {
        foreach ($comparisons as $comparison) {
            $comparison = normalize($comparison);
            $prop = $comparison[0] ?? null;
            $direction = strtolower((string) ($comparison[1] ?? 'asc'));
            $result = (! is_string($prop) && is_callable($prop))
                ? $prop($a, $b)
                : dataGet($a, $prop) <=> dataGet($b, $prop);

            if ($result !== 0) {
                return $direction === 'desc' ? -$result : $result;
            }
        }

        return 0;
    });

    return $items;
}

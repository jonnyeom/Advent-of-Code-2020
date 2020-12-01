<?php

declare(strict_types=1);

namespace UnleashedTech\AdventOfCode2020;

final class Day01
{
    public function solvePuzzlePart1(array $expenseReport)
    {
        foreach ($expenseReport as $key => $item) {
            $topItem = array_shift($expenseReport);
            $result[] = count($expenseReport);

            $match = $this->findMatch($topItem, $expenseReport);
            if ($match) {
                return $item * $match;
            }
        }

        return false;
    }

    private function findMatch (int $item, array $expenseReport)
    {
        foreach ($expenseReport as $candidate) {
            if ($item + $candidate === 2020)
            {
                return $candidate;
            }
        }

        return false;
    }
}

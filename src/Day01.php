<?php

declare(strict_types=1);

namespace UnleashedTech\AdventOfCode2020;

final class Day01
{
    public function solvePuzzlePart1(array $expenseReport)
    {
        foreach ($expenseReport as $key => $item) {
            $match = $this->findMatch([$key], $item, $expenseReport);
            if ($match) {
                return $item * $match;
            }
        }

        return false;
    }

    public function solvePuzzlePart2(array $expenseReport)
    {
        foreach ($expenseReport as $key => $item) {
            foreach ($expenseReport as $secondKey => $secondItem) {
                if ($key === $secondKey) {
                    continue;
                }

                $match = $this->findMatch([$key, $secondKey], $item + $secondItem, $expenseReport);
                if ($match) {
                    return $item * $secondItem * $match;
                }
            }
        }

        return false;
    }

    private function findMatch (array $invalidKeys, int $item, array $expenseReport)
    {
        foreach ($expenseReport as $candidateKey => $candidate) {
            if (in_array($candidateKey, $invalidKeys, true)) {
                continue;
            }

            if ($item + $candidate === 2020) {
                return $candidate;
            }
        }

        return false;
    }
}

<?php

declare(strict_types=1);

namespace UnleashedTech\AdventOfCode2020;

final class Day03
{
    public function getNumberOfTreesEncountered(array $trees, int $moveRight = 3, int $moveDown = 1)
    {
        $treesEncountered = 0;

        $step = 0;
        $row = 0;
        while (array_key_exists($row, $trees)) {
            $tree = $this->getTreeInPosition($trees[$row], $step*$moveRight);
            if ($tree === '#') {
                $treesEncountered ++;
            }

            $step ++;
            $row += $moveDown;
        }

        return $treesEncountered;
    }

    private function getTreeInPosition($treePattern, $position): string
    {
        $tree = substr($treePattern, $position, 1);
        if (!$tree) {
            return $this->getTreeInPosition($treePattern.$treePattern, $position);
        }

        return $tree;
    }

    public function getAllSlopesMultiplied(array $trees)
    {
        $totalTreesEncountered = 1;
        $slopes = [
            [1, 1],
            [3, 1],
            [5, 1],
            [7, 1],
            [1, 2],
        ];

        foreach ($slopes as $slope) {
            $totalTreesEncountered *= $this->getNumberOfTreesEncountered($trees, $slope[0], $slope[1]);
        }

        return $totalTreesEncountered;
    }
}

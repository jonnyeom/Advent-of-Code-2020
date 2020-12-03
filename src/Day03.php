<?php

declare(strict_types=1);

namespace UnleashedTech\AdventOfCode2020;

final class Day03
{
    public function getNumberOfTreesEncountered(array $trees): int
    {
        $treesEncountered = 0;
        foreach ($trees as $row => $treePattern) {
            $tree = $this->getTreeInPosition($treePattern, $row*3);
            if ($tree === '#') {
                $treesEncountered ++;
            }
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
}

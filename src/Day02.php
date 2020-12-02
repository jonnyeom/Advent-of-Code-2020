<?php

declare(strict_types=1);

namespace UnleashedTech\AdventOfCode2020;

final class Day02
{
    public function getNumberOfValidPasswords(array $passwords): int
    {
        $validPasswords = 0;
        foreach ($passwords as $password) {
            $password = strtolower($password);

            preg_match('/(\d+)-(\d+) (\w): (\w+)/', $password, $results);
            $count = substr_count($results[4], $results[3]);

            if ($results[1] <= $count && $count <= $results[2]) {
                $validPasswords ++;
            }
        }

        return $validPasswords;
    }

    public function getUpdatedNumberOfValidPasswords(array $passwords): int
    {
        $validPasswords = 0;
        foreach ($passwords as $password) {
            $password = strtolower($password);

            preg_match('/(\d+)-(\d+) (\w): (\w+)/', $password, $results);
            $matches = 0;
            if (substr($results[4], (int) $results[1]-1, 1) === $results[3]) {
                $matches++;
            }
            if (substr($results[4], (int) $results[2]-1, 1) === $results[3]) {
                $matches++;
            }

            if ($matches === 1) {
                $validPasswords++;
            }
        }

        return $validPasswords;
    }
}

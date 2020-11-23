<?php

declare(strict_types=1);

namespace UnleashedTech\AdventOfCode2020\Tests;

use PHPUnit\Framework\TestCase;
use UnleashedTech\AdventOfCode2020\Day01;

final class Day01Test extends TestCase
{
    public function testStep1(): void
    {
        $solution = new Day01();

        $input = 'REPLACE ME';

        $this->assertSame('Replace this with the expected solution', $solution->solvePuzzle($input));
    }
}

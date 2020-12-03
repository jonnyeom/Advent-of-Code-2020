<?php

declare(strict_types=1);

namespace UnleashedTech\AdventOfCode2020\Tests;

use PHPUnit\Framework\TestCase;
use UnleashedTech\AdventOfCode2020\Day03;

/**
 * @coversDefaultClass \UnleashedTech\AdventOfCode2020\Day03
 */
final class Day03Test extends TestCase {

    /**
     * @covers ::getNumberOfTreesEncountered
     */
    public function testGetNumberOfTreesEncountered(): void {
        $solution = new Day03();

        self::assertSame(7, $solution->getNumberOfTreesEncountered($this->trees1));
        self::assertSame(247, $solution->getNumberOfTreesEncountered($this->trees2));
    }

    private $trees1 = [
        '..##.........##.........##.........##.........##.........##.......',
        '#...#...#..#...#...#..#...#...#..#...#...#..#...#...#..#...#...#..',
        '.#....#..#..#....#..#..#....#..#..#....#..#..#....#..#..#....#..#.',
        '..#.#...#.#..#.#...#.#..#.#...#.#..#.#...#.#..#.#...#.#..#.#...#.#',
        '.#...##..#..#...##..#..#...##..#..#...##..#..#...##..#..#...##..#.',
        '..#.##.......#.##.......#.##.......#.##.......#.##.......#.##.....',
        '.#.#.#....#.#.#.#....#.#.#.#....#.#.#.#....#.#.#.#....#.#.#.#....#',
        '.#........#.#........#.#........#.#........#.#........#.#........#',
        '#.##...#...#.##...#...#.##...#...#.##...#...#.##...#...#.##...#...',
        '#...##....##...##....##...##....##...##....##...##....##...##....#',
        '.#..#...#.#.#..#...#.#.#..#...#.#.#..#...#.#.#..#...#.#.#..#...#.#',
    ];

    private $trees2 = [
        '.#..........#......#..#.....#..',
        '....#.............#.#....#..#..',
        '.....##...###....#..#.......#..',
        '.#....#..#......#........#.....',
        '.#.........###.#..........##...',
        '...............##........#.....',
        '#..#..........#..##..#....#.#..',
        '....#.##....#..#...#.#....#....',
        '...###...#............#.#......',
        '#.........#..#...............#.',
        '#.#...........#...............#',
        '..#.#......#..###.#...#..##....',
        '.....#..#..#..#............#...',
        '......#.......#.....#....##....',
        '#......#...#.......#.#.#.......',
        '...........##.#.............#..',
        '.#.........#..#.####...........',
        '..#...........#....##..........',
        '#...........#.......#..#.#.....',
        '.....##...#.....#..##..#..#....',
        '#.#..........................#.',
        '##.....#..........#.......##..#',
        '....#..#............#.#.#......',
        '.......#.......#..#............',
        '...#.#..........#..#.....#.....',
        '.....#...##..##.....##........#',
        '.#.....#........##............#',
        '..#....#.#...#.....#.##........',
        '........##.....#......##...##..',
        '......#..................#.....',
        '..##......##.....##...##.......',
        '......#..#...##......##........',
        '.#..#..#.#.....................',
        '.#....#.#...#....#.......##...#',
        '.####.#..##...#.#.#....#...#...',
        '.#....#.....#...#..#.........##',
        '...........#.#####.#.#..##..#..',
        '.#......##...#..###.#.#....#...',
        '...#.....#........#..###...#...',
        '.......#................##.#...',
        '.##...#.#..................#...',
        '..#........#....#..........#..#',
        '..#.........#..................',
        '...#.#..........#.#..##........',
        '...#.##..........##...........#',
        '...........#..#........#.......',
        '.#....#.#...........#....#.##..',
        '.#...#..#............#....#.#..',
        '...#..#...#.........####.#.#...',
        '..#...#...........###..#...##.#',
        '......##...#.#.#....##....#....',
        '#..#.#.....##....#.......#...#.',
        '.#.....#.....#..#..##..........',
        '................#.#.#...##.....',
        '.#.....#............#......#...',
        '...#...#..#.#....######.....#..',
        '..#..........##......##.....#..',
        '......#..#.##...#.#............',
        '....#.......#..#...#..#.#......',
        '#......##.#..#........#.....#..',
        '..#.........#..#.........#.....',
        '..#.........##.......#.#.#..##.',
        '...#....##.................#.#.',
        '...#........##.#.......#.##..##',
        '....#.#...#...#....#...........',
        '.........#....##........#......',
        '...#........#..#.......#...#...',
        '#.......#....#...#...........#.',
        '.......#......#...##...........',
        '.#.#......##.#.......#..#...#..',
        '.#.....##.#...#......#..#......',
        '........#.............#.#..#..#',
        '#...........#....#.....#.##.#.#',
        '................#...#........##',
        '#..#.##..#.....#...##.#........',
        '#.....#.#..##......#.#..#..###.',
        '....#...#.....#................',
        '......#...#..##...........#....',
        '......#.........##.#...#......#',
        '#...#.#.....#..#.#..#..#......#',
        '...#.#..#..#.#........###.#....',
        '..#...#.......#.#.......#......',
        '...#....#.....#.......#......#.',
        '#...........#....#..#..#.......',
        '..........##......##.........##',
        '##............#..#.#...#..#.#..',
        '..#.##....##...##..#...#.......',
        '............##.##..###..#..#...',
        '......#....##...##.........#...',
        '......#..#.#......####..#......',
        '..............#....#..#..##....',
        '...#.#..#...##.#.......#.#.....',
        '...#.#....#.......#..#..#..##..',
        '..........#.........#..........',
        '...#.....#............#.....##.',
        '....#.#......................#.',
        '.........#...#.#...#...........',
        '...#........#..##.....#...#.#..',
        '......##.....#.#..#...###.#...#',
        '#....#..#.#.....#...#..........',
        '.#.##.###.........#..##.#....#.',
        '#.........#....#........#...#..',
        '...........#...............#..#',
        '###....................#....#..',
        '.................#....#.....#..',
        '..........#.........#.......#..',
        '........#..#....#.....##.......',
        '#...##.#...#.#.#............#..',
        '....#.........##.#.#..#...###..',
        '.##..............#...#.....##.#',
        '###...#..................#...#.',
        '.....#..#...#..#...#...........',
        '.#.................#...#..#..#.',
        '.#.........###...#.##......###.',
        '.####............#......#..#...',
        '....#........#..#.#....#..##..#',
        '..#....#.#...#.#.....##....#...',
        '..###..#..#....##....#..#..#...',
        '...#.#.....#.#....#.....#......',
        '.....#..........#.#............',
        '.......#...........#.#..#..#...',
        '......##........#.....#.......#',
        '..#.#.....##............#..##..',
        '....#.#........#...........##..',
        '#......#..##........#.....#....',
        '#...#...###..............##....',
        '#..#........#........#.....##.#',
        '......##.####........#..#....#.',
        '...##..#.##.....#...#...#..#...',
        '#..............###.##..##......',
        '......................#.....#..',
        '.........#.#.......#...##.#....',
        '....#......#..........###..#...',
        '#...####.#.................#..#',
        '##.#....#....#.....##..#....#.#',
        '..#.....#..##.........#.#..#.#.',
        '.....#.....#...................',
        '#....##.#.........###....#.....',
        '#........#.#.......#.#.........',
        '.##.#...#.....#...#.......##.##',
        '#..#.............#.............',
        '..........#.........####.......',
        '..##..............#..#.#.......',
        '..#.#.....#........#......##...',
        '#.#.......#.#................#.',
        '.#...#........#....##....#.##..',
        '.#..#...#...#......#.#.........',
        '......##............#.........#',
        '.#....#.#.#.........#..#..##...',
        '#....#......#.......###........',
        '.......#........##..#...#..###.',
        '#.##..........#..###..#..#.#...',
        '.#..#....#..........#.#.##.....',
        '#..#...#.#...#..#..#.#...#.....',
        '.........#...#.#............#..',
        '#..#.............#......##.##..',
        '...##.......#..................',
        '....#......#...#.....#......#..',
        '.....##..#......#....#....#....',
        '....#...#...#...#.....#........',
        '.#....#........##....#..#.#...#',
        '#.......#..#......#......#...#.',
        '..............#......#......#..',
        '#......#..##...#........#....#.',
        '#..#..#..#.....#..#........#...',
        '#...#.....#...#..........#...##',
        '........#.......#...#.....#.#..',
        '...................##.......#..',
        '.#......#........#.##..#....#..',
        '.....#.....#...#..#..#......#..',
        '........##.#..##.........#....#',
        '.........#.......#.............',
        '............#.###.###..#.#.....',
        '.............#....#...........#',
        '..#.....#.#..##.##........#....',
        '...#....#....#.........#.....#.',
        '.#............#......#.........',
        '..#.#..........##.##......#.#..',
        '....#.........................#',
        '..........##...................',
        '#.......#.#..............#...#.',
        '...##..#..##...##.#..#.#.#.....',
        '...########.#..##....#.........',
        '##.#........##.....#........#..',
        '#.#.....#........#..#....#...#.',
        '..#............#.......###.##.#',
        '#.#............................',
        '...#.#.#....#..........#..#....',
        '..###.#.....#.#..#.............',
        '#........#..........#.#..#.....',
        '...........#..#....#.........#.',
        '..#............#.....#.#.......',
        '#.#............#..#.....#.#.#..',
        '...#...#.......................',
        '.#.#.#...##.............#..#..#',
        '..#.........#..#.....##....##..',
        '.#...#............#.......#..##',
        '....#..#.#.#...####............',
        '#.......#....#..##....##....#..',
        '.....##.#....#.#..#.......#....',
        '...........#.......#....##.#.##',
        '..........#...#....##...#.#....',
        '..#.............#.............#',
        '....#..#.....#....#.#..###.#...',
        '.......#.##.#......#...##...#.#',
        '.#..#.#..#.#.......#....###.#..',
        '#..........##...##.........##..',
        '##..#......##.#.####.#.....#...',
        '....#.#...#........#..##..#.#..',
        '.#.............................',
        '.##..#.#...##.....#....#.....#.',
        '..##.........#......#.........#',
        '.#.#........#...#.#.#....##....',
        '.#.................##.........#',
        '...#...............#....#......',
        '..#...#..#..........###..#...##',
        '..........#..#..........##..#..',
        '...#.............#.##.#...#....',
        '...#...........#...............',
        '......#.........##.#...#...#...',
        '...#.#........#..#.....#..#...#',
        '#.#...#....##...#.....#....#...',
        '#.#.#..#.....#.........#.......',
        '##...........#..####...........',
        '#..........#........###...#..#.',
        '#..#.......#....#......###.....',
        '..#.....#......#.###......##...',
        '...#.##..#............#...#....',
        '.##........#.....#.............',
        '#....#.##..#...........##.#.#..',
        '..#.....#.#....#.......#......#',
        '#..#.......#............#......',
        '#.......##....#...#..#.........',
        '.................#..##.........',
        '..............#..#..#.##.......',
        '#.#.......................#..#.',
        '..#..##...........#....#..#..#.',
        '...#....#.......#.......#....#.',
        '.....#.#..#.#.....#.........#.#',
        '..#.#.........#.....#..........',
        '...#.#.#.......#.#.......#.#..#',
        '...##...#.#.#.....#.....##....#',
        '##.......#.#.#.#.......#...##..',
        '....#.#...........#......#.....',
        '.#.....#........####...........',
        '#......#........#.....#..#..#..',
        '..#..#......#...##.......#....#',
        '#........#..........#.....#.#..',
        '.#...........#.....#.....#.....',
        '..........#..#...#....#....##..',
        '.....#.#..........#.....##..#..',
        '......#.........##.............',
        '..#..#.....##......##........#.',
        '.#.#.#.#..#.#..#.......#.......',
        '#.#...####.#.#....#.#........#.',
        '....#...#.....#......#..##.....',
        '##.........#.........#..#.#..#.',
        '..#.#........#.#........#.##...',
        '#....#......#...#....#.........',
        '.##.............###....###.#...',
        '..##.#.......#...#..#......#...',
        '.....#.##..................#...',
        '.....#.#...#..#................',
        '........#..#..#...........#.#.#',
        '....#.###.....#..#.#.....##..##',
        '....##.#.........#..##.........',
        '.##........#......#..###..#.##.',
        '.........##...............#.##.',
        '..#...............#.#...#..#.#.',
        '....#....##.....#...#..#.....#.',
        '#...#.....................#....',
        '.....#.#............#...##.#.#.',
        '...#......#.......#........##.#',
        '.#.#..#.#....#.##.......##....#',
        '.........#...#..##.........#...',
        '.#...#..#....................#.',
        '.......#...#........#.#..#.#.##',
        '.#.............#......#..#.#...',
        '............##.........#....#.#',
        '#.........##..##...............',
        '.#.#....#.#..#..........##.....',
        '..###...#..#.#.......#..#...##.',
        '.....#....#.#............##.#..',
        '##.....#.#..#..#...............',
        '...##...#......#....#..#..#....',
        '.............#....#..#..##...##',
        '#.......#............#....##..#',
        '..#.##.....#.......#....#....#.',
        '..........#...#.............###',
        '..#....#.#..................#..',
        '#.#...#..#...........#.........',
        '....##..#..##..#..........#....',
        '#...#...#.#....#.##...#.......#',
        '#......##.#...##..#.....#......',
        '....#.......#.#............#...',
        '#....#...........###...........',
        '#..#...#...#......#.#..#.......',
        '...............................',
        '#........##.............#.#....',
        '.............#........#....#.##',
        '........##.####.....##..#......',
        '#.#.#.#.......##....##.....#...',
        '.......#..##..#...#............',
        '..........#...#....#..#.#.#.##.',
        '...#........##....#...#........',
        '#..#.##....#....#........#.....',
        '.##...#.....##...#.............',
        '.#...#..#.#.....#.##.....#.....',
        '...........#.............#...#.',
        '.#..#................#...#..#..',
        '#..........#......##..##....#..',
        '####..#...........#.#....#.....',
        '..#.#.##..#...##........#....##',
        '.#.......##........#.....#.....',
        '............#................#.',
        '.#...#...#.....#.#....#.##..#..',
        '..#.............#.#....#.#.....',
        '..............#...........#....',
        '..............#........#....#..',
        '..........##........#..#...#...',
        '...#.#....#.#....#..#.....#...#',
        '..#......#...........#..#..#.#.',
        '.....##.....#.####....#........',
    ];

}
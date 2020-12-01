<?php

declare(strict_types=1);

namespace UnleashedTech\AdventOfCode2020\Tests;

use PHPUnit\Framework\TestCase;
use UnleashedTech\AdventOfCode2020\Day01;

final class Day01Test extends TestCase {

    private array $expenseReport1 = [
        1721,
        979,
        366,
        299,
        675,
        1456,
    ];

    private array $expenseReport2 = [
        1918,
        1869,
        1821,
        1852,
        1981,
        1987,
        1989,
        1597,
        1634,
        1537,
        1991,
        1603,
        1543,
        1949,
        1879,
        1800,
        1761,
        2010,
        1810,
        1458,
        1755,
        1938,
        1500,
        2005,
        818,
        1493,
        1618,
        1923,
        1283,
        1952,
        1373,
        1605,
        1230,
        1321,
        1873,
        1853,
        1886,
        1372,
        1913,
        1871,
        159,
        733,
        1400,
        1880,
        1462,
        2007,
        1801,
        1982,
        1728,
        1640,
        1442,
        1525,
        1953,
        1791,
        1906,
        1946,
        1641,
        2009,
        1627,
        1935,
        1936,
        1908,
        1826,
        1291,
        1978,
        1884,
        1799,
        1464,
        1538,
        1365,
        1678,
        1872,
        1964,
        1863,
        1388,
        1912,
        1928,
        1471,
        1632,
        1336,
        1396,
        1948,
        1974,
        1331,
        1290,
        1992,
        1096,
        1889,
        1874,
        1341,
        757,
        1351,
        1876,
        1674,
        2002,
        1504,
        1865,
        1469,
        1792,
        1920,
        1925,
        1898,
        1899,
        1435,
        405,
        1488,
        1319,
        1322,
        1749,
        1867,
        1957,
        1944,
        1727,
        1293,
        1739,
        1285,
        1917,
        1897,
        1844,
        1966,
        1921,
        1905,
        1830,
        1484,
        1364,
        1782,
        1415,
        1412,
        1413,
        833,
        1857,
        1370,
        1890,
        1393,
        1262,
        1311,
        2008,
        1545,
        1896,
        1362,
        1862,
        1617,
        1864,
        608,
        1868,
        1689,
        1784,
        1806,
        1976,
        1870,
        1973,
        1993,
        1986,
        1998,
        1414,
        1858,
        1990,
        1841,
        1895,
        1779,
        1850,
        2001,
        1590,
        1902,
        1487,
        943,
        1808,
        782,
        1546,
        2004,
        1656,
        154,
        1661,
        1688,
        1731,
        1466,
        1927,
        1438,
        1387,
        1576,
        1793,
        1797,
        1979,
        1903,
        1638,
        1940,
        1911,
        1301,
        1669,
        1409,
        1578,
        1887,
        1860,
        1619,
        1939,
        1625,
        1941,
        1374,
        1766,
        1407,
    ];

    public function testSolvePuzzlePart1(): void {
        $solution = new Day01();

        $this->assertSame(514579, $solution->solvePuzzlePart1($this->expenseReport1));
        $this->assertSame(858496, $solution->solvePuzzlePart1($this->expenseReport2));
    }

    public function testSolvePuzzlePart2(): void {
        $solution = new Day01();

        $this->assertSame(241861950, $solution->solvePuzzlePart2($this->expenseReport1));
    }
}

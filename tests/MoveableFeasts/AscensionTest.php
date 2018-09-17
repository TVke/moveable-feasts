<?php

declare(strict_types=1);

namespace Tests\MoveableFeasts;

use Carbon\Carbon;

class AscensionTest extends \Tests\BaseTest
{
    public function setUp()
    {
        parent::setUp();
    }

    /**
     * @test
     * @dataProvider ascensionDataProvider
     */
    public function date_is_ascension($year, $month, $date)
    {
        $date = Carbon::createMidnightDate($year, $month, $date);
        $this->assertTrue($date->eq(Carbon::ascension($year)));
    }

    public function ascensionDataProvider()
    {
        return [
            [2018, 5, 10],
            [2019, 5, 30],
            [2020, 5, 21],
            [2025, 5, 29],
        ];
    }
}

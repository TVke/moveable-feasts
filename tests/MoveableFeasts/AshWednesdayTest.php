<?php

namespace Tests\MoveableFeasts;

use Carbon\Carbon;

class AshWednesdayTest extends \Tests\BaseTest
{
    public function setUp()
    {
        parent::setUp();
    }

    /**
     * @test
     * @dataProvider dataProvider
     */
    public function date_is_ash_wednesday($year, $month, $date)
    {
        $date = Carbon::createMidnightDate($year, $month, $date);
        $this->assertTrue($date->eq(Carbon::ashWednesday($year)));
    }

    public function dataProvider()
    {
        return array(
            array(2018, 2, 14),
            array(2019, 3, 6),
            array(2020, 2, 26),
            array(2025, 3, 5)
        );
    }
}

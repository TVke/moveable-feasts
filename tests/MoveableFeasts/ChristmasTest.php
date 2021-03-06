<?php

namespace Tests\MoveableFeasts;

use Carbon\Carbon;

class ChristmasTest extends \Tests\BaseTest
{
    public function setUp()
    {
        parent::setUp();
    }

    /**
     * @test
     * @dataProvider dataProvider
     */
    public function date_is_christmas($year, $month, $date)
    {
        $date = Carbon::createMidnightDate($year, $month, $date);
        $this->assertTrue($date->eq(Carbon::christmas($year)));
    }

    public function dataProvider()
    {
        return array(
            array(2018, 12, 25),
            array(2019, 12, 25),
            array(2020, 12, 25),
            array(2025, 12, 25)
        );
    }

    /**
     * @test
     * @dataProvider adventDataProvider
     */
    public function date_is_advent($year, $month, $date)
    {
        $date = Carbon::createMidnightDate($year, $month, $date);
        $this->assertTrue($date->eq(Carbon::advent($year)));
    }

    public function adventDataProvider()
    {
        return array(
            array(2018, 12, 02),
            array(2019, 12, 01),
            array(2020, 11, 29),
            array(2025, 11, 30)
        );
    }
}

<?php

use App\Jobs\ShippingServiceJob;
use App\Services\ShippingService;

class ShippingServiceTest extends TestCase
{
    /** @test */
    public function 當重量為1時_費用為110()
    {
        /** arrange */

        /** act */
        $weight = 1;
        $actual = App::call(ShippingService::class . '@calculateFee', [
            'weight' => $weight
        ]);

        /** assert */
        $expected = 110;
        $this->assertEquals($expected, $actual);
    }

    /** @test */
    public function 非同步啟動ShippingServiceJob()
    {
        $weight = 1;
        dispatch(new ShippingServiceJob($weight));
    }
}

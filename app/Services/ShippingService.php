<?php

namespace App\Services;

use Log;

class ShippingService
{
    /**
     * 計算運費
     * @param int $weight
     * @return int
     */
    public function calculateFee(int $weight) : int
    {
        $fee = 100 + $weight * 10;
        Log::info('Fee : ' . $fee);

        return $fee;
    }
}
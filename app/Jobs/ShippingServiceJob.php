<?php

namespace App\Jobs;

use App\Services\ShippingService;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class ShippingServiceJob implements ShouldQueue
{
    use InteractsWithQueue, Queueable, SerializesModels;

    /** @var int */
    private $weight;

    /**
     * ShippingServiceJob constructor.
     * @param int $weight
     */
    public function __construct(int $weight)
    {
        $this->weight = $weight;
    }

    /**
     * Execute the job.
     * @param ShippingService $shippingService
     * @return int
     */
    public function handle(ShippingService $shippingService) : int
    {
        return $shippingService->calculateFee($this->weight);
    }
}

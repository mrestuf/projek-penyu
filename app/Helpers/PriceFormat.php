<?php

namespace App\Helpers;

/**
 * Format response.
 */
class PriceFormat
{
    /**
     * Give success response.
     */
    public static function price($amount)
    {
        return 'IDR ' . number_format($amount, 2);
    }
}

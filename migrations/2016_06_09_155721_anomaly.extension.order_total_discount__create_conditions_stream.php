<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class AnomalyExtensionOrderTotalDiscountCreateConditionsStream extends Migration
{

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug' => 'conditions'
    ];

    /**
     * The stream assignments.
     *
     * @var array
     */
    protected $assignments = [
        'type'   => [
            'required' => true,
        ],
        'amount' => [
            'required' => true,
        ],
        'discount' => [
            'required' => true,
        ],
    ];

}

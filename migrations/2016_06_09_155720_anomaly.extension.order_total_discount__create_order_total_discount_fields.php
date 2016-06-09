<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

/**
 * Class AnomalyExtensionOrderTotalDiscountCreateOrderTotalDiscountFields
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 */
class AnomalyExtensionOrderTotalDiscountCreateOrderTotalDiscountFields extends Migration
{

    /**
     * The addon fields.
     *
     * @var array
     */
    protected $fields = [
        'type'     => [
            'type'   => 'anomaly.field_type.select',
            'config' => [
                'options' => [
                    'fixed_amount' => 'anomaly.extension.order_total_discount::field.type.option.fixed_amount',
                    'percentage'   => 'anomaly.extension.order_total_discount::field.type.option.percentage',
                ]
            ]
        ],
        'amount'   => 'anomaly.field_type.decimal',
        'discount' => [
            'type'   => 'anomaly.field_type.relationship',
            'config' => [
                'related' => 'Anomaly\DiscountsModule\Discount\DiscountModel'
            ]
        ],
    ];

}

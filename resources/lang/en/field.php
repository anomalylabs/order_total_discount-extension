<?php

return [
    'type'   => [
        'name'         => 'Type',
        'label'        => 'Discount Type',
        'instructions' => 'What type of discount is this?',
        'option'       => [
            'fixed_amount' => '$ Discount',
            'percentage'   => '% Discount',
        ]
    ],
    'amount' => [
        'name'         => 'Amount',
        'label'        => 'Discount Amount',
        'instructions' => 'Specify the discount amount according to the <strong>Discount Type</strong>.',
    ],
];

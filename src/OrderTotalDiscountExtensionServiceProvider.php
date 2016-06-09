<?php namespace Anomaly\OrderTotalDiscountExtension;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;

/**
 * Class OrderTotalDiscountExtensionServiceProvider
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\OrderTotalDiscountExtension
 */
class OrderTotalDiscountExtensionServiceProvider extends AddonServiceProvider
{

    /**
     * The addon singletons.
     *
     * @var array
     */
    protected $singletons = [
        'Anomaly\OrderTotalDiscountExtension\Condition\Contract\ConditionRepositoryInterface' => 'Anomaly\OrderTotalDiscountExtension\Condition\ConditionRepository'
    ];
}

<?php namespace Anomaly\OrderTotalDiscountExtension\Condition\Contract;

use Anomaly\DiscountsModule\Discount\Contract\DiscountInterface;
use Anomaly\Streams\Platform\Entry\Contract\EntryRepositoryInterface;

/**
 * Interface ConditionRepositoryInterface
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\OrderTotalDiscountExtension\Condition\Contract
 */
interface ConditionRepositoryInterface extends EntryRepositoryInterface
{

    /**
     * Find a condition by discount.
     *
     * @param $discount
     * @return null|DiscountInterface
     */
    public function findByDiscount($discount);
}

<?php namespace Anomaly\OrderTotalDiscountExtension\Condition;

use Anomaly\DiscountsModule\Discount\Contract\DiscountInterface;
use Anomaly\OrderTotalDiscountExtension\Condition\Contract\ConditionRepositoryInterface;
use Anomaly\Streams\Platform\Entry\EntryRepository;

/**
 * Class ConditionRepository
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\OrderTotalDiscountExtension\Condition
 */
class ConditionRepository extends EntryRepository implements ConditionRepositoryInterface
{

    /**
     * The entry model.
     *
     * @var ConditionModel
     */
    protected $model;

    /**
     * Create a new ConditionRepository instance.
     *
     * @param ConditionModel $model
     */
    public function __construct(ConditionModel $model)
    {
        $this->model = $model;
    }

    /**
     * Find a condition by discount.
     *
     * @param $discount
     * @return null|DiscountInterface
     */
    public function findByDiscount($discount)
    {
        if ($discount instanceof DiscountInterface) {
            $discount = $discount->getId();
        }

        return $this->model->where('discount_id', $discount)->first();
    }
}

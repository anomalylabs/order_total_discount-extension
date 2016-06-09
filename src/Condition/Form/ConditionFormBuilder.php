<?php namespace Anomaly\OrderTotalDiscountExtension\Condition\Form;

use Anomaly\DiscountsModule\Discount\Contract\DiscountInterface;
use Anomaly\Streams\Platform\Ui\Form\FormBuilder;

/**
 * Class ConditionFormBuilder
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\OrderTotalDiscountExtension\Condition\Form
 */
class ConditionFormBuilder extends FormBuilder
{

    /**
     * The discount instance.
     *
     * @var DiscountInterface
     */
    protected $discount;

    /**
     * The skipped fields.
     *
     * @var array
     */
    protected $skips = [
        'discount'
    ];

    /**
     * Get the discount.
     *
     * @return DiscountInterface
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * Set the discount.
     *
     * @param DiscountInterface $discount
     * @return $this
     */
    public function setDiscount(DiscountInterface $discount)
    {
        $this->discount = $discount;

        return $this;
    }
}

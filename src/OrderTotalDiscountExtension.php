<?php namespace Anomaly\OrderTotalDiscountExtension;

use Anomaly\DiscountsModule\Discount\DiscountExtension;
use Anomaly\DiscountsModule\Discount\Form\DiscountMultipleFormBuilder;
use Anomaly\OrderTotalDiscountExtension\Condition\Command\AddConditionForm;
use Anomaly\Streams\Platform\Addon\Extension\Extension;

/**
 * Class OrderTotalDiscountExtension
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\OrderTotalDiscountExtension
 */
class OrderTotalDiscountExtension extends DiscountExtension
{

    /**
     * This extension provides a
     * discount based on order total.
     *
     * @var null|string
     */
    protected $provides = 'anomaly.module.discounts::discount.order_total';

    /**
     * Integrate with the form.
     *
     * @param DiscountMultipleFormBuilder $builder
     */
    public function integrate(DiscountMultipleFormBuilder $builder)
    {
        $this->dispatch(new AddConditionForm($builder));
    }

}

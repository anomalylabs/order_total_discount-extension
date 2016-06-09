<?php namespace Anomaly\OrderTotalDiscountExtension\Condition\Command;

use Anomaly\DiscountsModule\Discount\Contract\DiscountInterface;
use Anomaly\DiscountsModule\Discount\Form\DiscountMultipleFormBuilder;
use Anomaly\OrderTotalDiscountExtension\Condition\Contract\ConditionRepositoryInterface;
use Anomaly\OrderTotalDiscountExtension\Condition\Form\ConditionFormBuilder;
use Illuminate\Contracts\Bus\SelfHandling;

/**
 * Class AddConditionForm
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\OrderTotalDiscountExtension\Condition\Command
 */
class AddConditionForm implements SelfHandling
{

    /**
     * The discount form.
     *
     * @var DiscountMultipleFormBuilder $builder
     */
    protected $builder;

    /**
     * Create a new AddConditionForm instance.
     *
     * @param DiscountMultipleFormBuilder $builder
     */
    public function __construct(DiscountMultipleFormBuilder $builder)
    {
        $this->builder = $builder;
    }

    /**
     * Handle the command.
     */
    public function handle(ConditionFormBuilder $builder, ConditionRepositoryInterface $conditions)
    {
        /* @var DiscountInterface $discount */
        if ($condition = $this->builder->getChildEntry('discount')) {
            $builder->setEntry($conditions->findByDiscount($condition));
        }

        $this->builder->addForm('condition', $builder);

        $builder->on(
            'saving',
            function () use ($builder) {
                $discount  = $this->builder->getChildFormEntry('discount');
                $condition = $this->builder->getChildFormEntry('condition');

                $condition->setAttribute('discount', $discount);
            }
        );
    }
}

<?php namespace Anomaly\OrderTotalDiscountExtension\Http\Controller\Admin;

use Anomaly\OrderTotalDiscountExtension\Condition\Form\ConditionFormBuilder;
use Anomaly\OrderTotalDiscountExtension\Condition\Table\ConditionTableBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

class ConditionsController extends AdminController
{

    /**
     * Display an index of existing entries.
     *
     * @param ConditionTableBuilder $table
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(ConditionTableBuilder $table)
    {
        return $table->render();
    }

    /**
     * Create a new entry.
     *
     * @param ConditionFormBuilder $form
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(ConditionFormBuilder $form)
    {
        return $form->render();
    }

    /**
     * Edit an existing entry.
     *
     * @param ConditionFormBuilder $form
     * @param        $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function edit(ConditionFormBuilder $form, $id)
    {
        return $form->render($id);
    }
}

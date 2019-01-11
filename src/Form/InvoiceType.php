<?php

namespace App\Form;

use App\Invoice\InvoiceLine;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;

class InvoiceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('lines', CollectionType::class, [
            'entry_type' => InvoiceLineType::class,
            'allow_add' => true
        ])->add('Valider', SubmitType::class);
    }
}

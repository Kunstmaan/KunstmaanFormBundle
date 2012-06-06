<?php

namespace Kunstmaan\FormBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

/**
 * MultiLineTextPagePartAdminType
 */
class MultiLineTextPagePartAdminType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('label', null, array('required' => false))
            ->add('required', 'checkbox', array('required' => false))
            ->add('errormessage_required', 'text', array('required' => false))
            ->add('regex', 'text', array('required' => false))
            ->add('errormessage_regex', 'text', array('required' => false));
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'kunstmaan_formbundle_singlelinetextpageparttype';
    }
}


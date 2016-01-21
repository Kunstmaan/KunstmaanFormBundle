<?php

namespace Kunstmaan\FormBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * This class represents the type for the EmailPagePart
 */
class EmailPagePartAdminType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder The form builder
     * @param array                $options The options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('label', null, array('required' => false))
            ->add('required', CheckboxType::class, array('required' => false))
            ->add('errorMessageRequired', TextType::class, array('required' => false))
            ->add('errorMessageInvalid', TextType::class, array('required' => false));
    }

    /**
     * @return string
     */
    public function getBlockPrefix()
    {
        return 'kunstmaan_formbundle_emailpageparttype';
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array('data_class' => 'Kunstmaan\FormBundle\Entity\PageParts\EmailPagePart'));
    }
}

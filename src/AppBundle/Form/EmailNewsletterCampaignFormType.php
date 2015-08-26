<?php

namespace AppBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * Class EmailNewsletterCampaignFormType
 * @package AppBundle\Form
 */
class EmailNewsletterCampaignFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options = array())
    {
        $builder
            ->add('email', 'entity', array(
                'data_class' => 'AppBundle\Entity\Email'
        ));
    }

    public function getName()
    {
        return 'email_newsletter_campaign_type';
    }
}
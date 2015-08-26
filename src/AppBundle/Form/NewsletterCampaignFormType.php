<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Class NewsletterCampaignFormType
 * @package AppBundle\Form
 */
class NewsletterCampaignFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options = array())
    {
        $builder
            ->add('name')
            ->add('subject')
            ->add('emailNewsletterCampaigns', 'collection', array(
                'type' => new EmailNewsletterCampaignFormType()
            ))
            ->add('save', 'submit');
    }

    /**
     * @param OptionsResolver $optionsResolver
     */
    public function configureOptions(OptionsResolver $optionsResolver)
    {
        $optionsResolver->setDefaults(
            array(
                'csrf_protection' => false,
                'data_class' => 'AppBundle\Entity\NewsletterCampaign'
            )
        );
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'newsletter_campaign_form';
    }
}
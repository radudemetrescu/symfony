<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="emails_newsletter_campaigns")
 *
 * Class EmailNewsletterCampaign
 * @package AppBundle\Entity
 */
class EmailNewsletterCampaign
{
    /**
     * @var int
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(
     *      targetEntity="Email",
     *      inversedBy="emailNewsletterCampaigns"
     * )
     *
     * @var Email
     */
    protected $email;

    /**
     * @ORM\ManyToOne(
     *      targetEntity="NewsletterCampaign",
     *      inversedBy="emailNewsletterCampaigns"
     * )
     * 
     * @var NewsletterCampaign
     */
    protected $newsletterCampaign;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set email
     *
     * @param \AppBundle\Entity\Email $email
     * @return EmailNewsletterCampaign
     */
    public function setEmail(\AppBundle\Entity\Email $email = null)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return \AppBundle\Entity\Email 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set newsletterCampaign
     *
     * @param NewsletterCampaign $newsletterCampaign
     * @return EmailNewsletterCampaign
     */
    public function setNewsletterCampaign(NewsletterCampaign $newsletterCampaign = null)
    {
        $this->newsletterCampaign = $newsletterCampaign;

        return $this;
    }

    /**
     * Get newsletterCampaign
     *
     * @return \AppBundle\Entity\NewsletterCampaign
     */
    public function getNewsletterCampaign()
    {
        return $this->newsletterCampaign;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return (string) $this->getId();
    }
}

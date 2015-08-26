<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="emails")
 *
 * Class Email
 * @package AppBundle\Entity
 */
class Email
{
    /**
     * @var int
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="string")
     */
    protected $value;

    /**
     * @var EmailNewsletterCampaign[]|ArrayCollection|array
     *
     * @ORM\OneToMany(
     *      targetEntity="EmailNewsletterCampaign",
     *      mappedBy="email"
     * )
     *
     * @ORM\JoinColumn(
     *      name="id",
     *      referencedColumnName="email_id"
     * )
     */
    protected $emailNewsletterCampaigns;

    public function __construct()
    {
        $this->emailNewsletterCampaigns = new ArrayCollection();
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @return Email
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param string $value
     *
     * @return Email
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * @return EmailNewsletterCampaign[]|array|ArrayCollection
     */
    public function getEmailNewsletterCampaigns()
    {
        return $this->emailNewsletterCampaigns;
    }

    /**
     * @param EmailNewsletterCampaign[]|array|ArrayCollection $emailNewsletterCampaigns
     * @return Email
     */
    public function setEmailNewsletterCampaigns($emailNewsletterCampaigns)
    {
        $this->emailNewsletterCampaigns = $emailNewsletterCampaigns;
        return $this;
    }

    /**
     * Add emailNewsletterCampaigns
     *
     * @param \AppBundle\Entity\EmailNewsletterCampaign $emailNewsletterCampaigns
     * @return Email
     */
    public function addEmailNewsletterCampaign(\AppBundle\Entity\EmailNewsletterCampaign $emailNewsletterCampaigns)
    {
        $this->emailNewsletterCampaigns[] = $emailNewsletterCampaigns;

        return $this;
    }

    /**
     * Remove emailNewsletterCampaigns
     *
     * @param \AppBundle\Entity\EmailNewsletterCampaign $emailNewsletterCampaigns
     */
    public function removeEmailNewsletterCampaign(\AppBundle\Entity\EmailNewsletterCampaign $emailNewsletterCampaigns)
    {
        $this->emailNewsletterCampaigns->removeElement($emailNewsletterCampaigns);
    }
}

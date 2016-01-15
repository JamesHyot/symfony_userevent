<?php
namespace Centrale\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="event")
 * @ORM\Entity
 */
class Event
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="startdate", type="datetime")
     */
    protected $startdate;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100)
     */    
    protected $name;

    /**
     * @ORM\ManyToOne(targetEntity="Centrale\UserBundle\Entity\User")
     * @var User
     */
    protected $owner;

    /**
     * @var string
     *
     * @ORM\Column(name="token", type="string", length=100)
     */  
    protected $token;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_distributed", type="boolean")
     */    
    protected $is_distributed;

    /**
     * @var string
     *
     * @ORM\Column(name="shared_token", type="string", length=100)
     */      
    protected $shared_token;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Event
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set startdate
     *
     * @param \DateTime $startdate
     *
     * @return Event
     */
    public function setStartDate($startdate)
    {
        $this->startdate = $startdate;

        return $this;
    }

    /**
     * Get startdate
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->startdate;
    }

}
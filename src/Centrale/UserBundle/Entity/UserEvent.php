<?php
namespace Centrale\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="userevent")
 * @ORM\Entity
 */
class UserEvent
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="Centrale\UserBundle\Entity\User")
     * @var User
     */
    protected $user;

    /**
     * @ORM\ManyToOne(targetEntity="Centrale\UserBundle\Entity\Event")
     * @var Event
     */
    protected $event;

    /**
     * @ORM\ManyToOne(targetEntity="Centrale\UserBundle\Entity\User")
     * @var User
     */
    protected $received_user;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }
}
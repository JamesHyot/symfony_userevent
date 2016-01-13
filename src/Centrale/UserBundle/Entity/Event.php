<?php
namespace Centrale\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="fos_user")
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
     * @var \DateTime
     *
     * @ORM\Column(name="startdate", type="datetime")
     */
    protected $startdate;
    protected $name;
    protected $owner;
    protected $token;
    protected $is_distributed;
    protected $shared_token;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }
}
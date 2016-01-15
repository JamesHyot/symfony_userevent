<?php

namespace Centrale\UserBundle\Controller;

use Centrale\UserBundle\Entity\User;
use Centrale\UserBundle\Entity\Event;
use Centrale\UserBundle\Entity\UserEvent;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Util\Debug;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints\DateTime;

class DefaultController extends Controller
{
    /**
     * @Route("/home")
     */
    public function homeAction()
    {
        
        return $this->render('CentraleUserBundle:Default:index.html.twig');
    }

}

<?php

namespace Centrale\UserBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Centrale\UserBundle\Entity\User;

class LoadEventData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $testEvent = new Event();
        $testEvent->setStartDate(date("d/m/Y"));
        $testEvent->setName('TestEvent');
        //$testEvent->setOwner('James');


        $manager->persist($testEvent);
        $manager->flush();

        $this->addReference('test-event', $testEvent);
    }

    public function getOrder()
    {
    	return 2;
    }
}

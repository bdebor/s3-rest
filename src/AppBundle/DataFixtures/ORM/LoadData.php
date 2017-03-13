<?php

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Meeting;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class LoadData implements FixtureInterface, ContainerAwareInterface
{
	/**
	 * @var ContainerInterface
	 */
	private $container;

	public function setContainer(ContainerInterface $container = null)
	{
		$this->container = $container;
	}

	public function load(ObjectManager $manager)
	{

		for ($i = 1; $i <= 10; $i++) {
			$meeting = new Meeting();
			$meeting->setName('meeting '.$i);
			$manager->persist($meeting);
		}

		$manager->flush();
	}
}
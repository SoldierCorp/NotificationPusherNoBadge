<?php

namespace tests\units\SoldierCorp\NotificationPusher\Model;

use mageekguy\atoum as Units;
use SoldierCorp\NotificationPusher\Model\Device as TestedModel;

/**
 * Device.
 *
 * @uses atoum\test
 * @author Cédric Dugat <cedric@dugat.me>
 */
class Device extends Units\Test
{
    public function testConstruct()
    {
        $this->if($object = new TestedModel('t0k3n'))
            ->string($object->getToken())->isEqualTo('t0k3n')
            ->array($object->getParameters())->isEmpty()
        ;

        $this->if($object = new TestedModel('t0k3n', array('param' => 'test')))
            ->string($object->getToken())->isEqualTo('t0k3n')
            ->when($object->setToken('t0k3ns3tt3d'))
            ->string($object->getToken())->isEqualTo('t0k3ns3tt3d')
            ->array($object->getParameters())
                ->hasKey('param')
                ->contains('test')
                ->size
                    ->isEqualTo(1)
        ;
    }
}

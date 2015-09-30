<?php

namespace tests\units\soldiercorp\NotificationPusher\Model;

use mageekguy\atoum as Units;
use soldiercorp\NotificationPusher\Model\Message as TestedModel;

/**
 * Message.
 *
 * @uses atoum\test
 * @author Cédric Dugat <cedric@dugat.me>
 */
class Message extends Units\Test
{
    public function testConstruct()
    {
        $this->if($object = new TestedModel('Test'))
            ->string($object->getText())->isEqualTo('Test')
            ->array($object->getOptions())->isEmpty()
        ;

        $this->if($object = new TestedModel('Test', array('param' => 'test')))
            ->string($object->getText())->isEqualTo('Test')
            ->when($object->setText('Test 2'))
            ->string($object->getText())->isEqualTo('Test 2')
            ->array($object->getOptions())
                ->hasKey('param')
                ->contains('test')
                ->size
                    ->isEqualTo(1)
        ;
    }
}

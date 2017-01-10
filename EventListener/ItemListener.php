<?php

/*
 * This file is part of the current project.
 * 
 * (c) ForeverGlory <http://foreverglory.me/>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Glory\Bundle\OrderBundle\EventListener;

use Doctrine\Common\EventSubscriber;
use Doctrine\ORM\Events;
use Doctrine\Common\Persistence\Event\LifecycleEventArgs;
use Glory\Bundle\OrderBundle\Model\OrderItemInterface;

/**
 * ItemListener
 *
 * @author ForeverGlory <foreverglory@qq.com>
 */
class ItemListener implements EventSubscriber
{

    protected $classNames = [
        'goods' => 'AppBundle\Entity\Goods',
        'course' => 'AppBundle\Entity\CourseSchedule'
    ];

    public function __construct()
    {
        
    }

    public function getSubscribedEvents()
    {
        return [
            Events::postLoad
        ];
    }

    public function postLoad(LifecycleEventArgs $args)
    {
        $object = $args->getObject();
        if ($object instanceof OrderItemInterface) {
            $type = $object->getType();
            if (array_key_exists($type, $this->classNames)) {
                $repository = $args->getObjectManager()->getRepository($this->classNames[$type]);
                $object->setRepository($repository);
            }
        }
    }

}

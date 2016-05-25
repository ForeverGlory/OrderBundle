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

use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Glory\Bundle\OrderBundle\GloryOrderEvents;
use Glory\Bundle\OrderBundle\Event\OrderEvent;

/**
 * @author ForeverGlory <foreverglory@qq.com>
 */
class OrderCreatedListener implements EventSubscriberInterface
{

    protected $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public static function getSubscribedEvents()
    {
        return array(
            GloryOrderEvents::CREATED => 'onOrderCreadted',
        );
    }

    public function onOrderCreadted(OrderEvent $event)
    {
        
    }

}

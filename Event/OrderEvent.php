<?php

/*
 * This file is part of the current project.
 * 
 * (c) ForeverGlory <http://foreverglory.me/>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Glory\Bundle\OrderBundle\Event;

use Symfony\Component\EventDispatcher\Event;
use Glory\Bundle\OrderBundle\Model\OrderInterface;

/**
 * Description of OrderEvent
 *
 * @author ForeverGlory <foreverglory@qq.com>
 */
class OrderEvent extends Event
{

    protected $order;

    public function setOrder(OrderInterface $order)
    {
        $this->order = $order;
        return $this;
    }

    /**
     * @return OrderInterface
     */
    public function getOrder()
    {
        return $this->order;
    }

}

<?php

/*
 * This file is part of the current project.
 * 
 * (c) ForeverGlory <http://foreverglory.me/>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Glory\Bundle\OrderBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Persistence\ObjectRepository;
use Glory\Bundle\OrderBundle\Model\OrderItemInterface;
use Glory\Bundle\OrderBundle\Model\OrderInterface;

/**
 * OrderItem Entity
 * 
 * @ORM\Entity
 * @ORM\Table("order_item")
 * 
 * @author ForeverGlory <foreverglory@qq.com>
 */
class OrderItem implements OrderItemInterface
{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     */
    protected $title;

    /**
     * @ORM\Column(type="string")
     */
    protected $type = 'goods';

    /**
     * @ORM\Column(type="float", precision=10, scale=2)
     */
    protected $price = '0.00';

    /**
     * @ORM\Column(type="integer")
     */
    protected $quantity = 1;

    /**
     * @var float
     *
     * @ORM\Column(type="float", precision=10, scale=2)
     */
    protected $amount = '0.00';

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $status;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $object;

    /**
     * @var OrderInterface
     * @ORM\ManyToOne(targetEntity="Glory\Bundle\OrderBundle\Entity\Order")
     * @ORM\JoinColumn(name="order_id", referencedColumnName="id")
     */
    protected $order;

    /**
     * @var ObjectRepository 
     */
    protected $repository;

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }

    public function getAmount()
    {
        return $this->amount;
    }

    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setRepository($repository)
    {
        $this->repository = $repository;
        return $this;
    }

    public function setObject($object)
    {
        $this->object = $object->getId();
    }

    public function getObject()
    {
        if (!is_object($this->object)) {
            return $this->repository->find($this->object);
        }
    }

    public function setOrder($order)
    {
        $this->order = $order;
        return $this;
    }

    public function getOrder()
    {
        return $this->order;
    }

    public function getOriginal()
    {
        if (!is_object($this->object)) {
            return $this->repository->find($this->object);
        }
    }

}

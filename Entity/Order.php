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
use Glory\Bundle\OrderBundle\Model\Order as BaseOrder;
use Glory\Bundle\OrderBundle\Model\OrderItemInterface;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Order Entity
 * 
 * @ORM\Entity
 * @ORM\Table("orders")
 * 
 * @author ForeverGlory <foreverglory@qq.com>
 */
class Order extends BaseOrder
{

    /**
     * @var integer
     *
     * @ORM\Id
     * @ORM\Column(name="id", type="integer")
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="sn", type="string", length=32, nullable=false)
     */
    protected $sn;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string")
     */
    protected $title;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", nullable=true)
     */
    protected $description;

    /**
     * @var float
     *
     * @ORM\Column(name="price", type="float", precision=10, scale=2)
     */
    protected $price = '0.00';

    /**
     * @var float
     *
     * @ORM\Column(name="amount", type="float", precision=10, scale=2)
     */
    protected $amount = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string")
     */
    protected $status = 'cart';

    /**
     * @var integer
     *
     * @ORM\Column(name="created_time", type="integer")
     */
    protected $createdTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="updated_time", type="integer")
     */
    protected $updatedTime;

    /**
     * @var string
     *
     * @ORM\Column(name="data", type="array")
     */
    protected $data = array();

    /**
     * @ORM\OneToMany(targetEntity="OrderItem", mappedBy="order")
     */
    protected $items = [];

    /**
     * @ORM\ManyToOne(targetEntity="Symfony\Component\Security\Core\User\UserInterface")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    protected $user;

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setSn($sn)
    {
        $this->sn = $sn;
        return $this;
    }

    public function getSn()
    {
        return $this->sn;
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

    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    public function getDescription()
    {
        return $this->description;
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

    public function setCreatedTime($createdTime = 0)
    {
        $this->createdTime = $createdTime? : time();
        return $this;
    }

    public function getCreatedTime()
    {
        return $this->createdTime;
    }

    public function setUpdatedTime($updateTime = 0)
    {
        $this->updatedTime = $updateTime? : time();
        return $this;
    }

    public function getUpdatedTime()
    {
        return $this->updatedTime;
    }

    public function setData($data)
    {
        $this->data = $data;
        return $this;
    }

    public function getData()
    {
        return $this->data;
    }

    public function addItem(OrderItemInterface $item)
    {
        $item->setOrder($this);
        $this->items[] = $item;
    }

    public function setItems($items)
    {
        $this->items = $items;
    }

    public function getItems()
    {
        return $this->items;
    }

    public function setUser(UserInterface $user)
    {
        $this->user = $user;
        return $this;
    }

    /**
     * 
     * @return UserInterface
     */
    public function getUser()
    {
        return $this->user;
    }

}

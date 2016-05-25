<?php

/*
 * This file is part of the current project.
 * 
 * (c) ForeverGlory <http://foreverglory.me/>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Glory\Bundle\OrderBundle\Model;

use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Description of Order
 *
 * @author ForeverGlory <foreverglory@qq.com>
 */
class Order implements OrderInterface
{

    protected $id;
    protected $sn;
    protected $title;
    protected $description;
    protected $status;

    /**
     * 标价
     */
    protected $price;

    /**
     * 实价
     */
    protected $amount;
    protected $createdTime;
    protected $updatedTime;

    /**
     *
     * @var UserInterface 
     */
    protected $user;
    protected $data;

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
        $this->updateTime = $updateTime? : time();
        return $this;
    }

    public function getUpdatedTime()
    {
        return $this->updateTime;
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

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
 *
 * @author ForeverGlory <foreverglory@qq.com>
 */
interface OrderInterface
{

    public function setId($id);

    public function getId();

    public function setSn($sn);

    public function getSn();

    public function setTitle($title);

    public function getTitle();

    public function setDescription($description);

    public function getDescription();

    public function setPrice($price);

    public function getPrice();

    public function setAmount($amount);

    public function getAmount();

    public function setStatus($status);

    public function getStatus();

    public function setCreatedTime($createdTime = 0);

    public function getCreatedTime();

    public function setUpdatedTime($updateTime = 0);

    public function getUpdatedTime();

    public function setData($data);

    public function getData();

    public function setUser(UserInterface $user);

    public function getUser();
}

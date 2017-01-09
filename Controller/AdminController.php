<?php

/*
 * This file is part of the current project.
 * 
 * (c) ForeverGlory <http://foreverglory.me/>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Glory\Bundle\OrderBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AdminController extends Controller
{

    public function indexAction(Request $request)
    {
        $manager = $this->get('glory_order.order_manager');
        $query = $manager->getRepository()
                ->createQueryBuilder('orders')
                ->getQuery();

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
                $query, $request->query->getInt('page', 1), 20
        );

        return $this->render('GloryOrderBundle:Admin:index.html.twig', array(
                    'pagination' => $pagination
        ));
    }

    public function viewAction(Request $request, $id)
    {
        $order = $this->get('glory_order.order_manager')->find($id);
        return $this->render('GloryOrderBundle:Admin:view.html.twig', array(
                    'order' => $order
        ));
    }

}

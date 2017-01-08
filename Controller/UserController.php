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

/**
 * Description of UserController
 *
 * @author ForeverGlory <foreverglory@qq.com>
 */
class UserController extends Controller
{

    public function indexAction(Request $request)
    {
        $user = $this->getUser();
        $criteria = ['user' => $user];
        $list = $this->get('glory_order.order_manager')->getRepository()->findBy($criteria, ['id' => 'desc']);
        return $this->render('GloryOrderBundle:User:index.html.twig', ['list' => $list]);
    }

    public function viewAction(Request $request, $id)
    {
        $order = $this->get('glory_order.order_manager')->getRepository()->find($id);
        if ($order) {
            if ($this->getUser() != $order->getUser()) {
                throw $this->createAccessDeniedException();
            }
            return $this->render('GloryOrderBundle:User:view.html.twig', ['order' => $order]);
        }
        throw $this->createNotFoundException();
    }

    public function createAction(Request $request)
    {
        
    }

    public function processAction(Request $request, $id)
    {
        
    }

    public function cancelAction(Request $request, $id)
    {
        
    }

}

<?php

namespace Glory\Bundle\OrderBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('GloryOrderBundle:Default:index.html.twig');
    }
}

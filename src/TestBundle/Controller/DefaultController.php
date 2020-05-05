<?php

namespace TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@Test/Default/index.html.twig');
    }
    public function logiinAction()
    {
        return $this->render('@Test/Default/logiin.html.twig');
    }
}

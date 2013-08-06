<?php

namespace gipsydanger\messageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('gipsydangermessageBundle:Default:index.html.twig', array('name' => $name));
    }
}

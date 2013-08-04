<?php

namespace gipsydanger\indexBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('gipsydangerindexBundle:Default:index.html.twig', array('name' => $name));
    }
}

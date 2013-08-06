<?php

namespace gipsydanger\peopleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('gipsydangerpeopleBundle:Default:index.html.twig', array('name' => $name));
    }
}

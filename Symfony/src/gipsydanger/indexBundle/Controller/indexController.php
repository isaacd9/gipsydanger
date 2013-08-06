<?php

namespace gipsydanger\indexBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class indexController extends Controller
{
    public function indexAction()
    {
        return $this->render('gipsydangerindexBundle:index:index.html.twig');
    }
}

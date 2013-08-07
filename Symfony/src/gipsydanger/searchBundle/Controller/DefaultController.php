<?php

namespace gipsydanger\searchBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('gipsydangersearchBundle:Default:index.html.twig');
    }
}

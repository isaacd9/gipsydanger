<?php

namespace gipsydanger\peopleBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class profileController extends Controller
{
    public function showAction($username)
    {
          return $this->render('gipsydangerpeopleBundle:profile:profile.html.twig');
    }
}

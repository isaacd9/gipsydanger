<?php

namespace gipsydanger\peopleBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class accountsController extends Controller
{
    public function loginAction()
    {
        return $this->render('gipsydangerpeopleBundle:login:login.html.twig');
    }

    public function signupAction()
    {
        return $this->render('gipsydangerpeopleBundle:join:join.html.twig');
    }
}

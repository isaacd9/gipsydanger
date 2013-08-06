<?php

namespace gipsydanger\peopleBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class profileController extends Controller
{
    public function showAction($username)
    {
          return new Response($username . "'s profile");
//        return $this->render('Login page here');
    }
}

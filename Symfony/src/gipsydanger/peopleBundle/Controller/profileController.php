<?php

namespace gipsydanger\peopleBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class profileController extends Controller
{
    public function showAction($username)
    {
<<<<<<< HEAD
          return new Response($username . "'s profileß");
//        return $this->render('Login page here');
=======
          return $this->render('gipsydangerpeopleBundle:profile:profile.html.twig');
>>>>>>> 1ec2433ffc2f1f52253a8a35c6ce402bcf524e17
    }
}

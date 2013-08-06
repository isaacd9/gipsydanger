<?php

namespace gipsydanger\peopleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class accountsController extends Controller
{
    public function loginAction()
    {
        return $this->render('Login page here');
    }

    public function signupAction()
    {
        return $this->render('Signup page here');
    }
}

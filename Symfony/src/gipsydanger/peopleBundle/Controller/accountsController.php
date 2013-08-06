<?php

namespace gipsydanger\peopleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class accountsController extends Controller
	{
    public function login($name)
    {
        return $this->render('Login page here');
    }

    public function signup()
    {
        return $this->render('signup page here');
    }
}

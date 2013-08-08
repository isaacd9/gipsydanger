<?php

namespace gipsydanger\peopleBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

use gipsydanger\peopleBundle\Model\Users;
use gipsydanger\peopleBundle\Forms\Type\baseUserType;

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

    public function signupFormAction($type)
    {
        $user=new Users();
        $form=$this->createForm(new baseUserType(),$user);

    	switch($type) {
    		case "coach":
    			return $this->render('gipsydangerpeopleBundle:join:coach.html.twig',array('loginForm' => $form->createView()));
    		case "normal":
    			return $this->render('gipsydangerpeopleBundle:join:normal.html.twig');
    		default:
    			throw new exception();
    	}
    }
}

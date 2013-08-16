<?php

namespace gipsydanger\peopleBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use gipsydanger\peopleBundle\Model\Users;
use gipsydanger\peopleBundle\Forms\Type\baseUserType;
use Symfony\Component\Security\Core\Encoder\EncoderFactory;

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

    public function completeRegistrationAction(Request $request)
    {
        $user = new Users();
        $formHandler=$this->createForm(new baseUserType(),$user);

        $request = $this->getRequest();
        if($request->getMethod() === "POST")
        {
            $formHandler->handleRequest($request);
            if($formHandler->isValid())
            {
                $user->setSalt(uniqid(mt_rand(),true));
                $encoderFactory =  $this->get('security.encoder_factory');
                $encoder = $encoderFactory->getEncoder($user);

                $hashpass = $encoder->encodePassword($user->getPassword(),$user->getSalt());
                $user->setPassword($hashpass);
                $user->save();
                return new Response($user->getFname());
            }
        }
    }
}
